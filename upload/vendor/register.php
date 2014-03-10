<?php
include('../settings/main.php');


if (isset($allowreg) && $allowreg==false){echo 'registrations are disabled';exit();}

					if(isset($_POST['username2'],$_POST['password2'],$_POST['cpassword2'],$_POST['gpg'],$_POST['liteaddr'],$_POST['captcha'])){
		$lol=medium_register($_POST['username2'],$_POST['password2'],$_POST['cpassword2'],$_POST['gpg'],$_POST['liteaddr'],$_POST['captcha'],true);
		$laerror= $lol;
					}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=$sitelongnme;?> - Vendor sign up</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../settings/theme/default.css" rel="stylesheet">
    <style type="text/css">
      /* Override some defaults */
      html, body {
        background-color: #eee;
      }
      body {
        padding-top: 40px; 
      }
      .container {
        width: 300px;
      }

      /* The white background content wrapper */
      .container > .content {
        background-color: #fff;
        padding: 20px;
        margin: 0 -20px; 
        -webkit-border-radius: 10px 10px 10px 10px;
           -moz-border-radius: 10px 10px 10px 10px;
                border-radius: 10px 10px 10px 10px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.15);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.15);
                box-shadow: 0 1px 2px rgba(0,0,0,.15);
      }

	  .login-form {
		margin-left: 65px;
	  }
	
	  legend {
		margin-right: -50px;
		font-weight: bold;
	  	color: #404040;
	  }

    </style>

</head>
<body>
  <div class="container">
    <div class="content">
      <div class="row">
        <div class="login-form">
          <h2>Vendor Register</h2>
		  <?php (isset($laerror) ? '<div class="alert alert-success">'.$laerror.'</div>' : '')?>
          <form action="" method="post">
            <fieldset>
              <div class="clearfix">
                <input type="text" placeholder="Username" id="username2" name="username2">
              </div>
              <div class="clearfix">
                <input type="password" placeholder="Password" id="password2" name="password2">
              </div>
			   <div class="clearfix">
                <input type="password" placeholder="Confirm Password" id="cpassword2" name="cpassword2">
              </div>
			   <div class="clearfix">
                <textarea placeholder="GPG" id="gpg" name="gpg"></textarea>
              </div>
			   <div class="clearfix">
                <input type="password" placeholder="lite address" id="liteaddr" name="liteaddr">
              </div>
			    <div class="clearfix">
                <input type="password" placeholder="captcha" id="captcha" name="captcha">
              </div>
			  <img src="./../capcha.php" />
              <button class="btn primary" type="submit">Sign Up</button>
			  <br><a href="./index.php">sign in?</a>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- /container -->
</body>
</html>