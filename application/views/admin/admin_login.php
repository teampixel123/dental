<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="icon" href="assets/images/fevicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/signin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <form class="form-signin" action="<?php echo base_url(); ?>Admin/check_login" method="post">
      <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <?php if($this->session->flashdata('login')){ ?>
        <div class="alert alert-danger text-center" role="alert">
          Invalide Username or Password.
        </div>
      <?php } ?>
      <h1 class="h3 mb-3 font-weight-normal text-center">Login</h1>
      <div class="form-group">
        <input type="text" class="form-control form-control-sm" name="admin_username" id="admin_username" placeholder="Username" required>
      </div>
      <div class="form-group">
        <input type="password" class="form-control form-control-sm" name="admin_password" id="admin_password" placeholder="Password" required>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted text-center"><a href="#">Forgot Password.</a></p>
    </form>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/dental.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.alert').delay(5000).fadeOut();
      });
    </script>
  </body>
</html>
