<!-- The Modal -->
<div class="modal fade" id="candid_editmod">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title w-100 text-center">Edit Candidate</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="candidates.php" method="POST">
            <div class="form-group">
              <label>Position:</label>
              <select name="position" class="custom-select">
                <option value="<?= $position; ?>"><?= $position; ?></option>
                <?php while($cand = mysqli_fetch_assoc($result_post)): ?>
                  <option value="<?= $cand['post']; ?>"><?= $cand['post'] ?></option>
                <?php endwhile; ?>
              </select>
            </div>

            <div class="form-group">
              <label for="firstname">First Name:</label>
              <input type="text" class="form-control" id="firstname" name="firstname" value="<?= $firstname; ?>">
            </div>

            <div class="form-group">
              <label for="lastname">Last Name:</label>
              <input type="text" class="form-control" id="lastname" name="lastname" value="<?= $lastname; ?>">
            </div>

            <div class="form-group">
              <label>Level:</label>
              <select name="level" class="custom-select">
                <option value=""<?= (($level == '')?' selected':''); ?>></option>
                <option value="100"<?= (($level == '100')?' selected':''); ?>>100</option>
                <option value="200"<?= (($level == '200')?' selected':''); ?>>200</option>
                <option value="300"<?= (($level == '300')?' selected':''); ?>>300</option>
                <option value="400"<?= (($level == '400')?' selected':''); ?>>400</option>
              </select>
            </div>

            <div class="form-group">
              <label>Gender:</label>
              <select name="gender" class="custom-select">
                <option value="<?= $gender; ?>" selected><?= $gender; ?></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>

            <p>Custom file:</p>
            <div class="custom-file mb-3">
              <input type="file" class="custom-file-input" id="customFile" name="image">
              <label class="custom-file-label" for="customFile">Upload Image</label>
            </div>

            <button type="submit" class="btn btn-block btn-primary">Submit</button>
          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>