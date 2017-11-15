<?php include("/../inc/vars.php"); ?>

<?php 

	function isEmpty($test){

		if(
			isset($test) &&
			!empty($test) &&
			$test !=''
		){
			echo '<br>Es wurde ' . $test . ' angegeben.';			
		}
		else{
			echo '<br>Es gibt KEINE Angaben!';
		}
	}



 ?>
