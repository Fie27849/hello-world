/*	app.js
	Autor: Name Vorname
	Datum: 16.11.2017 */


/* Beim Laden des Dokuments */
$(document).ready(function() {
	console.clear();
	console.warn('App gestartet...');
});


/* Eine benutzerdefinierte Funktion*/
function meineFunktion(argument) {
	console.log('Funktion aufgerufen...');
}


/* Einfache AJAX Anfrage */
function getAjaxData(argument) {
	var check = (argument) ? true : false;

	if(check) {
		$.ajax({
			type: 'GET', // POST, DELETE, PUT
			dataType:"JSON",
			url: 'ajax.php',
			data: { argument:argument },
			beforeSend:function(){
				// Vor dem Senden ausführen
			},
			success:function(data){
				console.log(data);
				// Mit empfangenen Daten weitermachen
			},
			error:function(){
				// In einem Fehlerfall ausgeführt
			},
			complete:function(){
				// In jedem Fall ausgeführt
			}
		});
	}

}