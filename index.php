<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="httpdocs/img/favicon.ico" type="image/x-icon">
  <title>Localka.net - лучший интернет для дома и офиса!</title>
  <!-- Bootstrap core CSS -->
  <link href="httpdocs/css/bootstrap.min.css" rel="stylesheet">
  <link href="httpdocs/css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
</head>

<body>

<!-- Top Navbar Navigation -->

<?php include 'siteheader.php' ?>

<!-- Carousel / Slider -->
  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image: url('httpdocs/img/rotator/checkspeed.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h5><a class="btn btn-outline-dark" target="_blank" href="http://speedtest.localka.net" role="button">Проверить</a></h5>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('httpdocs/img/rotator/invitefriend.jpg')">
          <div class="carousel-caption d-none d-md-block">
            <h5><a class="btn btn-outline-dark" target="_blank" href="special.html#invite_friend" role="button">Приведи друга</a></h5>
            <!--<h3>Приведи друга</h3>
            <p>Описание к слайду</p>-->
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url('httpdocs/img/rotator/const_action1.jpg')">
          <div class="carousel-caption d-none d-md-block ">
            <h5><a class="btn btn-outline-dark" target="_blank" href="special.html#invite_friend" role="button">Постоянные акции</a></h5>
            <!-- <h3 class="text-dark">Постоянные акции</h3> <p class="text-dark">Описание к слайду</p> -->
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>


<!-- Page Content/Контент -->
<div class="container">
<div class="jumbotron mt-4">
<h1 class="display-5">Высокоскоростной доступ в Интернет — быстро, выгодно, удобно!</h1>
<p class="lead">Оставь заявку на поключение и мы свяжемся с Вами в самое ближайшее время</p>
<a class="btn btn-success btn-lg mb-1" href="connectletter.php" role="button">Подключиться</a>
<a class="btn btn-secondary btn-lg mb-1" href="connect.php" role="button">Подробности подключения</a>  
</div>


<!-- Тарифы --> 
<section class="showcase">
    <div class="container-fluid p-0">
      <div class="row no-gutters">

        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('httpdocs/img/tarif1.png');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text text-center">
          <h2>Тарифы для дома</h2>
          <p class="lead mb-0">от <b>80</b> грн в месяц </p>
          <a class="btn btn-outline-danger btn-lg mt-2" href="troom.php" role="button">Подробнее</a>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 text-white showcase-img" style="background-image: url('httpdocs/img/tarif2.png');"></div>
        <div class="col-lg-6 my-auto showcase-text text-center">
          <h2>Тарифы для Частного сектора</h2>
          <p class="lead mb-0">от <b>85</b> грн в месяц </p>
          <a class="btn btn-outline-success btn-lg mt-2" href="thome.php" role="button">Подробнее</a>      
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('httpdocs/img/tarif3.png');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text text-center">
          <h2>Тариф для офиса</h2>
          <p class="lead mb-0">от <b>100</b> грн в месяц </p>
          <a class="btn btn-outline-warning btn-lg mt-2" href="toffice.php" role="button">Подробнее</a>         
        </div>
      </div>
    </div>
</section>



<!-- INFORMATION -->
<h2 class="mt-5 mb-3">Преимущества для клиентов компании Локалка</h2>

<div class="container-fluid bg-primary text-white p-4">
<h3>Качество и надежность</h3>
Cоответствие качества услуг самым высоким международным техническим нормами постоянное техническое обслуживание и мониторинг сети.
</div>  
<div class="container-fluid bg-success text-white p-4">
<h3>Удобство</h3>
Возможность получения комплекса услуг "из одних рук", возможность выбора приемлемых для себя цен из разнообразных тарифных планов.
</div> 
<div class="container-fluid bg-warning text-dark p-4">
<h3>Оперативность</h3>
Минимальные сроки подключения к услугам и оперативное устранение любой неисправности.
</div> 
<div class="container-fluid bg-info text-white p-4 mb-5">
<h3>Стабильность</h3>
Долгосрочные контракты с поставщиками и подрядчиками.
</div> 

</div>
<!-- /.container -->

<?php include 'sitefooter.php'?>

<!-- Bootstrap core JavaScript -->
<script src="httpdocs/js/jquery.min.js"></script>
<script src="httpdocs/js/bootstrap.bundle.min.js"></script>
</body>
</html> 