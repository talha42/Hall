<?php
define('DEV_MODE','1');
if(!defined('ADMIN')){
    // echo "No dice!!";exit;
}

// include_once('config.php');
include_once('shared.php');
/*if(checkCredentials($_POST['username'], $_POST['password'])){
	echo 'logged in';
}*/

if(!empty($_POST['action'])){
	call_user_func($_POST['action']);
}else{
?>
<script type="text/javascript" src="js/jquery-3.1.1.js"></script>
<script type="text/javascript" src="js/main.js"></script>

	<input type="text" name="username"/>
	<input type="password" name="password"/>
	<input type="submit" id="submitlogin" value="Login"/>
<?php } ?>