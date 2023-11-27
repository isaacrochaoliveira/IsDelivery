<?php

require_once('../conf/config.php');

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <nav class="navbar navbar-dark red-bg f-family-Lobster py-3" aria-label="Dark offcanvas navbar">
        <div class="container-fluid">
            <div class="d-flex">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="<?= PATH ?>site/" target="_self"><button class="btn btn-yellow mx-3">House</button></a>
                <a href="<?= PATH ?>system" target="_blank"><button class="btn btn-yellow mx-1">Go To System</button></a>
            </div>
            <a class="navbar-brand fs-16pt" href="<?= PATH ?>site/"><?= SYS_SLOGAN ?></a>
            <div class="offcanvas offcanvas-start yellow-bg" tabindex="-1" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel">
                <div class="offcanvas-header">
                    <h3 class="fs-16pt"><?= SYS_NAME ?></h3>
                    <button type="button" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Orações
                            </a>
                            <ul class="dropdown-menu yellow-bg border-none">
                                <li>
                                    <a href="" class="dropdown-item">Grupo de Orações</a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">Pedidos de Oração</a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">Pedidos Especiais</a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">Criar Grupo de Oração</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Bíblia
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="" class="dropdown-item">Leitura Bíblica Índividual</a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">Leitura Bíblica Compartilhada (Grupos)</a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">Leia a Bíblia em 1 ano</a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">Temas</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Jejuns
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href=">" class="dropdown-item">Jejum de Daniel - 21 Dias</a>
                                </li>
                                <li>
                                    <a href=">" class="dropdown-item">Jejum de Ester - 3 Dias</a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">Jejum involuntário de Paulo - 14 Dias</a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">O jejum do Senhor Jesus no deserto - 40 Dias</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a href="" class="dropdown-item">Jejum Personalizado!</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                Pastores
                            </a>
                        </li>
                        <li>
                            <a href="../logout.php" class="btn btn-danger"><i class="fa-sharp fa-solid fa-door-open"></i> Logout</a>
                            <a href="" class="btn btn-warning"><i class="fa-solid fa-signal"></i> Visualizar Perfil</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</body>

</html>