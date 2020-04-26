<?php 
  require_once '../core/conn.php'; 
  include 'includes/head.php'; 
  include 'includes/navigation.php';


  // DATABASE
  $sql_candid = "SELECT * FROM candidates";
  $result_candid = $db->query($sql_candid);
  $candidQ = mysqli_fetch_assoc($result_candid);

  $sql_post = "SELECT * FROM position";
  $result_post = $db->query($sql_post);
  // DATABASE


  // DECLARATIONS
  $i = 1;

  $position = ((isset($_POST['position']) && $_POST['position'] != '')?$_POST['position']:$candidQ['position']);
  $firstname = ((isset($_POST['firstname']) && $_POST['firstname'] != '')?$_POST['firstname']:$candidQ['firstname']);
  $lastname = ((isset($_POST['lastname']) && $_POST['lastname'] != '')?$_POST['lastname']:$candidQ['lastname']);
  $level = ((isset($_POST['level']) && $_POST['level'] != '')?$_POST['level']:$candidQ['level']);
  $gender = ((isset($_POST['gender']) && $_POST['gender'] != '')?$_POST['gender']:$candidQ['gender']);
  $image = ((isset($_POST['image']) && $_POST['image'] != '')?$_POST['image']:$candidQ['image']);
  // DECLARATIONS

  // EDIT
  // if (isset($GET['candid_editmod']) && !empty($_GET['candid_editmod'])) {
    // $edit_id = $_GET['candid_editmod'];
    // $sql = "SELECT * FROM candidates WHERE id = '$edit_id'";
    // $edit_result = $db->query($sql);
    // $main_edit = mysqli_fetch_assoc($edit_result);
  // }
  // EDIT


  // PARSING DATA TO DATABASE
  if ($_POST){
    //add candidate to database
    $sql_candidI = "INSERT INTO candidates (position,firstname,lastname,level,gender,image) VALUES ('$position', '$firstname', '$lastname', '$level', '$gender', '$image')";
    // $_SESSION['success_flash'] = 'Candidate has been added';
    // if (isset($_GET['edit'])){
    //   $sql = "UPDATE brand SET brand = '$brand' WHERE  id = '$edit_id'";
    //   // $_SESSION['success_flash'] = 'Candidate has been updated';
    // }
    $db->query($sql_candidI);
    header('Location: candidates.php');
  }
  // PARSING DATA TO DATABASE
?>


  <div class="container p-5 my-5">
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
          <?php while($res = mysqli_fetch_assoc($result_candid)): ?>
          <?= $id = $res['id']; ?>
          <!-- <?php 
            // include 'includes/candidate_editmodal.php'; 
          ?> -->
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
                  <a href="#candid_editmod" data-toggle="modal" class="btn btn-sm btn-outline-primary mr-2"><span class="fa fa-pen-fancy"></span></a>
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
<?php include 'includes/candidate_editmodal.php'; ?>
<?php include 'includes/footer.php'; ?>
