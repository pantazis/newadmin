
<div class="tab-cont">
    <?php $tabnum = rand(3,6);?>
    <div class="activebox" style="width:<?=(100/($tabnum+1))?>%"></div>
 <?php for ($i = 0; $i <= $tabnum; $i++) { ?>
    <div class="tab-in" data-active="<?=$i?>"><div class="over">title</div></div>
 <?php } ?>    
</div>
