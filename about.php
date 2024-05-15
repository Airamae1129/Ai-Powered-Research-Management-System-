<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Eastwoods Research Hub -RMS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
    <link href="https://getflywheel.com/layout/add-sticky-back-top-button-website/" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->




    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.php" class="navbar-brand p-0">
                <h1 class="m-0"><img src="./img/logo.png"style="width: 80px; height: auto;"></i>Eastwoods Research Hub</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
     <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="index.php" class="nav-item nav-link ">Home</a>
                    <a href="about.php" class="nav-item nav-link active">About</a>
                    <a href="service.php" class="nav-item nav-link">Research</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                
                <!-- <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                 -->
                
                
                <?php
                session_start();
                if( $_SESSION['aid']!=""){
                ?>
            <a href="edit-profile.php" class="nav-item nav-link">Hello <?php echo $_SESSION['auth_info']['firstname'];?>!</a>
                      
                              <a href="system/users/logout.php" class="btn btn-primary py-2 px-4 ms-3">Logout</a>
                      <?php
                }else{
                ?>
                
                <a href="system/" class="btn btn-primary py-2 px-4 ms-3">Log In</a>
                
                         <?php
                }
                ?>
                
            </div>
        </nav>

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">About Us</h1>
                    <a  class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a class="h5 text-white">About</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Full Screen Search Start -->
  <form method="POST" action="read3.php"> 

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" name="search" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
    <!-- Full Screen Search End -->
<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title position-relative pb-3 mb-5">
                    <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                    <h1 class="mb-0">Discovering Frontiers: Unveiling the Essence of Eastwoods Research Hub </h1>
                </div>
                <p class="mb-4">At Eastwoods Research Hub, we're all about exploring the unknown with passion and creativity. Our goal is to fuel innovation by providing a space where ideas thrive and simplicity meets uniqueness. Join us on our journey of discovery and let's shape the future together.</p>
                <div class="row g-0 mb-3">
                    <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Explration</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Collaboration</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Innovation</h5>
                        <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Secured Research Paper</h5>
                    </div>
                </div>
                <a href="service.php" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Get Started</a>
            </div>
            <div class="col-lg-5" style="min-height: 500px;">
    <div class="position-relative h-100">
        <img class="position-absolute w-100 h-auto rounded wow" data-wow-delay="0.9s" src="img/about-php.gif" style="object-fit: cover;">
    </div>
</div>

        </div>
    </div>
</div>
<!-- About End -->


       <!-- Footer Start -->
       <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                    <a href="index.html" class="navbar-brand">
                            <h5 class="m-0"><img src="./img/logo.png"style="width: 60px; height: auto;"></i>Eastwoods Research Hub</h5>
                        </a>
                        <p class="mt-2 mb-4">"Discover. Create. Innovate. Welcome to Eastwoods Research Hub, where curiosity leads to creativity and innovation. Join us in shaping the future together."</p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Get In Touch</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">A.H. Banzon Street, Ibayo, City of Balanga, Bataan, 2100</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">eastwoodsrms@gmail.com</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+047 791 2741</p>
                            </div>
               
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Quick Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="index.php"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                                <a class="text-light mb-2" href="about.php"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                                <a class="text-light mb-2" href="service.php"><i class="bi bi-arrow-right text-primary me-2"></i>Research</a>
                                <a class="text-light" href="contact.php"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Eastwoods Research Hub</a>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#top" class="back-to-top"><span class="visually-hidden"Back to Top</span></a>
    <style>
        .back-to-top {
	margin: 0;
	position: fixed;
	bottom: 0;
	right: 0;
	margin-right: 40px;
	margin-bottom: 40px;
    padding-bottom: 50px;
	width: 50px;
	height: 50px;
	z-index: 100;
	display: none;
	text-decoration: none;
	color:#1573d0;
	/*Creates the colored box around the arrow (optional) */
	background-color: #1573d0;
	/* Don't like this arrow type?  Paste in your own image URL here instead */
	background-image: url("https://s3-us-west-2.amazonaws.com/s.cdpn.io/259273/up-arrow2.svg");
	/* Controls the size of the arrow inside the box */
	background-size: 40% auto;
	background-repeat: no-repeat;
	background-position: center center;
	transition: .1s background-color ease-in-out;
}

.back-to-top:hover, .back-to-top:focus {
	background-color: rgba(0,57,118,1);
}
 
/*This is hides the Back to Top text in the link, but keeps it for accessibility purposes */
.visually-hidden {
		position: absolute !important;
    height: 1px; width: 1px; 
    overflow: hidden;
    clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
    clip: rect(1px, 1px, 1px, 1px);
}
    </style>
<script>
jQuery(document).ready(function() {
// This number controls now far down when scrolling the arrow appears //
var offset = 250;
// This nubmer controls the duration of the fade in and out //
var duration = 100;
jQuery(window).scroll(function() {
	if (jQuery(this).scrollTop() > offset) {
	jQuery('.back-to-top').fadeIn(duration);
} else {
	jQuery('.back-to-top').fadeOut(duration);
}
});
 
jQuery('.back-to-top').click(function(event) {
	event.preventDefault();
	jQuery('html, body').animate({scrollTop: 0}, duration);
	return false;
	})
});
</script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://getflywheel.com/layout/add-sticky-back-top-button-website/" rel="stylesheet">
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>