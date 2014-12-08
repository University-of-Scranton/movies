<?php require_once( 'incl/header.php' ); ?>
<?php require_once( 'incl/functions.php' ); ?>
<?php
$ID=$_GET["id"];
$actor_info=get_actor_information($ID);//OJO AQUI TENGO QUE CAMBIARLO PARA QUE VAYA AL ACTOR QUE YO QUIERO!!!
$movies_by_actor=get_movie_by_actor($ID);
?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- MAIN CONTENAT AREA -->
	 		<div class="col-lg-8">
	 		<h2>
	 		<?php echo($actor_info[0]["first_name"]);echo(' ');echo($actor_info[0]["last_name"]);
	 		?>
	 		</h2>	
	 			<p>

					<table width="100%" border="0" ccellpadding="10px">

					
					<tr colspan="2"><center><h4>Bio</h4></center>
					</tr>
					<tr>
					<?php echo($actor_info[0]["bio"]);
					?>
					</tr>

					<tr colspan="2"><center><h4>Date of Birth</h4></center>
					</tr>
					<tr>
					<?php echo($actor_info[0]["dob"]);
					?>
					</tr>
					
					<tr colspan="2"><center><h4>Won an Oscar</h4></center>
					</tr>
					<tr>
					<?php
					if($actor_info[0]["dob"]=1){
						echo('YES');
					}else{
						echo('Still trying to get one');
					}
					?>
					</tr>

					<tr colspan="2"><center><h4>Movies</h4></center>
					</tr>
					<?php
					foreach($movies_by_actor as $key => $value)/*para cada celda del array, hacer lo siguiente, y llamar al asociador key y a cada celda value*/
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
					</table>
					
					
	 			</p>
		 		
			</div><! --/ MAIN CONTENT AREA -->
	 		
	 		
	 		<! -- SIDEBAR -->
	 		<div class="col-lg-4">
	 		</div><!-- /SIDEBAR -->
	 	</div><! --/row -->
	 </div><! --/container -->
<?php require_once( 'incl/footer.php' ); ?>
