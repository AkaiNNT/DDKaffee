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
    <link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
    <link href="css/creative.css" rel="stylesheet">
    <link href="css/home.css" rel="stylesheet">
    <link href="css/slider.css" rel="stylesheet">
    <link href="css/slider_custom.css" rel="stylesheet">
    <link href="css/shared.css" rel="stylesheet">
    <link href="css/banner.css" rel="stylesheet">

    

  </head>
  
  <body>
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
    </div>
   
    <div id="fullpage">
      <div class="section img-background active" id="section0">
        <?php include 'slider/item1.php';?>
      </div>
      <div class="section" id="section1">
          <?php include 'slider/item2.php';?>
      </div>
      <div class="section add-background" id="section2">
        <?php include 'slider/item3.php';?>
      </div>
      <div class="section" id="section3">
        <?php include 'slider/item5.php';?>
      </div>
    </div>

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
    <script type="text/javascript" src="js/scrolloverflow.js"></script>

    <script type="text/javascript" src="js/jquery.fullPage.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        // var totalItems = $('.item').length;
        // var currentIndex = $('div.active').index() + 1;
        // $('#myCarousel').bind('slid', function() {
        //     currentIndex = $('div.active').index() + 1;
        //    // $('.num').html(''+currentIndex+'/'+totalItems+'');
        //    console.log(currentIndex);
        // });
        // $('#myCarousel').on('slide.bs.carousel', function() {
        //   currentIndex = $('div.active').index() + 1;
        //   // $('.num').html(''+currentIndex+'/'+totalItems+'');
        //   console.log(currentIndex);
        //   if (currentIndex != 2) {
        //     if ($(".navbar.navbar-expand-lg").hasClass("white-backg-header")) {
              
        //     }
        //     else {
        //       $(".navbar.navbar-expand-lg").addClass("white-backg-header");
        //     }
        //   }
        //   else {
        //     $(".navbar.navbar-expand-lg").removeClass("white-backg-header")
        //   }
        // });
          $('#fullpage').fullpage({
            'verticalCentered': false,
            'css3': true,
            'sectionsColor': ['#F0F2F4', '#fff', '#fff', '#fff'],
            'navigation': true,
            'navigationPosition': 'right',
            'navigationTooltips': ['fullPage.js', 'Powerful', 'Amazing', 'Simple'],
            afterRender: function () {
              setInterval(function () {
                $.fn.fullpage.moveSlideRight();
              }, 2000);
            },
            'afterLoad': function(anchorLink, index){
              if(index == 2){
                $('#iphone3, #iphone2, #iphone4').addClass('active');
              }
            },

            'onLeave': function(index, nextIndex, direction){
              // console.log(nextIndex);
              if (nextIndex != 1) {
                if ($(".navbar.navbar-expand-lg").hasClass("white-backg-header")) {

                }
                else {
                  $(".navbar.navbar-expand-lg").addClass("white-backg-header");
                }
              }
              else {
                $(".navbar.navbar-expand-lg").removeClass("white-backg-header")
              }
              if (nextIndex==2) {
                $('img .img .img-responsive').fadeIn("slow");
              }
              if (index == 3 && direction == 'down'){
                $('.section').eq(index -1).removeClass('moveDown').addClass('moveUp');
              }
              else if(index == 3 && direction == 'up'){
                $('.section').eq(index -1).removeClass('moveUp').addClass('moveDown');
              }

              $('#staticImg').toggleClass('active', (index == 2 && direction == 'down' ) || (index == 4 && direction == 'up'));
              $('#staticImg').toggleClass('moveDown', nextIndex == 4);
              $('#staticImg').toggleClass('moveUp', index == 4 && direction == 'up');
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