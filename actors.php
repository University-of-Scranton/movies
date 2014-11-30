<?php 
require_once('incl/header.php');
require_once('incl/functions.php');
?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<!--MAIN CONTENT AREA-->
	 		<div class="col-lg-8">
	 			<h3>Actor List</h3>
	 			<table>
	 				<tr class="table_head">
	 					<th>Actor</th>
	 					<th># Movies</th>
	 				</tr>
	 					<?php
	 					$actor_list = full_actor_list();
	 					$list_size = sizeof($actor_list);
	 					for($i=0;$i<=$list_size;$i++){
	 						$fullName = $actor_list[$i]["first_name"] . " " . $actor_list[$i]["last_name"];
	 						echo "<tr>";
	 						echo "<td><a href='actor_detail.php?aid=" . $actor_list[$i]['aID'] . "'> " . $fullName . "</a></td>";
	 						echo "<td>" . $actor_list[$i]["title"] . "</td>";
	 						echo "</tr>";
	 					}

	 					?>
	 			</table>
			</div><!--/MAIN CONTENT AREA-->
	 		
	 		

	 	</div><!--row-->
	 </div><!--container -->

<?php require_once( 'incl/footer.php' ); ?>
