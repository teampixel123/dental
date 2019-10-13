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
            <p class="mb-1">Monday : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10AM - 9PM</p>
            <p class="mb-1">Tuesday : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10AM - 9PM</p>
            <p class="mb-1">Wednesday : &nbsp;&nbsp;&nbsp;10AM - 9PM</p>
            <p class="mb-1">Thursday : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10AM - 9PM</p>
            <p class="mb-1">Friday : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10AM - 9PM</p>
            <p class="mb-1">Saturday : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10AM - 9PM</p>
            <p class="mb-1">Sunday : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Closed</p>
          </div>

          <div class="col-md-8 contact-form">
            <?php
              $send_email = $this->session->flashdata('send_email');
              if($send_email == 'error'){ ?>
                <div class="alert alert-danger" role="alert">
                Email Not send.
                </div>
            <?php } else if($send_email == 'success'){ ?>
                <div class="alert alert-success" role="alert">
                Email send seccessfully.
                </div>
            <?php } ?>
            <!-- <h4 class="sub-title">Contact Form</h4> -->
            <form class="mt-0" action="<?php echo base_url(); ?>Website/send_contact_mail" method="post">
              <div class="form-group">
                <label class="contact-lbl">Your Name*</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
              </div>
              <div class="form-group">
                <label class="contact-lbl">Email Address*</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" required>
              </div>
              <div class="form-group">
                <label class="contact-lbl">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <label class="contact-lbl">You message*</label>
                <textarea class="form-control" name="message" id="message" rows="6" placeholder="Type Your Message" required></textarea>
              </div>
              <button class="btn btn-primary btn-dental mt-3" type="submit" name="button"> Send </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="contact-map" style="margin-bottom:-7px;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15286.13125982554!2d74.234261!3d16.700246!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf7e569059ff60584!2sMakandar%20dental%20and%20implant%20clinic!5e0!3m2!1sen!2sin!4v1569060312033!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>
    <?php include('footer.php'); ?>
    <script type="text/javascript">
      $(document).ready(function(){
        $('.alert').show().delay(5000).fadeOut();
      });
    </script>
  </body>
</html>
