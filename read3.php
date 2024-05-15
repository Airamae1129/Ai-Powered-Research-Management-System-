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
            <a href="index.html" class="navbar-brand p-0">
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
                
                <!-- <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                 -->
                <?php
                session_start();
                if( $_SESSION['aid']!=""){
                ?>
                      <a href="" class="nav-item nav-link">Hello <?php echo $_SESSION['auth_info']['firstname'];?>!</a>
                      
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
                    <h1 class="display-4 text-white animated zoomIn">Research Paper</h1>
                    <a href="./index.php" class="h5 text-white">Home</a>
                    <i class="far fa-circle text-white px-2"></i>
                    <a href="./service.php" class="h5 text-white">Research </a>
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

   <!-- Service Start -->
   <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-primary text-uppercase">Research Paper</h5>
            <h1 class="mb-0">"Welcome Researchers: Explore, Collaborate, Discover"</h1>
            </div>
        </div>
        <div class="container">
               <form method="POST" action="read3.php">   <center>
                <div class="search-bar">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white border-right-0 rounded-left"><i class="fas fa-search search-icon text-muted"></i></span>
                        </div>
                  
                        <input name="search" type="text" class="form-control border-left-0 rounded-right" placeholder="Search...">
                        <div class="input-group-append">
                            <button class="btn btn-primary rounded-left" type="submit">Search</button>
                         
                            <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Filter
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    
                                                                          				<?php


include('system/dist/dbcon.php');
$query=mysqli_query($con,"select * from  city ")or die(mysqli_error());
while($row=mysqli_fetch_array($query)){  
    

?>
              
              
                        <a class="dropdown-item" href="read2.php?course=<?php echo $row['name']?>"><?php echo $row['name']?></a>
                    
                     
        
  
                             				<?php


}


?>
                                    
                                    
                       
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </center>   </form>
                </div>
                <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 mt-4"> <!-- Added mt-4 for margin-top -->
            <style>
                .unselectable {
                    -webkit-user-select: none;
                    -webkit-touch-callout: none;
                    -moz-user-select: none;
                    -ms-user-select: none;
                    user-select: none;
                    color: #cc0000;
                }
            </style>
            <div class="unselectable">
                <?php
                include('system/dist/dbcon.php');
                $id=$_POST['search'];
                $query=mysqli_query($con,"select * from  research where title LIKE '%$id%' || abstract LIKE '%$id%'")or die(mysqli_error());
                while($row=mysqli_fetch_array($query)){  
                ?>
                <!-- Main content area -->
                <div class="research-item">
                    <h2 class="titleD"><a href="read5.php?file=<?php echo $row['file']?>&id=<?php echo $row['id']?>" style="color: #0e1e83;"><?php echo $row['title']?></a></h2>
                    <p><strong>Abstract:</strong> 
                        <?php
                        echo mb_strimwidth($row['abstract'], 0, 200, "...");
                        //Hello W...
                        ?>
                        <a href="read.php?id=<?php echo $row['id']?>">Read More</a>
                    </p>
                    <p><strong>Author:</strong> <?php echo $row['author']?></p>
                    <p><strong>Year:</strong> <?php echo $row['year1']?></p>
                    <p><strong>Adviser:</strong> <?php echo $row['adviser']?></p>
                    <p><strong>Program:</strong> <?php echo $row['course']?></p>
                    <div>
                        <a href="read5.php?file=<?php echo $row['file']?>" class="btn btn-primary">View</a>
                        <a href="http://localhost/public_html/system/users/category/<?php echo $row['file']?>" class="btn btn-success">Download</a>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <<div class="container">
    <div class="fixed-bottom mr-md-3 mb-md-3" id="floatingButton">
        <div class="row justify-content-md-end">
            <div class="col-md-9 text-right">
                <a href="service.php" class="btn btn-dark" id="researchButton">Go to Researches</a>
            </div>
        </div>
    </div>
</div>

<style>
body {
    overflow-x: hidden; /* Prevent horizontal scrolling */
}

#floatingButton {
    opacity: 0.6;
    transition: opacity 0.3s ease;
    padding-bottom: 40px;
    margin-right: 20px;
    max-width: calc(100% - 40px); /* 20px margin on each side */
    position: fixed;
    bottom: 0;
    right: 0;
}

#floatingButton.show {
    opacity: 1;
}
.btn-touched {
    background-color: #1544D0 !important; /* Change button color when touched */
}


</style>
<script>
 document.addEventListener("DOMContentLoaded", function() {
    var researchButton = document.getElementById('researchButton');

    // Change button color on touch (mousedown) event
    researchButton.addEventListener('mousedown', function() {
        researchButton.classList.add('btn-touched');
    });

    // Remove button color change when touch ends (mouseup) event
    researchButton.addEventListener('mouseup', function() {
        researchButton.classList.remove('btn-touched');
    });

    // Clicking outside the button will remove color change
    document.addEventListener('click', function(event) {
        if (!researchButton.contains(event.target)) {
            researchButton.classList.remove('btn-touched');
        }
    });
});

</script>
</div>

                 
               
         </div >         <!-- Add more research items as needed -->
                  </div></form>
                </div>
              </div>
            </div>
          </div>
    </div>
    

<!-- Service End -->
    

 
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
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>