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
					<thead>
					<th colspan="2"><center>NAME</center>
					</th>
					</thead>

					<tbody>  
					<?php
					foreach($actors as $key => $value)/*para cada celda del array, hacer lo siguiente, y llamar al asociador key y a cada celda value*/
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
					</tbody>
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
