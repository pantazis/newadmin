<div class="container tab tab1 active">
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
    <?php foreach ($domaininfo as $key => $info) {?>
    <div
      class="col-xl-9 <?=$arr["desktop"][$key]?> <?=$arr["mobile"][$key]?>">
      <div class="info-container">
        <div class="info-title"><?=$info["title"]?>
          <div class="info-icon">
            <span class="icon-fi-sr-angle-down" class="button-icon" alt=""></span>
          </div>
        </div>

        <div class="info-row-con" data-limit="5" data-collapsed="true" style="height: 0px;">

          <form <?php if ($formAction[$key]!="") { ?>action="<?=$formAction[$key]?>"<?php } ?> class="info-row-in" accept-charset="UTF-8">
            <input name="_token" type="hidden" value="hJP56IA1aIfmzZHoqvxKDnh7c8LSv4NyhwLtPRV411">
            <?php foreach ($info['text'] as $key2 =>  $subtitle) {?>
              
       
              

            
            <div class="info-row <?php
                                                              
                         if (false) {
                             echo "last";
                         }
                         if (is_array($subtitle)) {
                             echo "hide";
                             $subtitle = $subtitle[0];
                         }

                         ?>
                         ">
              <div class="info-text">
                <div class="info-text-in">
                  <div class="arrow-div2"></div>
                  <div class="info_sub"><?=$subtitle?>
                  </div>
                  <div class="info-val">

                    <?php foreach ($valueArr[$key][$key2] as $key3 => $value3) {?>
                    <?=$value3?>
                    <?php }?>
                  </div>
                </div>
              </div>
              <div class="info-form" data-collapsed="true" style="height: 0px;">
                <div class="info-form-in">
                  <?php  if ($key > 0 && $key2!=count($info['text'])-1) {
                             ;
                             echo $formArr[$key][$key2];
                         } ?>
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
      <button type="button" class="btn actions btn-black_blue"><img src="public/img/button-icons/fi-sr-refresh.svg"
          class="button-icon2" alt=""><span class="btext">ΝΕΟ ΠΡΟΣΩΠΟ ΕΠΑΦΗΣ</span></button>
          
    




          <button type="button" class="btn actions btn-outline-red2"><img src="public/img/button-icons/fi-sr-key.svg" class="button-icon2" alt=""><span class="btext">ΔΙΑΓΡΑΦΗ ΠΡΟΦΙΛ ΤΙΜΟΛΟΓΗΣΗΣ</span></button>


    </div>
    


  </div>
</div>
</div>