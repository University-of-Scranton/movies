<?php
include "includes/admin_head.php";
?>
<div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-8">
	 			<h4>Add a Movie!</h4>
	 			<div class="hline"></div>
		<form action="movies_db.php" type="POST">
			<label for="title">Title: </label> <input type="text" name="movie_title"><br>
			<label for="year">Year Released: </label> <input type="text" name="year"><br>
			<label for="novel">Based on Novel</label> <input type="checkbox" name="novel"><br>
			<label for="cast">Cast</label><br>
				<select multiple>
					<option value="George Clooney">George Clooney</option>
				</select><br>
			<input type="submit" name="submit" class="btn btn-theme">

		</form>
			</div><! --/col-lg-8 -->
		</div>
	</div>

</html>