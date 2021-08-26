<?php






switch ($request) { 
        case $url_without_last_part."/" :      
            include '_views/domain-view.php'; //dasboard.php
            break;   
        case $url_without_last_part.'/domain-list' :
            include '_views/table-list.php';
            break;
        case $url_without_last_part.'/domain' :
            include '_views/domain-view.php';
            break; 
        case $url_without_last_part.'/orders' :
            include '_views/table-list.php';
            break;  
        case $url_without_last_part.'/order' :
            include '_views/order-view.php';
            break;
        case $url_without_last_part.'/ssl' :
            include '_views/ssl-view.php';
            break; 
        case $url_without_last_part.'/ssl-list' :
            include '_views/table-list.php';
            break;
        case $url_without_last_part.'/billing-profile' :
            include '_views/billing-profile.php';
            break; 
        case $url_without_last_part.'/billing-profiles' :
            include '_views/table-list.php';
            break;
       default:
            include '_views/404.php';
            break;             
};
?>