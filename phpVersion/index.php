<?php include("header.php"); ?>	
	<main class="container">
		<div class="contentWrap">
			<div class="content">			
				<h1><?php echo "$ueberschrift_eins"; ?></h1>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
			</div>
			<div class="phpFunktionen">
					<h1>Verknüpfen von Variabeln</h1>
					<?php
				  		require("/inc/echo.php"); 	//vorausgesetzt
				  		include("/inc/echo2.php"); // wird ausgegeben, wenn vorhanden
				  	?>
			</div>
			<div class="arrays">
			<h1>Arrays</h1>
				<?php include("/inc/arrays.php"); ?>
				<?php include("/inc/arrays2.php"); ?>
			</div>
			<div class="kontrollstrukturen">
				<h1>Kontrollstrukturen</h1>
				<?php include("/inc/kontrollstrukturen.php") ?>
			</div>
			<div class="funktionen">
				<h1>Funktionen</h1>
				<?php //include("/inc/interneFunktionen.php") ?>
				<?php include("/inc/individuelleFunktionen.php") ?>
			</div>
			<div class="klassen">
				<h1>Klassen</h1>
				<?php include("/class/AutoController.php") ?>
			</div>
		</div>		
	</main>
<?php include("footer.php"); ?>