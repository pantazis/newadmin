
    <?php $actions = [
          "clear","Action 1","Action 2","Action 3","Action 4",""
];
    ?>
    <section class="top-section tables">

      <?php include '_views/'.$folder.'/data.php'; ?>
      <?php include '_include/content_top.php'; ?>
      </section>
            <?php include '_include/alert-box.php'; ?>
            <?php include '_include/filters.php'; ?>
      <section class="section-main tables">
            <?php include '_views/'.$folder.'/tab1.php'; ?>


      </section>
      <div class="selectionActionsContainer">
      <div class="actionsSel">
                  <?php    foreach ($actions as $action){ ?>
                        <?php
                        if ($action == ""){?>
                              <span class="selectionCount <?php  echo $action ?>"><?php echo $action ?></span>
                        <?php }
                        if (strpos($action, 'Action') !== false){?>
                              <div class="actionSelBtn "><?php echo $action ?></div>
                        <?php }
                        if ($action == "clear"){?>
                              <a class="clearSelections "><?php echo $action ?></a>
                  <?php }} ?>
                  </div>
</div>