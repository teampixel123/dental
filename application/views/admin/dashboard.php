<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php include('head.php'); ?>
  <body class="dashboard">
    <?php include('top_nav.php'); ?>

    <div class="container-fluid">
      <div class="row">
        <?php include('sidebar.php'); ?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
          </div>
          <!-- <p>
            <a href="add_blog" class="btn btn-primary btn-dental ">Add Blog</a>
            <a href="blog_list" class="btn btn-primary btn-dental ml-5">Blog List</a>
          </p> -->

          <div class="toast mt-5" role="alert" aria-live="assertive" aria-atomic="true" style="opacity:1;">
            <div class="toast-header p-3">
              <strong class="mr-auto">All Blogs</strong>
            </div>
            <div class="toast-body py-4 px-3">
              <span style="font-size: 28px; color:green;"><b>2</b></span>
            </div>
          </div>


        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../assets/js/owl.carousel.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../assets/js/bootstrap-datepicker.min.js"></script>

    <script src="../assets/js/dental.js" type="text/javascript"></script>

  </body>
</html>
