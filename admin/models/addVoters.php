<?php
  include '../../core/conn.php';
  
  if($_POST) {
		// get values 
		$voters_id = sanitize($_POST['voters_id']);
		$firstname = ucfirst(sanitize($_POST['firstname']));
    $lastname = ucfirst(sanitize($_POST['lastname']));
    $pwd = sanitize($_POST['pwd']);
    $level = sanitize($_POST['level']);
		$gender = ucfirst(sanitize($_POST['gender']));
    $status = ucfirst(sanitize($_POST['status']));
    $account = ucfirst(sanitize($_POST['account']));
    $zero = 0;

    $sql_DB = "INSERT INTO voters (voters_id,firstname,lastname,pwd,level,gender,status,account,deleted) VALUES ('$voters_id', '$firstname', '$lastname', '$pwd', '$level', '$gender', '$status', '$account', '$zero')";
    $db->query($sql_DB);
    echo $_SESSION['success_flash'] = 'Voter has been added';
  }
?>