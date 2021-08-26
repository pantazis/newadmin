<style>
   <?php $tabnum = count($tabs) - 1; ?>:root {

      --tab-width-decktop: <?= 16.6666 * ($tabnum + 1) ?>%;
      <?php if (60 * ($tabnum + 1) < 100) {
         $mobile = 100;
      } else {
         $mobile = 60 * ($tabnum + 1);
      }

      if (40 * ($tabnum + 1) < 100) {
         $tablet = 100;
      } else {
         $tablet = 40 * ($tabnum + 1);
      }
      ?>--tab-width: <?= $mobile ?>%;
      --tab-width-tablet: <?= $tablet ?>%;
</style>
<div class="tab-parent">
   <div class="tab-cont">
      <div class="activebox" style="width:<?= (100 / ($tabnum + 1)) ?>%"></div>
      <?php foreach ($tabs as $tab => $value) { ?>
         <div class="tab-in <?php if ($tab == 0) echo "active"; ?>" data-active="<?= $tab ?>">
            <div class="over"><?= $value ?></div>
         </div>
      <?php } ?>
   </div>
</div>