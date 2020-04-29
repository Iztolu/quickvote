<?php
  include '../../core/conn.php';
  
  if($_POST) {
    // get values
    $id = sanitize($_POST['id']);
		$position = sanitize($_POST['position']);
		$firstname = ucfirst(sanitize($_POST['firstname']));
    $lastname = ucfirst(sanitize($_POST['lastname']));
    $level = sanitize($_POST['level']);
		$gender = sanitize($_POST['gender']);
    $image = sanitize($_POST['image']);
    $zero = 0;

    $sql_DB = "UPDATE candidates SET position = '$position', firstname = '$firstname', lastname = '$lastname', level = '$level', gender = '$gender', image = '$image', deleted= '$zero' WHERE  id = '$id'";
    $db->query($sql_DB);
    $_SESSION['success_flash'] = 'Candidate has been added';
  }
?>