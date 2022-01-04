<?php 
$Names = ["04_Admin_Transaction-Order_view","05_Admin_User-Account_General_view","06_Admin_User-New-Profil-Timologisis_view","07_Admin_User-NewContactForm_view","08_Admin_UserNameServerGroup_view-NOTIFICATION-Centre","09_Admin_UserNameServerGroup_view-NOTIFICATION","10_Admin_UserNameServerGroup_view","11_Admin_UserNameServerGroup_view_HELP-SECTION","12_Admin_UserNameServerGroup_view_HELP-SECTION_CLOSE","13_Admin_Usesr_SSL_main_view","14_User_Transaction-Order_view"];

?>
<pre>
<?php foreach($Names as $key => $name){ ?>
<?php
$num = $key+4;
 $numlength = strlen((string)$key+4);  
if($numlength==1){
    $num ="0".$num;

}else{
    $num =  $num;

}
?>
case $url_without_last_part . "/<?=$num?>":
        $folder = "<?=$name?>";       
        include '_views/'.$folder.'/index.php'; //dasboard.php
        break;
<?php } ?>
</pre>


<pre>
<?php foreach($Names as $key => $name){
$num = $key+4;
$numlength = strlen((string)$key+4);  
if($numlength==1){
   $num ="0".$num;

}else{
   $num =  $num;

}
?>
[$url_without_last_part . '/<?=$num?>', 'under-construction_<?=$num?>'],
<?php } ?>
</pre>
