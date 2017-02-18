<?php

/**
Check session
*/
   include('Config.php');
   session_start();
   if(empty($_SESSION['login_user'])){
   $user_check=$_SESSION['login_user'];
   
   $ses_sql=$db->query("select user_name from user where user_name='$user_check' ");
   
$row = $ses_sql->fetch_assoc();
   
   $login_session=$row['user_name'];
   }
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
