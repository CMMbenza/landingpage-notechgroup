<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="NOTECH Group accompagne les entreprises avec des solutions digitales, du développement web et mobile à l'hébergement et la formation numérique.">
    <meta name="theme-color" content="#061b43">
    <title>NOTECH Group — Accélérons votre transformation numérique</title>
    <link rel="shortcut icon" href="assets/image/logo/Logo NT001 blanc.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    /* Styles du Preloader */
    #preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #061b43;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        z-index: 99999;
        transition: opacity 0.5s ease, visibility 0.5s ease;
    }

    #preloader.fade-out {
        opacity: 0;
        visibility: hidden;
    }

    .preloader-logo {
        width: 90px;
        height: auto;
        animation: pulseLogo 1.5s infinite ease-in-out;
        margin-bottom: 20px;
    }

    .preloader-spinner {
        width: 45px;
        height: 45px;
        border: 3px solid rgba(255, 255, 255, 0.2);
        border-top-color: #0d6efd;
        border-radius: 50%;
        animation: spin 0.8s linear infinite;
    }

    @keyframes spin {
        to {
            transform: rotate(360deg);
        }
    }

    @keyframes pulseLogo {

        0%,
        100% {
            transform: scale(1);
            opacity: 0.8;
        }

        50% {
            transform: scale(1.08);
            opacity: 1;
        }
    }

    .building img {
        display: block;
        position: relative;
        width: 70%;
        height: 70%;
        object-fit: contain;
    }

    /* Ajustement de la dimension des logos partenaires */
    .partner-logo img {
        max-height: 70px;
        width: auto;
        object-fit: contain;
    }

    /* Styles généraux et survol (hover) personnalisés des boutons */
    .btn {
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Bouton principal (Primary) */
    .btn-primary {
        background-color: #0d6efd;
        border-color: #0d6efd;
        box-shadow: 0 4px 10px rgba(13, 110, 253, 0.25);
    }

    .btn-primary:hover {
        background-color: #0b5ed7;
        border-color: #0a58ca;
        transform: translateY(-2px);
        box-shadow: 0 8px 18px rgba(13, 110, 253, 0.4);
    }

    /* Bouton contour clair (Outline Light) */
    .btn-outline-light:hover {
        background-color: rgba(255, 255, 255, 0.15);
        border-color: #ffffff;
        color: #ffffff;
        transform: translateY(-2px);
        box-shadow: 0 6px 15px rgba(255, 255, 255, 0.2);
    }

    /* Boutons des cartes réalisations */
    .btn-outline-primary {
        color: #0d6efd;
        border-color: #0d6efd;
        transition: all 0.3s ease;
    }

    .btn-outline-primary:hover {
        background-color: #0d6efd;
        border-color: #0d6efd;
        color: #ffffff;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(13, 110, 253, 0.3);
    }

    .btn-outline-primary:hover i {
        transform: translateX(3px);
        transition: transform 0.2s ease;
    }

    /* Harmonisation et mise en forme des photos dans les cartes Solutions Digitales */
    .product-card {
        height: 100%;
        border: 1px solid #dee2e6;
        border-radius: 12px;
        overflow: hidden;
        background: #fff;
        flex-direction: column;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    }

    .product-art {
        width: 100%;
        height: 200px;
        background: #f8f9fa;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .product-art img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .product-card:hover .product-art img {
        transform: scale(1.05);
    }

    .product-body {
        padding: 20px;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .product-body h3 {
        font-size: 1.25rem;
        font-weight: 700;
        margin-bottom: 10px;
        color: #061b43;
    }

    .product-body p {
        font-size: 0.92rem;
        color: #6c757d;
        flex-grow: 1;
        margin-bottom: 15px;
    }

    .product-body a {
        font-weight: 600;
        text-decoration: none;
        display: block;
        align-items: center;
        gap: 6px;
        color: #ffffff;
        transition: color 0.2s ease;
    }

    .product-body a:hover {
        color: #97c0fd;
    }

    /* Amélioration de la présentation du Slider des Réalisations */
    .realisations-slider-container {
        position: relative;
        display: flex;
        align-items: center;
        padding: 0 10px;
    }

    .realisations-slider {
        display: flex;
        overflow-x: auto;
        scroll-snap-type: x mandatory;
        gap: 1.5rem;
        padding: 10px 5px 20px 5px;
        scrollbar-width: none;
        scroll-behavior: smooth;
        width: 100%;
    }

    .realisations-slider::-webkit-scrollbar {
        display: none;
    }

    /* Style raffiné pour chaque carte de réalisation en d-flex */
    .realisation-card {
        flex: 0 0 280px;
        scroll-snap-align: start;
        background: #ffffff;
        border: 1px solid rgba(0, 0, 0, 0.08);
        border-radius: 12px;
        padding: 24px 20px;
        text-align: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
        transition: all 0.3s ease;
    }

    .realisation-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 25px rgba(6, 27, 67, 0.1);
        border-color: rgba(13, 110, 253, 0.2);
    }

    .realisation-logo-wrapper {
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
    }

    .realisation-card img {
        max-height: 50px;
        width: auto;
        object-fit: contain;
    }

    .realisation-card h5 {
        font-size: 1.1rem;
        font-weight: 700;
        color: #061b43;
        margin-bottom: 15px;
        min-height: 2.4em;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* Boutons de navigation Flèches */
    .realisation-arrow {
        background: #061b43;
        color: #fff;
        border: none;
        width: 42px;
        height: 42px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        z-index: 10;
        flex-shrink: 0;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    .realisation-arrow:hover {
        background: #0d6efd;
        color: #ffffff;
        transform: scale(1.1);
        box-shadow: 0 6px 15px rgba(13, 110, 253, 0.4);
    }

    /* Animation fadeIn pour les témoignages */
    .testimonial-fade {
        animation: fadeIn 0.8s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    </style>
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <img src="assets/image/logo/Logo NT001 blanc.png" alt="NOTECH Group" class="preloader-logo">
        <div class="preloader-spinner"></div>
    </div>

    <?php require_once('layouts/navbar.php');?>

    <header id="accueil" class="hero-section">
        <div class="hero-glow"></div>
        <div class="container position-relative">
            <div class="row align-items-center min-vh-hero">
                <div class="col-lg-6 hero-copy">
                    <span class="eyebrow"><span></span> NOTECH Group</span>
                    <h1>Accélérons<br>votre<br><span>transformation<br>numérique.</span></h1>
                    <p>Des solutions digitales innovantes pour les entreprises, institutions et entrepreneurs en
                        République
                        Démocratique du Congo et en Afrique.</p>
                    <div class="d-flex flex-wrap gap-3 hero-actions">
                        <a href="#solutions" class="btn btn-primary btn-lg">Découvrir nos solutions <i
                                class="bi bi-arrow-right"></i></a>
                        <a href="https://wa.me/+243893047095" class="btn btn-outline-light btn-lg"><i
                                class="bi bi-whatsapp me-2"></i>Parler à un expert</a>
                    </div>
                    <div class="hero-facts">
                        <span><i class="bi bi-geo-alt"></i> Kinshasa, RDC</span>
                        <span><i class="bi bi-people"></i> +100 clients</span>
                        <span><i class="bi bi-calendar3"></i> Depuis 2022</span>
                    </div>
                </div>
                <div class="col-lg-6 hero-visual">
                    <div class="hero-orbit orbit-one"></div>
                    <div class="hero-orbit orbit-two"></div>
                    <img class="hero-person" src="assets/image/Professionnelle NOTECH, main tendue.png"
                        alt="Illustration de l'équipe NOTECH Group et de la ville">
                    <div class="floating-services">
                        <div><i class="bi bi-layers"></i><span>Développement<br>Web & Mobile</span></div>
                        <div><i class="bi bi-bar-chart-line"></i><span>Marketing &<br>Communication</span></div>
                        <div><i class="bi bi-cloud-arrow-up"></i><span>Hébergement<br>Web</span></div>
                        <div><i class="bi bi-mortarboard"></i><span>Formation<br>Numérique</span></div>
                    </div>
                    <div class="hero-chip"><i class="bi bi-stars"></i> L'innovation au service de vos ambitions</div>
                </div>
            </div>
        </div>
        <div class="hero-bottom-line"></div>
    </header>

    <section id="apropos" class="intro-section section-pad">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <span class="section-kicker">Qui sommes-nous ?</span>
                    <h2>NOTECH Group</h2>
                    <h3>Un écosystème de solutions et de services numériques</h3>
                    <p class="section-lead">Entreprise technologique congolaise, nous concevons des applications,
                        développons des
                        solutions digitales et accompagnons nos clients dans leur croissance.</p>
                    <div class="stats-row">
                        <div><i class="bi bi-people"></i><strong>+100</strong><span>Clients satisfaits</span></div>
                        <div><i class="bi bi-stack"></i><strong>5</strong><span>Solutions digitales</span></div>
                        <div><i class="bi bi-code-slash"></i><strong>+50</strong><span>Projets réalisés</span></div>
                        <div><i class="bi bi-award"></i><strong>Depuis 2022</strong><span>À votre service</span></div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="building-card">
                        <div class="building-sky">
                            <div class="building"><img src="assets/image/logo/Logo NT001 blanc.png" alt=""></div>
                            <div class="building building-small"></div>
                        </div>
                        <div class="building-caption"><span class="pulse-dot"></span> La technologie qui fait avancer
                            vos idées
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="solutions" class="solutions-section section-pad nos_produit">
        <div class="container">
            <div class="section-heading text-center">
                <span class="section-kicker">Nos produits</span>
                <h2>Nos solutions digitales</h2>
                <p>Des applications innovantes conçues pour simplifier la gestion, la communication et la croissance.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-xl-3">
                    <article class="product-card">
                        <div class="product-art art-jina">
                            <img src="assets/image/solutions/WhatsApp Image 2026-11-08 at 16.24.19.jpeg" alt="JINA">
                        </div>
                        <div class="product-body">
                            <span class="product-icon blue mb-2 d-inline-block"><i
                                    class="bi bi-person-vcard fs-4 text-primary"></i></span>
                            <h3>JINA</h3>
                            <p>Votre identité professionnelle numérique : carte de visite, portfolio et partage de
                                contacts.</p>
                            <a href="http://jina.notechgroup.com/" target="_blank">Découvrir JINA <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-3">
                    <article class="product-card">
                        <div class="product-art art-bengisa">
                            <img src="assets/image/solutions/WhatsApp Image 2026-11-08 at 16.26.12.jpeg" alt="BENGISA">
                        </div>
                        <div class="product-body">
                            <span class="product-icon purple mb-2 d-inline-block"><i
                                    class="bi bi-calendar-heart fs-4 text-purple"></i></span>
                            <h3>BENGISA</h3>
                            <p>Créez vos invitations, gérez vos invités et optimisez l'organisation de vos événements.
                            </p>
                            <a href="http://bengisa.notechgroup.com/" target="_blank">Découvrir BENGISA
                                <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-3">
                    <article class="product-card">
                        <div class="product-art art-etekeli">
                            <img src="assets/image/solutions/WhatsApp Image 2026-11-08 at 16.29.37.jpeg" alt="ETEKELI">
                        </div>
                        <div class="product-body">
                            <span class="product-icon green mb-2 d-inline-block"><i
                                    class="bi bi-shop fs-4 text-success"></i></span>
                            <h3>ETEKELI</h3>
                            <p>Gérez vos ventes, votre stock, vos dépenses et vos établissements en toute simplicité.
                            </p>
                            <a href="http://etekeli.notechgroup.com/" target="_blank">Découvrir ETEKELI
                                <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
                <div class="col-md-6 col-xl-3">
                    <article class="product-card">
                        <div class="product-art art-host bg-dark text-white">
                            <img src="assets/image/solutions/images (11).jpg" alt="NOTEC-HOST">
                        </div>
                        <div class="product-body">
                            <span class="product-icon navy mb-2 d-inline-block"><i
                                    class="bi bi-globe fs-4 text-info"></i></span>
                            <h3>NOTEC-HOST</h3>
                            <p>Hébergement web, noms de domaine et solutions cloud pour une présence en ligne fiable et
                                performante.
                            </p>
                            <a href="https://notechost.com/" target="_blank">Découvrir NOTEC-HOST <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="services-section section-pad">
        <div class="container">
            <div class="section-heading text-center light-heading"><span class="section-kicker">Ce que nous
                    faisons</span>
                <h2>Nos services</h2>
                <p>Un accompagnement 360° pour votre réussite digitale.</p>
            </div>
            <div class="row g-3">
                <div class="col-sm-6 col-xl-3">
                    <article class="service-card">
                        <div class="service-illustration"><i class="bi bi-laptop"></i><i class="bi bi-code-slash"></i>
                        </div>
                        <h3>Développement<br>Web & Mobile</h3>
                        <p>Sites web, applications mobiles et logiciels sur mesure.</p><a href="#contact"><i
                                class="bi bi-arrow-right"></i></a>
                    </article>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <article class="service-card">
                        <div class="service-illustration"><i class="bi bi-laptop"></i><i class="bi bi-code-slash"></i>
                        </div>
                        <h3>Infographie</h3>
                        <p>Sites web, applications mobiles et logiciels sur mesure.</p><a href="#contact"><i
                                class="bi bi-arrow-right"></i></a>
                    </article>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <article class="service-card">
                        <div class="service-illustration"><i class="bi bi-megaphone"></i></div>
                        <h3>Marketing &<br>Communication</h3>
                        <p>Viral360, publicité digitale, réseaux sociaux et branding.</p><a href="#contact"><i
                                class="bi bi-arrow-right"></i></a>
                    </article>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <article class="service-card">
                        <div class="service-illustration"><i class="bi bi-cloud-arrow-up"></i></div>
                        <h3>Hébergement Web</h3>
                        <p>Sites web, domaines et emails professionnels (NOTEC-HOST).</p><a href="#contact"><i
                                class="bi bi-arrow-right"></i></a>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION RÉALISATIONS (Avec d-flex et ordre : logo -> nom -> bouton) -->
    <section id="realisations" class="portfolio-section section-pad">
        <div class="container">
            <div class="section-heading text-center"><span class="section-kicker">Notre expertise en action</span>
                <h2>Nos réalisations</h2>
                <p>Quelques projets et solutions que nous avons conçus et déployés pour nos clients.</p>
            </div>
            <div class="portfolio-filters">
                <button class="filter-btn active" data-filter="all">Tous</button><button class="filter-btn"
                    data-filter="web">Sites web</button><button class="filter-btn"
                    data-filter="app">Applications</button><button class="filter-btn" data-filter="brand">Identité
                    visuelle</button><button class="filter-btn" data-filter="event">Événements</button>
            </div>
            <div class="row g-4 portfolio-grid">
                <div class="col-md-6 col-lg-3 portfolio-item" data-category="event">
                    <article class="work-card">
                        <div class="work-art work-event">
                            <div class="event-card"><i class="bi bi-flower1"></i><b>BENGISA</b><small>Une journée
                                    inoubliable</small>
                            </div>
                        </div>
                        <div class="work-caption"><b>Application BENGISA</b><span>Gestion d'événements</span><i
                                class="bi bi-box-arrow-up-right"></i></div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3 portfolio-item" data-category="app">
                    <article class="work-card">
                        <div class="work-art work-dashboard">
                            <div class="dash-card">
                                <div class="dash-nav"></div>
                                <div class="dash-stats"><i></i><i></i><i></i></div>
                                <div class="dash-graph"></div>
                            </div>
                        </div>
                        <div class="work-caption"><b>Logiciel ETEKELI</b><span>Gestion commerciale</span><i
                                class="bi bi-box-arrow-up-right"></i></div>
                    </article>
                </div>
                <div class="col-md-6 col-lg-3 portfolio-item" data-category="brand">
                    <article class="work-card">
                        <div class="work-art work-brand">
                            <div class="brand-paper"><b>N</b><span>NOTECH<br>GROUP</span></div>
                            <div class="brand-card"></div>
                        </div>
                        <div class="work-caption"><b>Identité visuelle</b><span>& branding</span><i
                                class="bi bi-box-arrow-up-right"></i></div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="trust-section section-pad">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <div class="testimonial-card testimonial-fade" id="testimonialBox">
                        <div class="testimonial-avatar"><i class="bi bi-person-fill"></i></div>
                        <div><span class="quote-mark">“</span>
                            <p id="testiText">Grâce à NOTECH Group, nous avons digitalisé nos activités et amélioré
                                notre visibilité.
                                Une équipe professionnelle, réactive et à l'écoute.</p>
                            <b id="testiAuthor">— Mme Nadia M.</b>
                            <small id="testiRole">Responsable Communication</small>
                        </div>
                    </div>
                    <div class="d-block flex-wrap gap-3 hero-actions mt-3">
                        <button class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#temoignageModal">
                            <i class="bi bi-arrow-right"></i> Laisser un témoignage
                        </button>
                    </div>
                </div>
                <div class="col-lg-7"><span class="section-kicker">Notre engagement</span>
                    <h2>Pourquoi choisir NOTECH ?</h2>
                    <ul class="why-list">
                        <li><i class="bi bi-check-circle-fill"></i> Une équipe d'experts pluridisciplinaires</li>
                        <li><i class="bi bi-check-circle-fill"></i> Des solutions adaptées à vos besoins</li>
                        <li><i class="bi bi-check-circle-fill"></i> Un accompagnement de bout en bout</li>
                        <li><i class="bi bi-check-circle-fill"></i> Un support technique réactif</li>
                        <li><i class="bi bi-check-circle-fill"></i> Une expertise locale et une vision internationale
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Modale du formulaire de témoignage -->
    <div class="modal fade modal-lg" id="temoignageModal" tabindex="-1" aria-labelledby="temoignageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="temoignageModalLabel">Laisser un témoignage</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="temoignageForm">
                        <div class="mb-3">
                            <label for="temoinNom" class="form-label">Nom complet</label>
                            <input type="text" class="form-control" id="temoinNom" required placeholder="Votre nom">
                        </div>
                        <div class="mb-3">
                            <label for="temoinRole" class="form-label">Rôle / Fonction</label>
                            <input type="text" class="form-control" id="temoinRole"
                                placeholder="Ex: Directeur Général chez NOTECH">
                        </div>
                        <div class="mb-3">
                            <label for="temoinMessage" class="form-label">Votre témoignage</label>
                            <textarea class="form-control" id="temoinMessage" rows="4" required
                                placeholder="Partagez votre expérience..."></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="temoinImage" class="form-label">Téléversez une image</label>
                            <input class="form-control" type="file" id="temoinImage">
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Envoyer le témoignage</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <section class="partners-section">
        <div class="container">
            <div class="section-heading text-center">
                <h2>Nos partenaires et clients</h2>
                <p>Ils nous font confiance et construisent avec nous leur réussite digitale.</p>
            </div>
            <div class="partners-slider">
                <button class="partner-arrow partner-prev" aria-label="Précédent"><i
                        class="bi bi-chevron-left"></i></button>
                <div class="partner-viewport">
                    <div class="partner-track">
                        <div class="partner-logo"><img
                                src="assets/image/partenaires/WhatsApp Image 2026-11-08 at 16.34.20.jpeg" alt=""></div>
                        <div class="partner-logo"><img
                                src="assets/image/partenaires/WhatsApp Image 2026-11-08 at 16.36.19.jpeg" alt=""></div>
                        <div class="partner-logo"><img
                                src="assets/image/partenaires/WhatsApp Image 2026-11-08 at 16.37.02.jpeg" alt=""></div>
                        <div class="partner-logo"><img
                                src="assets/image/partenaires/WhatsApp Image 2026-11-08 at 16.38.07.jpeg" alt=""></div>
                        <div class="partner-logo"><img
                                src="assets/image/partenaires/WhatsApp Image 2026-11-09 at 11.05.26.jpeg" alt=""></div>
                    </div>
                </div>
                <button class="partner-arrow partner-next" aria-label="Suivant"><i
                        class="bi bi-chevron-right"></i></button>
            </div>
        </div>
    </section>

    <section class="cta-band">
        <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between gap-3">
            <div>
                <h2>Vous avez un projet digital ?</h2>
                <p>Discutons-en et trouvons ensemble la meilleure solution.</p>
            </div>
            <div class="d-flex flex-wrap gap-3"><a class="btn btn-primary btn-lg" href="#contact">Demander un devis <i
                        class="bi bi-arrow-right"></i></a><a class="btn btn-outline-light btn-lg"
                    href="https://wa.me/243810000000" target="_blank" rel="noopener"><i
                        class="bi bi-whatsapp me-2"></i>Nous contacter</a></div>
        </div>
    </section>

    <section id="contact" class="contact-section section-pad">
        <div class="container">
            <div class="section-heading text-center"><span class="section-kicker">Parlons de votre projet</span>
                <h2>Contactez-nous</h2>
                <p>Notre équipe est disponible pour vous accompagner.</p>
            </div>
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="contact-info">
                        <div><i class="bi bi-geo-alt"></i><span><b>Adresse</b><small>Kinshasa, RDC</small></span></div>
                        <div><i class="bi bi-telephone"></i><span><b>Téléphone</b><small>+243 893 047 095</small></span>
                        </div>
                        <div><i
                                class="bi bi-envelope"></i><span><b>Email</b><small>contact@notechgroup.com</small></span>
                        </div>
                        <div><i class="bi bi-clock"></i><span><b>Horaires</b><small>Lun – Ven : 8h00 –
                                    17h00</small></span></div>
                        <div class="contact-map"><i class="bi bi-geo-alt-fill"></i><span>NOTECH GROUP<br><small>Kinshasa
                                    ·
                                    République Démocratique du Congo</small></span></div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <form id="contactForm" class="contact-form">
                        <div class="row g-3">
                            <div class="col-md-6"><label for="name">Nom complet</label><input id="name" name="name"
                                    class="form-control" placeholder="Votre nom" required></div>
                            <div class="col-md-6"><label for="email">Email</label><input id="email" name="email"
                                    type="email" class="form-control" placeholder="Votre adresse email" required></div>
                            <div class="col-md-6"><label for="phone">Téléphone</label><input id="phone" name="phone"
                                    class="form-control" placeholder="+243 ..."></div>
                            <div class="col-md-6"><label for="subject">Objet</label><input id="subject" name="subject"
                                    class="form-control" placeholder="Sujet de votre demande"></div>
                            <div class="col-12"><label for="message">Votre message</label><textarea id="message"
                                    name="message" rows="5" class="form-control"
                                    placeholder="Parlez-nous de votre projet..." required></textarea></div>
                            <div class="col-12"><button class="btn btn-primary btn-lg" type="submit">Envoyer le message
                                    <i class="bi bi-send"></i></button>
                                <p class="form-note" id="formNote">Ce formulaire prépare un message dans votre
                                    application e-mail.</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php require_once('layouts/footer.php');?>

    <a class="back-top" href="#accueil" aria-label="Retour en haut"><i class="bi bi-arrow-up"></i></a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>

    <script>
    // Script pour masquer le preloader (minimum 1 seconde d'affichage)
    window.addEventListener('load', function () {
      const preloader = document.getElementById('preloader');
      if (preloader) {
        // S'assure qu'il s'affiche au moins 1 seconde (1000 ms)
        setTimeout(() => {
          preloader.classList.add('fade-out');
          setTimeout(() => {
            preloader.style.display = 'none';
          }, 500); // Correspond à la durée de la transition CSS (0.5s)
        }, 1000);
      }
    });

    document.addEventListener('DOMContentLoaded', function () {
      // Slider Réalisations
      const track = document.getElementById('realisationTrack');
      const prevBtn = document.getElementById('slidePrev');
      const nextBtn = document.getElementById('slideNext');

      if (track && prevBtn && nextBtn) {
        prevBtn.addEventListener('click', () => {
          track.scrollBy({ left: -300, behavior: 'smooth' });
        });
        nextBtn.addEventListener('click', () => {
          track.scrollBy({ left: 300, behavior: 'smooth' });
        });
      }

      // Témoignages rotatifs avec effet fadeIn
      const testimonials = [
        {
          text: "Grâce à NOTECH Group, nous avons digitalisé nos activités et amélioré notre visibilité. Une équipe professionnelle, réactive et à l'écoute.",
          author: "— Mme Nadia M.",
          role: "Responsable Communication"
        },
        {
          text: "La mise en place de notre plateforme avec Notechost et le suivi technique ont complètement transformé notre productivité interne.",
          author: "— Gédéon K.",
          role: "Fondateur NOTECH Group"
        },
        {
          text: "Un travail remarquable sur notre application web. Le professionnalisme et le respect des délais étaient au rendez-vous.",
          author: "— Pasteur Joël K.",
          role: "Responsable Institutionnel"
        }
      ];

      let currentIndex = 0;
      const testiBox = document.getElementById('testimonialBox');
      const testiText = document.getElementById('testiText');
      const testiAuthor = document.getElementById('testiAuthor');
      const testiRole = document.getElementById('testiRole');

      if (testiBox && testiText) {
        setInterval(() => {
          currentIndex = (currentIndex + 1) % testimonials.length;

          testiBox.classList.remove('testimonial-fade');
          void testiBox.offsetWidth;

          testiText.textContent = testimonials[currentIndex].text;
          testiAuthor.textContent = testimonials[currentIndex].author;
          testiRole.textContent = testimonials[currentIndex].role;

          testiBox.classList.add('testimonial-fade');
        }, 5000);
      }
    });
  </script>
</body>

</html>