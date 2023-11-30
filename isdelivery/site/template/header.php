<?php

require_once('../conf/config.php');

?>
<header>
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
                            <ul class="dropdown-menu yellow-bg border-white-1">
                                <li>
                                    <a href="" class="dropdown-item text-light">Grupo de Orações</a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item text-light">Pedidos de Oração</a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item text-light">Pedidos Especiais</a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item text-light">Criar Grupo de Oração</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Bíblia
                            </a>
                            <ul class="dropdown-menu yellow-bg border-white-1">
                                <li>
                                    <a href="" class="dropdown-item text-light">Leitura Bíblica Índividual</a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item text-light">Leitura Bíblica Compartilhada (Grupos)</a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item text-light">Leia a Bíblia em 1 ano</a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item text-light">Temas</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Jejuns
                            </a>
                            <ul class="dropdown-menu yellow-bg border-white-1">
                                <li>
                                    <a href=">" class="dropdown-item text-light">Jejum de Daniel - 21 Dias</a>
                                </li>
                                <li>
                                    <a href=">" class="dropdown-item text-light">Jejum de Ester - 3 Dias</a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item text-light">Jejum involuntário de Paulo - 14 Dias</a>
                                </li>
                                <li>
                                    <a href="" class="dropdown-item text-light">O jejum do Senhor Jesus no deserto - 40 Dias</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a href="" class="dropdown-item text-light">Jejum Personalizado!</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                Pastores
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <section>
        <div id="section__header">
            <div class="widget__h1">
                <h1>IsDelivery</h1>
            </div>
        </div>
    </section>
</header>