<?php
$arrtitle = [
  "Αριθμός παραγγελίας :",
  "Ξεκίνησε από:",
  "Προφίλ Τιμολόγησης :",
  "Κατάσταση:",
  "Δημιουργήθηκε:",
  "Ενημερώθηκε:",
  "Ολοκληρώθηκε :",
  "Ενημερώθηκε από:"
];

$arrVal = [
  "Πληροφορίες Επιχείρησης",
  "404234",
  "Ιωάννης Παπαδόπουλος",
  "#451357 Απόδειξη",
  "ΟΛΟΚΛΗΡΩΘΗΚΕ",
  "27/10/2020 15:27:38",
  "12/04/2021 02:23:11",
  "12/04/2021 02:23:11",
  "Αδαμάντιος Χασαπόπουλος"
];

$arrtitle2 = ["Σχόλια :"];

$arrVal2 = [
  "Lorem ipsum dolor sit amet,
  consectetur adipiscing elit. Integer
  eget leo in lectus tempus vestibulum
  ultrices in orci. Fusce at ipsum nec
  massa aliquet dictum vel in dui. Nune",
];
?>


<div class="container tab tab1 active">
  <div class="row">
    <div class="col-xl-8 ">
      <div class="info-container  open">
        <div class="info-title">Πληροφορίες Επιχείρησης<div class="info-icon"> <span class="icon-fi-sr-angle-down" alt=""></span> </div>
        </div>
        <div class="info-row-con scroll" data-limit="5" data-collapsed="false">
          <form class="info-row-in" accept-charset="UTF-8"> <input name="_token" type="hidden" value="hJP56IA1aIfmzZHoqvxKDnh7c8LSv4NyhwLtPRV411">
            <?php foreach ($arrtitle as $key => $title) { ?>
              <div class="info-row">
                <div class="info-text">
                  <div class="info-text-in">
                    <div class="arrow-div2"></div>
                    <div class="info_sub"> <?= $title ?> </div>
                    <div class="info-val"> <span class="date "><?= $arrVal[$key] ?></span> <span class="timezone ">(Europe/Athens)</span> </div>
                  </div>
                </div>
                <div class="info-form" data-collapsed="true" style="height: 0px;">
                  <div class="info-form-in"> </div>
                </div>
              </div>
            <?php } ?>
          </form>
        </div>
      </div>
    </div>
    <div class="col-xl-16">
      <div class="info-container">
        <div class="info-title">Υπηρεσίες<div class="info-icon"><span class="icon-fi-sr-angle-down" alt=""></span></div>
        </div>
        <div class="scroll_box">
          <?php for ($i = 0; $i < 20; $i++) { ?>
            <div class="info-row-con" data-limit="5" data-collapsed="false">
              <div class="big-row-parent">
                <div class="big-row-in table_style">
                  <div class="el-left">
                    <div class="icon-fi-sr-angle-down"></div>
                    <div class="info-title-big">Bronze VPS<span class="">Linux VPS Hosting</span></div>
                  </div>
                  <div>1 μήνα</div>
                  <div>ΟΛΟΚΛΗΡΩΘΗΚΕ</div>
                  <div class="el-right">
                    <div class="date big">56,05 €</div>
                    <div class="date small">79,48 €</div>
                  </div>
                </div>
                <div class="info-form" data-collapsed="true" style="height: 0px;" ;="">
                  <div class="info-flex">
                    <div class="d1"><span class="icon-fi-sr-lock red2" alt=""></span><span class="icon-fi-sr-unlock green2" alt=""></span></div>
                    <div class="d2">
                      <div class="info-row">
                        <div class="info-text">
                          <div class="info-text-in">
                            <div class="arrow-div2"></div>
                            <div class="info_sub">Εξυπηρετητής :</div>
                            <div class="info-val"><span class="date ">antoineeurtest.gr</span><span class="date light_grey">.antoineeurtest.gr</span>
                              <div class="icon-cont">
                                <div class="info-icon action0"></div>
                                <div class="info-icon action1"><span class="icon-fi-sr-pencil" alt=""></span></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d3"><span class="nav-icons-side icon-fi-sr-upload1 green2" alt=""></span>Upload Document</div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="col-xl-8 ">
      <div class="info-container  open">
        <div class="info-title">"Ρυθμίσεις (user view)"<div class="info-icon"> <span class="icon-fi-sr-angle-down" alt=""></span> </div>
        </div>
        <div class="info-row-con scroll" data-limit="5" data-collapsed="false">
          <form class="info-row-in" accept-charset="UTF-8"> <input name="_token" type="hidden" value="hJP56IA1aIfmzZHoqvxKDnh7c8LSv4NyhwLtPRV411">
            <?php foreach ($arrtitle2 as $key => $title) { ?>
              <div class="info-row">
                <div class="info-text">
                  <div class="info-text-in">
                    <div class="arrow-div2"></div>
                    <div class="info_sub"> <?= $title ?> </div>
                    <div class="info-val"> <span class="date "><?= $arrVal2[$key] ?></span>
                    </div>
                  </div>
                  <div class="info-form" data-collapsed="true" style="height: 0px;">
                    <div class="info-form-in"> </div>
                  </div>
                </div>
              <?php } ?>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-8 "></div>
  <div class="col-xl-8 ">
    <div class="container_grid">
      <div class="right">Ὑποσύνολο:</div>
      <div class="left">4.245,17€</div>
      <div class="right">ΦΠΑ (24%):</div>
      <div class="left border_top">1.018,84€</div>
      <div class="right">Σύνολο:</div>
      <div class="left strong">137712€</div>
    </div>
  </div>
</div>


