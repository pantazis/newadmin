<?php
$label = [
  "Domain ID",
  "Ημερομηνία Κατοχύρωσης",
  "Ημερομηνία Λήξης",
  "Κατάσταση",
];
$labelval = [
  "201173",
  "16/04/2021",
  "16/04/2023",
  "ΚΑΤΑΧΩΡΗΜΕΝΟ",
];

$colorClass = [
  "",
  "",
  "",
  "success",
];

function HtmlEl($text,$classl,$color,$element,$icon = false) {
  if($element==""){
    $element="span";
  }
  $iconTemplate =' <div class="info-icon">
  <span class="icon-fi-sr-pencil" class="button-icon" alt=""></span>
  </div>';
 
  if($icon==true){  
    return "<".$element." class='".$classl." ".$color."'>".$text."</".$element.">".$iconTemplate;
  }else{
    return "<".$element." class='".$classl." ".$color."'>".$text."</".$element.">";

  }
 
};
$elDate = HtmlEl("16/04/2021","date","","");
$eldomain = HtmlEl("antoineeurtest.gr","date","","");
$eltimezone = HtmlEl("(Europe/Athens)","timezone","","");
$elbutton = HtmlEl("Συγχρονισμός Τώρα","timezone","","a");
$elnserver = HtmlEl(".antoineeurtest.gr","date","ice","");
$ellink = HtmlEl("300127 - CITIZEN","date","blue","a");



$ellinkselect='<select class="form-select" aria-label="Default select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>';


$valueArr=[[
  [ $elDate,$eltimezone ],
  [ $elDate,$eltimezone ],
  [ $eldomain ],
  [ $elDate,HtmlEl("Συγχρονισμός Τώρα","button","green2","a") ],
  
  ],[
  [ HtmlEl("300127 - CITIZEN","date","blue","a",true) ],
  [ HtmlEl("14610 - John Dooe","date","blue","a",true) ],
  [ HtmlEl("26743 - George Papadogiannakis","date","blue","a",true) ],
  [ HtmlEl("-","date","","",true) ],
  
  ],[
  [ HtmlEl("antoineeurtest.gr","date","",""),HtmlEl(".antoineeurtest.gr","date","light_grey","",true) ],
  [HtmlEl("antoineeurtest.gr","date","",""),HtmlEl(".antoineeurtest.gr","date","light_grey","",true) ],
  
  
  ],[
  [ HtmlEl("Εισγαγωγή Νέων Εξυπηρετητών","date","","",true) ],
  [ HtmlEl("ns1.free-host-ns-test.gr","date","","",true) ],
  [ HtmlEl("ns1.free-host-ns-test.gr","date","","",true) ],
  [ HtmlEl("ns1.free-host-ns-test.gr","date","","",true) ],
  
  ]
  ];








$domaininfo = [
  ["title" => 'Πληροφορίες', "text" => ['Ημ/νία κατοχύρωσης :', 'Ημ/νία λήξης :', 'Δέσμη ονομάτων :', 'Τελευταίος συγχρονισμός :']],
  ["title" => 'Πρόσωπα Επαφής', "text" => ['Κάτοχος :', 'Τεχνικός :', 'Διαχειριστής :', 'Οικονομικά :']],
  ["title" => 'Προσωπικοί Εξυπηρετητές', "text" => ['Εξυπηρετητής :', 'Εξυπηρετητής :']],
  ["title" => 'Εξυπηρετητές Ονοματοδοσίας', "text" => ['Διαθέσιμες Επιλογές :', 'Εξυπηρετητής :', 'Εξυπηρετητής :', 'Εξυπηρετητής :',]],
];





$page_title = "antoineeurtest.gr";

$breadcrumb = [
  "Dashboard ",
  "Users",
  "An Ubavicius",
  "Domains",
];


$tabs = [
  ["name"=>"Στοιχεία Domain","id"=>"1"],
  ["name"=>"Πρόσθετες Υπηρεσίες","id"=>"2"],
  
];
