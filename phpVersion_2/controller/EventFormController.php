<?php include("/../inc/vars.php"); ?>
<?php include("/../class/EventFormClass.php");?>

<?php 
	

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