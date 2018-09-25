<!-- Content Wrapper Start -->
<div class="content_wrapper">
  <!-- Breadscrumb Start -->
    <div class="breadcrumb_wrap" data-stellar-background-ratio="0.3" style="background: url(images/slider_img.jpg); background-attachment: fixed; background-position: 50% 50%;">
      <div class="breadcrumb_wrap_inner">
          <div class="container">
            <h1>Contact Us</h1>
                <ul class="breadcrumbs">
                  <li><a href="<?=base_url()?>home">Home</a> /</li>
                  <li>Contact Us</li>
                </ul>
          </div>
        </div>
    </div>
    <!-- Breadscrumb Start -->

    <!-- Contact Wrapper Start -->
    <div id="contact_wrap" class="contact_wrap">
        <div class="container">
            <!-- Contact Info Start -->
            <div class="col-md-6 col-sm-12 col-xs-12">
              <h3>Contact Info</h3>
                <p>Welcome to our Website. We are glad to have you around.</p>
                <div class="contact_info">
                  <div class="contact_info_inner">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="icon_box"><i class="fa fa-phone"></i></div>
                            <div class="info_txt">
                                <h4>Phone</h4>
                                <p><?=$ContactUs['CNTC_MOB'] ?></p>
                            </div>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="icon_box"><i class="fa fa-envelope"></i></div>
                            <div class="info_txt">
                                <h4>Email</h4>
                                <p><a href="mailto:<?=$ContactUs['CNTC_EMAIL'] ?>"><?=$ContactUs['CNTC_EMAIL'] ?></a></p>
                            </div>
                        </div>
                    </div>

                    <div class="contact_info_inner">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="icon_box"><i class="fa fa-map-marker"></i></div>
                            <div class="info_txt">
                                <h4>Address</h4>
                                <p><?=$ContactUs['CNTC_ADRS']?></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Contact Info End -->

            <!-- Contact Form Start -->
            <div class="col-md-6 col-sm-12 col-xs-12">
                <h3>Send A Message</h3>
                <p>Your email address will not be published. Required fields are marked.</p>
                <div class="contact_form">
                    <form method="post" action="send_email">
                        <input class="form-control" placeholder="Your Name..." name="name" type="text">
                        <input class="form-control" placeholder="Email Addrress..." name="email" type="text">
                        <textarea class="form-control" rows="7" placeholder="Message..." name="message"></textarea>
                        <button type="submit" class="btn btn_contact">Submit <i class="fa fa-check"></i></button>
                    </form>
                </div>
            </div>
            <!-- Contact Form End -->
        </div>
    </div>
    <!-- Contact Wrapper End -->


    <div class="clearfix"></div>
    <!-- Map Start -->
    <div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13824.984762742268!2d31.273725!3d29.972354!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbe0355b786afe1!2sFinancial+Brains!5e0!3m2!1sen!2seg!4v1507149706681" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <!-- Map End -->
    <div class="clearfix"></div>

</div>
<!-- Content Wrapper End -->
