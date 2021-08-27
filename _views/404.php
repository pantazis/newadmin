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
    <div class="errorpage">
        <h1>404</h1>
        <p>Page not Found</p>
        <button class="button" onClick=" goBack()">Επιστροφή στην προηγούμενη σελίδα</button>

    </div>


    <script>
        function goBack() {
            window.history.back();
        }
    </script>