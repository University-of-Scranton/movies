<?php 
require_once('incl/header.php');
require_once('incl/functions.php');
$mID = $_GET['mid'];
$selected_movie = get_movie_info($mID);
$studio = studio_makes_movie($mID);
$studio = $studio[0]["name"];
$actors_in = get_actors_in_movie($mID);
?>
<div id="blue">
	    <div class="container">
			<div class="row">
				<h3><i><?php echo $selected_movie[0]["title"] ?></i></h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->
 <div class="container mtb">
	 	<div class="row">

	 	
	 		<!--MAIN CONTENT AREA-->
	 		<div class="col-lg-8">
	 			<h1><?php echo $selected_movie[0]["title"] . " (" . $selected_movie[0]["year_released"] . ")"; ?></h1>
	 			<h4><i><?php 		if($selected_movie[0]["was_novel"] == "1"){
						echo "Based on a novel";
					} ?></i></h4></br>
				<p><b>Synopsis</p></b>
				<p><?php echo $selected_movie[0]["synopsis"]; ?></p>
				<?php

		
					echo "<p><b>Produced by</b> " . $studio . "</p><br>";
					echo "<h3>Starring:</h3>";
					foreach($actors_in as $character){
						echo "<a href=actor_detail.php?aid=" . $character['aID'] . ">" . $character["first_name"] . " " . $character["last_name"] . "</a><br>";
					}
				?>
			</div><!--/MAIN CONTENT AREA-->
	 		
	 		

	 	</div><!--row-->
	 </div><!--container -->

<?php require_once( 'incl/footer.php' ); ?>
