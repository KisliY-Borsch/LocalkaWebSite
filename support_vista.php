<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="httpdocs/img/favicon.ico" type="image/x-icon">
  <title>Настройка для Windows Vista</title>
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
<span class="badge badge-secondary">Windows Vista</h2>
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/">Главная</a>
    </li>
    <li class="breadcrumb-item">
        <a href="support.php">Поддержка</a>
    </li>    
    <li class="breadcrumb-item active">Настройки Windows Vista</li>
  </ol>

<!-- About Information Content -->
<div class="row">
	<div class="col-lg-6">
		<img class="img-fluid rounded mb-4" src="httpdocs/img/700x400vista.png" alt="">
	</div>
<div class="col-lg-6">

<h4>Настройка подключения по локальной сети.</h4>

<ul class="list-rectangle">
  <li>1. В меню Пуск откройте Панель управления, затем в разделе Сеть и Интернет откройте ссылку Просмотр состояния сети и задач.</li>
  <li>2. В левой части окна выберите раздел Управление сетевыми подключениями. Запустите Подключение по локальной сети.</li>
  <li>3. В появившемся окне нажмите кнопку Свойства.</li>
  <li>4. В списке Отмеченные компоненты используются этим подключением выберите, не снимая флажка, Протокол Интернета версии 4 (TCP/IPv4). Нажмите кнопку Свойства.</li>
  <li>5. В открывшемся окне обязательно установите селекторы в положения Получить IP-адрес автоматически и Получить адрес DNS-сервера автоматически.</li>
  <li>6. Нажмите кнопку OK в этом окне и кнопку Закрыть в предыдущем.</li>

</ul>

</div>
</div>
<!-- /.About Information Content-->
	
<hr>

<!-- INFORMATION -->
<div class="row">
<div class="col-lg-6">

<h4>Настройка соединения PPPоE</h4>

<ul class="list-rectangle">
  <li>1. В меню Пуск откройте Панель управления, затем в разделе Сеть и Интернет откройте ссылку Просмотр состояния сети и задач.</li>
  <li>2. В левой части окна выберите раздел Установка подключения или сети.</li>
  <li>3. В списке выберите пункт Подключение к Интернету (беспроводное, скоростное или телефонное) и нажмите кнопку Далее.</li>
  <li>4. При появлении диалога Использовать имеющееся подключение? выберите Нет, создать новое подключение и нажмите кнопку Далее.</li>
  <li>5. В списке выберите Высокоскоростное (с PPPoE).</li>
  <li>6. В поля Имя пользователя и Пароль введите имя и пароль для входа в сеть Интернет соответственно.</li>
	</ul>

</div>


<div class="col-lg-6">
<br>
<ul class="list-rectangle">
  <li>7. Для того, чтобы система запомнила пароль и не перезапрашивала его при каждом подключении, установите флажок Запомнить этот пароль (рекомендуется).</li>
  <li>8. В поле Имя подключения введите название подключения, например, TENET или TENET-PPPoE (рекомендуется).</li>
  <li>9. Нажмите кнопку Подключить. Если все сделано правильно, сразу произойдет подключение к сети Интернет.</li>
  <li>10. В случае, если подключение по какой-либо причине не произошло, в появившемся окне выберите пункт Все равно создать это подключение.</li>
  <li>11. Созданное подключение теперь доступно в меню Пуск, раздел Подключение.</li>
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