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
	 					for($i=0;$i<=$size-1;$i++){
	 						var_dump($list);
	 						$aID = $list[$i]["aID"];
	 						$getCount = count_per_actor($aID);
	 						$fullName = $list[$i]["first_name"] . " " . $list[$i]["last_name"];
	 						echo "<tr>";
	 						echo "<td><a href=actor_detail.php?aid=" . $aID . ">" . $fullName . "</a></td>";
	 						echo "<td>" . $getCount[0]["num"]. "</td>";
	 						echo "</tr>";
	 					}
	 				?>
	 				
	 			</table>
			</div><!--/MAIN CONTENT AREA-->
	 		
	 		

	 	</div><!--row-->
	 </div><!--container -->

<?php require_once( 'incl/footer.php' ); ?>
