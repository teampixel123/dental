<footer>
  <section class="dental-footer padding-80">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="" data-aos="fade-up">
            <h5>Contact</h5>
            <div class="tx-div"></div>
            <ul>
              <li><i class="fa fa-home"></i> &nbsp;&nbsp;Station road, Kolhapur, Maharashtra 416001</li>
              <li><i class="fa fa-phone"></i> &nbsp;&nbsp;0231 265 0266</li>
              <li><i class="fa fa-envelope"></i> &nbsp;&nbsp;demo@dental.com</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="" data-aos="fade-up">
            <h5>Usefull Links</h5>
            <div class="tx-div"></div>
            <ul>
              <li><i class="fa fa-angle-double-right"></i><a href="<?php echo base_url(); ?>"> &nbsp;&nbsp;Home</a></li>
              <li><i class="fa fa-angle-double-right"></i><a href="<?php echo base_url(); ?>About-Us"> &nbsp;&nbsp;About Us</a></li>
              <li><i class="fa fa-angle-double-right"></i><a href="<?php echo base_url(); ?>Blogs"> &nbsp;&nbsp;Blogs</a></li>
              <li><i class="fa fa-angle-double-right"></i><a href="<?php echo base_url(); ?>Contact"> &nbsp;&nbsp;Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="" data-aos="fade-up">
            <h5>Our Services</h5>
            <div class="tx-div"></div>
            <ul>
              <li><i class="fa fa-angle-double-right"></i><a href="#"> &nbsp;&nbsp;General and preventive care</a></li>
              <li><i class="fa fa-angle-double-right"></i><a href="#"> &nbsp;&nbsp;Cosmetic solutions</a></li>
              <li><i class="fa fa-angle-double-right"></i><a href="#"> &nbsp;&nbsp;Restorative solutions</a></li>
              <li><i class="fa fa-angle-double-right"></i><a href="#"> &nbsp;&nbsp;Additional treatments</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="" data-aos="fade-up">
            <h5>Working Hours</h5>
            <div class="tx-div"></div>
            <ul>
              <li><i class="fa fa-angle-double-right"></i> &nbsp;&nbsp;Monday: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10.30AM - 9PM</li>
              <li><i class="fa fa-angle-double-right"></i> &nbsp;&nbsp;Tuesday: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10.30AM - 9PM</li>
              <li><i class="fa fa-angle-double-right"></i> &nbsp;&nbsp;Wednesday: &nbsp;&nbsp;&nbsp;10.30AM - 9PM</li>
              <li><i class="fa fa-angle-double-right"></i> &nbsp;&nbsp;Thursday: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10.30AM - 9PM</li>
              <li><i class="fa fa-angle-double-right"></i> &nbsp;&nbsp;Friday: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10.30AM - 9PM</li>
              <li><i class="fa fa-angle-double-right"></i> &nbsp;&nbsp;Saturday: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10.30AM - 9PM</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="container-flued dental-copy">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p>
             @2019 All Rights Reserved By <span>Makandar Dental Clinic</span>
          </p>
        </div>
        <div class="col-md-6 social-footer">
          <ul class="">
            <li class="li-fb">
              <a href="#"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-google-plus"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-youtube"></i></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<div class="sideslider">
  <div class="book-appointment"><a class="book-btn" href="#">Book an Appointment</a></div>
  <div id="appointment-form">
    <form action="<?php echo base_url(); ?>Website/send_apointment_mail" method="post">
      <div class="form-group">
        <input type="text" class="form-control form-control-sm" name="full_name" id="exampleInputEmail1" placeholder="Full Name">
      </div>
      <div class="form-group">
        <input type="email" class="form-control form-control-sm" name="ap_email" id="exampleInputPassword1" placeholder="Email">
      </div>
      <div class="form-group">
        <input type="number" class="form-control form-control-sm" name="ap_mobile" id="exampleInputPassword1" placeholder="Mobile Number">
      </div>
      <div class="form-group">
        <input type="text" class="form-control form-control-sm" name="ap_date" id="date" placeholder="Date">
      </div>
      <div class="form-group">
        <select class="form-control form-control-sm" name="time" name="ap_time" id="time">
          <option value="">9:00 AM</option>
          <option value="">10:00 AM</option>
          <option value="">11:00 AM</option>
          <option value="">12:00 pM</option>
          <option value="">01:00 pM</option>
          <option value="">02:00 pM</option>
          <option value="">03:00 pM</option>
          <option value="">04:00 pM</option>
          <option value="">05:00 pM</option>
          <option value="">06:00 pM</option>
        </select>
        <!-- <input type="time" class="form-control form-control-sm" id="time" placeholder="Time"> -->
      </div>
      <button type="submit" class="btn btn-primary btn-sm">Submit</button>
      <button type="button" class="btn btn-default btn-sm float-right appointment-close"><u>Close</u></button>
    </form>
  </div>
</div>

<a href="#" id="go-top" class="go-top" style="color: #f7c247;">
  <i class="">
    <svg style="width:25px; padding-bottom:20px;"  viewBox="0 0 320 512"><path fill="#fff" d="M168.5 164.2l148 146.8c4.7 4.7 4.7 12.3 0 17l-19.8 19.8c-4.7 4.7-12.3 4.7-17 0L160 229.3 40.3 347.8c-4.7 4.7-12.3 4.7-17 0L3.5 328c-4.7-4.7-4.7-12.3 0-17l148-146.8c4.7-4.7 12.3-4.7 17 0z" class=""></path></svg>
  </i>
</a>


<a id="wa-sticky" class="go-top wa-sticky" target="_blank" href="https://web.whatsapp.com/send?phone=+919158995505">
  <i class="">
    <svg style="width:46px; padding-bottom:20px; padding-left: 6px;" viewBox="0 0 520 512">
      <path fill="#25D366" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" class=""></path>
      <!-- <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" class=""></path> -->
    </svg>
  </i>
</a>

<script src="assets/js/jquery-3.4.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/owl.carousel.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="assets/js/bootstrap-datepicker.min.js"></script>

<script src="assets/js/dental.js" type="text/javascript"></script>
<script>
  AOS.init({
    duration: 1000,
    // offset:200,
  });
</script>
<script type="text/javascript">
  $('#date').datepicker({
    format: 'dd/mm/yyyy',
  }).on('changeDate', function(ev){
    $('.datepicker').hide();
  });
</script>
