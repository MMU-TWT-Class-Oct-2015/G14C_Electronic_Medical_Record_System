<?php
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("medical") or die(mysql_error());
if(isset($_POST['submit']))
{
$query = $_POST['query'];
?>
<html>
<style>
body {

	background-color: orange;
}
h1 {
	font-family: "Cooper Black";
	color: black;
	text-align: center;

}

</style>

<head>
<title><?php  echo $query;?></title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
$min_length = 1;
if(strlen($query) >= $min_length)
{
$query = htmlspecialchars($query);
$query = mysql_real_escape_string($query);

$raw_results =
mysql_query("SELECT * FROM patient_data WHERE (`first_name` LIKE '%".$query."%') OR (`last_name` LIKE '%".$query."%')");
if(mysql_num_rows($raw_results) > 0)
{
while($results = mysql_fetch_array($raw_results))
{
echo "<tr align='middle' bgcolor='#0f7ea3'>

<td> First Name-> ".$results['first_name']."</td>
<br>
<br>
<td>Last Name-> ".$results['last_name']."</td>
<br
<br>
<td>Patient-> ".$results['patient_ic']."</td>
<br>
<br>
<td>Age-> ".$results['age']."</td>
<br>
<br>
<td>DOB-> ".$results['date_of_birth']."</td>
<br>
<br>
<td>Address-> ".$results['address']."</td>
<br>
<br>
<td>Country->  ".$results['country']."</td>
<br>
<br>
<td>Gender-> ".$results['gender']."</td>
<br>
<br>
<td>Medical History-> ".$results['medical_history']."</td>

</tr>" ;
}

}
else{
echo "<tr align='center' bgcolor='#6C0000'>

<td colspan='2' height='25px'>No results</td><tr>";
echo "</table>";
}
}
else{
echo "Minimum length is ".$min_length;
}}

?>
</body>
</html>
