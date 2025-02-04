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
</head>
<style>
  /* General Section Styling */
#stats-counter {
  background: #f8f9fa;
  padding: 50px 0;
}

.stats-item {
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  padding: 20px;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  position: relative;
  overflow: hidden;
  animation: floatEffect 4s ease-in-out infinite;
}

.stats-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 12px rgba(0, 0, 0, 0.2);
}

/* Icon Styling with Rotating Effect */
.stats-item i {
  font-size: 3rem;
  margin-right: 15px;
  color: #6c757d;
  animation: rotateIcon 6s linear infinite;
}

.stats-item:hover i {
  animation: rotateFaster 1s linear infinite;
}

/* @keyframes rotateIcon {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes rotateFaster {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
} */

/* Floating Effect for Stats Item */
@keyframes floatEffect {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
}

/* Fade-in Effect for Counter */
.purecounter {
  font-size: 2.5rem;
  font-weight: bold;
  color: #343a40;
  opacity: 0;
  transform: translateY(20px);
  animation: fadeInCounter 1.5s ease forwards;
}

@keyframes fadeInCounter {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Description Text Styling */
.stats-item p {
  margin: 0;
  font-size: 1.1rem;
  color: #6c757d;
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
@media (max-width: 768px) {
  .breadcrumbs {
    height: 150px; /* Reduce height for smaller screens */
  }
}

</style>
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <!-- <img src="assets/img/logo name.png" alt=""> -->
        <img class="logo-image" src="asset/img/logo name.png" alt="Logo">

       
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
      <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/about" class="active" >About</a></li>
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
          <li><a href="/contact">Contact</a></li>
        </ul>
          
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('asset/img/about1.avif');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>About Us</h2>
        <ol>
          <li><a href="/">Home</a></li>
          <li>About</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row position-relative">
    
          <div class="col-lg-7 about-img" style="background-image: url(asset/img/img5.jpg);"></div>
    
          <div class="col-lg-7">
            <!--  -->
            <div class="our-story">
              <!-- <h2 >Our Story</h3> -->
              <p style="margin-top: 0px !important;">Since 2010, Technibs has excelled in delivering Pre-Engineered and Industrial Buildings with a focus on innovation, space efficiency, and economic design. Guided by Mr. Jaykrishnan’s visionary leadership, we’ve earned a reputation for professionalism, timely delivery, and client satisfaction.</p>
              <ul>
                <li><i class="bi bi-check-circle"></i> <span>Innovative, space-efficient building designs</span></li>
                <li><i class="bi bi-check-circle"></i> <span>Timely project completion with professionalism</span></li>
                <li><i class="bi bi-check-circle"></i> <span>State-of-the-art PEB factories in Gujarat and Kerala</span></li>
              </ul>
              <p>Our sister concern, Archin Infrastructure, operates from Bangalore and Kerala, strengthening our footprint across India.</p>
    
              <!-- <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle"></i>
                <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a>
              </div> -->
            </div>
          </div>
    
        </div>
      </div>
    </section>
    
    <!-- End About Section -->

    <!-- ======= Stats Counter Section ======= -->
    <section id="stats-counter" class="stats-counter section-bg">
      <div class="container">
        <div class="row gy-4 text-center">
    
          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center justify-content-center">
              <i class="bi bi-emoji-smile color-blue"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
                <p>Happy Clients</p>
              </div>
            </div>
          </div>
    
          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center justify-content-center">
              <i class="bi bi-journal-richtext color-orange"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                <p>Projects</p>
              </div>
            </div>
          </div>
    
          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center justify-content-center">
              <i class="bi bi-headset color-green"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hours Of Support</p>
              </div>
            </div>
          </div>
    
          <div class="col-lg-3 col-md-6">
            <div class="stats-item d-flex align-items-center justify-content-center">
              <i class="bi bi-people color-pink"></i>
              <div>
                <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
                <p>Hard Workers</p>
              </div>
            </div>
          </div>
    
        </div>
      </div>
    </section>
    
    <!-- End Stats Counter Section -->

    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">
    
        <div class="row justify-content-around gy-4">
    
          <!-- Image Section -->
          <div class="col-lg-6 img-bg" style="background-image: url('asset/img/img9.jpeg');" data-aos="zoom-in" data-aos-delay="100"></div>
    
          <!-- Content Section -->
          <div class="col-lg-5 d-flex flex-column justify-content-center">
          <div class="section-header">
            <h2>Our Vision</h2>
            </div>
            <p style="font-style: italic;">
              Technibs aims to lead the PEB (Pre-Engineered Building) and Industrial Building sectors. Our goal is to establish a benchmark within the industry by bringing together the finest resources in manpower, design and engineering, manufacturing, and project management. We aspire to set the standard for excellence through a combination of product perfection, engineering expertise, unmatched experience, and outstanding team management. Our commitment to best-in-class customer care and service remains at the core of our vision.
            </p>
    
            <!-- Key Vision Highlights -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a class="stretched-link">Product Perfection</a></h4>
                <p>Our focus is on delivering products that exceed industry standards and client expectations.</p>
              </div>
            </div>
    
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a class="stretched-link">Engineering Excellence</a></h4>
                <p>With unparalleled engineering expertise, we ensure that every project is built with the highest quality and precision.</p>
              </div>
            </div>
    
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a class="stretched-link">Team Management</a></h4>
                <p>Our skilled team manages each project with efficiency and coordination, ensuring timely delivery and top-notch results.</p>
              </div>
            </div>
    
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-headset flex-shrink-0"></i>
              <div>
                <h4><a class="stretched-link">Customer Care</a></h4>
                <p>We prioritize our customers by providing exceptional service, support, and aftercare throughout every project phase.</p>
              </div>
            </div>
    
          </div>
        </div>
    
      </div>
    </section>
    
    <!-- End Alt Services Section -->

    <!-- ======= Alt Services Section 2 ======= -->
    <section id="alt-services-2" class="alt-services section-bg">
      <div class="container" data-aos="fade-up">
    
        <div class="row justify-content-around gy-4">
    
          <!-- Content Section -->
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <div class="section-header">
            <h2>Our Mission</h2>
            </div>
            <p style="font-style: italic;">
              At Technibs, our mission is to not only meet but exceed our clients' expectations. We achieve this through effective project management, designing, fabricating, and erecting safe, cost-effective, and technologically advanced buildings. As a brand, Technibs stands for Quality, Integrity, and Reliability. Our primary goal is to fulfill customer requirements by delivering projects and services that are efficient, cost-effective, and safe, ensuring utmost satisfaction every step of the way.
            </p>
    
            <!-- Key Mission Highlights -->
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-check-circle flex-shrink-0"></i>
              <div>
                <h4><a class="stretched-link">Client-Centric Approach</a></h4>
                <p>We tailor our solutions to meet and exceed client expectations, ensuring satisfaction with every project.</p>
              </div>
            </div>
    
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-gear flex-shrink-0"></i>
              <div>
                <h4><a class="stretched-link">Advanced Technology</a></h4>
                <p>We integrate the latest technologies into every aspect of our projects, ensuring innovation and efficiency.</p>
              </div>
            </div>
    
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-shield-lock flex-shrink-0"></i>
              <div>
                <h4><a class="stretched-link">Safety & Reliability</a></h4>
                <p>Safety is our top priority. Our projects are built with a strong emphasis on secure, reliable practices.</p>
              </div>
            </div>
    
            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-people flex-shrink-0"></i>
              <div>
                <h4><a class="stretched-link">Team Excellence</a></h4>
                <p>Our expert team ensures that each project is handled with the utmost precision, commitment, and professionalism.</p>
              </div>
            </div>
    
          </div>
    
          <!-- Image Section -->
          <div class="col-lg-6 img-bg" style="background-image: url('asset/img/img12.webp');" data-aos="zoom-in" data-aos-delay="100"></div>
    
        </div>
    
      </div>
    </section>
    
    <!-- End Alt Services Section 2 -->

    

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
                <strong>Phone:</strong>9400772516
                <br>
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