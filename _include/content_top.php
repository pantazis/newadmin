<div class="content_top_parent">
    <div class="content_top">
        <div class="top_left">
            <nav aria-label="breadcrumb">
                <!--active" aria-current="page"-->
                <ol class="breadcrumb">
                    <?php foreach ($breadcrumb as $key => $value) { ?>
                    <?php if ($key == count($breadcrumb) - 1) { ?>
                    <li class="breadcrumb-item active" aria-current="page"><?= $value ?>
                    </li>
                    <?php } else { ?>
                    <li class="breadcrumb-item"><a href="#"><?= $value ?> </a></li>
                    <?php } ?>
                    <?php } ?>
                </ol>
            </nav>
            <h2 class="page_title"><?= $page_title ?>
            </h2>
        </div>
       <!-- <div class="top_right d-none d-xxl-flex ">
            <?php foreach ($label as $key => $value) { ?>
            <div class="top_frame  <?= $colorClass[$key] ?> ">
                <div class="h4 frame_title"><?= $value ?>
                </div>
                <div class="h2 frame_value"><?= $labelval[$key] ?>
                </div>
            </div>

            <?php } ?>

        </div>-->
    </div>
    <div class="mobile-cont ">
        <div class="mobile_tabs">
        </div>
    </div>
    <?php
    $bp = [
        "xs" => "xs : 0;",
        "sm" => "sm : 576px;",
        "md" => "md : 768px;",
        "lg" => "lg : 992px;",
        "xl" => "xl : 1200px;",
        "xxl" => "xxl: 1503px;",
        "xxxl" => "xxxl: 1910px;"
    ]; ?>

    <!--diastaseis -->
    <script>
        
        function screenSize() {
            return;
            var w = window.innerWidth;
            var h = window.innerHeight;
            var txt = "Window size: width=" + w + ", height=" + h;
            document.getElementById("demo").innerHTML = txt;
        }
    </script>

    <p  id="demo"></p>
  

   <?php foreach ($bp as $kay =>   $value) { ?>
    <div class=" d-none d-<?= $kay; ?>-flex">
        <?= $value; ?>
    </div>

    <?php }?>
   
