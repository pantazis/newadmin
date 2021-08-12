
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
"Οικονομικά",]
 ?>

 <?php foreach($arrmenu as $key1 => $value ){?>
<div class="nav-list-item <?php if($key1==0){echo "first-el";} ?>">
    <span class="nav-text1">
        <?php if($key1==0){echo '<span class ="light"></span>';} ?>
        <span><?=$value?></span>
        <?php if($key1==0){echo '<span class ="user_mail">sunray69@gmail.com</span>';} ?>
        <span class="icon-fi-sr-caret-down navdown"></span>
        <?php if($key1==0 || true){ ?>
            <div class="custom-popup shadow-2-strong">
                <?php for($i=1; $i<=2;$i++){ ?>                
                    <a href="#" class="<?php if($i==3){echo "activate";}?>">
                        subcategory  <span class="icon-fi-sr-caret-down navdown"></span>
                    </a>
                <?php } ?>       
            </div>
        <?php } ?> 
    </span>
      </div>
<?php }?>
        </div>
        <div class="nav-list search">
            <div class="search-cont">
                <span class="search-text">Domains <div class="icon-fi-sr-caret-down navdown"></div></span>
            <input class="search-top" type="search" name="" id="">
            </div>
          
            

        </div>
        <div class="nav-list user-icons">
        <?php $arr=[
        "search",
        "fi-sr-bell1",
        "fi-sr-shopping-cart",
        "fi-sr-user",
        "fi-sr-menu-burger",       
        ];
      
        
        ?>
            <?php foreach($arr as $key => $val){ ?>
                <div class="nav-icon-3 <?=$val?>  <?php if($key == 0 || $key == 4){ echo "tablet-only";}?> <?php if($key == 0 ){ echo "search-icon";}?> ">
                    <div class="rel-icon">
                    <?php if($key == 1 || $key == 2){ ?>
                        <span class="num"><?=rand(1,99)?></span>
                    <?php } ?>
                    
                    <i class="icon-<?=$val?>"></i>
                    </div>                   
                    <?php if($val =="fi-sr-bell1"){?>
                        <div class="arrow-div"></div>                                                
                        <div class="popup-notifications shadow-5-strong">
                            <div class="top-box box1">
                                    <span class="text1">οι ειδοποιήσεις μου</span>
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
                                    <span class="text1">οι ειδοποιήσεις μου</span>
                                    <a class="text1">οι ειδοποιήσεις μου</a>
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
                    
                
                    <?php for($i = 0; $i < rand(3,7); $i++ ){ ?>
                       
                        <a href="#"><div class="list-pad">subcategory</div></a>
                      
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
    <img src="public/img/nav/logotablet.svg" alt="">
</div>