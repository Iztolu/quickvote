<?php
  include '../../core/conn.php';
  
  if($_POST) {
		// get values 
		$position = ucfirst(sanitize($_POST['position']));
		$firstname = ucfirst(sanitize($_POST['firstname']));
    $lastname = ucfirst(sanitize($_POST['lastname']));
    $level = sanitize($_POST['level']);
		$gender = ucfirst(sanitize($_POST['gender']));
    $image = sanitize($_POST['image']);
    $zero = 0;

    $sql_DB = "INSERT INTO candidates (position,firstname,lastname,level,gender,image,deleted) VALUES ('$position', '$firstname', '$lastname', '$level', '$gender', '$image', '$zero')";
    $db->query($sql_DB);
    echo $_SESSION['success_flash'] = 'Candidate has been added';
  }
?>