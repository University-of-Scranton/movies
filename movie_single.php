<style>
.content{
	width:75%;
	margin:0 auto;
	}
</style>


<?php 
require_once( 'incl/header.php' );
require_once('incl/functions.php'); 
?>

<div class = "contain" >
<div class = "content">
<?php 	
$mID = $_GET['id'];
$result = get_movie($mID);
$actors_in_movie = get_movie_actors($mID);
$size = sizeof($actors_in_movie);
$studio = get_studio($result["studioID"]);



echo "<p>" . "<h2>" . $result["title"] .  " " . "(" . $result["year_released"] . ")" . " ";
if ($result["was_novel"] == "1") {
	echo "<img src='assets/img/book.png' title='Based on a novel'>" . "</h2>" .  "</p>";
	}
echo "<p>" . "<b>Synopsis:</b>" . " " . $result["synopsis"] . "</p>";
echo "<p>" . "<b>Starring:</b>" . " " .  "</p>";
for ($i=0; $i<$size; $i++) {
echo "<p>" . "<a href=actor_single.php?id=" . $actors_in_movie[$i] ["aID"] . ">" . $actors_in_movie[$i]["first_name"] . " " . $actors_in_movie[$i]["last_name"] . "</a>" . "</p>";
}
echo "<p>" . "<b>Studio:</b>" . " " . $studio[0]["name"] . "</p>";
?>
</div>
</div>
	
<?php require_once( 'incl/footer.php' ); ?>