<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact BMS UNIVERSITY</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.3.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="index.html" style='color:#3575D3 !important'><img src='admin images/locl.png' style='height:44px;width:55px'>&nbsp BMS University</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>
          
          <li><a class="active" href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in" style='background-color:#3575d3'>
      <div class="container">
        <h2>Contact Us</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div data-aos="fade-up">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115548.14839398045!2d75.77690760829587!3d25.173541684233204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396f9b30c41bb44d%3A0x5f5c103200045588!2sKota%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1624645454531!5m2!1sen!2sin" width="1500" height="450" style="border:0;" allowfullscreen ></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Street-no.101 New Ashok Vihar Kota</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>info@example.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+1 5589 55488 55s</p>
              </div>

            </div>

          </div>
<script>
            function checkforblank()
			{
			     if(document.getElementById('name').value=="" )
				 {
				    alert("Please enter your name.");
					return false;
				 }
				 else if(document.getElementById('mail').value=="" )
				 {
				    alert("Please enter your Email ID");
					return false;
				 }
				 
				 else if(document.getElementById('message').value=="" )
				 {
				    alert("Please enter your message/query.");
					return false;
				 }
				 else
				 {
				      alert("Your message has been saved successfully. We will get back to you as soon as Possible. THANKYOU!!");
				 }
             }
        </script>
          <div class="col-lg-8 mt-5 mt-lg-0">
              <form action="contactsend.php" method="POST" onsubmit="return checkforblank()">
		<fieldset>
          <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Your Name" >
          <input type="email" class="form-control mb-3" id="mail" name="mail" placeholder="Your Email">
          <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Subject" >
          <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message" ></textarea>
          <button type="submit" value="send" class="btn btn-primary" onclick='funct()'>SEND MESSAGE</button>
        </fieldset>
		</form>
            

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact" style='width:50% !important;margin-left:20%'>
            <h3>BMS University</h3>
            <p>
              New Ashok Vihar,Kota <br>
              Rajasthan,India<br>
               <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li ><i class="bx bx-chevron-right" style='color:#3575D3'></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right" style='color:#3575D3'></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right" style='color:#3575D3'></i> <a href="#">Contact Us</a></li>
              
            </ul>
          </div>

         

         

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>BMS University</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="#" style='color:#3575D3;font-weight:bold'>Bhavya Sharma</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0" >
        <a href="#" style='background-color:#3575D3' class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" style='background-color:#3575D3' class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" style='background-color:#3575D3' class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" style='background-color:#3575D3' class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" style='background-color:#3575D3' class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id=""></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style='background-color:#3575D3'><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  
  
  
</body>

</html>