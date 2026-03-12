<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from st.ourhtmldemo.com/new/Sanito1/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Mar 2026 08:19:29 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Sanito - HTML 5 Template Preview</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="assets/css/font-awesome-all.css" rel="stylesheet">
<link href="assets/css/flaticon.css" rel="stylesheet">
<link href="assets/css/owl.css" rel="stylesheet">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
<link href="assets/css/animate.css" rel="stylesheet">
<link href="assets/css/nice-select.css" rel="stylesheet">
<link href="assets/css/jquery-ui.css" rel="stylesheet">
<link href="assets/css/jquery.bootstrap-touchspin.css" rel="stylesheet">
<link href="assets/css/color.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/responsive.css" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <?php include 'header.php' ?>


        <!-- Page Title -->
        <section class="page-title contact-page style-two centred" style="background-image: url(assets/images/background/page-title-2.jpg);">
            <div class="auto-container">
                <div class="content-box">
                    <div class="title">
                        <h1>Contact</h1>
                    </div>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- contact-info-section -->
        <section class="contact-info-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="single-info-box">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-location"></i></div>
                                    <h6>Location</h6>
                                    <p>Chamber no-01,Vindhyanchal Tower,Kaushambi,Ghaziabad,Uttar Pardesh</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="single-info-box">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-phone-call"></i></div>
                                    <h6>Quick Contact</h6>
                                    <p>Phone : <a href="tel:4412345678">+91 9654450123</a><br />Email : <a href="mailto:pestechsolutions1@gmail.com">pestechsolutions1@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 info-column">
                            <div class="single-info-box">
                                <div class="inner-box">
                                    <div class="icon-box"><i class="flaticon-location"></i></div>
                                    <h6>Off. Hours</h6>
                                    <p>Mon - Satday : 9.00 am to 7.00 pm Sunday Closed</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-info-section -->


        <!-- contact-section -->
        <section class="contact-section sec-pad">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <h6>Send Your Message</h6>
                    <h2>Drop us Message for any Query</h2>
                    <p>Please feel free to get in touch using the form below. We'd love to hear your <br />thoughts & answer any questions you may have!</p>
                </div>
                <div class="form-inner">
                    <form method="post" action="https://st.ourhtmldemo.com/new/Sanito1/sendemail.php" id="contact-form" class="default-form"> 
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="username" placeholder="Full Name" required="">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                <input type="text" name="company" placeholder="Organization Name" required="">
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="Email Address" required="">
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                <input type="text" name="phone" required="" placeholder="Phone Number">
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 form-group">
                                <input type="text" name="subject" required="" placeholder="Subject">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <textarea name="message" placeholder="Your Message"></textarea>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn centred">
                                <button class="theme-btn-three thm-btn" type="submit" name="submit-form">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- contact-section end -->


        <!-- google-map-section -->
        <section class="google-map-section">
            <div class="map-inner">
                <div 
                    class="google-map" 
                    id="contact-google-map" 
                    data-map-lat="40.712776" 
                    data-map-lng="-74.005974" 
                    data-icon-path="assets/images/icons/map-marker.png"  
                    data-map-title="Brooklyn, New York, United Kingdom" 
                    data-map-zoom="12" 
                    data-markers='{
                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                    }'>

                </div>
            </div>
        </section>
        <!-- google-map-section end -->


        <!-- subscribe-section -->
        <section class="subscribe-section bg-color-1">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-column">
                        <div class="text">
                            <h3><i class="flaticon-email-1"></i>Subscribe Our Newsletter</h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 form-column">
                        <form action="https://st.ourhtmldemo.com/new/Sanito1/contact.html" method="post" class="subscribe-form">
                            <div class="form-group">
                                <input type="email" name="email" placeholder="Your email address ..." required="">
                                <button type="submit" class="theme-btn-two">Subscribe Us</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->


        <!-- main-footer -->
        <?php include 'footer.php' ?>
        <!-- main-footer end -->


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="flaticon-up-arrow"></span>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/validation.js"></script>
    <script src="assets/js/jquery.fancybox.js"></script>
    <script src="assets/js/appear.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/scrollbar.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery-ui.js"></script>
    <script src="assets/js/bxslider.js"></script>
    <script src="assets/js/jquery.bootstrap-touchspin.js"></script>

    <!-- map script -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>
    <script src="assets/js/gmaps.js"></script>
    <script src="assets/js/map-helper.js"></script>

    <!-- main-js -->
    <script src="assets/js/script.js"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from st.ourhtmldemo.com/new/Sanito1/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Mar 2026 08:19:30 GMT -->
</html>
