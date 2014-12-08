<?php require_once( 'incl/header.php' ); ?>
<?php require_once( 'incl/functions.php' ); ?>
<?php $recently_aded=recently_aded();?>
 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			<h3>Add a new studio!</h3>
	 			<p>
					<?php
					if(isset($_POST['submit'])){
						if(!check_studio($_POST['name'])){
							add_studio($_POST);
						}else{
							print "<h3>That studio already exists in the DataBase</h3>";
						}
					}

					?>	
					<div>
					<form method="post" name="add_studio">
						<div>
							<label for="Name">Studio name:</label> <input type="text" name="name" placeholder="Name" />
						</div>
						<div>
							<label for="City">City:</label> <input type="text" name="city" placeholder="City" />
						</div>				
						<div>
							<label for="State">State:</label> <input type="text" name="state" placeholder="State" />
						</div>
						<div>
							<label for="ZIP">ZIP code:</label> <input type="text" name="zip" placeholder="zip" />
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
