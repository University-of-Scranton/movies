<?php


function print_array( $a ) {
?>
  <pre>
  <?php var_dump( $a ); ?>
  </pre>
<?php
}

function GET_ACTORS(){
	$db=$GLOBALS['movie_db'];
	$Results = $db -> query("SELECT * FROM actors ORDER BY first_name");
	return $db -> restoArray($Results);
}

?>
