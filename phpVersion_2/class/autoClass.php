<?php 


	class Auto{

		// Variabeln
		public $marke;
		public $farbe;
		public $bauart;
		public $jahrgang;
		public $betankungen;
		public $liter;
		public $verbrauch;
		public $kilometer;
		public $restStrecke;


		// Konstruktoren
		public function __construct($marke, $farbe, $bauart, $jahrgang){
			$this->marke = $marke;
			$this->farbe = $farbe;
			$this->bauart = $bauart;
			$this->jahrgang = $jahrgang;
			$this->betankungen = 1;
			$this->liter = 85;
			$this->verbrauch = 0.08;
			$this->kilometer = 0;
			$this->restStrecke;
		}
		


		// set Methoden
		public function setMarke($marke){
			$this->marke = $marke;
		}

		public function setFarbe($farbe){
			$this->farbe = $farbe;
		}

		public function setBauart($bauart){
			$this->bauart = $bauart;
		}

		public function setJahrgang($jahrgang){
			$this->jahrgang = $jahrgang;
		}

		public function setBetankungen(){
			$this->betankungen++;
		}

		public function setLiter($literPlus){
			$this->liter = $this->liter + $literPlus;
		}

		public function setVerbrauch($verbrauch){
			$this->verbrauch = $verbrauch;;
		}

		public function setKilometer($kilometer){
			$this->kilometer = $kilometer;
		}

		public function setRestStrecke($restStrecke){
			$this->restStrecke = $restStrecke;
		}


		// get Methoden
		public function getMarke(){
			return $this->marke;
		}

		public function getFarbe(){
			return $this->farbe;
		}

		public function getBauart(){
			return $this->bauart;
		}

		public function getJahrgang(){
			return $this->jahrgang;
		}

		public function getBetankungen(){
			return $this->betankungen;
		}

		public function getLiter(){
			return $this->liter;
		}

		public function getVerbrauch(){
			return $this->verbrauch;
		}

		public function getKilometer(){
			return $this->kilometer;
		}

		public function getRestStrecke(){
			return $this->restStrecke;
		}

		



		// weitere Methoden
		public function displayAuto(){
			$this->marke;
			$this->farbe;
			$this->bauart;
			$this->jahrgang;
			$this->betankungen;
			$this->liter;
			$this->verbrauch;
			$this->kilometer;
		}

		public function betanken($literPlus){
			$this->setBetankungen();
			$this->setLiter($literPlus);
		}

		public function fahren($anzKM){
			$verbrauchte = $this->verbrauch*$anzKM;
			$this->liter = $this->liter - $verbrauchte;
		}

		public function restStrecke(){			
			$this->restStrecke = $this->liter / $this->verbrauch;
		}
		




	}


 ?>