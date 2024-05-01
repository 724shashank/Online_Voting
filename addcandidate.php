<?php include("adminnav.php")?>
<!DOCTYPE html>
<html>
<head>
	<title>Add-Candidate</title>
	<style type="text/css">
		.div
		{
		background-color:white;
		width: 1040px;
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
		background-color: #4C4A48	
		}
		button
		{
			width:250px;
			height:60px;
			font-size:20px;
			font-family: Comic Sans MS;
			float: left;

		}
	</style>
</head>
<body><center>
<div class="card">
<center><img src="images/r.png" style="width:100px;height:100px;margin:10px;"></center>
	<form method="post" enctype="multipart/form-data">
	<center><table  width="1050px" height="500px">

			<tr>
				<th ><input type="text" placeholder="Candidate-Name" class="input" required="required" name="cname"></th>

			    <th><input type="text" placeholder="Party-Name"class="input"required="required" name="pname"></th>
			</tr>

			<tr>
				<th><input type="text" placeholder="State" class="input"required="required" name="state"></th>

				<th><input type="Area" placeholder="Area" class="input"required="required" name="area"></th>
			</tr>

			<tr>
				<th colspan="2"><input type="text" placeholder="Adderess"style="width:1040px;height: 100px;font-size: 20pt;		font-family: Comic Sans MS;" required="required" name="addr"></th>
			</tr>
				
				<tr>

				<th colspan="2"><div class="div">
				<span style="opacity:0.5;font-size:20px;float:left">Party-Logo</span>
					<input type="file" id=box style="display:none;"name="cphoto">
					<label for=box class="browse">Browse</label>
					</div>
				</th>
			</tr>

				<tr>
					<th colspan="2"><button type="submit" style="margin-left:400px;" name="submit">Submit</button>
					</th>
				</tr>
				</table></center>
	
	</form>
	
</div>
</center>
<div class="footer"> 
<h1>Online Voting System&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>
<?php
if(isset($_REQUEST["submit"]))
{
$cname=$_REQUEST['cname'];
$pname=$_REQUEST['pname'];
$state=$_REQUEST['state'];
$area=$_REQUEST['area'];
$address=$_REQUEST['addr'];
$filename=$_FILES["cphoto"]["name"];
$tempname=$_FILES["cphoto"]["tmp_name"];
$folder="images/".$filename;
move_uploaded_file($tempname,$folder);

$con=mysqli_connect("127.0.0.1","root","","online_voting");
$q1="insert into party(cname,pname,state,area,address,photo)values('$cname','$pname','$state','$area','$address','$folder')";
$res1=mysqli_query($con,$q1);
if($res1>0)
{
header('location:adminhome.php');
}
}
?>