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

						
							<h3>Recently Added</h3>
							<?php
							foreach($recently_aded as $key => $datum)/*para cada celda del array, hacer lo siguiente, y llamar al asociador key y a cada celda value*/
							{
							?>
								        <tr>  <!–iniciamos la creacion de una fila–>
								            <?php foreach($datum as $key=>$value)/*para recorrer los arrays que hay dentro del array principal actores*/
								            {
								            	if(!($key=="mID")){
								            $ID=$datum["mID"];

								            $adress="specific_movie.php?id=$ID";
							                ?>
						            		<td><!– mostramos en las siguientes celdas de cada fila cada contenido–>
						                    <center><?php echo "<a href=\"$adress\">$value</a>";?></center>
						            		</td>
						                    <?php
						                		}
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
	 			<img src="You.jpg" width="1000px">
	 		</div><!-- /SIDEBAR -->
	 	</div><! --/row -->
	 </div><! --/container -->
<?php require_once( 'incl/footer.php' ); ?>
