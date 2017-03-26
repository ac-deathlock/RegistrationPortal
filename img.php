<!DOCTYPE html>
<html>
<head>
	<title>useless</title>
</head>
<body>
<form method="post" enctype="multipart/form-data" action="img.php">
Name:<input name="namep"><br><br>
<input type="file" name="upload" id="upload"><br>
<br>
<input type="submit" name="submit"></input>
</form>
</body>
</html>

<?php
//print_r($_FILES);
$name=$_FILES['upload']['name'];
$temp=$_FILES['upload']['tmp_name'];
if (isset($name) && !empty($name)) {
	$location='uploads/';
	
	if (move_uploaded_file($temp, $location.$name)) {
		$time=microtime();
		echo $time;
		echo "uploaded";
	} else echo "there was an error upload again";
}
else
{
	echo "please choose a file";
}
?>

