<?php

session_start();
$conn=mysqli_connect("localhost","root","root","food");
if(!$conn)
{
echo "connection failed";
}
else
{
     if($_SERVER['REQUEST_METHOD']=='POST')
	  {
	   $user=mysqli_real_escape_string($conn,$_POST['t1']);
	   $sqty=mysqli_real_escape_string($conn,$_POST['sq']);
	   $answer=mysqli_real_escape_string($conn,$_POST['t2']);
	   

$rows=mysqli_query($conn,"select * from logup where email='$user' and question='$sqty' and answer='$answer'");
$form=mysqli_fetch_assoc($rows);


if($form)
{
  $_SESSION['visito']=$form['id'];
  $_SESSION['visit']=$form['fname'];
  
 
  header("location:update.html"); 
}
else
{
  echo "nahi hua";
}
	  }

}
?>