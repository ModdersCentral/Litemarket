<?php include('./settings/main.php');
if (!medium_checkloggedin()){echo 'not logged in';exit();}
if (!preg_match('/^\d+$/', $_GET['id'])){exit();}
$lyuhjjgf = new Cipher('litemarketgpgrulezlol95');
preg_match("~^\[([0-9]+);([a-zA-Z0-9]+)\]1$~", $lyuhjjgf->decrypt($_COOKIE['lite_engine']),$matcheds);



	if (isset($_GET['updatebalance'])){
		try {
			$checki=$mysqli->query("SELECT `deposit_address` FROM `users` WHERE `username`='".$mysqli->real_escape_string($matcheds[2])."' LIMIT 1") or die('please refresh');
			$yertgdfg=$checki->fetch_assoc();
			$bffbg=$bitcoinlolrpc->getreceivedbyaddress( $yertgdfg['deposit_address'],5);
			$mysqli->query('UPDATE `users` SET `amount_current`=\''. $mysqli->real_escape_string($bffbg) . '\' WHERE `username`=\''. $mysqli->real_escape_string($matcheds[2]) . '\';');
	} catch (Exception $e) {
		echo ($e->getMessage());
		}
	}

$checkb=$mysqli->query("SELECT  `amount_current` FROM `users` WHERE `username`='".$mysqli->real_escape_string($matcheds[2])."' LIMIT 1") or die('please refresh');
		$dfgdfghweew=$checkb->fetch_assoc();
		
		
		
		$checkc=$mysqli->query("SELECT FORMAT( SUM( amounttotry ) , 8 ) AS sumOfColumn FROM transactions WHERE  `fromusername` =  '".$mysqli->real_escape_string($matcheds[2])."';") or die('please refresh');
		$fsdgdreg=$checkc->fetch_assoc();
		if (empty($fsdgdreg['sumOfColumn'])){
		$myzaccbal=$dfgdfghweew['amount_current'];
		}else{
		$myzaccbal=$dfgdfghweew['amount_current'] - $fsdgdreg['sumOfColumn'];
		}
		//echo "#".$myzaccbal."#";
		//echo "formatted". number_format($myzaccbal,8);
		
		
		
		$quey=$mysqli->query('SELECT * FROM `items` WHERE id=\''. $mysqli->real_escape_string($_GET['id']) . '\' LIMIT 1;');
		$lkjhg=$quey->fetch_assoc();
		
		
		$herhgiur=$lkjhg['shippricing'];
		$herhgiur=explode('#',$herhgiur);
		
		
		$bnvnvxcv=$mysqli->query('SELECT `latestprice` FROM `settings` WHERE `id`=\'1\';') or die('please refresh');
		$mznxbcvtd=$bnvnvxcv->fetch_row();
		
		
		
		
		
		
		$iqnshf=$mysqli->query("SELECT `gpg_address` FROM `users` WHERE `username`='".$mysqli->real_escape_string($lkjhg['poster'])."' LIMIT 1") or die('please refresh');
		$btvbrdg=$iqnshf->fetch_assoc();
		
		$iqmzbfg=1;
			foreach($herhgiur as $key) {    
		$hrfghrt=explode('|',$key);
		$chcdrop .= '<option value="'.$iqmzbfg.'">' .$hrfghrt[0] . ' (' . number_format(round($hrfghrt[1] / $mznxbcvtd[0], 8 ),8) . ')</option>';    
		$iqmzbfg++;
		}
		
		if(isset($_POST['shipprice']) && isset($_POST['shipaddressee'])){
	
	$iqmzbff=1;
			foreach($herhgiur as $key) {    
		$hrfghrt=explode('|',$key);
		if ($iqmzbff == $_POST['shipprice']){
		$shipcoast=number_format(round($hrfghrt[1] / $mznxbcvtd[0], 8 ),8);
		$productcoast=number_format(round($lkjhg['price'] / $mznxbcvtd[0], 8 ),8);
		$totalcoast=($shipcoast + $productcoast);
		if (($myzaccbal - $totalcoast) >= 0){
		/////////////////////////////
		echo 'ok sucess';
		$mysqli->query('INSERT INTO `transactions`(`amounttotry`, `sipaddr`, `fromusername`, `tousername`,`daproduct`) VALUES (\''.$mysqli->real_escape_string($totalcoast).'\',\''.$mysqli->real_escape_string($_POST['shipaddressee']).'\',\''.$mysqli->real_escape_string($matcheds[2]).'\',\''.$mysqli->real_escape_string($lkjhg['poster']).'\',\''.$mysqli->real_escape_string($lkjhg['title']).'\')');
		
		
		
		
		//////////////////////////////
		}else{echo 'not enough funds';}
		
		}
		$iqmzbff++;
		}
	
	
	
	
	
	
	}
		
		
?><!DOCTYPE html>
		<html lang="en">
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta charset="utf-8">
				<title><?=$sitelongnme;?> - <?=$lkjhg['title'];?></title>
				<meta name="viewport" content="width=device-width, initial-scale=1">
				<link href=".\settings\theme\default.css" rel="stylesheet" type="text/css">
			</head>
		<body style="-webkit-user-select: initial;">
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
											<li class="active"><a href="./home.php">Home</a></li>
											<li><a href="./messages.php">Messages</a></li>
											<li><a href="./orders.php">Orders</a></li>
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
	
	
	  /* Metroid theme from Bootply for Bootstrap 2.x - License: GPL */

/*@import url('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700');*/

/* bootstrap overrides */
body {
    /*font-family:'Open Sans',Arial,Helvetica,Sans-Serif;*/
}

a {
    color:#0072BC;
}

.dropdown-menu, .nav-pills .dropdown-menu {
	border-radius:0;
}

.navbar .nav>.active>a, .navbar .nav>.active>a:hover, .navbar .nav>.active>a:focus {
        box-shadow:inset 0 0 0;
        -webkit-box-shadow:inset 0 0 0;
        text-shadow:0;
}

.nav-pills li a, .nav-tabs li a, .table-bordered, .table-bordered td,
.table-bordered thead:first-child tr:first-child>th:first-child,
.table-bordered tbody:last-child tr:last-child>td:first-child{
	border-radius:0;	
}
  
.nav-list>li>a, .nav-list, .nav-header {
	text-shadow:0 0 0;
}
    
.nav-list {
	border:0;  
}

.pagination li a, .pager li a {
	border-radius:0;	
}


.btn {
  	border-width:1px;
    border-style:solid;
	/*border-radius:0;*/
    background-image:none;
    box-shadow: 0 0 0;
}

.btn-primary {
	background-color:#0072BC;
}

.navbar-search .search-query {
	border-radius:0;
    border:0;
}

.navbar-inner {
	border-radius:0;
    background-image: none;
  	font-weight:400;
}
  
.navbar-inverse .brand, .navbar-inverse .nav > li > a{
	color:#efefef;
    text-shadow:0 0 0;
}

.alert {
	border-radius:0;
}

.well {
	border-radius:0;
    -webkit-box-shadow:inset 0 0 0;
    -moz-box-shadow:inset 0 0 0;
    box-shadow:inset 0 0 0;
  	background-color:#f0f0f0;
}
  
.label {
	border-radius:0;
    font-weight:300;
    color:#ffffff;
    background-color:#bbb;
}
    
.badge {
    font-weight:300;
}

.progress {
	border-radius:0;
}
      
input[type=text], input[type=password],textarea, select, .search-query {
	/*border-radius:0;*/
}


/* custom theme */
header {
	padding-bottom:10px;
}

a.header-dropdown {
  font-size: 26px;
  font-weight:200;
  text-decoration:none;
}

footer {
    padding:20px;
    /*background-color:#797979;
    color:#ededed;*/
    vertical-align:bottom;
}

footer a {
    /*color:#fff;*/
}

.bg-color-blue {
   background-color: #0072BC !important;
}
.bg-color-blueRoyal {
   background-color: #605eba !important;
}
.bg-color-green {
   background-color: #01a31c !important;
}
.bg-color-greenDark {
   background-color: #008641 !important;
}
.bg-color-red {
   background-color: #ab1c48 !important;
}
.bg-color-yellow {
   background-color: #ffc40d !important;
}
.bg-color-orange {
   background-color: #CD4900 !important;
}
.bg-color-pink {
   background-color: #c3325f !important;
}
.bg-color-purple {
   background-color: #7D26CD !important;
}
.bg-color-darken {
   background-color: #1c1c1c !important;
}

.tile {
	border:0;
	border-radius:0;
	color:#FFFFFF;
    height:140px;
 	font-weight:200;
}

.tile a {
	color:#FFFFFF;
}

.panel {
    border-radius: 0;
}

.row-fluid{width:100%;*zoom:1;}.row-fluid:before,.row-fluid:after{display:table;content:"";line-height:0;}
.row-fluid:after{clear:both;}
.row-fluid [class*="span"]{display:block;width:100%;min-height:30px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;float:left;margin-left:2.127659574468085%;*margin-left:2.074468085106383%;}
.row-fluid [class*="span"]:first-child{margin-left:0;}
.row-fluid .span4{width:31.914893617021278%;*width:31.861702127659576%;}

.container-folio.row-fluid .span4:nth-child(3n+1), #container-folio.row-fluid .span4:nth-child(3n+1) {
margin-left: 0px;
}
						.thumbnail {
margin-bottom: 20px;
padding: 0px;
-webkit-border-radius: 0px;
-moz-border-radius: 0px;
border-radius: 0px;
}			
.pagination ul>li:first-child>a, .pagination ul>li:first-child>span {
border-left-width: 1px;
-webkit-border-top-left-radius: 4px;
-moz-border-radius-topleft: 4px;
border-top-left-radius: 4px;
-webkit-border-bottom-left-radius: 4px;
-moz-border-radius-bottomleft: 4px;
border-bottom-left-radius: 4px;
}

.pagination ul>li>a, .pagination ul>li>span {
float: left;
padding: 4px 12px;
line-height: 20px;
text-decoration: none;
background-color: #ffffff;
border: 1px solid #dddddd;
border-left-width: 0;
}
.pagination ul>li>a:hover, .pagination ul>li>a:focus, .pagination ul>.active>a, .pagination ul>.active>span {
background-color: #f5f5f5;
}


















.nav-list{padding-left:15px;padding-right:15px;margin-bottom:0;}
.nav-list>li>a,.nav-list .nav-header{margin-left:-15px;margin-right:-15px;text-shadow:0 1px 0 rgba(255, 255, 255, 0.5);}
.nav-list>li>a{padding:3px 15px;}
.nav-list>.active>a,.nav-list>.active>a:hover,.nav-list>.active>a:focus{color:#ffffff;text-shadow:0 -1px 0 rgba(0, 0, 0, 0.2);background-color:#0088cc;}
.nav-list [class^="icon-"],.nav-list [class*=" icon-"]{margin-right:2px;}
.nav-list .divider{*width:100%;height:1px;margin:9px 1px;*margin:-5px 0 5px;overflow:hidden;background-color:#e5e5e5;border-bottom:1px solid #ffffff;}


.nav-list>li>a, .nav-list .nav-header {
margin-left: -15px;
margin-right: -15px;
text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
}







.well {
min-height: 20px;
padding: 0px;
margin-bottom: 20px;
-webkit-border-radius: 0px;
-moz-border-radius: 0px;
border-radius: 0px;
-webkit-box-shadow: none;
-moz-box-shadow: none;
box-shadow: none;
}






	</style>
               <ul class="nav navbar-nav navbar-right">
                  <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span><?=number_format($myzaccbal,8);  ?> LTC</span></a>
                     
                  </li>
				  
                <li class="dropdown">
                     <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu <b class="caret"></b></a>
                     <ul class="dropdown-menu">
                        <li><a href="./home.php?updatebalance=1">Update Balance</a></li>
                        <li class="divider"></li>
                        <li><a href="./index.php?logout=logout">Log out</a></li>
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





    
<!-- MAIN CONTAINER-->
<div class="container">
	<div class="row-fluid">
	<!-- LEFT SIDE CATEGORIES-->   
	<div class="span3" style="width: 23.076923076923077%;float: left;">         
		<div class="well">
			<ul id="cat-navi2" class="nav nav-list hidden-phone">
			   
<li style="margin-left: 20px;">Vendor: <?=$lkjhg['poster'];?></li>
		<li style="margin-left: 20px;">Price: <?php echo number_format(round($lkjhg['price'] / $mznxbcvtd[0], 8 ),8); ?></li>
		<li style="margin-left: 20px;">&nbsp;</li>
		<li style="margin-left: 20px;">&nbsp;</li>
		<li style="margin-left: 20px;">&nbsp;</li>
		
		
			<li style="margin-left: 20px;">Shipping Prices:</li>
			<form method="post" action="./item.php?id=<?=$_GET['id']; ?>">
			Please enter your gpg encrypted shipping address
			<textarea id="shipaddressee" name="shipaddressee" placeholder="Shipping address"></textarea>
			<select id="shipprice" name="shipprice">
			<?=$chcdrop; ?>
			</select>
			<button type="submit" class="btn btn-info" style="margin-left:3px;">Buy</button></form><br>
			
			</ul>
			
			
		</div><!-- /well--> 
			
			
	</div>
	<!-- /left SIDE--> 
	
		<!-- CONTENT SIDE-->
	<div class="span9"  style="width: 74.35897435897436%;float: left;margin-left: 2.564102564102564%;">
		
	
<!-- MARKETING LINE-->
		<div class="row-fluid" >
			<div class="well" style="padding:20px;">
				<div class="row-fluid">
					<div class="span8">
						<p class="lead">
			Site is in BETA stage. Things may not work as they should!.<br />
			
						</p>
					</div>
					
				</div>
			</div>
		</div>
		<!-- /MARKETING LINE-->
		

		<!-- MAIN PRODUCTS GRID-->
	<div class="row-fluid container-folio">
			<div class="well" style="padding:20px;">
				<div class="row-fluid">
					<div class="span8">
						<p class="lead">
			<div style="float:left;width:43%;">PRODUCT INFO<br><br><br>
			
			<?php
			echo main_text2bbc(htmlentities($lkjhg['hugeinfo']));
			
			?>
			</div>
				<div style="float:left;width:43%;word-wrap: break-word;margin-left:30px;">GPG KEY<br><br><br>
			<?php
			echo htmlentities($btvbrdg['gpg_address']);
			
			?></div>
						</p>
					</div>
					
				</div>
			</div>
			
	</div>
<!-- /INNER ROW-FLUID-->
			<hr>

</div>
<!-- /CONTENT SIDE-->
	
</div>



 
</div> <!-- /container -->
<!--/ CONTENT -->
      
	  
	  
	  
	  

</body></html>