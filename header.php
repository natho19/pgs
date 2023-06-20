<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <!-- Meta Tags -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicon -->
        <link rel="shortcut icon" href="<?= PGS_IMG_URL . 'favicon.svg' ?>" type="image/svg">

        <!-- CSS -->
        <?php wp_head(); ?>
    </head>

    <body>

        <!-- Start Navbar -->
        <div class="navbar-area navbar-nine">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="https://fakeimg.pl/150x60?text=Log(150x60)" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine" aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarNine">
                                <ul class="navbar-nav mx-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll active" href="#hero-area">Accueil</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">A propos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#services">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#team">L'équipe</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#clients">Partenaires</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#contact">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="select-dropdown">
                                <i class="lni lni-world"></i>
                                <select>
                                    <option value="fr" selected>FR</option>
                                    <option value="eng">EN</option>
                                </select>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Navbar -->