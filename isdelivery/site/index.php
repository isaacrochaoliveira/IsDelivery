<?php

require_once('../conf/config.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to <?= SYS_NAME ?></title>

    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

    <div id="content">
        <section id="about-us-section">
            <div>
                <div id="div_about" class="text-center">
                    <i class="fa-solid fa-trophy fs-26pt"></i>
                    <i class="fa-solid fa-burger fs-26pt"></i>
                    <h2 class="fs-46pt">Who Are We?</h2>
                    <hr>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde iure numquam iste officia, <mark>ullam doloribus</mark> architecto, dignissimos <mark>consequatur consequuntur</mark> iusto deserunt, optio sequi tempore? Dolor sapiente aliquid ut! Tenetur, dolor.</p>
                    <a href="#"><button class="btn-red">Read More...</button></a>
                </div>
            </div>
        </section>
        <section id="menu">
            <div>
                <h2 class="fs-36pt color-red">Let you see the Menu</h2>
                <p class="fs-16pt LobsterRegular color-yellow">We've a lot of things that you can order, you can choose whatever you want it. Feel youself free</p>
            </div>
            <div class="row menu">
                <div class="col-md-6">
                    <img src="<?= PATH ?>assets/imgs/jpgs/order-one.jpg" alt="Order Number One - Batata Fritas" width="250">
                    <div>
                        <h4 class="fs-22pt">Chips</h4>
                        <span class="fs-26pt color-yellow">R$22,99</span>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, iure debitis. Sint alias consequuntur deserunt magni eius id neque sunt labore excepturi quos iure incidunt, quidem blanditiis? Fuga, voluptatum quae.</p>
                        <a href="#"><button type="button" class="btn-menu">I wanna order it</button></a>
                    </div>
                </div>
                <div class="col-md-6">
                    Olá
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    Olá
                </div>
                <div class="col-md-6">
                    Olá
                </div>
            </div>
        </section>
    </div>

    <?= include_once('./template/footer.php') ?>
    <!-- BOOTSTRAP'S JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>