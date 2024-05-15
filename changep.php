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
            <a href="" class="navbar-brand p-0">
                <h1 class="m-0"><img src="./img/logo.png"style="width: 80px; height: auto;"></i>Eastwoods Research Hub</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
        
                
                <butaton type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></butaton>
                
                
                
         
                
            </div>  </nav>
  <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Change Default Password</h1>
                   
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
<!-- Edit Start -->       


                                       				<?php


include('system/dist/dbcon.php');
if($_GET['aid']!=""){
    $_SESSION['aid']=$_GET['aid'];
$id=$_SESSION['aid'];
}else{
 $id=$_GET['aid'];   
}

$query=mysqli_query($con,"select * from  user where id='$id' ")or die(mysqli_error());
$row=mysqli_fetch_array($query);

?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-8">
            <div class="card mb-4">
                <h3 class="mt-3 mb-3 text-center">Account Details</h3>
                    <div class="card-body">
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Username (School ID)</label>
                                <input class="form-control" id="inputUsername" value="<?php echo $row['id_number'];?>" type="text" placeholder="Enter your username" readonly>
                            </div>
                            <div class="row gx-3 mb-3">
                              <div class="col-md-6">
                                  <label class="small mb-1" for="inputFirstName">First name</label>
                                  <input class="form-control" id="inputFirstName" value="<?php echo $row['firstname'];?>" type="text" placeholder="Enter your first name" readonly>
                              </div>
                              <div class="col-md-6">
                                  <label class="small mb-1" for="inputLastName">Last name</label>
                                  <input class="form-control" id="inputLastName" value="<?php echo $row['lastname'];?>" type="text" placeholder="Enter your last name" readonly>
                              </div>
                          </div>
                    
                        
                        <h3>Password Setting</h3>
                        <form method="POST" action="change_pass.php?aid=<?php echo $_GET['aid'] ?>">
                        <div class="row gx-3 mb-3">
                            <!-- <div class="col-md-4">
                                <label class="small mb-1" for="cpass">Current Password</label>
                                <input class="form-control" name="cpass" type="text" value="<?php echo htmlspecialchars($row['password']); ?>" placeholder="Enter your current password" readonly>
                            </div> -->
                            <div class="col-md-6">
                            <label class="small mb-1" for="npass">New Password</label>
                            <div class="input-group">
                                <input class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="npass" id="npass" type="password" placeholder="Enter your new password" required="">
                                <div class="input-group-append">
                                    <span class="input-group-text"style="height: 50px">
                                        <i class="fa fa-eye" id="togglePassword"></i>
                                    </span>
                                </div>
                            </div>
                        </div>

                            <div class="col-md-6">
                            <label class="small mb-1" for="email">Email Address (For Account Recovery)</label>
                            <input class="form-control" name="email" type="email" <?php echo $row['email'] ? 'readonly' : 'required' ?> value="<?php echo $row['email'];?>" placeholder="Enter your email address" >

                        </div>

                        </div>
                        
              
             
                        <button class="btn btn-primary" type="submit">Save changes</button>  </form>       
                    </div>
                </div>              
            </div>               
        </div>
    </div>              
</div>


 
<!-- Footer Start -->

<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
                <div class="d-flex align-items-center justify-content-center" style="height: 90px;">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Eastwoods Research Hub</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#npass');

    togglePassword.addEventListener('click', function (e) {
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the icon
        this.classList.toggle('fa-eye-slash');
    });
</script>

<!-- Footer End -->
  
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
    <style type="text/css">
      .img-account-profile {
          height: 10rem;
      }
      .rounded-circle {
          border-radius: 50% !important;
      }
      .card {
          box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
      }
      .card .card-header {
          font-weight: 500;
      }
      .card-header:first-child {
          border-radius: 0.35rem 0.35rem 0 0;
      }
      .card-header {
          padding: 1rem 1.35rem;
          margin-bottom: 0;
          background-color: rgba(33, 40, 50, 0.03);
          border-bottom: 1px solid rgba(33, 40, 50, 0.125);
      }
      .form-control, .dataTable-input {
          display: block;
          width: 100%;
          padding: 0.875rem 1.125rem;
          font-size: 0.875rem;
          font-weight: 400;
          line-height: 1;
          color: #69707a;
          background-color: #fff;
          background-clip: padding-box;
          border: 1px solid #c5ccd6;
          -webkit-appearance: none;
          -moz-appearance: none;
          appearance: none;
          border-radius: 0.35rem;
          transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      }
      .nav-borders .nav-link.active {
          color: #0061f2;
          border-bottom-color: #0061f2;
      }
      .nav-borders .nav-link {
          color: #69707a;
          border-bottom-width: 0.125rem;
          border-bottom-style: solid;
          border-bottom-color: transparent;
          padding-top: 0.5rem;
          padding-bottom: 0.5rem;
          padding-left: 0;
          padding-right: 0;
          margin-left: 1rem;
          margin-right: 1rem;
      }
  </style>
</body>

</html>