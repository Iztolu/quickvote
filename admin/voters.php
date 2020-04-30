<?php 
  require_once '../core/conn.php'; 
  include 'views/head.php'; 
  include 'views/navigation.php'
?>

  <div class="container pt-5 my-5">
    <h1 class="font-weight-bolder text-center">Voters List</h1>
    <hr><br>

    <div class="d-flex mb-3">
      <div class="pr-2"><button type="button" class="btn btn-outline-dark"><span class="fa fa-users mr-2"></span>All Voters</button></div>
      <div class="pr-2"><button type="button" class="btn btn-outline-dark"><span class="fa fa-user-friends mr-2"></span>Voted</button></div>
      <div class="pr-2"><button type="button" class="btn btn-outline-dark"><span class="fa fa-user-alt-slash mr-2"></span>Not Voted</button></div>
      <div class="pr-2 ml-auto"><button type="button" class="btn btn-outline-dark"><span class="spinner-border spinner-border-sm mr-2"></span>Generate Password</button></div><br>
      <div class="ml"><button type="button" class="btn btn-outline-dark"><span class="fa fa-key mr-2"></span>Activate All Account</button></div>
    </div>

    <div class=""><button type="button" class="btn btn-outline-dark"><span class="fa fa-download mr-2"></span>Import Data</button></div>

    <br>

    <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#voter_addmodal"><i class="fa fa-user-plus mr-2"></i>Add Voter</button>
    <br>
    
    <div class="voters_content"></div>
  </div>

<?php 
  include 'includes/voter_addmodal.php';
  include 'includes/voter_updatemodal.php';
  include 'views/footer.php'; 
?>