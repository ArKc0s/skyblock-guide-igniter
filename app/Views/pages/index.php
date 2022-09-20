<!doctype html>
<html>
<head>
    <title>Skyblock Guide</title>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('css/header.css'); ?>">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url('plugin/fa/css/all.css'); ?>">
</head>
<body>

    <?php echo view('templates/header'); ?>

    <div class="page-wrapper">

        <div class="search-container">
            <p class="search-box-title">Hypixel SkyBlock Stats</p>
            <form class="form-container" method="post" action="/validate">
                <input name="playerName" class="search-bar" placeholder="Entrez le pseudo d'un joueur">
            </form>
        </div>

    </div>

</body>