<?php include("header.php"); ?>
<?php include("/controller/FunktionenController.php"); ?>
<?php


	echo "<h4>Individuelle PHP Funktionen</h4>";
	myFunction($vor_name, $nach_name, $alter, $wohnort);


	echo "<br><br>Das sind meine Haustiere:";
	echo '<ol>';
	foreach ($pets as $tier) {		
		echo "<li>$tier</li>";		
	}
	echo '</ol>';


	// gross/klein Schreibung
	echo "<br>Grossbuchstaben: ";
	echo strtoupper($pets[3]);
	echo "<br>Kleinbuchstaben: ";
	echo strtolower($pets[7]);
	echo "<br>Anzahl Zeichen: ";
	echo strlen($pets[6]);
	

	echo "<br><br>Das sind meine Haustiere, verkehrete Ausgabe:";
	echo '<ol>';
	foreach ($pets as $tier) {		
		echo '<li>';
		echo strrev($tier);
		echo '</li>';		
	}
	echo '</ol>';



	if(checkString($vor_name3, $nach_name3, $alter3, $wohnort3) == true){
		echo "<br>Es wurde alles ausgefüllt.";
	}
	else{
		echo "<br>Es fehlt noch was.";
	}




	nrDrei();





 ?>

 <?php include("footer.php"); ?>