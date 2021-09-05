
<?php
session_start();
?>



<html><head>

















<style>
h1{text-shadow:2px 2px 5px auqa;}
h1{color:white;text-shadow:1px 1px 2px black, 0 0 25px blue,0 0 5px darkblue;}

h3{text-shadow:2px 3px 5px white;}
h3{color:red;text-shadow:1px 1px 50px green, 0 5px 35px green,2px 3px 54px yellow;}


.button{background-color:white;
border:2px solid;
color:white;
width:70px;
height:20px;
border-radius:15px;
transition-duration:1s;
 text-align:center;
font-size:15px;

}


.button8{background-color:gray;
                padding:7px 7px;
}
.button8:hover{background-color:red; transation-delay:4s;}


.button9{background-color:gray;
                padding:7px 7px;}
.button9:hover{background-color:#4CAF50; transation-delay:2s;}








table{border-radius:16px;padding:10px 7px;text-align:center;box-shadow:0 0 15px blue;}
</style>







</head>


<body background="bb.jpg">

<br><br><br><br><br>
<center>
<h1>DELIVERY FORM</h1></center>

<center>
<table border="0" cellspacing="10px" cellspacing="2" >
<form name="f11" method="post" action="buy1.php">


<tr align="center"><td><h3>ENTER FOOD CODE</h3></td>
<TD><INPUT Type="text" name=t12 maxlength=30></TD></tr> 

<tr align="center"><td><h3>QUANTITY</h3></td>
<TD><INPUT Type="text" name=t13 maxlength=30></TD>
</tr> 

<tr align="center"><td>
<a href="index.html"><input type="submit"  value=submit ></a>
</td><td><input type="reset" value=reset></td></tr>
</table></center>





</body></html>