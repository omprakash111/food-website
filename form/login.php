<?php
session_start();
$conn=mysqli_connect('localhost','root','root','food');
if(!$conn)
{
 die("Unable to connect database: " . $conn->connect_error);
}

else
{
	if($_SERVER['REQUEST_METHOD']=='POST')

	{

$user=mysqli_real_escape_string($conn,$_POST['t8']);
$pass=mysqli_real_escape_string($conn,$_POST['t9']);
 
$rows=mysqli_query($conn,"select * from logup where email='$user' and pass='$pass'");
$form=mysqli_fetch_assoc($rows);
$count=mysqli_num_rows($rows);

if($count==1)
{
if(isset($_POST['c1']))
{
setcookie("user",$user,time()+(86400*30));
setcookie("pass",$pass,time()+(86400*30));
}
else
{
setcookie("user",$user,time()-1);
setcookie("pass",$pass,time()-1);

}
$_SESSION['visitor']=$user;
$_SESSION['visit']=$form['fname'];
$_SESSION['mob']=$form['mob_no'];
$_SESSION['city']=$form['city'];


header("location: welcome.php");
}
else
{

echo "invalid username/password";
header("location: index.php");
}


	}

}

?>