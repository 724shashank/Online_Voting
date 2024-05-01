<?php include("navbar.php")?>
   <!DOCTYPE html>
   <html>
   <head>
   	<title>Result</title>
   	<style type="text/css">
   		.div1
       {
        width:1020px;
        height:450px;
        background-color: #F2BA1B;
        margin-left:260px; 
        margin-top: 45px;
        box-sizing:border-box;
        box-shadow:5px 5px 5px black;
        border-radius:10px; 
       }
  
   	</style>
   </head>
   <body>
   
   <div class="div1"  style="overflow-y:scroll">
<h1 style="text-align: center;background-color:#4C4A48;color:white;"><u>Result</u></h1>
    <table border="1px" width="1000" cellspacing="0px" cellpadding="5px">
        
        <tr style="background-color: #333;color: white;">
            <td>Candidate</td>
            <td>Party</td>
            <td>Area</td>
            <td>Logo</td>
            <td>vote</td>
        </tr>
               
        <?php
$con=mysqli_connect("127.0.0.1","root","","online_voting");
$query="select * from party ";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
		$cname=$row[0];
		$party=$row[1];
		$area=$row[3];
		$photo=$row[5];
		$vote=$row[6]; 
echo"<tr><td>".$cname."</td><td>".$party."</td><td>".$area."</td><td><a href='$photo'><img src='".$photo."'height='100'width='100' ></a></td><td>".$vote."</td></tr>";
}
?>
</table>
</div>
<div class="footer"> 
<h1>Online Voting System&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>        
