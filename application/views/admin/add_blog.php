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
            <h2 class="title">Blog</h2>
          </div>

          <div class="row add-blog">
            <div class="col-md-10 offset-md-1">
              <div class="card">
                <div class="card-header">
                  Add New Blog
                </div>
                <div class="card-body">
                  <form class="form-add-blog mt-3" action="<?php echo base_url(); ?>Admin/save_blog" method="post" enctype="multipart/form-data" >
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Title :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="blog_title" id="blog_title" placeholder="Blog Title" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Writer Name :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="blog_writer_name" id="blog_writer_name" placeholder="Blog Writer Name" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Short Description :</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="blog_short_description" id="blog_short_description" placeholder="Short Description about Blog" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Image :</label>
                      <div class="col-sm-10">
                        <input type="file" class="form-control" name="blog_image" id="blog_image" placeholder="Short Description about Blog" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Blog Details :</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" name="blog_details" id="blog_details" rows="10" cols="80"  required></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-12 text-right">
                        <button type="submit" class="btn btn-primary btn-dental ">Save Blog</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>







        </main>
      </div>
    </div>

    <div class="row alert-div w-100" id="alert_success">
      <div class="col-md-12">
        <div class="alert alert-success " role="alert">
          Blog saved successfully.
        </div>
      </div>
    </div>

  <div class="row alert-div w-100" id="alert_delete">
    <div class="col-md-12">
      <div class="alert alert-success " role="alert">
        Blog not saved. Check image size and type.
      </div>
    </div>
  </div>

  <?php include('script.php'); ?>

  <?php $is_success = $this->session->flashdata('is_success');
  if($is_success){ ?>
    <input type="hidden" id="is_success" value="<?php echo $is_success; ?>">
    <script type="text/javascript">
      $(document).ready(function(){
        var is_success = $('#is_success').val();
        if(is_success == 'save'){
          $('#alert_success').fadeIn(1000);
          $('#alert_success').delay(3000).fadeOut(1000);
        }
        else if(is_success == 'error'){
          $('#alert_delete').fadeIn(1000);
          $('#alert_delete').delay(3000).fadeOut(1000);
        }
      });
    </script>
  <?php }  ?>

  </body>
</html>
