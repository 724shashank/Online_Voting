<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family:Comic Sans MS;";
  padding: 10px;
  background:#FFDEAD;
}

/* Header/Blog Title */
.header {
  padding:30px;
  text-align: center;
  background: #4C4A48;
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
input:focus
  {
  background-color:lightgrey;
  transition:0s;
  color:black;
  box-shadow: 1px 1px 1px white;
  }

/* Change color on hover */
.topnav  a:hover {
  background-color: #ddd;
  color: red;
  font-size:20px;
  
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn 
{   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  background-color:#FFDEAD;
  padding-left: 20px;
}

/* Add a card effect for articles */
.card {
  background-color:#F2BA1B;
  padding: 20px;
  margin-top: 20px;
 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  /*padding:1px;*/
  text-align: center;
  background: #4C4A48;
  /*margin-top: 20px;*/
  height: 90px;
  color:white;

}
/*link color*/
.link
{
  color:white;
  text-decoration:none;
}
.link:hover
{
  color:yellow;
}
.a
{
  color:red;
  text-decoration:none;
}
 .a:hover
{
  color:blue;
}
.input
{
  width:100%;
  height:50px;
  font-size:20px;
  font-family: Comic Sans MS;
}
button
{
  width:50%;
  height:50px;
  background-color: #333;
  color:white;
  font-size:20px;

}
button:hover
{
  background-color: #ddd;
  color: red;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
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
<body>

<div class="header">
  <img src="images/r2v.png" width="350" height="60" >
</div>

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="registration.php">Voter-Registration</a>
  <a href="bresult.php">View-Results</a>
  <a href="bcontactus.php">Contact-Us</a>
  <a href="index.php" style="float:right">Login</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card" style="height:782px;">
      <h2>Welcome To online Voting website !</h2>
      
      <div><img src="images/f.jpg" width="100%" height="200"></div>
      
      <p >The project "Online Voting System" aims at making the voting process easy in cooperative societies. Presently voting is performed using ballot paper and the counting is done manually, hence it consumes a lot of time. There can be possibility of invalid votes. All these make election a tedious task. In our proposed system voting and counting is done with the help of computer. It saves time, avoid error in counting and there will be no invalid votes. It makes the election process easy. </p>
      <p> This project is to develop general purpose "On-Line-Voting" where any one can cast vote but only once after their approval by admin from the comfort of home through the intenet.an online voting is a virtual voting system on the internet where voter can browse the candidate in catalog and select candidate of interest. The selected candidate may be get vote from voter.</p>
      <p> From Voting Team</p> 
          <fieldset style="width:100%;height:225px;border:1px solid black;background-color:#7E0605;color:black;box-shadow:5px 5px 5px 2px black;">
            <ul type="square">
              <li><a href="registration.php" class="link">Click to Register</a></li><br>             
              <li><a href="index.php" class="link">Click to login</a></li><br>
              <li><a href="bresult.php" class="link">Click to Check Results</a></li><br>
              <li><a href="bcontactus.php" class="link">Contact-Us</a></li><br>
            </ul>
            
          </fieldset>
    </div>
    
  </div>
  <div class="rightcolumn">
    <div class="card">
    <center style="background-color:#4C4A48;color:white;"><b>Message-Board</b></center>
      <div style="overflow-y:scroll;height:200px;">
        <ol >
         <?php
$con=mysqli_connect("127.0.0.1","root","","online_voting");
$query="select * from message ";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
echo"<li>".$row['msg']."</li><hr>";
}
?>         
       </ol>
      </div>
      
    </div>

    <div class="card">
      <center><img src="images/l.png" width="100" height="100"></center><br>
      
        <form>
       
      <input type="text" name="user" placeholder="Username" class="input"><br><br>
      <input type="password" name="pswd" placeholder="Password"class="input"><br><br>
      <select name="utype" class="input">
                <option value=voter>Voter</option>
      </select><br><br>
      <center><button name="login">Login</button></center>
         </form>
         <center><h4>Not Registor ? <a href="registration.php"class="a">Click here</a></h4></center>
        </div>
      
    </div>
     </div>
    
<div class="footer"> 
  <h1>Online Voting System&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
  
</body>
</html>
<?php
if(isset($_REQUEST['login']))
{
$user=$_REQUEST['user'];
$pswd=$_REQUEST['pswd'];
$utype=$_REQUEST['utype'];
$con=mysqli_connect("127.0.0.1","root","","online_voting");
$q1="select user from login where user='$user' AND pswd='$pswd' AND utype='voter'";
$res=mysqli_query($con,$q1);
if($row=mysqli_fetch_array($res))
{
  session_start();
  $_SESSION['user']=$user;
  header("location:voterhome.php");
}
else
{
  header("location:index.php?error=invalid Username or Password");
}
}
?>
