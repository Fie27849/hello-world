<?php include("header.php"); ?>
<?php include("/controller/BeerController.php"); ?>
<?php 


	while($anzBeer > 0){
		echo '<br>' . $anzBeer . ' bottles of beer on the wall, ' . $anzBeer . ' bottles of beer.<br>Take one down and pass it around, ' . drink() . $anzBeer . ' bottles of beer on the wall.<br>';
	}


 ?>

 <?php include("footer.php"); ?>