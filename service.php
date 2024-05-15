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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="service.php" class="nav-item nav-link active">Research</a>
                    <a href="contact.php" class="nav-item nav-link">Contact</a>
                </div>
                
                <!-- <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton> -->
  
                <?php
                session_start();
                if( $_SESSION['aid']!=""){
                ?>
                    <a href="edit-profile.php" class="nav-item nav-link">Hello <?php echo $_SESSION['auth_info']['firstname'];?>!</a>
                      
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Add custom CSS for SweetAlert -->
    <style>
        /* Custom style for SweetAlert popup */
        .logout-sweetalert .swal2-popup {
            background-color: #68a5e2;
            border-radius: 10px;
        }
        .logout-sweetalert .swal2-title {
            color: #ffffff; /* White color */
        }
        /* Custom style for SweetAlert buttons */
        .logout-sweetalert .swal2-confirm {
            background-color: #E74C3C;
            border-color: #007bff;
        }
        .logout-sweetalert .swal2-cancel {
            background-color: #6c757d;
            border-color: #6c757d;
            margin-left: 20px;
        }
    </style>


<a href="#" class="btn btn-primary py-2 px-4 ms-3" onclick="return confirmLogout();">Logout</a>

<script>
    function confirmLogout() {
        // Use SweetAlert for confirmation
        Swal.fire({
            title: 'Are you sure you want to logout?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes',
            cancelButtonText: 'No',
            customClass: {
                popup: 'logout-sweetalert'
            },
            background: '#68a5e2'
        }).then((result) => {
            if (result.isConfirmed) {
                // If user clicks "Yes", proceed with logout
                window.location.href = 'system/users/logout.php';
            }
        });
        // Prevent default action of the anchor tag
        return false;
    }
</script>
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
                    <h1 class="display-4 text-white animated zoomIn">Research Paper</h1>
                    <a class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a class="h5 text-white">Research </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Research Paper</h5>
                <h1 class="mb-0">"Welcome Researchers: Explore, Collaborate, Discover"</h1>
            </div>
            <form method="POST" action="" id="searchForm">
                <div class="search-bar text-center">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white border-right-0 rounded-left"><i class="fas fa-search search-icon text-muted"></i></span>
                        </div>
                        <input name="search" type="text" class="form-control border-left-0 rounded-right" id="searchInput" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn btn-primary rounded-left" type="button" id="searchButton">Search</button>
                            <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false">
                                    Filter
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <?php
                                    include('system/dist/dbcon.php');
                                    $query = mysqli_query($con, "SELECT * FROM city") or die(mysqli_error($con));

                                    while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <a class="dropdown-item" href="read2.php?course=<?php echo $row['name']; ?>"><?php echo $row['name']; ?></a>
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="container">
                <form method="POST" id="filterForm" action="filterForm()"> 
                    <div class="row">
                        <div class="col-md-3">
                            <div class="sidebar">
                                <h3 class="filter-title">Category Filter</h3>
                                <div class="form-group">
                                    <label for="yearFrom">Year From:</label>
                                    <select name="year1" type="text" id="yearFrom" class="form-control">
                                        <option>select option-</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="yearTo">Year To:</label>
                                    <select name="year2" type="text" id="yearTo" class="form-control">
                                        <option>select option-</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Program:</label><br>
                                    <select name="program" type="text" id="program" class="form-control">
                                        <option>select option-</option>
                                        <?php
                                        include('system/dist/dbcon.php');
                                        $query = mysqli_query($con, "select * from city ") or die(mysqli_error());
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                            <option><?php echo $row['name'] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>          	
                                </div>
                                <div class="form-group">
                                    <label for="author">Author:</label>
                                    <input type="author" id="author" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="keyword">Keyword:</label>
                                    <input type="keyword" id="keyword" class="form-control">
                                </div>
                                <button class="btn btn-light">Clear</button>      
                                <button type="submit" class="btn btn-primary">Apply Filters</button>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <!-- Start of loop to display research items -->
                            <?php
                        include('system/dist/dbcon.php');
                        $query = mysqli_query($con, "select * from research ") or die(mysqli_error());
                        $foundResults = false; // Variable to track if any results are found

                        while ($row = mysqli_fetch_array($query)) {
                            ?>
                            <!-- Main content area with data attributes for filtering -->
                            <div class="research-item" data-year="<?php echo $row['year1']; ?>" data-program="<?php echo $row['course']; ?>" data-author="<?php echo $row['author']; ?>" data-keyword="<?php echo $row['title'] . ' ' . $row['abstract']; ?>">
                                <!-- Display research item content -->
                                <h2 class="titleD"><a href="read5.php?file=<?php echo $row['file']?>&id=<?php echo $row['id']?>" style="color: #0e1e83;"><?php echo $row['title']?></a></h2>
                                <p><strong>Abstract:</strong>
                                    <?php echo mb_strimwidth($row['abstract'], 0, 200, "..."); ?>
                                    <a href="read.php?id=<?php echo $row['id']?>">Read More</a>
                                </p>
                                <p class="authorNames"><strong>Author:</strong> <?php echo $row['author']?></p>
                                <p><strong>Year:</strong> <?php echo $row['year1']?></p>
                                <p><strong>Adviser:</strong> <?php echo $row['adviser']?></p>
                                <p><strong>Program:</strong> <?php echo $row['course']?></p>
                                <div>
                                    <a href="read5.php?file=<?php echo $row['file']?>&id=<?php echo $row['id']?>" class="btn btn-primary">View</a>
                                    <a download="http://localhost/public_html/system/users/extracted_files/<?php echo $row['file']?>.zip" href="http://localhost/public_html/system/users/extracted_files/<?php echo $row['file']?>.zip" class="btn btn-success">Download</a>
                                </div>
                            </div>
                            <?php
                            $foundResults = true; // Results found
                        }

                        // Display message if no results found
                        if (!$foundResults) {
                            echo "<p>No results found.</p>";
                        }

                        // Close connection
                        mysqli_close($con);
                        ?>



                                                        <!-- End of loop to display research items -->
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
    <!-- Service End -->

    

 <!-- Back to Top -->
 
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
    <a href="#top" class="back-to-top"><span class="visually-hidden">Back to Top</span></a>

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
        color: #1573d0;
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

    .back-to-top:hover,
    .back-to-top:focus {
        background-color: rgba(0, 57, 118, 1);
    }

    /*This is hides the Back to Top text in the link, but keeps it for accessibility purposes */
    .visually-hidden {
        position: absolute !important;
        height: 1px;
        width: 1px;
        overflow: hidden;
        clip: rect(1px 1px 1px 1px); /* IE6, IE7 */
        clip: rect(1px, 1px, 1px, 1px);
    }
</style>

<script>
    jQuery(document).ready(function() {
        // This number controls how far down when scrolling the arrow appears //
        var offset = 250;
        jQuery(window).scroll(function() {
            if (jQuery(this).scrollTop() > offset) {
                jQuery('.back-to-top').fadeIn();
            } else {
                jQuery('.back-to-top').fadeOut();
            }
        });

        jQuery('.back-to-top').click(function(event) {
            event.preventDefault();
            // Scroll immediately to the top //
            jQuery('html, body').animate({scrollTop: 0});
            return false;
        })
    });
</script>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
        document.getElementById('filterForm').addEventListener('submit', function(event) {
            event.preventDefault(); 
            filterResearch();
        });

        document.getElementById('searchButton').addEventListener('click', function() {
            filterButtonSearch();
        });

        document.addEventListener("DOMContentLoaded", function() {
            var dropdownItems = document.querySelectorAll('.dropdown-item.filter-option');
            dropdownItems.forEach(function(item) {
                item.addEventListener('click', function(event) {
                    event.preventDefault();
                    var filterValue = item.getAttribute('data-filter');
                    filterDropDown(filterValue);
                });
            });
        });

        function filterResearch() {
            var yearFrom = document.getElementById("yearFrom").value;
            var yearTo = document.getElementById("yearTo").value;
            var program = document.getElementById("program").value;
            var author = document.getElementById("author").value;
            var keyword = document.getElementById("keyword").value;
            // all research item
            var researchItems = document.getElementsByClassName("research-item");
            var noResultsMessage = document.getElementById("noResultsMessage");

            var found = false;

            for (var i = 0; i < researchItems.length; i++) {
                var item = researchItems[i];
                var year = item.getAttribute("data-year");
                var itemProgram = item.getAttribute("data-program").toLowerCase();
                var itemAuthor = item.getAttribute("data-author");
                var itemKeyword = item.getAttribute("data-keyword");

                var showItem =
                    (year >= yearFrom || yearFrom === "select option-") &&
                    (year <= yearTo || yearTo === "select option-") &&
                    (itemProgram === program.toLowerCase() || program === "select option-") &&
                    (itemAuthor.toLowerCase().includes(author.toLowerCase()) || author === "") &&
                    (itemKeyword.toLowerCase().includes(keyword.toLowerCase()) || keyword === "");

                // show and hide
                if (showItem) {
                    item.style.display = "block";
                    found = true;
                } else {
                    item.style.display = "none";
                }
            }

            // Display message if no results found
            if (!found) {
                noResultsMessage.style.display = "block";
            } else {
                noResultsMessage.style.display = "none";
            }
        }

        function filterButtonSearch() {
            var searchInput = document.getElementById('searchInput').value.toLowerCase();
            
            var researchItems = document.getElementsByClassName("research-item");
            var noResultsMessage = document.getElementById("noResultsMessage");

            var found = false;

            for (var i = 0; i < researchItems.length; i++) {
                var item = researchItems[i];
                var itemTitle = item.getElementsByTagName('h2')[0].innerText.toLowerCase(); // Get research item title

                // show/hide 
                if (itemTitle.includes(searchInput)) {
                    item.style.display = "block";
                    found = true;
                } else {
                    item.style.display = "none";
                }
            }

            // Display message if no results found
            if (!found) {
                noResultsMessage.style.display = "block";
            } else {
                noResultsMessage.style.display = "none";
            }
        }

        function filterDropDown(filterValue) {
            
            var researchItems = document.getElementsByClassName("research-item");
            var noResultsMessage = document.getElementById("noResultsMessage");

            var found = false;

            for (var i = 0; i < researchItems.length; i++) {
                var item = researchItems[i];
                var itemProgram = item.getAttribute("data-program").toLowerCase();

                // show/hide
                if (filterValue === 'all' || filterValue === itemProgram) {
                    item.style.display = "block";
                    found = true;
                } else {
                    item.style.display = "none";
                }
            }

            // Display message if no results found
            if (!found) {
                noResultsMessage.style.display = "block";
            } else {
                noResultsMessage.style.display = "none";
            }
        }
    </script>
</body>

</html>
