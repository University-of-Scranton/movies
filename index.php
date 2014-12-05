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
				<?php 
				if(isset($_POST['submit'])){ //checks if a form named submit has been added
				if(!check_movie($_POST['title'])){ //checks the name part of the form to see if it already exists
					add_movie($_POST);
				}else{
					print "<h3>That movie already exists in the DB</h3>";
				}
			}
			
				if(isset($_POST['submit_actor'])){ //checks if a form named submit has been added
				if(!check_actor($_POST['last_name'])){ //checks the name part of the form to see if it already exists
					add_actor($_POST);
				}else{
					print "<h3>That actor already exists in the DB</h3>";
				}
			}
			
			if(isset($_POST['submit_studio'])){ //checks if a form named submit has been added
				if(!check_studio($_POST['name'])){ //checks the name part of the form to see if it already exists
					add_studio($_POST);
				}else{
					print "<h3>That studio already exists in the DB</h3>";
				}
			}

			?>
			<div>
			<form method="post" name="add_movie">
				<div>
					<label for="title">Title</label> <input type="text" name="title" placeholder="Title" />
				</div>
				<div>
					<label for="year_released">Year Released</label> <input type="date" name="year_released" placeholder="" />
				</div>				
				<div>
					<label for="synopsis">Synopsis</label> <input type="textarea" name="synopsis" placeholder="Enter a description" />
				</div>
				<div>
					<label for="was_novel">Based From a Novel?</label> <input type="checkbox" name="was_novel" placeholder="" />Yes
				</div>
				<div>
					<select name="studioID">
						<option value="0">Select a Studio</option>
						<?php
							$studio= get_info('studio');
							foreach($studio as $s){
								print '\t<option value="'.$s['sID']. '">'.$s['name'] .'</option>\n';
							}
						?>
					</select>
				</div>
				<div>
					<input type="submit" name="submit" value="Submit" />
				</div>
			</form>
			</div>
</p>

		<div>
			<form method="post" name="add_actor">
				<div>
					<label for="first_name">First Name</label> <input type="text" name="first_name" placeholder="George" />
				</div>
				<div>
					<label for="last_name">Last Name</label> <input type="text" name="last_name" placeholder="Clooney" />
				</div>				
				<div>
					<label for="bio">Biography</label> <input type="textarea" name="bio" placeholder="Enter text" />
				</div>
				<div>
					<label for="dob">Date of Birth</label> <input type="date" name="dob" placeholder="" />
				</div>
				<div>
					<label for="won_oscar">Any Oscars?</label> <input type="text" name="won_oscar" placeholder="" />
				</div>
				<div>
					<input type="submit" name="submit_actor" value="SUBMIT" />
				</div>
			</form>
			</div>
			
			<div>
			<form method="post" name="add_studio">
				<div>
					<label for="name">Name</label> <input type="text" name="name" placeholder="e.g Universal" />
				</div>
				<div>
					<label for="city">City</label> <input type="text" name="city" placeholder="e.g Philadelphia" />
				</div>				
				<div>
					<label for="state">State</label> <input type="text" name="state" placeholder="e.g PA" />
				</div>
				<div>
					<label for="zip">Zip Code</label> <input type="text" name="zip" placeholder="10-digit zip code" />
				</div>
				<div>
					<input type="submit" name="submit_studio" value="SUBMIT" />
				</div>
			</form>
			</div>
	 		</div><!-- /SIDEBAR -->
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
