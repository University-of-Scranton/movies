<?php
include("../incl/functions.php");
include("incl/admin_head.php");
$list = full_actor_list();
$size = sizeof($list);

$genre_list = get_genres();
$genre_size = sizeof($genre_list);

$studio_list = full_studio_list();
$studio_size = sizeof($studio_list);
?>
<div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-8">
	 			<?php
	 				$novel = '0';
	 					if(isset($_POST["submit"])){
	 						extract($_POST);
	 							if($novel == "on"){
	 								$novel = '1';
	 							}
	 							else{
	 								$novel = '0';
	 							}
	 						$FORM_DATA = array(
	 								"title" => $title,
	 								"year" => $year,
	 								"novel" => $novel,
	 								"synopsis" => $synopsis,
	 								"studio" => $studio,
	 								"select_actor" => $select_actor,
	 								"genre" => $genre
	 							);
	 						$run_insert = add_movie($FORM_DATA);
	 						echo "<p>".$run_insert." added to database!</p>";
	 						
	 					}
	 			?>
	 			<h4>Add a Movie!</h4>
	 			<div class="hline"></div>
		<form method="POST">
			<label for="title">Title: </label> <input type="text" name="title" required><br>
			<label for="year">Year Released: </label> <input type="text" name="year" required><br>
			<label for="genre">Genre</label><br>
				<select name="genre[]" multiple required>
					<?php
						  for($x=0;$x<=$genre_size-1;$x++){
							$gID = $genre_list[$x]["gID"];
							$genre_name = $genre_list[$x]["name"];
							echo "<option value='" . $gID . "'>" . $genre_name . "</option>";
						} 
					?>
				</select><br>
			<label for="novel">Based on Novel</label> <input type="checkbox" name="novel"><br>
			<label for="synopsis">Synopsis</label><br>
			<TEXTAREA name="synopsis" rows=5 cols=50 placeholder="No spoilers!!"></TEXTAREA><br>
			<label for="actors">Actors</label><br><select name="select_actor[]" multiple>
				<?php
	 				for($i=0;$i<=$size-1;$i++){
	 						$aID = $list[$i]["aID"];
	 						$fullName = $list[$i]["first_name"] . " " . $list[$i]["last_name"];
	 						echo "<option value='". $aID . "'>" . $fullName . "</option>";
	 						}
				?>
			</select><br>
			<label for="studio">Studio</label>
			<select name="studio" required>
					<?php
						  for($n=0;$n<=$studio_size-1;$n++){
							$sID = $studio_list[$n]["sID"];
							$studio_name = $studio_list[$n]["name"];
							echo "<option value='" . $sID . "'>" . $studio_name . "</option>";
						} 
					?>
				</select><br>

			<input type="submit" name="submit" class="btn btn-theme">

		</form>
			</div><!--/col-lg-8-->
		</div>
	</div>

</html>