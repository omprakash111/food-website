<?php
session_start();
?>
<html>
<head>
<title>

</title>
</head>
<body background="18.jpg"><center><form name="om" method=post action="../home/home.php">
<h1>PRODUCT INFORMATION</h1>
<br>
<table border="2" cellpadding="10" cellspacing="6">
<tr>
<th>Name</th>
<th><?php  echo"".$_SESSION['visit'].'';   ?></th>
</tr>
<tr>
<td>Mobile</td>
<td><?php  echo"".$_SESSION['mob'].'';   ?></td>
</tr>
<tr>
<td>Address</td>
<td><?php  echo"".$_SESSION['city'].'';   ?></td>
</tr>
<tr>
<td>Food Purchase Name</td>
<td><?php  echo"".$_SESSION['foodname'].'';   ?></td>
</tr>
<tr>
<td>Food Price</td>
<td><?php  echo"RS".$_SESSION['p'].'';   ?></td>
</tr>
<tr>

<td>QUANTITY</td>
<td><?php  echo"".$_SESSION['quantity'].'';   ?></td>
</tr>
<tr>
<td>Total Pay</td>
<td><?php  echo"RS".$_SESSION['prices'].'';   ?></td>
</tr>
<tr>


<input type="submit" value="Go to more">
<br>
</form></center>
</body>
</html>