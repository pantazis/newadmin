
<nav class="sidebar top shadow-2-strong">
    <div class="logo">
        <div class="logo-box">       
            <img src="./public/img/nav/logo.svg" alt="" class="logo-img">
        </div>  
        <div class="burger-menu">
            <span class="icon-fi-sr-menu-burger" alt=""></span>
        </div>     
        <img class="curve c1" src="./public/img/nav/1menu_bg.svg" alt="">
        <img class="curve c2" src="./public/img/nav/2menu_bg.svg" alt="">
        
    </div>
    <div class="nav-container">

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