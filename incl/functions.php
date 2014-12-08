<?php
require_once('incl/Database.php');

$host= 'localhost';
$u= 'root';
$p= '';
$d= 'movies';

global $db;
$db= new Database($d, $u, $p, $host);


function print_array($a) {
  echo "<pre>";
  var_dump($a);
  echo "</pre>";
}



function recently_aded(){
	$db=$GLOBALS['db'];
	$results= $db->query("SELECT title,timestamp FROM movies ORDER BY timestamp DESC LIMIT 5");
	return $db->restoArray($results);
}

function get_movie_by_actor($aID){
	$db=$GLOBALS['db'];
	$results= $db->query("SELECT movies.title,movies.year_released FROM movies,movie_actors WHERE movie_actors.actorID = $aID AND 
		movies.mID = movie_actors.movieID ORDER BY title");
	return $db->restoArray($results);

}
function get_actors_by_movie($mID){
	$db=$GLOBALS['db'];
	$results= $db->query("SELECT actors.first_name,actors.last_name FROM actors,movie_actors WHERE movie_actors.movieID = $mID AND 
		actors.aID = movie_actors.actorID ORDER BY first_name");
	return $db->restoArray($results);
}




function get_studio_information($studioID){
	$db=$GLOBALS['db'];
	$results= $db->query("SELECT name,city,state,zip FROM studio WHERE sID = $studioID");
	return $db->restoArray($results);
}
function get_actor_information($actorID){                  //Te da titulo y año del actor que coincida con el actorID.Si no mandas un actor te da todo.
	$db=$GLOBALS['db'];
	$results= $db->query("SELECT first_name,last_name,bio,dob,won_oscar FROM actors WHERE aID = $actorID");
	return $db->restoArray($results);
}
function get_movie_information($movieID){
	$db=$GLOBALS['db'];
	$results= $db->query("SELECT title,year_released,synopsis,was_novel,studioID FROM movies WHERE mID = $movieID");
	return $db->restoArray($results);
}


function get_studios(){
	$db=$GLOBALS['db'];
	$results= $db->query("SELECT sID,name,city,state,zip FROM studio ORDER BY sID");
	return $db->restoArray($results);
}
function get_actors(){
	$db=$GLOBALS['db'];
	$results= $db->query("SELECT aID,first_name,last_name FROM actors ORDER BY aID");
	return $db->restoArray($results);
}
function get_movies(){
	$db=$GLOBALS['db'];
	$results= $db->query("SELECT title,year_released FROM movies ORDER BY title");
	return $db->restoArray($results);
}



function get_movie_count_by_actor($actorID){
	$db=$GLOBALS['db'];
	$results= $db->query("SELECT COUNT(movie_actors.actorID) FROM movie_actors WHERE actorID = $actorID");
	return $db->restoArray($results);
}

function check_movie($title){
	$movies= get_movies();
	
	foreach($movies as $movie){
		if(strtolower($title) == strtolower($movie['title'])){
			return true;
		}
	}
	
	return false;
	
}	
function add_movie($info){
	$db= $GLOBALS['db'];
	extract($info);
	$timestamp= $db->get_mysql_timestamp();
	$submitted= $db->query("INSERT INTO movies VALUES('', '$title', '$year_released', '$synopsis', '$was_novel', '$studio_ID', '$timestamp')");

	echo "<h3>$title submitted!</h3>"; 
}









?>