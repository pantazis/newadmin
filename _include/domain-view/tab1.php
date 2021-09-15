<div class="container tab tab0 active">
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

          $formAction =[
            "",
            "",
            "Nameservers",
            "new_host_form"
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
                <div class="info-row-con" data-limit="5" data-collapsed="true" style="height: 0px;">
                  <form action="<?=$formAction[$key]?>" class="info-row-in" accept-charset="UTF-8">
                  <input name="_token" type="hidden" value="hJP56IA1aIfmzZHoqvxKDnh7c8LSv4NyhwLtPRV411">
                    <?php foreach($info['text'] as $key2 =>  $subtitle){?>


                      <div class="info-row <?php
                         if($key > 0 && $key2==count($info['text'])-1)echo "last";
                         if(is_array($subtitle)) {echo "hide";
                         $subtitle = $subtitle[0];}

                         ?>
                         ">
                        <div class="info-text">
                          <div class="info-text-in">
                            <div class="arrow-div2"></div>
                            <div class="info_sub"><?=$subtitle?></div>
                            <div class="info-val">

                            <?php foreach($valueArr[$key][$key2] as $key3 => $value3){?>
                              <?=$value3?>
                            <?php }?>
                            </div>
                          </div>
                        </div>
                          <div  class="info-form" data-collapsed="true" style="height: 0px;">
                            <div class="info-form-in">
                                <?php echo $formArr[$key][$key2] ?>
                            </div>
                          </div>
                      </div>
                    <?php }?>
                    </form>
                </div>
                </div>
              </div>
        <?php }?>
        <div class="col-xl-6 action-cont order-xl-2 order-0">
                <button type="button" class="btn actions btn-black_blue"><img src="public/img/button-icons/fi-sr-refresh.svg" class="button-icon2" alt="" ><span class="btext">ΑΝΑΝΕΩΣΗ DOMAIN</span></button>
                <button type="button" class="btn actions btn-outline-blue_purple"><img src="public/img/button-icons/into-transfer.svg" class="button-icon2" alt="" ><span class="btext">ΕΣΩΤΕΡΙΚΗ ΜΕΤΑΦΟΡΑ</span></button>
                <button type="button" class="btn actions btn-outline-red2"><img src="public/img/button-icons/fi-sr-refresh2.svg" class="button-icon2" alt="" ><span class="btext">ΑΙΤΗΣΗ ΜΕΤΑΒΙΒΑΣΗΣ</span></button>
            </div>
            <div class="col-xl-6 order-xl-5 order-1">
            <div class="d-none d-xl-block action-cont">
              <div class="info-title">ID Protect <span class="ms-4 icon-id_protect green2"></span></div>
              <p class="id-protect-text">Τα στοιχεία καταχώρησης του domain είναι ορατά σε δημόσιο Whois. Προστάτευσέ τα με την υπηρεσία ID Protect.</p>
              <button type="button" class="btn actions btn-outline-green2 border-strong action-cont"><img src="public/img/button-icons/id_protect.svg" class="button-icon2" alt="" ><span class="btext">ΑΓΟΡΑ ΥΠΗΡΕΣΙΑΣ</span></button>
            </div>

                <div class="info-container">
                  <div class="info-title pt-5">
                    Υπηρεσία δωρεάν φιλοξενίας ιστοσελίδων
                        <div class="info-icon">
                                <span class="icon-fi-sr-angle-down" alt=""></span>
                        </div>
                    </div>

                      <div class="info-row-con"   data-collapsed="true" style="height: 0px;">
                      <div class="info-row">
                          <div class="info-text-in align-items-center ">
                              <label class="checkbox_label1" >Υπηρεσία δωρεάν φιλοξενίας ιστοσελίδων</label>
                              <?= checkbox("off","on") ?>
                          </div>
                        </div>



                      </div>
                    </div>


            </div>


              </div>
          </div>
        </div>