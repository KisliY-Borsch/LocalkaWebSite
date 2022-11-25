<script language="php">
header("Last-Modified: " . gmdate("D, d M Y H:i:s", time() + 3600*2 + 120) . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate, post-check=0 , pre-check=0");
header("Content-Type: text/html; charset=koi8-r");
header("Pragma: no-cache");
header("Expires: " . gmdate("D, d M Y H:i:s",time() + 3600*2 + 120) . " GMT");

if(isset($_REQUEST["sarea"])) {
    $sarea=$_REQUEST["sarea"]; 
  } 
else { $sarea=""; };


if(isset($_REQUEST["area"])) {
    $area=$_REQUEST["area"]; 
  } 
else { $area="homepage"; };

</script>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=koi8-r">
<meta http-equiv="Content-Language" content="ru">
<META HTTP-EQUIV="Refresh" CONTENT="120">
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
<META HTTP-EQUIV="Cache-Control" content="no-store, no-cache, must-revalidate, post-check=0, pre-check=0 ">
<META HTTP-EQUIV="Generator" CONTENT="Internet-provider Localk@NET">
<link rel=StyleSheet href="http://localka.net/css/stat.css" type="text/css">
<title>:: Localk@NET :: компьютерная сеть ::</title>
</head>

<body background="http://localka.net/images/bg-right.gif" topmargin="0" leftmargin="0" rightmargin="0" bottommargin="0" marginwidth="0" marginheight="0">
<br>

<table bgcolor="#cccccc" border="0" width="902px" align="center" cellspacing="0" cellpading="0">
  <tr>
    <td valign="top">

     <table border="0" bgcolor="#FFFFFF" width="100%" height="62px">
      <tr align="center">
        <td rowspan="2" width="200px">
		<img src="http://localka.net/images/llogo0811.png" width="234px" height="60px">
	</td>
	<td align="right" valign="bottom" colspan="6">&nbsp;</td>
        <td rowspan="2" width="10px"><font face="Arial Black" size="6" color="#3AAF94">;)</font></td>
      </tr>  
      <tr height="30px">
	<td valign="top" align="center"><a class="headermenu" href="index.php?area=main">Главная</a></td>
	<td valign="top" align="center"><a class="headermenu" href="index.php?area=prices">Тарифы</a></td>
	<td valign="top" align="center"><a class="headermenu" href="index.php?area=connect">Подключение<br>к сети</a></td>
	<td valign="top" align="center"><a class="headermenu" href="index.php?area=services">Услуги</a></td>
	<td valign="top" align="center"><a class="headermenu" href="index.php?area=resources">Ресурсы</a></td>
	<td valign="top" align="center"><a class="headermenu" href="index.php?area=uservice">Обслуживание<br>абонентов</a></td>
      </tr> 
     </table>	

  <table border="0" bgcolor="#FFFFFF" width="100%" height="40px" cellpading=0 cellspacing=0>
  <tr>
   <td align="center" valign="top" bgcolor="#3AAF94">Menu<br>submenu</td>
  </tr>
  </table>	

  <table border="0" bgcolor="#FFFFFF" cellpading=0 cellspacing=0 width="100%">
       <tr>
          <td colspan="2">&nbsp;</td><td colspan="3">&nbsp;</td>
       </tr>
       <tr>
	  <td width="4px" height="500">&nbsp;</td>
	    <td width="170px" valign="top">
	    &nbsp;
	    </td>
	    <td width="4px">&nbsp;</td>
	    <td valign="top">
		Запрошенная Вами страничка не найдена на сервере. 
	    </td>
	    <td width="4px">&nbsp;</td>
       </tr>
       <tr>
          <td colspan="2">&nbsp;</td><td colspan="3">&nbsp;</td>
       </tr>
  </table>

  <table border="0" bgcolor="#FFFFFF" width="100%" cellpading=0 cellspacing=0>
   <tr>    
   <td align="center" valign="middle" bgcolor="#3AAF94" height="10px">
	&nbsp;
     <!--<img src="http://localka.net/counter/count.php"> -->
   </td>
   </tr>
  </table>

  <table border="0" bgcolor="#FFFFFF" width="100%" valign="middle" align="center" cellpading=0 cellspacing=0>
  <tr>    
   <td align="center" bgcolor="#FFFFFF" valign="middle" height="80" >
    &nbsp;
<!--    <img src="http://localka.net/OurBanner.PNG">-->
   </td>
  </tr>
  </table>

  </td>
  </tr>
</table>
<br>
</body>

</html>
<? unset($sarea); ?>