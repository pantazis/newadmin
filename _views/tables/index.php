
    <?php $actions = [
    "Action 1","Action 2","Action 3"
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
                  <div class="actions">
                                           <div class="actionBtn Action 1">Action 1</div>
                                            <div class="actionBtn Action 2">Action 2</div>
                                            <div class="actionBtn Action 3">Action 3</div>
                                     </div>
            </div>
