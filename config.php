<!--
Config.php
-->
<?php
	$DB_HOST = 'http://csc355-db-group.cfwk8ozvku9e.us-east-2.rds.amazonaws.com/';
	$DB_USER = 'DB_Group';
	$DB_PASS = 'Starwars001';
	$DB_NAME = 'csc355-db-group';
	$db = new mysqli($DB_HOST,  $DB_USER, $DB_PASS, $DB_NAME);
?>
