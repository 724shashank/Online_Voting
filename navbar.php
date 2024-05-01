<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}
.body {
  font-family:Comic Sans MS;";
  padding: 10px;
background-color:#FFDEAD;
}
/* Header/Blog Title */
.header {
  padding:30px;
  text-align: center;
  background: #4C4A48;
  height:200px;
}

.header h1 {
  font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size:20px;
  }
/* Change color on hover */
.topnav  a:hover {
  background-color: #ddd;
  color: red;
  font-size:20px;
}
input:focus
  {
  background-color:lightgrey;
  transition:0s;
  color:black;
  box-shadow: 1px 1px 1px white;
  }
  
.footer {
  /*padding:1px;*/
  text-align: center;
  background: #4C4A48;
  /*margin-top: 20px;*/
  height: 90px;
  color:white;

        }
button:hover
    {
      background-color: #4C4A48;
      color: white;
    }
      .div1
       {
        width:400px;
        height:600px;
        margin-left:580px; 
       margin-top:40px;
        box-sizing: border-box;
       box-shadow:5px 5px 5px 2px black;
        border-radius:10px; 
        border:1px solid black 
       }
       #grad1 
       {
        background-color: red; /* For browsers that do not support gradients */
        background-image: linear-gradient(to bottom ,#F2BA1B, lightgrey ,#F2BA1B);
       }




/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .topnav a {
    float: none;
    width: 100%;
  }
}
</style>
</head>
<body class="body">
<div class="header">
  <img src="images/r2v.png" width="350" height="60">

<?php
session_start();
if(isset($_SESSION['user']))
{
$user=$_SESSION['user'];
$con=mysqli_connect("127.0.0.1","root","","online_voting");
$q1="select * from registration where user='$user'";
$res=mysqli_query($con,$q1);
if($row=mysqli_fetch_array($res))
{
  $pic=$row[8];

echo"<table>";
echo"<tr><td><a href='vprofile.php' style='text-align:right;'><img src='".$pic."'height='90'width='90' style='border-radius:50px;margin-left:1370px;'></a></td></tr>";
echo "</table>";
}
}
?>

</div>

<div class="topnav">
  <a href="voterhome.php">Home</a>
  <a href="voting.php">Voting</a>
  <a href="result.php">View-Results</a>
  <a href="feedback.php">Feedback</a>
  <a href="contactus.php">Contact-Us</a>
  <a href="logout.php" style="float:right">Logout</a>
</div>
</body>
</html>