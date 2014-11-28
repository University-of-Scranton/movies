<?php 
require_once('incl/header.php');
require_once('incl/functions.php');

?>

 <div class="container mtb">
	 	<div class="row">
	 	
	 		<!--MAIN CONTENT AREA-->
	 		<div class="col-lg-8">
	 			<p>The main body of the page goes here</p>
	 			<p><b>Sample DB Connection</p></b>
	 			<?php
				$resImport = test_database();
				result_dumper($resImport);
		 		?>
		 		<br>
		 		<b>Testing below this line</b>
		 		<p>----------------------</p>
		 		<?php
		 			echo "Movie 1 Title: " . $resImport[0]["title"];
		 		?>
		 		<p>----------------------</p>
		 		<b>Testing above this line</b>
			</div><!--/MAIN CONTENT AREA-->
	 		
	 		
	 		<!-- SIDEBAR-->
	 		<div class="col-lg-4">
		 		<p>Sidebar (if any) goes here/</p>
	 		</div><!--/SIDEBAR-->
	 	</div><!--row-->
	 </div><!--container -->

<?php require_once( 'incl/footer.php' ); ?>
