<?php include('./../../../settings/main.php');
//
//COMPLETE
//
//
//
	function btce_query() {
        // our curl handle (initialize if required)
        static $ch = null;
        $ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://btc-e.com/api/2/' . (((!isset($main_coin_currency)) ||  $main_coin_currency == 0) ? 'l' : 'b') . 'tc_usd/ticker');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/4.0 (compatible; BTCE PHP client; ; PHP/'.phpversion().')');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
 
        // run the query
        $res = curl_exec($ch);
        if ($res === false) die('Could not get reply: '.curl_error($ch));
        $dec = json_decode($res, true);
        if (!$dec) die('Invalid data received, please make sure connection is working and requested API exists');
        return $dec['ticker']['high'];
	}
	$rhjiothjb=btce_query();
		
			//echo $rhjiothjb;
			$bnvnvxcv=$mysqli->query('SELECT `dteupdted` FROM `settings` WHERE `id`=\'1\';') or die('please refresh');
			$mznxbcvtd=$bnvnvxcv->fetch_row();
			if(empty($mznxbcvtd[0]) || (($mznxbcvtd[0] - time()) <= 0)){
			$mysqli->query('UPDATE `settings` SET `latestprice`=\''.$rhjiothjb.'\',`dteupdted`=\''.(time()+36000) .'\' WHERE `id`=\'1\'');
			echo '404';
			}
		
	echo ($mznxbcvtd[0] - time());
	
	
	
	

?>