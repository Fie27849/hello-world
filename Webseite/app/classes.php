<?php

class Controller{
	public function __construct() {
		// Konstruktor		
	}
}

class Model{
	private $dbconn;
	private $dbhost;
	private $dbname;
	private $dbuser;
	private $dbpass;

	public function __construct() {
		$this->dbhost = 'localhost';
		$this->dbname = 'db_StephanieKessler';
		$this->dbuser = 'root';
		$this->dbpass = '';
		try{
			$this->dbconn = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname","$this->dbuser", "$this->dbpass");
		}catch(PDOException $e){
			die('keine verbindung zur Datenbank möglich: ' . $e->getMessage());
		}			
	}

	public function getAllData() {
		$sql = $this->dbconn->prepare('SELECT * FROM anmeldungen'); // Abfrage vorbereiten
		$sql->execute(); // Abfrage ausführen
		$data = $sql->fetchAll(); // Daten werden gelesen
		return $data;
	}

	public function deleteData() {
		$id = $_POST['dataID'];
		$this->sqlExec("DELETE FROM anmeldungen WHERE id=$id");
		header("location: index.php");
		
	}

	public function insertData() {
        $anrede = $_POST['gender-select'];
        $vorname = $_POST['firstname'];
        $nachname = $_POST['lastname'];
        $adresse = $_POST['adresse'];
        $plz = $_POST['plz'];
        $ort = $_POST['ort'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $funktion =$_POST['funktion-options'];
        $ankunft = $_POST['date'];
        $nachricht = $_POST['nachricht'];

		 $sql = "INSERT INTO anmeldungen (Anrede, 
		 								Vorname,
		 								Nachname,
		 								Adresse,
		 								PLZ,
		 								Ort,
		 								EMail,
		 								Telefon,
		 								Funktion,
		 								Ankunft,
		 								Nachricht) 
		 						VALUES ('$anrede', 
		 								'$vorname',
		 								'$nachname',
		 								'$adresse',
		 								'$plz',
		 								'$ort',
		 								'$email',
		 								'$tel',
		 								'$funktion',
		 								'$ankunft',
		 								'$nachricht')";
		
		$this->sqlExec($sql);
		header("location: index.php");
		
	}

	public function editData() {
		$id = $_POST['edit'];
		$resp= $this->sqlExec("SELECT * FROM tasks WHERE id=$id");
		print_r($resp);
		$data = array_shift($resp);
		echo '<br>';
		print_r($data);












		$anrede = '';
		$vorname = '';
		$nachname = '';
		$adresse = '';
		$plz = '';
		$ort = '';
		$email = '';
		$tel = '';
		$funktion = '';
		$ankunft = '';
		$nachricht = '';	
		$id = '';	
		
		$sql = "UPDATE anmeldungen SET 
		'anrede' = $anrede,
		'vorname' = 	$vorname,
		'nachname' = $nachname,
		'adresse' = $adresse,
		'plz' = $plz,
		'ort' = $ort,
		'email' = $email,
		'tel' = $tel,
		'funktion' = $funktion,
		'ankunft' = $ankunft,
		'nachricht' = $nachricht
		WHERE id=$id";
	}



	public function sqlExec($query = ''){
			if(isset($query) && $query != ''){
				$sql = $this->dbconn->prepare($query);
				$sql->execute();
				$data = $sql->fetchAll();
				return $data;
			}
			else{
				return false;
			}			
		}
}