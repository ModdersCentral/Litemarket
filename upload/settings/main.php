<?php
error_reporting(E_ERROR);//or at sign in front of include
if ((include "conf.php") != true){die("Doesn't look like you installed this script.");}
@$mysqli = new mysqli($mysqlhost, $mysqluser, $mysqlpass, $mysqldb);
if ($mysqli->connect_errno || !isset($mysqlhost) || !isset($debug) || !isset($emalvalidpass) || !preg_match('/^[a-zA-Z0-9]{3,30}$/i', $emalvalidpass)) {
echo "<style>#container {width:500px;padding:0 0 50px;margin:0 auto;}
/* Should you want to set a background colour on a containing element
certain types of bubble effect may require you to include these 
style declarations. */
.content {position:relative;z-index:1;text-align:center;}
.triangle-right.top {background:-webkit-gradient(linear, 0 0, 0 100%, from(#075698), to(#2e88c4));background:-moz-linear-gradient(#075698, #2e88c4);background:-o-linear-gradient(#075698, #2e88c4);background:linear-gradient(#075698, #2e88c4);}
.triangle-border {position:relative;padding:15px;margin:1em 0 3em;border:5px solid #5a8f00;color:#333;background:#fff;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;}
.triangle-border:before {content:'';position:absolute;bottom:-20px; /* value = - border-top-width - border-bottom-width */left:40px; /* controls horizontal position */border-width:20px 20px 0;border-style:solid;border-color:#5a8f00 transparent; /* reduce the damage in FF3.0 */display:block; width:0;}
/* creates the smaller  triangle */
.triangle-border:after {content:'';position:absolute;bottom:-13px; /* value = - border-top-width - border-bottom-width */left:47px; /* value = (:before left) + (:before border-left) - (:after border-left) */border-width:13px 13px 0;border-style:solid;border-color:#fff transparent;/* reduce the damage in FF3.0 */display:block;width:0;}
/* creates the larger triangle */
.triangle-border.top:before {top:-20px; /* value = - border-top-width - border-bottom-width */bottom:auto;left:auto;right:240px; /* controls horizontal position */border-width:0 20px 20px;}/* creates the smaller  triangle */
.triangle-border.top:after {top:-13px; /* value = - border-top-width - border-bottom-width */bottom:auto;left:auto;right:247px; /* value = (:before right) + (:before border-right) - (:after border-right) */border-width:0 13px 13px;}
</style>";echo "<div id=\"container\"><div class=\"content\"><p class=\"triangle-border top\">" .  (isset($mysqli->connect_error) ? $mysqli->connect_error:'')."<br />" .(isset($mysqlhost) ? 'yes':'db settings are not set') ."</code>.</p></div>"; exit();}
////////////////////////////////\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
class Cipher {
    private $securekey, $iv;
    function __construct($textkey) {
        $this->securekey = hash('sha256',$textkey,TRUE);$this->iv = mcrypt_create_iv(32);
    }
    function encrypt($input) {
        return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, $this->securekey, $input, MCRYPT_MODE_ECB, $this->iv));
    }
    function decrypt($input) {
        return trim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, $this->securekey, base64_decode($input), MCRYPT_MODE_ECB, $this->iv));
    }
}
class Bitcoin {
	// @var string
	private $username;
	// @var string
	private $password;
	// @var string
	private $url;
	// @var integer
	private $id;
	
	/**
	 * Contructor
	 *
	 * @param string $url
	 * @param string $username
	 * @param string $password
	 * @param boolean $debug
	 */
	public function __construct($url, $username, $password) {
		//connection details
		$this->url = $url;
		$this->username = $username;
		$this->password = $password;
		//request id
		$this->id = 1;
	}
	
	/**
	 * Perform jsonRCP request and return results as array
	 *
	 * @param string $method
	 * @param array $params
	 * @return array
	 */
	public function __call($method,$params) {		
		// make params indexed array of values
		$params = array_values($params);
		
		// prepares the request
		$request = json_encode(array(
						'method' => strtolower($method),
						'params' => $params,
						'id' => $this->id
						));
						
		// performs the HTTP POST using curl
		$curl = curl_init();     
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);  
		curl_setopt($curl, CURLOPT_HTTPHEADER, Array("Content-type: application/json"));
		curl_setopt($curl, CURLOPT_URL, $this->url);  
		curl_setopt($curl, CURLOPT_USERPWD, $this->username.":".$this->password);  
		curl_setopt($curl, CURLOPT_POST, TRUE);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $request);
		$responses = curl_exec($curl);  
		curl_close($curl); 
		
		// process response
		if (!$responses) {
			throw new Exception('Unable to connect to '.$this->url, 0);
		}
		$response = json_decode($responses,true);
		
		// check response id
		if ($response['id'] != $this->id) {
			throw new Exception('Incorrect response id (request id: '.$this->id.', response id: '.$response['id'].')',1);
		}
		if (!is_null($response['error'])) {
			throw new Exception('Request error: '.print_r($response['error'],1),2);
		}
		$this->id++;
					if (strtolower($method) =="getreceivedbyaddress"){
						if (preg_match('/^{"result":(.*?),"error":null,"id":(.*?)}$/i', $responses,$fhjwetgjh)){
						return $fhjwetgjh[1];
						}
					}else{
						return $response['result'];
					}
		// return
		
	}
}


$bitcoinlolrpc = new Bitcoin($rpcurl, $rpcUser, $rpcPass);
/////////////////////////MAIN FUNCTIONS\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
function main_text2bbc($text){ $find = array(  '~\[b\](.*?)\[/b\]~s',  '~\[i\](.*?)\[/i\]~s',  '~\[u\](.*?)\[/u\]~s', '~\[size=(.*?)\](.*?)\[/size\]~s',  '~\[color=(.*?)\](.*?)\[/color\]~s',  '~\[newline\]~s'  );  $replace = array(  '<b>$1</b>', '<i>$1</i>',   '<span style="text-decoration:underline;">$1</span>',  '<span style="font-size:$1px;">$2</span>', '<span style="font-weight: bold;color:$1;">$2</span>','<br>'  ); return preg_replace($find,$replace,$text); } 
function main_validateid($theid){if ($dfds=base64_decode($theid,true)){if(preg_match('/^([1-9]|[1-9][0-9]+)$/i', $dfds)){return $dfds;}else{return false;}}else{return false;}}
function main_validateusername($username){if (preg_match('/^[a-zA-Z0-9_-]{3,30}$/i', $username)) {return true;}else{ return false;}}
function main_validatepassword($password){if (preg_match('/^[a-zA-Z0-9_-]{3,30}$/i', $password)) {return true;}else{ return false;}}
function main_validatefirstname($firstname){if (preg_match('/^[a-zA-Z]{3,30}$/i', $firstname)) {return true;}else{ return false;}}
function main_validatelastname($lastname){if (preg_match('/^[a-zA-Z]{3,30}$/i', $lastname)) {return true;}else{ return false;}}
function main_TableExists($table) {global $mysqli;$res = $mysqli->query("SHOW TABLES LIKE '".$table."';"); if(isset($res->num_rows)) { return $res->num_rows > 0 ? true : false; } else return false;}
function main_captchacheckanswer($answer) {if (strtolower($_SESSION['captcha']) == strtolower($answer)) {unset($_SESSION['captcha']); return true; }else{ unset($_SESSION['captcha']);return false;}}
/////////////////////////MEDIUM LOGIN FUNCTIONS\\\\\\\\\\\\\\\\\\\\\\
//#completed mainlogin#\\
	function medium_mainlogin($useroremail,$password,$vendor=false){
		global $mysqli;
		$gbhgbhgbh = new Cipher('litemarketgpgrulezlol95');
		
		$result = $mysqli->query("SELECT * FROM `users` WHERE `username`='" . $mysqli->real_escape_string($useroremail) . "' and `password`='" . md5($password) . "' and `userlevel`='".($vendor==true ? 30 : 20)."' LIMIT 1;") or die('sorry...query failed, please click me <a href="./index.php">home</a>');
		$row_cnt = $result->num_rows;
		if($row_cnt==1){
		$row = $result->fetch_assoc();
		if ($vendor==true){
		setcookie('lite_engine', $gbhgbhgbh->encrypt('['.(time()+86400).';'.$row['username'] . ']2','/'),  time()+86400);
		}else{
		setcookie('lite_engine', $gbhgbhgbh->encrypt('['.(time()+86400).';'.$row['username'] . ']1','/'),  time()+86400);
		}
		
		setcookie('engine_version', '1',  time()+86400);
		unset($row_cnt); unset($row); 
		 $result->close();
		return false;
		}else{
		return 'check password or username';
		}
		}
//#completed register#\\
	function medium_register($username,$password,$cpassword,$gpg,$liteaddr,$answer,$vendor=false){global $bitcoinlolrpc;
		global $mysqli;
		if(!empty($username) && !empty($password)  && !empty($cpassword)  && !empty($gpg)  && !empty($liteaddr)  && !empty($answer)){
			if (main_captchacheckanswer($answer)){
				if (main_validateusername($username)){
					if (main_validatepassword($password)){
						if($password == $cpassword){
							if(strlen($gpg) <= 4097 && strlen($gpg) >=100){
							
								if(strlen($liteaddr) == 34 && $liteaddr[0] == "L" && preg_match('/^[a-zA-Z0-9]+$/', $liteaddr)){
									if ($usernamecheck = $mysqli->query("SELECT * FROM `users` WHERE `username`='".$username."'")){
										if ($usernamecheck->num_rows ==0){
											try {
												$rgrgeh = $bitcoinlolrpc->getnewaddress('lol');
												$mysqli->query('INSERT INTO `transactions`(`amounttotry`, `sipaddr`, `fromusername`, `tousername`) VALUES (\'0.00000000\',\'2\',\''.$username.'\',\' \')');
												$mysqli->query("INSERT INTO `users`( `username`, `password`,`userlevel`,`deposit_address`,`amount_used`,`amount_current`,`gpg_address`,`emergy_addr`)  VALUES ('".$mysqli->real_escape_string($username)."','".md5($password)."','".($vendor==true ? 30 : 20)."','".$rgrgeh."','0','0.00000000','".$mysqli->real_escape_string($gpg)."','".$mysqli->real_escape_string($liteaddr)."')");
												return 'Success';
											} catch (Exception $e) {
												return ($e->getMessage());
											}
											
											
											
										}else{
											return "Error: username taken";
										}
									}else{
										return "Error: query failed";
									}
								}else{
									return "Error: lite address invalid";
								}
							
							}else{
								return "Error: gpg invalid";
							}
						}else{
							return "Error: password doesnt match confirm";
						}
					}else{
						return "Error: password invalid. a-z A-Z 0-9 _ -";
					}
				}else{
					return "Error: username invalid. a-z A-Z 0-9 _ -";
				}
			}else{
				return "Error: capcha not valid.";
			}
		}else{
			return "Error: empty field(s).";
		}
	}
//#completed checkloggedin#\\
	function medium_checkloggedin($vendor=false){
		global $mysqli;
		$gbhgbhgbh = new Cipher('litemarketgpgrulezlol95');
		if($vendor==true){
			if ((isset($_COOKIE['lite_engine'])) && (preg_match("~^\[([0-9]+);([a-zA-Z0-9]+)\]2$~", $gbhgbhgbh->decrypt($_COOKIE['lite_engine']),$matches) == true)){
			if (INTVAL(INTVAL($matches[1]) - (time())) > 1){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
		}else{
		if ((isset($_COOKIE['lite_engine'])) && (preg_match("~^\[([0-9]+);([a-zA-Z0-9]+)\]1$~", $gbhgbhgbh->decrypt($_COOKIE['lite_engine']),$matches) == true)){
			if (INTVAL(INTVAL($matches[1]) - (time())) > 1){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
		}
		
	}


	
	
	
	
	
	
	
	
	
	
	
?>