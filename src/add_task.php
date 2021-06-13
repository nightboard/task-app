<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Task</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
  <?php include_once "../components/navbar.php" ?>
  <h1 class="container">Add Task</h1>
  <form class="container mt-3" method="POST">
    <div class="mb-3">
      <label class="form-label">Task Name</label>
      <input type="text" class="form-control" name="task_name" autofocus="true">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Task Description</label>
      <textarea name="task_desc" class="form-control" style="height: 200px;"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</body>
</html>

<?php include_once "database.php" ?>

<?php
  if($_SERVER['REQUEST_METHOD'] === "POST") {

    $task_name = $_POST['task_name'];
    $task_desc = $_POST['task_desc'];

    $statement = $pdo->prepare("INSERT INTO tasks (name, description) VALUES (:task_name, :task_desc)");
    $statement->bindValue(":task_name", $task_name);
    $statement->bindValue(":task_desc", $task_desc);
    $statement->execute();
    header("Location: ../index.php");
  }
?>