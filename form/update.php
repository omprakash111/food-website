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
		  $a=$_POST['t2'];
	   $b=$_SESSION['visito'];

$rows=mysqli_query($conn,"update logup set pass='$a' where id='$b'");


          if($rows==1)
          {
            
echo $_SESSION['visit'];



           }
            else
           {
              echo "nahi hua";
              }
	           }

 }
?>
