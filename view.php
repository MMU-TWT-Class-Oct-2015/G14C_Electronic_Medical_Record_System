<?php
 include_once('connect.php');
  $select=mysql_query("SELECT * FROM patient_data order by patient_id desc");
  $i=1;
  while($userrow=mysql_fetch_array($select))

  {
  $id=$userrow['patient_id'];
  $username=$userrow['username'];
  $fname=$userrow['first_name'];
  $lname=$userrow['last_name'];
  $pat=$userrow['patient_ic'];
  $age=$userrow['age'];
  $dob=$userrow['date_of_birth'];
  $add=$userrow['address'];
  $cou=$userrow['country'];
  $gen=$userrow['gender'];
  $hist=$userrow['medical_history'];
?>


<tr> USER NAME :</tr><td> <span><?php echo $username; ?></span>  <a href="delete.php?id=<?php echo $id; ?>"
    onclick="return confirm('Are you sure you wish to delete this Record?');">
    		<span class="delete" title="Delete"> ---------> X </span></a></td>
  <br />
  <tr> FIRST NAME :</tr><td> <span><?php echo $fname; ?></span>
    <a href="edit.php?patient_id=<?php echo $id; ?>"><span class="edit" title="Edit">--------> E </span></a></td>
  <br />
  <tr> LAST NAME:</tr><td> <span><?php echo $lname; ?></span></td>
  <br />
  <tr> IC NUMBER :</tr><td> <span><?php echo $pat; ?></span></td>
  <br />
  <tr>AGE :</tr><td> <span><?php echo $age; ?></span></td>
  <br />
  <tr> DATE OF BIRTH :</tr><td> <span><?php echo $dob; ?></span></td>
  <br />
  <tr>ADDRESS :</tr><td> <span><?php echo $add; ?></span></td>
  <br />
  <tr>COUNTRY:</tr><td> <span><?php echo $cou; ?></span></td>
  <br />
  <tr> GENDER : </tr><td><span><?php echo $gen; ?></span></td>
  <br />
  <tr> MEDICAL RECORDS :</tr><td> <span><?php echo $hist; ?></span><td>
  <br />
<br>
<br>
<br>
<br>
<?php } ?>
