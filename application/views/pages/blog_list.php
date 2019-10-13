<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include('head.php'); ?>
  <body>
    <?php include('navbar.php'); ?>

    <section class="blog-list padding-80">
      <div class="container">
        <h3 class="title">Blogs</h3>
        <div class="row">
          <div class="col-md-9">

            <table data-order='[[ 0, "desc" ]]' id="blog_list2" class="table">
              <thead>
                <tr>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($blog_list as $blog_list1) { ?>
                <tr>
                  <td>
                    <div class="blog-box">
                      <h4 class="sub-title"><?php echo $blog_list1->blog_title; ?></h4>
                      <ul>
                        <li>by <b><?php echo $blog_list1->blog_writer_name; ?></b></li>
                        <li><?php echo $blog_list1->blog_date; ?></li>
                        <li>Dental</li>
                      </ul>
                      <img class="web-img" src="assets/images/blogs/<?php echo $blog_list1->blog_image; ?>" alt="">
                      <p>
                        <?php echo $blog_list1->blog_short_description; ?>
                      </p>
                      <form class="" action="Blog-Details" method="post">
                        <input type="hidden" name="blog_id" value="<?php echo $blog_list1->id; ?>">
                        <button class="btn btn-primary btn-dental mt-3" type="submit" name="button"> Read More </button>
                      </form>
                      <hr>
                    </div>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>




            <!-- <?php foreach ($blog_list as $blog_list1) { ?>
              <div class="blog-box">
                <h4 class="sub-title">Avoiding bad breath</h4>
                <ul>
                  <li>by <b>John Doe</b></li>
                  <li>May 10, 2016</li>
                  <li>Dental</li>
                </ul>
                <img class="web-img" src="assets/images/about/about1.jpg" alt="">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                  sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <button class="btn btn-primary btn-dental mt-3" type="button" name="button"> Read More </button>
                <hr>
              </div>
            <?php } ?> -->





            <!-- <div class="blog-box">
              <h4 class="sub-title">Avoiding bad breath</h4>
              <ul>
                <li>by <b>John Doe</b></li>
                <li>May 10, 2016</li>
                <li>Dental</li>
              </ul>
              <img class="web-img" src="assets/images/about/about1.jpg" alt="">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
              <button class="btn btn-primary btn-dental mt-3" type="button" name="button"> Read More </button>
              <hr>
            </div> -->
          </div>
          <div class="col-md-3">
            <div class="service-side-div">
              <h4 class="sub-title">Our Services</h4>
              <div class="service-box">
                <img class="web-img" src="assets/images/home_page/services1.jpg" alt="">
                <a href="#"><h4 class="sub-title">Our Services</h4></a>
              </div>
              <hr>
              <div class="service-box">
                <img class="web-img" src="assets/images/home_page/services2.jpg" alt="">
                <a href="#"><h4 class="sub-title">Our Services</h4></a>
              </div>
              <hr>

            </div>
          </div>
        </div>
      </div>
    </section>


    <?php include('footer.php'); ?>

  </body>
</html>
