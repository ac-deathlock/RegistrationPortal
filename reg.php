<?php 
include 'include.inc.php';

	$name =$_POST['name'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$pin = $_POST['pin'];
	$email = $_POST['email'];
	//$id = ($_POST['id']));
	$institute= $_POST['institute'];
	$phone= $_POST['phone'];


	if (isset($_POST['submit']))
		{	
			try{
			 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// $sql = "SELECT count(*) FROM registration"; 
			// $result = $conn->prepare($sql); 
			// $result->execute(); 
			// $d= $result->fetchColumn(); 

				$d = $conn->query('select count(*) from registration')->fetchColumn(); 
				echo $d;
			
			$str="inf216".($d+1);
			//echo $str;
			//,state,city,pin,email,institute,phone,id
			//,:state,:city,:pin,:email,:institute:phone,:id
			$q="INSERT INTO registration (name,state,city,pin,email,institute,phone,id) VALUES (:name,:state,:city,:pin,:email,:institute,:phone,:id)";
			$query=$conn->prepare($q);
			$query->bindParam(':name', $name);
			$query->bindParam(':state', $state);
			$query->bindParam(':city', $city);
			$query->bindParam(':pin', $pin);
			$query->bindParam(':email', $email);
			$query->bindParam(':institute', $institute);
			$query->bindParam(':phone', $phone);
			$query->bindParam(':id', $str);
			$query->execute();	
			echo "<h2>Your unique id is ".$str."</h2><br><br>";
			}
			catch(PDOException $e){
				echo "<br>" . $e->getMessage();
			}
			

		}
?>
<a href="regestration.php">REFRESH</a>