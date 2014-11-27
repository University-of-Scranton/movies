<?php

	#Database info##
	$dbhost = 'localhost';
	$dbuser = 'sam';
	$dbpass = '898142';
	$data = 'moviedb';
	#####
	#Connect
	$db = new PDO("mysql:host=$dbhost;dbname=$data",$dbuser,$dbpass);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	function getData($db){
		$db_query = "SELECT * from actors where aID=1";
		$stmt = $db->query($db_query);
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	try{
		$results = getData($db);
		$counter = 1;
		foreach($results as &$row){
			echo "<p>" . $row["bio"] . "</p>";
		}

	}
	catch(PDOException $ex){
		echo "ermergerd error";
	}
	echo "<br><p>--Debug---<br>";
	echo "hey</p>";