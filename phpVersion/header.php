

<?php
	include("/inc/vars.php"); 

	$link_to_tome = "index.php";
	$link_to_spamView = "spam.view.php";
	$ueberschrift_eins = "Meine Überschrift";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Meine Webseite</title>
	<meta charset="UTF-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<header class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
			    <div class="navbar-header">
			    	<a class="navbar-brand" href="$link_to_tome">Meine Webseite - M307</a>
			    </div>
			    <ul class="nav navbar-nav">
				    <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
				    <li><a href="spam.view.php"></i>Spam View</a></li>
			    </ul>
			</div>
		</nav>
	</header>
