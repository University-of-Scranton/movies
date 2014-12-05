<?php 
require_once('incl/header.php');
require_once('incl/functions.php');
$list = full_studio_list();
$size = sizeof($list);
?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<!--MAIN CONTENT AREA-->
	 		<div class="col-lg-8">
	 			<h3>Studio List</h3>
	 			<table>
	 				<tr class="table_head">
	 					<th>Studio</th>
	 					<th>Location</th>
	 				</tr>
	 				<?php
	 					for($i=0;$i<=$size-1;$i++){
	 						$sID = $list[$i]["sID"];
	 						$name = $list[$i]["name"];
	 						$location = $list[$i]["city"] . ", " . $list[$i]["state"];
	 						echo "<tr>";
	 						echo "<td><a href=studio_detail.php?sid=" . $sID . ">" . $name . "</a></td>";
	 						echo "<td>" . $location . "</td>";
	 						echo "</tr>";
	 					}
	 				?>
	 				
	 			</table>
			</div><!--/MAIN CONTENT AREA-->
	 		
	 		

	 	</div><!--row-->
	 </div><!--container -->

<?php require_once( 'incl/footer.php' ); ?>
