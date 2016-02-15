<?php
session_start();
include_once('connect.php');

if(isset($_GET['patient_id']))
{
  $id=$_GET['patient_id'];
  if(isset($_POST['update']))
  {
    $username=$_POST['eusername'];
    $fname=$_POST['efirst_name'];
    $lname=$_POST['elast_name'];
    $pat=$_POST['epatient_ic'];
    $age=$_POST['eage'];
    $dob=$_POST['edate_of_birth'];
    $add=$_POST['eaddress'];
    $cou=$_POST['ecountry'];
    $gen=$_POST['3gender'];
    $hist=$_POST['emedical_history'];
  $updated=mysql_query("UPDATE patient_data SET
		username='$username', first_name='$fname', last_name='$lname',patient_ic='$pat',age='$age',date_of_birth='$dob',
    address='$add',country='$cou',gender='$gen',medical_history='$hist' WHERE patient_id='$id'")or die();
  if($updated)
  {
  $msg="Successfully Updated!!";
  header('Location:admin.php');
  }
}
}

?>
<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit form</title>
<link type="text/css" media="all" rel="stylesheet" href="style.css">
</head>

<body>
<?php
  if(isset($_GET['patient_id']))
  {
  $id=$_GET['patient_id'];
  $getselect=mysql_query("SELECT * FROM patient_data WHERE patient_id='$id'");
  while($profile=mysql_fetch_array($getselect))
  {
    $username=$profile['username'];
    $fname=$profile['first_name'];
    $lname=$profile['last_name'];
    $pat=$profile['patient_ic'];
    $age=$profile['age'];
    $dob=$profile['date_of_birth'];
    $add=$profile['address'];
    $cou=$profile['country'];
    $gen=$profile['gender'];
    $hist=$profile['medical_history'];

?>

  <form action="" method="post" name="insertform" >

      <tr> USER NAME : </tr>
    <td>  <input type="text" name="eusername" required placeholder="username"
      value="<?php echo $username; ?>" id="inputid" /></td>
    <br>
    <br>
      <tr> FIRST NAME : </tr>
      <td><input type="text" name="efirst_name" required placeholder=" First Name"
      value="<?php echo $fname; ?>" id="inputid" /></td>
    <br>
    <br>
      <tr> LAST NAME : </tr>
    <td><input type="text" name="elast_name" required placeholder="Last Name"
      value="<?php echo $lname; ?>" id="inputid" /><td>
    <br>
    <br>
      <tr> IC NUMBER : </tr>
    <td><input type="number" name="epatient_ic" required placeholder=" IC Num"
      value="<?php echo $pat; ?>" id="inputid" /></td>
<br>
<br>
      <tr> AGE : </tr>
    <td>  <input type="number" name="eage" required placeholder=" Age"
      value="<?php echo $age; ?>" id="inputid" /></td>
    <br>
    <br>
      <tr> DATE OF BIRTH : </tr>
    <td>  <input type="date" min="2000-01-02" name="edate_of_birth" required placeholder="DOB"
      value="<?php echo $dob; ?>" id="inputid" /></td>
    <br>
    <br>
      <tr> ADDRESS : </tr>
    <td>  <input type="text" name="eaddress" required placeholder=" Address"
      value="<?php echo $add; ?>" id="inputid" /></td>
    <br>
    <br>
      <tr> COUNTRY : </tr>
    <td>  <input type="text" name="ecountry" required placeholder=" Country"
      value="<?php echo $cou; ?>" id="inputid" /></td>
    <br>
    <br>
      <tr> GENDER : </tr>
    <td>  <input type="text" name="egender" required placeholder="Enter your Gender"
      value="<?php echo $gen; ?>" id="inputid" ></td>
    <br>
    <br>
      <tr> MEDICAL HISTORY : </tr>
    <td>  <input type="text" name="emedical_history" required placeholder="Medical History"
      value="<?php echo $hist; ?>" id="inputid" /></td>
    <br>
    <br>
      <input type="submit" name="update" value="Update" id="inputid" />

    </p>
  </form>
<?php } } ?>
</body>
</html>
