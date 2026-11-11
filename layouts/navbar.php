<?php
// Récupère le nom du fichier actuel (ex: index.php ou a-propos-de-nous.php)
$current_page = basename($_SERVER['SCRIPT_NAME']);

// Définissez le nom du fichier de votre page d'accueil si différent
$is_home = ($current_page == 'index.php' || $current_page == '');

// Préfixe pour les liens ancres
$home_prefix = $is_home ? '' : 'index.php';
?>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top site-nav">
    <div class="container">
        <a class="navbar-brand" href="<?= $home_prefix ?>#accueil">
            <img src="assets/image/logo/Logo NT001 blanc.png" alt="NOTECH Group">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
            aria-label="Ouvrir le menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
            <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
                <li class="nav-item">
                    <a class="nav-link <?= $is_home ? 'active' : '' ?>" href="<?= $home_prefix ?>#accueil">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $home_prefix ?>#solutions">Solutions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $home_prefix ?>#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $home_prefix ?>#realisations">Réalisations</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'a-propos-de-nous.php') ? 'active' : '' ?>" href="a-propos-de-nous.php">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($current_page == 'blogs.php') ? 'active' : '' ?>" href="blogs.php">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $home_prefix ?>#contact">Contact</a>
                </li>
            </ul>
            <a class="btn btn-primary btn-sm nav-cta" href="<?= $home_prefix ?>#contact">
                Demander un devis <i class="bi bi-arrow-up-right"></i>
            </a>
        </div>
    </div>
</nav>