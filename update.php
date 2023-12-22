<?php
       $id=$_POST['id'];
       $title=$_POST['title'];

    include 'connect.php';
    $query="UPDATE tasks SET title='$title' WHERE id=$id";
    $result=mysqli_query($con, $query);

    if($result){
        header("location: ./index.php");

    }

?>
