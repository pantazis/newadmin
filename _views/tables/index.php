
    <?php $actions = [
    "Action 1","Action 2","Action 3"
];
    ?>
    <section class="top-section ">

      <?php include '_views/'.$folder.'/data.php'; ?>
      <?php include '_include/content_top.php'; ?>
      </section>
            <?php include '_include/alert-box.php'; ?>
            <?php include '_include/filters.php'; ?>
      <section class="section-main tables">
            <?php include '_views/'.$folder.'/tab1.php'; ?>
            <div class="selectionActionsContainer">
                  <div class="actions">
              <?php    foreach ($actions as $action){ ?>
                   <div class="actionBtn <?php echo $action ?>"><?php echo $action ?></div>
           <?php   }?>
    </div>


  </div>

      </section>
