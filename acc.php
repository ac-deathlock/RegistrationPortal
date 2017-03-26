<?php 
include 'include.inc.php';
	$room = $_POST['room'];
	$hostel = $_POST['hostel'];
	$id = $_POST['id'];
	$amount = $_POST['amount'];
	$idproof = $_POST['idproof'];

	
	if (isset($_POST['submit'])) 
	{
		try{
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$q="INSERT INTO accomodation (room,hostel,id,amount,idproof) VALUES (:room,:hostel,:id,:amount,:idproof)";
			$query=$conn->prepare($q);
			$query->bindParam(':room', $room);
			$query->bindParam(':hostel', $hostel);
			$query->bindParam(':id', $id);
			$query->bindParam(':amount', $amount);
			$query->bindParam(':idproof', $idproof);
			
			$query->execute();
			echo "registered for accomodation";

		}
		catch(PDOException $e){
				echo "<br>" . $e->getMessage();
			}
		}
		

 ?>
 <a href="accomodation.php">REFRESH</a>