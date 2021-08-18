<?php
$request = $_SERVER['REQUEST_URI'];
echo $request;

switch ($request) {
    case $request :      
        include '_views/dashboard.php';
        break;   
    case $request.'domains' :
        include '_views/table-list.php';
        break;
    case $request.'domain' :
        include '_views/domain-view.php';
        break; 
    case $request.'orders' :
        include '_views/table-list.php';
        break;  
    case $request.'order' :
        include '_views/order-view.php';
        break;
    case $request.'ssl' :
        include '_views/ssl-view.php';
        break; 
    case $request.'ssl-list' :
        include '_views/table-list.php';
        break;
    case $request.'billing-profile' :
        include '_views/billing-profile.php';
        break; 
    case $request.'billing-profiles' :
        include '_views/table-list.php';
        break;
    case $request.'order-doc' :
        include '_views/order-doct.php';
        break;             
  //  default:
      //  http_response_code(404);
       // include '/views/404.php';
     //   break;
};
?>