<?php require_once( 'incl/header.php' ); ?>
<?php require_once( 'incl/functions.php' ); ?>

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
					<caption>ACTORS</caption>
					
					<tr>
						<td >
							<h4><center>#</center></h4>
						</td>
						<td colspan='2'>
							<h4><center>NAME</center></h4>
						</td>
						<td>
							<h4><center>NUMBER OF MOVIES</center></h4>
						</td>
					</tr>

					<tbody>  
					<?php
					foreach($actors as $key => $datum)/*para cada celda del array, hacer lo siguiente, y llamar al asociador key y a cada celda value*/
					{
					?>
								        <tr>  <!–iniciamos la creacion de una fila–>
								            <?php foreach($datum as $key=>$value)/*para recorrer los arrays que hay dentro del array principal actores*/
								            {

							                ?>
						            		<td><!– mostramos en las siguientes celdas de cada fila cada contenido–>
						                    <center><?php echo $value?></center>
						            		</td>
						                    
						                    
						            		<?php
						                    }
						                    
						                    //$identification=get_ID_by_last_name($value);
						                    $count=get_movie_count_by_actor($datum["aID"]); 
								            ?>
								            <td><!– mostramos en las siguientes celdas de cada fila cada contenido–>
						                    <center><?php echo($count[0]["COUNT(movie_actors.actorID)"]);?></center>
						            		</td>
								        </tr>
					<?php
					}
					?>
					</tbody>
					</table>
					
					
	 			</p>
		 		
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 		
	 		<! -- SIDEBAR -->
	 		<div class="col-lg-4">
		 			 		</div><!-- /SIDEBAR -->
	 	</div><! --/row -->
	 </div><! --/container -->
<?php print_r($get_actors);?>
<?php require_once( 'incl/footer.php' ); ?>
