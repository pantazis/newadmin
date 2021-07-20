<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/css/style.css?<?php echo rand(0,1000)?>">
    

    <title>Document</title>
</head>
<body>
   

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
  "green2",
  "sky_blue",
  "orange2",
  "pomegranade",
  "blue_grey",
  "red2",
  "blue_purple",
  "dark_grey",
  "dark_blue",
  "black_blue",
];

  $arr2=[
"roboto-medium-13px-light_grey",
"roboto-medium-13px-ice",
"roboto-regular-15px-black_blue",
"roboto-bold-30px-black_blue",
"roboto-bold-27px-green2",
"roboto-medium-37px-black_blue",
"breadcrump-blue_grey",
"active-tab-black_blue",
"tab-label-active-black_blue",
"roboto-bold-14px-black_blue",
"table-row-labels-black_blue",
"table-row-data-black_blue",
"roboto-medium-9px-light_grey",
"roboto-medium-14px-green2",
"roboto-medium-14px-blue_purple",
"roboto-bold-16px-ice",
"roboto-bold-16px-blue_purple",
"roboto-bold-16px-green2",
"roboto-bold-16px-red2",
"roboto-regular-13px-black_blue",
"roboto-bold-13px-black_blue",
"roboto-regular-13px-light_grey",
"label-text-form-light_grey",
"roboto-bold-15px-green2",
"roboto-regular-12px-red2",



  
  ];
  ?>
  
   

<?php foreach($arr as $value ){ ?>
<button type="button" class="btn btn-<?=$value?>"><?=$value?></button>
<?php }?>
<?php foreach($arr2 as $value ){ ?>
<p class="<?=$value?>"><?=$value?></p>
<?php }?>

<style>
  .container {
  display: grid; 
  grid-template-columns: 1fr 1fr 1fr; 
  grid-template-rows: 1fr 1fr 1fr; 
  gap: 50px 50px; 
  grid-template-areas: 
    ". . ."
    ". . ."
    ". . ."; 
}
</style>
<div class="container">  
<?php for ($i = 5; $i >= -5; $i--) {?>
  <style>

.lavel-<?=$i?>{
  box-shadow: 0 <?=$i-3?>px 5px rgb(0 0 0 / 20%);
}
</style>
<div class="box lavel-<?=$i?>"><?=$i?></div>
<?php } ?>
</div>



    </div>    
    <script src="./public/js/libraries/popper.min.js"></script>
    <script src="./public/js/libraries/bootstrap.min.js"></script>
    <script src="./public/js/libraries/is.min.js"></script>   
    <script src="./public/js/libraries/all.min.js"></script>  
</body>
</html>