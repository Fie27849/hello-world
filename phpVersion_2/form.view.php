<?php include("header.php"); ?>
<?php include("/controller/FormController.php"); ?>


	<?php
		//Mein Formular
		// For="" sucht nach der entsprechenden id="" und bindet sich daran
	?>
	<div class="form">
	<h4>Mein Formular</h4>
	<?php

	print_r($_POST);
	// gibt die daten aus dem eingereichten Formular als array aus
	// diese INFOS können in Inspector auch eingesehen werden
	// -> untersuchen -> Network -> viewfile -> headers -> form Data
	?>

		<div class="begruessung">
			<h4>Hallo <?php echo @$_POST['firstname']; //durch das @ wird beim ersten Aufruf keine Fehlermelsung ausgegeben (nur im Beispiel sinnvoll) ?>, wilkommen!</h4>
		</div>

		<?php 

			// prüft ob folgende Angaben vorhanden sind und etwas eingegeben wurde
			//$_POST['firstname']
			//$_POST['lastname']
			//$_POST['favColor']

			isEmpty(@$_POST['firstname']);
			isEmpty(@$_POST['lastname']);
			isEmpty(@$_POST['favColor']);
			isEmpty(@$_POST['workplace']);






		 ?>

		<form action="form.view.php" method="POST">
			<fieldset>
				<legend><h3>Informationen zur Person:</h3></legend>

				<div class="fieldgroup">
					<input id="gender-male" type="radio" name="gender-male" value="male" checked> Male</input>
				<input id="gender-female" type="radio" name="gender-female" value="female"> Female</input>
				<input id="gender-other" type="radio" name="gender-other" value="other"> Other</input>
				</div>
				
				
				<div class="fieldgroup">
					<label for="firstname">Vorname:</label>
				<input type="text" id="firstname" placeholder="Vorname" name="firstname" value="Stephanie" required></input>
				</div>
				

				<div class="fieldgroup">
					<label for="lastname">Nachname:</label>
				<input value="Kessler" type="text" id="lastname" placeholder="Nachname" name="lastname" required></input>
				</div>
				
	
				<div class="fieldgroup">
					<label for="age-select">Alter:</label>
				<select name="age-select">
					<option value="child">Ich bin 0 - 12 Jahre alt</option>
					<option value="teenager">Ich bin 13 - 17 Jahre alt</option>
					<option value="adult">Ich bin 18 - 64 Jahre alt</option>
					<option value="senior">Ich bin älter als 64</option>
				</select>
				</div>
				
			</fieldset>
			<fieldset>				
				<legend><h3>Informationen zum Beruf:</h3></legend>

				<div class="fieldgroup">
					<label for="work">Beruf:</label>
				<input value="Informatikerin" type="text" id="work" name="work" placeholder="Beruf"></input>
				</div>
				

				<div class="fieldgroup">
					<label for="workplace">Arbeitgeber:</label>
				<input value="Casasoft AG" type="text" id="workplace" name="workplace" placeholder="Arbeitgeber"></input>
				</div>
				
			</fieldset>
			<fieldset>				
				<legend><h3>Anmeldedaten:</h3></legend>

				<div class="fieldgroup">
					<label for="username">Benutzername:</label>
				<input type="text" id="username" name="username" placeholder="Benutzername"></input>
				</div>
				

				<div class="fieldgroup">
					<label for="password">Passwort:</label>
				<input type="password" id="password" name="password" placeholder="Passwort"></input>
				</div>
				

				<div class="fieldgroup">
					<label for="mail">E-Mail Adresse:</label>
				<input type="email" id="mail" name="mail" placeholder="E-Mail Adresse"></input>
				</div>
				
			</fieldset>
			<fieldset>
				<legend><h3>Weitere Angaben:</h3></legend>

				<div class="fieldgroup">
					<label for="favColor">Lieblingsfarbe:</label>
				<input type="color" id="favColor" name="favColor" placeholder=""></input>
				</div>
				

				<div class="fieldgroup">
					<label for="bday">Geburtstag:</label>
				<input type="date" id="bday" name="bday" placeholder=""></input>
				</div>
				

				<div class="fieldgroup">
					<label for="webadresse">Deine webseite:</label>
					<input type="url" id="webadresse" name="webadresse" placeholder="www.meineWebseite.com"></input>
				</div>
				

				<div class="fieldgroup">
					<label for="favanimal">Lieblingstier:</label>
				 	<input list="favanimal">
					<datalist id="favanimal" name="favanimal">
						<option value="Katze">
						<option value="Hund">
						<option value="Hase">
						<option value="Pinguin">
						<option value="Pferd">
					</datalist>
				</div>
				 
			</fieldset>
			<button type="submit" name="submitted">Anmeldung einrechen</button>
			<input type="reset">
			
			<input type="button" onclick="alert('Hello World!')" value="Click Me!">

		</form>
	</div>





 <?php include("footer.php"); ?>