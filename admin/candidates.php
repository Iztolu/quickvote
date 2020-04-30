<?php
  require_once '../core/conn.php';
  include 'includes/head.php';
  include 'includes/navigation.php';


  // DATABASE
  // $sql_candid = "SELECT * FROM candidates WHERE deleted = 0";
  // $result_candid = $db->query($sql_candid);

  // $sql_post = "SELECT * FROM position";
  // $result_post = $db->query($sql_post);
  // $i = 1;

?>


  <div class="container pt-5 my-5" style="position: relative">
    <h1 class="font-weight-bolder text-center">Candidates List</h1>
    <hr><br>
    <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#candid_addmod"><i class="fa fa-user-plus mr-2"></i>Add Candidate</button>
    <br>

    <div class="candidates_content"></div>
  </div>



<?php
  include 'includes/candidate_addmodal.php';
  include 'includes/candidate_editmodal.php';
  include 'includes/footer.php';
?>
