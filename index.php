<!DOCTYPE html>
<?php
$request = $_SERVER['REQUEST_URI'];
$url_without_last_part = substr($request, 0, strrpos($request, "/"));
?>
<html lang="en">

<head>
  <?php include './_include/head.php' ?>
  <?php include '_include/form-elements.php'; ?>
</head>

<body class="isNotActive noanimαtion" onresize="screenSize()">
  <?php include "./_include/loader.php" ?>
  <?php include "./_include/nav.php" ?>
  <?php include "./_include/mobile-nav.php" ?>
  <main role="main">
    <?php include "./_include/root.php" ?>
  </main>
  <?php include "_include/modals.php" ?>
  <?php include "_include/mobile-nav-footer.php" ?>
  <?php /* var_dump( get_included_files()) */?>

  </div>
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="./public/js/libraries/popper.min.js"></script>
  <script src="./public/js/libraries/bootstrap.min.js?<?=rand(1, 1000) ?>"></script>
  <script src="./public/js/libraries/is.min.js"></script>
  <script src="./public/js/libraries/all.min.js"></script>
  <script src="./public/js/openclose.js?<?=rand(0, 1000) ?>"></script>
   <script src="./public/js/select2.js"></script>
  <script src="./public/js/template_scripts.js?<?=rand(0, 1000) ?>"></script>
  <script src="./public/js/form.js?<?=rand(0, 1000) ?>"></script>

  <?php if($folder=="dashboard"){ ?>
    <?php include "fakeData/data.php" ?>

   <script src="./public/js/libraries/muuri.min.js"></script>
    <script src="./public/js/libraries/web-animations.min.js"></script>
    <script src="./public/js/dashboardOrder.js"></script>

    <script src="./public/js/libraries/sizzle.js"></script>
    <script src="./public/js/libraries/moment.min.js"></script>
    <script src="./public/js/libraries/el.js"></script>
    <script src="./public/js/libraries/knockout.js"></script>
    <script src="./public/js/libraries/daterangepicker.js"></script>
    <script src="./public/js/libraries/chart.min.js"></script>
    <script src="./public/js/dashboard/chartdata.js?<?=rand(1,1000)?>"></script>
    <script src="./public/js/dashboard/chartconfig.js?<?=rand(1,1000)?>"></script>
    <script src="./public/js/dashboard/initChart.js?<?=rand(1,1000)?>"></script>




  <?php }?>
  <?php if($folder=="tables"){ ?>
    <script src="./public/js/libraries/knockout.js"></script>
    <script src="./public/js/libraries/moment.min.js"></script>
    <script src="./public/js/libraries/daterangepicker.js"></script>
    <script src="./public/js/tables/tableData.js?<?=rand(1,1000)?>"></script>
    <script src="./public/js/tables/tables.js?<?=rand(1,1000)?>"></script>
    <script src="https://sensortower.github.io/daterangepicker/scripts/main.js"></script>



  <?php }?>





  <script>
    var myModal = document.getElementById('disableAccount');

  </script>
 <!-- <script src="./public/js/scrooth.js?<?=rand(0, 1000) ?>"></script>-->
</body>

</html>