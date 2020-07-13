<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$mno=$_POST['mno'];
$con=mysqli_connect('localhost','root','','project');
// if($con)
// {
// 	echo"connection established";
// }
// else
// {
// 	echo"not established";
// }
// echo $fname,$lname,$email,$pass,$cpass,$mno;
    $res=mysqli_query($con,"insert into signup(fname,lname,email,pass,cpass,mno)value('$fname','$lname','$email','$pass','$cpass','$mno')") or die (mysqli_error());

if($res)
{
	echo "WELCOME ";
	echo"YOU HAVE REGISTERED SUCCESSFULLY";
}

else
{
	echo mysqli_error();
}

?>
