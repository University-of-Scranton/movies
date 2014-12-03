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
	$results= $db->query("SELECT title,timestamp FROM movies ORDER BY timestamp");
	return $db->restoArray($results);
}

function get_movie_by_actor($aID){
	$db=$GLOBALS['db'];
	$results= $db->query("SELECT movies.title,actors.aID,movies.year_released FROM movies,movie_actors ORDER BY title WHERE movie_actors.actorID = $aID AND 
		movies.mID = movie_actors.movieID");

}

function get_movie_actors($movieID){

}


function get_movies(){
	$db=$GLOBALS['db'];
	$results= $db->query("SELECT title,year_released FROM movies ORDER BY title");
	return $db->restoArray($results);
}



function get_actor_information($actorID){                  //Te da titulo y año del actor que coincida con el actorID.Si no mandas un actor te da todo.
	$db=$GLOBALS['db'];
	

	$results= $db->query("SELECT first_name,last_name,bio,dob,won_oscar FROM actors WHERE aID = $actorID");
	return $db->restoArray($results);
}



function get_actors(){
	$db=$GLOBALS['db'];
	$results= $db->query("SELECT first_name,last_name FROM actors ORDER BY first_name");
	return $db->restoArray($results);
}

function get_movie_count(){

}

function get_actor($actorID){

}
