<!-- The Modal -->
<div class="modal fade" id="user_mod">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title w-100 text-center">Add User</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="/action_page.php">
            <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>
            
            <div class="form-group">
              <label for="pword">Password:</label>
              <input type="password" class="form-control" id="pword" name="password">
            </div>

            <div class="form-group">
              <label for="fname">Full Name:</label>
              <input type="text" class="form-control" id="fname" name="fullname">
            </div>
            
            <div class="form-group">
              <label>Permissions:</label>
              <select name="level" class="custom-select">
                <option selected></option>
                <option value="admin">admin</option>
                <option value="editor">editor</option>
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