      <section class="top-section ">
      <?php include '_include/domain-view/domain-view-data.php'; ?>
      <?php include '_include/content_top.php'; ?>
      </section>
      <?php include '_include/tabs.php'; ?>
      <section class="section-main ">
        <div class="container">
          <?php $arr =[
            "desktop"=>[
                "order-xl-0",
                "order-xl-3",
                "order-xl-1",
                "order-xl-4",
            ],
              "mobile"=>[
                "order-2",
                "order-3",
                "order-4",
                "order-5",
              ]
          ];
          ?>
              <div class="row">
              <?php foreach($domaininfo as $key => $info){?>
                <div class="col-xl-9 <?=$arr["desktop"][$key]?> <?=$arr["mobile"][$key]?>">
              <div class="info-container">
                <div class="info-title"><?=$info["title"]?>
                          <div class="info-icon">
                             <span class="icon-fi-sr-angle-down" class="button-icon" alt=""></span>
                          </div>
                </div>
                <div class="info-row-con">
                  <div class="info-row-in">
                    <?php foreach($info['text'] as $key2 =>  $subtitle){?>
                      <div class="info-row b<?=$key2?>">
                        <div class="info-text">
                          <div class="info-text-in">
                            <div class="info_sub"><?=$subtitle?></div>
                            <div class="info-val">
                                            
                            <?php foreach($valueArr[$key][$key2] as $key3 => $value3){?>
                              <?=$value3?>
                            <?php }?>
                            </div>
                          </div>
                        </div>
                          <form action="" class="info-form">
                          <div class="info-form-in">

                           <?php  for($i = 0; $i < rand(10,300); $i++){
                              echo "pantazis ";  }?>
                              </div>
                           
                          </form>
                      </div>
                    <?php }?>
                    </div>
                </div>
                </div>
              </div>
        <?php }?>
        <div class="col-xl-6 action-cont order-xl-2 order-0">
                <button type="button" class="btn actions btn-black_blue"><img src="public/img/button-icons/fi-sr-refresh.svg" class="button-icon2" alt="" ><span class="btext">ΑΝΑΝΕΩΣΗ DOMAIN</span></button>
                <button type="button" class="btn actions btn-outline-blue_purple"><img src="public/img/button-icons/into-transfer.svg" class="button-icon2" alt="" ><span class="btext">ΕΣΩΤΕΡΙΚΗ ΜΕΤΑΦΟΡΑ</span></button>
                <button type="button" class="btn actions btn-outline-red2"><img src="public/img/button-icons/fi-sr-refresh2.svg" class="button-icon2" alt="" ><span class="btext">ΑΙΤΗΣΗ ΜΕΤΑΒΙΒΑΣΗΣ</span></button>
            </div>
            <div class="col-xl-6  action-cont  order-xl-5 order-1">
            <div class="d-none d-xl-block">
              <div class="info-title">ID Protect <span class="ms-4 icon-id_protect green2"></span></div>
              <p class="id-protect-text">Τα στοιχεία καταχώρησης του domain είναι ορατά σε δημόσιο Whois. Προστάτευσέ τα με την υπηρεσία ID Protect.</p>
            </div>
                <button type="button" class="btn actions btn-outline-green2 border-strong"><img src="public/img/button-icons/id_protect.svg" class="button-icon2" alt="" ><span class="btext">ΑΓΟΡΑ ΥΠΗΡΕΣΙΑΣ</span></button>
            </div>
              </div>
          </div>
        </div>
      </section>



      <style>





      </style>
