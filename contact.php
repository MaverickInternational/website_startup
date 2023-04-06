<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ciber Protech | Contact Us</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/logos/logo1.png" rel="icon">

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
<?php require "loading.php"?>
<!-- loading End -->

<!-- header Start -->
<?php require "header.php" ?>
<!-- header End -->

<!-- Navbar Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand p-0">
            <h1 class="m-0"><img class="" src="img/logos/logo1.png" style="width:50px; height: 50px;"> Ciber Protech</h1>
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
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu m-0">
<!--                        <a href="price.php" class="dropdown-item">Project Plan</a>-->
                        <a href="feature.php" class="dropdown-item">Our features</a>
                        <a href="team.php" class="dropdown-item">Team Members</a>
<!--                        <a href="testimonial.php" class="dropdown-item">Testimonial</a>-->
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link active">Contact</a>
            </div>
            <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i
                        class="fa fa-search"></i></butaton>
        </div>
    </nav>

    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Contact Us</h1>
                <a href="index.php" class="h5 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Contact</a>
            </div>
        </div>
    </div>
</div>
<!-- Navbar End -->

<!-- Contact Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
            <h1 class="mb-0">If You Have Any Query, Feel Free To Contact Us</h1>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                         style="width: 60px; height: 60px;">
                        <i class="fa fa-phone-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Call to ask any question</h5>
                        <h6 class="text-primary mb-0">070 123 55 71</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                         style="width: 60px; height: 60px;">
                        <i class="fa fa-envelope-open text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Email to get free quote</h5>
                        <h6 class="text-primary mb-0">ciberprotechtechnology@gmail.com</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                    <div class="bg-primary d-flex align-items-center justify-content-center rounded"
                         style="width: 60px; height: 60px;">
                        <i class="fa fa-map-marker-alt text-white"></i>
                    </div>
                    <div class="ps-4">
                        <h5 class="mb-2">Visit our office</h5>
                        <h6 class="text-primary mb-0">Colombo, Sri Lanka</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label>Your Name</label>
                        <input type="text" id="name" required class="form-control border-0 bg-light px-4"
                               placeholder="Your Name" style="height: 55px;">
                    </div>
                    <div class="col-md-6">
                        <label>Your Email</label>
                        <input type="email" id="email" required class="form-control border-0 bg-light px-4"
                               placeholder="Your Email" style="height: 55px;">
                    </div>
                    <div class="col-12">
                        <label>Subject</label>
                        <input type="text" id="subject" required class="form-control border-0 bg-light px-4"
                               placeholder="Subject" style="height: 55px;">
                    </div>
                    <div class="col-12">
                        <label>Message</label>
                        <textarea id="msg" class="form-control required border-0 bg-light px-4 py-3" rows="4"
                                  placeholder="Message"></textarea>
                    </div>
                    <div class="col-12">
                        <button id="submit1" class="btn10 w-100 py-3">Send Message</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                <iframe lass="col-lg-6 wow slideInUp" data-wow-delay="0.6s"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126743.58585958437!2d79.78616414163588!3d6.922003946889596!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae253d10f7a7003%3A0x320b2e4d32d3838d!2sColombo!5e0!3m2!1sen!2slk!4v1679926060500!5m2!1sen!2slk"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

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

<script type="text/javascript">
    $("#submit1").click(function () {
        const name = $("#name");
        const subject = $("#subject");
        const email = $("#email");
        const message = $("#msg");

        if (name.val() == "") {
            name.focus();
        } else if (email.val() == "") {
            email.focus();
        } else if (message.val() == "") {
            message.focus();
        } else {
            let subject1 = subject.val();
            if (subject.val() == "") {
                subject1 = "User didn't entered subject";
            } else {
                subject1 = subject.val();
            }
            $.ajax({
                url: "https://formsubmit.co/ajax/maverickinternationalsl@gmail.com",
                method: "POST",
                data: {
                    name: name.val(),
                    email: email.val(),
                    subject: subject1,
                    message: message.val()
                }, success: (data) => console.log(data),
                error: (err) => console.log(err),
                dataType: "json"
            });

            console.log(name.val() + " | " + subject1 + " | " + email.val() + " | " + message.val());
        }

    });
</script>
</body>

</html>
