<?php require_once( 'incl/header.php' ); ?>
<?php require_once( 'incl/functions.php' ); ?>
<?php $recently_aded=recently_aded();?>
 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			<h3>Add a new movie!</h3>
	 			<p>
					<?php
					if(isset($_POST['submit'])){
						if(!check_movie($_POST['title'])){
							add_movie($_POST);
						}else{
							print "<h3>That movie already exists in the DataBase</h3>";
						}
					}

					?>	
					<div>
					<form method="post" name="add_movie">
						<div>
							<label for="title">Movie title:</label> <input type="text" name="title" placeholder="Title" />
						</div>
						<div>
							<label for="year_released">Year:</label> <input type="text" name="year_released" placeholder="Year" />
						</div>				
						<div>
							<label for="synopsis">Synopsis:</label> <input type="text" name="synopsis" placeholder="Synopsis" />
						</div>
						<div>
							<label for="was_novel">Was it a novel?:</label> <input type="number" name="was_novel" placeholder="Was it a novel?" />
						</div>
	
						<div>
							<select name="studio_ID">
								<option value="0">Select a Studio</option>
								<?php
									$studios= get_studios();
									foreach($studios as $s){
										print '\t<option value="'.$s['sID']. '">'.$s['name'] .'</option>\n';
									}
								?>
							</select>
						</div>
						<div>
							<input type="submit" name="submit" value="SUBMIT" />
						</div>
					</form>
					</div>		


					
					
					
	 			</p>
	 			<h3><a href="Add_actor_to_movie.php">Add an actor to an existing movie</a></h3>
	 			<h3><a href="Add_genre_to_movie.php">Add a genre to an existing movie</a></h3>





			</div><! --/ MAIN CONTENT AREA -->
	 		
	 		
	 		<! -- SIDEBAR -->
	 		<div class="col-lg-4">
	 		</div><!-- /SIDEBAR -->
	 	</div><! --/row -->
	 </div><! --/container -->
<?php require_once( 'incl/footer.php' ); ?>
