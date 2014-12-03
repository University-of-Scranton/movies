<?php 
require_once('incl/header.php');
require_once('incl/functions.php');
$list = full_actor_list();
$size = sizeof($list);

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
	 				echo "<h1>Size: " . var_dump($list) . "</h1>";
	 					for($i=0;$i<=$size-1;$i++){
	 						$aID = $list[$i]["aID"];
	 						$getCount = count_per_actor($aID);
	 						var_dump($getCount);
	 						$fullName = $list[$i]["first_name"] . " " . $list[$i]["last_name"];
	 						echo "<tr>";
	 						echo "<td>" . $aID . $fullName . "</td>";
	 						echo "<td>" . $getCount[0]["num"]. "</td>";
	 						echo "</tr>";
	 					}
	 				?>
	 				
	 			</table>
			</div><!--/MAIN CONTENT AREA-->
	 		
	 		

	 	</div><!--row-->
	 </div><!--container -->

<?php require_once( 'incl/footer.php' ); ?>
