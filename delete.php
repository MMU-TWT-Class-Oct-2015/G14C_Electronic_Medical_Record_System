<?php
  session_start();
  include_once("connect.php");
  if(isset($_GET['id'])!="")
  {
  $delete=$_GET['id'];
  $delete=mysql_query("DELETE FROM patient_data WHERE patient_id='$delete'");
  if($delete)
  {
	  header("Location:admin.php");
  }
  else
  {
	  echo mysql_error();
  }
  }
?>
