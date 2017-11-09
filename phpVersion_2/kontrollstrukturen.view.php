<?php include("header.php"); ?>
<?php include("/controller/KontrollstrukturenController.php"); ?>
<?php


	echo "<h4>IF Regel</h4>";
	if($c > $d){
		echo "<br>$c ist grösser als $d.";
	}
	else{
		echo "<br>$c ist nicht grösser als $d.";
	}

	// Tageszeit bestimmen
	echo "<h4>Tageszeit bestimmen mit IF Regel</h4>";
	// 6 - 12 -> Vormittag
	// 13 - 18 -> Nachmittag
	// 19 - 00 -> Abend
	// 1 - 5 -> Nacht
	if($tageszeit >= 6 && $tageszeit <= 12){
		echo "Es ist Vormittag";
	}
	else if($tageszeit >= 13 && $tageszeit <= 18){
		echo "Es ist Nachmittag";
	}
	else if($tageszeit >= 19 && $tageszeit <= 23 || $tageszeit == 0){
		echo "Es ist Abend";
	}
	else if($tageszeit >= 1 && $tageszeit <= 5){
		echo "Es ist Nacht";
	}
	else{
		echo "Das ist keine gültige Angabe.";
	};





	echo "<h4>While schleife</h4>";


	while($count < 10){
		$count++;
		echo "<br>Count ist: $count";
	}
	$count = 0;


	// for Schleife
	echo "<h4>For schleife</h4>";
	for($count = 10; $count > 0; $count--){
		echo "<br>Count ist: $count";
	}
	$count = 0;




	echo "<h4>ForEach schleife</h4>";
	
	foreach ($zahlen as $zahl) {
		echo "$zahl, ";
	}



	// auf Inhalt prüfen
	echo "<h4>Eingabe auf Inhalt prüfen</h4>";
	echo "Enthält $check $letter?";
	if(strstr($check, $letter)){
		echo "<br>Es hat ein $letter.";
	}
	else{
		echo "<br>Es hat kein $letter.";
	}








 ?>

 <?php include("footer.php"); ?>