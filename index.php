<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Task App</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
	<?php include_once "src/database_schema.php" ?>
	<?php include_once "components/navbar.php" ?>
	<?php include_once "src/get_tasks.php" ?>

	<h1 class="container">All Tasks</h1>
	<div class="container d-flex">
		<?php include_once "src/show_tasks.php" ?>
	</div>
</body>
</html>