<div id="guideNav" class="overlay">

    <div class="header-container">
        <div class="menu-text">
            <div class="title montserrat-600">HSG</div>
            <a class="about montserrat-400" href="osef">A propos de l'App</a>
        </div>
        <div class="menu-icons">
            <i class="fa-solid fa-bars menu-icon" id="bars" onclick="closeNav()"></i>
        </div>
    </div>

    <div class="overlay-content">

        <div class="guidenav-container">
            <p class="guidenav-title montserrat-500">Nos guides</p>
            <br>
            <a class="guidenav-item montserrat-500" href="#">Basics</a>
            <a class="guidenav-item montserrat-500" href="#">Métiers</a>
            <a class="guidenav-item montserrat-500" href="#">Donjons</a>
            <a class="guidenav-item montserrat-500" href="#">Tous les guides</a>
        </div>

        <div class="featuredguides-container">
            <p class="guidenav-title montserrat-600">Guides recommandés</p>
            <div class="featured-guides">
                <a href="/guides/starting" class="guide montserrat-600">
                    <div class="guide-title">Bien débuter</div>
                    <img class="guide-image" src="<?php echo base_url('assets/fishing.jpg'); ?>">
                </a>
                <div class="guide montserrat-600">
                    <div class="guide-title">La pêche</div>
                    <img class="guide-image" src="<?php echo base_url('assets/fishing.jpg'); ?>">
                </div>
                <div class="guide montserrat-600">
                    <div class="guide-title">Le mining</div>
                    <img class="guide-image" src="<?php echo base_url('assets/fishing.jpg'); ?>">
                </div>
                <div class="guide montserrat-600">
                    <div class="guide-title">Les enchantements</div>
                    <img class="guide-image" src="<?php echo base_url('assets/fishing.jpg'); ?>">
                </div>
            </div>
        </div>

    </div>
</div>

<div class="header-container">
    <div class="menu-text">
        <div class="title montserrat-600">HSG</div>
        <a class="about montserrat-400" href="osef">A propos de l'App</a>
    </div>
    <div class="menu-icons">
        <i class="fa-solid fa-user menu-icon"></i>
        <i class="fa-solid fa-bars menu-icon" onclick="openNav()"></i>
    </div>

</div>

<script>
    function openNav() {
        document.getElementById("guideNav").style.height = "50%";
    }

    function closeNav() {
        document.getElementById("guideNav").style.height = "0%";
    }
</script>

