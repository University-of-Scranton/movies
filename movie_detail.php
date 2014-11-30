<?php 
require_once('incl/header.php');
require_once('incl/functions.php');
$mID = $_GET['mid'];
$selected_movie = get_movie_info($mID);
var_dump($selected_movie);
?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<!--MAIN CONTENT AREA-->
	 		<div class="col-lg-8">
	 			<h1><?php echo $selected_movie[0]["title"] . " (" . $selected_movie[0]["year_released"] . ")"; ?></h1>
				<p><?php echo $selected_movie[0]["synopsis"]; ?></p>
				<?php
					if($selected_movie[0]["was_novel"] == "1"){
						echo "<p>Based on a novel</p>";
					}
				?>
			</div><!--/MAIN CONTENT AREA-->
	 		
	 		

	 	</div><!--row-->
	 </div><!--container -->

<?php require_once( 'incl/footer.php' ); ?>
