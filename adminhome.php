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
  
  <a href="adminlogin.php" style="float:right">Logout</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card" style="width:1500px;height:790px;">
      <h2>Welcome Admin</h2>
      
      <div><img src="images/f.jpg" width="100%" height="200"></div>
      
      <p >The project "Online Voting System" aims at making the voting process easy in cooperative societies. Presently voting is performed using ballot paper and the counting is done manually, hence it consumes a lot of time. There can be possibility of invalid votes. All these make election a tedious task. In our proposed system voting and counting is done with the help of computer. It saves time, avoid error in counting and there will be no invalid votes. It makes the election process easy.
      This project is to develop general purpose "On-Line-Voting" where any one can cast vote but only once after their approval by admin from the comfort of home through the intenet.an online voting is a virtual voting system on the internet where voter can browse the candidate in catalog and select candidate of interest. The selected candidate may be get vote from voter. </p>
        <br>
        <p>The concept of election verifiability through cryptographic solutions has emerged in the academic literature to introduce transparency and trust in electronic voting systems.It allows voters and election observers to verify that votes have been recorded, tallied and declared correctly, in a manner independent from the hardware and software running the election. Three aspects of verifiability are considered:individual, universal, and eligibility. Individual verifiability allows a voter to check that her own vote is included in the election outcome, universal verifiability allows voters or election observers to check that the election outcome corresponds to the votes cast, and eligibility verifiability allows voters and observers to check that each vote in the election outcome was cast by a uniquely registered voter.It has been argued political parties that have more support from the less fortunate—who are unfamiliar with the Internet—may suffer in the elections due to e-voting, which tends to increase voting in the upper/middle class. It is unsure as to whether narrowing the digital divide would promote equal voting opportunities for people across various social, economic, and ethnic backgrounds. In the long run, this is contingent not only on internet accessibility but also depends on people's level of familiarity with the Internet.From the initial introduction in 1982, to the country-wide use of EVM in 2004, the Election Commission of India took long and measured steps spanning over a period of nearly two decades, in the matter of electronic voting. In the meanwhile, general elections to various legislative assemblies, and numerous by-elections and two general elections to the Lok Sabha have been conducted using EVMs at all polling stations. The tamper-proof technological soundness of the EVM has been endorsed by a technical experts subcommittee appointed at the initiative of the Parliamentary Committee on Electoral Reforms in 1990.
         </p>
    </div>
    
  </div>
  

    
      
    </div>
     </div>
    
<div class="footer"> 
  <h1>Online Voting System&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
  
</body>
</html>

