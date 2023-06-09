<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CIBER PROTECH | Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <meta content="title here" name="title">
    <meta content="description here" name="description">

    <!--    website details (meta tages)-->
    <meta name='title' content='Website Title Here...'/>
    <meta name='description' content='Website description Here...'>
    <meta property="og:image" content="img/logos/cp1.png"/>

    <!-- Favicon -->
    <link href="img/logos/cp1.png" rel="shortcut icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap"
          rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<!-- loading Start -->
<?php
require "loadAnimation.php";
?>
<!-- loading End -->

<!-- header Start -->
<?php require "header.php" ?>
<!--header End -->

<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand p-0">
            <h1 class="m-0"><img class="" src="img/logos/cp.png" style="width:70px; height: 70px;"> Ciber Protech</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="service.php" class="nav-item nav-link">Services</a>
                <a href="blog.php" class="nav-item nav-link">Blog</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
                        <!--<a href="price.php" class="dropdown-item">Project Plan</a>-->
                        <a href="feature.php" class="dropdown-item">Our features</a>
                        <a href="team.php" class="dropdown-item">Team Members</a>
                        <!--<a href="testimonial.php" class="dropdown-item">Testimonial</a>-->
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                        class="fa fa-search"></i></button>
            <div class="buttons">
                <button class="py-2 px-4 ms-3 btn-hover color-1"><i class="bi bi-person-fill text-white"
                                                                    style="height: 60px;"></i></button>
            </div>
        </div>
    </nav>
</div>
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="w-100" src="img/carousel-1.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">WELLCOME TO</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">CIBER PROTECH Software
                        Solutions</h1>
                    <a href="#" class="btn btn-primary buttons-borders py-md-3 px-md-5 me-3 animated slideInLeft">Read
                        More</a>
                    <a href="contact.php"
                       class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight buttons-borders">Contact Us
                    </a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img class="w-100" src="img/carousel-2.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">WELLCOME TO</h5>
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">Creative & Innovative Software
                        Solution</h1>
                    <a href="#" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft buttons-borders">Read
                        More</a>
                    <a href="contact.php"
                       class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight buttons-borders">Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- Navbar & Carousel End -->

<!-- Facts Start -->
<div class="container-fluid facts py-5 pt-lg-0">
    <div class="container py-5 pt-lg-0">
        <div class="row gx-0">
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                     style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                         style="width: 60px; height: 60px;">
                        <i class="fa fa-users text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Happy Clients</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">10</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                <div class="bg-light shadow d-flex align-items-center justify-content-center p-4"
                     style="height: 150px;">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2"
                         style="width: 60px; height: 60px;">
                        <i class="fa fa-check text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-primary mb-0">Projects Done</h5>
                        <h1 class="mb-0" data-toggle="counter-up">12</h1>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4"
                     style="height: 150px;">
                    <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2"
                         style="width: 60px; height: 60px;">
                        <i class="bi bi-calendar-check text-primary"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="text-white mb-0">Years Of Experience</h5>
                        <h1 class="text-white mb-0" data-toggle="counter-up">3</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts Start -->

<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                </div>
                <h1 class="mb-0">The Best Software Solution With 03 Years of Experience</h1>
                <p class="mb-4 mt-2">We are research based software engineering company that works with new
                    technology and revealing new technologies and sloutions to increase the reliability of people's time
                    and make life easier.</p>
                <p>Talented training software engineers are on hand to provide consultation and solutions to
                    your questions and concerns, with our passion for providing the best customer satisfaction at the
                    fore.</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Top Rated</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professional Staff</h5>
                    </div>
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>24/7 Support</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Best In Industry</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                         style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any question</h5>
                        <h4 class="text-primary mb-0">070 123 55 71</h4>
                    </div>
                </div>
                <a href="contact.php" class=" mt-4 btn10 wow zoomIn " data-wow-delay="0.9s">Contact Us</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn " data-wow-delay="0.9s"
                         src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Features Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
            <h1 class="mb-0">We Are Here to Grow Your Business Exponentially</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                             style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4>Best In Industry</h4>
                        <p class="mb-0">Exceptional quality and innovation make us the best in software industry.</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                             style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h4>Top Rated</h4>
                        <p class="mb-0">Top-rated provider of innovative, reliable, and professional solutions,
                            exceeding client expectations.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s"
                         src="img/feature.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row g-5">
                    <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                             style="width: 60px; height: 60px;">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h4>Professional Staff</h4>
                        <p class="mb-0">Dedicated, trained professionals providing exceptional client service and
                            expertise.</p>
                    </div>
                    <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                        <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3"
                             style="width: 60px; height: 60px;">
                            <i class="bi bi-clock-fill text-white"></i>
                        </div>
                        <h4>24/7 Support</h4>
                        <p class="mb-0">24/7 support for prompt issue resolution and maximum client satisfaction.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features Start -->

<!-- Service Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
            <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="bi bi-journal-album text-white"></i>
                    </div>
                    <h4 class="mb-3">Research & Development</h4>
                    <p class="m-0">We are artificial intelligence researchers and researchers. We are working on
                        new technology that will change the world. We believe in giving people the best of the best,
                        so our products are always top quality and updated with the latest research.</p>
                    <a class="btn arrow-button arrow-button-white arrow-button-animate" href="service.php">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="fa fa-users text-white"></i>
                    </div>
                    <h4 class="mb-3">IT Consulting For Startup Companies With Partnership</h4>
                    <p class="m-0">We provide IT Consultancy services for start-up companies in partnership with the
                        business owner. Our consultants will guide and advise on how to improve the current systems
                        of your business and make it more efficient.</p>
                    <a class="btn arrow-button arrow-button-white arrow-button-animate" href="service.php">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon">
                        <i class="bi bi-shop-window text-white"></i>
                    </div>
                    <h4 class="mb-3">Software Product Marketing</h4>
                    <p class="m-0">Traditional software marketing is geared towards corporations who want to sell their
                        products to others. However, not all software businesses are in the business of selling to other
                        businesses. Some software businesses want to market their products internally.</p>
                    <a class="btn arrow-button arrow-button-white arrow-button-animate" href="service.php">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<!-- Pricing Plan Start -->
<!--    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">-->
<!--        <div class="container py-5">-->
<!--            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">-->
<!--                <h5 class="fw-bold text-primary text-uppercase">Pricing Plans</h5>-->
<!--                <h1 class="mb-0">We are Offering Competitive Prices for Our Clients</h1>-->
<!--            </div>-->
<!--            <div class="row g-0">-->
<!--                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">-->
<!--                    <div class="bg-light rounded">-->
<!--                        <div class="border-bottom py-4 px-5 mb-4">-->
<!--                            <h4 class="text-primary mb-1">Basic Plan</h4>-->
<!--                            <small class="text-uppercase">For Small Size Business</small>-->
<!--                        </div>-->
<!--                        <div class="p-5 pt-0">-->
<!--                            <h1 class="display-5 mb-3">-->
<!--                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>49.00<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>-->
<!--                            </h1>-->
<!--                            <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-primary pt-1"></i></div>-->
<!--                            <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-primary pt-1"></i></div>-->
<!--                            <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-times text-danger pt-1"></i></div>-->
<!--                            <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-times text-danger pt-1"></i></div>-->
<!--                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">-->
<!--                    <div class="bg-white rounded shadow position-relative" style="z-index: 1;">-->
<!--                        <div class="border-bottom py-4 px-5 mb-4">-->
<!--                            <h4 class="text-primary mb-1">Standard Plan</h4>-->
<!--                            <small class="text-uppercase">For Medium Size Business</small>-->
<!--                        </div>-->
<!--                        <div class="p-5 pt-0">-->
<!--                            <h1 class="display-5 mb-3">-->
<!--                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>99.00<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>-->
<!--                            </h1>-->
<!--                            <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-primary pt-1"></i></div>-->
<!--                            <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-primary pt-1"></i></div>-->
<!--                            <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-primary pt-1"></i></div>-->
<!--                            <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-times text-danger pt-1"></i></div>-->
<!--                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">-->
<!--                    <div class="bg-light rounded">-->
<!--                        <div class="border-bottom py-4 px-5 mb-4">-->
<!--                            <h4 class="text-primary mb-1">Advanced Plan</h4>-->
<!--                            <small class="text-uppercase">For Large Size Business</small>-->
<!--                        </div>-->
<!--                        <div class="p-5 pt-0">-->
<!--                            <h1 class="display-5 mb-3">-->
<!--                                <small class="align-top" style="font-size: 22px; line-height: 45px;">$</small>149.00<small class="align-bottom" style="font-size: 16px; line-height: 40px;">/ Month</small>-->
<!--                            </h1>-->
<!--                            <div class="d-flex justify-content-between mb-3"><span>HTML5 & CSS3</span><i class="fa fa-check text-primary pt-1"></i></div>-->
<!--                            <div class="d-flex justify-content-between mb-3"><span>Bootstrap v5</span><i class="fa fa-check text-primary pt-1"></i></div>-->
<!--                            <div class="d-flex justify-content-between mb-3"><span>Responsive Layout</span><i class="fa fa-check text-primary pt-1"></i></div>-->
<!--                            <div class="d-flex justify-content-between mb-2"><span>Cross-browser Support</span><i class="fa fa-check text-primary pt-1"></i></div>-->
<!--                            <a href="" class="btn btn-primary py-2 px-4 mt-4">Order Now</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!-- Pricing Plan End -->

<!-- Testimonial Start -->
<!--    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">-->
<!--        <div class="container py-5">-->
<!--            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">-->
<!--                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>-->
<!--                <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>-->
<!--            </div>-->
<!--            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">-->
<!--                <div class="testimonial-item bg-light my-4">-->
<!--                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">-->
<!--                        <img class="img-fluid rounded" src="img/testimonial-1.jpg" style="width: 60px; height: 60px;" >-->
<!--                        <div class="ps-4">-->
<!--                            <h4 class="text-primary mb-1">Client Name</h4>-->
<!--                            <small class="text-uppercase">Profession</small>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="pt-4 pb-5 px-5">-->
<!--                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="testimonial-item bg-light my-4">-->
<!--                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">-->
<!--                        <img class="img-fluid rounded" src="img/testimonial-2.jpg" style="width: 60px; height: 60px;" >-->
<!--                        <div class="ps-4">-->
<!--                            <h4 class="text-primary mb-1">Client Name</h4>-->
<!--                            <small class="text-uppercase">Profession</small>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="pt-4 pb-5 px-5">-->
<!--                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="testimonial-item bg-light my-4">-->
<!--                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">-->
<!--                        <img class="img-fluid rounded" src="img/testimonial-3.jpg" style="width: 60px; height: 60px;" >-->
<!--                        <div class="ps-4">-->
<!--                            <h4 class="text-primary mb-1">Client Name</h4>-->
<!--                            <small class="text-uppercase">Profession</small>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="pt-4 pb-5 px-5">-->
<!--                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="testimonial-item bg-light my-4">-->
<!--                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">-->
<!--                        <img class="img-fluid rounded" src="img/testimonial-4.jpg" style="width: 60px; height: 60px;" >-->
<!--                        <div class="ps-4">-->
<!--                            <h4 class="text-primary mb-1">Client Name</h4>-->
<!--                            <small class="text-uppercase">Profession</small>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="pt-4 pb-5 px-5">-->
<!--                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!-- Testimonial End -->

<!-- Team Start -->
<?php require "members.php" ?>
<!-- Team End -->

<!-- Blog Start -->
<!--    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">-->
<!--        <div class="container py-5">-->
<!--            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">-->
<!--                <h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>-->
<!--                <h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>-->
<!--            </div>-->
<!--            <div class="row g-5">-->
<!--                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">-->
<!--                    <div class="blog-item bg-light rounded overflow-hidden">-->
<!--                        <div class="blog-img position-relative overflow-hidden">-->
<!--                            <img class="img-fluid" src="img/blog-1.jpg" alt="">-->
<!--                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>-->
<!--                        </div>-->
<!--                        <div class="p-4">-->
<!--                            <div class="d-flex mb-3">-->
<!--                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>-->
<!--                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>-->
<!--                            </div>-->
<!--                            <h4 class="mb-3">How to build a website</h4>-->
<!--                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>-->
<!--                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">-->
<!--                    <div class="blog-item bg-light rounded overflow-hidden">-->
<!--                        <div class="blog-img position-relative overflow-hidden">-->
<!--                            <img class="img-fluid" src="img/blog-2.jpg" alt="">-->
<!--                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>-->
<!--                        </div>-->
<!--                        <div class="p-4">-->
<!--                            <div class="d-flex mb-3">-->
<!--                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>-->
<!--                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>-->
<!--                            </div>-->
<!--                            <h4 class="mb-3">How to build a website</h4>-->
<!--                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>-->
<!--                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">-->
<!--                    <div class="blog-item bg-light rounded overflow-hidden">-->
<!--                        <div class="blog-img position-relative overflow-hidden">-->
<!--                            <img class="img-fluid" src="img/blog-3.jpg" alt="">-->
<!--                            <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="">Web Design</a>-->
<!--                        </div>-->
<!--                        <div class="p-4">-->
<!--                            <div class="d-flex mb-3">-->
<!--                                <small class="me-3"><i class="far fa-user text-primary me-2"></i>John Doe</small>-->
<!--                                <small><i class="far fa-calendar-alt text-primary me-2"></i>01 Jan, 2045</small>-->
<!--                            </div>-->
<!--                            <h4 class="mb-3">How to build a website</h4>-->
<!--                            <p>Dolor et eos labore stet justo sed est sed sed sed dolor stet amet</p>-->
<!--                            <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!-- Blog Start -->

<!-- Vendor Start -->
<?php require "languages.php" ?>
<!-- Vendor End -->

<!-- Footer Start -->
<?php require "footer.php" ?>
<!-- Footer End -->

<!-- Back to Top -->
<!--    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>-->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>

<!--Start of Tawk.to Script-->
<?php require "message.php" ?>
<!--End of Tawk.to Script-->

</body>

</html>
