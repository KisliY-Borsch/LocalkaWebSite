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

<!-- Page Content -->
<div class="container">
<h2 class="mt-4 mb-3">Заявка на подключение к сети
<span class="badge badge-secondary">Localka.net</h1>
</h2>

<form>
<div class="table-responsive">
<table class="table table-sm text-center">
  <thead>
    <tr>
      <th class="table-dark table-custom-body p-2" colspan=2 scope="col">Персональные Данные</th>	  
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Имя</th>
      <td><input class="form-control form-control-sm" type="text" placeholder="Имя"></td>
    </tr>
    <tr>
      <th scope="row">Фамилия</th>
      <td><input class="form-control form-control-sm" type="text" placeholder="Фамилия"></td>	  	  
    </tr>
    <tr>
      <th scope="row">Адрес подключения</th>
      <td><input class="form-control form-control-sm" type="text" placeholder="Адрес подключения"></td>	  
    </tr>
    <tr>
      <th scope="row">Улица</th>
      <td><input class="form-control form-control-sm" type="text" placeholder="Улица"></td>    
    </tr>	
    <tr>
      <th scope="row">Дом</th>
      <td><input class="form-control form-control-sm" type="text" placeholder="Дом"></td>    
    </tr>
    <tr>
      <th scope="row">Квартира</th>
      <td><input class="form-control form-control-sm" type="text" placeholder="Квартира"></td>    
    </tr>
    <tr>
      <th scope="row">Контактная Информация</th>
      <td><input class="form-control form-control-sm" type="text" placeholder="Контактная Информация"></td>    
    </tr>
    <tr>
      <th scope="row">Телефон</th>
      <td><input class="form-control form-control-sm" type="text" placeholder="Телефон"></td>    
    </tr>
    <tr>
      <th scope="row">Электронный адрес</th>
      <td><input class="form-control form-control-sm" type="text" placeholder="Электронный адрес"></td>    
    </tr>
	  <thead>
    <tr>
      <th class="table-dark table-custom-body p-2" colspan=2 scope="col">Заказ</th>	  
    </tr>
  </thead>
    <tr>
      <th scope="row">Описание заказа</th>
      <td><input class="form-control form-control-sm" type="text" placeholder="Описание заказа"></td>    
    </tr>	
	  <thead>
    <tr>
      <th class="table-dark table-custom-body p-2" colspan=2 scope="col">Дополнительная информация</th>	  
    </tr>
  </thead>	
    <tr>
      <th scope="row">Коментарий</th>
      <td><input class="form-control form-control-sm" type="text" placeholder="Коментарий"></td>    
    </tr>		
  </tbody>
</table>
</div>
<a class="btn btn-success mt-2  mb-1 btn-block " href="#.php">Отправить заявку</a>
</form>

<hr>

  </div>
  <!-- /.container -->

<!-- Footer -->

<?php include 'sitefooter.php' ?>

<!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script src="httpdocs/js/jquery.min.js"></script>
<script src="httpdocs/js/bootstrap.bundle.min.js"></script>
</body>
</html>