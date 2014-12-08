<?php require_once( 'incl/header.php' ); ?>
<?php require_once( 'incl/functions.php' ); ?>
<?php $recently_aded=recently_aded();?>
 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			
	 			<p>
	 				<?php require_once( 'incl/functions.php' ); ?>
					<?php
					$actors=get_actors();
					?>
					
					
					
						
							<h3>Welcome</h3>
							<table width="100%" border="0" ccellpadding="10px">
								<tr>
									<td>
										Friends are an important part and parcel of one’s life. The welcome wishes for a friend shows the cordial nature 
										of the sender and makes the friend feel he is cared for and loved. The welcome wishes for the friend can be sent 
										to welcome him or her on any occasion or for welcoming the friend to the home. Sending text messages or beautiful 
										cards with welcome wishes and also sending gifts to the friend along with it are a good way of sending welcome  
										wishes to he friends. One can also create a welcome wishes video clip for the friend and send it on a DVD.
									</td>
									<td>
										<img src="Picture.png" width="1000px">
									</td>
								</tr>
							</table>

						<hr>
						
						<br>

						
							<h3>Recently Added</h3>
					<table width="100%" border="0" ccellpadding="10px">
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
