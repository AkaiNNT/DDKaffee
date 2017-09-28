<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sản phẩm</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="css/creative.css" rel="stylesheet"> -->
    <link href="../css/creative.css" rel="stylesheet">
    <link href="../css/product.css" rel="stylesheet">
    <link href="../css/home.css" rel="stylesheet">
    <link href="../css/shared.css" rel="stylesheet">
    <link href="../css/about_us.css" rel="stylesheet">
    <link href="../css/banner.css" rel="stylesheet">
</head>
<style type="text/css">
  .hover-a-tag:hover {
    color: #d9a535 !important;
  }
</style>
<body id="page-top">
  <?php $activeClass = 'product' ?>
  <?php $activePage = "Sản phẩm"; ?>
  <?php include '../shared/header.php'; ?>
  <div class="clearfix"></div>
	<div class="padding-nav" style="padding-top: 0px !important;">
    <div class="main-product">
  		<div class="col-xs-6 image-responive">
  			<img src="../img/product5.png" alt="One of the best themes ever" class="image-responive">
      </div>
      <div class="col-xs-6 image-responive text-right-product">
        <div class="product-content">
          <div class="product-title">
            Robusta-Honey
          </div>
          <?php include 'rating.php';?>
          <div class="vote-content"></div>
          <div class="product-desc">
            Mang lại vị thanh chua nhẹ nhàng từ mùi hương của trái cây chín, được tuyển chọn từ những giống Arabica thuần chủng nhất.
          </div>
          <div class="product-number">
            <div><strong>Weight:</strong>50g</div>
            <div><strong>Dimensions:</strong>20 x 50 x 5cm</div>
          </div>
        </div>
      </div>
    </div>
    <div class="other-product">
      <div class="other-title">
        <h3 class="title-product" style="padding-left: 40px;">Sản phẩm khác</h3>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-3 other-product-hover text-center">
        <img src="../img/product/other-1.png" alt="One of the best themes ever">
        <div class="button-product link-to-product">
          <a href="index.php">
            <img src="../img/product/button-to-other.png" alt="sofa" class="img img-responsive" style="visibility: unset; opacity: inherit;" />
          </a>
        </div>
        <div class="other-title-product"><a class="hover-a-tag" href='index.php'>Moka Blend</a></div>
      </div>
      <div class="col-md-3 other-product-hover text-center">
        <img src="../img/product/other-1-bk.png" alt="One of the best themes ever">
        <div class="button-product link-to-product">
          <a href="2.php">
            <img src="../img/product/button-to-other.png" alt="sofa" class="img img-responsive" style="visibility: unset; opacity: inherit;" />
          </a>
        </div>
        <div class="other-title-product"><a class="hover-a-tag" href='2.php'>Phin Blend</a></div>
      </div>
      <div class="col-md-3 other-product-hover text-center">
        <img src="../img/product/other-2.png" alt="One of the best themes ever">
        <div class="button-product link-to-product">
          <a href="3.php">
            <img src="../img/product/button-to-other.png" alt="sofa" class="img img-responsive" style="visibility: unset; opacity: inherit;" />
          </a>
        </div>
        <div class="other-title-product"><a class="hover-a-tag" href='3.php'>Arabica Blend</a></div>
      </div>
      <div class="col-md-3 other-product-hover text-center">
        <img src="../img/product/other-3.png" alt="One of the best themes ever">
        <div class="button-product link-to-product">
          <a href="4.php">
            <img src="../img/product/button-to-other.png" alt="sofa" class="img img-responsive" style="visibility: unset; opacity: inherit;" />
          </a>
        </div>
        <div class="other-title-product"><a class="hover-a-tag" href='4.php'>Espresso Blend</a></div>
      </div>
    </div>
    <div class="clearfix"></div>
	</div>
	<br>
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/popper/popper.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../vendor/scrollreveal/scrollreveal.min.js"></script>
  <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.link-to-product').hide();
      $('.other-product-hover').mouseover(function() {
        $(this).children(".link-to-product").show();
      })
      $('.other-product-hover').mouseleave(function() {
        $(this).children(".link-to-product").hide();
      })
    });
  </script>
</body>
<?php include '../shared/footer.php';?>
</html>