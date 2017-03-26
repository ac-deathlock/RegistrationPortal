<?php 
include 'include.inc.php';
	$name =$_POST['name'];
	$bank=$_POST['bank'];
	$account=$_POST['account'];
	$code=$_POST['code'];
	$paytm=$_POST['paytm'];
	$member1 =$_POST['member1'];
	$member2 =$_POST['member2'];
	$member3 =$_POST['member3'];
	$member4 =$_POST['member4'];
	$member5 =$_POST['member5'];
	$leader =$_POST['leader'];
	$teamname =$_POST['teamname'];
if (isset($_POST['submit'])) {
	
	try{
			 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			 $q="INSERT INTO eventreg (name,leader,teamname,bank,account,code,paytm,member1,member2,member3,member4,member5) VALUES (:name,:leader,:teamname,:bank,:account,:code,:paytm,:member1,:member2,:member3,:member4,:member5)";
			$query=$conn->prepare($q);
			$query->bindParam(':name', $name);
			$query->bindParam(':leader', $leader);
			$query->bindParam(':teamname', $teamname);
			$query->bindParam(':bank', $bank);
			$query->bindParam(':account', $account);
			$query->bindParam(':code', $code);
			$query->bindParam(':paytm', $paytm);
			$query->bindParam(':member1', $member1);
			$query->bindParam(':member2', $member2);
			$query->bindParam(':member3', $member3);
			$query->bindParam(':member4', $member4);
			$query->bindParam(':member5', $member5);
			
			
			$query->execute();

	echo "registered for ".$name."<br><br>";
		}
		catch(PDOException $e){
				echo "<br>" . $e->getMessage();
			}
}

?>
<a href="eventregister.php">REFRESH</a>