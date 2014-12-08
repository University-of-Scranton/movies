<?php require_once( 'incl/header.php' ); ?>
<?php require_once( 'incl/functions.php' ); ?>
<?php $recently_aded=recently_aded();?>
 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">


		 		<h3>Add a genre to a existing movie!</h3>
	 			<p>
					<?php
					if(isset($_POST['submit'])){
						
						add_genre_to_movie($_POST);
						
					}
					
					?>	





					<div>
					<form method="post" name="add_genre_to_movie">

						<div>
							<select name="movie_ID">
								<option value="0">Select a movie</option>
								<?php
									$movies= get_movies();
									foreach($movies as $m){
										print '\t<option value="'.$m['mID']. '">'.$m['title'] .'</option>\n';
									}
								?>
							</select>
						</div>
	
						<div>
							<select name="genre_ID">
								<option value="0">Select a genre</option>
								<?php
									$genres= get_genres();
									foreach($genres as $g){
										print '\t<option value="'.$g['gID']. '">'.$g['name'] .'</option>\n';
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
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 		
	 		<! -- SIDEBAR -->
	 		<div class="col-lg-4">
	 		</div><!-- /SIDEBAR -->
	 	</div><! --/row -->
	 </div><! --/container -->
<?php require_once( 'incl/footer.php' ); ?>
