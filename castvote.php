
<?php
session_start();
$user=$_SESSION['user'];
$can=$_REQUEST['id'];
$party = $_REQUEST['id1'];
$area = $_REQUEST['id2'];
$con = mysqli_connect("127.0.0.1","root","","online_voting");
$q1="select registration.status,party.vote from party,registration where cname='$can' AND pname='$party'AND area='$area' AND user='$user'";
$res=mysqli_query($con,$q1);
$row=mysqli_fetch_array($res);
$status=$row[0];
if($status=="allowed")
{
{
$v=$row['vote'];
}
$v+=1;
$chance=1;
$q1="update registration set chance='$chance'";
$q2="update party set vote='$v' where cname='$can'";
$res2=mysqli_query($con,$q2);
mysqli_query($con,$q1);
if($res2>0)
{
	session_start();
	$SESSION['status']="";
	header("location:voterhome.php?Message=Thank You For Voting Every Vote Counts");
}
}
else
{
	header("location:voterhome.php?error=This Feature Is Locked");

}

?>
