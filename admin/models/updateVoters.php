<?php
  include '../../core/conn.php';
  
  if($_POST) {
    // get values
    $id = sanitize($_POST['id']);
    $voters_id = sanitize($_POST['voters_id']);
		$firstname = ucfirst(sanitize($_POST['firstname']));
    $lastname = ucfirst(sanitize($_POST['lastname']));
    $pwd = sanitize($_POST['pwd']);
    $level = sanitize($_POST['level']);
		$gender = ucfirst(sanitize($_POST['gender']));
    $status = ucfirst(sanitize($_POST['status']));
    $account = ucfirst(sanitize($_POST['account']));
    $zero = 0;

    $sql_DB = "UPDATE voters SET voters_id = '$voters_id', firstname = '$firstname', lastname = '$lastname', pwd = '$pwd', level = '$level', gender = '$gender', status = '$status', account = '$account', deleted = '$zero' WHERE  id = '$id'";
    $db->query($sql_DB);
    $_SESSION['success_flash'] = 'Voter has been updated';
  }
?>