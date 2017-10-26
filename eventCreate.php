<?php
//Phase:	Project Phase 2
//Due Date:	April 10th 2017

	include("connect.php");
	function createEvent($id, $name, $speaker, $address, $date, $fee, $description){
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$sql = "INSERT INTO Event (id, name, speaker, address, date, fee, description) VALUES ('$id','$name', '$speaker', '$address', '$date','$fee', '$description')";
			$db->query($sql);
			return(echo("Event Created"));
		}
	}					
?>