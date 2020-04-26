<?php 
  include 'includes/head.php'; 
  include 'includes/navigation.php'
?>

  <div class="container p-5 mt-5">
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

    <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#vote_mod"><i class="fa fa-user-plus mr-2"></i>Add Voter</button>
    <br>
    

    <div class="table-responsive">
      <table class="table table-borderless table-striped table-hover table-sm" id="dataTable">
        <thead>
          <tr>
            <th></th>
            <th>ID</th>
            <th>Name</th>
            <th>Password</th>
            <th>Level</th>
            <th>Gender</th>
            <th>Status</th>
            <th>Account</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th></th>
            <th>ID</th>
            <th>Name</th>
            <th>Password</th>
            <th>Level</th>
            <th>Gender</th>
            <th>Status</th>
            <th>Account</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>1</td>
            <td>21h952ikm</td>
            <td>Dan Brown</td>
            <td>asdfg</td>
            <td>300</td>
            <td>Male</td>
            <td>Not Voted</td>
            <td>Active</td>
            <td>
              <div class="btn-group btn-group-sm">
                <a href="" class="btn btn-sm btn-outline-primary mr-2"><span class="fa fa-pen-fancy"></span></a>
                <a href="" class="btn btn-sm btn-outline-danger"><span class="fa fa-trash-alt"></span></a>
              </div>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>31t9v2ilm</td>
            <td>San Gown</td>
            <td>asgfd</td>
            <td>400</td>
            <td>Female</td>
            <td>Not Voted</td>
            <td>Active</td>
            <td>
              <div class="btn-group btn-group-sm">
                <a href="" class="btn btn-sm btn-outline-primary mr-2"><span class="fa fa-pen-fancy"></span></a>
                <a href="" class="btn btn-sm btn-outline-danger"><span class="fa fa-trash-alt"></span></a>
              </div>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>14a4e2ijm</td>
            <td>Ian Caes</td>
            <td>gfdsa</td>
            <td>200</td>
            <td>Male</td>
            <td>Not Voted</td>
            <td>Active</td>
            <td>
              <div class="btn-group btn-group-sm">
                <a href="" class="btn btn-sm btn-outline-primary mr-2"><span class="fa fa-pen-fancy"></span></a>
                <a href="" class="btn btn-sm btn-outline-danger"><span class="fa fa-trash-alt"></span></a>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>


<?php include 'includes/voter_modal.php'; ?>
<?php include 'includes/footer.php'; ?>