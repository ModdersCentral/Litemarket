<?php
if(file_exists('./LOCK')){die('delete the \'LOCK\' file so the installer can start. if you already installed the software then just ignore this');}  


if (isset($_POST['submit'])){
	$myfile = fopen("config1.php", "w") or die("Unable to open file!");
	$txt = "
	
	
		\$mysqlhost=\"$_POST['mysql_host']\";
		\$mysqluser=\"$_POST['mysql_username']\";
		\$mysqlpass=\"$_POST['mysql_password']\";
		\$mysqldb=\"$_POST['mysql_db']\";
	
		\$rpcUser =\"$_POST['rpc_username']\";
		\$rpcPass =\"$_POST['rpc_password']\";
		\$rpcurl =\"$_POST['rpc_url']\";
	
		\$allowreg=$_POST['vendor_reg'];
	
		\$emalvalidpass='supersecurepassword';
		\$sitelongnme=\"$_POST['general_name']\";
		\$emailverifSTATUS=true;
	
		\$debug='none';
	
	"; 
	fwrite($myfile, $txt);
	fclose($myfile);
	$myfile2 = fopen("LOCK", "w") or die("Unable to open file!");
	fclose($myfile2);
	echo ('software installed');
	exit;
}




?>

<form method="post">
<h1>mysql</h1>
  mysql host:<br>
  <input type="text" name="mysql_host"><br>
   mysql username:<br>
  <input type="text" name="mysql_username"><br>
  mysql password:<br>
  <input type="text" name="mysql_password"><br>
  mysql db:<br>
  <input type="text" name="mysql_db"><br>
  
  
  <h1>bitcoin rpc</h1>
   rpc user:<br>
  <input type="text" name="rpc_username"><br>
     rpc password:<br>
  <input type="text" name="rpc_password"><br>
     rpc url:<br>
  <input type="text" name="rpc_url"><br>
  
  <h1>general</h1>
    website name:<br>
  <input type="text" name="general_name"><br>
  
  
   allow vendor registrations:<br>
   Yes<input type="radio" name="vendor_reg" value="1">
  No<input type="radio" name="vendor_reg" value="0"><br>
   
   
  <input type="submit" name="submit" />
</form>