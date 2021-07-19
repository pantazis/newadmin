<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css">
    

    <title>Document</title>
</head>
<body>
    <?php include "./_include/nav.php" ?>

<?php $arr =["primary",
  "secondary",
  "success",
  "info",
  "warning",
  "danger",
  "light",
  "dark",
  "ice",
  "light_grey",
  "pal_pink",
  "green",
  "sky_blue",
  "orange",
  "pomegranade",
  "blue_grey",
  "red",
  "blue_purple",
  "dark_grey",
  "dark_blue",
  "black_blue"]
  ?>
  
   

<?php foreach($arr as $value ){ ?>
<button type="button" class="btn btn-<?=$value?>"><?=$value?></button>
<?php }?>
<h1>asasas</h1>
<p>asas</p>


    </div>    
    <script src="./public/js/libraries/popper.min.js"></script>
    <script src="./public/js/libraries/bootstrap.min.js"></script>
    <script src="./public/js/libraries/is.min.js"></script>   
    <script src="./public/js/libraries/all.min.js"></script>  
</body>
</html>