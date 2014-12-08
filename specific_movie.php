<?php require_once( 'incl/header.php' ); ?>
<?php require_once( 'incl/functions.php' ); ?>
<?php
$ID=$_GET["id"];
$movie_info=get_movie_information($ID);
$actors_by_movie=get_actors_by_movie($ID);
?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 		<h2>
	 		<?php echo($movie_info[0]["title"]); echo(' '); echo(' - ');echo(' ');echo($movie_info[0]["year_released"]);
	 		?>
	 		</h2>	
	 			<p>

					<table width="100%" border="0" ccellpadding="10px">

					
					<tr colspan="2"><center><h4>Synopsis</h4></center>
					</tr>
					<tr>
					<?php echo($movie_info[0]["synopsis"]);
					?>
					</tr>

					<tr colspan="2"><center><h4>Studio</h4></center>
					</tr>
					<tr>
					<?php
					$studio_info=get_studio_information($movie_info[0]["studioID"]);
					echo($studio_info[0]["name"]);
					?>
					</tr>
					
					<tr colspan="2"><center><h4>Based on a novel</h4></center>
					</tr>
					<tr>

					<?php
					if($actor_info[0]["dob"]=1){
						echo('YES, and the novel was better');
					}else{
						echo('No');
					}
					?>
					</tr>

					<tr colspan="2"><center><h4>Staring</h4></center>
					<?php
					foreach($actors_by_movie as $key => $value)/*para cada celda del array, hacer lo siguiente, y llamar al asociador key y a cada celda value*/
					{
					?>
								        <tr>  <!–iniciamos la creacion de una fila–>
								            <?php foreach($value as $key=>$value)/*para recorrer los arrays que hay dentro del array principal actores*/
								            {
							                ?>
						            		<td><!– mostramos en las siguientes celdas de cada fila cada contenido–>
						                    <?php echo $value
						                    ?>
						            		</td>
						                    <?php
						                    }
								            ?>
								        </tr>
					<?php
					}
					?>

					</tr>
					</table>
					
					
	 			</p>
		 		
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 		
	 		<! -- SIDEBAR -->
	 		<div class="col-lg-4">

	 		</div><!-- /SIDEBAR -->
	 	</div><! --/row -->
	 </div><! --/container -->

<?php require_once( 'incl/footer.php' ); ?>
