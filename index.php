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
					
					
					<table width="100%" border="0" ccellpadding="10px">
						
							<h3>Welcome</h3>
							Friends are an important part and parcel of one’s life. The welcome wishes for a friend shows the cordial nature 
							of the sender and makes the friend feel he is cared for and loved. The welcome wishes for the friend can be sent 
							to welcome him or her on any occasion or for welcoming the friend to the home. Sending text messages or beautiful 
							cards with welcome wishes and also sending gifts to the friend along with it are a good way of sending welcome  
							wishes to he friends. One can also create a welcome wishes video clip for the friend and send it on a DVD.
						<hr>
						<hr>
						<br>

						
							<h3>Recently Added</h3>
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
