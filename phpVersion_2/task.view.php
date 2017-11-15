<?php include("header.php"); ?>
<?php require("/controller/TaskController.php"); ?>
<?php
	$task = new Task;	
	$tasksArray = $task->getAllData();
	echo '<h1>Task Form</h1>';
?>

<div class="taskForm">
	<form action="task.view.php" method="POST">
		<fieldset>			
			<div class="field-group">
				<label for="task">Task:</label>
				<input id="task" type="text" name="task" value=""></input>
			</div>
		</fieldset>
		<fieldset>
			<div class="field-group">
				<div class="field-group task-status">
					<label for="checkbox-task-status">Status:</label>
					<select name="task-status-options">
				        <option value="offen">offen</option>
				        <option value="erledigt">erledigt</option>
				    </select>
				</div>
			</div>				
		</fieldset>
		<fieldset>
		<br>
			<h5>Bestätigung:</h5>
			<div class="field-group">
				<button type="submit" id="submit" name="submit">Task hinzufügen</button>
				<input type="reset">
			</div>
		</fieldset>

	</form>
</div>
<br><br><br><br><br>

<?php


	if(isset($_POST['submit'])){
		echo '<h5>Neue Einträge:</h5>';
		echo 'Für Task: ' . $_POST['task'];
		echo '<br>Für Status: ' . $_POST['task-status-options'];
		// in db schreiben
		$intoTask = $_POST['task'];
		$intoStatus = $_POST['task-status-options'];
		$task->sqlExec("INSERT INTO tasks (id, title, completed) VALUES (NULL, '$intoTask', '$intoStatus')");
	}
	
	

	//----------------------------------------------------------------------
	// AUSGABE
	echo '<h1>Tasklist</h1>';
	echo '<br>';
	echo '<table class="taskTable">';
		echo '<tr>';
			echo '<th>';
				echo '<b>ID</b>';
			echo '</th>';
			echo '<th>';
				echo '<b>Task</b>';
			echo '</th>';
			echo '<th>';
				echo '<b>Status</b>';
			echo '</th>';
			echo '<th>';
				echo '<b>bearbeiten</b>';
			echo '</th>';
			echo '<th>';
				echo '<b>entfernen</b>';
			echo '</th>';
		echo '</tr>';
		
	foreach ($tasksArray as $key => $value) {
		$taskID = $value['id'];
		$taskData = $value['title'];
		$taskStatus = $value['completed'];
		echo '<tr>';
			echo '<td>';
				echo utf8_encode($taskID);
			echo '</td>';
			echo '<td>';
				echo utf8_encode($taskData);
			echo '</td>';
			echo '<td>';
				echo utf8_encode($taskStatus);
			echo '</td>';
			echo '<td>';
			?><form action="task.view.php" method="POST">
				<fieldset>
					<div class="field-group">
						<button id="edit" name="edit">bearbeiten</button>
					</div>
				</fieldset>
				</form>
		<?php	echo '</td>';
				echo '<td>'; ?>
					<form action="task.view.php" method="POST">
						<input type="hidden" name=itemid value="<?php echo $taskID; ?>">
						<button type="submit" id="btndelete" name="btndelete" value="btndelete">löschen</button>
					</form>
				<?php 
			echo '</td>'; 
		echo '</tr>';
	}		
	echo '</table>';


	// bearbeiten von Datensatz nach klicken von edit
	if(isset($_POST['edit'])){

	}

	// löschen von Datensatz durch klicken auf delete
	
	if(isset($_POST['btndelete'])){
		$id = $_POST['itemid'];
		$task->sqlExec("DELETE FROM 'tasks' WHERE id = $id");
	}



//__________________________________________________________________________________

	//echo 'getDBO<br>';
	//$task->getDBO();

	//echo '<br><br>';

	//echo 'dump $task<br>';
	//var_dump($task);

	//echo '<br><br>';

	//echo 'print_r $task<br>';
	//print_r($task->getAllData());

	//echo '<br><br>';

	//echo 'dump $task->getAllData<br>';
	//var_dump($task->getAllData());

	//echo '<br><br>';

	// Abfrage
	//echo 'print $task->sqlExec<br>';
	//print_r ($task->sqlExec('SELECT * FROM tasks'));

	//echo '<br><br>';

	// Insert
	//echo 'insert into tasks<br>';
	//$task->sqlExec('INSERT INTO tasks (id, title, completed) VALUES (NULL, Shampoo kaufen, 1)');
	
	// delet
	//echo 'delete from tasks<br>';
	//$task->sqlExec("DELETE FROM tasks WHERE id LIKE 6");

	//echo '<br><br>';

	//echo 'print $task->getAllData<br>';
	//print_r($task->getAllData());



	






 ?>
 <?php include("footer.php"); ?>