<div class="paddingEl"></div>
<nav class="footer-nav-mobile shadow-2-strong only-mobile">
    <div class="nav-list user-icons">
        <?php
        $arrfooter = [
            "icon-search",
            "icon-fi-sr-bell1",
            "icon-fi-sr-shopping-cart",
            "icon-fi-sr-user",
        ];
        $arrclass = [
            "search-f",
            "notification-f",
            "cart-f",
            "user-f",
        ]; ?>
        
        <?php foreach ($arrfooter as $key => $val) { ?>
        <div class="nav-icon-3 fi-sr-menu-burger_left <?= $arrclass[$key] ?>">
            <div class="rel-icon">
                <?php if ($val == "icon-fi-sr-bell1" || $val == "icon-fi-sr-shopping-cart") { ?>
                <span class="num"><?= rand(1, 100) ?></span>
                <?php } ?>
                <i class="<?= $val ?>"></i>
            </div>
        </div>
        <?php } ?>
    </div>
</nav>