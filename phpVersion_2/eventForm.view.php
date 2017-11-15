<?php include("header.php"); ?>
<?php include("/controller/EventFormController.php"); ?>

	<h4>Melden Sie sich für eine besonderes Wochenende in Davos an!</h4>
	<h6>Bitte füllen Sie alle Felder aus</h6>
	<div class="eventForm">
		<form action="eventForm.view.php" method="POST">
			<fieldset>
				<legend><h5>Kontaktinformationen</h5></legend>
				<div class="field-group">
					<label for="firma"><i class="fa fa-building-o" aria-hidden="true"></i>  Firma:</label>
					<input id="firma" type="text" name="firma" value=""></input>
				</div>
				<div class="field-group">
					<label for="firstname"><i class="fa fa-user" aria-hidden="true"></i>  Vorname:</label>
					<input id="firstname" type="text" name="firstname" value=""></input>
				</div>
				<div class="field-group">
					<label for="lastname"><i class="fa fa-user" aria-hidden="true"></i>  Nachname:</label>
					<input id="lastname" type="text" name="lastname" value=""></input>
				</div>
				<div class="field-group">
					<label for="phone"><i class="fa fa-phone" aria-hidden="true"></i>  Telefon:</label>
					<input id="phone" type="tel" name="phone" value=""></input>
				</div>
				<div class="field-group">
					<label for="mail"><i class="fa fa-envelope-o" aria-hidden="true"></i>  E-Mail:</label>
					<input id="mail" type="email" name="mail" value=""></input>
				</div>
			</fieldset>
			<fieldset>
				<legend><h5>Teilnehmer</h5></legend>
				<div class="field-group">
					<label for="anzPers"><i class="fa fa-users" aria-hidden="true"></i>  Anzahl Personen:</label>
					<input id="anzPers" type="number" min="1" max="100" name="anzPers" value=""></input>
				</div>
				<div class="field-group shuttle-select-wrap">
					<label for="shuttle-select"><i class="fa fa-bus" aria-hidden="true"></i>  Möchten Sie den Shuttle-Bus benutzen?</label>
					<div id="shuttle-select">
						<input id="shuttle-select" type="radio" name="shuttle-select" value="nein">Nein, wir möchten den Shuttle-Bus nicht benutzen.</input>
						<br><input id="shuttle-select" type="radio" name="shuttle-select" value="ja">Ja, wir möchten den Shuttle-Bus benutzen.</input>
					</div>
				</div>
				<div class="field-group hotel-select-wrap">
					<label for="hotel-select"><i class="fa fa-bed" aria-hidden="true"></i>  In welchem Horel möchten SIe übernachten?</label>
					<div id="hotel-select">
						<input id="hotel-select-InterContinental-Davos" type="radio" name="hotel-select" value="InterContinental-Davos">Im InterContinental Davos.</input>
						<br><input id="hotel-select-Steinberger-Grandhotel-Belvédère" type="radio" name="hotel-select" value="Steinberger-Grandhotel-Belvédère">Im Steinberger Grandhotel Belvédère.</input>
					</div>
				</div>
			</fieldset>
			<fieldset>
				<legend><h5>Abendprogramm</h5></legend>
				<div class="field-group abendprogramm">
					<label for="checkbox-abendprogramm"><i class="fa fa-moon-o" aria-hidden="true"></i>  Bitte treffen Sie eine Wahl:</label>
					<select name="abendprogramm-options">
				        <option value="">Kein Abendprogramm</option>
				        <option value="Billardturnier">Billardturnier</option>
				        <option value="Bowlingturnier">Bowlingturnier</option>
				        <option value="Weindegustation">Weindegustation</option>
				        <option value="Asiatischer Kochkurs">Asiatischer Kochkurs</option>
				        <option value="Tankzurs für Webentwickler">Tankzurs für Webentwickler</option>
				        <option value="Ying &amp; Yang Yoga Einsteigerkurs">Ying &amp; Yang Yoga Einsteigerkurs</option>
				    </select>
				</div>
			</fieldset>
			<fieldset>
				<legend><h5>Bitte bestätigen Sie Ihre Angaben</h5></legend>
				<div class="field-group">
					<button type="submit" id="submit" name="submit">Anmeldung einrechen</button>
					<input type="reset">
				</div>
			</fieldset>
		</form>
		<?php 
			if(isset($_POST['submit'])){
				$event = new Event($_POST);
		?>
				
				<h4>Dies sind Ihre Angaben:</h4>
				<div class="eventForm-ausgabe">
				<?php 
					@$data = $event->getData();

					echo '<br><i class="fa fa-building-o" aria-hidden="true"></i>  Firma: ' . @$data['firma'];
					echo '<br><i class="fa fa-user" aria-hidden="true"></i>  Vorname: ' . @$data['firstname'];
					echo '<br><i class="fa fa-user" aria-hidden="true"></i>  Nachname: ' . @$data['lastname'];
					echo '<br><i class="fa fa-phone" aria-hidden="true"></i>  Telefon: ' . @$data['phone'];
					echo '<br><i class="fa fa-envelope-o" aria-hidden="true"></i>  E-Mail: ' . @$data['mail'];
					echo '<br><i class="fa fa-users" aria-hidden="true"></i>  Anzahl Personen: ' . @$data['anzPers'];
					echo '<br><i class="fa fa-bus" aria-hidden="true"></i>  Shuttle-Bus: ' . @$data['shuttle-select'];
					echo '<br><i class="fa fa-bed" aria-hidden="true"></i>  Hotel: ' . @$data['hotel-select'];
					echo '<br><i class="fa fa-moon-o" aria-hidden="true"></i>  Abendprogramm: ' . @$data['abendprogramm-options'];
				 ?>
				</div>
			<?php } ?>
	</div>







<?php include("footer.php"); ?>