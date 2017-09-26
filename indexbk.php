<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DDKaffee-Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" type="" href="C:/bootstrap-3.3.5-dist/js/bootstrap.min.js"> -->

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="https://developer.apple.com/fonts/">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
    <link href="css/slider.css" rel="stylesheet">
    <link href="css/slider_custom.css" rel="stylesheet">
    <link href="css/shared.css" rel="stylesheet">
    <link href="css/banner.css" rel="stylesheet">

  </head>
  <style type="text/css">
    .a-dropdown-custom {
      font-weight: bold;
      color: white !important;
    }

    .a-dropdown-custom:hover {
      color: #d9a535 !important;
    }
    body a:hover{
      text-decoration: none;
    }
    li a:hover{
      color: yellow;
    }
    .banner-fake ul li a{
      font-weight: bold;
      color: white;
    }
    .banner-fake .navbar-nav .active1 a, .banner-fake ul li a:hover, .banner-fake ul li a:focus {
      color:#d9a535;
      background: none;
    }
    .active1 a {
      color: #d9a535 !important;
      background: none;
    }
    nav, .nav {
      background: none;
    }
    .navbar-brand{
      padding-left: 10px;
    }
    .navbar-collapse{
      padding-top: 20px;
      padding-left: 50px;
      padding-right: 50px;
    }
    #nav-custom{ 
      padding-right:  25px;
    }
    .dropdown-menu-custom {
      background: transparent;
      text-align: right;
      border: none;
      box-shadow: none;
      padding-right: 0px !important;
      right: -22px;
    }
  </style>
  <body id="page-top" data-spy="scroll" data-target=".navbar" data-offset="20">
    <div class="banner-fake">
      <nav class="navbar navbar-inverse container-custome navbar-expand-lg navbar-light navbar-fixed-top nav-custom" id="mainNav" style="border: transparent; background-color: transparent;">
        <div class="container">
          <div class="navbar-header custom-nav-home">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-left navbar-brand js-scroll-trigger bg-logo" href="#"  style="padding-top: 0px;"><img src="img/logo.png" alt="One of the best themes ever"></a>
           
            <div class="collapse navbar-collapse navbar-collapse-custom" id="myNavbar" style="padding-top: 0px;">
              <ul class="nav navbar-nav ml-auto navbar-right smooth-scroll">
                <li class="nav-item active1">
                  <a class="nav-link js-scroll-trigger" href="index.php" style="font-weight: bold;">TRANG CHỦ</a>
                </li>
                <li class="nav-item">
                  <div class="dropdown" style="padding-top: 15px;">
                    <a class="nav-link js-scroll-trigger dropdown-toggle a-dropdown-custom" data-toggle="dropdown" style="padding: 0px 15px; cursor: pointer; font-weight: bold; ">DOANH NGHIỆP
                    </a>
                    <ul class="dropdown-menu dropdown-menu-custom" style="background: transparent; text-align: right; padding-right: 0px !important; right: -22px;">
                      <li><a class="hover-a-tag a-dropdown-custom" href="about" style="color: white;">VỀ CHÚNG TÔI</a></li>
                      <li><a class="hover-a-tag a-dropdown-custom" href="process" style="color: white;">QUY TRÌNH SẢN XUẤT</a></li>
                      <li><a class="hover-a-tag a-dropdown-custom" href="product" style="color: white;">SẢN PHẨM</a></li>
                      <li><a class="hover-a-tag a-dropdown-custom" href="services" style="color: white;">DỊCH VỤ</a></li>
                    </ul>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger a-dropdown-custom" href="blog" style="font-weight: bold;">BLOG</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger a-dropdown-custom" href="contact" style="font-weight: bold;">LIÊN HỆ</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!-- <nav class="navbar navbar-inverse container header-padding container-custome nav-custom-header" id="mainNav">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
            <a class="navbar-left navbar-brand js-scroll-trigger bg-logo" href="../"  style="padding-top: 0px;">  <img src="img/logo.png" alt="One of the best themes ever"></a>
            </a>
          </div>
          <div class="collapse navbar-collapse navbar-collapse-custom" id="myNavbar">
            <ul class="nav navbar-nav ml-auto navbar-right smooth-scroll">
              <li><a class="header-link" href="index.php">Trang chủ</a></li>
              <li>
                <a class="header-link <?php if ($activeClass=='about' || $activeClass=='process' || $activeClass=='product' || $activeClass=='service') {echo "active-header-link"; } ?>" data-toggle="dropdown">Doanh nghiệp</a>
                <ul class="dropdown-menu dropdown-menu-custom">
                  <li><a class="header-link" href="about" style="color: white;">VỀ CHÚNG TÔI</a></li>
                  <li><a class="header-link" href="process" style="color: white;">QUY TRÌNH SẢN XUẤT</a></li>
                  <li><a class="header-link" href="product" style="color: white; z-index: 999;">SẢN PHẨM</a></li>
                  <li><a class="header-link" href="services" style="color: white;">DỊCH VỤ</a></li>
                </ul>
              </li>
              <li><a class="header-link <?php if ($activeClass=='blog') {echo "active-header-link"; } ?>" href="blog">Blog</a></li>
              <li><a class="header-link <?php if ($activeClass=='contact') {echo "active-header-link"; } ?>" href="contact">Liên hệ</a></li>
            </ul>
          </div>
        </div>
      </nav> -->
    </div>
    <section class="slide-wrapper">
      <div class="container">
        <div id="myCarousel" class="carousel slide">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <?php include 'slider/item1.php';?>
            <?php include 'slider/item2.php';?>
            <?php include 'slider/item3.php';?>
            <?php include 'slider/item5.php';?>
          </div>
        </div>
      </div>
    </section>
    <!-- <div class="call-to-action bg-dark">
      <div class="container text-center">
        <h2>Free Download at Start Bootstrap!</h2>
        <a class="btn btn-default btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
      </div>
    </div>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="primary">
            <p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x sr-contact"></i>
            <p>123-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
            </p>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.js"></script>
    <script src="js/slider_y.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        // var totalItems = $('.item').length;
        // var currentIndex = $('div.active').index() + 1;
        // $('#myCarousel').bind('slid', function() {
        //     currentIndex = $('div.active').index() + 1;
        //    // $('.num').html(''+currentIndex+'/'+totalItems+'');
        //    console.log(currentIndex);
        // });
        $('#myCarousel').on('slide.bs.carousel', function() {
          currentIndex = $('div.active').index() + 1;
          // $('.num').html(''+currentIndex+'/'+totalItems+'');
          console.log(currentIndex);
          if (currentIndex != 2) {
            if ($(".navbar.navbar-expand-lg").hasClass("white-backg-header")) {
              
            }
            else {
              $(".navbar.navbar-expand-lg").addClass("white-backg-header");
            }
          }
          else {
            $(".navbar.navbar-expand-lg").removeClass("white-backg-header")
          }
        });
      });
    </script>
    <!-- <script>
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map,
          title: 'Uluru (Ayers Rock)'
        });
      }
    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJjs4meLogo1FPpvWmZDdKES4UyDnyrzE&callback=initMap">
    </script>
    <script type="text/javascript">
      $(window).load(function(){
        initMap();
      });
    </script> -->
  </body>

</html>