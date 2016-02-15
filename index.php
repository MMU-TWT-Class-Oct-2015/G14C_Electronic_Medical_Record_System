<?php
include_once 'connect.php';
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$position=$_POST['position'];
switch($position){
case 'Admin':
$result=mysql_query("SELECT admin_id, username FROM admin WHERE username='$username' AND password='$password'");
$row=mysql_fetch_array($result);
if($row>0){
session_start();
$_SESSION['admin_id']=$row[0];
$_SESSION['username']=$row[1];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/admin.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
case 'Patient':
$result=mysql_query("SELECT patient_id, username FROM patient_data WHERE username='$username' AND password='$password'");
$row=mysql_fetch_array($result);
if($row>0){
session_start();
$_SESSION['patient_id']=$row[0];
$_SESSION['username']=$row[1];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/patient.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
case 'Doctor':
$result=mysql_query("SELECT doctor_id,username FROM doctor WHERE username='$username' AND password='$password'");
$row=mysql_fetch_array($result);
if($row>0){
session_start();
$_SESSION['doctor_id']=$row[0];
$_SESSION['username']=$row[1];
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/doctor_vw.php");
}else{
$message="<font color=red>Invalid login Try Again</font>";
}
break;
}}?>
<!DOCTYPE html>
<html>
<head>
<title>EMR</title>
</head>

<body background="http://kristinmullertranscription.com/wp-content/uploads/2013/12/medical.jpg">
<div id="content">
<div id="header">
<h1><p><font color="red">Welcome To Electronic Medical Record Sytem!</font></p></h1></div>
</div>
<div id="main">

  <section class="container">

     <div class="login">
      <h1>Login here</h1>
      <form method="post" action="index.php">
		 <p><input type="text" name="username" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
		<p><select name="position">
		<option>--Select position--</option>
			<option>Admin</option>
			<option>Patient</option>
			<option>Doctor</option>
					</select></p>
        <p class="submit"><input type="submit" name="submit" value="Login"></p>
      </form>
    </div>
    </section>
    </html>
</div>
</body>
