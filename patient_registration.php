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
if(isset($_POST['submit'])){
$sname=$_POST['first_name'];
$lname=$_POST['last_name'];
$age=$_POST['age'];
$add=$_POST['address'];
$cou=$_POST['country'];
$dob=$_POST['date_of_birth'];
$gender=$_POST['gender'];
$mhis=$_POST['medical_history'];
$sql=mysql_query("INSERT INTO patient(first_name,last_name,age,address,country,date_of_birth,gender,medical_history,)
VALUES('$sname','$lname','$age','$add','$cou','$dob','$gender','$mhis',NOW())");
if($sql>0) {header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])." ");
}else{
$message1="<font color=red>Registration Failed, Try again</font>";
}
	}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $user;?> - EMR</title>
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="style/table.css" type="text/css" media="screen" />
<script src="js/function.js" type="text/javascript"></script>
<style>#left-column {height: 477px;}
 #main {height: 477px;}</style>
</head>
<body>
<div id="content">
<div id="header">
<h1></a> Admin EMR</h1></div>
<div id="left_column">

		</div>
    <h3>Registration</h3>

			<form name="myform" onsubmit="return validateForm(this);" action=" " method="post" >
			<table width="420" height="106" border="0" >
				<tr><td align="center"><input name="first_name" type="text" style="width:170px" placeholder="First Name" required="required" id="first_name" /></td></tr>
				<tr><td align="center"><input name="last_name" type="text" style="width:170px" placeholder="Last Name" required="required" id="last_name"/></td></tr>
				<tr><td align="center"><input name="age" type="text" style="width:170px" placeholder="Age" required="required" id="age" /></td></tr>
				<tr><td align="center"><input name=" address" type="text" style="width:170px" placeholder="Address"  required="required" id="address" /></td></tr>
				<tr><td align="center"><input name="country" type="text" style="width:170px" placeholder="country" required="required" id="country" /></td></tr>
				<tr><td align="center"><input date="date_of_birth" type="bday" style="width:170px" placeholder="D.O.B" required="required" id="date_of_birth" /></td></tr>
					<tr><td align="center"><input name="gender" type="text" style="width:170px" placeholder="Gender" required="required" id="gender" /></td></tr>
			<tr><td align="center"><input name="medical_history" type="text" style="width:170px" placeholder="Medical History" required="required" id="medical_history" /></td></tr>
				<tr><td align="center"><input name="submit" type="submit" value="Submit" id="submit"/></td></tr>

            </table>
		</form>
        </div>

    </div>

</div>

</div>
</div>
</body>
</html>
