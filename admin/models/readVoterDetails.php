<?php
  include '../../core/conn.php';

  // check request
  if(isset($_POST['id']) && isset($_POST['id']) != "")
  {
      // get User ID
      $user_id = $_POST['id'];

      // Get User Details
      $query = "SELECT * FROM voters WHERE id = '$user_id'";

      $result = $db->query($query);
      $response = array();
      if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          $response = $row;
        }
      }
      else
      {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
      }
      // display JSON data
      echo json_encode($response);
  }
  else
  {
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
  }
?>