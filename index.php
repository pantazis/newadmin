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
  "black_blue"];

  $arr2=[
    "roboto-medium-13px",
    "roboto-medium-13px",
    "roboto-regular-15px",
    "roboto-bold-30px",
    "roboto-bold-27px",
    "roboto-medium-37px",
    "breadcrump",
    "active-tab",
    "tab-label-active",
    "roboto-bold-14px",
    "table-row-labels",
    "table-row-data",
    "roboto-medium-9px",
    "roboto-medium-14px",
    "roboto-medium-14px",
    "roboto-bold-16px",
    "roboto-bold-16px",
    "roboto-bold-16px",
    "roboto-bold-16px",
    "roboto-regular-13px",
    "roboto-bold-13px",
    "roboto-regular-13px",
    "label-text-form",
    "roboto-bold-15px",
    "roboto-regular-12px",

  
  ];
  ?>
  
   

<?php foreach($arr as $value ){ ?>
<button type="button" class="btn btn-<?=$value?>"><?=$value?></button>
<?php }?>
<?php foreach($arr2 as $value ){ ?>
<p class="<?=$value?>"><?=$value?></p>
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