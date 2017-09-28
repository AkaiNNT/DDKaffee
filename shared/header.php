<!-- <div id='banner-bg'>
  <div class="navbar-light" id="">
    <div class="container header-padding container-custome">
      <a class="navbar-left navbar-brand js-scroll-trigger bg-logo" href="../"  style="padding-top: 0px;">  <img src="../img/logo.png" alt="One of the best themes ever"></a>
      </a>
      <div class="collapse navbar-collapse" id="navbarResponsive" style="padding: 0px;">
        <ul class="nav navbar-nav ml-auto navbar-right smooth-scroll">
          <li><a class="header-link" href="../index.php">Trang chủ</a></li>
          <li>
            <a class="header-link <?php if ($activeClass=='about' || $activeClass=='process' || $activeClass=='product' || $activeClass=='service') {echo "active-header-link"; } ?>" data-toggle="dropdown">Doanh nghiệp</a>
            <ul class="dropdown-menu dropdown-menu-custom">
              <li><a class="header-link" href="../about" style="color: white;">VỀ CHÚNG TÔI</a></li>
              <li><a class="header-link" href="../process" style="color: white;">QUY TRÌNH SẢN XUẤT</a></li>
              <li><a class="header-link" href="../product" style="color: white;">SẢN PHẨM</a></li>
              <li><a class="header-link" href="../services" style="color: white;">DỊCH VỤ</a></li>
            </ul>
          </li>
          <li><a class="header-link <?php if ($activeClass=='blog') {echo "active-header-link"; } ?>" href="../blog">Blog</a></li>
          <li><a class="header-link <?php if ($activeClass=='contact') {echo "active-header-link"; } ?>" href="../contact">Liên hệ</a></li>
        </ul>
      </div>
    </div>
    <div class="container main-tittle">
      <?php echo "$activePage" ?>
    </div>
  </div>
</div> -->

<div id='banner-bg'>
  <div class="navbar-light" id="">
    <nav class="navbar navbar-inverse header-padding container-custome nav-custom-header navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-left navbar-brand js-scroll-trigger bg-logo" href="../"  style="padding-top: 0px;">  <img src="../img/logo.png" alt="One of the best themes ever"></a>
          </a>
        </div>
        <div class="collapse navbar-collapse navbar-collapse-custom" id="myNavbar">
          <ul class="nav navbar-nav ml-auto navbar-right smooth-scroll">
            <li><a class="header-link" href="../index.php">Trang chủ</a></li>
            <li>
              <a class="header-link <?php if ($activeClass=='about' || $activeClass=='process' || $activeClass=='product' || $activeClass=='service') {echo "active-header-link"; } ?>" data-toggle="dropdown">Doanh nghiệp</a>
              <ul class="dropdown-menu dropdown-menu-custom" style="background-color: rgba(255,255,255,0.3); text-align: right; padding-right: 0px !important; right: -22px; border-radius: 0px;">
                <li><a class="header-link-dropdown" href="../about" style="color: white;">VỀ CHÚNG TÔI</a></li>
                <hr style="margin: 0px;">
                <li><a class="header-link-dropdown" href="../process" style="color: white;">QUY TRÌNH SẢN XUẤT</a></li>
                <hr style="margin: 0px;">
                <li><a class="header-link-dropdown" href="../product" style="color: white; z-index: 999;">SẢN PHẨM</a></li>
                <hr style="margin: 0px;">
                <li><a class="header-link-dropdown" href="../services" style="color: white;">DỊCH VỤ</a></li>
              </ul>
            </li>
            <li><a class="header-link <?php if ($activeClass=='blog') {echo "active-header-link"; } ?>" href="../blog">Blog</a></li>
            <li><a class="header-link <?php if ($activeClass=='contact') {echo "active-header-link"; } ?>" href="../contact">Liên hệ</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container main-tittle">
      <br>
      <br>
      <?php echo "$activePage" ?>
    </div>
  </div>
</div>
<script src="../vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $(window).on("scroll", function() {
      if($(window).scrollTop() > 50) {
          $(".nav-custom-header").addClass("white-header");
          $(".active-header-link").attr('style', "color: #d9a535 !important");
      } else {
          //remove the background property so it comes transparent again (defined in your css)
         $(".nav-custom-header").removeClass("white-header");
      }
    });
  })
</script>