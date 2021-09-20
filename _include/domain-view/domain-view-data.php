<?php
$label = [
    "Domain ID",
    "Ημερομηνία Κατοχύρωσης",
    "Ημερομηνία Λήξης",
    "Κατάσταση",
];
$labelval = ["201173", "16/04/2021", "16/04/2023", "ΚΑΤΑΧΩΡΗΜΕΝΟ"];

$colorClass = ["", "", "", "success"];

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
    $iconTemplate = ' <div class="info-icon action1">
  <span class="icon-fi-sr-pencil" class="button-icon" alt=""></span>
  </div>';

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
        foreach ($icon as $key => $val) {
            $template .=
                '<div class="info-icon action' .
                $key .
                '"><span class="' .
                $val .
                '" class="button-icon" alt=""></span></div>';
        }
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
$elDate = HtmlEl("16/04/2021", "date", "", "");
$eldomain = HtmlEl("antoineeurtest.gr", "date", "", "");
$eltimezone = HtmlEl("(Europe/Athens)", "timezone", "", "");
$elbutton = HtmlEl("Συγχρονισμός Τώρα", "timezone", "", "a");
$elnserver = HtmlEl(".antoineeurtest.gr", "date", "ice", "");
$ellink = HtmlEl("300127 - CITIZEN", "date", "blue", "a");

$valueArr = [
    [
        [$elDate, $eltimezone],
        [$elDate, $eltimezone],
        [$eldomain],
        [$elDate, HtmlEl("Συγχρονισμός Τώρα", "button", "green2", "a")],
    ],
    [
        [HtmlEl("300127 - CITIZEN", "date", "blue", "a", true)],
        [HtmlEl("14610 - John Dooe", "date", "blue", "a", true)],
        [HtmlEl("26743 - George Papadogiannakis", "date", "blue", "a", true)],
        [HtmlEl("-", "date", "", "", true)],
        [buttonBottom("Δημιουργία νέου Προσώπου Επαφής")],
    ],
    [ [
        HtmlEl("", "date", "", ""),
        HtmlEl("", "date", "light_grey", "", [
            "icon-fi-sr-trash",
            "icon-fi-sr-pencil",
        ]),
    ],
        [
            HtmlEl("antoineeurtest.gr", "date", "", ""),
            HtmlEl(".antoineeurtest.gr", "date", "light_grey", "", [
                "icon-fi-sr-trash",
                "icon-fi-sr-pencil",
            ]),
        ],
        [
            HtmlEl("antoineeurtest.gr", "date", "", ""),
            HtmlEl(".antoineeurtest.gr", "date", "light_grey", "", [
                "icon-fi-sr-trash",
                "icon-fi-sr-pencil",
            ])
        ],[buttonBottom("Δημιουργία Εξυπηρετητή")]
    ],
    [
        [HtmlEl("Εισγαγωγή Νέων Εξυπηρετητών", "date", "", "", true)],
        [HtmlEl("", "date", "", "", [
            "icon-fi-sr-trash",
            "icon-fi-sr-pencil",
        ])],
        [HtmlEl("ns1.free-host-ns-test.gr", "date", "", "", [
         "icon-fi-sr-trash",
         "icon-fi-sr-pencil",
     ])],
        [HtmlEl("ns1.free-host-ns-test.gr", "date", "", "",  [
         "icon-fi-sr-trash",
         "icon-fi-sr-pencil",
     ])],
        [HtmlEl("ns1.free-host-ns-test.gr", "date", "", "",  [
         "icon-fi-sr-trash",
         "icon-fi-sr-pencil",
     ])],
        [buttonBottom("Προσθήκη νέου εξυπηρετητή")],
    ],
];

$formArr = [
    ["", "", "", ""],
    [
        selectEl(
            [
                "300146 ‐ Κωνσταντίνος Χριστόπουλος",
                "300134 ‐ pantazis vastardis",
            ],
            "Κάτοχος"
        ),
        selectEl(
            [
                "300146 ‐ Κωνσταντίνος Χριστόπουλος",
                "300134 ‐ pantazis vastardis",
            ],
            "Κάτοχος"
        ),
        selectEl(
            [
                "300146 ‐ Κωνσταντίνος Χριστόπουλος",
                "300134 ‐ pantazis vastardis",
            ],
            "Κάτοχος"
        ),
        selectEl(
            [
                "300146 ‐ Κωνσταντίνος Χριστόπουλος",
                "300134 ‐ pantazis vastardis",
            ],
            "Κάτοχος"
        ),

      
    ],
    [formPersonal($host,$domain,$ip),formPersonal($host,$domain,$ip), formPersonal($host,$domain,$ip)],
    [
        select2($nservers, "pant"),
        formPersonal2($host),
        formPersonal2($host),
        formPersonal2($host),
        formPersonal2($host)
      
    ],
];



$domaininfo = [
    [
        "title" => "Πληροφορίες",
        "text" => [
            "Ημ/νία κατοχύρωσης :",
            "Ημ/νία λήξης :",
            "Δέσμη ονομάτων :",
            "Τελευταίος συγχρονισμός :",
        ],
    ],
    [
        "title" => "Πρόσωπα Επαφής",
        "text" => [
            "Κάτοχος :",
            "Τεχνικός :",
            "Διαχειριστής :",
            "Οικονομικά :",
            "",
        ],
    ],
    [
        "title" => "Προσωπικοί Εξυπηρετητές",
        "text" => [["Εξυπηρετητής :","hide"],"Εξυπηρετητής :", "Εξυπηρετητής :",""],
    ],
    [
        "title" => "Εξυπηρετητές Ονοματοδοσίας",
        "text" => [
            "Διαθέσιμες Επιλογές :",
            ["Εξυπηρετητής :","hide"],
            "Εξυπηρετητής :",
            "Εξυπηρετητής :",
            "Εξυπηρετητής :",
            "",
        ],
    ],
];

$page_title = "antoineeurtest.gr";

$breadcrumb = ["Dashboard ", "Users", "An Ubavicius", "Domains"];

$tabs = [["name" => "Στοιχεία Domain"], ["name" => "Πρόσθετες Υπηρεσίες"]];
?>
