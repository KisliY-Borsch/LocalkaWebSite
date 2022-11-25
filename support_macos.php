<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="httpdocs/img/favicon.ico" type="image/x-icon">
  <title>Настройка для Mac OS</title>
  <!-- Bootstrap core CSS -->
  <link href="httpdocs/css/bootstrap.min.css" rel="stylesheet">
  <link href="httpdocs/css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
</head>

<body>
<!-- Top Navbar Navigation -->

<?php include 'siteheader.php' ?>

<!-- Page Content -->
<div class="container">

<!-- Breadcrumbs -->
<h2 class="mt-4 mb-3">Настройки подключеня для 
<span class="badge badge-secondary">Mac OS</h2>
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/">Главная</a>
    </li>
    <li class="breadcrumb-item">
        <a href="support.php">Поддержка</a>
    </li>    
    <li class="breadcrumb-item active">Настройки Mac OS</li>
  </ol>

<!-- About Information Content -->
<div class="row">
	<div class="col-lg-6">
		<img class="img-fluid rounded mb-4" src="httpdocs/img/700x400mac.png" alt="">
	</div>
<div class="col-lg-6">

<h4>Настройка соединения PPPоE</h4>

<ul class="list-rectangle">
  <li>1. Выберите в меню "Яблочко" команду System Preferences.</li>
  <li>2. Выберите в меню View команду "Network".</li>
  <li>3. Выберите Built-in Ethernet из меню Show (в Mac OS X 10.1 - Configure).</li>
  <li>4. Выберите закладку PPPoE.</li>
  <li>5. Отметьте маркер Connect using PPPoE.</li>  
  <li>6. В поле Service Provider введите название соединения LOCALKA.</li>
  <li>7. Введите имя пользователя (login), который указан в регистрационных документах, в поле Account Name.</li>
  <li>8. Введите пароль (password), который указан в регистрационных документах, в поле Password.</li>
 </ul>

</div>
</div>
<!-- /.About Information Content-->
	
<hr>

<!-- INFORMATION -->
<div class="row">
<div class="col-lg-6">

<h4>Если вы хотите, чтобы пароль был сохранен для последующих подключений, отметьте маркер Save password.</h4>

<ul class="list-rectangle">
  <li>9. Поле PPPoE Service Name необходимо оставить пустым.</li>
 </ul>

</div>


<div class="col-lg-6">

<h4 class="mt-2 mb-3">Если вы хотите, что бы компьютер автоматически подключался к сети Интернет при запуске сетевых программ (веб-браузер, почтовые программы) нажмите на кнопку PPPoE Options и в появившемся диалоговом окне отметьте маркер Connect automatically when needed.</h4>
<ul class="list-rectangle">
  <li>9. Выберите закладку TCP/IP.</li>
  <li>10. Из меню Configure IPv4 выберите PPP.</li>
  <li>11. Нажмите кнопку Apply Now.</li>
  <li>12. Запустите ваш веб-браузер или любую другую программу, которая требует TCP/IP, для проверки соединения с сетью Интернет.</li>
</ul>

</div>

</div>

<hr>

</div>
<!-- /.container -->

<!-- Footer -->

<?php include 'sitefooter.php'?>

<!-- Bootstrap core JavaScript -->
<script src="httpdocs/js/jquery.min.js"></script>
<script src="httpdocs/js/bootstrap.bundle.min.js"></script>
</body>
</html>