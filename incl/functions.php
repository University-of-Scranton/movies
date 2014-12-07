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

function get_genres(){
	$db = $GLOBALS['db'];
	$results = $db->query("SELECT gID,name from genre");
	return $db->resToArray($results);
}

function get_actor_info($aID){
	$db = $GLOBALS['db'];
	$results = $db->query("SELECT * from actors WHERE aID = '" . $aID . "'");
	return $db->resToArray($results);
}

function calculate_age($dob){
	$birthdate = new DateTime($dob);
	$today = new DateTime($today); #I don't know why this works.
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

function full_actor_list(){
	$db = $GLOBALS['db'];
	$results = $db->query("select actors.aID,actors.first_name,actors.last_name
		from actors ORDER BY actors.first_name");
	return $db->resToArray($results);
}

function full_studio_list(){
	$db = $GLOBALS['db'];
	$results = $db->query("select studio.sID,studio.name,studio.city,studio.state from studio");
	return $db->resToArray($results);
}


function count_per_actor($aID){
	$db = $GLOBALS['db'];
	$results = $db->query("select COUNT(movie_actors.actorID) AS num 
			from actors,movies 
			join movie_actors 
			where actors.aID=movie_actors.actorID 
			and 
			movie_actors.movieID=movies.mID
			and movie_actors.actorID = '" . $aID . "'");
	return $db->resToArray($results);
}


function full_movie_list(){
	$db = $GLOBALS['db'];
	$results = $db->query('select movies.mID,movies.title,movies.year_released from movies');
	return $db->resToArray($results);
}

function get_movie_info($mID){
	$db = $GLOBALS['db'];
	$results = $db->query("SELECT * from movies WHERE mID = '" . $mID . "'");
	return $db->resToArray($results);
}

function studio_makes_movie($mID){
	$db = $GLOBALS['db'];
	$results = $db->query("SELECT studio.name AS name from studio join movies
		on movies.studioID=studio.sID where movies.mID='" . $mID . "'");
	return $db->resToArray($results);
}

function add_movie($FORM_DATA){
	$db = $GLOBALS['db'];
	extract($FORM_DATA);
	$db->query("INSERT INTO movies
		(title,year_released,synopsis,was_novel,studioID)
		VALUES ('".$title."','".$year."','".$synopsis."','".$novel."','".$studio."')");

	$generated_mid = $db->query("SELECT mID from movies ORDER BY mID DESC LIMIT 1");
	$generated_mid = $db->resToArray($generated_mid);
	$generated_mid = $generated_mid[0]["mID"];

	foreach($select_actor as $thisactor){
		$db->query("INSERT INTO movie_actors (maID,movieID,actorID)
		VALUES (NULL,'".$generated_mid."','".$thisactor."')");
	}

	foreach($genre as $thisgenre){
		$db->query("INSERT INTO movie_genres (mgID,movieID,genreID)
		VALUES (NULL, '".$generated_mid."','".$thisgenre."')");
	}

	$successful = $db->query("SELECT movies.title AS title from movies where mID = '".$generated_mid."'");
	$successful = $db->resToArray($successful);
	$successful = $successful[0]["title"];
	return $successful;

}

function print_array($a) {
  echo "<pre>";
  var_dump($a);
  echo "</pre>";
}
?>
