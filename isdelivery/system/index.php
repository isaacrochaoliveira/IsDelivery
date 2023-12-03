<?php

require_once('../conf/config.php');

?>
<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="../assets/css/sys_styles.css">
</head>

<body class="login__background">
    <div class="container">
        <div class="bg-transparent p-5 my-5 text-center">
            <form action="" method="post">
                <div class="row">
                    <h1 class="fs-36pt"><?= SYS_SLOGAN ?></h1>
                    <div class="Centrail-One">
                        <div class="col-md-12 py-3">
                            <label for="email" class="fs-22pt">Your E-amil:</label>
                            <input type="text" name="email" id="email" placeholder="You email...">
                        </div>
                        <div class="col-md-12 py-3">
                            <label for="password" class="fs-22pt">Your Password:</label>
                            <input type="password" name="passoword" id="password" placeholder="Your Password...">
                        </div>
                        <div class="col-md-12 py-2">
                            <button type="submit" class="btn-singin">Sign-In</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>