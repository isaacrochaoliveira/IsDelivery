<?php 

require_once('./conf/config.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to <?= SYS_NAME ?></title>
    
    <!-- BOOTSTRAP'S CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- MY CSS -->
    <link rel="stylesheet" href="./assets/css/vars.css">
    <link rel="stylesheet" href="./assets/css/fonts.css">
    <link rel="stylesheet" href="./assets/css/fonts-sizes.css">
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="bg-light m-5 py-5">
            <div class="text-center">
                <h1 class="Centrail-One fs-56pt"><?= SYS_NAME ?></h1>
                <h3 class="fs-16pt"><?= SYS_SLOGAN ?></h3>
                <hr>
                <div>
                    <h2 class="fs-26pt">Here, you got two options</h2>
                    <hr>
                    <a href="<?= PATH ?>site/"><button class="btn btn-dark w-75">GO TO SITE</button></a>
                    <a href="<?= PATH ?>system/"><button class="btn btn-dark w-75">GO TO SYSTEM</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- BOOTSTRAP'S JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>