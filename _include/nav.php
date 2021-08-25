
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
        <svg class="curve c1" version="1.1" preserveAspectRatio="none" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 30 75" style="enable-background:new 0 0 30 75;" xml:space="preserve">

<path class="st0" d="M18.2,60.9L18.2,60.9c0.2,0.1,0.4,0.1,0.6,0.2l0,0c6,2,10.6,7.5,10.6,13.9V0c0,6.2-4.4,11.5-10.1,13.7l0,0
	c-0.5,0.2-1,0.4-1.5,0.5l0,0c-5,1.8-9.2,4.9-12.2,9s-4.8,9-4.8,14.3c0,5.4,1.8,10.4,4.9,14.5S13.1,59.3,18.2,60.9z"/>
</svg>
        
    <svg class="curve c2" version="1.1" preserveAspectRatio="none" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 30 75" style="enable-background:new 0 0 30 75;" xml:space="preserve">

<path class="st0" d="M11.8,14.1L11.8,14.1c-0.2-0.1-0.4-0.1-0.6-0.2l0,0C5.3,11.8,0.7,6.4,0.7,0v75c0-6.2,4.4-11.5,10.1-13.7l0,0
	c0.5-0.2,1-0.4,1.5-0.5l0,0c5-1.8,9.2-4.9,12.2-9s4.8-9,4.8-14.3c0-5.4-1.8-10.4-4.9-14.5S16.9,15.7,11.8,14.1z"/>
</svg>
        
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
"Οικονομικά",];

$sub1 = [
    ["text"=>"Πίνακας Ελέγχου","icon"=>"icon-fi-sr-sign-out","class"=>"","attr"=>""],
    ["text"=>'<span class="activeText">Απενεργοποίηση</span><span class="notActiveText">Eνεργοποίηση</span>',"icon"=>"icon-fi-sr-power","class"=>"active button2","attr"=>'data-bs-toggle="modal" data-bs-target="#disableAccount"'],
];




 ?>

 <?php foreach($arrmenu as $key1 => $value ){?>
<div class="nav-list-item <?php if($key1==0){echo "first-el";} ?>">
    <span class="nav-text1">
        <?php if($key1==0){echo '<span class ="light"></span>';} ?>
        <span><?=$value?></span>
        <?php if($key1==0){echo '<span class ="user_mail">sunray69@gmail.com</span>';} ?>
        <span class="icon-fi-sr-caret-down navdown"></span>
        <?php if($value=="An Ubavicious" ){ ?>
            <div class="custom-popup shadow-2-strong"> 
            <!-- Button trigger modal -->           
            <?php foreach($sub1 as  $value ){?>                  
                    <a href="#" class="<?=$value["class"];?>" <?=$value["attr"]?>>
                     <?=$value["text"];?> <span class="<?=$value["icon"];?>"></span>
                    </a>
            <?php }?>                   
            </div>
        <?php }else{ ?> 
            <div class="custom-popup shadow-2-strong">                
                <?php for($i=1; $i<=2;$i++){ ?>                
                    <a href="#" class="">
                        subcategory  <span class="icon-fi-sr-caret-down navdown"></span>
                    </a>
                <?php } ?>       
            </div>
        <?php } ?>    
    </span>
      </div>
<?php }?>
        </div>
<?php $bubbles=[
"Διάλεξε πίνακα",
" Domain",
" Domain (orders)",
" Domain (trades)",
" Email (users)",
" VAT",
" Documents"] ?>


        <div class="nav-list search">
            <div class="search-cont">
                <span class="search-text">Domains <div class="icon-fi-sr-caret-down navdown"></div></span>
            <input class="search-top" type="search" placeholder="Αναζήτηση" name="" id="">
          
            <div class="custom-popup ss  shadow-2-strong">
                <div class="search-cont">
                <span class="search-text">Domains <div class="icon-fi-sr-caret-down navdown"></div></span>
            <input class="search-top" type="search" placeholder="Αναζήτηση" name="" id="">        
            </div>
                <div class="bubble-cont">
                <div class="arrow-div"></div>
                    <?php foreach ($bubbles as  $value) {?>
                        <div class="bubble"><span class="b_in"><?=$value?></span></div>
                        <?php }?>
                    </div>             
                                            
                </div>
            </div>
        </div>

  
        <div class="nav-list user-icons">
        <?php $arr=[
        "icon-fi-sr-signal-alt-2",
        "logo-mobile",        
        "search",
        "fi-sr-bell1",
        "fi-sr-shopping-cart",
        "fi-sr-user",
        "fi-sr-menu-burger",       
        ];
      
        
        ?>
            <?php foreach($arr as $key => $val){ ?>
                <div class="nav-icon-3  <?=$val?><?php if($val == "search" || $val == "fi-sr-menu-burger"){ echo " tablet-only";}?>
                   <?php if($key == 0 ){ echo "search-icon";}?>">
                    <div class="rel-icon">
                    <?php if($val == "fi-sr-bell1" || $val == "fi-sr-shopping-cart"){ ?>
                        <span class="num"><?=rand(1,99)?></span>
                    <?php } ?>
                    
                    <i class="icon-<?=$val?>"></i>
                    </div>                   
                    <?php if($val =="fi-sr-bell1"){?>
                        <div class="arrow-div"></div>                                                
                        <div class="popup-notifications shadow-5-strong">
                            <div class="top-box box1">
                                    <span class="text1">Οι ειδοποιήσεις μου</span>
                                <hr>
                            </div>
                            <?php for ($x = 0; $x <= 2; $x++) { ?>
                                <div class="message color<?=$x+1?>">
                                    <div class="mm flex-c">
                                      <span class="m_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id orci pellentesque, pulvinar diam a, euismod lacus.</span>
                                    </div>
                                <div class="date_m flex-c">
                                    <span class="date">
                                        12/07/2021<br>
                                        23:05
                                    </span>
                                </div>
                                <div class="remove flex-c">
                                    <i class="icon-fi-sr-cross-small"></i>
                                </div>
                                </div>
                            <?php }?>
                            <div class="bottom-box box1">
                            <hr>
                                <div class="actions-b">
                                    <span class="text1">Ανάγνωση Όλων</span>
                                    <a class="text1">Καθαρισμός</a>
                                </div>

                            </div>                      
                        </div>
                    <?php } ?>
                    <?php if($val =="fi-sr-user"){?>
                        <div class="arrow-div"></div>                                                
                        <div class="popup-notifications shadow-5-strong">
                            <div class="top-box box1">
                                    <span class="text1">Ρυθμίσεις Προφίλ</span>
                                <hr>
                            </div>
                            <label class="toggle-container">
                            <input class="toggle-checkbox" type="checkbox">
                            <div class="toggle-slot">
                                <div class="sun-icon-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" class="iconify sun-icon" data-icon="feather-sun" data-inline="false"><g fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="5"></circle><path d="M12 1v2"></path><path d="M12 21v2"></path><path d="M4.22 4.22l1.42 1.42"></path><path d="M18.36 18.36l1.42 1.42"></path><path d="M1 12h2"></path><path d="M21 12h2"></path><path d="M4.22 19.78l1.42-1.42"></path><path d="M18.36 5.64l1.42-1.42"></path></g></svg>
                                </div>
                                <div class="toggle-button"></div>
                                <div class="moon-icon-wrapper">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true"  focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" class="iconify moon-icon" data-icon="feather-moon" data-inline="false"><g fill="none" stroke="#0e0c28" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 12.79A9 9 0 1 1 11.21 3A7 7 0 0 0 21 12.79z"></path></g></svg>
                                </div>
                            </div>
                            </label>
                           
                            <div class="bottom-box box1">
                            <hr>
                                <div class="actions-b">
                                    <span class="text1"></span>
                                    <a class="text1"></a>
                                </div>

                            </div>                      
                        </div>
                    <?php } ?>

                </div>
            <?php } ?>
            
        </div> 
       
        

    </div>    
</nav>
<nav class="sidebar navbar left">
  
   
    <div class="close-menu-cont left">
    <div class="relative">
    <svg class="close-menu" xmlns="http://www.w3.org/2000/svg" width="54.03" height="112.601" viewBox="0 0 54.03 112.601"><g transform="translate(-320.97 -4)"><path d="M0,56.278C0,40.251,12.709,26.584,30.548,21.309h0q1.407-.311,2.766-.74h0C43.6,17.323,54.03,9.337,54.03,0h0V112.6h0c0-9.6-10.838-17.769-21.581-20.829l-.009,0q-.494-.14-1-.266l-.006,0C13.134,86.424.87,75.022,0,56.278Z" transform="translate(320.97 4)" /><g transform="translate(344.718 51.035)"><path d="M.455,8.2,8.165.491a1.557,1.557,0,0,1,2.2,2.2L3.759,9.3l6.608,6.608a1.557,1.557,0,1,1-2.2,2.2L.455,10.4A1.556,1.556,0,0,1,.455,8.2Zm9.27-.467,6.121-6.451a1.519,1.519,0,0,1,2.226,0,1.722,1.722,0,0,1,0,2.346L13.064,8.906l5.008,5.278a1.722,1.722,0,0,1,0,2.346,1.519,1.519,0,0,1-2.226,0L9.725,10.079A1.722,1.722,0,0,1,9.725,7.733Z" transform="translate(0.001 -0.035)" class="arrow" /></g></g></svg>
    </div>

    </div>

<?php $arr = [
"fi-sr-grid",
"fi-sr-globe",
"fi-sr-database",
"fi-sr-shield-check",
"fi-sr-users",
"fi-sr-money",
"fi-sr-box",
];

$arr2 = [
"Dashboard",
"Domains",
"Hosting",
"SSL Certificates",
"Users",
"Οικονομικά",
"Προϊόντα"
    ];


$links =[
    [$url_without_last_part."/","dashboard" ],
    [$url_without_last_part.'/domain-list','domain-list' ],
    [$url_without_last_part.'/domain','domain' ],
    [$url_without_last_part.'/orders','orders' ],
    [$url_without_last_part.'/order',"order" ],
    [$url_without_last_part.'/ssl',"ssl" ],
    [$url_without_last_part.'/ssl-list',"ssl-list" ],
    [$url_without_last_part.'/billing-profile',"billing-profile" ],
    [$url_without_last_part.'/billing-profiles','billing-profiles' ],
    [$url_without_last_part.'/order-doc','order-doc']
]; 




?>
<ul class="side-nav-list">
<li class="nav-list-item2">
        
        <div class="nav-text2 title">
            ADMIN MENU         
        </div>
               </li>
<?php foreach($arr as $key => $value){ ?>
    <li class="nav-list-item2">
        <div class="img-box">
            <span class="nav-icons-side icon-<?=$value?>" alt=""></span>           
        </div>
        <div class="nav-text2"><?=$arr2[$key]?>
            <span class="arrow-right">
                <div class="icon-fi-sr-angle-right"></div>
            </span>
        </div>
           <?php if($key > 0 && $key < count($arr)-1   ){ ;?>
         
                <div class="sub-category">
                    
                
                    <?php  foreach($links as $value){ ; ?>
                       
                        <a href="<?=$value[0]?>"><div class="list-pad"><?=$value[1]?></div></a>
                      
                    <?php } ?>
                               
                </div>
           
            <?php } ?>
    </li>
<?php } ?>
</ul>

</nav>
<nav class="sidebar navbar right">
  
   
    <div class="close-menu-cont right">
    <div class="relative">    
    <svg xmlns="http://www.w3.org/2000/svg" width="58" height="112.601" viewBox="0 0 58 112.601"><defs></defs><path class="close-menu" d="M58,56.278c0-16.027-13.643-29.694-32.793-34.969h0q-1.51-.311-2.969-.74h0C11.191,17.323,0,9.337,0,0H0V112.6H0C0,103,11.634,94.832,23.167,91.772l.01,0q.53-.14,1.069-.266l.006,0C43.9,86.424,57.066,75.022,58,56.278Z"/><g transform="translate(20.598 46.928)"><path class="arrow" d="M18.077,8.2,10.368.491a1.557,1.557,0,0,0-2.2,2.2L14.773,9.3,8.165,15.908a1.557,1.557,0,0,0,2.2,2.2L18.077,10.4A1.556,1.556,0,0,0,18.077,8.2Zm-9.27-.467L2.687,1.283a1.519,1.519,0,0,0-2.226,0,1.722,1.722,0,0,0,0,2.346L5.468,8.906.461,14.184a1.722,1.722,0,0,0,0,2.346,1.519,1.519,0,0,0,2.226,0l6.121-6.451A1.722,1.722,0,0,0,8.807,7.733Z" transform="translate(0.001 -0.035)"/></g></svg>
    </div>

    </div>

<?php $arr = [
"fi-sr-grid",
"fi-sr-user",
"fi-sr-globe",
"fi-sr-database",
"fi-sr-shield-check",
"fi-sr-money",

];

$arr2 = [
"Πίνακας Ελέγχου",
"Λογαρισμός",
"Domains",
"Hosting",
"SSL Certificates",
"Οικονομικά",
    ];




?>
<ul class="side-nav-list">
<li class="nav-list-item2">
        
        <div class="nav-text2 title">
        <span class="nav-text1">
      
        <span class="light"></span>
        <span class="user_name">An Ubavicious</span>
    
        <span class="icon-fi-sr-sign-out icon-t"></span> 
        <span class="icon-fi-sr-power icon-t"></span>
        

           
            
    </span>         
        </div>
               </li>
<?php foreach($arr as $key => $value){ ?>
    <li class="nav-list-item2">
        <div class="img-box">
            <span class="nav-icons-side icon-<?=$value?>" alt=""></span>           
        </div>
        <div class="nav-text2"><?=$arr2[$key]?>
            <span class="arrow-right">
                <div class="icon-fi-sr-angle-right"></div>
            </span>
        </div>
           <?php if($key > 0 && $key < count($arr)-1   ){ ;?>
         
                <div class="sub-category">
                    
                
                    <?php for($i = 0; $i < rand(3,7); $i++ ){ ?>
                       
                        <a href="#"><div class="list-pad">subcategory</div></a>
                      
                    <?php } ?>
                               
                </div>
           
            <?php } ?>
    </li>
<?php } ?>
</ul>

</nav>
<div class="logo-button">    
<svg class="img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="74.546" height="144.725" viewBox="0 0 74.546 144.725"><defs><style>.a{fill:none;}.c{fill:#f8f8fb;}.d{clip-path:url(#a);}.e{fill:#1eb6db;}.f{fill:#2e435e;}.g{fill:#fff;}</style><clipPath id="a"><path class="a" d="M101.388,165.105a25.578,25.578,0,1,0,25.578-25.578,25.568,25.568,0,0,0-25.578,25.578h0" transform="translate(-101.388 -139.527)"/></clipPath></defs><path class="backg" d="M74.546,72.333c0-20.6-17.535-38.165-42.148-44.945h0q-1.941-.4-3.817-.951h0C14.384,22.265,0,12,0,0H0V144.725H0c0-12.337,14.954-22.838,29.776-26.771l.012,0q.681-.18,1.374-.342l.008,0C56.425,111.079,73.346,96.424,74.546,72.333Z"/><g transform="translate(29.236 62.954)"><path class="c" d="M18.073,8.2,10.365.491a1.557,1.557,0,1,0-2.2,2.2L14.769,9.3,8.163,15.9a1.557,1.557,0,1,0,2.2,2.2L18.073,10.4A1.555,1.555,0,0,0,18.073,8.2ZM8.805,7.732,2.686,1.282a1.518,1.518,0,0,0-2.226,0,1.721,1.721,0,0,0,0,2.345L5.467,8.9.46,14.181a1.721,1.721,0,0,0,0,2.345,1.518,1.518,0,0,0,2.226,0l6.119-6.449A1.721,1.721,0,0,0,8.805,7.732Z" transform="translate(0.001 -0.035)"/></g><g transform="translate(10.695 46.784)"><g class="d"><g transform="translate(0 0)"><path class="e" d="M152.545,165.106a25.578,25.578,0,1,1-25.578-25.578h0a25.568,25.568,0,0,1,25.578,25.578" transform="translate(-101.388 -139.528)"/><g transform="translate(3.66 3.646)"><path class="f" d="M187.251,203.3a21.932,21.932,0,1,1-21.932-21.932h0A21.932,21.932,0,0,1,187.251,203.3" transform="translate(-143.387 -181.37)"/></g><g transform="translate(27.322 3.601)"><path class="g" d="M416.915,215.989a1.808,1.808,0,0,1-1-.287,2.021,2.021,0,0,1-.737-2.745l18.095-31.109a2.01,2.01,0,1,1,3.482,2.008l-18.081,31.123A2.051,2.051,0,0,1,416.915,215.989Z" transform="translate(-414.917 -180.847)"/></g><g transform="translate(17.066 12.327)"><path class="g" d="M299.224,307.4a1.808,1.808,0,0,1-1-.287,2.021,2.021,0,0,1-.737-2.745L310.5,281.987A2.01,2.01,0,0,1,313.986,284l-13.015,22.383A1.953,1.953,0,0,1,299.224,307.4Z" transform="translate(-297.225 -280.986)"/></g><g transform="translate(1.907 12.368)"><path class="g" d="M125.273,316.312a1.808,1.808,0,0,1-1-.287,2.021,2.021,0,0,1-.737-2.745l17.931-30.822a2.01,2.01,0,0,1,3.482,2.008l-17.917,30.823A2,2,0,0,1,125.273,316.312Z" transform="translate(-123.275 -281.456)"/></g></g></g></g></svg>
</div>