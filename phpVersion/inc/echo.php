<?php 

	$vor_name = "<b>Stephanie";
 	$nach_name = "Kessler</b>";
 	$alter = "24 Jahre";
 	$wohnort = "<i>Grub AR</i>";
 	
 	$vor_name2 = "Stephanie";
 	$nach_name2 = "Kessler";
 	$wohnort2 = "Grub AR";

 ?>


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



	 	//Ausgabe (+ üersicht + Vereinfachte Ausgabe)
	 	echo "Ausgabe 3: Hallo, mein Name ist $vor_name $nach_name Ich bin. <sup>$alter</sup> alt und wohne in $wohnort.<br>";

 ?>
<br>
<?php 

  	$float1 = 0.25;
  	$float2 = 8.0;

  	echo '<b>Floats:</b>' . '<br>' . $float1 . '<br>' . $float2;

 ?>