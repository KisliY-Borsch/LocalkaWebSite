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

<!-- Информационное меню -->
<div class="container">

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
  <a class="btn btn-danger mt-2  mb-1 btn-menu-lc" href="#.php">Выход</a>
</div>              


<!-- Post Content Column -->
<div class="row">
<div class="col-lg-8">
    
<h3 class="mt-1 mb-3">Операции со счетом</h3>

<div class="alert alert-dismissible alert-dark">
  <p class="mb-0">Внимание! Бонусы начисляются в размере 5 (пяти) процентов от пополненной суммы ТОЛЬКО при условии, что на счету ДО пополнения сумма была больше 0. </p>
</div>

<div class="container bg-light text-center pb-3 mb-3 mt-3">
  <img src="httpdocs/img/mc-logo.png"> <img src="httpdocs/img/visa-logo.png">
<a class="btn btn-success btn-menu-lc btn-block mt-1" href="#">Пополнить счет</a>
</div>

<h4 class="mt-4 mb-3">Абонплата списывается 2-мя режимами:</h4>

<ul class="list-rectangle">
  <li>раз в месяц, 1-го числа месяца. До 5-го ожидается проплата. Если 5-е число выпадает на выходные, тогда в понедельник.</li>
  <li>Подневное. при наступлении кредитной отметки сервис автоматически отключается после 1:15 ночи.</li>
</ul>

<hr>

<h4 class="mt-4 mb-3">Просчет для выравнивания баланса в 0.00 с 8 мая по 1 июня и 1 июля</h4>

<div class="table-responsive">
<table class="table table-bordered table-hover table-sm text-center">
  <thead>
    <tr class="bg-light">
      <th scope="row">Сервис</th>
      <th scope="row">Тариф-(скидка%) / период</th>
      <th scope="row">Вид списания</th>
      <th scope="row">Когда</th>
      <th scope="row">сколько</th>
      <th scope="row">Спишется в мае</th>
      <th scope="row">Спишется в июне</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">PPPoE (Login)</td> 
      <td scope="row">120.00 грн в месяц</td>     
      <td scope="row">раз в месяц</td>     
      <td scope="row">1-го числа</td>     
      <td scope="row">120.00 грн</td>     
      <td scope="row">-</td> 
      <td scope="row">120.00</td> 
    </tr>
    <tr>
      <td colspan=5 scope="row">Итого до 1-го июня спишется </td> 
      <td scope="row">--.-- </td>     
      <td scope="row"></td> 
    </tr>
    <tr>
      <td colspan=5 scope="row">На 1-е июня 2020 года у абонента, перед списанием, будет</td> 
      <td scope="row">120.00 </td>     
      <td scope="row"></td> 
    </tr>   
    <tr>
      <td colspan=6 scope="row">Сумма, которая спишется 1 июня</td> 
      <td scope="row">120.00 </td>     
    </tr>      
    <tr class="bg-warning">
      <td colspan=5 scope="row">Рекомендуемая сумма к оплате, c учетом июня 2020 года</td>    
      <td colspan=2 scope="row">240.99 </td>       
    </tr>    
  </tbody>
</table>
</div>

<hr>
<h3 class="mt-4 mb-3">Проведенные платежи</h3>

<div class="table-responsive ">
<table class="table table-bordered table-hover table-sm text-center">
  <thead>
    <tr class="bg-light">
      <th scope="row">Вид Заявки</th>
      <th scope="row">Cумма (бонус) до оплаты</th>
      <th scope="row">Оплаченная сумма</th>
      <th scope="row">Вид оплаты</th>
      <th scope="row">Кто провел</th>
      <th scope="row">Назначение платежа</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td scope="row">12 апреля 2020 15:14:58</td> 
      <td scope="row">1000.99 (0)</td>     
      <td scope="row">1000</td>     
      <td scope="row">liqpay</td>     
      <td scope="row">liqpay</td>     
      <td scope="row">#0000;0000#; Оплата за услуги интернет личными средствами.</td>     
    </tr>
    <tr class="bg-warning">
      <td colspan=2 scope="row">Итого за 2020 год</td> 
      <td scope="row">1000.00</td>     
      <td colspan=3 scope="row">проводок: 4 </td>       
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
<script src="httpdocs/js/jquery.min.js"></script>
<script src="httpdocs/js/bootstrap.bundle.min.js"></script>
</body>
</html>