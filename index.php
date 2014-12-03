<?php require_once( 'incl/header.php' ); ?>
<?php require_once( 'incl/functions.php' ); ?>
<?php$recently_aded=recently_aded();//Todavía tengo que retocar esta funcion para que me envie todos los datos nuevos, no solo pelis?>
 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			
	 			<p>
	 				<?php require_once( 'incl/functions.php' ); ?>
					<?php
					$actors=get_actors();
					?>
					
					
					<table width="100%" border="3" ccellpadding="10px">
						<td>
							Friends are an important part and parcel of one’s life. The welcome wishes for a friend shows the cordial nature 
							of the sender and makes the friend feel he is cared for and loved. The welcome wishes for the friend can be sent 
							to welcome him or her on any occasion or for welcoming the friend to the home. Sending text messages or beautiful 
							cards with welcome wishes and also sending gifts to the friend along with it are a good way of sending welcome  
							wishes to he friends. One can also create a welcome wishes video clip for the friend and send it on a DVD.
						</td>

						<td>
							Hey! Tengo que continuar aquí!!
						</td>


					</table>
					
					
	 			</p>
		 		
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 		
	 		<! -- SIDEBAR -->
	 		<div class="col-lg-4">
		 		<p>Sidebar (if any) goes here/</p>
	 		</div><!-- /SIDEBAR -->
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
