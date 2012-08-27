<?php
$correctpwd=sha1($username.'haosun');
if($username=='haosun'&& $password==$correctpwd){
	$_SESSION['authenticated']='Authenticated';
	$_SESSION['name']=$username;
	}
if(isset($_SESSION['authenticated'])){
	header("Location:$redirect");
		exit;
		}
else $error='wrong user name or password';