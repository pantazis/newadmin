
<div class="tab-cont">
    <?php $tabnum = count($tabs)-1;?>
    <div class="activebox" style="width:<?=(100/($tabnum+1))?>%"></div>
   <?php foreach($tabs as $tab => $value) { ?>
      <div class="tab-in <?php if($tab==0) echo "active";?>" data-active="<?=$tab?>"><div class="over"><?=$value?></div></div>
   <?php } ?>    
</div>

