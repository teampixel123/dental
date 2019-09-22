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
            <h1 class="title">Blogs List</h1>
          </div>

          <div class="table-responsive">
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Title</th>
                  <th>Writer</th>
                  <th>Short Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $i = 0;
                  foreach ($blog_list as $blog_list1) {
                  $i++;
                ?>
                    <tr>
                      <td><?php echo $i; ?></td>
                      <td><?php echo $blog_list1->blog_title; ?></td>
                      <td><?php echo $blog_list1->blog_writer_name; ?></td>
                      <td><?php echo $blog_list1->blog_short_description; ?></td>
                      <td>
                        <a href="#"> <i class='fa fa-eye p-1'></i></a>
                        <a href="#"> <i class='fa fa-edit p-1'></i></a>
                        <a href="#"> <i class='fa fa-trash p-'></i></a>
                      </td>
                    </tr>
                <?php  }
                ?>

              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

    <?php include('script.php'); ?>

  </body>
</html>
