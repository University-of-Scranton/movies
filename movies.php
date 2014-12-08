<?php require_once( 'incl/header.php' ); ?>
<?php require_once( 'incl/functions.php' ); ?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 			
	 			<p>
	 				<?php require_once( 'incl/functions.php' ); ?>
					<?php
					$actors=get_movies();
					?>
					
					
					<table width="100%" border="3" ccellpadding="10px">
					<caption>MOVIES</caption>
					<thead>
					<th><center>TITLE</center>
					</th>
					<th><center>YEAR</center>
					</th>
					</thead>

					<tbody>  
					<?php
					foreach($actors as $key => $datum)/*para cada celda del array, hacer lo siguiente, y llamar al asociador key y a cada celda value*/
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
						                    <center><?php echo "<a href=\"$adress\">$value</a>";?>
						                    </td>

						                    <?php
						                		}
						                    }
								            ?>
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
