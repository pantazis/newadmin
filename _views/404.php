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

        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }

        main {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
    </style>

    <div class="bgcolor">
        <p>jdfdjslfsjjfdjslfsdkl</p>
        <gradient-container>
            <gradient-color></gradient-color>
            <gradient-color></gradient-color>
            <gradient-color></gradient-color>
            <gradient-color></gradient-color>
            <gradient-backdrop></gradient-backdrop>
        </gradient-container>
        <!-- <div class="errorpage">
            <h1>404</h1>
            <p>Page not Found</p>
            <button class="button" onClick=" goBack()">Επιστροφή στην προηγούμενη σελίδα</button>

        </div>-->
    </div>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>