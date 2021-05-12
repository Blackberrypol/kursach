<?php

header('Content-Type: text/html; charset=utf-8');

include(__DIR__.'/Env.php');
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

?>