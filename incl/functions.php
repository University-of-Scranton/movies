<?php

require_once('incl/Database.php');

$host= 'localhost';
$u= 'root';
$p= 'root';
$d= 'movies';

global $db;
$db= new Database($d, $u, $p, $host);

function print_array( $a ) {
?>
  <pre>
  <?php var_dump( $a ); ?>
  </pre>
<?php
}

//Gets a list of all the actors and categorizes them in alpha order by first name
function get_actors(){
	$db= $GLOBALS['db'];
	$results = $db ->query("SELECT * FROM actors ORDER BY first_name");
	return $db->resToArray($results);
	print_array($results);
}

//Gets one movie that matches the ID
function get_movie($movieID){
	$db= $GLOBALS['db'];
	$query = "SELECT * FROM movies WHERE mID='$movieID'";
	return $db->get_row($query);
}

//Gets all actors that star in one movie
function get_movie_actors($movieID){
	$db= $GLOBALS['db'];
	$results = $db ->query("SELECT actors.aID, actors.first_name, actors.last_name, movie_actors.movieID,
					movie_actors.actorID, movies.mID FROM actors, movies, movie_actors
					WHERE movies.mID = '$movieID' AND movie_actors.actorID = actors.aID AND movie_actors.movieID = movies.mID")
	return $db->resToArray($results);
}

//Gets all movies in alpha order and will get movies actor starred in if there is an aID
function get_movies($aID=null){
	$db= $GLOBALS['db'];
	$query = "SELECT movies.mID, movies.year_released, movie_actors.movieID, movie_actors.actorID,
			actors.aID FROM movies";
		if (!is_null($aID)) {
			$query = ",movie_actors, actors WHERE movie_actors.actorID = '$aID' AND movie_actors.movieID = movies.mID
					AND actors.aID = movie_actors.actorID";
		}
	$query = "ORDER BY movies.title";
	return $db->resToArray($query);
}

//Gets number of movies an actor was in
function get_movie_count($actorID){
	$db= $GLOBALS['db'];
	return $db->get_var($query);
}

//gets all actor information in a single actor page (not the movies they starred in)
function get_actor($actorID){
	$db= $GLOBALS['db'];
	$results = $db->("SELECT actors.aID, actors.first_name, actors.last_name, actors.bio, actors.dob,
	actors.won_oscar, actors.timestamp FROM actors");
	return $db->resToArray($results);
	
}


?>
