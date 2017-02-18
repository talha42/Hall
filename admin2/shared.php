<?php 

//shared function

include_once('database.php');
	connectDB();
	
/**
	input: username and password
	output: boolean 
**/
function authenticate(){
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];	
	if(!empty($username) && !empty($password)){	
		$row = getDetails($username,'halls');
		if($row['password'] == md5($password)){	
			echo "true";
		}else{
			echo "false";
		}
	}
}

function register(){
	global $db;
	print_r($_REQUEST);
	$sql = ("INSERT INTO `halls` ( `hallname`,`username`,`email`, `password`, `contact`, `state`, `city`, `area`, `pincode`, `landmark`, `description`, `photos`, `capacity`, `price`, `decoration`) VALUES ( '".$_REQUEST['hallname']."','".$_REQUEST['username']."', '".$_REQUEST['email']."', '".md5($_REQUEST['password'])."', ".$_REQUEST['contact'].", '".$_REQUEST['state']."', '".$_REQUEST['city']."', '".$_REQUEST['area']."', '".$_REQUEST['pincode']."', '".$_REQUEST['landmark']."', '".$_REQUEST['description']."', '".$_REQUEST['photos']."', '".$_REQUEST['capacity']."', '".$_REQUEST['price']."', '".$_REQUEST['decoration']."');");
	echo $sql;
	mysqli_query($db,$sql);
}

function getDetails($param,$table){
	global $db;
	$sql = ("SELECT * from ".$table." where name='".mysqli_real_escape_string($db, $param)."' LIMIT 1");
	$result = mysqli_query($db, $sql);
	if(mysqli_error($db) && DEV_MODE == 1){
		echo mysqli_errno($db);
	}
	$row = mysqli_fetch_assoc($result);
	return $row;
}