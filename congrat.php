<?php
session_start();
if(isset($_SESSION['name'])){
	$user=$_SESSION['name'];
	}
else header('Location:http://localhost:8888/SimpleLogin/index.php');
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
<h2>Congratulations <?php echo $user;?>! You have successfully logged in</h2>
</body>
</html>
