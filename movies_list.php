<?php require_once( 'incl/header.php' );
	require_once('incl/functions.php');  ?>
	
<style>
  td {margin:5px}
  table {text-align:left}
</style>

<div class = "container" style = "text-align:center">
<table class = "table">
<?php
$result= get_movie_list();  
$size = sizeof($result);
echo "<tr>" . "<th>" . "Title" . "</th>" . "<th>" . "Release Year" . "</th>" . "</tr>";
for ($i=0; $i<$size; $i++) {
	echo "<tr>";
	echo "<td>" . "<a href=movie_single.php?id=" . $result[$i] ["mID"] . ">" . $result[$i] ["title"] . "</a>" . "</td>";
	echo "<td>" . $result[$i] ["year_released"] . "</td>";
	echo "</tr>";
	}
?>
</table>
</div>
<?php require_once( 'incl/footer.php' ); ?>
