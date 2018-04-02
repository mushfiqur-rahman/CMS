<?php
session_start();

$cn = mysqli_connect("localhost", "root", "", "dbus_002");

function ms($value)
{
	global $cn;
	return mysqli_real_escape_string($cn, $value);
}

include('component/accountManager.php');

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My Sweet First Web Site</title>
<link rel="stylesheet" href="css/index.css"/>
<link rel="stylesheet" href="css/tables.css"/>
<link rel="stylesheet" href="css/css3menu.css"/>
<link rel="stylesheet" href="css/control.css"/>
<link rel="stylesheet" href="css/article.css"/>
</head>
<body>
<div class="header">
	<h1>Header Here</h1>
</div>
<div class="main">
	<div class="menu">
		<?php include('component/menu.php'); ?>
	</div>
	<div class="content">
		<?php
		include('component/controller.php');
		?>
	</div>
</div>
<div class="footer">
	footer
</div>
</body>
</html>