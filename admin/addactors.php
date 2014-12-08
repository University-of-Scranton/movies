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

	 							if(strlen($birthmonth) == 1){
	 								$birthmonth = "0".$birthmonth;
	 							}
	 							if(strlen($birthdate) == 1){
	 								$birthdate = "0".$birthdate;
	 							}

	 							if($oscar == "on"){
	 								$oscar = '1';
	 							}
	 							else{
	 								$oscar = '0';
	 							}
	 						$dob = $birthyear."-".$birthmonth."-".$birthdate;
	 						$FORM_DATA = array(
	 								"firstname" => $firstname,
	 								"lastname" => $lastname,
	 								"oscar" => $oscar,
	 								"dob" => $dob,
	 								"bio" => $bio,
	 							);
	 					$run_insert = add_actor($FORM_DATA);
	 					return $run_insert . " has been added!";
	 					}
	 			?>
	 			<h4>Add an Actor!</h4>
	 			<div class="hline"></div>
		<form method="POST">
			<label for="firstname">First Name </label> <input type="text" name="firstname" required><br>
			<label for="lastname">Last Name </label> <input type="text" name="lastname" required><br>

			<label for="birthdate">Birth Date (Month, Day, Year)</label><br>
			<select name="birthmonth">
				<?php
					for($i=1;$i<=12;$i++){
						$x = $i-1;
						echo "<option value=".$i.">".$months[$x]."</option>";
					}
				?>
			</select>
			<input type="number" name="birthdate" min="1" max="31">
			<input type="number" name="birthyear" min="1900" max="2014">


			<br>
			<label for="oscar">Won Oscar?</label> <input type="checkbox" name="oscar"><br>
			<label for="bio">Biography</label><br>
			<TEXTAREA name="bio" rows=5 cols=50 placeholder="About the actor"></TEXTAREA><br>

			<input type="submit" name="submit" class="btn btn-theme">

		</form>
			</div><!--/col-lg-8-->
		</div>
	</div>

</html>