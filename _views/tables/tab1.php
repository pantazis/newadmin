
  <table>
    <thead>
    </thead>
    <tbody>
    </tbody>
  </table>
  <div class="pagination">
      <div class="row_per_page bb1">Ανα σελίδα 20</div>
      <div class="page_number bb1">Εμφάνιση 1-20 από 165</div>
      <div class="controls_pagination bb1">
        <div class="p_box">
        <?php
        $arr=["<<",1,2,3,4,5,"...",11,">>"];        
        foreach($arr as $key => $value){?>
          <div class="page<?php if($key==1) echo " active"?>"><?=$value?></div>
        <?php } ?>
        </div>
      </div>
</div>
   

