<?php
	// include Database connection file 
  include '../../core/conn.php';
  
  $i = 1;

  $data = '<div class="table-responsive">
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
              </tfoot>';

  $sql_candid = "SELECT * FROM candidates WHERE deleted = 0";
  $result_candid = $db->query($sql_candid);
  $data .=  '<tbody>';
  while($res = mysqli_fetch_assoc($result_candid)): 
  $id = $res['id'];
  $data .=    '<tr>
                <td>'.$i++.'</td>
                <td>'.$res['position'].'</td>
                <td>'.$res['firstname'].'</</td>
                <td>'.$res['lastname'].'</</td>
                <td>'.$res['level'].'</td>
                <td>'.$res['gender'].'</td>
                <td>'.$res['image'].'</td>
                <td>
                  <div class="btn-group btn-group-sm">
                    <button onclick="getCandidateDetails('.$res['id'].')" class="btn btn-sm btn-outline-primary mr-2"><span class="fa fa-pen-fancy"></span></button>
                    <button onclick="deleteCandidate('.$res['id'].')" class="btn btn-sm btn-outline-danger"><span class="fa fa-trash-alt"></span></button>
                  </div>
                </td>
              </tr>';
  endwhile;
  $data .= '</tbody>
          </table>
        </div>';
  echo $data;
?>