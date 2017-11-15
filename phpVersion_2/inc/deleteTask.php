
<?php require("/../controller/TaskController.php"); ?>
<?php






if(isset($_POST['btndelete'])){
	$id=$_POST['itemid'];
	$task->sqlExec("DELETE FROM 'tasks' WHERE id IS '$itemid'");
}





?>