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

function get_recent_movies(){
	$db = $GLOBALS['db'];
	$results = $db->query("SELECT movies.mID,movies.title,movies.timestamp FROM movies ORDER BY timestamp DESC LIMIT 5");
	return $db->resToArray($results);
}

function get_recent_actors(){
	$db = $GLOBALS['db'];
	$results = $db->query("SELECT actors.aID,actors.first_name,actors.last_name,actors.timestamp FROM actors ORDER BY timestamp DESC LIMIT 5");
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

function get_actors_in_movie($mID){
	$db = $GLOBALS['db'];
	$results = $db->query("SELECT actors.aID, actors.first_name, actors.last_name, movie_actors.movieID,
					movie_actors.actorID, movies.mID 
					FROM actors, movies, movie_actors
					WHERE movies.mID = '$mID' 
					AND movie_actors.actorID = actors.aID 
					AND movie_actors.movieID = movies.mID");
	return $db->resToArray($results);
}

function calculate_age($dob){
	$birthdate = new DateTime($dob);
	$today = new DateTime();
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

function add_studio($FORM_DATA){
	extract($FORM_DATA);
	$db = $GLOBALS['db'];
	$db->query("INSERT INTO studio (sID,name,city,state,zip)
		VALUES(NULL,'".$name."','".$city."','".$state."','".$zip."')");
}

function add_actor($FORM_DATA){
	$db = $GLOBALS['db'];

	
	extract($FORM_DATA);
	$db -> query("INSERT INTO actors (aID,first_name,last_name,bio,dob,won_oscar)
		VALUES (NULL,'".$firstname."','".$lastname."','".$bio."','".$dob."','".$oscar."')");

	$aid = $db->query("SELECT aID from actors ORDER BY aID DESC LIMIT 1");
	$aid = $db->resToArray($aid);
	$aid = $aid[0]["aID"];

	$successful = $db->query("SELECT actors.first_name AS first,actors.last_name AS last
		from actors where aID = '" . $aid. "'");
	$successful = $db->resToArray($successful);
	$successful = $successful[0]["first"] . " " . $successful[0]["last"];
	return $successful;
}

function add_movie($FORM_DATA){
	extract($FORM_DATA);
	$db = $GLOBALS['db'];
	$db->query("INSERT INTO movies
		(title,year_released,synopsis,was_novel,studioID)
		VALUES ('".$title."','".$year."','".$synopsis."','".$novel."','".$studio."')");

	#gets the movie id of the movie we just created.
	#There is a SELECT LAST_INSERT_ID() command but always returns 0 in PHP, works fine in MySQL prompt.
	$generated_mid = $db->query("SELECT mID from movies ORDER BY mID DESC LIMIT 1");
	$generated_mid = $db->resToArray($generated_mid);
	$generated_mid = $generated_mid[0]["mID"];

	#Add genres and actors to movie in one step.
	add_actor_to_movie($select_actor,$generated_mid);
	add_genre_to_movie($genre,$generated_mid);

	#return the title of the movie back to the requesting page for confirmation.
	$successful = $db->query("SELECT movies.title AS title from movies where mID = '".$generated_mid."'");
	$successful = $db->resToArray($successful);
	$successful = $successful[0]["title"];
	return $successful;

}

function add_actor_to_movie($select_actor,$generated_mid){
	$db = $GLOBALS['db'];
	foreach($select_actor as $thisactor){
		$db->query("INSERT INTO movie_actors (maID,movieID,actorID)
		VALUES (NULL,'".$generated_mid."','".$thisactor."')");
	}
}

function add_genre_to_movie($genre,$generated_mid){
	$db = $GLOBALS['db'];
	foreach($genre as $thisgenre){
		$db->query("INSERT INTO movie_genres (mgID,movieID,genreID)
		VALUES (NULL, '".$generated_mid."','".$thisgenre."')");
	}
}



function print_array($a) {
  echo "<pre>";
  var_dump($a);
  echo "</pre>";
}
?>
