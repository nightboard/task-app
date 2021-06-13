<?php foreach ($tasks as $task) : ?>
	<div class="card m-2" style="width: 18rem;">
	  <div class="card-body">
	    <h5 class="card-title"> <?php echo $task["name"] ?> </h5>
	    <p class="card-text"> <?php echo $task["description"] ?> </p>
	    <a href="src/update_task.php?task_id=<?php echo $task["id"] ?>" class="btn btn-primary">Update</a>
	    <a href="src/delete_task.php?task_id=<?php echo $task["id"] ?>" class="btn btn-danger">Delete</a>
	  </div>
	</div>
<?php endforeach; ?>