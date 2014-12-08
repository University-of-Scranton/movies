<?php require_once( 'incl/header.php' ); ?>
<?php require_once( 'incl/functions.php' ); ?>
<?php $recently_aded=recently_aded();?>
 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			
	 			<p>
	 				
					
					
					<table width="100%" border="0" ccellpadding="10px">
						
							<h3>
								<center>
									<a href="Add_movie.php">Add a movie  -</a>
									<a href="Add_actor.php">Add an actor  -</a>
									<a href="Add_studio.php">Add a studio</a>
								</center>
							</h3>
							
						<hr>
						<br>

						
							<h3><center>Recently Added</center></h3>
							<?php
							foreach($recently_aded as $key => $value)/*para cada celda del array, hacer lo siguiente, y llamar al asociador key y a cada celda value*/
							{
							?>
								        <tr>  <!–iniciamos la creacion de una fila–>
								            <?php foreach($value as $key=>$value)/*para recorrer los arrays que hay dentro del array principal actores*/
								            {
							                ?>
						            		<td><!– mostramos en las siguientes celdas de cada fila cada contenido–>
						                    <center><?php echo $value?></center>
						            		</td>
						                    <?php
						                    }
								            ?>
								        </tr>
							<?php
							}
							?>
						</td>


					</table>
					
					
	 			</p>
		 		
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 		
	 		<! -- SIDEBAR -->
	 		<div class="col-lg-4">
	 		</div><!-- /SIDEBAR -->
	 	</div><! --/row -->
	 </div><! --/container -->
<?php require_once( 'incl/footer.php' ); ?>
