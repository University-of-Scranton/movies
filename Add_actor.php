<?php require_once( 'incl/header.php' ); ?>
<?php require_once( 'incl/functions.php' ); ?>
<?php $recently_aded=recently_aded();?>
 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			<h3>Add a new actor!</h3>
	 			<p>
					<?php
					if(isset($_POST['submit'])){
						if(!check_actor($_POST['first_name'])){
							add_actor($_POST);
						}else{
							print "<h3>That actor already exists in the DataBase</h3>";
						}
					}
					
					?>	
					<div>
					<form method="post" name="add_actor">
						<div>
							<label for="first_name">First name:</label> <input type="text" name="first_name" placeholder="First name" />
						</div>
						<div>
							<label for="last_name">Last name:</label> <input type="text" name="last_name" placeholder="Last name" />
						</div>				
						<div>
							<label for="bio">Biography:</label> <input type="text" name="bio" placeholder="Write the biography" />
						</div>
						<div>
							<label for="dob">Date of birth</label> <input type="date" name="dob" placeholder="Date of birth" />
						</div>
						<div>
							<label for="won_oscar">Did he/she win an Oscar?(write 0 or 1):</label> <input type="number" name="won_oscar" placeholder="Did he/she win an Oscar?(write 0 or 1)" />
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
