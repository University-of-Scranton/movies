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
$aID = $_GET['id'];
$result = get_actor($aID);
$movies_of_actor_list = get_movies($aID);
$size = sizeof($movies_of_actor_list);


echo "<p>" . "<h2>" . $result["first_name"] . " " . $result["last_name"];
if ($result["won_oscar"] == "1") {
	echo "<img src='assets/img/trophy.jpg' title='Has won an oscar'>" . "</h2>" .  "</p>";
	}
echo "<p>" . "<b>Biography:</b>" . " " . $result["bio"] . "</p>";
echo "<p>" . "<b>Date of Birth:</b>" . " " . $result["dob"] . "</p>";
echo "<p>" . "<b>Appears in:</b>" . " " .  "</p>";
for ($i=0; $i<$size; $i++) {
echo "<p>" . "<a href=movie_single.php?id=" . $movies_of_actor_list[$i] ["mID"] . ">" . $movies_of_actor_list[$i]["title"] . "</a>" . "  (" . $movies_of_actor_list[$i]["year_released"] .  ")" . "</p>";
}
?>
</div>
</div>
	
<?php require_once( 'incl/footer.php' ); ?>