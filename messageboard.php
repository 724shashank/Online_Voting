<?php include("adminnav.php")?>
<!DOCTYPE html>
<html>
<head>
	<title>Message-Board</title>
	<style type="text/css">
	.input 
		{
			width:250px;
			height:50px;
			font-size:20px;
			font-family: Comic Sans MS;

		}
		textarea
		{
			width:250px;
			height:200px;
			font-size:20px;
			font-family: Comic Sans MS;

		}
		.button
		{
			width:250px;
			height:40px;
			font-size:20px;
			font-family: Comic Sans MS;
			float: left;

		}
		.card
		{
			width:40%;
			height:500px;
			background-color:#F2BA1B;
			margin-left:120px;
			margin-top:20px;
			box-shadow:5px 5px 5px 2px black;
			border:1px solid black;
			border-radius:15px;
		}
		</style>
</head>
<body>
	<center>
		<div class="card">
		<form>
		<table style="margin-top:0px;height:400px;">
	<tr><td colspan="2"style="background-color:#4C4A48;color:white;text-align:center;">Add/Delete Message</td></tr>
	<tr><td colspan="2"></td></tr><tr><td colspan="2"></td></tr>
	<tr><td>Add-Message</td><td><input type="radio"name="opr" value="add"></td></tr>
	<tr><td>Delete-Message</td><td><input type="radio"name="opr"value="delete"></td></tr>
	<tr><td>Message-ID</td><td><input type="number" name="id" class="input"></td></tr>
	<tr><td>Message-Text</td><td><textarea name="msg"></textarea></td></tr>
	<tr><td><input type="submit"class=button></td><td><input type="reset"class=button></td></tr>
		</table>
		</form>
		</div>

<div class="footer"> 
  <h1>Online Voting System&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</center>
</body>
</html>
<?php
if(isset($_REQUEST['opr']))
{
$id=$_REQUEST['id'];
$msg=$_REQUEST['msg'];
$con=mysqli_connect("127.0.0.1","root","","online_voting");
$q1="insert into message(id,msg) values ('$id','$msg')";
$q2="delete from message where id='$id'";
if($_REQUEST["opr"]=="add")
{
	$res=mysqli_query($con,$q1);
	if($res>0)
	{
	    echo"<script>alert('Your message is Submitted')</script>";
	}
	else
	{
	    echo"<script>alert('Error in Submission')</script>";
	}
}
else
{
	$res=mysqli_query($con,$q2);
	if($res>0)
	{
	    echo"<script>alert('Your Message is Deleted')</script>";
	}
	else
	{
	    echo"<script>alert('Error in Deletion')</script>";
	}	
}
}
?>