<?php 
		//Allow the config
		define('__CONFIG__', true);
		//Require the config
		require_once "inc/config.php"; 
		
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>EC1 Form login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="robots" context="follow">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />

 </head>

 <body>
 	<div class="uk-section uk-container">
    <div class="container2">
    <img src="images/UUJlogo.jpg" alt="Jordanstown logo">
 		
    <div class="row">
    <div class="col-sm-12">
      <h1 class="goldline">Faculty of Computing and engineering online EC1 Form submission</h1>
    </div>
  </div>
</div>

  <div class="row">
    <div class="col-sm-6">
      <br>
      <h4>Sign in information for students</h4>
      <p>Student number eg: B00345678</p>
      <br>
      <h4>Sign in information for Associates</h4>
      <p>Associate number eg: a1234</p>

      <p>If you have problems or are unable to sign in, you should contact the Help Desk number 07784544775 or email ONeill-C98@ulster.ac.uk</p>
      <br></br>
      <a  href="/EC1/FProj/login.php">Login</a>
    </div>
    <div class="col-sm-6">
      <h4>If you have not registered yet please create an account</h4>
      <p></p>
      <a  href="/EC1/FProj/register.php">Register</a>
    </div>
  </div>
  <br>
  

 	</div>



<?php require_once "inc/footer.php"; ?>
 
 </body>