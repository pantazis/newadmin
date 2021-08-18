<?php
$request = $_SERVER['REQUEST_URI'];


switch ($request) {
    case $request :      
        include '_views/home.php';
        break;   
    case $request.'about' :
        include '_views/about.php';
        break;
  //  default:
      //  http_response_code(404);
       // include '/views/404.php';
     //   break;
};
?>