<?php 
  require_once '../core/conn.php'; 
  include 'includes/head.php'; 
  include 'includes/navigation.php';


  // DATABASE
  $sql_candid = "SELECT * FROM candidates";
  $result_candid = $db->query($sql_candid);

  $sql_post = "SELECT * FROM position";
  $result_post = $db->query($sql_post);
  // DATABASE


  // DECLARATIONS
  $i = 1;

  // DECLARATIONS


  // PARSING DATA TO DATABASE
  if ($_POST) {
  //   // $candidQ = mysqli_fetch_assoc($result_candid);
  //   // $id = $candidQ['id'];
    
    $position = ((isset($_POST['position']) && !empty($_POST['position']))?sanitize($_POST['position']):$candidQ['position']);
    $firstname = ((isset($_POST['firstname']) && !empty($_POST['firstname']))?sanitize($_POST['firstname']):$candidQ['firstname']);
    $lastname = ((isset($_POST['lastname']) && !empty($_POST['lastname']))?sanitize($_POST['lastname']):$candidQ['lastname']);
    $level = ((isset($_POST['level']) && !empty($_POST['level']))?sanitize($_POST['level']):$candidQ['level']);
    $gender = ((isset($_POST['gender']) && !empty($_POST['gender']))?sanitize($_POST['gender']):$candidQ['gender']);
    $image = ((isset($_POST['image']) && !empty($_POST['image']))?sanitize($_POST['image']):$candidQ['image']);
    
    //Add candidate to database
    // if (isset($_POST['add'])) {
    //   $sql_DB = "INSERT INTO candidates (position,firstname,lastname,level,gender,image) VALUES ('$position', '$firstname', '$lastname', '$level', '$gender', '$image')";
    //   $_SESSION['success_flash'] = 'Candidate has been added';
    // } 
    // if (isset($_POST['edit'])) {
    //   $sql_DB = "UPDATE candidates SET position = '$position', firstname = '$firstname', lastname = '$lastname', level = '$level', gender = '$gender', image = '$image' WHERE  id = '$id'";
    //   $_SESSION['success_flash'] = 'Candidate has been updated';
    // }

    $sql_DB = "INSERT INTO candidates (position,firstname,lastname,level,gender,image) VALUES ('$position', '$firstname', '$lastname', '$level', '$gender', '$image')";
    $_SESSION['success_flash'] = 'Candidate has been added';

    if (isset($_GET['edit'])){
      $sql_DB = "UPDATE candidates SET position = '$position', firstname = '$firstname', lastname = '$lastname', level = '$level', gender = '$gender', image = '$image' WHERE  id = '$id'";
      $_SESSION['success_flash'] = 'Candidate has been updated';
    }
    $db->query($sql_DB);
    header('Location: candidates.php');
  }
  // PARSING DATA TO DATABASE
?>


  <div class="container pt-5 my-5" style="position: relative">
    <h1 class="font-weight-bolder text-center">Candidates List</h1>
    <hr><br>
    <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#candid_mod"><i class="fa fa-user-plus mr-2"></i>Add Candidate</button>
    <br>

    <div class="table-responsive">
      <table class="table table-borderless table-striped table-hover table-sm" id="dataTable">
        <thead>
          <tr>
            <th></th>
            <th>Position</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Level</th>
            <th>Gender</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th></th>
            <th>Position</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Level</th>
            <th>Gender</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <?php 
            while($res = mysqli_fetch_assoc($result_candid)): 
            $id = $res['id'];
            include 'includes/candidate_editmodal.php';
          ?>
          
            <tr>
              <td><?= $i++; ?></td>
              <td><?= $res['position']; ?></td>
              <td><?= $res['firstname']; ?></</td>
              <td><?= $res['lastname']; ?></</td>
              <td><?= $res['level']; ?></</td>
              <td><?= $res['gender']; ?></</td>
              <td><?= $res['image']; ?></</td>
              <td>
                <div class="btn-group btn-group-sm">
                  <a href="#candid_editmod<?= $id; ?>" id="<?= $id; ?>" data-toggle="modal" class="btn btn-sm btn-outline-primary mr-2"><span class="fa fa-pen-fancy"></span></a>
                  <a href="" class="btn btn-sm btn-outline-danger"><span class="fa fa-trash-alt"></span></a>
                </div>
              </td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  </div>



<?php include 'includes/candidate_modal.php'; ?>
<?php include 'includes/footer.php'; ?>
