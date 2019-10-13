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
            <table id="blog_list1" class="table table-striped table-sm">
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
                        <a class="view-blog"> <i class='fa fa-eye p-1'></i> </a>
                        <a class="edit-blog"> <i class='fa fa-edit p-1'></i> </a>
                        <a class="delete-blog" data-toggle="modal" data-target="#exampleModal_<?php echo $i; ?>">
                          <i class='fa fa-trash p-1'></i>
                        </a>
                      </td>


                      <!-- Button trigger modal -->
                      <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        Launch demo modal
                      </button> -->

                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal_<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Delete Blog</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              Do You want to delete this blog.
                              <p class="mt-3">
                                <?php echo $blog_list1->blog_title; ?>
                              </p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                              <form class="form-delete-blog" action="blog_delete" method="post">
                                <input type="hidden" name="blog_id" value="<?php echo $blog_list1->id; ?>">
                                <input type="hidden" name="blog_image" value="<?php echo $blog_list1->blog_image; ?>">
                                <button type="submit" class="btn btn-primary">Yes</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>


                      <form class="form-view-blog" action="blog_details" method="post">
                        <input type="hidden" name="blog_id" value="<?php echo $blog_list1->id; ?>">
                      </form>
                      <form class="form-edit-blog" action="blog_edit" method="post">
                        <input type="hidden" name="blog_id" value="<?php echo $blog_list1->id; ?>">
                      </form>

                    </tr>
                <?php  } ?>

              </tbody>
            </table>









          </div>
        </main>
      </div>
    </div>

    <div class="row alert-div w-100" id="alert_update">
      <div class="col-md-12">
        <div class="alert alert-primary" role="alert">
          Blog updated successfully.
        </div>
      </div>
    </div>

    <div class="row alert-div w-100" id="alert_delete">
      <div class="col-md-12">
        <div class="alert alert-danger " role="alert">
          Blog deleted successfully.
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
          if(is_success == 'update'){
            $('#alert_update').fadeIn(1000);
            $('#alert_update').delay(3000).fadeOut(1000);
          }
          else if(is_success == 'delete'){
            $('#alert_delete').fadeIn(1000);
            $('#alert_delete').delay(3000).fadeOut(1000);
          }
        });
      </script>
    <?php }  ?>
  </body>
</html>
