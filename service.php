<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Maverick International | Services</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/logos/logo1.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

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
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->

    <!-- header Start -->
    <?php require "header.php" ?>
    <!-- header End -->

    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <h1 class="m-0"><img class="" src="img/logos/logo1.png" style="width:50px; height: 50px;"> Maverick</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="service.php" class="nav-item nav-link active">Services</a>
                    <a href="blog.php" class="nav-item nav-link">Blog</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
<!--                            <a href="price.php" class="dropdown-item">Project Plan</a>-->
                            <a href="feature.php" class="dropdown-item">Our features</a>
                            <a href="team.php" class="dropdown-item">Team Members</a>
<!--                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>-->
                        </div>
                    </div>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
            </div>
        </nav>
        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Services</h1>
                    <a href="index.php" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h4 class="fw-bold text-primary text-uppercase">Our Services</h4>
            </div>
            <h1 class="mb-0 text-center">Custom IT Solutions for Your Successful Business</h1>
            <div class="row g-5 mt-2">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="bi bi-journal-album text-white"></i>
                        </div>
                        <h4 class="mb-3">Research & Development</h4>
                        <p class="m-0">We are artificial intelligence researchers and researchers. We are working on new
                            technology that will change the world. We believe in giving people the best of the best, so
                            our products are always top quality and updated with the latest research.
                        </p>
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
                            of your business and make it more efficient.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="bi bi-shop-window text-white"></i>
                        </div>
                        <h4 class="mb-3">Software Product Marketing</h4>
                        <p class="m-0">Traditional software marketing is geared towards corporations who want to sell
                            their products to others. However, not all software businesses are in the business of
                            selling to other businesses. Some software businesses want to market their products internally.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">Web Application Development</h4>
                        <p class="m-0">Our team of experienced, creative and talented web developers create unique website
                            designs that are unique. We can create your ideas in to working reality by using our extensive
                            knowledge on computer and internet technology.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="bi bi-tablet text-white"></i>
                        </div>
                        <h4 class="mb-3">Android Application Development</h4>
                        <p class="m-0">we are provide android design and quality development services to both web apps,
                            mobile devices and IoT. We are committed to delivering innovative solutions tailored to your
                            specific needs, be it the creation of a single app or an entire user experience.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="bi bi-tablet text-white"></i>
                        </div>
                        <h4 class="mb-3">IOS Application Development</h4>
                        <p class="m-0">Our company offers iOS app design and development services with a team of experts
                            who create awesome apps tailored to your business needs. We provide idea generation,
                            designing mockups, and prototypes to meet your expectations.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="bi bi-display-fill text-white"></i>
                        </div>
                        <h4 class="mb-3">Desktop Application Development</h4>
                        <p class="m-0">We provide custom desktop app design and development services to enhance productivity
                            and optimize workflow for businesses. Our team creates exceptional solutions tailored to your needs.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="bi bi-bag-fill text-white"></i>
                        </div>
                        <h4 class="mb-3">POS System Development</h4>
                        <p class="m-0">The company provides a dependable POS system to businesses that can process transactions,
                            handle inventory, and track sales data to enhance their operations. The team of experts offers
                            tailored support to ensure the system runs without any issues.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="bi bi-cart-check-fill text-white"></i>
                        </div>
                        <h4 class="mb-3">E-Commerce Application Development</h4>
                        <p class="m-0">We are providing E-commerce web application design and development. These products
                            will increase the sales for your business. we can help you to create an online store, landing page,
                            mobile app and much more with responsive design that perfectly suits every device.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="bi bi-bezier text-white"></i>
                        </div>
                        <h4 class="mb-3">SEO Optimization</h4>
                        <p class="m-0">The company's SEO services improve website traffic and search engine visibility
                            by using modern tools and strategies. They offer a comprehensive SEO solution that includes
                            keyword research, content creation, and other techniques to help clients achieve their online goals.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Database Management</h4>
                        <p class="m-0">Database Management service is our specialty. We provide you a solution that meets
                            your needs and budget, from small startups to multinationals. Our team of Data Architects and
                            Developers will make sure that your business has the most accurate data possible to manage
                            effectively and efficiently.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="bi bi-laptop text-white"></i>
                        </div>
                        <h4 class="mb-3">Digital Marketing</h4>
                        <p class="m-0">We provide digital marketing services. We help businesses to increase their online
                            presence, drive growth and engage customers. We believe that customer relationships are
                            established on the connections you make with them and through your website.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

    <!-- Vendor Start -->
    <?php require "languages.php" ?>
    <!-- Vendor End -->

    <!-- Footer Start -->
    <?php require "footer.php" ?>
    <!-- Footer End -->

    <!-- Back to Top -->
    <!--    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a-->

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
