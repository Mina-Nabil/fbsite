<!-- Content Wrapper Start -->
<div class="content_wrapper">
  <!-- Breadscrumb Start -->
    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3" style="background: url(images/slider_img.jpg); background-attachment: fixed; background-position: 50% 50%;">
      <div class="breadcrumb_wrap_inner">
          <div class="container">
            <h1>Join Our Team</h1>
                <ul class="breadcrumbs">
                  <li><a href="<?=base_url()?>home">Home</a> /</li>
                  <li>Join our Team</li>
                </ul>
          </div>
        </div>
    </div>
    <!-- Breadscrumb Start -->
  <div id="contact_wrap" class="contact_wrap">
    <div class="container">
      <!-- Contact Form Start -->
      <div class="col-md-6 col-sm-12 col-xs-12">
          <h3>Join our Team</h3>
          <p>Register now to join our team of instructors!</p>
          <div class="contact_form">
              <form method="post" action="<?=base_url()?>send_join">
                  <input class="form-control" placeholder="Full Name" name="name" type="text" required>
                  <input class="form-control" placeholder="Mobile Number" name="mob" type="text" required>
                  <input class="form-control" placeholder="Email" name="email" type="text" required>
                  <input class="form-control" placeholder="Years of experience" name="years" type="text" required>
                  <input class="form-control" placeholder="Training Field" name="field" type="text" required>
                  <textarea class="form-control" rows="7" placeholder="Why do you want to join financial brains?" name="why"></textarea>
                  <label>Biography</label>
                  <input class="form-control"  name="CV" type="file" required>
                  <input class="form-control"  name="photo" type="file" required>
                  <button type="submit" class="btn btn_contact">Submit <i class="fa fa-check"></i></button>
              </form>
          </div>
      </div>
      <!-- Contact Form End -->
    </div>
  </div>
</div>
