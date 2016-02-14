<?php
session_start();
include_once('data_connect.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['admin_id'];
$user=$_SESSION['username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])." ");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $user;?> - Profile</title>
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
<h1> Profile</h1></div>
<div id="left_column">
<div id="button">
<ul>
			<li><a href=" ">Update</a></li>
			<li><a href=" ">Delete</a></li>
			<li><a href=" ">Logout</a></li>
		</ul>
</div>
		</div>
<div id="main">
          <div class="grid_7">
            	<a href=" " class="dashboard-module">
              <input type="submit" value="Back">
                </a>

			</div>
</div>
</div>
</body>
</html>
