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
  /* Smooth Moving Effect */
.services .service-item {
  transition: transform 0.4s ease, box-shadow 0.4s ease;
}

.services .service-item:hover {
  transform: translateY(-10px); /* Moves the box slightly upwards */
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2); /* Adds a deeper shadow */
}
/* Style for Service Boxes */
.services .service-item {
  background-color: #fff; /* White background */
  border: 1px light #E6B00C; /* Border color */
  border-radius: 12px; /* Rounded corners */
  padding: 20px;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
  transition: transform 0.4s ease, box-shadow 0.4s ease; /* Transition for smooth hover effect */
}

/* Hover effect for moving and shadow */
.services .service-item:hover {
  transform: translateY(-10px); /* Moves the box slightly upwards */
  box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2); /* Adds a deeper shadow */
}

/* Icon Style */
.services .service-item .icon {
  font-size: 40px;
  color: #E6B00C; /* Icon color */
  margin-bottom: 15px;
}

/* Heading Style */
.services .service-item h3 {
  font-size: 20px;
  font-weight: bold;
  color: #333;
  margin-bottom: 10px;
}

/* Paragraph Style */
.services .service-item p {
  font-size: 14px;
  color: #666;
}
.carousel-item img {
  object-fit: cover;  /* Ensures the image covers the space */
  height: 800px;      /* Adjust this height as needed */
}

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
          <li><a href="/services" class="active">Services</a></li>
          <li class="dropdown"><a href="#" class=""><span>Projects</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
  <ul>
    @foreach($categories as $category)
      <li><a href="{{ route('projects.category', ['category' => $category->id]) }}">{{ $category->name }}</a></li>
    @endforeach
  </ul>
</li>
          
          </li>
          <li><a href="/gallery">Gallery</a>
          <li><a href="/contact">Contact</a></li>
        </ul>        
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('asset/img/img7.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Services</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Services</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">
    <div class="row gy-4">

      <!-- Loop through services -->
      @foreach($services as $index => $service)
      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
        <div class="service-item position-relative">
          <div class="icon">
            <!-- Display the icon dynamically based on the service's icon field -->
            <i class="fa {{ $service->icon }}"></i>
          </div>
          <h3>{{ $service->name }}</h3>
          <p>{{ $service->description }}</p>
        </div>
      </div><!-- End Service Item -->
      @endforeach

    </div>
  </div>
</section><!-- End Services Section -->

     <!-- End Services Section -->

    <!-- End Servie Cards Section -->

    <!-- ======= Alt Services Section 2 ======= -->
    <section id="alt-services-2" class="alt-services section-bg">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-around gy-4">
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Pre-Engineered Buildings</h3>
            <p>Technibs is a leading provider of Pre-Engineered Steel Buildings, offering custom designs tailored to meet specific customer needs. Our engineers adhere to international standards, ensuring that each building's components are precisely designed for compatibility. These components are fabricated in our factory, following detailed shop drawings, and are then transported to the project site for assembly according to erection plans.</p>
    
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a class="stretched-link">Industrial Buildings</a></h4>
                <p>Technibs specializes in designing and constructing steel buildings for industrial purposes with fast delivery and robust frameworks.</p>
              </div>
            </div><!-- End Icon Box -->
    
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a class="stretched-link">Institutional Buildings</a></h4>
                <p>Our Pre-Engineered Buildings are designed for educational and healthcare facilities, ensuring flexibility and durability for long-term use.</p>
              </div>
            </div><!-- End Icon Box -->
    
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a class="stretched-link">Commercial Buildings</a></h4>
                <p>Technibs offers innovative solutions for commercial spaces, with customizable features to meet diverse customer needs.</p>
              </div>
            </div><!-- End Icon Box -->
    
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a class="stretched-link">Weather-resistant Structures</a></h4>
                <p>Our steel buildings are designed to withstand severe weather conditions, offering long-lasting durability and safety.</p>
              </div>
            </div><!-- End Icon Box -->
          </div>
          
           <div class="col-lg-6 img-bg" style="background-image: url(asset/img/img12.jpg);" data-aos="zoom-in"
            data-aos-delay="100"></div> 
        </div>
      </div>
    </section>
    
    <!-- End Alt Services Section 2 -->

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">
    
        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(asset/img/alt-services.jpg);" data-aos="zoom-in"
            data-aos-delay="100"></div>
    
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Industrial Buildings</h3>
            <p>Technibs specializes in the construction of high-quality industrial buildings. With extensive experience across diverse environments, we cater to various customer needs, delivering structures tailored to exact specifications.</p>
            <p>We ensure that every industrial or commercial building justifies the investment by offering comfort, functionality, and aesthetics. Our team uses top-quality materials, the best building techniques, and years of proven experience to create buildings to the highest standards.</p>
            <p>For more details about our Industrial Buildings services, contact us today. We also provide after-sales maintenance to keep your building in top condition.</p>
    
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a class="stretched-link">Expert Construction</a></h4>
                <p>We specialize in delivering functional, high-quality industrial buildings tailored to your needs.</p>
              </div>
            </div><!-- End Icon Box -->
    
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a class="stretched-link">Tailored Solutions</a></h4>
                <p>Each building is designed to meet your specific requirements, ensuring it’s both practical and visually appealing.</p>
              </div>
            </div><!-- End Icon Box -->
    
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a class="stretched-link">Maintenance Services</a></h4>
                <p>Our after-sales service includes ongoing maintenance to keep your industrial building in optimal condition.</p>
              </div>
            </div><!-- End Icon Box -->
    
          </div>
        </div>
    
      </div>
    </section>
    

    <!-- End Alt Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Testimonials</h2>
            <p>We take pride in delivering high-quality construction services that exceed expectations. Here's what some
                of our satisfied clients have to say about Technibs.</p>
        </div>

        <div class="slides-2 swiper">
            <div class="swiper-wrapper">
                @foreach($testimonials as $testimonial)
                <div class="swiper-slide">
                    <div class="testimonial-wrap">
                        <div class="testimonial-item">
                            <img src="{{ asset('storage/' . $testimonial->image) }}" class="testimonial-img" alt="">
                            <h3>{{ $testimonial->author }}</h3>
                            <h4>{{ $testimonial->designation }}</h4>
                            <div class="stars">
                                @for ($i = 0; $i < 5; $i++)
                                    <i class="bi bi-star-fill"></i>
                                @endfor
                            </div>
                            <p>
                                <i class="bi bi-quote quote-icon-left"></i>
                                {{ $testimonial->content }}
                                <i class="bi bi-quote quote-icon-right"></i>
                            </p>
                        </div>
                    </div>
                </div><!-- End testimonial item -->
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
        
    <!-- End Testimonials Section -->

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
                <strong>Phone:</strong> 9400772516<br>
                <strong>Email:</strong> sales@technibs.co.in<br>
              </p>
              <div class="social-links d-flex mt-3">
                <a href="https://wa.me/+919400772516" class="d-flex align-items-center justify-content-center"
                  target="_blank">
                  <i class="bi bi-whatsapp"></i>
                </a>
                <a href="https://www.facebook.com/share/wkVJ1WCkEhMC1NDW/?mibextid=LQQJ4d"
                  class="d-flex align-items-center justify-content-center" target="_blank">
                  <i class="bi bi-facebook"></i>
                </a>
                <!-- <a href="https://instagram.com/yourprofile" class="d-flex align-items-center justify-content-center"
                  target="_blank">
                  <i class="bi bi-instagram"></i>
                </a>
                <a href="https://linkedin.com/in/yourprofile" class="d-flex align-items-center justify-content-center"
                  target="_blank">
                  <i class="bi bi-linkedin"></i>
                </a> -->

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