<?php include("/../inc/vars.php"); ?>
<?php 

	function myFunction($vor, $nach, $alter, $ort){
		echo "Das ist myFunction.";
		echo "<br>Hallo mein Name ist <b>$vor $nach</b>, ich bin $alter alt und wohne in $ort.";
	}


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




	function checkString($vor3, $nach3, $alt3, $ort3){
		echo "<br>Prüft, ob alle angaben zur Person gemacht wurden:";
		if(empty($vor3) || empty($nach3) || $alt3 < 1 || empty($ort3)){
			return false;
		}
		else{
			return true;
		}
	}



	function nrDrei(){
		echo "<br><br>Ruft die Variabel vor_name3 via global auf:";
		global $vor_name3;
		echo "<br>Mein Name ist $vor_name3";
	}



 ?>