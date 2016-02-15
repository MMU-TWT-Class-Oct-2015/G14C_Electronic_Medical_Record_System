<?php
session_start();
include_once('connect.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['admin_id'];
$user=$_SESSION['username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."index.php ");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
body {

	background-color: grey;
}
h1 {
	font-family: "Cooper Black";
	color: black;
	text-align: center;

}

</style>

<title>Admin EMR</title>
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="style/dashboard_styles.css"  media="screen" />
<script src="js/function.js" type="text/javascript"></script>
<style>
#left_column{
height: 470px;
}
</style>
</head>
<body>
<div id="content">
<div id="header">
<h1> Admin EMR</h1></div>
<div id="left_column">
<div id="button">
<ul>
			<li><a href="insert.php">Patient Details</a></li>
			<li><a href="visitor.html">Search</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
</div>
		</div>
>
</div>
</body>
</html>
