<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TECHNIBS</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('asset/img/logo technibis.png') }}" rel="icon">
  <link href="{{ asset('asset/img/logo technibis.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('asset/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('asset/css/main.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="asset/css/main.css" rel="stylesheet">
  <style>
    .swiper-slide img {
      width: 100%; /* Make the image fill the parent container */
      height: 450px; /* Maintain the aspect ratio */
    }
    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center sticky-navbar fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <!-- Logo Image -->
        <img class="logo-image" src="{{ asset('asset/img/logo name.png') }}" alt="Logo">
      </a>

      <!-- Mobile Navigation Toggle -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <!-- Navigation -->
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
          <li><a href="/contact">Contact</a></li>
        </ul>        
      </nav>
    </div>
  </header>

<!-- End Header -->

  <main id="main">

    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('asset/img/project2.jpeg') }}');">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h3 style="color: aliceblue;">Project Details</h3>
        <ol>
          <li><a href="/">Home</a></li>
          <li>Projects</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Projet Details Section ======= -->
    <section id="project-details" class="project-details">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        @if($project) <!-- Check if the project exists -->
            <div class="position-relative h-100">
                <div class="slides-1 portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <!-- Loop through project images -->
                        @if($project->project_image1)
                        <div class="swiper-slide">
                          <img src="{{ asset('storage/' . $project->project_image1) }}" alt="Petrol Pump Image 1">
                      </div>
                      @endif
                      @if($project->project_image2)
                      <div class="swiper-slide">
                          <img src="{{ asset('storage/' . $project->project_image2) }}" alt="Petrol Pump Image 2">
                      </div>
                      @endif
                      @if($project->project_image3)
                      <div class="swiper-slide">
                          <img src="{{ asset('storage/' . $project->project_image3) }}" alt="Petrol Pump Image 3">
                      </div>
                      @endif
                      @if($project->project_image4)
                      <div class="swiper-slide">
                          <img src="{{ asset('storage/' . $project->project_image4) }}" alt="Petrol Pump Image 4">
                      </div>
                     @endif
                     @if($project->project_image5)
                      <div class="swiper-slide">
                          <img src="{{ asset('storage/' . $project->project_image5) }}" alt="Petrol Pump Image 5">
                      </div>
                     @endif    
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <div class="row justify-content-between gy-4 mt-4">
                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>{{ $project->project_title }}</h2>
                        <p>{{ $project->description1 }}</p>
                        <p>{{ $project->description2 }}</p>
                        <div class="testimonial-item">
                        <p>
                            <i class="bi bi-quote quote-icon-left"></i>
                            The experience at Sunrise Petrol Pump is exceptional. The service is quick, and the staff is always ready to assist. Highly recommend it to anyone in need of fast and reliable fueling services.
                            <i class="bi bi-quote quote-icon-right"></i>
                        </p>
                        <div>
                            <img src="{{ asset('storage/' . $project->testimonial_image) }}" class="testimonial-img" alt="">
                            <h3>{{ $project->testimonial_author }}</h3>
                            <h4>{{ $project->author_profession }}</h4>
                        </div>
                    </div>
                        <p>{{ $project->description3 }}</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="portfolio-info">
                        <h3>Project Information</h3>
                        <ul>
                            <li><strong>Category</strong> <span>{{ $project->category->name }}</span></li>
                            <li><strong>Client</strong> <span>{{ $project->client }}</span></li>
                            <li><strong>Project Date</strong> <span>{{ $project->project_date }}</span></li>
                            <li><strong>Project URL</strong> <a href="{{ $project->project_url }}">{{ $project->project_url }}</a></li>
                            <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        @else
            <p>Project details not available.</p>
        @endif
    </div>
</section>
    
    
    <!-- End Projet Details Section -->

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
  <script src="{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('asset/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('asset/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('asset/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('asset/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('asset/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('asset/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('asset/js/main.js') }}"></script> 

</body>

</html>