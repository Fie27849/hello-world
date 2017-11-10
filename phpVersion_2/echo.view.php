
<?php include("/controller/EchoController.php"); ?>
<?php include("header.php"); ?>
<?php 


//Ausgabe
 	echo 'Ausgabe 1: Hallo, mein Name ist ' . $vor_name . ' ' . $nach_name . '.' . ' Ich bin ' . '<sup>' . $alter . '</sup>' . ' alt und wohne in ' . $wohnort . '.' . '<br>';

 	

 	//Ausgabe (+ üersicht)
 	echo 'Ausgabe 2: Hallo, mein Name ist ' 
	 	. '<b>' 
	 	. $vor_name2 
	 	. ' ' 
	 	. $nach_name2 
	 	. '</b>' 
	 	. '.' 
	 	. ' Ich bin ' 
	 	. '<sub>' 
	 	. 24 
	 	. '</sub>' 
	 	. ' Jahre alt und wohne in ' 
	 	. '<i> ' 
	 	. $wohnort2 
	 	. '</i>' 
	 	. '.' 
	 	. '<br>';



	 	//Ausgabe (Vereinfachte Ausgabe)
	 	echo "Ausgabe 3: Hallo, mein Name ist $vor_name $nach_name Ich bin. <sup>$alter</sup> alt und wohne in $wohnort.<br>";




	echo '<b>Floats:</b>' . '<br>' . $float1 . '<br>' . $float2;


	echo "<br><br>Datum: $datum<br>a: $a<br>b: $b<br> c: $c";
	$c = $a + $b;
	echo "<br>c = a + b = $c";






 ?>

 <?php include("footer.php"); ?>