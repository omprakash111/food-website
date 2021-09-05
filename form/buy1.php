<html>
<head>

</head>
<body>
<?php
session_start();
$conn=mysqli_connect('localhost','root','root','food');
if(!$conn)
{
 die("Unable to connect database: " . $conn->connect_error);
}
else
{
	echo "op";
}
?>
</body>
</html>
