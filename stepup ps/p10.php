<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_REQUEST["signin"]))
{
	$email=$_REQUEST["email"];
	$pass=$_REQUEST["pass"];
	$res=mysqli_query($con,"select * from signup where email='$email' && pass='$pass'");
	$rowcount=mysqli_num_rows($res);
	if($rowcount==true)
	{
		echo"your username and password is correct";
		header("Location:slider.html");
		exit;
	}
	else
	{
		echo " your username and password is incorrect";
	}
}
 ?>