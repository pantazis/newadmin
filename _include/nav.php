
<nav class="sidebar top shadow-2-strong">
    <div class="logo">
        <div class="logo-box">       
            <img src="./public/img/nav/logo.svg" alt="" class="logo-img">            
        </div> 
        <div class="logo-text">
        <span class="icon-logo_text" alt=""></span>
        </div> 
        <div class="burger-menu">
            <span class="icon-fi-sr-menu-burger" alt=""></span>
        </div>     
        <img class="curve c1" src="./public/img/nav/1menu_bg.svg" alt="">
        <img class="curve c2" src="./public/img/nav/2menu_bg.svg" alt="">
        
    </div>
    <div class="nav-container">
        <div class="nav-list list1">
        <?php $arrmenu =[
"An Ubavicious",
"Πίνακας Ελέγχου",
"Λογαριασμός",
"Domains",
"Hosting",
"SSL Certificates",
"Οικονομικά",]
 ?>

 <?php foreach($arrmenu as $value ){?>
<div class="nav-list-item">
    <span class="nav-text1"><?=$value?></span><div class="icon-fi-sr-caret-down navdown"></div>
</div>
<?php }?>
 

        </div>
        <div class="nav-list search">
            1

        </div>
        <div class="nav-list user-icons">
            2

        </div> 
       
        

    </div>    
</nav>
<nav class="sidebar navbar">

<?php $arr = [
"fi-sr-grid",
"fi-sr-globe",
"fi-sr-database",
"fi-sr-shield-check",
"fi-sr-users",
"fi-sr-money",
"fi-sr-box",
];?>
<ul class="side-nav-list">
<?php foreach($arr as $value){ ?>
    <li>
        <div class="img-box">
            <span class="nav-icons-side icon-<?=$value?>" alt="">
        </div>
    </li>
<?php } ?>
</ul>

</nav>