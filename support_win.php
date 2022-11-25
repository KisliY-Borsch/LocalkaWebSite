<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="httpdocs/img/favicon.ico" type="image/x-icon">
  <title>Настройка для Windows XP</title>
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
<span class="badge badge-secondary">Windows XP</h2>
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="/">Главная</a>
    </li>
    <li class="breadcrumb-item">
        <a href="support.php">Поддержка</a>
    </li>    
    <li class="breadcrumb-item active">Настройки Windows XP</li>
  </ol>

<!-- About Information Content -->
<div class="row">
	<div class="col-lg-6">
		<img class="img-fluid rounded mb-4" src="httpdocs/img/win72.png" alt="">
	</div>
<div class="col-lg-6">

<h4>Настройка подключения по локальной сети.</h4>

<ul class="list-rectangle">
  <li>1. На рабочем столе нажмите на кнопку Пуск, затем - Панель управления. Откройте Сетевые подключения.</li>
  <li>2. Запустите Подключение по локальной сети и в появившемся окне нажмите Свойства.</li>
  <li>3. В списке Компоненты, используемые этим подключением выберите, не снимая галочки, Протокол Интернета (TCP/IP).</li>
  <li>4. Нажмите Свойства.</li>
  <li>В открывшемся окне обязательно установите селекторы в положения Получить IP-адрес автоматически и Получить адрес DNS-сервера автоматически.</li>  
  <li>6. Нажмите OK в этом и предыдущем окнах.</li>
  <li>7. Нажмите Закрыть в окне Подключение по локальной сети.</li>

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
  <li>1. На рабочем столе нажмите на кнопку Пуск, затем - Панель управления.</li>
  <li>2. Откройте Сетевые подключения.</li>
  <li>33. Запустите Мастер новых подключений или создание нового подключения или в пункте меню Файл выберите Новое подключение:</li>
  <li>4. Нажмите Далее.</li>
  <li>5. Выберите Подключить к Интернету и нажмите Далее.</li>  
  <li>6. Выберите Установить подключение вручную и нажмите Далее.</li>
  <li>7. Выберите Через высокоскоростное соединение, запрашивающее имя пользователя и пароль и нажмите Далее.</li>
  <li>8. В поле Имя поставщика услуг введите название соединения, например: Интернет, Internet, LC, Localka или Localka-PPPoE (рекомендуется). Нажмите Далee.</li>
  <li>9. В поля Имя пользователя, Пароль, Подтверждение пароля введите имя и пароль для входа в сеть Интернет, которые указаны в регистрационных документах, в полях PPPoE Логин, PPPoE Пароль соответственно и нажмите Далее.</li>
  <li>10. Установите пункт Добавить ярлык подключения на рабочий стол и нажмите Готово.</li>
  <li>11. Вот и все. Для подключения к сети Интернет запустите созданный ярлык и нажмите Подключение.</li>
 </ul>

</div>


<div class="col-lg-6">

<h4 class="mt-2 mb-3">Включение программно отключенной сетевой карты (ethernet-адаптера)</h4>
<ul class="list-rectangle">
  <li>1. На рабочем столе нажмите на кнопку Пуск, в открывшемся меню откройте Панель управления. Затем откройте Сетевые подключения.</li>
  <li>2. В списке подключений найдите нужное Подключение по локальной сети, нажмите на нем правой кнопкой мыши и выберите в меню пункт Включить.</li>

<h6>Для предотвращения отключения сетевой карты в дальнейшем, рекомендуем сделать следующее:</h6>
  <li>1. На рабочем столе нажмите на кнопку Пуск, в открывшемся меню откройте Панель управления. Затем откройте Сетевые подключения.</li>
  <li>2. В появившемся окне напротив названия сетевой карты нажмите кнопку Настроить.</li>
  <li>4. В появившемся окне выберите вкладку Управление электропитанием.</li>
  <li>5. Далее снимите флажок Разрешить отключение этого устройства для экономии энергии.</li>
  <li>6. Нажмите кнопку OK внизу окна.</li>
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