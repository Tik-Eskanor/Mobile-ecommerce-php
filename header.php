<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>

    <?php require_once("functions.php"); ?>
</head>
<body>

<!-- Header ------------------------------------------------>
<header id="header">
<!-- primary navigation----------------------------------- -->
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">Mobile Shopee</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav m-auto">
        <a class="nav-link active" href="#">On Sale<span class="sr-only">(current)</span></a>
        <a class="nav-link" href="#top-sale">Top Sale</a>
        <a class="nav-link" href="#special-price">Special Price</a>
        <a class="nav-link" href="#new-phones">New</a>
        <a class="nav-link" href="#blog">Blog</a>
        <a class="nav-link" href="#">Coming soon</a>
    </div>
    <form action="" class="font-14">
      <a href="cart.php" class="py-2 rounded-pill">
          <span class="font-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
          <span class="px-3 py-2 bg-light rounded-pill"><?php echo count($product->get_data('cart')); ?></span>
      </a>
    </form>
</nav>
<!-- ----------------------------------------------------- -->
</header>
<!-- ---------------------------------------------------- -->

<!-- main------------------------------------------------- -->
<div id="main-site">