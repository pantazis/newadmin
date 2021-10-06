
<?php
$type=["Tιμολογιο","Aποδειξη"];

 for ($x = 0; $x <= 10; $x++) { ?>
<div class="big-row-parent <?php if($x==2) echo "lock"?>">
    <div class="big-row-in">  
        <div class="el-left">
            <div class="icon-fi-sr-angle-down">      
            </div>
            <div class="info-title-big"><?=$type[$x%2]?> #<?=1000+$x?>
            <span class="small-gray">Locked</span></div>
        </div>
        <div class="el-right">
            <div class="date big">14/06/2021</div>
            <div class="date small">04:20:12</div>
        </div>
    </div> 

    <div class="info-form" data-collapsed="true" style="height: 0px";>
        <div class="info-flex">
            <div class="d1">
                <span class="icon-fi-sr-lock red2" alt=""></span>
                <span class="icon-fi-sr-unlock green2" alt=""></span>
            </div>
            <div class="d2">
                <?php
                $array = [1,2,3,4];
                 foreach ($array as $value) { ?>
                <div class="info-row">
                    <div class="info-text">
                        <div class="info-text-in">
                        <div class="arrow-div2"></div>
                        <div class="info_sub">Εξυπηρετητής :</div>
                        <div class="info-val">
                            <span class="date ">antoineeurtest.gr</span>                                        <span class="date light_grey">.antoineeurtest.gr</span><div class="icon-cont"><div class="info-icon action0"></div><div class="info-icon action1"><span class="icon-fi-sr-pencil" alt=""></span></div></div>                                      </div>
                        </div>
                    </div>              
                </div>
                <?php } ?>

            </div>
            <div class="d3">
                    <span class="nav-icons-side icon-fi-sr-upload1 green2" alt=""></span>
                    Upload Document
            </div>
        </div>
    </div>
    
</div>
<?php } ?>






