

<?php 
	
	// if regeln
	$d = 11;
	$e = 8;
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
	$tageszeit = 2;

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






	// While Schleife mit raufzählen
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


	// ForEach Schleife
	echo "<h4>ForEach schleife</h4>";
	$zahlen = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40];
	foreach ($zahlen as $zahl) {
		echo "$zahl, ";
	}

	// nur Primzahlen ausgeben
	echo "<h4>ForEach schleife: nur Primzahlen</h4>";
	foreach ($zahlen as $zahl) {
		if($zahl%2 !== 0){
			//echo "<br>$zahl ist vieleicht Primzahl.";

				for($count = 1; $count <= $zahl; $count++){
					if($zahl%$count !== 0){
						if($count == $zahl){
							echo "<br>$zahl ist eine Primzahl.";
							echo "<br>COUNT: $count<br>ZAHL: $zahl<br>";
						}						
					}
					else{
						echo "<br>$zahl ist keine Primzahl.";
						echo "<br>COUNT: $count<br>ZAHL: $zahl<br>";
						break;
					}
				}
		}
		else{
			//echo "<br>$zahl ist eine gerade Zahl.";
		}

	}
	$count = 0;


	foreach ($zahlen as $zahl) {
		if($count = 1; $count <=; $count++){
			echo $count;
		}
	}














?>