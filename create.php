<?php

$title=$_POST['title'];

// echo "Name Is".$name ."Phone Number:".$phone;


include 'connect.php';
$query="INSERT INTO tasks(title)VALUES('$title')";

$result=mysqli_query($con, $query);

if($result){
    header("location: ./index.php");
}
else{
    // echo "Sorry We Can't Connect";
}

?>
