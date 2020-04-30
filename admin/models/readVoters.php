<?php
	// include Database connection file 
  include '../../core/conn.php';
  
  $i = 1;

  $data = '<div class="table-responsive">
            <table class="table table-borderless table-striped table-hover table-sm" id="dataTable">
              <thead>
                <tr>
                  <th></th>
                  <th>ID</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
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
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Password</th>
                  <th>Level</th>
                  <th>Gender</th>
                  <th>Status</th>
                  <th>Account</th>
                  <th>Action</th>
                </tr>
              </tfoot>';

  $sql_voter = "SELECT * FROM voters WHERE deleted = 0";
  $result_voter = $db->query($sql_voter);
  $data .=  '<tbody>';

  while($res = mysqli_fetch_assoc($result_voter)): 
  $id = $res['id'];
  $data .=    '<tr>
                <td>'.$i++.'</td>
                <td>'.$res['voters_id'].'</td>
                <td>'.$res['firstname'].'</</td>
                <td>'.$res['lastname'].'</</td>
                <td>'.$res['pwd'].'</td>
                <td>'.$res['level'].'</td>
                <td>'.$res['gender'].'</td>
                <td>'.$res['status'].'</td>
                <td>'.$res['account'].'</td>
                <td>
                  <div class="btn-group btn-group-sm">
                    <button onclick="getVoterDetails('.$res['id'].')" class="btn btn-sm btn-outline-primary mr-2"><span class="fa fa-pen-fancy"></span></button>
                    <button onclick="deleteVoter('.$res['id'].')" class="btn btn-sm btn-outline-danger"><span class="fa fa-trash-alt"></span></button>
                  </div>
                </td>
              </tr>';
  endwhile;
    
  $data .= '</tbody>
          </table>
        </div>';
  echo $data;
?>