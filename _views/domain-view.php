      <section class="top-section ">
      <?php include '_include/domain-view/domain-view-data.php'; ?>      
      <?php include '_include/content_top.php'; ?>       
      </section>

     
      <section class="section-main "> 
      <?php include '_include/tabs.php'; ?>  
        <div class="container">
          <?php $arr =[
            "desktop"=>[
                "order-md-0",
                "order-md-3",
                "order-md-1",
                "order-md-4",
             
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
                <div class="col-md-9 <?=$arr["desktop"][$key]?> <?=$arr["mobile"][$key]?>">            
              
              <div class="info-container">
                <div class="info-title"><?=$info["title"]?></div>
                <?php foreach($info['text'] as $subtitle){?>
                <div class="info-row">
                    <div class="info_sub"><?=$subtitle?></div>
                    <div class="info-val">12/34/2025</div>
                    <div class="info-icon">
                    <span class="icon-fi-sr-pencil" alt=""></span>
                    </div>

                  </div>

                <?php }?>
                </div>
              </div> 
        <?php }?>
        <div class="col-md-6 action-cont order-md-2 order-0">
                <button type="button" class="btn  btn-black_blue">ΑΝΑΝΕΩΣΗ DOMAIN</button>
                <button type="button" class="btn  btn-outline-blue_purple">ΕΣΩΤΕΡΙΚΗ ΜΕΤΑΦΟΡΑ</button>
                <button type="button" class="btn  btn-outline-red2">ΑΙΤΗΣΗ ΜΕΤΑΒΙΒΑΣΗΣ</button>                              
            </div>
            <div class="col-md-6  action-cont  order-md-5 order-1">
            <div class="info-title">ID Protect <span class="ms-4 icon-id_protect green2"></span></div>   
                <p class="id-protect-text">Τα στοιχεία καταχώρησης του domain είναι ορατά σε δημόσιο Whois. Προστάτευσέ τα με την υπηρεσία ID Protect.</p>
                <button type="button" class="btn  btn-outline-green2 border-strong">ΑΓΟΡΑ ΥΠΗΡΕΣΙΑΣ</button>   
            </div>
            


              </div>

           
            
        
            
       
            

           
          
         
            
          
      
          </div>
        </div>
      </section>



