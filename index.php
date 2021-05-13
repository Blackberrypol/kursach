<?php 

include(__DIR__.'/Env.php');
use DevCoder\DotEnv;

if (!getenv("DEPLOYMENT")){
    (new DotEnv(__DIR__ . '/.env'))->load();
}

$home = getenv("SITE_ADRESS");
$home = array_slice(explode('/',$home), 3);
$home = implode('/',$home);

$routes = Array();
$basepath = '/';
array_push($routes,Array(
    'expression' => "/".$home,
    'function' => function(){
        include_once("home.php");},
    'method' => 'GET'
));

// Parse current url
$parsed_url = parse_url($_SERVER['REQUEST_URI']);//Parse Uri

if(isset($parsed_url['path'])){
   $path = $parsed_url['path'];
}else{
   $path = '/';
}

$method = $_SERVER['REQUEST_METHOD'];
foreach($routes as $route){

  if($route['expression'] == $path){
    if ($route['method'] == $method)
      call_user_func_array($route['function'], Array());
    else
      echo "405";
  }else
    echo $route["expression"];
}
echo $path;
?>