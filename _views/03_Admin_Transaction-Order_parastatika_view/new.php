
<?php
$type=["Tιμολογιο","Aποδειξη"];

 for ($x = 0; $x <= 10; $x++) { ?>
<div class="big-row-parent">
    <div class="big-row-in">  
        <div class="el-left">
            <div class="icon-fi-sr-angle-down">      
            </div>
            <div class="info-title-big"><?=$type[$x%2]?> #<?=1000+$x?>
            <span class="small-gray"> Locked</span></div>
        </div>
        <div class="el-right">
            <div class="date big">14/06/2021</div>
            <div class="date small">04:20:12</div>
        </div>
    </div> 
</div>
<?php } ?>



