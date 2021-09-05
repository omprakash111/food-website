<?php
session_start();
?>
<html>
<head>
</head>
<body>

<?php
echo "welcome".$_SESSION['visitor'];
echo "<a href='logout.php'>LOGOUT</a>";


?>


</body>
</html>