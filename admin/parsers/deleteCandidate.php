<?php
  include '../../core/conn.php';

  if(isset($_POST['id']) && isset($_POST['id']) != "") {
    // get user id
    $delete_id = sanitize($_POST['id']);
    $query = "UPDATE candidates SET deleted = 1 WHERE id = '$delete_id'";
    $db->query($query);
  }
?>