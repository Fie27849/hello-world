<?php include("header.php"); ?>
<?php include("SpamController.php"); ?>
<?php 



foreach ($input as $test) {
	$test = strtolower($test);
	if(strpos($test, 'spam') == true){
		echo '<br>SPAM!!!';
	}
	else{
		echo '<br>Kein spam.';
	}
}






















 ?>