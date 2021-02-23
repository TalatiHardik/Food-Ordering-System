<?php  
session_start();
if(isset($_SESSION['admin_sid']) || isset($_SESSION['customer_sid']))
{
	header("location:index.php");
}
else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <link href="css/style.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/materialize.min.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="css/page-center.css" type="text/css" rel="stylesheet" media="screen,projection">
</head>
<style type="text/css">
  .btn{
color:#fff;
background-color:#b84322;
  }

</style>
<body >


  <div id="login-page" class="row">
    <div class="card-panel">


      <form method="post" action="php/check.php" class="login-form" id="form">
        <div class="row">
          <div class="input-field col s12 center">
            <p class="center login-form-text">Login for Food Ordering System</p>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-social-person-outline prefix"></i>
            <input name="username" id="username" type="text" placeholder="Username">
           
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="mdi-action-lock-outline prefix"></i>
            <input name="password" id="password" type="password" placeholder="Password">
            
          </div>
        </div>
        <div class="row">
			<a href="javascript:void(0);" onclick="document.getElementById('form').submit();" class="btn waves-effect waves-light col s12">Login</a>
          </div>
		  		<div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"></p>
          </div>         
        </div>
        </div>


      </form>
    </div>
  </div>


</body>
</html>
<?php
}
?>