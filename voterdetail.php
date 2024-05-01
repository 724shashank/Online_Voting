<?php include("adminnav.php")?>
   <!DOCTYPE html>
   <html>
   <head>
   	<title>Voter-Detail</title>
   	<style type="text/css">
   		.div1
       {
        width:1100px;
        height:500px;
        background-color: #F2BA1B;
        margin-top: 50px;
        box-sizing:border-box;
        box-shadow:5px 5px 5px black;
        border-radius:10px; 
       }
  
   	</style>
   </head>
   <body>
   
  <center> <div class="div1"  style="overflow-y:scroll">
<h1 style="text-align: center;background-color:#4C4A48;color:white;"><u>Voter-List</u></h1>
    <table border="1px" width="1080" cellspacing="0px" cellpadding="5px">
        
        <tr style="background-color: #333;color: white;">
            <td>Username/Email</td>
            <td>Name</td>
            <td>State</td>
            <td>City</td>
            <td>Address</td>
            <td>Date-of-Birth</td>
            <td>Mobile</td>
            <td>Usertype</td>
            <td>Photo</td>
        </tr>
               
        <?php
$con=mysqli_connect("127.0.0.1","root","","online_voting");
$query="select * from registration ";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
		$user=$row[0];
		$name=$row[1];
		$state=$row[2];
		$city=$row[3];
		$address=$row[4];
		$dob=$row[5];
		$mobile=$row[6];
		$usertype=$row[7];
		$photo=$row[8]; 
echo"<tr><td>".$user."</td><td>".$name."</td><td>".$state."</td><td>".$city."</td><td>".$address."</td><td>".$dob."</td><td>".$mobile."</td><td>".$usertype."</td><td><a href='$photo'><img src='".$photo."'height='100'width='100' ></a></td><a href='$photo'></a></td></tr>";
}
?>
</table>
</div></center>
<div class="footer"> 
<h1>Online Voting System&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>        
