<?php include("adminnav.php")?>
<!DOCTYPE html>
<html>
<head>
	<title>Voting</title>
	<style type="text/css">
		.div1
       {
        width:1015px;
        height:500px;
        background-color: #F2BA1B;
        margin-left:260px;
        margin-top: 50px;
        box-sizing:border-box;
        box-shadow:5px 5px 5px black;
        border-radius:10px; 
	</style>
</head>
<body>
<div class="div1"  style="overflow-y:scroll;">
<h1 style="text-align: center;background-color:#4C4A48;color:white;"><u>Verify-Voter</u></h1>

        <table border="1px" width="995" >
        
        <tr style="background-color:#333;color: white;">
            <td>Username</td>
            <td>Name</td>
            <td>Password</td>
            <td>Current-Status</td>
            <td>Set-Status</td>
         
            
        </tr>

        <?php
        
$con=mysqli_connect("127.0.0.1","root","","online_voting");
$query="select registration.user,registration.name,login.pswd,registration.status from registration,login where registration.user=login.user";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
        $user=$row[0];
        $name=$row[1];
        $pswd=$row[2];
        $status=$row[3];
echo"<tr><td>".$user."</td><td>".$name."</td><td>".$pswd."</td><td>".$status."</td>";
if($status == "allowed")
            {
                $str = "disallowed";
            }
            else if($status == "disallowed")
            {
                $str = "allowed";
            }
            else
            {
                $str = "disallowed";
            }   
            echo "<td><a href='setstatus.php?id=".$user."&stat=".$str."'> Set ".$str."</a></td>";
            echo "</tr>";


            }

            ?>
            </table>
            </div>
            <div class="footer"> 
            <h1>Online Voting System&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
            </div>
            </body>
            </html>        

