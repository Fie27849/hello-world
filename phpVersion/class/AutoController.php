
<?php include("/../class/autoClass.php");?>

<?php 


	// Beispielklasse
	// class Cars{

	// 	// Variabeln
	// 	public $var = 'ein Standartwert';

	// 	//Methoden
	// 	public function displayVar(){
	// 		echo $this->var;
	// 	}

	// }


	// Instanzen erstellen
	$auto_1 = new Auto('Ford', 'Blau', 'Cabriolet', 2007);
	$auto_2 = new Auto('VW', 'Militärgrün', 'Bus', 1983);
	$auto_3 = new Auto('Peugeot', 'Grünblau', 'Kleinwagen', 2005);
	$auto_4 = new Auto('Jaguar', 'Schwarz', 'Limusine', 2011);

	$auto_5 = new Auto('Saab', 'Silber', 'Limusiene', 1999);
	$auto_6 = new Auto('Dodge', 'Weiss', 'SUV', 2017);


	// Aufrufen der Instanzen
	echo "<h4>Aufrufen der Instanzen</h4>";
	echo '<br>';
	print_r($auto_1);
	echo '<br>';
	print_r($auto_2);
	echo '<br>';
	print_r($auto_3);
	echo '<br>';
	print_r($auto_4);

	// Instanzen manipulieren
	echo '<br>';
	$auto_1->setFarbe('Pink');
	echo '<br>';
	$auto_2->setFarbe('Orange');




	// Kontrollaufrufe der Instanzen
	echo "<h4>Kontrollaufrufe der Instanzen</h4>";
	echo '<br>';
	print_r($auto_1);
	echo '<br>';
	print_r($auto_2);
	echo '<br>';
	print_r($auto_3);
	echo '<br>';
	print_r($auto_4);



	// Ausgaben mit get Methoden
	echo "<h4>Ausgaben mit get Methoden</h4>";
	
	//$ausgabe = $auto_1->getFarbe;
	echo "<br>Auto_1:";
	echo '<br>';
	echo $auto_1->getMarke();
	echo '<br>';
	echo $auto_1->getFarbe();
	echo '<br>';
	echo $auto_1->getBauart();
	echo '<br>';
	echo $auto_1->getJahrgang();
	echo '<br>';
	echo $auto_1->getBetankungen();
	echo '<br>';
	echo $auto_1->getLiter();
	echo '<br>';
	echo $auto_1->getVerbrauch();
	echo '<br>';
	echo $auto_1->getKilometer();



	// als Liste
	echo "<br><br>Auto_2:";
	echo '<ul>';
		echo '<li>Marke: ' . $auto_2->getMarke() . '</li>';
		echo '<li>Farbe: ' . $auto_2->getFarbe() . '</li>';
		echo '<li>Bauart: ' . $auto_2->getBauart() . '</li>';
		echo '<li>Jahrgang: ' . $auto_2->getJahrgang() . '</li>';
		echo '<li>Betankungen: ' . $auto_2->getBetankungen() . '</li>';
		echo '<li>Füllstand: ' . $auto_2->getLiter() . '</li>';
		echo '<li>Verbrauch: ' . $auto_2->getVerbrauch() . '</li>';
		echo '<li>Kilometer: ' . $auto_2->getKilometer() . '</li>';
	echo '</ul>';


	//als Satz
	echo '<br>';
	echo "Auto_3:";
	echo '<br>';
	echo 'Hallo, ich bin ein ' . $auto_3->getFarbe() . "er " . $auto_3->getMarke() . ". Ich bin von " . $auto_3->getJahrgang() . " und ein " . $auto_3->getBauart() . ".";


	// als Liste mit foreach schlaufe
	echo "<br><br>Auto_4:";
	echo '<ol>';
	foreach ($auto_4 as $prop) {
		echo '<li>';
		echo $prop;
		echo '</li>';
	}
	echo '</ol>';
	

	// ab Auto_5 mit Betankungen und Liter
	echo "<h4>Auto_5 mit Betankungen und Liter</h4>";
	echo "<br>Auto_5:";
	echo '<ol>';
	foreach ($auto_5 as $prop) {
		echo '<li>';
		echo $prop;
		echo '</li>';
	}
	echo '</ol>';

	// erstes betanken & Ausgabe
	echo "<h6>Erstes betanken & Ausgabe</h6>";
	$auto_5->betanken(45);
	echo '<br>1. Ausgabe<br>Betankungen: ' . $auto_5->getBetankungen() . '<br>' . 'Füllstand: ' . $auto_5->getLiter() . ' Liter';

	// weitere Betankungen & ausgabe
	echo "<h6>Weitere Betankungen & Ausgabe</h6>";
	$auto_5->betanken(0);
	$auto_5->betanken(0);
	$auto_5->betanken(18);
	$auto_5->betanken(5);
	echo '<br>2. Ausgabe<br>Betankungen: ' . $auto_5->getBetankungen() . '<br>' . 'Füllstand: ' . $auto_5->getLiter() . ' Liter';


	// Verbrauch berechnen und von Füllstand abziehen
	echo "<h6>Verbrauch berechnen und von Füllstand abziehen</h6>";
	$auto_5->fahren(35);
	echo '<br>3. Ausgabe<br>Betankungen: ' . $auto_5->getBetankungen() . '<br>' . 'Füllstand: ' . $auto_5->getLiter() . ' Liter';


	// ab Auto_6
	echo "<h4>Die Geschichte von Auto_6:</h4>";
	echo "Alles ausgeben:";
	echo '<ul>';
		echo '<li>Marke: ' . $auto_6->getMarke() . '</li>';
		echo '<li>Farbe: ' . $auto_6->getFarbe() . '</li>';
		echo '<li>Bauart: ' . $auto_6->getBauart() . '</li>';
		echo '<li>Jahrgang: ' . $auto_6->getJahrgang() . '</li>';
		echo '<li>Betankungen: ' . $auto_6->getBetankungen() . '</li>';
		echo '<li>Füllstand: ' . $auto_6->getLiter() . 'Liter</li>';
		echo '<li>Verbrauch: ' . $auto_6->getVerbrauch() . 'Liter/km</li>';
		echo '<li>Kilometer: ' . $auto_6->getKilometer() . '</li>';
	echo '</ul>';
	$auto_6->fahren(40);
	echo '<br>Nach 40 gefahrenen Kilometern hat es noch ' . $auto_6->getLiter() . ' Liter im Tank.';
	$auto_6->fahren(138);
	echo '<br>Nach 138 weiteren Kilometern hat es noch ' . $auto_6->getLiter() . ' Liter im Tank.';
	$auto_6->betanken(25);
	echo '<br>Es wurden 25 Liter getankt.';
	echo '<br>Wir waren ' .$auto_6->getBetankungen() . ' Mal tanken.';
	echo '<br>Nun hat es  ' . $auto_6->getLiter() . ' Liter im Tank.';
	$auto_6->restStrecke();
	echo '<br>Mit dem restlichen Tankinhalt kann man noch ' . $auto_6->getRestStrecke() . ' Kilometer fahren.';



	// Ausgabe als Tabelle
	echo "<h4>Alle Autos in einer Tabelle ausgeben:</h4>";
	echo '<table class="autoTabelle">';
		echo '<tr>';
			echo '<th>';
				echo '<h5>Marke</h5>';
			echo '</th>';
			echo '<th>';
				echo '<h5>Farbe</h5>';
			echo '</th>';
			echo '<th>';
				echo '<h5>Bauart</h5>';
			echo '</th>';
			echo '<th>';
				echo '<h5>Jahrgang</h5>';
			echo '</th>';
			echo '<th>';
				echo '<h5>Betankungen</h5>';
			echo '</th>';
			echo '<th>';
				echo '<h5>Füllstand</h5>';
			echo '</th>';
			echo '<th>';
				echo '<h5>Verbrauch</h5>';
			echo '</th>';
			echo '<th>';
				echo '<h5>Kilometer</h5>';
			echo '</th>';
		echo '</tr>';
			foreach ($auto_1 as $param) {
				echo '<td>';
					echo $param;
				echo '</td>';
			}
		echo '<tr>';

		

	echo '</table>';




 ?>