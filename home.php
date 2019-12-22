<?php
include "appcore/dbcon.php";
session_start();
if (isset($_SESSION['logged-in'])) {
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header("Location:/nonegram");
    } else {
        $id = $_SESSION['logged-in'];
        $stmt = $connection->query("Select * from user where id='$id'");
        $data = $stmt->fetch_assoc();
        echo $_SESSION['logged-in'];
    }
} else {
    header("Location:/nonegram/index.php?error=session");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nonegram</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700" rel="stylesheet">

    <link rel="stylesheet" href="asset/css/bootstrap.css">
    <link rel="stylesheet" href="asset/css/animate.css">
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css">

    <link rel="stylesheet" href="asset/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="asset/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>

<header role="banner">
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-9 social">
            <a class="text-center">Nonegram</a>
              <!-- <a href="#"><span class="fa fa-twitter"></span></a>
              <a href="#"><span class="fa fa-facebook"></span></a>
              <a href="#"><span class="fa fa-instagram"></span></a>
              <a href="#"><span class="fa fa-youtube-play"></span></a>
              <a href="#"><span class="fa fa-vimeo"></span></a>
              <a href="#"><span class="fa fa-snapchat"></span></a> -->
            </div>
            <div class="col-3 float-right">
              <nav class="navbar navbar-expand-md  navbar-dark bg-dark">
                <div class="container">
                    <ul class="navbar-nav mx-auto">
                      <li class="nav-item">
                        <a class="nav-link active" href="index.html">Home</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="category.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Logout</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown05">
                          <a class="dropdown-item" name="logout">
                            <form action="" method="post">
                                <button type="submit" name="logout">Logout</button>
                            </form>
                          </a>
                        </div>
                      </li>
                    </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>

      <div class="container logo-wrap">
        <div class="row pt-5">
          <div class="col-12">
            <a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
            <h1 class="site-logo text-center"><a href="index.html">Nonegram</a></h1>
          </div>
        </div>
      </div>
    </header>
    <!-- END header -->

    <section class="site-section py-sm">
      <div class="container">
        <div class="row justify-content-center blog-entries">
          <div class="col-md-6 col-lg-6 main-content">
            <div class="row justify-content-center">
              <div class="col-md-12">
                <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <!-- <div class="blog-a">
                    <img src="asset/images/img_.jpg" alt="" >
                    <a href="">Nama User</a>
                  </div> -->
                  <div class="blog-content-body">
                  <img src="asset/images/img_5.jpg" alt="Image placeholder">
                    <div class="post-meta">
                      <span class="category">Food</span>
                      <span class="mr-2">March 15, 2018 </span> &bullet;
                      <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                    </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>
              <div class="col-md-12">
                <a href="blog-single.html" class="blog-entry element-animate" data-animate-effect="fadeIn">
                  <!-- <div class="a">
                    <img src="asset/images/img_.jpg" alt="" >
                    <a href="">Nama User</a>
                  </div>   -->
                  <img src="asset/images/img_6.jpg" alt="Image placeholder">
                  <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="category">Travel</span>
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                    <h2>There’s a Cool New Way for Men to Wear Socks and Sandals</h2>
                  </div>
                </a>
              </div>

              

            <div class="row">
              <div class="col-md-12 text-center">
                <nav aria-label="Page navigation" class="text-center">
                  <ul class="pagination">
                    <li class="page-item  active"><a class="page-link" href="#">Prev</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                  </ul>
                </nav>
              </div>
            </div>


            

        

        </div>
      </div>
    </section>
  
    <footer class="site-footer">
        <div class="row">
          <div class="col-md-12">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="asset/js/jquery-3.2.1.min.js"></script>
    <script src="asset/js/jquery-migrate-3.0.0.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/owl.carousel.min.js"></script>
    <script src="asset/js/jquery.waypoints.min.js"></script>
    <script src="asset/js/jquery.stellar.min.js"></script>

    
    <script src="asset/js/main.js"></script>

</body>
</html>