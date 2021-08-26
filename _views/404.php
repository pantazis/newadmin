<div class=errorpage>
    <style>
        .logo-button {
            display: none;
        }

        .sidebar.navbar {
            display: none;
        }

        .sidebar.top.shadow-2-strong {
            display: none;
        }

        main {
            padding-top: 0;
            padding-left: 0;
            transition-property: padding-left;
            overflow: hidden;
        }

        .paddingEl {
            display: none;
        }

        footer-nav-mobile shadow-2-strong only-mobile {
            display: none;
        }
    </style>


    <?php $arr2 = [
        "Go Back"
    ];
    ?>

    <div class="textdiv">
        <h5>Error 404</h5>

        <h1>Page not Found</h1>
        <p>Δεν μπορούμε να βρούμε την σελίδα που ψάχνεις!</p>
        <h3>Μπορεί να έχει γίνει κάποιο λάθος στη διεύθυνση ή η σελίδα αυτή να έχει αλλάξει θέση. Μην σε πτοεί όμως αυτό, επίλεξε ένα σύνδεσμο και συνέχισε την πλοήγησή σου:</h3>

        <div class="buttonserror">
            <?php
            foreach ($arr2 as $value) { ?>

                <button type=button class="btn actions btn-outline-black_blue" onClick=" goBack()"><?= $value ?></button>
                </button>

            <?php } ?>
        </div>


        <script>
            function goBack() {
                window.history.back();
            }
        </script>



    </div>