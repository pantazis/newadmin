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
        <p>Πρόκειται να απενεργοποιήσετε το λογαριασμό του χρήστη <?php echo $input[rand(0,4)] ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Κλείσιμο</button>
        <button type="button" class="btn btn-primary">Απενεργοποίηση</button>
      </div>
    </div>
  </div>
</div>
