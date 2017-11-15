<?php include("/../inc/vars.php"); ?>
<?php 

	class Task{
		private $dbconn;
		private $dbhost;
		private $dbname;
		private $dbuser;
		private $dbpass;

		public function __construct(){
			
			$this->dbhost = 'localhost';
			$this->dbname = 'tasklist';
			$this->dbuser = 'root';
			$this->dbpass = '';

			

			try{
				$this->dbconn = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname","$this->dbuser", "$this->dbpass"); 
			}catch(PDOException $e){
				die('keine verbindung zur Datenbank möglich: ' . $e->getMessage());
			}

		}

		// ABFRAGEN
		public function getDBO(){
			return $this->dbconn;
		}


		// Daten der gesamten Tabelle tasks ausgeben
		public function getAllData(){
			$sql = $this->dbconn->prepare('SELECT * FROM tasks'); // Abfrage vorbereiten
			$sql->execute(); // Abfrage ausführen
			$data = $sql->fetchAll(); // Daten werden gelesen
			return $data;
		}



		// mit ieser Methode kann man jedes Query ausgeben
		// -> Spalte & Tabelle können ebenfalls angepasst werden
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

	











 ?>