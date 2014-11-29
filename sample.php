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
				$testing = test_database();
				var_dump($testing)
		 		?>
		 		<br>
		 		<b>Testing below this line</b>
		 		<p>----------------------</p>
		 		<?php
		 			echo "Movie 1 Title: " . $testing[0]["title"];
		 		?>
		 		<h3>Server Stats:</h3>
		 		<h3>End of stats</h3>
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
