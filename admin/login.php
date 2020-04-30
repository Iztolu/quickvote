<?php include 'views/head.php'; ?>


      <h1 class="font-weight-bold text-center p-5">Quick Vote - Admin Login</h1>

      <div class="w-25 border rounded-lg shadow-lg my-5 p-5 mx-auto">
        <h3 class="font-weight-bold text-center mb-4">Admin Login<hr></h3>
        <form action="/action_page.php">
          <div class="form-group">
            <label for="email">Username or Email:</label>
            <input type="name" class="form-control" id="email" required>
          </div>

          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" required>
          </div>

          <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
            <label class="custom-control-label" for="customCheck">Remember Me</label>
          </div>

          <button type="submit" class="btn btn-block btn-primary">Login</button>
        </form>
      </div>

<?php include 'views/footer.php'; ?>