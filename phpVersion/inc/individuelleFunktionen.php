
<?php 


	echo "<h4>Individuelle PHP Funktionen</h4>";


	// echo "Ausgabe 3: Hallo, mein Name ist $vor_name $nach_name Ich bin. <sup>$alter</sup> alt und wohne in $wohnort.<br>";

	function myFunction($vor, $nach, $alter, $ort){
		echo "Das ist myFunction.";
		echo "<br>Hallo mein Name ist <b>$vor $nach</b>, ich bin $alter alt und wohne in $ort.";
	}

	myFunction($vor_name, $nach_name, $alter, $wohnort);


//---------------------------------------------------------------------------------

	$pets = [
		'Mascha',
		'Rocky',
		'Jango',
		'Tara',
		'Sweety',
		'Stubsi',
		'Sneeky',
		'Twix',
	];

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



//---------------------------------------------------------------------------------

	// Funktionen mit Return


	$vor_name3 = "Janis";
	$nach_name3 = "Weber";
	$alter3 = 12;
	$wohnort3 = "Trogen AR";

	function checkString($vor3, $nach3, $alt3, $ort3){
		echo "<br>Prüft, ob alle angaben zur Person gemacht wurden:";
		if(empty($vor3) || empty($nach3) || $alt3 < 1 || empty($ort3)){
			return false;
		}
		else{
			return true;
		}
	}

	if(checkString($vor_name3, $nach_name3, $alter3, $wohnort3) == true){
		echo "<br>Es wurde alles ausgefüllt.";
	}
	else{
		echo "<br>Es fehlt noch was.";
	}


//---------------------------------------------------------------------------------


	// variabel mit global in einer Funktion aufrufen

	function nrDrei(){
		echo "<br><br>Ruft die Variabel vor_name3 via global auf:";
		global $vor_name3;
		echo "<br>Mein Name ist $vor_name3";
	}

	nrDrei();
	



//---------------------------------------------------------------------------------




















 ?>