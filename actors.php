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
								            if(!($key=="aID")){


								            {
								            $ID=$datum["aID"];
								            $adress="specific_actor.php?id=$ID";
							                ?>
						            		<td><!– mostramos en las siguientes celdas de cada fila cada contenido–>
						                    <center><?php echo "<a href=\"$adress\">$value</a>";?>
						                     
						                	</center>
						            		</td>
						                    <?php }?>
						                    
						            		<?php

					
						                    }
						                    
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
	 			<img src="You.jpg" width="1000px">
		 			 		</div><!-- /SIDEBAR -->
	 	</div><! --/row -->
	 </div><! --/container -->
<?php require_once( 'incl/footer.php' ); ?>
