




<?php 


	echo "<h4>Array mit Wochentagen</h4>";
	// array mit Wochentagen
	$wochentage = [
    'Mo' => 'Montag',
    'Di' => 'Dienstag',
    'Mi' => 'Mittwoch',
    'Do' => 'Donnerstag',
    'Fr' => 'Freitag',
    'Sa' => 'Samstag',
    'So' => 'Sonntag',       // Letztes Komma kann stehen gelassen werden
	];
	

	// soll als ul ausgegeben werden
	echo '<ul>';
	foreach ($wochentage as $abkuerzung => $wochentag) {
		echo "<li>$wochentag kürzt man ab als $abkuerzung.</li>";
	}
	echo '</ul>';




 ?>