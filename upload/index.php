<?php include('./settings/main.php');
//
//COMPLETE
//
//
if(isset($_GET['logout'])){unset($_COOKIE['lite_engine']);setcookie("lite_engine", "", time()-3600);}
if (medium_checkloggedin()){header("Location: home.php");exit();}

	if (isset($_POST['username1'],$_POST['password1']) && !empty($_POST['username1']) && !empty($_POST['password1'])){

		if ($lol=medium_mainlogin($_POST['username1'],$_POST['password1'])){
		$daerror= $lol;//fail - with the error
		}else{
		header("Location: home.php");exit();//success
		}
	}elseif(isset($_POST['username2'],$_POST['password2'],$_POST['cpassword2'],$_POST['gpg'],$_POST['liteaddr'],$_POST['captcha'])){
		$lol=medium_register($_POST['username2'],$_POST['password2'],$_POST['cpassword2'],$_POST['gpg'],$_POST['liteaddr'],$_POST['captcha']);
		$laerror= $lol;
		
	
	}
	
	

?><!DOCTYPE html>
		<html lang="en">
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta charset="utf-8">
				<title><?=$sitelongnme;?> - Sign In</title>
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link href=".\settings\theme\default.css" rel="stylesheet" type="text/css">
			</head>
		<body style="" oncontextmenu="return false;">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<nav class="navbar navbar-default" role="navigation">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									</button>
									<a class="navbar-brand unselectable" href="./index.php" ><?=$sitelongnme;?></a>
								</div>
									<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav">
											<li class="active"><a href="http://www.jquery2dotnet.com/">Home</a></li>
										</ul>
										<style>
											.navbar-right li:hover>ul { display: block; }
											
											
											
											
											
											
											
											
											
											
											

  
    h2 {margin-top:0}

/* Styling applied to classes only */

/*  Pop-up content shifted off-screen when not in view.
    Still readable by screen-reader software.
    When targeted it fills the browser window.
*/
    .pop-up {position:absolute; top:0; left:-500em;}
    .pop-up:target {position:static; left:0;}


/* The pop-up itself */
    .popBox {
      background:#ffffff;

    /* alternatively fixed width / height and negative margins from 50% */
      position:absolute; left:30%; right:30%; top:30%; bottom:30%;

      z-index:10;
      /* padding:1%; removed 17/07/2012 */
      border:1px solid #3a3a3a;

    /* CSS3 where available: rounded corners, drop-shadow, and fade in. */
      -moz-border-radius:12px;
      border-radius:12px;
      -webkit-box-shadow:2px 2px 4px #3a3a3a;
      -moz-box-shadow:2px 2px 4px #3a3a3a;
      box-shadow:2px 2px 4px #3a3a3a;
      opacity:0;
      -webkit-transition: opacity 0.5s ease-in-out;
      -moz-transition: opacity 0.5s ease-in-out;
      -o-transition: opacity 0.5s ease-in-out;
      -ms-transition: opacity 0.5s ease-in-out;
      transition: opacity 0.5s ease-in-out;
    }

    :target .popBox {position:fixed; opacity:1;}

/* Light box properties */
    .lightbox {display:none; text-indent:-200em; background:#000; opacity:0.4; width:100%; height:100%; position:fixed; top:0; left:0; bottom:0; right:0; z-index:5;}
    :target .lightbox {display:block;}
    .lightbox:hover {background:#000;}

/* The pop-ups close link, moved via CSS to the top right of the pop-up */
    .close:link,
    .close:visited {
      position:absolute; top:-0.75em; right:-0.75em; display:block; width:1em; height:1em;
      padding:0;
      font:bold large/1 arial, sans-serif; text-align:center; text-decoration:none;
      background:#000; border:3px solid #fff; color:#fff;
      -moz-border-radius: 1em;
      -webkit-border-radius: 1em;
      border-radius: 1em;
      -moz-box-shadow: 0 0 1px 1px #3a3a3a;
      -webkit-box-shadow: 0 0 1px 1px #3a3a3a;
      box-shadow: 0 0 1px 1px #3a3a3a;
    }
    .close:before {content:"X";}
    .close:hover,
    .close:active,
    .close:focus {box-shadow:0 0 1px 1px #c00; background:#c00; color:#fff;}
    .close span {text-indent:-200em; display:block;}

/* The pop-up content div will scroll if it has too much content */
    /* .popScroll {max-height:99%; overflow:hidden; overflow-y:scroll;} removed 17/07/2012 */
    .popScroll {position:absolute; top:9%; left:3%; right:3%; bottom:9%; overflow-y:auto; *overflow-y:scroll; padding-right:0.5em}

	.navbar-right li:hover>a>b { -webkit-transform: rotate(180deg); }
										</style>
               <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign Up <b class="caret"></b></a>
                     <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                        <li>
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form" role="form" method="post" action="" accept-charset="UTF-8" autocomplete="off" id="login-nav">
                                    <div class="form-group">
                                       <label class="sr-only" for="exampleInputEmail2">Username</label>
                                       <input type="text" name="username2" class="form-control" id="exampleInputEmail2" placeholder="Username" autocomplete="off" required="">
                                    </div>
									 <div class="form-group">
                                       <input type="password" name="password2"  class="form-control" id="exampleInputPassword2" placeholder="Password" autocomplete="off" required="">
                                    </div>
									 <div class="form-group">
                                      <input type="password" name="cpassword2"  class="form-control" id="exampleInputPassword2" placeholder="Confirm Password" required="">
                                    </div>
									 <div class="form-group">
                                       <input type="text" name="liteaddr"  class="form-control" id="exampleInputPassword2" placeholder="emergency lite address" required="">
                                    </div>
								
									
									
									
									<span style="display: block;margin-left: auto;margin-right: auto;text-align: center;"><a href="http://www.gpg4usb.org/index.html" target="_blank">Whats a GPG key?</a></span>
									 <div class="form-group">
                                       <textarea  name="gpg"  class="form-control" id="gpgkey" placeholder="your gpg key" required=""></textarea>
                                    </div>
									<div class="form-group">
                                     <img style="display: block;margin-left: auto;margin-right: auto;" src="capcha.php" />
                                    </div>
									<div class="form-group">
                                       <input type="text" name="captcha"  class="form-control" id="exampleInputPassword2" placeholder="letters from image above" required="">
                                    </div>
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-success btn-block">Sign Up</button>
                                    </div>
											<?php echo (isset($laerror) ? "<div class='alert alert-danger'><br />{$laerror}</div>":''); ?>
                                 </form>
                              </div>
                           </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                           <a href="#terms" class="btn btn-primary btn-block" style="color:white" type="button" id="sign-in-google">Terms and Conditions</a>
                        </li>
                     </ul>
                  </li>
				  
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sign in <b class="caret"></b></a>
                     <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
                        <li>
                           <div class="row">
                              <div class="col-md-12">
                                 <form class="form" method="post" name="signin" action="" accept-charset="UTF-8" id="login-nav">
                                    <div class="form-group">
                                      <input type="username" name="username1" class="form-control" id="username" placeholder="Username" autocomplete="off" required="">
                                    </div>
                                    <div class="form-group">
                                       <input type="password" name="password1" class="form-control" id="password" placeholder="Password" autocomplete="off" required="">
                                    </div>
                                    <div class="checkbox">
                                       <label>
                                       <input type="checkbox"> Remember me
                                       </label>
                                    </div>
                                    <div class="form-group">
                                       <input type="submit"  id="signme" class="btn btn-success btn-block" value="Sign in" />
                                    </div>
									<span id="signresult" style="text-align: center;display: block;">
									<?php echo (isset($daerror) ? "<div class='alert alert-danger'><br />Error: {$daerror}</div>":''); ?>
									
									</span>
                                 </form>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
            <!-- /.navbar-collapse -->
         </nav>
      </div>
   </div>
   <!-- -->
</div>	





    <div class="container" style="margin: 0 auto;max-width: 1000px;">

      
      <div style="margin: 10px 0;text-align: center;">
        <h1 style="font-size: 100px;line-height: 1;" class="unselectable"><?=$sitelongnme;?></h1>
        <p class="lead" style="font-size: 24px;line-height: 1.25;">Litecoin's accepted here<br /> Low prices!</p>
        <a class="btn btn-large btn-success" style=" font-size: 21px; padding: 14px 24px;" onclick="getElementById('messages').className='modal show';" href="#">[BETA]</a>
      </div>

      <hr style="margin: 20px 0;">

      <!-- Example row of columns -->
      <div class="row-fluid" style="width: 100%;">
        <div class="span4" style="width: 31.623931623931625%;float: left;min-height: 30px;display: block;margin-left: 0;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;">
          <h2>Buyers</h2>
          <p>blah blah blah</p>
        </div>
         <div class="span4" style="width: 31.623931623931625%;float: left;min-height: 30px;display: block;margin-left: 2.564102564102564%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;">
         <h2>Sellers</h2>
          <p>blah blah blah</p>
       </div>
        <div class="span4" style="width: 31.623931623931625%;float: left;min-height: 30px;display: block;margin-left: 2.564102564102564%;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;">
          <h2>Security and Funds</h2>
          <p>blah blah blah</p>
        </div>
      </div>
      
          <hr style="margin: 20px 0;width:100%">
      <div class="footer">
        <p><a href="#terms">Terms Of Service</a> | 
		<a href="#contact" >our gpg</a> | 
		<a href="/vendor/" >Vendor/Seller access</a> | 
		<a href="#faq" >FaQ</a></p>
		<!-- DO NOT REMOVE-->
        <p>Powered by <a href="https://github.com/ModdersCentral/Litemarket#v1.0.0.0">ModdersCentral</a> &copy;</p>
		<!-- DO NOT REMOVE-->
      </div>

    </div>





 
 <div id="terms" class="pop-up">

    <!-- The pop-up block -->
    <div class="popBox">

      <!-- If the content becomes larger than the pop-up this div will scroll the content -->
      <div class="popScroll">
        <h2>Terms</h2>
        <p>You agree you are not working with the government and/or FBI and/or CID and/or law inforcement agency</p>
		<p>You agree not to take legal action against the website owner.</p>
		<p>You will not spend more than you can afford to lose. </p>
		<p>You will not use this website as evidence in a court. </p>
      </div>

      
    </div>

    <!-- This link is the light box -->
    <a href="#links" class="lightbox">Back to links</a>
  </div>
   <div id="contact" class="pop-up">

    <!-- The pop-up block -->
    <div class="popBox">

      <!-- If the content becomes larger than the pop-up this div will scroll the content -->
      <div class="popScroll">
        <h2>Our gpg (click text below, CTRL+A)</h2>
        <p style="-moz-user-select: text;-webkit-user-select: text;">
-----BEGIN PGP PUBLIC KEY BLOCK-----<br/>
Version: GnuPG v1.4.12 (MingW32)<br/>
<br/>
mQINBFLdMQcBEADIrkcG87yiIgC42HlxSZm4/a09vLlEslZbas+u5kFQloRQSbPC<br/>
58taHUtx81VL+6puFadYsJkxCGsGz06pGoujGJbdj4U/B8qJ8YVleLPuid37dlg2<br/>
ENGi6you/orNjWWpslGPuehh6y77y/ZMK8ouN5XkHXFI4noPYS000SFduYyH8/HV<br/>
b1pBtNsFitbHF0UPMKzkwrpCmlT6UaG5W9X6K8ex4i2QF4eAqGP3N1lNa96QZo+R<br/>
M8IaI5SNmvbqciQTK3MJNibiI/KgKlxqthuuTM15Ot9h65AXNyy8raCJ6cmPZvKh<br/>
2olIxm8KJP3wKNZceOO8963H8AAwCxR6KXthWhTGaZ4EVg/ywcVtIptf+3m542BF<br/>
MfZzzkaUHeFAzEcYjAhVC3mw5aTf6mtC6ZaYlVSzM3E74YBrRndc7O0JipECI4QV<br/>
jEr8/TGnnwnyB3FUivr9xfimnC8CbsTmqJgXP347T1kxhHxEPBITjsNvmqVv9JRm<br/>
oxYYWosKe7ALWvIO7OdX2rC7IJqerQ4kg9Q1d7XZcb+u/38dD61zdmKF5cEa88K4<br/>
S1FszPmBzU4BP+YT52w+QTaL3D3DccPuM2kkggbP0dTOkhi6uHMfl1DmwP+HzFKK<br/>
LE7zAmPR7iEqMvq0Rq1fzw9R0bFahWjGUa/w89C3P/UKlmESBFd0DBZxuQARAQAB<br/>
tBNMaXRlIE1hcmtldCAoYWRtaW4piQI+BBMBAgAoBQJS3TEHAhsDBQkLR7x5BgsJ<br/>
CAcDAgYVCAIJCgsEFgIDAQIeAQIXgAAKCRDCfVT3iyBOJFOBD/9ps4e3ogJk2bGX<br/>
C9jiPQU3KiuFNu7zmJoZQ1ydS+TCoJVn6ECXX0WmBDnlfoMzefq8P9HoU7ofZXwq<br/>
Fq5w6bFc2BEFJdyP+zeylZoA6V5QwgEcBfnp+XO5V2i4lHUSHzd3LwDdOKr2TF9D<br/>
TsPmAVUBfUrBqi9+SoVKl+/hNzoyfHqb3xKtW/iBG14aD48PQQtvEshFqL0jruVa<br/>
Dk08tY9imV6Lcnpn94afDRkm7GdOELWQbKaxwbgPUmci6JtLaooFrlFwMk8vcNlS<br/>
Zn6XMbQw4iSNWxcnxsJinE4oO0EDhwLcxwdK0UbqQ7K5roR3um4KT+ZLfOh1ilqB<br/>
54aVgKZ0OWvmrj5agxq5pv1FaJSMQoCcSVUQlw82G/YTd9/lMNYSqsFl87ZJ659W<br/>
KxzF0cCfGS7ksgLn0aPCLtvjPZ9KBkEiNDP9jiiV/M6wUjnjoVObEDXHiwhFptg3<br/>
8L/vGDh/gWc39eWUGAroGhahjNg5/MavyrS8GkN+gortZ1zG1qAkaTANOSBVxKmW<br/>
rkEBOapDVNigNfX7Cf9Qv5Hb/SZeX40UtXuJoRyxMDJyyTRjX9BD/OPV0jg6Ejc8<br/>
n2aDsaSlrUyqHoRGfpldxOCMiGY2X9Sg5M9zF2uMOJSnAVee9Qkpf24ii6TUgvDW<br/>
KYaWRCrhMI9gWX/r15evh5vR4ElZ3bkCDQRS3TEHARAAmR2QMiFREQS+R7Ni+nDG<br/>
FqGiS6ug/CoRx9s3sGtHBLZPsLcZ0H6POkSWSQry2hp3Wl4ps0vyFkpgbg2CrDck<br/>
pai5Fezmz1GUT3AuyC2JVxkvRmmQsd/eflNDPjGIqRzfoOTaVW/j9OAbKCQOn/Et<br/>
iQS2kUtIHugo836AN3c7MdjUZxhg8VHSWuiuXQLfxA1O63m4dzla69LakwmlJLGv<br/>
zRHqZXfZAibtWRbpp7fBOW7amhxmbvkB0kNVJKdL13XE5afsVAmfXe03pEV0oMxw<br/>
o1rWowURPWe06voxMTHeEXa4kqWO4keg0m3gOS9HgXRUme4Kzz5tS0KEPC8wYkS2<br/>
vfFNwYoj+CVtfu58/Q0EsgJoeI+fV2ZfJw5EbplSWFlUAxGOhbMi6AeRNJLWdoU5<br/>
kxF9+1dI6IxkxHgIU9A0uj8Kd0kNFc1eMC/7vbBms2lEIpjkYmJ2z+pk5cik6gav<br/>
Z0z7xJ4ao+WI8BbB4P4xzye5+6wEN+MZqX2yqvpj589hPzviftNoBrj1uN4jUOP4<br/>
fY9Rn/Wpwm01mcqI6LNPeTlARxlMBf3bZFKvfawf07nGzf5ztYzkj6JjDUlyUnAX<br/>
H/b8fbXodUIoZnfbkgJKJDbJfOgBvMp5UdNC7oz6NsGh1xHm5ODLWcBWJ9RuaBVf<br/>
zMQpuvkfsxYa/kHh/hDF7K8AEQEAAYkCJQQYAQIADwUCUt0xBwIbDAUJC0e8eQAK<br/>
CRDCfVT3iyBOJOcEEAC4qZgBGO9//rlff2ijCh6ILqiK8/3VkAOIqrkSjg8YW/v+<br/>
oZUFaDJXLGDMiEOr470LRxuga5eM/7oy21TnyvicT2Po276q84xRKqECalurxgsL<br/>
lJx5hXO/y7KK4SCur9ZwUKh9Q5opTT9bcbnbJBDgIMoTS50MyzT9lrb1r6pM+7YV<br/>
Tj9a8x/057Pyosl44y5muVdHHoNJV8PkcwN81KoioGAlrLKbwLDt0DaE5q5T+9JH<br/>
lEbjN4PJbaAtzwTqYOPfOU1yzhA8uSR2XGxuH9QqO8+wZ+NoCnjZV+SSMKMDIB26<br/>
QypdC6D57ZmAo5VKDk4gxhYM72w6JCTC6Gz9VSYdPhz8m5GP2ejnrtVHnzLDfS1d<br/>
RDJfP/xT4gpIP8FBZj2+9RbRwQAq6pcJbvRQ4FhgzwlbfHt+q4DZpNyfmw01Dw7c<br/>
ux7pQt0HyW+gMdsRFuffBg2sbYRRXRopdDmrR3+9RtWqc7j8r3ta+RC4cUprYzs5<br/>
gHRSTRJ4qlU/oNaZm7c0AEwpWTMBGBSe3FJ/w8pQEwduzz1Ocu00+nx9ozCz838I<br/>
s6hHLxMsG1HIq8OyWVmaWMExBIVu9yDVKeytW5OefDLt6/OaifzKXdLbsJelR9Qb<br/>
KlWOUz54schJu6WdTMfH1JVHTbsuzbaLzeXFORa+41oG0kvgEI+Gg+Xc45FYCA==<br/>
=OMt6<br/>
-----END PGP PUBLIC KEY BLOCK-----<br/>


		</p>
      </div>

      
    </div>

    <!-- This link is the light box -->
    <a href="#links" class="lightbox">Back to links</a>
  </div>
  <div id="faq" class="pop-up">

    <!-- The pop-up block -->
    <div class="popBox">

      <!-- If the content becomes larger than the pop-up this div will scroll the content -->
      <div class="popScroll">
        <h2>Frequently Asked Questions</h2>
		  <p><span style="font-weight:bold;">how do i make a gpg key?</span> <br />Manage keys -> key -> generate key -> enter your username in the 'name' field</p>
        <p><span style="font-weight:bold;">Do you provide ESCROW?</span> <br />no. we are trying to be effient, making database entries for escrow is a waste of bytes/storage</p>
		   <p><span style="font-weight:bold;">vendor sent more than i paid for and is demanding more money?</span> <br />contact support immediatly.</p>
		  <p><span style="font-weight:bold;">item not recieved?</span> <br />DIFFERENT COUNTRIES:<br />ordering from different countries increases the risk of your package getting caught. there isn't much we can do. <br />SAME COUNTRY<br />99% of the time the package gets to the destination</p>
		<p><span style="font-weight:bold;">I got scammed?</span> <br />Contact Seller, if no response in 48 hours, leave negative feedback and contact support. when there is enough evidence we will look into it.</p>
		<p><span style="font-weight:bold;">Im a seller and cant withdraw my litecoins?</span> <br />if it stays at 'processing' for 72+ hours please contact support.</p>
		<p><span style="font-weight:bold;">Im a seller im in negative feedback?</span> <br />if you sent the packages,then, your packages might be getting monitored by LE.</p>
		
      </div>

      
    </div>

    <!-- This link is the light box -->
    <a href="#links" class="lightbox">Back to links</a>
  </div>



<img src="./settings/cron/secretkeepfromusers/index.php" style="display:none;" />





</body></html>