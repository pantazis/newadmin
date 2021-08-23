<section class="top-section ">
    <?php include '_include/billing-profile/billing-profile-data.php'; ?>
    <?php include '_include/billing-profile/content_top_bill.php'; ?>
</section>
<section class="section-main ">
    <?php include '_include/tabs.php'; ?>
    <div class="container">
        <?php $arr = [
            "desktop" => [
                "order-xl-0",
                "order-xl-3",
                "order-xl-1",
                "order-xl-4",
            ],
            "mobile" => [
                "order-2",
                "order-3",
                "order-4",
                "order-5",
            ]
        ];
        ?>
        <div class="row">
            <?php foreach ($billinginfo as $key => $info) { ?>
                <div class="col-xl-9 <?= $arr["desktop"][$key] ?> <?= $arr["mobile"][$key] ?>">
                    <div class="info-container">
                        <div class="info-title"><?= $info["title"] ?></div>
                        <div class="info-row-con">
                            <div class="info-row-in">
                                <?php foreach ($info['text'] as $subtitle) { ?>
                                    <div class="info-row">
                                        <div class="info_sub"><?= $subtitle ?></div>
                                        <div class="info-val">12/34/2025</div>
                                        <div class="info-icon">
                                            <span class="icon-fi-sr-pencil" alt=""></span>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="col-xl-6 action-cont order-xl-2 order-0">
                <button type="button" class="btn  btn-black_blue mb-0">ΝΕΟ ΠΡΟΦΙΛ ΤΙΜΟΛΟΓΗΣΗΣ</button>
                <div class="form-right">
                    <div class="arrow-div"></div>
                    <div class="addprofile-shortcut">
                        <div class="info-row">
                            <div class="info_sub">Χώρα έδρας Εταιρείας/Οργανισμού (*)</div>
                            <div class="info-val">12/34/2025</div>
                        </div>
                        <div class="info-row">
                            <div class="info_sub">ΑΦΜ (*)</div>
                            <div class="info-val">12/34/2025</div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-xl-6  action-cont  order-xl-5 order-1">
                <button type="button" class="btn  btn-outline-red2 border-strong">ΔΙΑΓΡΑΦΗ ΠΡΟΦΙΛ ΤΙΜΟΛΟΓΗΣΗΣ</button>
            </div>
        </div>
    </div>
    </div>
</section>