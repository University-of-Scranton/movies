<?php require_once( 'incl/header.php' );
	require_once('incl/functions.php'); 
	?>
	
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
	
	if(isset($_POST['submit_movieactor'])){ //checks if a form named submit has been added
	if(!check_movieactor($_POST['maID'])){ //checks the name part of the form to see if it already exists
		add_movieactor($_POST);
	}else{
		print "<h3>That  already exists in the DB</h3>";
		}
	}

?>

<span class = "movies">
<h2>Add Movie</h2>
<form method="post" name="add_movie">
	<div>
		<label for="title">Title</label> <input type="text" name="title" placeholder="Title" />
	</div>
	<div>
		<label for="year_released">Year Released</label> <input type="date" name="year_released" placeholder="" />
	</div>				
	<div>
		<label for="synopsis">Synopsis</label> <textarea name="synopsis"> </textarea>
	</div>
	<div>
		<label for="was_novel">Based From a Novel?</label> <select name="was_novel"> <option value="">Select One</option> <option value="1">Yes</option> <option value="0">No</option> </select>
	</div>
	<div>
		<select name="studioID">
			<option value="0">Select a Studio</option>
				<?php
					$studio= get_studio_info('studio');
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
</span>

<span class = "actors">
<h2>Add Actor</h2>
<form method="post" name="add_actor">
	<div>
		<label for="first_name">First Name</label> <input type="text" name="first_name" placeholder="George" />
	</div>
	<div>
		<label for="last_name">Last Name</label> <input type="text" name="last_name" placeholder="Clooney" />
	</div>				
	<div>
		<label for="bio">Biography</label> <textarea name="bio" placeholder="Enter text"> </textarea>
	</div>
	<div>
		<label for="dob">Date of Birth</label> <input type="date" name="dob" placeholder="" />
	</div>
	<div>
		<label for="won_oscar">Any Oscars?</label> <select name="won_oscar"> <option value="">Select One</option> <option value="1">Yes</option> <option value="0">No</option> </select>
	</div>
	<div>
		<input type="submit" name="submit_actor" value="SUBMIT" />
	</div>
</form>
</span>

<span class = "studio">
<h2>Add Studio</h2>
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
</span>

<span class = "movieactor">
<h2>Add Actor to Movie</h2>
<form method="post" name="add_movieactor">
<div>
		<select name="actor">
			<option value="0">Select an Actor</option>
				<?php
					$actors= get_actor_info('actors');
					foreach($actors as $a){
						print '\t<option value="'.$a['aID']. '">'.$a['first_name'] . " " . $a['last_name'] .'</option>\n';
					}
				?>
		</select>
	</div>
	<div>
		<select name="studio">
			<option value="0">Select Movies</option>
				<?php
					$movies= get_info('movies');
					foreach($movies as $m){
						print '\t<option value="'.$m['mID']. '">'.$m['title'] .'</option>\n';
					}
				?>
		</select>
	</div>
	<div>
		<input type="submit" name="submit_movieactor" value="SUBMIT" />
	</div>
</form>
</span>

	
<?php require_once( 'incl/footer.php' ); ?>
