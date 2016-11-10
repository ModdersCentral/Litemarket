<?php
function installedcheck(){
	if (!defined('INSTALLED')) {
		header('Location: install/index.php');
	}
}







?>