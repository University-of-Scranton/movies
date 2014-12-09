<?php 
require_once('incl/header.php');
require_once('incl/functions.php');

?>
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3><i>Welcome!</i></h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->
 <div class="container mtb">
	 	<div class="row">
	 	
	 		<!--MAIN CONTENT AREA-->
	 		<div class="col-lg-8">
	 			<i><h1>Inter<b>web</b> Movie Database</h1></i><br>
	 			<h4>Welcome to the Interweb Movie Database - the world's smallest
	 				collection of movies and actors! This keeps our website operating
	 				quickly with no ads! Want to add a movie? Check out our handy
	 				PHPMovieAdmin tool <a href="admin/index.php">here!</a></h4>
			</div><!--/MAIN CONTENT AREA-->
	 		
	 		
	 		<!-- SIDEBAR-->
	 		<div class="col-lg-4">
		 		<h4>Recently Added Movies</h4>
		 		<ul>
		 			<?php
		 				$recent_movies = get_recent_movies();
		 				foreach($recent_movies as $recent){
		 					$mid = $recent['mID'];
		 					echo "<li><a href='movie_detail.php?mid=" . $mid . "'> " . $recent["title"]. "</a></li>";
		 				}
		 			?>
		 		</ul><br>
		 		<h4>Recently Added Actors</h4>
		 		<ul>
		 			<?php
		 				$recent_actors = get_recent_actors();
		 				foreach($recent_actors as $recent){
		 					$aid = $recent['aID'];
		 					echo "<li><a href='actor_detail.php?aid=" . $aid . "'> " . $recent["first_name"]." ".$recent["last_name"]."</a></li>";
		 				}
		 			?>
		 		</ul>
	 		</div><!--/SIDEBAR-->
	 	</div><!--row-->
	 </div><!--container -->

<?php require_once( 'incl/footer.php' ); ?>
