<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php include('head.php'); ?>
  <body>
    <?php include('navbar.php'); ?>

    <section class="contact padding-80">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h3 class="title">Contact Us</h3>
          </div>
          <div class="col-md-4">
            <h4 class="sub-title"><i class="fa fa-home"></i> Address</h4>
            <p>22 St. Black Road Orlando, PL 3457</p>
            <h4 class="sub-title"><i class="fa fa-phone"></i> Phone</h4>
            <p>555–123–2323</p>
            <h4 class="sub-title"><i class="fa fa-envelope"></i> E-Mail</h4>
            <p>bedentist@demolink.org</p>
            <h4 class="sub-title"><i class="fa fa-clock-o"></i> Opening hours</h4>
            <p class="mb-1">Monday: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10AM - 9PM</p>
            <p class="mb-1">Tuesday: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10AM - 9PM</p>
            <p class="mb-1">Wednesday: &nbsp;&nbsp;&nbsp;10AM - 9PM</p>
            <p class="mb-1">Thursday: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10AM - 9PM</p>
            <p class="mb-1">Friday: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10AM - 9PM</p>
            <p class="mb-1">Saturday: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10AM - 9PM</p>
            <p class="mb-1">Sunday: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Closed</p>
          </div>

          <div class="col-md-8 contact-form">
            <h4 class="sub-title">Contact Form</h4>
            <form class="mt-4">
              <div class="form-group">
                <label class="contact-lbl">Your Name*</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label class="contact-lbl">Email Address*</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
              </div>
              <div class="form-group">
                <label class="contact-lbl">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Email Address">
              </div>
              <div class="form-group">
                <label class="contact-lbl">You message*</label>
                <textarea class="form-control" name="message" id="message" rows="6" placeholder="Type Your Message"></textarea>
              </div>
              <button class="btn btn-primary btn-dental mt-3" type="button" name="button"> Send </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="contact-map" style="margin-bottom:-7px;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d122291.28963608075!2d74.1737755064194!3d16.696748218966967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3bc1003e50f49e35%3A0xe0887b8c17821958!2spixelbazar!3m2!1d16.696759999999998!2d74.243816!5e0!3m2!1sen!2sin!4v1485068681227" width="100%" height="450" frameborder="0" class="border-0" allowfullscreen=""></iframe>
    </section>
    <?php include('footer.php'); ?>

  </body>
</html>
