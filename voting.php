<?php include("navbar.php")?>
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
<h1 style="text-align: center;background-color:#4C4A48;color:white;"><u>Vote</u></h1>



<form>
<p style="display: inline;">Select your Area</p>&nbsp;&nbsp;<select name="area"><option value="sitapur">sitapur</option><option value="lucknow">lucknow</option><option value="kanpur">Kanpur</option></select>
<input type="submit" name="submit" value="submit">
</form>



    <table border="1px" width="995" >
        
        <tr style="background-color:#333;color: white;">
            <td>Candidate-Name</td>
            <td>Party</td>
            <td>Area</td>
            <td>Logo</td>
            <td>Cast-Vote</td>
            
        </tr>

        <?php
        if(isset($_REQUEST['submit']))
        {
        $chance=0;
$con=mysqli_connect("127.0.0.1","root","","online_voting");
$q1="select * from registration where user='$user'";
$res=mysqli_query($con,$q1);
$row=mysqli_fetch_array($res);
$chance=$row['chance'];
        if($chance==0)
        {
        $carea=$_REQUEST["area"];
$query="select * from party where area='$carea'";
$res=mysqli_query($con,$query);
while($row=mysqli_fetch_array($res))
{
		$cname=$row[0];
		$party=$row[1];
		$area=$row[3];
		$logo=$row[5];

echo"<tr><td width=85>".$cname."</td><td width=40>".$party."</td><td width=57>".$area."</td><td width=104 style='text-align:center;'><a href='$logo'><img src='".$logo."'height='100'width='100' ></a></td><td width=45><a href='castvote.php?id=".$row[0]."&id1=".$row[1]."&id2=".$row[3]."'> Cast Vote </a> </td></tr>";

}
}

else
{
    header("location:voterhome.php?Warning=Your Vote is Added Already");
}
}
?>
</table>
</div>
<div class="footer"> 
<h1>Online Voting System&copy;</h1>.All Rights Reserved|Designed By <b>Shashank yadav.</b>
</div>
</body>
</html>        

