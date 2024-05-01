
<?php include("bnavbar.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style type="text/css">
		body
		{
			background-color:#FFDEAD;
		}
		.card
		{
			width:80%;
			height:650px;
			background-color:#F2BA1B;
			margin-left:160px;
			margin-top:50px;
			box-shadow:5px 5px 5px 2px black;
			border:1px solid black;
			border-radius:15px;
		}
		.box
		{
			font-size:16px;
			background:white;
			width:350px;
			height:50px;
	
		}
		.input 
		{
			width:510px;
			height:50px;
			font-size:20px;
			font-family: Comic Sans MS;

		}
		
		button
		{
			width:250px;
			height:60px;
			font-size:20px;
			font-family: Comic Sans MS;
			float: left;

		}
		

		label:hover
		{
		background-color:#ddd;
		color:red;
		}
		.div
		{
		background-color:white;
		width: 510px;
		height: 50px;
		border:1px solid black;	
		}
		.browse
		{
		color:white;
		float: right;
		font-size:20px;
		height:50px;
		border:1px solid black;
		border-radius:1px;
		background-color: #4C4A48;	
		}
	</style>
	</style>
</head>
<body >

<div class="card">
<center><img src="images/r.png" style="width:100px;height:100px;margin:10px;"></center>
	<form method="post" enctype="multipart/form-data">
	<center><table  width="1050px" height="500px">

			<tr>
				<th ><input type="text" placeholder="Username/Email" class="input" required="required" name="user"></th>

			    <th><input type="text" placeholder="Name"class="input"required="required" name="name"></th>
			</tr>

			<tr>
				<th><input type="password" placeholder="Password" class="input"required="required" name="pswd"></th>

				<th><input type="password" placeholder="Confirm Password" class="input"required="required" name="cpswd"></th>
			</tr>

			<tr>
				<th><input type="Text" placeholder="State" class="input"required="required" name="state"></th>

					<th><input type="text" placeholder="City"class="input" required="required" name="city"></th>
			</tr>

			<tr>
				<th colspan="2"><input type="text" placeholder="Adderess"style="width:1040px;height: 100px;font-size: 20pt;font-family: Comic Sans MS;" required="required" name="addr"></th>
			</tr>
						

			<tr>
				<th><input type="text" placeholder="Date-of-Birth"class="input"required="required"name="dob"></th>

				<th><input type="number" placeholder="Mobile no."class="input"required="required" name="mobile"></th>
			</tr>

			<tr>
				<th><select class="input" name=utype>
					<option>Voter</option>
					</select>
				</th>
		
				<th><div class="div">
				<span style="opacity:0.5;font-size:20px;float:left">Voter-Photo</span>
					<input type="file" id=box style="display:none;" name="photo">
					<label for=box class="browse">Browse</label>
					</div>
				</th>
			</tr>

				<tr>
					<th><button type="submit" name="sub">Submit</button>
					</th>
				</tr>
				</table></center>
	
	</form>
	
</div>
<div class="footer"> 
<h1>Online Voting System&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>

<?php
if(isset($_REQUEST["sub"]))
{
$user=$_REQUEST['user'];
$name=$_REQUEST['name'];
$pswd=$_REQUEST['pswd'];
$state=$_REQUEST['state'];
$city=$_REQUEST['city'];
$address=$_REQUEST['addr'];
$dob=$_REQUEST['dob'];
$mobile=$_REQUEST['mobile'];
$utype=$_REQUEST['utype'];
$filename=$_FILES["photo"]["name"];
$tempname=$_FILES["photo"]["tmp_name"];
$folder="images/".$filename;
move_uploaded_file($tempname,$folder);


$con=mysqli_connect("127.0.0.1","root","","online_voting");
$q1="insert into registration(user,name,state,city,address,dob,mobile,utype,photo,status)values('$user','$name','$state','$city','$address','$dob','$mobile','$utype','$folder','allowed')";
$q2="insert into login(user,pswd,utype)values('$user','$pswd','voter')";
$res1=mysqli_query($con,$q1);
$res2=mysqli_query($con,$q2);
if($res1>0 && $res2>0)
{
	session_start();
	$_SESSION['user']=$user;
 header('location:index.php');
}
}
?>




