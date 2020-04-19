<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>StartUp</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="http://localhost/codeigniter-3/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/codeigniter-3/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="http://localhost/codeigniter-3/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="http://localhost/codeigniter-3/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://localhost/codeigniter-3/assets/css/themify-icons.css">
    <link rel="stylesheet" href="http://localhost/codeigniter-3/assets/css/nice-select.css">
    <link rel="stylesheet" href="http://localhost/codeigniter-3/assets/css/flaticon.css">
    <link rel="stylesheet" href="http://localhost/codeigniter-3/assets/css/gijgo.css">
    <link rel="stylesheet" href="http://localhost/codeigniter-3/assets/css/animate.min.css">
    <link rel="stylesheet" href="http://localhost/codeigniter-3/assets/css/slick.css">
    <link rel="stylesheet" href="http://localhost/codeigniter-3/assets/css/slicknav.css">
    <link rel="stylesheet" href="http://localhost/codeigniter-3/assets/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
      <div class="header-area ">
          <div id="sticky-header" class="main-header-area">
              <div class="container-fluid p-0">
                  <div class="row align-items-center no-gutters">
                      <div class="col-xl-2 col-lg-2">
                          <div class="logo-img">
                              <a href="<?php echo site_url('Startup/index');?>">
                                  <img src="http://localhost/codeigniter-3/assets/img/logo.png" alt="">
                              </a>
                          </div>
                      </div>
                      <div class="col-xl-8 col-lg-8">
                          <div class="main-menu  d-none d-lg-block text-center">
                              <nav>
                                  <ul id="navigation">
                                      <li><a class="active" href="<?php echo site_url('Startup/index');?>">home</a></li>
                                      <li><a href="<?php echo site_url('Startup/service');?>">services</a></li>
                                      <li><a href="<?php echo site_url('Startup/portfolio');?>">Portfolio</a></li>
                                      <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                          <ul class="submenu">
                                              <li><a href="<?php echo site_url('Startup/portfolio_details');?>">Portfolio details</a></li>
                                              <li><a href="<?php echo site_url('Startup/about');?>">about</a></li>
                                              <li><a href="<?php echo site_url('Startup/elements');?>">elements</a></li>
                                          </ul>
                                      </li>

                                      <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                          <ul class="submenu">
                                              <li><a href="<?php echo site_url('Startup/blog');?>">blog</a></li>
                                              <li><a href="<?php echo site_url('Startup/single_blog');?>">single-blog</a></li>
                                          </ul>
                                      </li>
                                      <li><a href="<?php echo site_url('Startup/contact');?>">Contact</a></li>
                                  </ul>
                              </nav>
                          </div>
                      </div>
                      <div class="col-lg-2 d-none d-lg-block">
                          <div class="log_chat_area d-flex align-items-end">
                              <a href="#" target="_black" class="say_hi">Say Hello</a>
                          </div>
                      </div>
                      <div class="col-12">
                          <div class="mobile_menu d-block d-lg-none"></div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </header>
  <!-- header-end -->

  <!-- bradcam_area  -->
  <div class="bradcam_area breadcam_bg_3">
    <div class="container">
      <div class="row">
          <div class="col-xl-12">
              <div class="bradcam_text">
                  <h3>Contact Us</h3>
              </div>
          </div>
      </div>
    </div>
  </div>
  <!-- /bradcam_area  -->

  <!-- ================ contact section start ================= -->
  <section class="contact-section section_padding">
    <div class="container">
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" style="height: 480px;"></div>
        <script>
          function initMap() {
            var uluru = {lat: -25.363, lng: 131.044};
            var grayStyles = [
              {
                featureType: "all",
                stylers: [
                  { saturation: -90 },
                  { lightness: 50 }
                ]
              },
              {elementType: 'labels.text.fill', stylers: [{color: '#ccdee9'}]}
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {lat: -31.197, lng: 150.744},
              zoom: 9,
              styles: grayStyles,
              scrollwheel:  false
            });
          }
          
        </script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>
        
      </div>


      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
          <form class="form-contact contact_form" action="<?php echo site_url('Startup/contact_process');?>" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  
                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder = 'Enter Message'></textarea>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject'>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" class="button button-contactForm btn_4 boxed-btn">Send Message</button>
            </div>
          </form>
        </div>
        <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Buttonwood, California.</h3>
              <p>Rosemead, CA 91770</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>00 (440) 9865 562</h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>support@colorlib.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->

    <!-- footer start -->
    <footer class="footer">
      <div class="footer_top">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-2 col-md-3">
                      <div class="footer_logo wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">
                          <a href="<?php echo site_url('Startup/index');?>">
                              <img src="http://localhost/codeigniter-3/assets/img/logo.png" alt="">
                          </a>
                      </div>
                  </div>
                  <div class="col-xl-7 col-lg-7 col-md-9">
                      <div class="menu_links">
                          <ul>
                              <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".2s" href="#">About</a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s"></li>
                              <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".4s" href="#">Services</a></li>
                              <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".6s" href="#">Portfolio</a></li>
                              <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay=".8s" href="#">Pages</a></li>
                              <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1s" href="#">Blog</a></li>
                              <li><a class="wow fadeInDown" data-wow-duration="1s" data-wow-delay="1.1s" href="#">Contact</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-3 col-md-12">
                      <div class="socail_links">
                          <ul>
                              <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" href="#"> <i class="fa fa-facebook"></i> </a></li>
                              <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s" href="#"> <i class="fa fa-twitter"></i> </a></li>
                              <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s" href="#"> <i class="fa fa-instagram"></i> </a></li>
                              <li><a class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s" href="#"> <i class="fa fa-google-plus"></i> </a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="copy-right_text">
          <div class="container">
              <div class="footer_border"></div>
              <div class="row">
                  <div class="col-xl-12">
                      <p class="copy_right text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.3s">
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!--/ footer end  -->

  <!-- JS here -->
  <script src="http://localhost/codeigniter-3/assets/js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/popper.min.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/bootstrap.min.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/owl.carousel.min.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/isotope.pkgd.min.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/ajax-form.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/waypoints.min.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/jquery.counterup.min.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/imagesloaded.pkgd.min.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/scrollIt.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/jquery.scrollUp.min.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/wow.min.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/nice-select.min.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/jquery.slicknav.min.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/jquery.magnific-popup.min.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/plugins.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/gijgo.min.js"></script>

  <!--contact js-->
  <script src="http://localhost/codeigniter-3/assets/js/contact.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/jquery.ajaxchimp.min.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/jquery.form.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/jquery.validate.min.js"></script>
  <script src="http://localhost/codeigniter-3/assets/js/mail-script.js"></script>

  <script src="http://localhost/codeigniter-3/assets/js/main.js"></script>
</body>

</html>