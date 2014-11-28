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

function result_dumper($resImport){
	var_dump($resImport);
}


function print_array( $a ) {
?>
  <pre>
  <?php var_dump( $a ); ?>
  </pre>
<?php
}
?>
