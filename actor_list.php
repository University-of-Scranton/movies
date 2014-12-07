<?php require_once( 'incl/header.php' );
	require_once('incl/functions.php');  ?>

<style>
  td {margin:5px}
  table {text-align:left}
</style>

<div class = "container" style = "text-align:center">
<table class = "table" style = "width:100%">
<?php
$result= get_actors();  
$size = sizeof($result);

echo "<tr>" . "<th>" . "Name" . "</th>" . "<th>" . "Birthday" . "</th>" . "<th>" . "Number of Movies" . "</th>". "</tr>";
for ($i=0; $i<$size; $i++) {
$aID =  $result[$i]["aID"];
$count = get_movie_count($aID);
	echo "<tr>";
	echo "<td>" . "<a href=actor_single.php?id=" . $aID . ">" . $result[$i] ["first_name"] . " ". $result[$i] ["last_name"] . "</a>" . "</td>";
	echo "<td>" . $result[$i] ["dob"] . "</td>";
	echo "<td>" . $count[0] ["count"] . "</td>";
	echo "</tr>";
	}
?>
</table>
 </div>
 <?php require_once( 'incl/footer.php' ); ?>
