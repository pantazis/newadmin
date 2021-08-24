<style>
<?php $tabnum = count($tabs)-1;?>
:root{
   --tab-width:<?=60*($tabnum+1)?>%;
   --tab-width-decktop:<?=16.6666*($tabnum+1)?>%;
}
</style>
<div class="tab-parent">
<div class="tab-cont">   
    <div class="activebox" style="width:<?=(100/($tabnum+1))?>%"></div>
   <?php foreach($tabs as $tab => $value) { ?>
      <div class="tab-in <?php if($tab==0) echo "active";?>" data-active="<?=$tab?>"><div class="over"><?=$value?></div></div>
   <?php } ?>    
</div>
</div>

