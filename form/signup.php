<?php

$conn=mysqli_connect('localhost','root','root','food');
if(!$conn)
{
echo "connection failure";
}

else
{
	if($_SERVER['REQUEST_METHOD']=='POST')

	{

$fname=$_POST['t1'];
$email=$_POST['t2'];
$pass=$_POST['t3'];
$contactno=$_POST['t5'];
$city=$_POST['t6'];
$question=$_POST['sq'];
$ans=$_POST['t7'];

 
$rows=mysqli_query($conn,"insert into logup(fname,email,pass,mob_no,city,question,answer) values('$fname','$email','$pass','$contactno','$city','$question','$ans')");



if($rows)
{
header("location: signups.html");
}
else
{
echo "sign up unsuccessfull";
header("location: signup.php");
}
}
}

?>