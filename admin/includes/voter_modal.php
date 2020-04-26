<!-- The Modal -->
<div class="modal fade" id="vote_mod">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title w-100 text-center">Add Candidate</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="/action_page.php">
            <div class="form-group">
              <label for="ID">ID:</label>
              <input type="text" class="form-control" id="ID" name="voters_id">
            </div>

            <div class="form-group">
              <label for="fname">Full Name:</label>
              <input type="text" class="form-control" id="fname" name="fullname">
            </div>

            <div class="form-group">
              <label for="pword">Password:</label>
              <input type="password" class="form-control" id="pword" name="pwd">
            </div>

            <div class="form-group">
              <label>Level:</label>
              <select name="level" class="custom-select">
                <option selected></option>
                <option value="one00">100</option>
                <option value="two00">200</option>
                <option value="thre00">300</option>
                <option value="four00">400</option>
              </select>
            </div>

            <div class="form-group">
              <label>Gender:</label>
              <select name="account" class="custom-select">
                <option selected></option>
                <option value="male">Active</option>
                <option value="female">Inactive</option>
              </select>
            </div>

            <div class="form-group">
              <label>Account:</label>
              <select name="gender" class="custom-select">
                <option selected></option>
                <option value="male">Male</option>
                <option value="female">Female</option>
              </select>
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