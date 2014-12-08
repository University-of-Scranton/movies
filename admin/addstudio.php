<?php
include("../incl/functions.php");
include("incl/admin_head.php");
$months = array('January','February','March','April',
	'May','June','July','August','September','October',
	'November','December');
?>
<div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-8">
	 			<?php
	 				$oscar = '0';
	 					if(isset($_POST["submit"])){
	 						extract($_POST);

	 						$FORM_DATA = array(
	 								"name" => $name,
	 								"city" => $city,
	 								"state" => $state,
	 								"zip" => $zip,
	 							);
	 					add_studio($FORM_DATA);
	 					echo "<p>".$FORM_DATA["name"] . " added!<p>";
	 					}
	 			?>
	 			<h4>Add a Studio</h4>
	 			<div class="hline"></div>
		<form method="POST">
			<label for="name">Studio Name </label> <input type="text" name="name" required><br>
			<label for="city">City</label> <input type="text" name="city" required>

			<label for="state">State:</label>
			<input type="text" name="state" maxlength="2"><br>
			<label for="zip">Zip: </label>
			<input type="number" name="zip">
			<br>
			<input type="submit" name="submit" class="btn btn-theme">

		</form>
			</div><!--/col-lg-8-->
		</div>
	</div>

</html>