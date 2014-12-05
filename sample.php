<?php require_once( 'incl/header.php' );
	require_once('incl/functions.php'); 
	?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			<p><?php
					$recent = recently_added_movies();
					print_array ($recent);
					
					$actor = recently_added_actors();
					print_array ($actor);
					
					$count = get_movie_count(2);
					print_array($count);
				?></p>
		 		
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 		
	 		<! -- SIDEBAR -->
	 		<div class="col-lg-4">
		 		<p>Sidebar (if any) goes here/</p>
	 		</div><!-- /SIDEBAR -->
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
