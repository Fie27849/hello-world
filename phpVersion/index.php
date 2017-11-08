


<?php 
	$link_to_tome = "index.php";
	$link_to_about = "about.html";
	$link_to_impressum = "impressum.html";
	$ueberschrift_eins = "Meine Überschrift"
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Meine Webseite</title>
	<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<header class="container">
		
		<nav>
			<ul>	
				<li><a href="<?php echo "$link_to_tome"; ?>"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li><span>|</span>
				<li><a href="<?php echo "$link_to_about"; ?>"><i class="fa fa-envelope" aria-hidden="true"></i>Über mich</a></li><span>|</span>
				<li><a href="<?php echo "$link_to_impressum"; ?>"><i class="fa fa-file-text" aria-hidden="true"></i>Impressum</a></li>
			</ul>
		</nav>
	</header>	
	<main class="container">
		<div class="contentWrap">			
			<h1><?php echo "$ueberschrift_eins"; ?></h1>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
		</div>
		<div class="phpFunktionen">
			<?php 
				// boolean
				$wahr = true;
				$falsch = false;

				// string
				$string = "Das ist ein Paragraph in einem PHP String";
				echo $string . '<br>';

				// verkettung
				echo $wahr . ' - ' . $falsch . '<br>';

				echo $string . ' - ' . $wahr . '<br>';
			 ?>
			  <br>
			 <?php 

			 	// Variabeln
			 	$vor_name = "<b>Stephanie";
			 	$nach_name = "Kessler</b>";
			 	$alter = "24 Jahre";
			 	$wohnort = "<i>Grub AR</i>";

			 	//Ausgabe
			 	echo 'Ausgabe 1: Hallo, mein Name ist ' . $vor_name . ' ' . $nach_name . '.' . ' Ich bin ' . '<sup>' . $alter . '</sup>' . ' alt und wohne in ' . $wohnort . '.' . '<br>';

			 	// Variabeln
			 	$vor_name2 = "Stephanie";
			 	$nach_name2 = "Kessler";
			 	$wohnort2 = "Grub AR";

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
		</div>
	</main>
	<footer class="container">	
		<p>Das ist meine Fusszeile</p>
	</footer>
</body>
</html>