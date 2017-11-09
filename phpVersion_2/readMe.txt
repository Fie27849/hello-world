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

// Dateien einbinden
	<?php include("echo.php"); ?>
-> wenn diese nicht vorhanden ist,
wird einfach der entsprechende Teil nicht ausgegeben
----------------------------------------------------

// Dateien als Voraussetzung einbinden
	<?php require("blabla.php"); ?>
-> wenn diese nicht vorhanden ist,
wird auch bei allem was danach kommt einen Fehlermeldung ausgegeben
--------------------------------------------------

// keine Fehlermeldung anzeigen
	<?php @include("echo.php"); ?>
-> durch das @ werden keine Fehlermeldungen ausgegeben
-------------------------------------------------------

// string oder Zahl auf bestimmten Ihnalt prüfen
	$check = "Janis";
	strstr($check, "a");
-----------------------------------------------------

// globale Variabeln, die am Anfang initialisiert wurden können in Funktionen nur verwendet werden, wenn sie beîm Aufruf mitgegeben wurden oder wenn sie mit global in der Funktion eingeführt werden

	function nrDrei(){
		echo "<br><br>Ruft die Variabel vor_name via global auf.";
		global $vor_name;
		echo "<br>Mein Name ist $vor_name";
	}

	nrDrei();
-----------------------------------------------------

