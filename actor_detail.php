<?php 
require_once('incl/header.php');
require_once('incl/functions.php');
$aID = $_GET['aid'];
$selected_actor = get_actor_info($aID);
$fullName = $selected_actor[0]["first_name"] . " " . $selected_actor[0]["last_name"];
$dob = $selected_actor[0]["dob"];
$age = calculate_age($dob);
?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<!--MAIN CONTENT AREA-->
	 		<div class="col-lg-8">
	 			<?php 
	 			echo "<p><h3>";
	 			echo $fullName;
	 				#check if the guy has an oscar
	 				if($selected_actor[0]["won_oscar"] == "1"){
	 					echo "<img src='assets/img/oscar_icon.jpg'>";
	 					echo "</h3>";
	 					echo "<b>Birthdate:</b> " . $dob . " <i>(" . $age .  ")</i></p>";
	 				}
	 				if($selected_actor[0]["won_oscar"] == "0"){
	 					echo "</h3>";
	 					echo "<b>Birthdate:</b> " . $dob . " <i>(" . $age .  ")</i></p>";
	 				}

	 			?>
	 			<div class="actor_bio">
	 			<p><?php echo $selected_actor[0]["bio"]; ?></p>
	 			</div>
	 			<h3>Stars In: </h3>
	 			<?php
	 			$appears = movies_with_actor($aID);
	 			$list_size = sizeof($appears);
	 			?>
	 				<?php
	 					for($i=0;$i<=$list_size-1;$i++){
	 						$movie = $appears[$i]["title"];
	 						$year = $appears[$i]["year_released"];
	 						$mid = $appears[$i]["mID"];
	 						echo "<p><a href='movie_detail.php?mid=" . $mid . "'>" . $movie . "<i>(" . $year . "</a>)</i></p>";
	 					}
	 				?>
			</div><!--/MAIN CONTENT AREA-->
	 		
	 		
div
	 	</><!--row-->
	 </div><!--container -->

<?php require_once( 'incl/footer.php' ); ?>
