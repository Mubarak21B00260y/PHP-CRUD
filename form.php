<?php
      //   include("function.php");
  include("connect.php");
   include("edit.php");
  include("create.php");
  include("update.php");
 include("delete.php");


        $editTask = editTaskById($con);
        $createTask = createTask($con);
      //  $deleteTask =deleteTaskById($con);

        if(isset($_GET['edit-task'])) {
            $createTask = updateTaskById($con);

        }

if(isset($_GET['delete-task'])){
$deleteTask=deleteTaskById($con);

}



?>
  <form method="post">
    <p class="text-danger">
        <?php
         echo $createTask['success']??'';
         echo $createTask['taskMsg']??'';
         ?>
    </p>

    <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Enter Something..." name="task" value="<?php echo $editTask['task']??''; ?>">
      <button type="submit" class="btn btn-primary" name="<?php echo count($editTask)?'update':'add'; ?>"><?php echo count($editTask)?'update':'add'; ?></button>

      
    </div>

  </form>
