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
input:focus
  {
  background-color:lightgrey;
  transition:0s;
  color:black;
  box-shadow: 1px 1px 1px white;
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



/* Add a card effect for articles */
.card {
  background-color:#F2BA1B;
  padding: 20px;
  margin-top: 20px;
  width:80%;
  height:650px;
 
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
.input
{
  width:100%;
  height:50px;
  font-size:20px;
  font-family: Comic Sans MS;
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
  <a href="adminhome.php">Home</a>
  <a href="AddCandidate.php">Add-Candidate</a>
  <a href="verify.php">Verify-Voter</a>
  <a href="voterdetail.php">Voter-Details</a>
  <a href="messageboard.php">Message-Board</a>
  <a href="cfeedback.php">Check-Feedback</a>
  
  <a href="adminlogout.php" style="float:right">Logout</a>
</div>