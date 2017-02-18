<?php

function connectDB(){
	global $db;
	$db = mysqli_connect('localhost','root','','hall');
	if(mysqli_error($db)){
		die('Unable to connect with databse');
	}
	// return $db;
}
	// $sql = 'select * from halls';
	// $res = mysqli_query($db,$sql);
	// echo "<pre>";
	// while($row = mysqli_fetch_assoc($res)){
	// 	print_r($row);
	// }