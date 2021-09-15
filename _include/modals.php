<?php
$input = ["#0001 An Ubavicius", "#0005 Γιάννης Παπαδόπουλος", "#0471 Κώστας Δάσκαλος", "#0165 Παντελής Ζαννίκος", "#0006 Γιώργος Θειακός"];
?>
<div class="modal fade" id="disableAccount" tabindex="-1" aria-labelledby="disableAccountLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="disableAccountLabel">Απενεργοποίηση λογαριασμού χρήστη</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Πρόκειται να απενεργοποιήσετε το λογαριασμό του χρήστη <br> <?php echo $input[rand(0, 4)] ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Κλείσιμο</button>
        <button type="button" id="setActiveButton" class="btn btn-primary"><span class="activeText">Απενεργοποίηση</span><span class="notActiveText">Eνεργοποίηση</span></button>
      </div>
    </div>
  </div>
</div>





<?php
$domainList=[
"vimeo.com",
"businesswire.com",
"adobe.com",
"tamu.edu",
"blogs.com",
"baidu.com",
"mediafire.com",
"webeden.co.uk",
"ustream.tv",
"bloglines.com",
"un.org",
"istockphoto.com",
"timesonline.co.uk",
"who.int",
"bloglines.com",
"purevolume.com",
"w3.org",
"storify.com",
"npr.org",
"yellowpages.com",
"dot.gov",
"linkedin.com",
"fc2.com",
"reddit.com",
"wikispaces.com",
"sbwire.com",
"php.net",
"utexas.edu",
"google.com.hk",
"oakley.com",
"netvibes.com",
]
?>


<?php modal(
  $id="noFreeHosting",
  $title="Απενεργοποίηση Δωρεάν Φιλοξενίας",
  $mainText="Πρόκειται να απενεργοποιήσετε το την δωράν φιλοξενία για το domain <br> <b style= 'font-size:20px'>". $domainList[rand(0,count($domainList) )]."</b>",
  $btnColorClass="btn-red2",
  $btnText="Απενεργοποίηση");

  modal(
    $id="FreeHosting",
    $title="Ενεργοποίηση Δωρεάν Φιλοξενίας",
    $mainText="Πρόκειται να ενεργοποιήσετε το την δωράν φιλοξενία για το domain <br> <b style= 'font-size:20px'>". $domainList[rand(0,count($domainList) )]."</b>",
    $btnColorClass="btn-green2",
    $btnText="Ενεργοποίηση");
  ?>