<?php
  include '../../core/conn.php';
  
  $errorMSG = "";


  /* Voters ID */
  if (empty($_POST["voters_id"])) {
    $errorMSG = "<li>ID is required</<li>";
  } else {
    $voters_id = $_POST["voters_id"];
  }

  /* Firstname */
  if (empty($_POST["firstname"])) {
    $errorMSG = "<li>Firstname is required</<li>";
  } else {
    $firstname = $_POST["firstname"];
  }

  /* Lastname */
  if (empty($_POST["lastname"])) {
    $errorMSG = "<li>Lastname is required</<li>";
  } else {
    $lastname = $_POST["lastname"];
  }

  /* Password */
  if (empty($_POST["pwd"])) {
    $errorMSG = "<li>password is required</<li>";
  } else {
    $pwd = $_POST["pwd"];
  }
  
  /* Level */
  if (empty($_POST["level"])) {
    $errorMSG = "<li>Level is required</<li>";
  } else {
    $level = $_POST["level"];
  }

  /* Gender */
  if (empty($_POST["gender"])) {
    $errorMSG = "<li>Gender is required</<li>";
  } else {
    $gender = $_POST["gender"];
  }

  /* Status */
  if (empty($_POST["status"])) {
    $errorMSG = "<li>Status is required</<li>";
  } else {
    $status = $_POST["status"];
  }

  /* Account */
  if (empty($_POST["account"])) {
    $errorMSG = "<li>Account is required</<li>";
  } else {
    $account = $_POST["account"];
  }

  if(empty($errorMSG) && $_POST){
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