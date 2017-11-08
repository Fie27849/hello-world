



<?php 
	
	echo "<h4>einfaches Array</h4>";
	// einfaches array erstellen
	$edelmetalle = [
		'Gold',
		'silber',
		'Platin',
		'Iridium'
	];

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

 ?>
<br>
<?php 
	
	echo "<h4>assoziatives Array</h4>";
	// assoziatives array
	$angaben = [
		'vor' => 'Stephanie',
		'nach' => 'Kessler',
		'alt' => '24 Jahre',
		'ort' => 'Grub AR',
	];

	print_r($angaben);
	echo "<br>";


	echo "Hallo, mein Name ist $angaben[vor]  $angaben[nach]. Ich bin $angaben[alt] alt und wohne in $angaben[ort].";

 ?>









































