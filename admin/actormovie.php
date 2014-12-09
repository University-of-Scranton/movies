<?php
include("../incl/functions.php");
include("incl/admin_head.php");
$movie_list = full_movie_list();
$movie_size = sizeof($movie_list);

$actor_list = full_actor_list();
$actor_size = sizeof($actor_list);
?>
<div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-8">
	 			<?php
	 					if(isset($_POST["submit"])){
	 						$selected_actor = $_POST["selected_actor"];
	 						$generated_mid = $_POST["generated_mid"];
	 						add_actor_to_movie($selected_actor,$generated_mid);
	 						echo "<p>Actors added!</p>";
	 					}
	 			?>
	 			<h4>Add Actors to an Existing Movie</h4>
	 			<div class="hline"></div>
		<form method="POST">
			<label for="generated_mid">Movie</label> 
			<select name="generated_mid"><br>
				<?php
				for($i=0;$i<=$movie_size-1;$i++){
						$mid = $movie_list[$i]["mID"];
						$movie = $movie_list[$i]["title"] . " (" . $movie_list[$i]["year_released"] . ")";
						echo "<option value='".$mid."'>".$movie."</option>";
					}
				?>
			</select><br>
			<label for="actor">Choose Actors</label><br>
			<select name="selected_actor[]" multiple required>
				<?php
					for($i=0;$i<=$actor_size-1;$i++){
						$aid = $actor_list[$i]["aID"];
						$actor = $actor_list[$i]["first_name"] . " " . $actor_list[$i]["last_name"];
						echo "<option value='".$aid."'>".$actor."</option>";
						}
				?>
			</select>
			
			<br>
			<input type="submit" name="submit" class="btn btn-theme">

		</form>
			</div><!--/col-lg-8-->
		</div>
	</div>

</html>