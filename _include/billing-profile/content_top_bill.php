<div class="content_top">
    <div class="top_left">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard </a></li>
                <li class="breadcrumb-item"><a href="#">Users</a></li>
                <li class="breadcrumb-item"><a href="#">An Ubavicius</a></li>
                <li class="breadcrumb-item active" aria-current="page">Προφλί Τιμολόγησης</li>
            </ol>
        </nav>
        <h2 class="page_title">Διαμαντής Στυλιανός</h2>
    </div>
    <div class="top_right ">
        <?php foreach ($label2 as $key => $value) { ?>
            <div class="top_frame  <?= $colorClass2[$key] ?> ">
                <div class="h4 frame_title"><?= $value ?></div>
                <div class="h2 frame_value"><?= $labelval2[$key] ?></div>

            </div>

        <?php } ?>


    </div>
</div>