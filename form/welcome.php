<?php
session_start();
?>
<html>
<head><title>welcome</title>
<link href="welcome.css" rel="stylesheet" type="text/css">
</head>
<body>
<section class="b1">
 <div class="in1">
 <div class="content">
 <h1>Hi<H1>
 <h1>WELCOME 
<?php
echo $_SESSION['visitor'];


?>
</H1>
<a class="btn" href="../home/home.php">GET STARTED</a>

</div></div>
</section>
</body>




</html>