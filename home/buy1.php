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
	$code=mysqli_real_escape_string($conn,$_POST['t12']);
	$quantity=mysqli_real_escape_string($conn,$_POST['t13']);
	
	
$rows=mysqli_query($conn,"select * from item where food_code='$code'");
$form=mysqli_fetch_assoc($rows);


if($form)
{
 
 $_SESSION['p']=$form['price'];
$_SESSION['foodname']=$form['food_name'];
$_SESSION['prices']=$form['price']*$quantity;
 $_SESSION['code']=$code;
 $_SESSION['quantity']=$quantity;
 header("location: ../form/orderlist.php");
}
else
{
  echo "nahi hua";
}
	  }
}


?>
