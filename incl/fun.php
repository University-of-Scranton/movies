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

function get_actors(){
	$db= $GLOBALS['db'];
	$results = $db ->query("SELECT * FROM actors ORDER BY first_name");
	return $db->resToArray($results);
	print_array($results);
}

?>