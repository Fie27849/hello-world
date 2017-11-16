<?php
require("classes.php");
if(isset($_GET)) {
	echo '<br>';
    print_r($_GET);
}

if(isset($_POST)) {
	echo '<br>';
    print_r($_POST);
}

?>