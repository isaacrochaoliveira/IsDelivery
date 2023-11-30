<?php

require_once('../conf/config.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to <?= SYS_NAME ?></title>

    <!-- BOOTSTRAP'S CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- WIDGET'S CSS -->
    <link rel="stylesheet" href="../assets/css/adminlte.min.css">

    <!-- MY CSS -->
    <link rel="stylesheet" href="../assets/css/vars.css">
    <link rel="stylesheet" href="../assets/css/fonts.css">
    <link rel="stylesheet" href="../assets/css/fonts-sizes.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>

<body>
    <?= include_once('./template/header.php') ?>

    <div class="container">
        <section>
            <div class="d-flex flex-wrap justify-content-around">
                <div>
                    <h2 class="fs-26pt">New Orders Every Day</h2>
                </div>
                <div>
                    <h2 class="fs-26pt">We're here to make yourself happy</h2>
                </div>
            </div>
        </section>
    </div>

    <?= include_once('./template/footer.php') ?>
    <!-- BOOTSTRAP'S JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>