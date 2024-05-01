<?php include("adminnav.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Check-Feedback</title>
	<style type="text/css">
		.div1
       {
        width:850px;
        height:500px;
        background-color:#F2BA1B; 
        margin-top: 50px;
        box-sizing:border-box;
        box-shadow:5px 5px 5px black;
        border-radius:10px; 
       }
	</style>
</head>
<body>
<center><div class="div1" style="overflow:scroll">
  
    <center><table style="font-size:20px;text-align:justify;width:850px;"border=1>
           <tr><td colspan="4" style="text-align:center;font-size:50px;background-color: #4C4A48;color:white;height:100px;"><b>**Feedback**</b></td></tr>
            <tr style="background-color:#333;color:white;"><td>Username</td><td>Date</td><td>Subject</td><td>Message</td></tr>
            
       
            <?php
            $con=mysqli_connect("127.0.0.1","root","","online_voting");
$sql="select feedback.user,feedback.date,feedback.subject,feedback.message from feedback"; 
            $res=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($res))
            {
                echo"<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
            }

            ?>
            </table>
	        </center>
	    	</div>
			</center>
			</body>
			</html>