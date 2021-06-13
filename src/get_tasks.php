<?php include_once "database.php" ?>

<?php
	$statement = $pdo->prepare("SELECT * FROM tasks");
	$statement->execute();
	$tasks = $statement->fetchAll();
?>