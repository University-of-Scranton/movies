<?php 
require_once('incl/header.php');
require_once('incl/functions.php');
$aID = 2;
$selected_actor = get_actor_info($aID);
$fullName = $selected_actor[0]["first_name"] . " " . $selected_actor[0]["last_name"];
$dob = $selected_actor[0]["dob"];
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
	 					echo $dob . "</p>";
	 					calculate_age($dob);
	 				}
	 				if($selected_actor[0]["won_oscar"] == "0"){
	 					echo "</h3>";
	 					echo $dob . "</p>";
	 					$age = calculate_age($dob);
	 				}
	 			?>
	 			<div class="actor_bio">
	 			<p><?php echo $selected_actor[0]["bio"]; ?></p>
	 			</div>

			</div><!--/MAIN CONTENT AREA-->
	 		
	 		

	 	</div><!--row-->
	 </div><!--container -->

<?php require_once( 'incl/footer.php' ); ?>
