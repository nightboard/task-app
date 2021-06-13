<?php include_once "database.php" ?>

<?php
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
		$task_id = $_GET["task_id"];
		$statement = $pdo->prepare("SELECT * FROM tasks WHERE id = :task_id");
		$statement->bindValue(":task_id", $task_id);
		$statement->execute();

		$task = $statement->fetchAll()[0];
		$task_id = $task["id"];
		$task_name = $task["name"];
		$task_desc = $task["description"];
	}
?>