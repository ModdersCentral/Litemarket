<?php
define('INSTALLED',true);
//whether to get info from daemon or website
$settings["setting_api_type"] = 0;//(0 - daemon,1 - website)
//the time which the price updates in millisceonds, 
$settings["setting_update_time"] = 21600000;//default: 6 hours
//whether the captcha is enabled
$settings["setting_captcha_enabled"] = 0;
//hide error details and display a user friendly error
$settings["setting_friendly_errors_enabled"] = 0;
//search engine friendly urls
$settings["setting_seo_friendly_pages"] = 0;


?>