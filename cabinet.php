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
  <a class="btn btn-primary mt-2 mb-1 btn-menu-lc" href="cabinet.php">Карточка абонента</a>
  <a class="btn btn-success mt-2  mb-1 btn-menu-lc" href="cabinet8.php">Тикет</a>  
  <a class="btn btn-warning mt-2  mb-1 btn-menu-lc" href="cabinet4.php">Пополнить счет</a>
  <a class="btn btn-dark mt-2  mb-1 btn-menu-lc" href="cabinet5.php">Договора</a>
  <a class="btn btn-info mt-2  mb-1 btn-menu-lc" href="cabinet3.php">Опции</a>
  <a class="btn btn-secondary mt-2  mb-1 btn-menu-lc" href="cabinet2.php">Эл.Платежи</a>
  <a class="btn btn-danger mt-2  mb-1 btn-menu-lc" href="#.html">Выход</a>
</div>              


<!-- Post Content Column -->
<div class="row">
<div class="col-lg-8">
    
<!-- Предупреждение -->    
<div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h5 class="alert-heading">Уважаемый Абонент!</h5>
  <p class="mb-0">С 1 мая 2020 года меняются тарифы на предоставление доступа к сети а так-же добавляются новые <a href="#" class="alert-link">Подробнеее</a>.</p>
</div>

<h3 class="mt-4 mb-3">Карточка абонента</h3>

<div class="table-responsive">
<table class="table table-bordered table-hover table-sm">
  <thead>
    <tr>
      <th colspan=2 scope="col" class="table-active">Общие данные</th>    
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Дата регистрации </th>
      <td>2019-06-10 15:05:08 </td>
    </tr>
    <tr>
      <th scope="row">Фамилия</th>
      <td>Фамилия</td>        
    </tr>
    <tr>
      <th scope="row">Имя </th>
      <td>Имя </td>   
    </tr>
    <tr>
      <th scope="row">Отчество </th>
      <td>Отчество </td>    
    </tr>
    <tr>
      <th scope="row">Инд. налоговый номер </th>
      <td> - </td>    
    </tr>
    <thead>
    <tr>
      <th colspan=2 scope="col" class="table-active">Общие данные</th>    
    </tr>
  </thead>
    <tr>
      <th scope="row">Сумма денег на счету  </th>
      <td class="table-success">1000 </td>    
    </tr>
    <tr>
      <th scope="row">Сумма денег на 1-е число  </th>
      <td class="table-success">1000 </td>    
    </tr>
    <tr>
      <th scope="row">Логин для статистики  </th>
      <td> Логин </td>    
    </tr>
    <tr>
      <th scope="row">Пароль для статистики </th>
      <td><input class="form-control form-control-sm" type="text" placeholder="Пароль для статистики"></td>    
    </tr>
    <tr>
      <th scope="row">Список почт. адресов</th>
      <td><input class="form-control form-control-sm" type="text" placeholder="Список почт. адресов">
      </td>    
    </tr> 
   <tr>
      <th scope="row"> Бонусные средства </th>
      <td class="table-success"> 1000 </td>  
    </tr> 
   <tr>
      <th scope="row">Состояние аккаунта</th>
      <td> open </td>   
      </td>    
    </tr> 
   <tr>
      <th scope="row"> Арендуемое помещение</th>
      <td> - </td>   
      </td>    
    </tr>
   <tr>
      <th scope="row">Комментарий</th>
      <td><input class="form-control form-control-sm" type="text" placeholder="Комментарий"></td>    
      </td>    
    </tr>
   <tr>
      <th scope="row">##подсети</th>
      <td> - </td>   
      </td>    
    </tr>
   <tr>
      <th scope="row">Капча</th>
      <td><input class="form-control form-control-sm" type="text" placeholder="Капча"></td>  
      </td>    
    </tr>
  </tbody>
</table>
  <a class="btn btn-success btn-block btn-menu-lc" href="cabinet8.html">Сохранить</a>
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

<?php include 'sitefooter.php' ?>

<!-- Bootstrap core JavaScript -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>