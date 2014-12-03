<?php require_once( 'incl/header.php' ); ?>
<?php require_once( 'incl/functions.php' ); ?>
<?php
$actor_info=get_actor_information(1);
$movies_by_actor=get_movie_by_actor(1);
?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 		<h2>
	 		<?php echo($actor_info[0]["first_name"]);echo(' ');echo($actor_info[0]["last_name"]);
	 		?>
	 		</h2>	
	 			<p>

					<table width="100%" border="3" ccellpadding="10px">

					
					<tr colspan="2"><center><h4>Bio</h4></center>
					</tr>
					<tr>
					<?php echo($actor_info[0]["bio"]);
					?>
					</tr>

					<tr colspan="2"><center><h4>Date of Birth</h4></center>
					</tr>
					<tr>
					<?php echo($actor_info[0]["dob"]);
					?>
					</tr>
					
					<tr colspan="2"><center><h4>Won an Oscar</h4></center>
					</tr>
					<tr>
					<?php
					if($actor_info[0]["dob"]=1){
						echo('YES');
					}else{
						echo('Still trying to get one');
					}
					?>
					</tr>

					<tr colspan="2"><center><h4>Movies</h4></center>
					</tr>
					</table>
					
					
	 			</p>
		 		
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 		
	 		<! -- SIDEBAR -->
	 		<div class="col-lg-4">
		 		<p>Sidebar (if any) goes here/</p>
	 		</div><!-- /SIDEBAR -->
	 	</div><! --/row -->
	 </div><! --/container -->
<?php print_r($actor_info);print_r($movies_by_actor); ?>
<?php require_once( 'incl/footer.php' ); ?>
