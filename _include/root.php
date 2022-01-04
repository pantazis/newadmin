<?php
switch ($request) {
    case $url_without_last_part . "/":
        $folder = "00_Admin_Domain_view";        
        include '_views/'.$folder.'/index.php'; //dasboard.php
        break;
    case $url_without_last_part . "/01":
        $folder = "01_Admin_Profile-Timologisis_view";        
        include '_views/'.$folder.'/index.php'; //dasboard.php
        break;
    case $url_without_last_part . "/02":
        $folder = "02_Admin_Profile-Timologisis_view_VIES";        
        include '_views/'.$folder.'/index.php'; //dasboard.php
        break;
    case $url_without_last_part . "/03":
        $folder = "03_Admin_Transaction-Order_parastatika_view";        
        include '_views/'.$folder.'/index.php'; //dasboard.php
        break;
    case $url_without_last_part . "/04":
            $folder = "04_Admin_Transaction-Order_view";       
            include '_views/'.$folder.'/index.php'; //dasboard.php
            break;
    case $url_without_last_part . "/05":
            $folder = "05_Admin_User-Account_General_view";       
            include '_views/'.$folder.'/index.php'; //dasboard.php
            break;
    case $url_without_last_part . "/06":
            $folder = "06_Admin_User-New-Profil-Timologisis_view";       
            include '_views/'.$folder.'/index.php'; //dasboard.php
            break;
    case $url_without_last_part . "/07":
            $folder = "07_Admin_User-NewContactForm_view";       
            include '_views/'.$folder.'/index.php'; //dasboard.php
            break;
    case $url_without_last_part . "/08":
            $folder = "08_Admin_UserNameServerGroup_view-NOTIFICATION-Centre";       
            include '_views/'.$folder.'/index.php'; //dasboard.php
            break;
    case $url_without_last_part . "/09":
            $folder = "09_Admin_UserNameServerGroup_view-NOTIFICATION";       
            include '_views/'.$folder.'/index.php'; //dasboard.php
            break;
    case $url_without_last_part . "/10":
            $folder = "10_Admin_UserNameServerGroup_view";       
            include '_views/'.$folder.'/index.php'; //dasboard.php
            break;
    case $url_without_last_part . "/11":
            $folder = "11_Admin_UserNameServerGroup_view_HELP-SECTION";       
            include '_views/'.$folder.'/index.php'; //dasboard.php
            break;
    case $url_without_last_part . "/12":
            $folder = "12_Admin_UserNameServerGroup_view_HELP-SECTION_CLOSE";       
            include '_views/'.$folder.'/index.php'; //dasboard.php
            break;
    case $url_without_last_part . "/13":
            $folder = "13_Admin_Usesr_SSL_main_view";       
            include '_views/'.$folder.'/index.php'; //dasboard.php
            break;
    case $url_without_last_part . "/14":
            $folder = "14_User_Transaction-Order_view";       
            include '_views/'.$folder.'/index.php'; //dasboard.php
            break;
    case $url_without_last_part . "/dashboard":
            $folder = "dashboard";        
            include '_views/'.$folder.'/index.php'; //dasboard.php
            break;
    case $url_without_last_part . "/tables":
        $folder = "tables";        
        include '_views/'.$folder.'/index.php'; //dasboard.php
        break;
    default:
        include '_views/404.php';
        break;
};
