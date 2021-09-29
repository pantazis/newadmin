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

    default:
        include '_views/404.php';
        break;
};
