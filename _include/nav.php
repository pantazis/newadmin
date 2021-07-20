
<nav class="sidebar top shadow-2-strong">
    <div class="logo">
        <div class="logo-box">
            <img src="./public/img/nav/logo.svg" alt="" class="logo-img">
        </div>       
        <img class="curve c1" src="./public/img/nav/1menu_bg.svg" alt="">
        <img class="curve c2" src="./public/img/nav/2menu_bg.svg" alt="">
        
    </div>
    <div class="nav-container">

    </div>    
</nav>
<nav class="sidebar navbar">

<?php $arr = [
"fi-sr-grid.svg",
"fi-sr-globe.svg",
"fi-sr-database.svg",
"fi-sr-shield-check.svg",
"fi-sr-users.svg",
"fi-sr-money.svg",
"fi-sr-box.svg",
];?>
<ul class="side-nav-list">
<?php foreach($arr as $value){ ?>
    <li>
        <div class="img-box">
            <img class="nav-icons-side" src="./public/img/nav/<?=$value?>" alt="">
        </div>
    </li>
<?php } ?>
</ul>

</nav>