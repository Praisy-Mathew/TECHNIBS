<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TECHNIBS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="asset/img/logo technibis.png" rel="icon">
  <link href="asset/img/logo technibis.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="asset/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="asset/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="asset/vendor/aos/aos.css" rel="stylesheet">
  <link href="asset/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="asset/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="asset/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
  .logo-image {
    width: 170px; /* Adjust width as needed */
    height: 350px; /* Maintain aspect ratio */
}
@media (max-width: 768px) {
    .logo-image {
        width: 200px; /* Adjust for tablets */
        height: 150px;
    }
}
.form-control {
    border-radius: 5px;
    padding: 10px;
    border: 1px solid #ddd;
    font-size: 14px;
    margin-bottom: 10px;
  }

  .custom-btn {
    background-color:#E6B00C !important; /* Ensure the background color is applied */
    color: white !important;
    font-size: 16px;
    font-weight: bold;
    padding: 12px 30px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .custom-btn:hover {
    background-color: #E6B00C !important; /* Ensure the hover color is applied */
   
  }

  /* Adjusting form appearance */
  .col-lg-5 {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  }    
 
</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <img class="logo-image" src="asset/img/logo name.png" alt="Logo">
 
       
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
      <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/services">Services</a></li>
          <li class="dropdown"><a href="#" class=""><span>Projects</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
  <ul>
    @foreach($categories as $category)
      <li><a href="{{ route('projects.category', ['category' => $category->id]) }}">{{ $category->name }}</a></li>
    @endforeach
  </ul>
</li>
          
          </li>
          <li><a href="/gallery">Gallery</a>
          <li><a href="/contact" class="active">Contact</a></li>
        </ul>        
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">


    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('asset/img/services.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Contact</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Contact</li>
        </ol>

      </div>

    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-12">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-map"></i>
              <h3>Our Address</h3>
              <p>Company Junction, Nooranad, 
                pallikkal (po), Adoor.</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-4 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-envelope"></i>
              <h3>Email Us</h3>
              <p>info@technibs.co.in</p>
            </div>
          </div><!-- End Info Item -->

          <div class="col-lg-4 col-md-6">
            <div class="info-item  d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-telephone"></i>
              <h3>Call Us</h3>
              <p>9567022418</p>
            </div>
          </div><!-- End Info Item -->
          <div class="col-lg-4 col-md-6">
            <div class="info-item d-flex flex-column justify-content-center align-items-center">
              <i class="bi bi-globe"></i>
              <h3>Visit Our Website</h3>
              <p><a href="https://www.technibs.co.in" target="_blank">www.technibs.co.in</a></p>
            </div>
          </div>
        </div>

        <div class="row gy-4 mt-1">

          <div class="col-lg-6">
            <iframe 
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
              frameborder="0"
              style="border:0; width: 100%; height: 384px;"
              allowfullscreen
              loading="lazy">
            </iframe>
          </div><!-- End Google Maps -->
          

          <div class="col-lg-6">
          <form action="{{ url('/submit-contact') }}" method="POST" role="form">
          @csrf <!-- CSRF protection -->
            <!-- <form action="forms/contact.php" method="post" role="form" class="php-email-form"> -->
              <div class="row gy-4">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone" required>
            </div>
            
              
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
                <div class="my-3">
                <!-- <div class="loading">Loading</div>
                <div class="error-message"></div> -->
                <!-- <div class="sent-message">Your message has been sent. Thank you!</div>  -->
              </div> 
              <div class="text-center"><button type="submit" class="custom-btn">Send Message</button></div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content position-relative">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <img class="logo-image" src="asset/img/logo name.png" alt="Logo" style="height: 50px;">
              <p>Company Junction, Nooranad,<br>
                pallikkal (po), Adoor.
                <br><br>
                <strong>Phone:</strong> 9567022418<br>
                <strong>Email:</strong> info@technibs.co.in<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="https://wa.me/9567022418" class="d-flex align-items-center justify-content-center"
                  target="_blank">
                  <i class="bi bi-whatsapp"></i>
                </a>
                <a href="https://www.facebook.com/share/wkVJ1WCkEhMC1NDW/?mibextid=LQQJ4d"
                  class="d-flex align-items-center justify-content-center" target="_blank">
                  <i class="bi bi-facebook"></i>
                </a>
                <a href="https://instagram.com/yourprofile" class="d-flex align-items-center justify-content-center"
                  target="_blank">
                  <i class="bi bi-instagram"></i>
                </a>
                <a href="https://linkedin.com/in/yourprofile" class="d-flex align-items-center justify-content-center"
                  target="_blank">
                  <i class="bi bi-linkedin"></i>
                </a>

              </div>
            </div>
          </div><!-- End footer info column-->

          <div class="col-lg-2 col-md-3 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/about">About</a></li>
              <li><a href="/services">Services</a></li>
              <li><a href="/projects">Projects</a></li>
              <li><a href="/gallery">Gallery</a></li>
              <li><a href="/contact">Contact</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-3 col-md-3 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><a href="/services">Pre-Engineered Buildings</a></li>
              <li><a href="/services">Industrial Buildings</a></li>
              <li><a href="/services">Z-Section Material Specifications</a></li>
              <li><a href="/services">End-to-End Project Oversight</a></li>
              <li><a href="/services">Premium Materials and Techniques</a></li>
            </ul>
          </div><!-- End footer links column-->

          <div class="col-lg-3 col-md-3 footer-links">
            <h4>Our Projects</h4>
            <ul>
              <li><a href="/projects">Petrol Pump Building</a></li>
              <li><a href="/projects">Multiplex & Commercial Building</a></li>
              <li><a href="/projects">Industrial Buildings </a></li> 
            </ul>            
          </div><!-- End footer links column-->



        </div>
      </div>
    </div>

    <div class="footer-legal text-center position-relative">
      <div class="container">
        <div class="copyright">
          <!-- &copy; Copyright <strong><span>UpConstruction</span></strong>. -->
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/ -->
          Designed by <a>Cognetz</a>
        </div>
      </div>
    </div>

  </footer>
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="asset/vendor/aos/aos.js"></script>
  <script src="asset/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="asset/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="asset/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="asset/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="asset/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="asset/js/main.js"></script>

</body>

</html>