<?php include_once "database.php" ?>
<?php
	if($_SERVER["REQUEST_METHOD"] == "GET") {
		$task_id = $_GET["task_id"];
		$statement = $pdo->prepare("DELETE FROM tasks WHERE id = :task_id");
		$statement->bindValue(":task_id", $task_id);
		$statement->execute();
	}

	header("Location: ../index.php")
?>