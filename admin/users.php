<?php 
  include 'includes/head.php'; 
  include 'includes/navigation.php'
?>

  <div class="container p-5 my-5">
    <h1 class="font-weight-bolder text-center">Users List</h1>
    <hr><br>
    <button type="button" class="btn btn-block btn-success" data-toggle="modal" data-target="#user_mod"><i class="fa fa-user-plus mr-2"></i>Add User</button>
    <br>

    <div class="table-responsive">
      <table class="table table-borderless table-striped table-hover table-sm" id="dataTable">
        <thead>
          <tr>
            <th></th>
            <th>Username</th>
            <th>Password</th>
            <th>Name</th>
            <th>Join Date</th>
            <th>Last Login</th>
            <th>Permissions</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th></th>
            <th>Username</th>
            <th>Password</th>
            <th>Name</th>
            <th>Join Date</th>
            <th>Last Login</th>
            <th>Permissions</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td>1</td>
            <td>President</td>
            <td>John</td>
            <td>Doe</td>
            <td>400</td>
            <td>Male</td>
            <td class="text-center">-</td>
            <td>
              <div class="btn-group btn-group-sm">
                <a href="" class="btn btn-sm btn-outline-primary mr-2"><span class="fa fa-pen-fancy"></span></a>
                <a href="" class="btn btn-sm btn-outline-danger"><span class="fa fa-trash-alt"></span></a>
              </div>
            </td>
          </tr>
          <tr>
            <td>2</td>
            <td>Vice-President</td>
            <td>Mary</td>
            <td>Moe</td>
            <td>400</td>
            <td>Female</td>
            <td class="text-center">-</td>
            <td>
              <div class="btn-group btn-group-sm">
                <a href="" class="btn btn-sm btn-outline-primary mr-2"><span class="fa fa-pen-fancy"></span></a>
                <a href="" class="btn btn-sm btn-outline-danger"><span class="fa fa-trash-alt"></span></a>
              </div>
            </td>
          </tr>
          <tr>
            <td>3</td>
            <td>Secretary</td>
            <td>July</td>
            <td>Dooley</td>
            <td>400</td>
            <td>Female</td>
            <td class="text-center">-</td>
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




<?php include 'includes/user_modal.php'; ?>
<?php include 'includes/footer.php'; ?>