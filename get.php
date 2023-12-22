<?php
/* Fetch data */
function getTask($con)
{

  //  global $con;
    $data['data'] = [];

  $query  = "SELECT id, task ";
  $query .= "FROM users ORDER BY id DESC";

    $result = $con->query($query);

  if ($result) {

    if($result->num_rows> 0) {

      $data['data'] = $result->fetch_all(MYSQLI_ASSOC);

    }

  }

  return $data;

}

?>
