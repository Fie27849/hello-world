<?php include("header.php"); ?>
<?php include("/controller/SpamController.php"); ?>
<?php 



foreach ($input as $test) {
	$test = strtolower($test);
	if(strstr($test, 'spam') == true || strstr($test, 'singles') == true){
		echo '<br>Satz ist SPAM';
	}
	else{
		echo '<br>Satz ist OK';
	}
}


 ?>

 <?php include("footer.php"); ?>