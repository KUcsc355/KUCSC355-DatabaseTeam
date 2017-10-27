<?php
//Phase:	Project Phase 2
//Due Date:	April 10th 2017

	include("connect.php");
	function createEvent($eName, $speaker, $street1, $street2, $city, $state, $zip, $date, $fee, $description){
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$sql = "INSERT INTO Event (eName, speaker, street1, street2, city, state, zip, date, fee, description) VALUES ('$id','$name', '$speaker', '$street1', '$street2', '$city', '$state', '$zip', '$date','$fee', '$description')";
			$db->query($sql);
			return(echo("Event Created"));
		}
	}					
?>
