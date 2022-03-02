<?php
$label = [
    "Αριθμός Παραγγελίας",
    "Σύνολο Παραγγελίας",
    "Υπόλοιπο Παραγγελίας",
    "Κατάσταση Παραγγελίας",

];
$labelval = ["493", "5.264,01€", "0,00€","ΟΛΟΚΛΗΡΩΘΗΚΕ"];



$addressInput=[
    "autocomplete"=>"address",
    "type"=>"text",
    "placeholder"=>"",
    "data-last-val"=>"",
    "data-validate"=>"",
    "label"=>"Οδός",
    "value"=>"Falkenstr. 5,",
    "disabled"=>"",
    "validate-length"=>""

 ];
 $cityInput = $addressInput;
 $cityInput["value"]="GeorgsmarienhÜTte,";
 $cityInput["label"]="Πόλη";

 $zipInput = $addressInput;
 $zipInput["value"]="49124,";
 $zipInput["label"]="Τ.Κ.";

 $countryInput = $addressInput;
 $countryInput["value"]="Greece";
 $countryInput["label"]="Χώρα κατοικίας";
 $countryInput["disabled"]="disabled";






$colorClass = ["","","","success"];

$nservers = [
    [
        "group" => "Θα δηλώσω νέους εξυπηρετητές",
        "option" => [
            [
                "name" => "Εισαγωγή νέων εξυπηρετητών",
                "value" => "nons",
            ],
        ],
    ],
    [
        "group" => "Θα δηλώσω εξυπηρετητές της DNHOST",
        "option" => [
            [
                "name" => "DNHOST nameservers",
                "value" => "4",
            ],
        ],
    ],
    [
        "group" => "Nameserver groups",
        "option" => [
            [
                "name" => "pantazistestdns",
                "value" => "305",
            ],
            [
                "name" => "nsgroup1",
                "value" => "419",
            ],
            [
                "name" => "adffggg9246hhrrrgfggjkjhhjkhgfjdkdfk1",
                "value" => "547",
            ],
            [
                "name" => "aaaaaa",
                "value" => "564",
            ],
            [
                "name" => "ns1.pantazis.comss",
                "value" => "593",
            ],
            [
                "name" => "aaaaaaaaaaaaaaaaaaaaaaaaa",
                "value" => "594",
            ],
            [
                "name" => "asaasadsdss",
                "value" => "829",
            ],
            [
                "name" => "jfdjhdfkjhfdkhgsdhkgfdg",
                "value" => "830",
            ],
        ],
    ],
];

function buttonBottom($text=" ")
{
    return '<div class="addAction"><span class="icon-fi-sr-plus-small" alt=""></span>'.$text.'</div>';
}

function HtmlEl($text, $classl, $color, $element, $icon = false)
{
    if ($element == "") {
        $element = "span";
    }

    $template = "";
    $iconTemplate = '<div class="icon-cont"> <div class="info-icon action1">
  <span class="icon-fi-sr-pencil" class="button-icon" alt=""></span>
  </div></div>';

    if (is_array($icon)) {
        $template .=
            "<" .
            $element .
            " class='" .
            $classl .
            " " .
            $color .
            "'>" .
            $text .
            "</" .
            $element .
            ">";
            $template.='<div class="icon-cont">';

        foreach ($icon as $key => $val) {
            $template .=
                '<div class="info-icon action' .
                $key .
                '"><span class="' .
                $val .
                '" class="button-icon" alt=""></span></div>';

        }
        $template.='</div>';
    }

    if ($icon == true && !is_array($icon)) {
        $template =
            "<" .
            $element .
            " class='" .
            $classl .
            " " .
            $color .
            "'>" .
            $text .
            "</" .
            $element .
            ">" .
            $iconTemplate;
    }
    if ($icon == false && !is_array($icon)) {
        $template =
            "<" .
            $element .
            " class='" .
            $classl .
            " " .
            $color .
            "'>" .
            $text .
            "</" .
            $element .
            ">";
    }

    return $template;
}
$elDate =  HtmlEl("ΔΙΑΜΑΝΤΗΣ ΣΤΥΛΙΑΝΟΣ ΒΑΣΙΛΕΙΟΣ", "date", "", "");;
$eldomain = HtmlEl("antoineeurtest.gr", "date", "", "");
$eltimezone = HtmlEl("(Europe/Athens)", "timezone", "", "");
$elbutton = HtmlEl("Συγχρονισμός Τώρα", "timezone", "", "a");
$elnserver = HtmlEl(".antoineeurtest.gr", "date", "ice", "");
$ellink = HtmlEl("300127 - CITIZEN", "date", "blue", "a");
$vies ="<div>countryCode: DE</div>
<div>vatNumber: 812871812</div>
<div>requestDate: 2019-05-13+02:00</div>
<div>valid: true</div>
<div>name: ---</div>
<div>address: ---</div>";
$address="<div>Falkenstr. 5,</div>
<div>GeorgsmarienhÜTte,</div>
<div>49124,</div>
<div>Germany</div>";

$valueArr = [
    [
        [HtmlEl("ΔΙΑΜΑΝΤΗΣ ΣΤΥΛΙΑΝΟΣ ΒΑΣΙΛΕΙΟΣ", "date", "","", true) ],
        [HtmlEl("-", "date", "","", true) ],

    ],
    [
        [HtmlEl("DE812871812", "date", "", "", false) ],
        [HtmlEl("ΕΓΚΕΚΡΙΜΕΝΟ", "date", "green2", "", false), HtmlEl("Επανέλεγχος", "button", "", "a")],
        [HtmlEl("ΣΕ ΑΝΑΜΟΝΗ", "date", "orange2", "", true)],
        [HtmlEl($vies, "date", "blue", "", false)],
        [HtmlEl("-", "date", "", "", true)],



    ],
    [
      [
        HtmlEl($address, "date", "", "",true),

      ]

    ],
    [
        [HtmlEl("-", "date", "", "")],
        [checkbox("OFF", "ON")],
        [checkbox("OFF", "ON")],


    ],
];

$formArr = [
    [simpleTextArea("Επωνυμία"),simpleTextArea("Διακριτικός τίτλος")],
    [
  "",
  "",
  selectEl(
    [
    "Εγκεκριμένο",
    "Απορρίφθηκε",
    ],
    "Κατάσταση"
),"",simpleTextArea("Δραστηριότητα")



    ],
    [formAddress($addressInput,$cityInput,$zipInput,$countryInput)],
    [


    ],
];




function formAddress($prop1,$prop2,$prop3,$prop4)

{   $template ='<div class="info-text-in">';
    $template .=inputEl($prop1, false);
    $template .='</div><div class="info-text-in">';
    $template .=inputEl($prop2, false);
    $template .='</div><div class="info-text-in">';
    $template .=inputEl($prop3, false);
    $template .='</div><div class="info-text-in">';
    $template .=inputEl($prop4, true);
    $template .='</div>';

    return $template;
};




$domaininfo = [
    [
        "title" => "Πληροφορίες επιχείρησης",
        "text" => [
            "Επωνυμία :",
            "Διακριτικός τίτλος :",

        ],
    ],
    [
        "title" => "Πληροφορίες ΑΦΜ",
        "text" => [
            "ΑΦΜ :",
            "Κατάσταση ΑΦΜ :",
            "Αφαίρεση ΦΠΑ :",
            "Απάντηση απο VIES :",
            "Δραστηριότητα :",


        ],
    ],
    [
        "title" => "Πληροφορίες διεύθυνσης",
        "text" => ["Διεύθυνση :"],
    ],
    [
        "title" => "Προτιμήσεις",
        "text" => [
            "Κωδικός ERP :",
            "Κατάσταση Προφίλ τιμολόγησης :",
            "Χρήση ως προεπιλεγμένου :",

        ],
    ],
];

$page_title = "ΠΑΡΑΓΓΕΛΙΑ #404388";

$breadcrumb = ["Dashboard ", "Users", "An Ubavicius", "Προφίλ Τιμολόγησης"];


$tabs = [["name" => "Σχόλια Διαχειριστή (2)"],["name" => "Λεπτομέρειες"],["name" => "Εξόφληση από (2)"],["name" => "Παραστατικά (6)"]];
