<?php include('./settings/main.php');
		if (!medium_checkloggedin()){echo 'not logged in';exit();}
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
				}elseif(isset($_POST['countryfrom']) && isset($_POST['countryto']) && !empty($_POST['countryfrom']) && !empty($_POST['countryto'])){
						if (preg_match('/^([1-9]|[1-9][0-9]+)$/i',$_POST['countryfrom']) && preg_match('/^([1-9]|[1-9][0-9]+)$/i',$_POST['countryto'])){
							$mysqli->query('UPDATE `users` SET `shipesfrom`=\''. $mysqli->real_escape_string($_POST['countryfrom']) . '\',`shipesto`=\''. $mysqli->real_escape_string($_POST['countryto']) . '\' WHERE `username`=\''. $mysqli->real_escape_string($matcheds[2]) . '\';');
						}
				}
		$checkb=$mysqli->query("SELECT  `amount_current`,`shipesfrom`,`shipesto`,`deposit_address` FROM `users` WHERE `username`='".$mysqli->real_escape_string($matcheds[2])."' LIMIT 1") or die('please refresh');
		$dfgdfghweew=$checkb->fetch_assoc();
		$checkc=$mysqli->query("SELECT FORMAT( SUM( amounttotry ) , 8 ) AS sumOfColumn FROM transactions WHERE  `fromusername` =  '".$mysqli->real_escape_string($matcheds[2])."';") or die('please refresh');
		$fsdgdreg=$checkc->fetch_assoc();
			if (empty($fsdgdreg['sumOfColumn'])){
				$myzaccbal=$dfgdfghweew['amount_current'];
			}else{
				$myzaccbal=$dfgdfghweew['amount_current'] - $fsdgdreg['sumOfColumn'];
			}
		$shiipesfrom=intval($dfgdfghweew['shipesfrom']);
		$shiipesto=intval($dfgdfghweew['shipesto']);
		$debaddr=$dfgdfghweew['deposit_address'];
		//echo "#".$myzaccbal."#";
		//echo "formatted". number_format($myzaccbal,8);
		$shityqry='';
			if ($shiipesfrom <= 1){
				$shityqry=' ';
			}else{
				$shityqry .= ' AND `shipezfrom`=\'' . $shiipesfrom .'\' ';
			}
			if ($shiipesto <= 1){
				$shityqry .=' ';
			}else{
				$shityqry .= ' AND `shipezto`=\'' . $shiipesto . '\' ';
			}
				$checkc->free();
				unset($shiipesfrom);
				unset($shiipesto);
?><!DOCTYPE html>
		<html lang="en">
			<head>
				<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
				<meta charset="utf-8">
				<title><?=$sitelongnme;?> - Home</title>
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

    .pop-up {position:absolute; top:0; left:-500em;}
    .pop-up:target {position:static; left:0;}
    .popBox {
      background:#ffffff;
 position:absolute; left:30%; right:30%; top:30%; bottom:30%;

      z-index:10;
      border:1px solid #3a3a3a;
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
			    <li class="nav-header" style="display: block;padding: 3px 15px;font-size: 11px;font-weight: bold;line-height: 20px;color: #999999;text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);text-transform: uppercase;margin-left: -15px;
margin-right: -15px;">categories</li>
<?php
			$byjdh = $mysqli->query('SELECT * FROM `main_items`') or die('please refresh');
				while($r=$byjdh->fetch_assoc()){
					echo '<li class="active">'.$r['title']. '</li>';
					$bytyh = $mysqli->query('SELECT * FROM `sub_items` WHERE theid=\'' . $mysqli->real_escape_string($r['id']) . '\';') or die('please refresh');
						while($w=$bytyh->fetch_assoc()) {
							echo '<li style="margin-left: 20px;"><a style="margin-left: 10px;" href="home.php?id='.$w['id'].'">'.$w['title']. '</a></li>';
						}
				}
			?>
			  
				
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
			<span style="font-size: 20px;">Deposit address: <?=$debaddr; ?></span><br />
			<form action="./home.php" method="post" >
			Country from: 
			<select id="countryfrom" name="countryfrom" style="display: inline;width: 100px;">
				<option value="1" selected>Anywhere</option>					
	<option value="2">Afghanistan</option>
	<option value="3">Åland Islands</option>
	<option value="4">Albania</option>
	<option value="5">Algeria</option>
	<option value="6">American Samoa</option>
	<option value="7">Andorra</option>
	<option value="8">Angola</option>
	<option value="9">Anguilla</option>
	<option value="10">Antarctica</option>
	<option value="11">Antigua and Barbuda</option>
	<option value="12">Argentina</option>
	<option value="13">Armenia</option>
	<option value="14">Aruba</option>
	<option value="15">Australia</option>
	<option value="16">Austria</option>
	<option value="17">Azerbaijan</option>
	<option value="18">Bahamas</option>
	<option value="19">Bahrain</option>
	<option value="20">Bangladesh</option>
	<option value="21">Barbados</option>
	<option value="22">Belarus</option>
	<option value="23">Belgium</option>
	<option value="24">Belize</option>
	<option value="25">Benin</option>
	<option value="26">Bermuda</option>
	<option value="27">Bhutan</option>
	<option value="28">Bolivia, Plurinational State of</option>
	<option value="29">Bonaire, Sint Eustatius and Saba</option>
	<option value="30">Bosnia and Herzegovina</option>
	<option value="31">Botswana</option>
	<option value="32">Bouvet Island</option>
	<option value="33">Brazil</option>
	<option value="34">British Indian Ocean Territory</option>
	<option value="35">Brunei Darussalam</option>
	<option value="36">Bulgaria</option>
	<option value="37">Burkina Faso</option>
	<option value="38">Burundi</option>
	<option value="39">Cambodia</option>
	<option value="40">Cameroon</option>
	<option value="41">Canada</option>
	<option value="42">Cape Verde</option>
	<option value="43">Cayman Islands</option>
	<option value="44">Central African Republic</option>
	<option value="45">Chad</option>
	<option value="46">Chile</option>
	<option value="47">China</option>
	<option value="48">Christmas Island</option>
	<option value="49">Cocos (Keeling) Islands</option>
	<option value="50">Colombia</option>
	<option value="51">Comoros</option>
	<option value="52">Congo</option>
	<option value="53">Congo, the Democratic Republic of the</option>
	<option value="54">Cook Islands</option>
	<option value="55">Costa Rica</option>
	<option value="56">Côte d'Ivoire</option>
	<option value="57">Croatia</option>
	<option value="58">Cuba</option>
	<option value="59">Curaçao</option>
	<option value="60">Cyprus</option>
	<option value="61">Czech Republic</option>
	<option value="62">Denmark</option>
	<option value="63">Djibouti</option>
	<option value="64">Dominica</option>
	<option value="65">Dominican Republic</option>
	<option value="66">Ecuador</option>
	<option value="67">Egypt</option>
	<option value="68">El Salvador</option>
	<option value="69">Equatorial Guinea</option>
	<option value="70">Eritrea</option>
	<option value="71">Estonia</option>
	<option value="72">Ethiopia</option>
	<option value="73">Falkland Islands (Malvinas)</option>
	<option value="74">Faroe Islands</option>
	<option value="75">Fiji</option>
	<option value="76">Finland</option>
	<option value="77">France</option>
	<option value="78">French Guiana</option>
	<option value="79">French Polynesia</option>
	<option value="80">French Southern Territories</option>
	<option value="81">Gabon</option>
	<option value="82">Gambia</option>
	<option value="83">Georgia</option>
	<option value="84">Germany</option>
	<option value="85">Ghana</option>
	<option value="86">Gibraltar</option>
	<option value="87">Greece</option>
	<option value="88">Greenland</option>
	<option value="89">Grenada</option>
	<option value="90">Guadeloupe</option>
	<option value="91">Guam</option>
	<option value="92">Guatemala</option>
	<option value="93">Guernsey</option>
	<option value="94">Guinea</option>
	<option value="95">Guinea-Bissau</option>
	<option value="96">Guyana</option>
	<option value="97">Haiti</option>
	<option value="98">Heard Island and McDonald Islands</option>
	<option value="99">Holy See (Vatican City State)</option>
	<option value="100">Honduras</option>
	<option value="101">Hong Kong</option>
	<option value="102">Hungary</option>
	<option value="103">Iceland</option>
	<option value="104">India</option>
	<option value="105">Indonesia</option>
	<option value="106">Iran, Islamic Republic of</option>
	<option value="107">Iraq</option>
	<option value="108">Ireland</option>
	<option value="109">Isle of Man</option>
	<option value="110">Israel</option>
	<option value="111">Italy</option>
	<option value="112">Jamaica</option>
	<option value="113">Japan</option>
	<option value="114">Jersey</option>
	<option value="115">Jordan</option>
	<option value="116">Kazakhstan</option>
	<option value="117">Kenya</option>
	<option value="118">Kiribati</option>
	<option value="119">Korea, Democratic People's Republic of</option>
	<option value="120">Korea, Republic of</option>
	<option value="121">Kuwait</option>
	<option value="122">Kyrgyzstan</option>
	<option value="123">Lao People's Democratic Republic</option>
	<option value="124">Latvia</option>
	<option value="125">Lebanon</option>
	<option value="126">Lesotho</option>
	<option value="127">Liberia</option>
	<option value="128">Libya</option>
	<option value="129">Liechtenstein</option>
	<option value="130">Lithuania</option>
	<option value="131">Luxembourg</option>
	<option value="132">Macao</option>
	<option value="133">Macedonia, the former Yugoslav Republic of</option>
	<option value="134">Madagascar</option>
	<option value="135">Malawi</option>
	<option value="136">Malaysia</option>
	<option value="137">Maldives</option>
	<option value="138">Mali</option>
	<option value="139">Malta</option>
	<option value="140">Marshall Islands</option>
	<option value="141">Martinique</option>
	<option value="142">Mauritania</option>
	<option value="143">Mauritius</option>
	<option value="144">Mayotte</option>
	<option value="145">Mexico</option>
	<option value="146">Micronesia, Federated States of</option>
	<option value="147">Moldova, Republic of</option>
	<option value="148">Monaco</option>
	<option value="149">Mongolia</option>
	<option value="150">Montenegro</option>
	<option value="151">Montserrat</option>
	<option value="152">Morocco</option>
	<option value="153">Mozambique</option>
	<option value="154">Myanmar</option>
	<option value="155">Namibia</option>
	<option value="156">Nauru</option>
	<option value="157">Nepal</option>
	<option value="158">Netherlands</option>
	<option value="159">New Caledonia</option>
	<option value="160">New Zealand</option>
	<option value="161">Nicaragua</option>
	<option value="162">Niger</option>
	<option value="163">Nigeria</option>
	<option value="164">Niue</option>
	<option value="165">Norfolk Island</option>
	<option value="166">Northern Mariana Islands</option>
	<option value="167">Norway</option>
	<option value="168">Oman</option>
	<option value="169">Pakistan</option>
	<option value="170">Palau</option>
	<option value="171">Palestinian Territory, Occupied</option>
	<option value="172">Panama</option>
	<option value="173">Papua New Guinea</option>
	<option value="174">Paraguay</option>
	<option value="175">Peru</option>
	<option value="176">Philippines</option>
	<option value="177">Pitcairn</option>
	<option value="178">Poland</option>
	<option value="179">Portugal</option>
	<option value="180">Puerto Rico</option>
	<option value="181">Qatar</option>
	<option value="182">Réunion</option>
	<option value="183">Romania</option>
	<option value="184">Russian Federation</option>
	<option value="185">Rwanda</option>
	<option value="186">Saint Barthélemy</option>
	<option value="187">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="188">Saint Kitts and Nevis</option>
	<option value="189">Saint Lucia</option>
	<option value="190">Saint Martin (French part)</option>
	<option value="191">Saint Pierre and Miquelon</option>
	<option value="192">Saint Vincent and the Grenadines</option>
	<option value="193">Samoa</option>
	<option value="194">San Marino</option>
	<option value="195">Sao Tome and Principe</option>
	<option value="196">Saudi Arabia</option>
	<option value="197">Senegal</option>
	<option value="198">Serbia</option>
	<option value="199">Seychelles</option>
	<option value="200">Sierra Leone</option>
	<option value="201">Singapore</option>
	<option value="202">Sint Maarten (Dutch part)</option>
	<option value="203">Slovakia</option>
	<option value="204">Slovenia</option>
	<option value="205">Solomon Islands</option>
	<option value="206">Somalia</option>
	<option value="207">South Africa</option>
	<option value="208">South Georgia and the South Sandwich Islands</option>
	<option value="209">South Sudan</option>
	<option value="210">Spain</option>
	<option value="211">Sri Lanka</option>
	<option value="212">Sudan</option>
	<option value="213">Suriname</option>
	<option value="214">Svalbard and Jan Mayen</option>
	<option value="215">Swaziland</option>
	<option value="216">Sweden</option>
	<option value="217">Switzerland</option>
	<option value="218">Syrian Arab Republic</option>
	<option value="219">Taiwan, Province of China</option>
	<option value="220">Tajikistan</option>
	<option value="221">Tanzania, United Republic of</option>
	<option value="222">Thailand</option>
	<option value="223">Timor-Leste</option>
	<option value="224">Togo</option>
	<option value="225">Tokelau</option>
	<option value="226">Tonga</option>
	<option value="227">Trinidad and Tobago</option>
	<option value="228">Tunisia</option>
	<option value="229">Turkey</option>
	<option value="230">Turkmenistan</option>
	<option value="231">Turks and Caicos Islands</option>
	<option value="232">Tuvalu</option>
	<option value="233">Uganda</option>
	<option value="234">Ukraine</option>
	<option value="235">United Arab Emirates</option>
	<option value="236">United Kingdom</option>
	<option value="237">United States</option>
	<option value="238">United States Minor Outlying Islands</option>
	<option value="239">Uruguay</option>
	<option value="240">Uzbekistan</option>
	<option value="241">Vanuatu</option>
	<option value="242">Venezuela, Bolivarian Republic of</option>
	<option value="243">Viet Nam</option>
	<option value="244">Virgin Islands, British</option>
	<option value="245">Virgin Islands, U.S.</option>
	<option value="246">Wallis and Futuna</option>
	<option value="247">Western Sahara</option>
	<option value="248">Yemen</option>
	<option value="249">Zambia</option>
	<option value="250">Zimbabwe</option>
</select>
			country to:
			<select id="countryto" name="countryto" style="display: inline;width: 100px;">
				<option value="1" selected>Anywhere</option>					
	<option value="2">Afghanistan</option>
	<option value="3">Åland Islands</option>
	<option value="4">Albania</option>
	<option value="5">Algeria</option>
	<option value="6">American Samoa</option>
	<option value="7">Andorra</option>
	<option value="8">Angola</option>
	<option value="9">Anguilla</option>
	<option value="10">Antarctica</option>
	<option value="11">Antigua and Barbuda</option>
	<option value="12">Argentina</option>
	<option value="13">Armenia</option>
	<option value="14">Aruba</option>
	<option value="15">Australia</option>
	<option value="16">Austria</option>
	<option value="17">Azerbaijan</option>
	<option value="18">Bahamas</option>
	<option value="19">Bahrain</option>
	<option value="20">Bangladesh</option>
	<option value="21">Barbados</option>
	<option value="22">Belarus</option>
	<option value="23">Belgium</option>
	<option value="24">Belize</option>
	<option value="25">Benin</option>
	<option value="26">Bermuda</option>
	<option value="27">Bhutan</option>
	<option value="28">Bolivia, Plurinational State of</option>
	<option value="29">Bonaire, Sint Eustatius and Saba</option>
	<option value="30">Bosnia and Herzegovina</option>
	<option value="31">Botswana</option>
	<option value="32">Bouvet Island</option>
	<option value="33">Brazil</option>
	<option value="34">British Indian Ocean Territory</option>
	<option value="35">Brunei Darussalam</option>
	<option value="36">Bulgaria</option>
	<option value="37">Burkina Faso</option>
	<option value="38">Burundi</option>
	<option value="39">Cambodia</option>
	<option value="40">Cameroon</option>
	<option value="41">Canada</option>
	<option value="42">Cape Verde</option>
	<option value="43">Cayman Islands</option>
	<option value="44">Central African Republic</option>
	<option value="45">Chad</option>
	<option value="46">Chile</option>
	<option value="47">China</option>
	<option value="48">Christmas Island</option>
	<option value="49">Cocos (Keeling) Islands</option>
	<option value="50">Colombia</option>
	<option value="51">Comoros</option>
	<option value="52">Congo</option>
	<option value="53">Congo, the Democratic Republic of the</option>
	<option value="54">Cook Islands</option>
	<option value="55">Costa Rica</option>
	<option value="56">Côte d'Ivoire</option>
	<option value="57">Croatia</option>
	<option value="58">Cuba</option>
	<option value="59">Curaçao</option>
	<option value="60">Cyprus</option>
	<option value="61">Czech Republic</option>
	<option value="62">Denmark</option>
	<option value="63">Djibouti</option>
	<option value="64">Dominica</option>
	<option value="65">Dominican Republic</option>
	<option value="66">Ecuador</option>
	<option value="67">Egypt</option>
	<option value="68">El Salvador</option>
	<option value="69">Equatorial Guinea</option>
	<option value="70">Eritrea</option>
	<option value="71">Estonia</option>
	<option value="72">Ethiopia</option>
	<option value="73">Falkland Islands (Malvinas)</option>
	<option value="74">Faroe Islands</option>
	<option value="75">Fiji</option>
	<option value="76">Finland</option>
	<option value="77">France</option>
	<option value="78">French Guiana</option>
	<option value="79">French Polynesia</option>
	<option value="80">French Southern Territories</option>
	<option value="81">Gabon</option>
	<option value="82">Gambia</option>
	<option value="83">Georgia</option>
	<option value="84">Germany</option>
	<option value="85">Ghana</option>
	<option value="86">Gibraltar</option>
	<option value="87">Greece</option>
	<option value="88">Greenland</option>
	<option value="89">Grenada</option>
	<option value="90">Guadeloupe</option>
	<option value="91">Guam</option>
	<option value="92">Guatemala</option>
	<option value="93">Guernsey</option>
	<option value="94">Guinea</option>
	<option value="95">Guinea-Bissau</option>
	<option value="96">Guyana</option>
	<option value="97">Haiti</option>
	<option value="98">Heard Island and McDonald Islands</option>
	<option value="99">Holy See (Vatican City State)</option>
	<option value="100">Honduras</option>
	<option value="101">Hong Kong</option>
	<option value="102">Hungary</option>
	<option value="103">Iceland</option>
	<option value="104">India</option>
	<option value="105">Indonesia</option>
	<option value="106">Iran, Islamic Republic of</option>
	<option value="107">Iraq</option>
	<option value="108">Ireland</option>
	<option value="109">Isle of Man</option>
	<option value="110">Israel</option>
	<option value="111">Italy</option>
	<option value="112">Jamaica</option>
	<option value="113">Japan</option>
	<option value="114">Jersey</option>
	<option value="115">Jordan</option>
	<option value="116">Kazakhstan</option>
	<option value="117">Kenya</option>
	<option value="118">Kiribati</option>
	<option value="119">Korea, Democratic People's Republic of</option>
	<option value="120">Korea, Republic of</option>
	<option value="121">Kuwait</option>
	<option value="122">Kyrgyzstan</option>
	<option value="123">Lao People's Democratic Republic</option>
	<option value="124">Latvia</option>
	<option value="125">Lebanon</option>
	<option value="126">Lesotho</option>
	<option value="127">Liberia</option>
	<option value="128">Libya</option>
	<option value="129">Liechtenstein</option>
	<option value="130">Lithuania</option>
	<option value="131">Luxembourg</option>
	<option value="132">Macao</option>
	<option value="133">Macedonia, the former Yugoslav Republic of</option>
	<option value="134">Madagascar</option>
	<option value="135">Malawi</option>
	<option value="136">Malaysia</option>
	<option value="137">Maldives</option>
	<option value="138">Mali</option>
	<option value="139">Malta</option>
	<option value="140">Marshall Islands</option>
	<option value="141">Martinique</option>
	<option value="142">Mauritania</option>
	<option value="143">Mauritius</option>
	<option value="144">Mayotte</option>
	<option value="145">Mexico</option>
	<option value="146">Micronesia, Federated States of</option>
	<option value="147">Moldova, Republic of</option>
	<option value="148">Monaco</option>
	<option value="149">Mongolia</option>
	<option value="150">Montenegro</option>
	<option value="151">Montserrat</option>
	<option value="152">Morocco</option>
	<option value="153">Mozambique</option>
	<option value="154">Myanmar</option>
	<option value="155">Namibia</option>
	<option value="156">Nauru</option>
	<option value="157">Nepal</option>
	<option value="158">Netherlands</option>
	<option value="159">New Caledonia</option>
	<option value="160">New Zealand</option>
	<option value="161">Nicaragua</option>
	<option value="162">Niger</option>
	<option value="163">Nigeria</option>
	<option value="164">Niue</option>
	<option value="165">Norfolk Island</option>
	<option value="166">Northern Mariana Islands</option>
	<option value="167">Norway</option>
	<option value="168">Oman</option>
	<option value="169">Pakistan</option>
	<option value="170">Palau</option>
	<option value="171">Palestinian Territory, Occupied</option>
	<option value="172">Panama</option>
	<option value="173">Papua New Guinea</option>
	<option value="174">Paraguay</option>
	<option value="175">Peru</option>
	<option value="176">Philippines</option>
	<option value="177">Pitcairn</option>
	<option value="178">Poland</option>
	<option value="179">Portugal</option>
	<option value="180">Puerto Rico</option>
	<option value="181">Qatar</option>
	<option value="182">Réunion</option>
	<option value="183">Romania</option>
	<option value="184">Russian Federation</option>
	<option value="185">Rwanda</option>
	<option value="186">Saint Barthélemy</option>
	<option value="187">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="188">Saint Kitts and Nevis</option>
	<option value="189">Saint Lucia</option>
	<option value="190">Saint Martin (French part)</option>
	<option value="191">Saint Pierre and Miquelon</option>
	<option value="192">Saint Vincent and the Grenadines</option>
	<option value="193">Samoa</option>
	<option value="194">San Marino</option>
	<option value="195">Sao Tome and Principe</option>
	<option value="196">Saudi Arabia</option>
	<option value="197">Senegal</option>
	<option value="198">Serbia</option>
	<option value="199">Seychelles</option>
	<option value="200">Sierra Leone</option>
	<option value="201">Singapore</option>
	<option value="202">Sint Maarten (Dutch part)</option>
	<option value="203">Slovakia</option>
	<option value="204">Slovenia</option>
	<option value="205">Solomon Islands</option>
	<option value="206">Somalia</option>
	<option value="207">South Africa</option>
	<option value="208">South Georgia and the South Sandwich Islands</option>
	<option value="209">South Sudan</option>
	<option value="210">Spain</option>
	<option value="211">Sri Lanka</option>
	<option value="212">Sudan</option>
	<option value="213">Suriname</option>
	<option value="214">Svalbard and Jan Mayen</option>
	<option value="215">Swaziland</option>
	<option value="216">Sweden</option>
	<option value="217">Switzerland</option>
	<option value="218">Syrian Arab Republic</option>
	<option value="219">Taiwan, Province of China</option>
	<option value="220">Tajikistan</option>
	<option value="221">Tanzania, United Republic of</option>
	<option value="222">Thailand</option>
	<option value="223">Timor-Leste</option>
	<option value="224">Togo</option>
	<option value="225">Tokelau</option>
	<option value="226">Tonga</option>
	<option value="227">Trinidad and Tobago</option>
	<option value="228">Tunisia</option>
	<option value="229">Turkey</option>
	<option value="230">Turkmenistan</option>
	<option value="231">Turks and Caicos Islands</option>
	<option value="232">Tuvalu</option>
	<option value="233">Uganda</option>
	<option value="234">Ukraine</option>
	<option value="235">United Arab Emirates</option>
	<option value="236">United Kingdom</option>
	<option value="237">United States</option>
	<option value="238">United States Minor Outlying Islands</option>
	<option value="239">Uruguay</option>
	<option value="240">Uzbekistan</option>
	<option value="241">Vanuatu</option>
	<option value="242">Venezuela, Bolivarian Republic of</option>
	<option value="243">Viet Nam</option>
	<option value="244">Virgin Islands, British</option>
	<option value="245">Virgin Islands, U.S.</option>
	<option value="246">Wallis and Futuna</option>
	<option value="247">Western Sahara</option>
	<option value="248">Yemen</option>
	<option value="249">Zambia</option>
	<option value="250">Zimbabwe</option>
</select><button type="submit" class="btn btn-info" style="margin-left:3px;">Submit</button>
			</form>
						</p>
					</div>
					
				</div>
			</div>
		</div>
		<!-- /MARKETING LINE-->
		

		<!-- MAIN PRODUCTS GRID-->
	<div class="row-fluid container-folio">
			
				<!-- PROD GRID 
				============================================================ -->
	<?php
		$bnvnvxcv=$mysqli->query('SELECT `latestprice` FROM `settings` WHERE `id`=\'1\';') or die('please refresh');
		$mznxbcvtd=$bnvnvxcv->fetch_row();
	
		if (isset($_GET['id']) && ( preg_match( '/^\d*$/'  , $_GET['id']) == 1 ) && !empty($_GET['id'])){
				$results=$mysqli->query('SELECT COUNT(*) as num FROM `items` WHERE `subcatgory`=\''.$mysqli->real_escape_string($_GET['id']).'\''.$shityqry.';') or die('please refresh');
					if(isset($_GET['page']) && ( preg_match( '/^\d*$/'  , $_GET['page']) == 1 ) && !empty($_GET['page'])) {
						$start = ($_GET['page'] - 1) * 12; 
					}else{
						$start = 0;
					}
				$quey='SELECT * FROM `items` WHERE `subcatgory`=\''.$_GET['id'].'\''.$shityqry.' LIMIT '.$start.', 12;';
		}else{
				$results=$mysqli->query("SELECT COUNT(*) as num FROM `items`") or die('please refresh');
					if(isset($_GET['page']) && ( preg_match( '/^\d*$/'  , $_GET['page']) == 1 ) && !empty($_GET['page'])) {
						$start = ($_GET['page'] - 1) * 12; 
					}else{
						$start = 0;
					}
				$quey='SELECT * FROM `items` LIMIT '.$start.', 12;';
		}
			
			$data=$results->fetch_row();
			$total_pages = $data[0];
			$lastpage = ceil($total_pages/12);	
			$byjdh = $mysqli->query($quey);
		while($r=$byjdh->fetch_assoc()){
			$checkverf=$mysqli->query("SELECT `okvender` FROM `users` WHERE username='".$mysqli->real_escape_string($r['poster'])."' LIMIT 1") or die('please refresh');
			$data2=$checkverf->fetch_assoc();
				if ($data2['okvender'] == 20){
					$vendstat="";
				}else{
					$vendstat="<img src=\"./settings/uploads/verified.svg\" style=\"width: 10px;\"alt=\"verified\" title=\"trusted\" >";
				}
			$image="./settings/uploads/".$r['id'].".png";
				if (!file_exists($image)) {
					$image="./settings/uploads/default.png";
				}
	?>			
				<!-- PROD. ITEM -->
				<div class="span4" >
					<div class="thumbnail">
						<!-- IMAGE CONTAINER-->
						<img src="<?=$image;  ?>" style="height:134px;background-size: 100%;" alt="post image">
						<!--END IMAGE CONTAINER-->
						<!-- CAPTION -->
						<div class="caption">
						<h3 class="" style="height: 52px;"><a href="./item.php?id=<?=$r['id'];  ?>"><?=$r['title'];  ?></a></h3>
							<p class="">Seller: <?=$r['poster'] ?> <?=$vendstat; ?><br />Type: <?=$r['someinfo'];  ?></p>
							<div class="row-fluid">
								<div class="span6">
									<p class="lead"><?php echo number_format(round($r['price'] / $mznxbcvtd[0], 8 ),8,'.',''); ?> <sup>LTC</sup></p>
								</div>
								<div class="span6">
									<a class="btn btn-success btn-block" href="./item.php?id=<?=$r['id'];  ?>">View</a>
								</div>
							</div>
						</div> 
						<!--END CAPTION -->
					</div>
					<!-- END: THUMBNAIL -->
				</div>
				<!-- PROD. ITEM -->
				<?php
				}
				?>
				

				
				
				<!-- / PROD GRID 
				======================================= -->
				
				
				
	</div>
<!-- /INNER ROW-FLUID-->
			<hr>
<!-- PAGINATION-->
<div class="pagination pull-right">
  <ul style="display: inline-block;
margin-left: 0;
margin-bottom: 0;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
-webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
-moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);">
    
   
	<?php
	$range = 3;
	if (isset($_GET['id']) && ( preg_match( '/^\d*$/'  , $_GET['id']) == 1 )){$myctgryhere="id=".$_GET['id'] . "&";}else{$myctgryhere='';}
	
	
	if (isset($_GET['page']) && $_GET['page'] >= 1 && ( preg_match( '/^\d*$/'  , $_GET['page']) == 1 )){
	$currentpage=$_GET['page'];
	
	}else{
	$currentpage=1;
	
	}
	
	
	

// loop to show links to range of pages around current page
for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
   // if it's a valid page number...
   if (($x > 0) && ($x <= $lastpage)) {
      // if we're on current page...
      if ($x == $currentpage) {
         // 'highlight' it but don't make a link
echo "  <li class=\"active\" style=\"display: inline;\"><a href=\"./home.php?{$myctgryhere}page=$x\">$x</a></li>";
      // if not current page...
      } else {
         // make it a link
         echo "  <li style=\"display: inline;\"><a href=\"./home.php?{$myctgryhere}page=$x\">$x</a></li>";
      } // end else
   } // end if 
} // end for
   
	?>
	 
  </ul>
</div>
<!-- /PAGINATION-->
</div>
<!-- /CONTENT SIDE-->
	
</div>



 
</div> <!-- /container -->
<!--/ CONTENT -->
      
	  
	  
	  
	  

</body></html>