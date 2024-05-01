<?php include("navbar.php")?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
{	
  box-sizing: border-box;
}
body
{
  font-family:Comic Sans MS;";
  padding: 10px;
  background:#FFDEAD;
}
.card {
  background-color:#F2BA1B;
  padding: 20px;
  margin-top: 20px;

 
}
</style>
</head>
<body>
<div class="row">
  <div class="leftcolumn">
    <div class="card" style="width:1500px;height:790px;">
      <?php
      if(isset($_SESSION['user']))
      {
     $con=mysqli_connect("127.0.0.1","root","","online_voting");
     $q1="select * from registration where user='$user'";
     $res=mysqli_query($con,$q1);
     $row=mysqli_fetch_array($res);
     echo"<h2>Welcome ".$row[1]."</h2>";
      }
      else
      {
        echo"<h2>Welcome</h2>";
      }
      ?>
      
      <div><img src="images/f.jpg" width="100%" height="200"></div>
      
      <p >The project "Online Voting System" aims at making the voting process easy in cooperative societies. Presently voting is performed using ballot paper and the counting is done manually, hence it consumes a lot of time. There can be possibility of invalid votes. All these make election a tedious task. In our proposed system voting and counting is done with the help of computer. It saves time, avoid error in counting and there will be no invalid votes. It makes the election process easy. </p>
      <p> This project is to develop general purpose "On-Line-Voting" where any one can cast vote but only once after their approval by admin from the comfort of home through the intenet.an online voting is a virtual voting system on the internet where voter can browse the candidate in catalog and select candidate of interest. The selected candidate may be get vote from voter.</p>
        <p style="text-align: center;font-size:25px;"><b> Message-Board</u></b></p>
        
         <div style="width:100%;height:230px;border:1px solid black;background-color:#7E0605;color:white;box-shadow:5px 5px 5px 2px black;border-radius:10px;overflow-y:scroll;">
          
            <ol> 

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
    
  </div>
  

    
      
    </div>
     </div>
    
<div class="footer"> 
  <h1>Online Voting System&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
  
</body>
</html>

