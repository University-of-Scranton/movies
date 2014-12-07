<?php

require_once('incl/Database.php');

$host= 'localhost';
$u= 'root';
$p= '';
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


function recently_added_movies() {
	$db= $GLOBALS['db'];
	$results = $db ->query("SELECT movies.title, movies.mID, movies.year_released FROM movies ORDER BY timestamp DESC LIMIT 0,5");
	return $db->resToArray($results);

}

function recently_added_actors() {
	$db= $GLOBALS['db'];
	$results = $db ->query("SELECT actors.aID, actors.first_name, actors.last_name, actors.dob FROM actors ORDER BY timestamp DESC LIMIT 0,5");
	return $db->resToArray($results);

}

//Gets a list of all the actors and categorizes them in alpha order by first name
function get_actors(){
	$db= $GLOBALS['db'];
	$results = $db ->query("SELECT aID, first_name, last_name, dob FROM actors ORDER BY first_name");
	return $db->resToArray($results);
}

//Gets all info for one movie that matches the ID
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
					WHERE movies.mID = '$movieID' AND movie_actors.actorID = actors.aID AND movie_actors.movieID = movies.mID");
	return $db->resToArray($results);
}

//Gets all movies in alpha order and will get movies actor starred in if there is an aID (ERROR)
/*function get_movies($aID=null){
	$db= $GLOBALS['db'];
	$query = "SELECT movies.mID, movies.title movies.year_released, movie_actors.movieID, movie_actors.actorID,
			actors.aID FROM movies";
		if (!is_null($aID)) {
			$query = ",movie_actors, actors WHERE movie_actors.actorID = '$aID' AND movie_actors.movieID = movies.mID
					AND actors.aID = movie_actors.actorID";
		}
	$query = "ORDER BY movies.title";
	return $db->resToArray($query);
}*/

//gets studio that made a movie
function get_studio($sID) {
$db= $GLOBALS['db'];
$results = $db ->query("SELECT * FROM studio
						WHERE studio.sID = $sID");
return $db->resToArray($results);
}

//gets movies an actor has starred in
function get_movies($aID) {
	$db= $GLOBALS['db'];
	$results = $db ->query("SELECT movies.mID, movies.title, movies.year_released, movie_actors.movieID, movie_actors.actorID, actors.aID
				FROM movies, movie_actors, actors
				WHERE movie_actors.actorID = $aID
				AND actors.aID = movie_actors.actorID
				AND movies.mID = movie_actors.movieID
				ORDER BY movies.title");
	return $db->resToArray($results);
	}
	
//gets a alpha list of all movies
function get_movie_list() {
	$db= $GLOBALS['db'];
	$results = $db ->query("SELECT * FROM movies ORDER BY title");
	return $db->resToArray($results);
	}

//Gets number of movies an actor was in (NOT FINISHED)
function get_movie_count($aID){
	$db = $GLOBALS['db'];
	$results = $db->query("select COUNT(movie_actors.actorID) AS count 
			FROM actors,movies 
			JOIN movie_actors 
			WHERE actors.aID=movie_actors.actorID 
			AND
			movie_actors.movieID=movies.mID
			and movie_actors.actorID = '" . $aID . "'");
	return $db->resToArray($results);
}

//gets all actor information in a single actor page (not the movies they starred in)
function get_actor($actorID){
	$db= $GLOBALS['db'];
	$query = "SELECT * FROM actors WHERE actors.aID = '$actorID'";
	return $db->get_row($query); 
	
}	

function get_info($table='movies'){
	$db= $GLOBALS['db'];
	$results= $db->query("SELECT * FROM $table");
	return $db->resToArray($results);
}

function get_actor_info($table='actors'){
	$db= $GLOBALS['db'];
	$results= $db->query("SELECT * FROM $table");
	return $db->resToArray($results);
}

function get_studio_info($table='studio'){
	$db= $GLOBALS['db'];
	$results= $db->query("SELECT * FROM $table");
	return $db->resToArray($results);
}

function get_movieactor_info($table='movie_actors'){
	$db= $GLOBALS['db'];
	$results= $db->query("SELECT * FROM $table");
	return $db->resToArray($results);
}

function check_movie($name){
	$movies= get_info(); //gets all movies from database
	
	foreach($movies as $movie){ //checks all cigars to check for duplicates
		if(strtolower($name) == strtolower($movie['title'])){
			return true;
		}
	}
	
	return false;
	
}	

function add_movie($info){
	$db= $GLOBALS['db']; //grab database variable
	extract($info);
	$timestamp= $db->get_mysql_timestamp();
	$submitted= $db->query("INSERT INTO movies VALUES('', '$title', '$year_released', '$synopsis', '$was_novel', '$studioID', '$timestamp')");

	echo "<h3>$title submitted!</h3>"; 
}

function check_actor($name){
	$actors= get_actor_info(); //gets all actors from database
	
	foreach($actors as $actor){ //checks all cigars to check for duplicates
		if(strtolower($name) == strtolower($actor['last_name'])){
			return true;
		}
	}
	
	return false;
	
}	

function add_actor($info){
	$db= $GLOBALS['db']; //grab database variable
	extract($info);
	$timestamp= $db->get_mysql_timestamp();
	$submitted= $db->query("INSERT INTO actors VALUES('', '$first_name', '$last_name', '$bio', '$dob', '$won_oscar', '$timestamp')");

	echo "<h3>$first_name $last_name submitted!</h3>"; 
}

function check_studio($name){
	$studio= get_studio_info(); //gets all actors from database
	
	foreach($studio as $studio_table){ //checks all cigars to check for duplicates
		if(strtolower($name) == strtolower($studio_table['name'])){
			return true;
		}
	}
	
	return false;
	
}	

function add_studio($info){
	$db= $GLOBALS['db']; //grab database variable
	extract($info);
	$timestamp= $db->get_mysql_timestamp();
	$submitted= $db->query("INSERT INTO studio VALUES('', '$name', '$city', '$state', '$zip', '$timestamp')");

	echo "<h3>$name submitted!</h3>"; 
}

function check_movieactor($name){
	$movieactors= get_movieactor_info(); //gets all actors from database
	
	foreach($movieactors as $movieactor){ //checks all cigars to check for duplicates
		if(strtolower($name) == strtolower($movieactor['maID'])){
			return true;
		}
	}
	
	return false;
	
}	

function add_movieactor($info){
	$db= $GLOBALS['db']; //grab database variable
	extract($info);
	$timestamp= $db->get_mysql_timestamp();
	$submitted= $db->query("INSERT INTO movie_actors VALUES('', '$movieID', '$actorID', '$timestamp')");

	echo "<h3> submitted!</h3>"; 
}
?>
