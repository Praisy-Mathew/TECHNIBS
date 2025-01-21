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
  <!-- Isotope JS -->


  <!-- =======================================================
  * Template Name: UpConstruction - v1.3.0
  * Template URL: https://bootstrapmade.com/upconstruction-bootstrap-construction-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    .client-logos {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 30px;
    }

    .client-logo img {
      max-width: 100%;
      height: 300px;
      max-height: 300px !important;
      /* Adjust the height of the logos */
      transition: transform 0.3s ease-in-out;
    }

    .client-logo img:hover {
      transform: scale(1.1);
      /* Slight zoom effect on hover */
    }

    @media (max-width: 768px) {
      .client-logos {
        gap: 10px;
        /* Reduce the gap between logos on smaller screens */
      }

      .client-logo img {
        max-height: 50px;
        /* Reduce the size of the logos on mobile */
      }
    }

    .constructions .card-item {
      width: 100%;
      /* Reduced width */
      margin: 10px auto;
      /* Reduced margin to decrease space between cards */
      border: 1.5px solid #E6B00C;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      /* Add shadow for depth */
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      /* Smooth hover effect */
      text-align: center;
      /* Center text for smaller content */
      height: 490px;
      justify-content: space-between;

    }

    .constructions .card-item:hover {
      transform: scale(1.05);
      /* Slight zoom on hover */
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      /* Enhanced shadow on hover */
    }

    .constructions .card-bg img {
      width: 70px;
      /* Set width to 70px */
      height: 70px;
      /* Set height to 70px */
      object-fit: cover;
      /* Ensures images maintain aspect ratio */
      border-radius: 50%;
      /* Make images circular */
      margin: 10px auto;
      /* Center image */
    }

    .constructions .card-body {
      padding: 20px;
      background-color: #f9f9f9;
      /* Light background for text */
    }

    .constructions .card-title {
      font-size: 1rem;
      /* Adjust font size */
      color: #333;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .constructions .card-body p {
      font-size: 0.9rem;
      color: #555;
      line-height: 1.4;
    }

    .constructions .card-item:hover .card-title {
      color: #E6B00C;
      /* Change title color on hover */
    }



    @media (max-width: 768px) {
      .constructions .card-item {
        width: 100%;
        /* Full width for smaller screens */
        height: fit-content;
      }
    }




    .constructions .card-item:hover {
      transform: scale(1.05);
      /* Slight zoom on hover */
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      /* Enhanced shadow on hover */
    }

    .constructions .card-bg img {
      width: 70px;
      /* Set width to 70px */
      height: 70px;
      /* Set height to 70px */
      object-fit: cover;
      /* Ensures images maintain aspect ratio */
      border-radius: 50%;
      /* Make images circular */
      margin: 10px auto;
      /* Center image */
    }

    .constructions .card-body {
      padding: 20px;
      background-color: #f9f9f9;
      /* Light background for text */
    }

    .constructions .card-title {
      font-size: 1rem;
      /* Adjust font size */
      color: #333;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .constructions .card-body p {
      font-size: 0.9rem;
      color: #555;
      line-height: 1.4;
    }

    .constructions .card-item:hover .card-title {
      color: #E6B00C;
      /* Change title color on hover */
    }

    /* General client name styles */
    .client-name {
      border: 2px solid transparent;
      padding: 15px;
      border-radius: 10px;
      transition: transform 0.3s ease, border-color 0.3s ease;
      font-size: 1.2rem;
      font-weight: bold;
      background-color: white;
      /* Light orange */
      color: black;
      /* Deep orange text */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      cursor: pointer;
    }

    .client-name:hover {
      transform: scale(1.2);

    }



    /* Unique Animations */
    .animate-rotate {
      animation: rotateAnimation 3s infinite linear;
    }

    .animate-scale {
      animation: scaleAnimation 2s infinite ease-in-out;
    }

    .animate-fade {
      animation: fadeAnimation 2.5s infinite ease-in-out;
    }

    .animate-bounce {
      animation: bounceAnimation 1.5s infinite ease;
    }

    /* Keyframes for Animations */
    @keyframes rotateAnimation {
      0% {
        transform: rotate(0deg);
      }

      100% {
        transform: rotate(360deg);
      }
    }

    @keyframes scaleAnimation {

      0%,
      100% {
        transform: scale(1);
      }

      50% {
        transform: scale(1.2);
      }
    }

    @keyframes fadeAnimation {

      0%,
      100% {
        opacity: 1;
      }

      50% {
        opacity: 0.5;
      }
    }

    @keyframes bounceAnimation {

      0%,
      100% {
        transform: translateY(0);
      }

      50% {
        transform: translateY(-10px);
      }
    }

    .tab-pane img {
      height: 350px;
      /* Set your desired fixed height */
      width: 100%;
      /* Ensure the image takes the full width of its container */
      object-fit: cover;
      /* Maintain aspect ratio and fill the container */
      border-radius: 8px;
      /* Optional: adds rounded corners for a polished look */
    }

    .carousel-item img {
      height: 250px;
      /* Set your desired fixed height */
      width: 100%;
      /* Ensure the image spans the full width of the container */
      object-fit: cover;
      /* Maintain the aspect ratio and fill the container */
      border-radius: 8px;
      /* Optional: adds rounded corners for a polished look */
    }

    .portfolio-content img {
      width: 700px;
      height: 250px;
      object-fit: cover;
      /* Ensures the image maintains aspect ratio within the specified dimensions */
    }

    .client-logo img {
      width: 400px !important;
      height: 150px !important;
    }

    @media (max-width: 768px) {
      .client-logo img {
        width: 150px;
        /* Smaller width for mobile */
        height: 250px;
      }
    }
  </style>
  <style>
    .client-text {
      font-size: 1.3rem;
      /* Larger text for emphasis */
      font-weight: bold;
      font-style: italic;
      color: #000;
      /* Black for a strong base */
      position: relative;
      display: inline-block;
      margin: 0;

      /* 3D Layered Effect */
      text-shadow:
        2px 2px 0px #6e6e6e,
        /* Darker bottom layer for depth */
        4px 4px 0px #a9a9a9,
        /* Lighter mid-layer for gradient effect */
        2px 2px 5px rgba(0, 0, 0, 0.2);
      /* Soft shadow for dimension */
    }

    /* Hover Effect */
    .client-text:hover {
      color: #E6B00C;
      /* Orange for highlight */
      text-shadow:
        2px 2px 2px white,
        /* Bright golden layer on hover */
        4px 4px 2px wheat,
        6px 6px 8px white;
      /* Glow effect */
      transform: scale(1.1);
      /* Slight zoom-in */
      transition: all 0.3s ease-in-out;
      /* Smooth transition */
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .client-text {
        font-size: 1.5rem;
        /* Adjust size for mobile screens */
      }
    }

    .logo-image {
      width: 170px;
      /* Adjust width as needed */
      height: 350px;
      /* Maintain aspect ratio */
    }

    @media (max-width: 768px) {
      .logo-image {
        width: 200px;
        /* Adjust for tablets */
        height: 150px;
      }
    }
    #get-started {
    background-color: #f9f9f9;
    padding: 60px 0;
  }

  .get-started .content {
    margin-bottom: 30px;
  }

  .get-started h3 {
    font-size: 28px;
    font-weight: bold;
    margin-bottom: 20px;
  }

  .get-started p {
    font-size: 16px;
    color: #555;
  }

  /* Form input and textarea styling */
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
  <header id="header" class="header d-flex align-items-center sticky-navbar fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      <a href="/" class="logo d-flex align-items-center">
        <!-- Logo Image -->
        <img class="logo-image" src="asset/img/logo name.png" alt="Logo">
      </a>

      <!-- Mobile Navigation Toggle -->
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <!-- Navigation -->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="active">Home</a></li>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3 data-aos="fade-down" style="color: aliceblue;">Welcome to <span>TECHNIBS</span></h2>
              <p data-aos="fade-up"> "Building the Future, One Vision at a Time – Technibs Engineering: Where Innovation
                Meets Excellence in Every Structure."
              </p>
              <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(asset/img/home1.jpg)"></div>
      <div class="carousel-item" style="background-image: url(asset/img/home8.jpg)"></div>
      <div class="carousel-item" style="background-image: url(asset/img/home9.webp)"></div>
      <div class="carousel-item" style="background-image: url(asset/img/home11.png)"></div>
      <div class="carousel-item" style="background-image: url(asset/img/home13.png)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
      <div class="container">

        <div class="row justify-content-between gy-4">

          <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
            <div class="content">
              <h3 style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Building the
                Future, One Project at a Time</h3>
              <p>At Technibs Engineering, we specialize in creating sustainable and innovative construction solutions.
                From large-scale industrial buildings to custom-designed pre-engineered structures, our expertise is
                rooted in delivering quality craftsmanship that exceeds expectations.</p>
              <p>With a team of skilled professionals and a commitment to excellence, we manage every aspect of your
                project, ensuring timely delivery and cost-effective solutions. Whether it’s a commercial or residential
                project, we’re dedicated to transforming your vision into reality.</p>
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade">
          <form action="{{ url('/submit-contact') }}" method="POST" >
          @csrf <!-- CSRF protection -->
            <!-- <form action="forms/quote.php" method="post" class="php-email-form"> -->
              <h3>Get a quote</h3>
              <p>Looking for a construction partner that brings innovation and precision to every project? Reach out to
                us for a detailed quote and let us help you build the future.</p>
              <div class="row gy-3">

                <div class="col-md-12">
                  <input type="text" name="name" class="form-control" placeholder="Name" required>
                </div>

                <div class="col-md-12 ">
                  <input type="email" class="form-control" name="email" placeholder="Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <!-- <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent successfully. Thank you!</div> -->

                  <button type="submit" class="custom-btn" >Get a quote</button>
                </div>

              </div>
            </form>
          </div><!-- End Quote Form -->

        </div>

      </div>
    </section><!-- End Get Started Section -->

    <!-- ======= Constructions Section ======= -->
    <!-- ======= Constructions Section ======= -->
    <section id="constructions" class="constructions">
    <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>Our Expertise in Action</h2>
      <p>Our project portfolio at Technibs Engineering is a powerful testament to the caliber of our work and our dedication to client satisfaction. We have successfully completed numerous projects tailored to our clients' exact specifications, across industries including pre-engineered and industrial buildings.</p>
    </div>

    <div class="row gy-4">
      @foreach ($expertises as $expertise)
        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card-item">
            <!-- Expertise Carousel -->
            <div id="carouselExpertise{{ $expertise->id }}" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                @if($expertise->image1)
                  <div class="carousel-item active">
                    <img src="{{ asset($expertise->image1) }}" class="d-block w-100" alt="Expertise Image 1">
                  </div>
                @endif
                @if($expertise->image2)
                  <div class="carousel-item">
                    <img src="{{ asset($expertise->image2) }}" class="d-block w-100" alt="Expertise Image 2">
                  </div>
                @endif
                @if($expertise->image3)
                  <div class="carousel-item">
                    <img src="{{ asset($expertise->image3) }}" class="d-block w-100" alt="Expertise Image 3">
                  </div>
                @endif
                @if($expertise->image4)
                  <div class="carousel-item">
                    <img src="{{ asset($expertise->image4) }}" class="d-block w-100" alt="Expertise Image 4">
                  </div>
                @endif
                @if($expertise->image5)
                  <div class="carousel-item">
                    <img src="{{ asset($expertise->image5) }}" class="d-block w-100" alt="Expertise Image 5">
                  </div>
                @endif
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExpertise{{ $expertise->id }}" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExpertise{{ $expertise->id }}" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>

            <!-- Expertise Details -->
            <div class="card-body">
              <h4 class="card-title">{{ $expertise->title }}</h4>
              <p>{{ $expertise->description }}</p>
            </div>
          </div>
        </div><!-- End Card Item -->
      @endforeach
    </div>
  </div>
    </section><!-- End Constructions Section -->

    <!-- End Constructions Section -->



    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg" style="padding-top:25px;">
    <div class="container" data-aos="fade-up">
        <div class="section-header mt-5">
            <h2>Our Esteemed Clients</h2>
            <p>We have had the privilege to work with some of the leading companies in the industry. Here are a few of them:</p>
        </div>

        <div class="row gy-4 text-center">
            @foreach($clients as $index => $client)
                <div class="col-lg-3 col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
                    <h4 class="client-text">{{ $client->name }}</h4>
                </div>
            @endforeach
        </div>
    </div>
</section>


    <!-- End Services Section -->


    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
            <!-- Dynamic Background Image -->
            <div class="col-lg-6 img-bg" style="background-image: url('{{ asset('storage/' . $about->background_image) }}');" data-aos="zoom-in" data-aos-delay="100"></div>

            <div class="col-lg-5 d-flex flex-column justify-content-center">
                <!-- Dynamic Heading -->
                <h3 style="font-style: italic;">{{ $about->heading }}</h3>
                
                <!-- Dynamic Description -->
                <p style="font-style: italic;">{{ $about->description }}</p>
                
                <h5 style="font-style: oblique; font-weight: bold;">Why Choose Us?</h5>

                <!-- Dynamic Feature 1 -->
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                    <i class="bi bi-easel flex-shrink-0"></i>
                    <div>
                        <h4>{{ $about->feature1_title }}</h4>
                        <p>{{ $about->feature1_description }}</p>
                    </div>
                </div><!-- End Icon Box -->

                <!-- Dynamic Feature 2 -->
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                    <i class="bi bi-patch-check flex-shrink-0"></i>
                    <div>
                        <h4>{{ $about->feature2_title }}</h4>
                        <p>{{ $about->feature2_description }}</p>
                    </div>
                </div><!-- End Icon Box -->

                <!-- Dynamic Feature 3 -->
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                    <i class="bi bi-brightness-high flex-shrink-0"></i>
                    <div>
                        <h4>{{ $about->feature3_title }}</h4>
                        <p>{{ $about->feature3_description }}</p>
                    </div>
                </div><!-- End Icon Box -->

                <!-- Dynamic Feature 4 -->
                <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                    <i class="bi bi-clock-history flex-shrink-0"></i>
                    <div>
                        <h4>{{ $about->feature4_title }}</h4>
                        <p>{{ $about->feature4_description }}</p>
                    </div>
                </div><!-- End Icon Box -->

            </div>
        </div>

    </div>
</section>

   <!-- End Alt Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features section-bg">
  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2 style="font-style: italic;">Our Services</h2>
    </div>

    <ul class="nav nav-tabs row g-2 d-flex">
      @foreach($offerings as $index => $offering)
      <li class="nav-item col-3">
        <a class="nav-link {{ $index == 0 ? 'active show' : '' }}" data-bs-toggle="tab" data-bs-target="#tab-{{ $index + 1 }}">
          <h4>{{ $offering->name }}</h4>
        </a>
      </li>
      @endforeach
    </ul>

    <div class="tab-content">
      @foreach($offerings as $index => $offering)
      <div class="tab-pane {{ $index == 0 ? 'active show' : '' }}" id="tab-{{ $index + 1 }}">
        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
           <h3>{{ $offering->subtitle }}</h3> <!-- Add subtitle here -->
            <p class="fst-italic">
              {{ $offering->description }}
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> {{ $offering->feature1_title }}</li>
              <li><i class="bi bi-check2-all"></i> {{ $offering->feature2_title }}</li>
              <li><i class="bi bi-check2-all"></i> {{ $offering->feature3_title }}</li>
              <li><i class="bi bi-check2-all"></i> {{ $offering->feature4_title }}</li>
            </ul>
          </div>
          <div class="col-lg-6 order-1 order-lg-2 text-center">
            <img src="{{ asset('storage/'.$offering->image) }}" alt="{{ $offering->name }}" class="img-fluid">
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>   

    <!-- End Features Section -->

    <!-- ======= Our Projects Section ======= -->
    



    <!-- End Our Projects Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section">
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