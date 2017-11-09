<?php include("header.php"); ?>
<?php include("/controller/ArrayController.php"); ?>
<?php 


	// bestimmten wert via Index ausgeben
	echo $edelmetalle[2] . '<br>';

	// ganzes Array ausgeben
	print_r($edelmetalle);
	echo "<br>";


	// nur die Werte des ganzen Arrays ausgeben
	$count = 0;
	foreach ($edelmetalle as $edelmetall) {
		$count++;
		echo "$count $edelmetall<br>";
	}
	$count = 0;

 
	
	echo "<h4>assoziatives Array</h4>";
	// assoziatives array
	

	print_r($angaben);
	echo "<br>";


	echo "Hallo, mein Name ist $angaben[vor]  $angaben[nach]. Ich bin $angaben[alt] alt und wohne in $angaben[ort].";




	// soll als ul ausgegeben werden
	echo '<ul>';
	foreach ($wochentage as $abkuerzung => $wochentag) {
		echo "<li>$wochentag kürzt man ab als $abkuerzung.</li>";
	}
	echo '</ul>';




 ?>




 <?php include("footer.php"); ?>