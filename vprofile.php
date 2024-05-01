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
  
.footer {
  /*padding:1px;*/
  text-align: center;
  background: #4C4A48;
  /*margin-top: 20px;*/
  height: 90px;
  color:white;
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
</div>
<div class="topnav">
  <a href="voterhome.php">Back</a>
</div>
  <?php
  session_start();
  $user=$_SESSION['user'];
  $con=mysqli_connect("127.0.0.1","root","","online_voting");
  $sql="select * from registration where user='$user'";
  $res=mysqli_query($con,$sql);

  if($row=mysqli_fetch_array($res))
  {
    $user=$row[0];
    $name=$row[1];
    $state=$row[2];
    $city=$row[3];
    $address=$row[4];
    $dob=$row[5];
    $mobile=$row[6];
    $utype=$row[7];
    $status=$row[9];  
    
        echo"<center><table width=600 height=600 style='background-color:#F2BA1B;font-size:20px;margin-top:10px;box-shadow:5px 5px 5px 2px black;'>";
        echo"<tr><td colspan=2 style='text-align:center;font-size:30px;background-color:#4C4A48;color:white;'><b><u>Voter-Profile</u></b></td></tr>";
        echo"<tr><td><b>Email/Username:</b></td><td>$user</td></tr>";
        echo"<tr><td><b>Name:</b></td><td>$name</td></tr>";
        echo"<tr><td><b>State:</b></td><td>$state</td></tr>";
        echo"<tr><td><b>City:</b></td><td>$city</td></tr>";
        echo"<tr><td><b>Address:</b></td><td>$address</td></tr>";
        echo"<tr><td><b>Date-or-Birth:</b></td><td>$dob</td></tr>";
        echo"<tr><td><b>Mobile:</b></td><td>$mobile</td></tr>";
        echo"<tr><td><b>User-Type:</b></td><td>$utype</td></tr>";
        echo"<tr><td><b>Status:</b></td><td>$status</td></tr>";
        echo"</table></center>";  
        }
        ?>
        <div class="footer"> 
<h1>Online Voting System&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>    
</body>
</html>


