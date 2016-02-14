<?php
session_start();
include_once('data_connect.php');
if(isset($_SESSION['username'])){
$id=$_SESSION['patient_id'];
$user=$_SESSION['username'];
}else{
header("location:http://".$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/index.php");
exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title><?php $user?> Pharmacy Sys</title>
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="style/table.css" type="text/css" media="screen" />
<script src="js/function1.js" type="text/javascript"></script>
   <style>#left-column {height: 477px;}
 #main {height: 477px;}
</style>
</head>
<body>
<div id="content">
<div id="header">
<h1><a href="#"><img src="images/hd_logo.jpg"></a> Pharmacy Sys</h1></div>
<div id="left_column">
<div id="button">
		<ul>
			<li><a href="view.php">View</a></li>
			<li><a href="logout.php">Logout</a></li>
		</ul>
</div>
</div>
<div id="main">
<div id="tabbed_box" class="tabbed_box">
    <h4>View</h4>
<hr/>
    <div class="tabbed_area">



        </ul>

        <div id="content_1" class="content">
<?php
		/*
		View
        Displays all data from 'Pharmacist' table
		*/
        // connect to the database
        include_once('data_connect.php');
       // get results from database
       $result = mysql_query("SELECT * FROM patient")or die(mysql_error());
		// display data in table
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>Firstname</th> <th>Lastname </th> <th>Age</th><th>Gender</th><th>Country</th><th>Date of Birth</th><th>Address</th><th>Medical Record</th></tr>";
        // loop through results of database query, displaying them in the table
        while($row = mysql_fetch_array( $result )) {
                // echo out the contents of each row into a table
                echo "<tr>";
                echo '<td>' . $row['first_name'] . '</td>';
				echo '<td>' . $row['last_name'] . '</td>';
				echo '<td>' . $row['age'] . '</td>';
				echo '<td>' . $row['gender'] . '</td>';
				echo '<td>' . $row['country'] . '</td>';
				echo '<td>' . $row['date_of_birth'] . '</td>';
        		echo '<td>' . $row['address'] . '</td>';
        		echo '<td>' . $row['medical_records'] . '</td>';

			}

?>
        </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
