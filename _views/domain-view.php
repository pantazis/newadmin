      <section class="top-section ">
      <?php include '_include/domain-view/domain-view-data.php'; ?>      
      <?php include '_include/content_top.php'; ?>       
      </section>

     
      <section class="section-main shadow-1-strong"> 
      <?php include '_include/tabs.php'; ?>  
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <div class="row">
              <?php foreach($domaininfo as $key => $info){?> 
                <div class="col-md-6">            
              
              <div class="info-container">
                <div class="info-title"><?=$info["title"]?></div>
                <?php foreach($info['text'] as $subtitle){?>
                <div class="info-row">
                    <div class="info_sub"><?=$subtitle?></div>
                    <div class="info-val">12/34/2025</div>
                    <div class="info-icon">
                    <span class="icon-fi-sr-grid" alt=""></span>
                    </div>

                  </div>

                <?php }?>
                </div>
              </div> 
        <?php }?>


              </div>

            </div>
            <div class="col-md-3 action-cont">
         
            <?php
                        $arr =[
                        "primary",
                        "secondary",
                        "success",
                        "info",
                        "warning",
                        "danger",
                        "light",
                        "dark"];

                      ?>
                <?php foreach($arr as $val){?>

<button type="button" class="btn btn-block btn-<?=$val?>"><?=$val?></button> 

<?php } ?>                               
            </div>
            
        
            </div>
       
            

           
          
         
            
          
      
          </div>
        </div>
      </section>



