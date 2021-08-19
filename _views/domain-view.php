      <section class="top-section ">
      <?php include '_include/domain-view/domain-view-data.php'; ?>      
      <?php include '_include/content_top.php'; ?>       
      </section>

     
      <section class="section-main shadow-1-strong"> 
      <?php include '_include/tabs.php'; ?>  
        <div class="container">
          <div class="row">
            
              <?php foreach($domaininfo as $key => $info){?>              
                <?php if($key==0) echo '<div class="col-md-5">'?>
                    <div class="info-container">
                    <div class="info-title"><?=$info["title"]?></div>
                    <?php foreach($info['text'] as $subtitle){?>
                     <div class="info-row">
                        <div class="info_sub"><?=$subtitle?></div>
                        <div class="info-val">12/34/2025</div>
                        <span class="icon-fi-sr-grid" alt=""></span>

                      </div>

                    <?php }?>
                    </div>               
                <?php if($key==1) echo '</div><div class="col-md-5">'?>
                <?php if($key==4) echo '</div>'?>
               

              <?php }?>
            </div>
            <div class="col-md-2">
                test
            </div>
            

           
          
         
            
          
      
          </div>
        </div>
      </section>



