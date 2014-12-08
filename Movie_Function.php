<?php

require_once('incl/Database.php'); 

$host= 'localhost';
$u= 'root';
$p= 'root';
$d= 'movies';

global $db;
$db= new Database($d, $u, $p, $host);

/**Return all info from whatever
table is passed to get_info().
If no table is passed, movies table is used by default.
**/
function get_info($table='movies'){
	$db= $GLOBALS['db'];
	$results= $db->query("SELECT * FROM $table");
	return $db->resToArray($results);
}

function get_movie($id){
	$db= $GLOBALS['db'];
	$query= "SELECT * FROM movies WHERE mID='$id'";
	return $db->get_row($query);
}


function check_movie($title){
	$movies= get_info();
	
	foreach($movies as $movie){
		if(strtolower($title) == strtolower($title['title'])){
			return true;
		}
	}
	
	return false;
	
}	


function add_movie($info){
	extract($info);
	$db= $GLOBALS['db'];
	$timestamp= $db->get_mysql_timestamp();
	$submitted= $db->query("INSERT INTO movies VALUES('', '$title', '$year_released', '$synopsis', '$was_novel', '$studioID', $timestamp')");

	echo "<h3>$title submitted!</h3>"; 
}

function update_movie($info){
	$db= $GLOBALS['db'];
	
	foreach($info as $key => $value){
		$info[$key]= $db->clean($value);
	}
	extract($info);
	
	$query= "UPDATE movies SET title='$title', year_released='$year_released', synopsis='$synopsis', was_novel='$was_novel', studioID='$studioID',  timestamp='now()' WHERE mID='$mID'";
	
	$submitted= $db->query($query);

	if($submitted){ 
		print "<h3>$title updated!</h3>"; 
	}else{
		print "<h3>There was an issue: ". mysql_error(). "</h3>";
		error_log(mysql_error());
	}
}


function add_studio($info){
	$db= $GLOBALS['db'];
	extract($info);
	$timestamp= $db->get_mysql_timestamp();
	$submitted= $db->query("INSERT INTO studio VALUES('', '$studio_name', '$city', '$state', '$zip', '$timestamp')");

	echo "<h3>$studio_name submitted!</h3>"; 

}

function print_array($a){
	print "<pre>";
	print_r($a);
	print "</pre>";
}

?>