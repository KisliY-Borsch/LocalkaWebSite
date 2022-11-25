<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Localka.net</title>
  <!-- Bootstrap core CSS -->
  <link href="httpdocs/css/bootstrap.min.css" rel="stylesheet">
  <link href="httpdocs/css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
</head>

<body>

<!-- Top Navbar Navigation -->

<?php include 'siteheader.php' ?>

<!-- Content -->
<div class="container">

<!-- Информационное меню -->
<div class="d-flex bd-highlight mb-3 lc-panel shadow-sm p-3 mb-4 mt-3 bg-white rounded ">
  <div class="mr-auto p-2 bd-highlight ">
    <span class="h5 mb-0 font-weight-bold text-gray-800 ">Фамилия Имя Отчество</span> 
  </div>
  <div class="p-2 bd-highlight lc-panel-y mr-1">
    <span class="text-xs font-weight-bold text-success text-uppercase">Баланс:</span> 
    <span class="mb-0 font-weight-bold text-gray-800">₴1000</span> 
</div>
  <div class="p-2 bd-highlight lc-panel-b">
    <span class="text-xs font-weight-bold text-dark text-uppercase">Бонус:</span> 
    <span class="mb-0 font-weight-bold text-gray-800">₴1000</span> 
</div>
</div>

<!-- Меню -->
<div class="container nav-lc-top bg-light text-center">  
  <a class="btn btn-primary mt-2 mb-1 btn-menu-lc" href="cabinet.html">Карточка абонента</a>
  <a class="btn btn-success mt-2  mb-1 btn-menu-lc" href="cabinet8.html">Тикет</a>  
  <a class="btn btn-warning mt-2  mb-1 btn-menu-lc" href="cabinet4.html">Пополнить счет</a>
  <a class="btn btn-dark mt-2  mb-1 btn-menu-lc" href="cabinet5.html">Договора</a>
  <a class="btn btn-info mt-2  mb-1 btn-menu-lc" href="cabinet3.html">Опции</a>
  <a class="btn btn-secondary mt-2  mb-1 btn-menu-lc" href="cabinet2.html">Эл.Платежи</a>
  <a class="btn btn-danger mt-2  mb-1 btn-menu-lc" href="#.html">Выход</a>
</div>              


<!-- Post Content Column -->
<div class="row">
<div class="col-lg-8">
    
<h3 class="mt-1 mb-3">Номера телефона</h3>

<form class="form-inline">
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only">Телефон</label>
    <input type="text" class="form-control" id="inputPassword2" placeholder="Номер телефона">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Добавить</button>
</form>

<hr>

<div class="table-responsive">
<table class="table table-bordered table-hover table-sm text-center">
  <thead>
    <tr>
      <th scope="col" class="table-active">Ваши номера телефонов</th>	  
      <th scope="col" class="table-active">SMS оповещение</th>	
      <th scope="col" class="table-active">Операция</th>	  
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">077 777 77 77 </th>
      <td><a class="btn btn-success mt-2  mb-1" href="#">задать для СМС  </a> </td>
      <td> <a class="btn btn-danger mt-2  mb-1 btn-block " href="#.html">Удалить из списка</a></td>	  
    </tr>
    <tr>
      <th scope="row">077 777 77 78 </th>
      <td>SMS info</td>
      <td> <a class="btn btn-danger mt-2  mb-1 btn-block " href="#.html">Удалить из списка</a></td>  
    </tr>
  </tbody>
</table>
</div>


<hr>

</div>


<!-- Sidebar Column -->
<div class="col-md-4">

<div class="d-flex bd-highlight mb-1 lc-panel shadow-sm p-3 mb-4 bg-white rounded ">
  <div class="mr-auto p-2 bd-highlight ">
    <span class="h5 mb-0 font-weight-bold text-gray-800 ">Тариф </span> Вода
  </div>
  <div class="p-2 bd-highlight lc-panel-r mr-1">
    <span class="text-xs font-weight-bold text-dark text-uppercase">Скорость:</span> 
    <span class="mb-0 font-weight-bold text-gray-800">100 МБ/с</span> 
</div>
  <div class="p-2 bd-highlight lc-panel-g">
    <span class="text-xs font-weight-bold text-dark text-uppercase">Статус:</span> 
    <span class="mb-0 font-weight-bold text-gray-800">Активен</span> 
</div>
</div>

<!-- Pay  -->
<div class="container text-center pb-2 mb-3 shadow-sm">
  <img src="httpdocs/img/mc-logo.png"> <img src="httpdocs/img/visa-logo.png">
<a class="btn btn-warning btn-menu-lc btn-block mt-1" href="#">Оплатить картой</a>
</div>

<!-- Work Time  -->
<div class="container text-center pb-2 mb-3 shadow-sm">
<div class="row">
<div class="col-sm text-center mt-4">Городской</div>
<div class="col-sm">
  (048) 796 59 59;
  (048) 728 26 06;
  (048) 728 18 06
</div>
</div>
<hr class="m-1">
<div class="row">
<div class="col-sm text-center mt-4">Life</div>
<div class="col-sm">
  (093) 796 59 59;
  (093) 170 08 04;
  (093) 170 08 06
</div>
</div>
<hr class="m-1">
<div class="row">
<div class="col-sm">Киевстар</div>
<div class="col-sm">
  (068) 796 59 59
</div>
</div>
<hr class="m-1">
<div class="row">
<div class="col-sm text-center">Vodafone</div>
<div class="col-sm">
  (066) 796 59 59
</div>
</div>
<div class="alert alert-dismissible alert-dark p-1 mt-2">
  <p class="mb-0">Мы работаем с 9-30 до 19-00</p>
</div>
</div>

</div>
<!-- /.SideBar-->

</div>
</div>
<!-- /.container -->

<!-- Footer -->

<?php include 'sitefooter.php'?>

<!-- Bootstrap core JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>