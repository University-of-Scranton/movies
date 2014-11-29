<?php
require_once('incl/Database.php');
$host = 'localhost';
$u = 'sam';
$p = 'password!';
$d = 'movies';

global $db;
$db = new Database($d, $u, $p, $host);

function test_database(){
	$db = $GLOBALS['db'];
	$results = $db->query("SELECT * FROM movies LIMIT 2");
	return $db->resToArray($results);
}

function get_actor_info($aID){
	$db = $GLOBALS['db'];
	$results = $db->query("SELECT * from actors WHERE aID = '" . $aID . "'");
	return $db->resToArray($results);
}

function calculate_age($dob){
	$birthdate = new DateTime($dob);
	$today = new DateTime($today);
	$interval = $birthdate->diff($today);
	return $interval->format('%y years old');
}

function movies_with_actor($aID){
	$db = $GLOBALS['db'];
	$results = $db->query("SELECT movies.mID,movies.title,movies.year_released,
		movie_actors.movieID FROM movies,movie_actors WHERE
		movie_actors.actorID = '" . $aID . "' AND movie_actors.movieID = movies.mID 
	   ORDER BY movies.title");
	return $db->resToArray($results);
}

function print_array($a) {
  echo "<pre>";
  var_dump($a);
  echo "</pre>";
}
?>
