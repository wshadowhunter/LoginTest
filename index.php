<?php
$error='';
if(isset($_POST['login'])){
	session_start();
	$username=trim($_POST['username']);
	$password=sha1($username.$_POST['password']);
	$redirect='http://localhost:8888/SimpleLogin/congrat.php';
	require_once('./authenticate.inc.php');
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<link href="css/admin.css" rel="stylesheet" type="text/css">
<script src="_js/jquery-1.6.3.min.js"></script>
<script>
$(document).ready(function(e) {
	$('#form1').toggleClass('hide');
    $('#fadeto').fadeOut(2000, function(){
		$('#form1').show();
		}
	);
});
</script>
</head>

<body>
<?php
if($error) echo "<p>$error</p>";
?>
<h2 id="fadeto">Welcome to TimeGrab!</h2>
<form id="form1" name="form1" method="post" action="">
<p>
  <label for="username">Username:</label>
  <input type="text" name="username" id="username" />
</p>
<p>
  <label for="password">Password:</label>
  <input type="password" name="password" id="password" />
</p>
<p>
<input name="login" type="submit" value="Log in" />
</p>
</form>
</body>
</html>
