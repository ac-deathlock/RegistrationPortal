<?php
$con=mysql_connect("localhost","root","") or die("Failed to connect server");
$db=mysql_select_db("portalinfotsav",$con) or die("Failed to connect to MySQL: " . mysql_error());

$id=mysql_real_escape_string(htmlentities($_POST['id']));
if (isset($_POST['submit'])) {
	$q1=mysql_query("SELECT name,institute,phone FROM registration WHERE id='$id'");
	$q2=mysql_query("SELECT room,hostel FROM accomodation WHERE id='$id'");
	$result=mysql_fetch_assoc(result)
}

?>