<?php
include("../incl/functions.php");
include("incl/admin_head.php");
?>

	 <div id="service">
	 	<div class="container">
 			<div class="row centered">
 				<div class="col-md-4">
 					<img src="../assets/img/film_icon.png" class="fa fa-heart-o"></img>
 					<h1><br/><a href="addmovies.php" class="btn btn-theme">Add Movie</a></h1>
 				</div>
 				<div class="col-md-4">
 					<img src="../assets/img/actor_icon.png" class="fa fa-flask"></img>
 					<h1><br/><a href="addactors.php" class="btn btn-theme">Add Actor</a></h1>
 				</div>
 				<div class="col-md-4">
 					<img src="../assets/img/take.png" width="128px" height="128px" "class=fa fa-trophy"></img>
 					<h1><br/><a href="addstudio.php" class="btn btn-theme">Add Studio</a></h1>
 				</div>		 				
	 		</div>
	 		<h5 style="color:#428bca;">Already added a movie? Add actors <a style="color:red;" href="actormovie.php">here</a></h5>
			<h3>Most Recently Added</h3>
				<?php
		 				$recent_movies = get_recent_movies();
		 				foreach($recent_movies as $recent){
		 					$mid = $recent['mID'];
		 					echo "<li><a href='../movie_detail.php?mid=" . $mid . "'> " . $recent["title"]. "</a></li>";
		 				}
		 			?>
		 		</ul><br>
		 		<h4>Recently Added Actors</h4>
		 		<ul>
		 			<?php
		 				$recent_actors = get_recent_actors();
		 				foreach($recent_actors as $recent){
		 					$aid = $recent['aID'];
		 					echo "<li><a href='../actor_detail.php?aid=" . $aid . "'> " . $recent["first_name"]." ".$recent["last_name"]."</a></li>";
		 				}
		 				?>
	 	</di<!--container -->
	 </div><<! --service -->

</html>
