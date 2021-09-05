<!DOCTYPE html>
<html >
<head>
 
  <title>Login & Sign Up Form Concept</title>
  
  	  <script type="text/javascript">

	  
	  function login() {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_login";  
document.querySelector('.cont_form_login').style.display = "block";
document.querySelector('.cont_form_sign_up').style.opacity = "0";               

setTimeout(function(){  document.querySelector('.cont_form_login').style.opacity = "1"; },400);  
  
setTimeout(function(){    
document.querySelector('.cont_form_sign_up').style.display = "none";
},200);  
  }
function sign_up(at) {
  document.querySelector('.cont_forms').className = "cont_forms cont_forms_active_sign_up";
  document.querySelector('.cont_form_sign_up').style.display = "block";
document.querySelector('.cont_form_login').style.opacity = "0";
  
setTimeout(function(){  document.querySelector('.cont_form_sign_up').style.opacity = "1";
},100);  

setTimeout(function(){   document.querySelector('.cont_form_login').style.display = "none";
},400);  

}    

function ocultar_login_sign_up() {

document.querySelector('.cont_forms').className = "cont_forms";  
document.querySelector('.cont_form_sign_up').style.opacity = "0";               
document.querySelector('.cont_form_login').style.opacity = "0"; 

setTimeout(function(){
document.querySelector('.cont_form_sign_up').style.display = "none";
document.querySelector('.cont_form_login').style.display = "none";
},500);  
  
  }
  </script>


      <link rel="stylesheet" href="form.css">


  
</head>

<body >
 

  <div class="cont_login">
<div class="cont_info_log_sign_up">
      <div class="col_md_login">
<div class="cont_ba_opcitiy">
        
        <h2>LOGIN</h2>  
  <p>For Login for access</p> 
  <button class="btn_login" onclick="login()">LOGIN</button>
  </div>
  </div>
<div class="col_md_sign_up">
<div class="cont_ba_opcitiy">
  <h2>SIGN UP</h2>

  
  <p>For Sign Up for you dream</p>

  <button class="btn_sign_up" onclick="sign_up()">SIGN UP</button>
</div>
  </div>
       </div>

    
    <div class="cont_back_info">
       
       
    </div>
	
<div class="cont_forms" >
    <form name="f1" METHOD="POST" ACTION="login.php">
 <div class="cont_form_login">
<a href="#" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>

   <h2>LOGIN</h2>
 <input type="text" placeholder="Email" name="t8" value="<?php if(isset($_COOKIE['user'])){echo $_COOKIE['user']; }?>" required> 
<input type="password" placeholder="Password" name="t9" value="<?php if(isset($_COOKIE['pass'])){echo $_COOKIE['pass']; }?>" required><br>
<input type="checkbox" name="c1" <?php if(isset($_COOKIE['user'])){echo "checked='checked'";}?>>
<button class="btn_login" onclick="cambiar_login()">LOGIN</button><a href="forget.html"><b>Forget Password</b></a>
  </div>  
  </form>

  <form name="f2" method="post" action="signup.php">
   <div class="cont_form_sign_up">
<a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
     <h2>SIGN UP</h2>
	 <input type="text" placeholder="Full name" name="t1" required>
	 
<input type="text" placeholder="Email" name="t2" required >
<input type="password" placeholder="Password" name="t3" >
<input type="password" placeholder="Confirm Password" name="t4" required >
<input type="text" placeholder="Contact Number" name="t5" required>
<input type="text" placeholder="City" name="t6"  required><br><br>
<div class="option">
<select name="sq">
<option>WHAT IS THE NAME OF YOUR FIRST TEACHER</option>
<option>WHAT IS THE NAME OF YOUR DOG</option>
<option>WHO IS YOUR FAVOURITE CRICKETER</option>
<option>WHAT IS YOUR WISH</option>
</select></div>
<input type="text" placeholder="Security Answer" name="t7">


<button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>

  </div>
</form>
    </div>
    
  </div>
 
</div>
  
    
</body>
</html>
