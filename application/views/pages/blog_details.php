<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include('head.php'); ?>
  <body>
    <?php include('navbar.php'); ?>

    <section class="blog-details padding-80">
      <div class="container">
        <!-- <h3 class="title">Blogs</h3> -->
        <div class="row">
          <div class="col-md-9">
            <?php foreach ($blog_details as $blog_details1) { ?>
              <div class="blog-box">
                <h3 class="title"><?php echo $blog_details1->blog_title; ?></h3>
                <ul>
                  <li>by <b><?php echo $blog_details1->blog_writer_name; ?></b></li>
                  <li><?php echo $blog_details1->blog_date; ?></li>
                  <!-- <li>Dental</li> -->
                </ul>
                <h4 class="sub-title">
                  <?php echo $blog_details1->blog_short_description; ?>
                </h4>
                <img class="web-img mb-4" src="assets/images/blogs/<?php echo $blog_details1->blog_image; ?>" alt="">
                <?php echo $blog_details1->blog_details; ?>
              </div>
            <?php } ?>

          </div>

          <div class="col-md-3">
            <div class="service-side-div">
              <h4 class="sub-title">Our Services</h4>
              <div class="service-box">
                <a href="#">
                  <img class="web-img" src="assets/images/home_page/services1.jpg" alt="">
                  <h4 class="sub-title">Our Services</h4>
                </a>
              </div>
              <hr>
              <div class="service-box">
                <a href="#">
                  <img class="web-img" src="assets/images/home_page/services2.jpg" alt="">
                  <h4 class="sub-title">Our Services</h4>
                </a>
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
