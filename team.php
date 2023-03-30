<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Maverick International | Team Members</title>
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


    <!-- Topbar Start -->
    <?php require "header.php"?>
    <!-- Topbar End -->


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
                    <a href="service.php" class="nav-item nav-link">Services</a>
                    <a href="blog.php" class="nav-item nav-link">Blog</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="price.php" class="dropdown-item">Project Plan</a>
                            <a href="feature.php" class="dropdown-item">Our features</a>
                            <a href="team.php" class="dropdown-item active">Team Members</a>
                            <a href="testimonial.php" class="dropdown-item">Testimonial</a>
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
                    <h1 class="display-4 text-white animated zoomIn">Team Members</h1>
                    <a href="index.php" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="" class="h5 text-white">Team Members</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Team Start -->
    <?php require "members.php"?>

<!--    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">-->
<!--        <div class="container py-5">-->
<!--            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">-->
<!--                <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>-->
<!--                <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>-->
<!--            </div>-->
<!--            <div class="row g-5 d-flex justify-content-center align-items-lg-center">-->
<!--                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">-->
<!--                    <div class="team-item bg-light rounded overflow-hidden">-->
<!--                        <div class="d-flex justify-content-center align-items-lg-center mt-3 rounded-circle team-img position-relative overflow-hidden">-->
<!--                            <img class="prof_img rounded-circle" src="img/profile/poojitha.jpg" alt="">-->
<!--                            <div class="team-social">-->
<!--                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>-->
<!--                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="text-center py-4">-->
<!--                            <h4 class="text-primary">Poojitha Irosha</h4>-->
<!--                            <p class="text-uppercase m-0">CEO</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.6s">-->
<!--                    <div class="team-item bg-light rounded overflow-hidden">-->
<!--                        <div class="d-flex justify-content-center align-items-lg-center mt-3 rounded-circle team-img position-relative overflow-hidden">-->
<!--                            <img class="prof_img rounded-circle" src="img/profile/Menuka.jpg" alt="">-->
<!--                            <div class="team-social">-->
<!--                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>-->
<!--                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="text-center py-4">-->
<!--                            <h4 class="text-primary">Menuka Malinda</h4>-->
<!--                            <p class="text-uppercase m-0">Director</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">-->
<!--                    <div class="team-item bg-light rounded overflow-hidden">-->
<!--                        <div class="d-flex justify-content-center align-items-lg-center mt-3 rounded-circle team-img position-relative overflow-hidden">-->
<!--                            <img class="prof_img rounded-circle" src="img/profile/Shehan.jpg" alt="">-->
<!--                            <div class="team-social">-->
<!--                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>-->
<!--                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="text-center py-4">-->
<!--                            <h4 class="text-primary">Shehan Kaushalya</h4>-->
<!--                            <p class="text-uppercase m-0">Director</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row mt-2 g-5 d-flex justify-content-center align-items-lg-center">-->
<!--                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">-->
<!--                    <div class="team-item bg-light rounded overflow-hidden">-->
<!--                        <div class="d-flex justify-content-center align-items-lg-center mt-3 rounded-circle team-img position-relative overflow-hidden">-->
<!--                            <img class="prof_img rounded-circle" src="img/profile/Chathumini.jpg" alt="">-->
<!--                            <div class="team-social">-->
<!--                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>-->
<!--                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="text-center py-4">-->
<!--                            <h4 class="text-primary">Chathumini Kahathuduwa</h4>-->
<!--                            <p class="text-uppercase m-0">Director</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.6s">-->
<!--                    <div class="team-item bg-light rounded overflow-hidden">-->
<!--                        <div class="d-flex justify-content-center align-items-lg-center mt-3 rounded-circle team-img position-relative overflow-hidden">-->
<!--                            <img class="prof_img rounded-circle" src="img/profile/Amandi.jpg" alt="">-->
<!--                            <div class="team-social">-->
<!--                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>-->
<!--                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="text-center py-4">-->
<!--                            <h4 class="text-primary">Shashini Amandi</h4>-->
<!--                            <p class="text-uppercase m-0">Director</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">-->
<!--                    <div class="team-item bg-light rounded overflow-hidden">-->
<!--                        <div class="d-flex justify-content-center align-items-lg-center mt-3 rounded-circle team-img position-relative overflow-hidden">-->
<!--                            <img class="prof_img rounded-circle" src="img/profile/Kavindi.jpg" alt="">-->
<!--                            <div class="team-social">-->
<!--                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>-->
<!--                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="text-center py-4">-->
<!--                            <h4 class="text-primary">Kavindi Lakshani</h4>-->
<!--                            <p class="text-uppercase m-0">Director</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="row mt-2 g-5 d-flex justify-content-center align-items-lg-center">-->
<!--                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.3s">-->
<!--                    <div class="team-item bg-light rounded overflow-hidden">-->
<!--                        <div class="d-flex justify-content-center align-items-lg-center mt-3 rounded-circle team-img position-relative overflow-hidden">-->
<!--                            <img class="prof_img rounded-circle" src="img/profile/praboth.jpg" alt="">-->
<!--                            <div class="team-social">-->
<!--                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>-->
<!--                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="text-center py-4">-->
<!--                            <h4 class="text-primary">Praboth Charith</h4>-->
<!--                            <p class="text-uppercase m-0">Director</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.6s">-->
<!--                    <div class="team-item bg-light rounded overflow-hidden">-->
<!--                        <div class="d-flex justify-content-center align-items-lg-center mt-3 rounded-circle team-img position-relative overflow-hidden">-->
<!--                            <img class="prof_img rounded-circle" src="img/profile/Kamalajeewa.jpg" alt="">-->
<!--                            <div class="team-social">-->
<!--                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>-->
<!--                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="text-center py-4">-->
<!--                            <h4 class="text-primary">Kamalajeewa Dilshan</h4>-->
<!--                            <p class="text-uppercase m-0">Director</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="col-lg-3 wow slideInUp" data-wow-delay="0.9s">-->
<!--                    <div class="team-item bg-light rounded overflow-hidden">-->
<!--                        <div class="d-flex justify-content-center align-items-lg-center mt-3 rounded-circle team-img position-relative overflow-hidden">-->
<!--                            <img class="prof_img rounded-circle" src="img/profile/Ruveen.jpg" alt="">-->
<!--                            <div class="team-social">-->
<!--                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>-->
<!--                                <a class="btn btn-lg btn-primary rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="text-center py-4">-->
<!--                            <h4 class="text-primary">Ruvindu Pathirana</h4>-->
<!--                            <p class="text-uppercase m-0">Director</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
    <!-- Team End -->


    <!-- Vendor Start -->
   <?php require "languages.php"?>
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
    <?php require "message.php"?>
    <!--End of Tawk.to Script-->
</body>

</html>
