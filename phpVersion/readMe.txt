Hilfreiche snippets

========================================================

// Informationen über die Konfiguration auslesen
	<?php phpinfo(); ?> 
-----------------------------------------------------

// einfaches echo
	<? = "Hallo Welt" ?>
----------------------------------------------------

// gültige php Variabelnamen
	$allesklein
	$klein_mit_underscore
----------------------------------------------------

// ungültige php variabelnamen
	$d738dhw7
	$äöü
---------------------------------------------------

// mit Punkten können Strings und Variabeln verknüpft werden
	// boolean
	$wahr = true;
	$falsch = false;

	// string
	$string = "Das ist ein Paragraph in einem PHP String";
	echo $string . '<br>';

	// verkettung
	echo $wahr . ' - ' . $falsch . '<br>';

	echo $string . ' - ' . $wahr . '<br>';
-------------------------------------------------------

// bei floats immer mit Punkten arbeiten
	$float1 = 0.25;
	$float2 = 8.0;
------------------------------------------------------