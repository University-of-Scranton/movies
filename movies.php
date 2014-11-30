<?php 
require_once('incl/header.php');
require_once('incl/functions.php');
?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<!--MAIN CONTENT AREA-->
	 		<div class="col-lg-8">
	 			<h3>Movie List</h3>
	 			<table>
	 				<tr class="table_head">
	 					<th>Movie</th>
	 					<th>Year Released</th>
	 				</tr>
	 					<?php
	 					$movie_list = full_movie_list();
	 					$list_size = sizeof($movie_list);
	 					for($i=0;$i<=$list_size;$i++){
	 						echo "<tr>";
	 						echo "<td><a href='movie_detail.php?mid=" . $movie_list[$i]['mID'] . "'> " . $movie_list[$i]['title']. "</a></td>";
	 						echo "<td>" . $movie_list[$i]['year_released'] . "</td>";
	 						echo "</tr>";
	 					}

	 					?>
	 			</table>
			</div><!--/MAIN CONTENT AREA-->
	 		
	 		

	 	</div><!--row-->
	 </div><!--container -->

<?php require_once( 'incl/footer.php' ); ?>
