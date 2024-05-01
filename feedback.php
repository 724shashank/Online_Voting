<?php include("navbar.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Feedback</title>
	<style type="text/css">
		body
		{
			background-color:#FFDEAD;
		}

		.input
     {
        margin-top:10px;
        margin-left: 20px;
        height: 40px;
        width: 350px;
        font-size: 20px;
       font-family:Comic Sans MS;

    }
    .textarea
     {
        margin-left: 20px;
        height: 300px;
        width: 352px;
        font-size: 20px;
        font-family:Comic Sans MS;

    }
    .button
    {
    margin-left:24px;
    height: 40px;
    width: 350px;
    font-size: 20px;
   font-family:Comic Sans MS;
    }
    .button:hover
    {
      background-color: #4C4A48;
      color: white;
    }
	</style>
</head>
<body>


<div class="div1" id="grad1">
        <form>
                <center><img src="images/f4.png" width="200" height="80"></center>
                <input type="text" name="subject" placeholder="Enter-Subject" class="input"><br><br>
                <textarea placeholder="Message" class="textarea" name="message"></textarea><br><br>
                <input type="submit" name=submit class="button"><br><br><input type="reset" class="button">
        
        </form>
		</div>
		<div class="footer"> 
<h1>Online Voting System&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>
<?php
if(isset($_REQUEST['submit']))
{
session_start();
$user=$_SESSION['user'];
$sub=$_REQUEST['subject'];
$msg=$_REQUEST['message'];
$con=mysqli_connect("127.0.0.1","root","","online_voting");
$sql="insert into feedback(user,date,subject,message) values ('$user',curdate(),'$sub','$msg')";
$res=mysqli_query($con,$sql);
if($res>0)
{
    echo"<script>alert('Your Feedback is Submitted')</script>";
}
else
{
    echo"<script>alert('Error in Submission')</script>";
}
}
?>