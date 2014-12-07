<?php require_once( 'incl/header.php' );
	require_once('incl/functions.php'); 
	?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
				<h3>HELLO!</h3>
	 			<p>And welcome to a <i>very</i> small-scale movie database, where a plethora of information regarding the cinema can be found.
				Feel free to add new content, browse the already updated information, or criticize the lack of professionalism of this site!</p>
				
		 		
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 		
	 		<! -- SIDEBAR -->
	 		<div class="col-lg-4">
		 		<h2>Recently Added Content</h2>
				<h3>Movies:</h3>
					<?php
					$movies = recently_added_movies();
					$size_movies = sizeof($movies);
					
					for ($i=0; $i<$size_movies; $i++) {
						echo "<p>" . "<a href=movie_single.php?id=" . $movies[$i] ["mID"] . ">" . $movies[$i]["title"] . "  (" . $movies[$i]["year_released"] .  ")" . "</a>"  . "</p>";
					}
					?>
					
				<h3>Actors:</h3>
					<?php
					$actors = recently_added_actors();
					$size_actors = sizeof($actors);
					
					for ($i=0; $i<$size_actors; $i++) {
						echo "<p>" . "<a href=actor_single.php?id=" . $actors[$i] ["aID"] . ">" . $actors[$i]["first_name"] . " " . $actors[$i]["last_name"] . "</a>"  . "</p>";
					}
					?>
				
	 		</div><!-- /SIDEBAR -->
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
