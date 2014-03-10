<?php
include('../settings/main.php');
if (medium_checkloggedin(true)){header("Location: ./home.php");exit();}




if (isset($_POST['username1'],$_POST['password1']) && !empty($_POST['username1']) && !empty($_POST['password1'])){

		if ($lol=medium_mainlogin($_POST['username1'],$_POST['password1'],true)){
		$daerror= $lol;//fail - with the error
		}else{
		header("Location: ./home.php");exit();//success
		}
	}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=$sitelongnme;?> - Vendor login</title>
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
          <h2>Vendor Login</h2>
          <form action="" method="post">
            <fieldset>
              <div class="clearfix">
                <input type="text" placeholder="Username" name="username1" id="username1">
              </div>
              <div class="clearfix">
                <input type="password" placeholder="Password" name="password1" id="password1">
              </div>
              <button class="btn primary" type="submit">Sign in</button>
			  <br><a href="./register.php">sign up?</a>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div> <!-- /container -->
</body>
</html>