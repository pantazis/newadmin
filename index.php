<!DOCTYPE html>
<html lang="en">
<head>
  <?php include './_include/head.php'?>
</head>

<body class="isNotActive">
    <?php include "./_include/loader.php" ?>
    <?php include "./_include/nav.php" ?>
    <?php include "./_include/mobile-nav.php" ?>

    <main role="main">
    <?php include "./_include/root.php" ?>
    
   






    </main>
 
    <?php include "_include/modals.php"?>


    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>    
    <script src="./public/js/libraries/popper.min.js"></script>
    <script src="./public/js/libraries/bootstrap.min.js?<?=rand(1,1000)?>"></script>
    <script src="./public/js/libraries/is.min.js"></script>   
    <script src="./public/js/libraries/all.min.js"></script>
    <script src="./public/js/template_scripts.js?<?= rand(0,1000)?>"></script> 
    <script>
      var myModal = document.getElementById('disableAccount');
    </script> 
  </body>
</html>