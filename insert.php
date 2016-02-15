<?php
 session_start();
  include_once("connect.php");
  if(isset($_POST['submit'])!=""){

  $user=mysql_real_escape_string($_POST['username']);
  $userpsw=mysql_real_escape_string($_POST['password']);
  $fname=mysql_real_escape_string($_POST['first_name']);
  $lname=mysql_real_escape_string($_POST['last_name']);
  $pat=mysql_real_escape_string($_POST['patient_ic']);
  $age=mysql_real_escape_string($_POST['age']);
  $date=mysql_real_escape_string($_POST['date_of_birth']);
  $add=mysql_real_escape_string($_POST['address']);
  $cou=mysql_real_escape_string($_POST['country']);
  $gen=mysql_real_escape_string($_POST['gender']);
  $mhis=mysql_real_escape_string($_POST['medical_history']);

  $update=mysql_query("INSERT INTO patient_data(username,password,first_name,last_name,patient_ic,age,date_of_birth,address,country,gender,medical_history)
  VALUES('$user','$userpsw','$fname','$lname','$pat','$age','$date','$add','$cou','$gen','$mhis')");

  if($update)
  {
	  $msg="Successfully Updated!!";
	  echo "<script type='text/javascript'>alert('$msg');</script>";
	  header('Location:admin.php');
  }
  else
  {
	 $errormsg="Something went wrong, Try again";
	  echo "<script type='text/javascript'>alert('$errormsg');</script>";
	  header('Location:admmin.php');
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
<body background="http://www.noormedical.com/files/medical_0.jpg">
<div id="content">
<div id="header">
<h1></a> Admin EMR</h1></div>
<div id="left_column">

		</div>
    <h3>Registration</h3>

			<form name="myform" onsubmit="return validateForm(this);" method="post" >
			<table width="420" height="106"
					<tr><td align="center"><input name="patient_ic" type="text" style="width:170px" placeholder="IC Number" required="required" id="patient_ic" /></td></tr>
				<tr><td align="center"><input name="first_name" type="text" style="width:170px" placeholder="First Name" required="required" id="first_name" /></td></tr>
				<tr><td align="center"><input name="last_name" type="text" style="width:170px" placeholder="Last Name" required="required" id="last_name"/></td></tr>
				<tr><td align="center"><input name="age" type="text" style="width:170px" placeholder="Age" required="required" id="age" /></td></tr>
				<tr><td align="center"><input name=" address" type="text" style="width:170px" placeholder="Address"  required="required" id="address" /></td></tr>
				<tr><td align="center"><input name="country" type="text" style="width:170px" placeholder="country" required="required" id="country" /></td></tr>
				<tr><td align="center"><input name="date_of_birth" type="bday" style="width:170px" placeholder="D.O.B" required="required" id="date_of_birth" /></td></tr>
					<tr><td align="center"><input name="gender" type="text" style="width:170px" placeholder="Gender" required="required" id="gender" /></td></tr>
		<tr><td align="center"><input name="username" type="text" style="width:170px" placeholder="username" required="required" id="username" /></td></tr>
<tr><td align="center"><input name="psw" type="password" style="width:170px" placeholder="password" required="required" id="password" /></td></tr>
			<tr><td align="center"><input name="medical_history" type="text" style="width:170px" placeholder="Medical History" required="required" id="medical_history" /></td></tr>
				<tr><td align="center"><input name="submit" type="submit" value="Submit" id="submit"/></td></tr>

            </table>
		</form>
        </div>

    </div>
    <br>
    <br>
<?php include('view.php');?>
</div>

</div>
</div>
</body>
</html>
