<?php
    include 'Connect.php';
    $id=$_GET['id'];

    $query="DELETE FROM tasks WHERE id=$id";
    $result=mysqli_query($con, $query);

    if($result){
        header("location: ./index.php");
    }

?>
