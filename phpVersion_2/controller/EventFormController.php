<?php include("/../inc/vars.php"); ?>

<?php 
	

	class Event{

		public $data;


		// Konstruktoren
		public function __construct($data){
			$this->data = $data;
		}

		// set Methode
		public function setData($data){
			$this->data = $data;
		}
		

		// get Methode
		public function getData(){
			return $this->data;
		}


		// weitere Methoden


	}

	function isEmpty($test){
		foreach ($test as $key => $value) {
			if(
			isset($value) &&
			!empty($value) &&
			$value !=''
			){
				echo '<br>' . $key . ' ist ' . $value;			
			}else{
				echo '<br>Das Formular wurde nicht vollständig ausgefüllt.';
				echo '<br>Für ' . $key . ' wurde nichts angegeben.';
				break;
			}			
		}
	}







 ?>