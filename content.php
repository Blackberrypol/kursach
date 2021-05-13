<?php
$pr = $_POST['texxt'];
session_start();
$fl = $_SESSION['flag'];
if( isset( $_POST['goo'] ) )
    {
      include_once(__DIR__.'/Env.php');
      use DevCoder\DotEnv;
      if (!getenv("DEPLOYMENT")){
        
        (new DotEnv(__DIR__ . '/.env'))->load();
      }

      $server = getenv("DB_HOST");
      $username = getenv("DB_USER");
      $password = getenv("DB_PASSWORD");
      $database = getenv("DB_DATABASE");



      $mysqli = new mysqli($server,$username,$password,$database);

      if(!$mysqli){
          die("<p>Ошибка подключения к БД</p><p>Код ошибки: ".$mysqli->connect_errno." </p>
      <p>Описание ошибки: ".$mysqli->connect_error. "</p>");

      }
      $mysqli->set_charset('utf8');

      $address_site=getenv("SITE_ADRESS");


        $sql = "UPDATE `text` SET `information` = '$pr' WHERE `text`.`id` = '$fl'";
        mysqli->query($mysqli, $sql);
    }
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Темы</title>
    <link rel="stylesheet"type="text/css"href="styles2.css">
 </head>
  <body>
<div id="header">
    <p>
		<a href="/">Главная страница</a>
	</p>
</div>
 <div id="wrapper">

    <div id="head">
     <h1>Информация</h1>
    </div>

<div id="sidebar">
         <br/>
         <a href="t1.php">Селекторы CSS: основные, комбинаторы, атрибуты, псевдо-классы, псевдо-элементы.</a>
         <br/>
         <br/>
         <a href="t2.php">Цвет, положение, поток в CSS.</a>
         <br/>
         <br/>
         <a href="t3.php">Коробочная модель.</a>
         <br/>
         <br/>
         <a href="t4.php">Единицы измерения в CSS.</a>
         <br/>
         <br/>
         <a href="t5.php">Каскадирование.</a>
         <br/>
         <br/>
         <a href="t6.php">Важность.Наследование.Специфичность.</a>
         <br/>
        </div>

 <div id="content">
<form method="post">
 <input type="submit" value="Сохранить изменения" class="cnop" name="goo">
  <br/>
     <textarea class="editorSheet" name="text">
<?php
echo $_POST['text'];
?>
     </textarea>
    </form>
   </div>

  </div>

 </body>
</html>
