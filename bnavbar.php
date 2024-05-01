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
  <img src="images/r2v.png" width="350" height="60" >
</div>

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="registration.php">Voter-Registration</a>
  <a href="bresult.php">View-Results</a>
  <a href="bcontactus.php">Contact-Us</a>
  <a href="index.php" style="float:right">Login</a>
</div>