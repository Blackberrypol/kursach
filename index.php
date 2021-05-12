<?php 

$routes = Array();
$basepath = '/';
array_push($routes,Array(
    'expression' => "/",
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
    echo "404";
}
?>