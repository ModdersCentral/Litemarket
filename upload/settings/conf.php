<?php session_start();
//////////////////////
//sql connection settings
//////////////////////
$mysqlhost="localhost";
$mysqluser="tormarket";
$mysqlpass="tormarket";
$mysqldb="tormarket";
//////////////////////
//litecoin/bitcoin connection settings
//////////////////////
$rpcUser = "litecoin1337";
$rpcPass = "bitcoincansucksometimes1";
$rpcurl = "http://192.168.0.5:1995";
//////////////////////
//allow vendor registrations - useful if you just want to sell items
//////////////////////
$allowreg=true;





///////////////////////////
//email validation password to keep it secure
//MUST change it for security reasons... recommended you change it every month. just to be safer
///////////////////////////
$emalvalidpass='supersecurepassword';
$sitelongnme='Lite Market';
$emailverifSTATUS=true;
////////////////////////////
//////////////////////
//debug settings//////
//ok - on    |  log - put in a file    |    none - none 
//not implemented yet
$debug='none';

//////////////////////
?>