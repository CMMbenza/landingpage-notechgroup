<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description"
        content="Découvrez NOTECH Group, entreprise technologique congolaise spécialisée dans la transformation digitale, les solutions numériques et l'innovation.">

    <meta name="theme-color" content="#061b43">

    <title>À propos — NOTECH Group</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

    <style>
    :root {
        --notech-blue: #061b43;
        --notech-primary: #0878ef;
        --notech-yellow: #ffd43b;
        --notech-text: #102344;
        --notech-light: #f4f8ff;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: 'DM Sans', sans-serif;
        color: var(--notech-text);
    }

    /* HERO À PROPOS */
    .about-hero {
        position: relative;
        min-height: 470px;
        padding: 145px 0 90px;
        overflow: hidden;
        color: white;
        background:
            radial-gradient(circle at 80% 20%, #0878ef55, transparent 35%),
            linear-gradient(120deg, #04132f, #073778 65%, #061b43);
    }

    .about-hero::before {
        content: "";
        position: absolute;
        width: 500px;
        height: 500px;
        border: 1px solid #ffffff17;
        border-radius: 50%;
        right: -100px;
        top: -180px;
        box-shadow: 0 0 0 50px #ffffff08,
            0 0 0 100px #ffffff05;
    }

    .about-hero::after {
        content: "";
        position: absolute;
        width: 280px;
        height: 280px;
        border: 2px solid #ffd43b35;
        border-radius: 50%;
        bottom: -200px;
        left: 20%;
    }

    .about-hero .container {
        position: relative;
        z-index: 2;
    }

    .about-badge {
        display: inline-flex;
        align-items: center;
        gap: 9px;
        background: #ffffff18;
        border: 1px solid #ffffff30;
        border-radius: 30px;
        padding: 8px 16px;
        font-size: 13px;
        font-weight: 700;
        margin-bottom: 22px;
    }

    .about-badge i {
        color: var(--notech-yellow);
    }

    .about-hero h1 {
        font-family: 'Manrope', sans-serif;
        font-size: clamp(36px, 5vw, 58px);
        font-weight: 800;
        line-height: 1.12;
        margin-bottom: 22px;
    }

    .about-hero h1 span {
        color: var(--notech-yellow);
    }

    .about-hero p {
        max-width: 620px;
        font-size: 17px;
        line-height: 1.8;
        color: #dceaff;
    }

    .about-breadcrumb {
        margin-top: 25px;
        font-size: 13px;
        color: #c5d8f5;
    }

    .about-breadcrumb a {
        color: var(--notech-yellow);
        text-decoration: none;
    }

    .about-hero-card {
        background: linear-gradient(145deg, #ffffff20, #ffffff08);
        border: 1px solid #ffffff35;
        border-radius: 22px;
        padding: 35px;
        backdrop-filter: blur(12px);
        box-shadow: 0 25px 60px #00000025;
    }

    .about-hero-card .big-icon {
        width: 75px;
        height: 75px;
        background: var(--notech-yellow);
        color: var(--notech-blue);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 36px;
        margin-bottom: 25px;
    }

    .about-hero-card h3 {
        font-weight: 800;
        font-family: 'Manrope', sans-serif;
        margin-bottom: 12px;
    }

    .about-hero-card p {
        font-size: 14px;
        margin: 0;
    }

    /* SECTION GENERALE */
    .about-section {
        padding: 85px 0;
    }

    .about-kicker {
        color: #d3a600;
        font-size: 12px;
        text-transform: uppercase;
        font-weight: 800;
        letter-spacing: 1.5px;
        display: inline-block;
        margin-bottom: 12px;
    }

    .about-title {
        font-family: 'Manrope', sans-serif;
        font-weight: 800;
        color: var(--notech-blue);
        font-size: clamp(27px, 3vw, 38px);
        margin-bottom: 18px;
    }

    .about-title span {
        color: #e1b400;
    }

    .about-lead {
        color: #64748b;
        line-height: 1.9;
        font-size: 15px;
    }

    /* PRESENTATION */
    .about-presentation {
        background: white;
    }

    .presentation-visual {
        min-height: 380px;
        position: relative;
        border-radius: 22px;
        overflow: hidden;
        background:
            radial-gradient(circle at 70% 30%, #168bff88, transparent 30%),
            linear-gradient(145deg, #061b43, #0c5bb5);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .presentation-visual::before,
    .presentation-visual::after {
        content: "";
        position: absolute;
        width: 280px;
        height: 280px;
        border: 1px solid #ffffff25;
        border-radius: 50%;
    }

    .presentation-visual::after {
        width: 380px;
        height: 380px;
    }

    .presentation-logo {
        position: relative;
        z-index: 2;
        text-align: center;
        color: white;
    }

    .presentation-logo i {
        display: block;
        font-size: 85px;
        color: var(--notech-yellow);
        margin-bottom: 12px;
    }

    .presentation-logo strong {
        font-family: 'Manrope', sans-serif;
        font-size: 29px;
        font-weight: 800;
        letter-spacing: 2px;
    }

    .presentation-logo small {
        display: block;
        letter-spacing: 7px;
        font-size: 12px;
    }

    .presentation-tag {
        position: absolute;
        bottom: 20px;
        left: 20px;
        right: 20px;
        z-index: 3;
        background: #ffffff18;
        border: 1px solid #ffffff30;
        padding: 14px;
        border-radius: 12px;
        color: white;
        font-size: 13px;
        text-align: center;
    }

    .presentation-tag i {
        color: var(--notech-yellow);
        margin-right: 7px;
    }

    /* STATS */
    .about-stats {
        background: var(--notech-light);
        padding: 40px 0;
        border-top: 1px solid #e8eef7;
        border-bottom: 1px solid #e8eef7;
    }

    .about-stat {
        text-align: center;
        padding: 20px 10px;
        border-right: 1px solid #dce5f1;
    }

    .about-stat:last-child {
        border: 0;
    }

    .about-stat i {
        font-size: 28px;
        color: var(--notech-primary);
        display: block;
        margin-bottom: 12px;
    }

    .about-stat strong {
        display: block;
        font-family: 'Manrope', sans-serif;
        font-size: 30px;
        font-weight: 800;
        color: var(--notech-blue);
    }

    .about-stat span {
        color: #64748b;
        font-size: 13px;
    }

    /* MISSION VISION VALEURS */
    .mvv-section {
        background: #fff;
    }

    .mvv-card {
        height: 100%;
        background: white;
        border: 1px solid #e7edf5;
        border-radius: 18px;
        padding: 30px 25px;
        transition: .3s;
        box-shadow: 0 8px 25px #061b4308;
    }

    .mvv-card:hover {
        transform: translateY(-7px);
        border-color: var(--notech-yellow);
        box-shadow: 0 15px 35px #061b4312;
    }

    .mvv-icon {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 16px;
        background: #fff5c7;
        color: #b68b00;
        font-size: 27px;
        margin-bottom: 22px;
    }

    .mvv-card h3 {
        font-family: 'Manrope', sans-serif;
        font-weight: 800;
        font-size: 19px;
        color: var(--notech-blue);
        margin-bottom: 13px;
    }

    .mvv-card p {
        color: #64748b;
        font-size: 14px;
        line-height: 1.8;
        margin: 0;
    }

    /* VALEURS */
    .values-section {
        background: var(--notech-blue);
        color: white;
        position: relative;
        overflow: hidden;
    }

    .values-section .about-title {
        color: white;
    }

    .values-section .about-lead {
        color: #c8d8f0;
    }

    .value-item {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        padding: 18px 0;
        border-bottom: 1px solid #ffffff18;
    }

    .value-item:last-child {
        border: 0;
    }

    .value-item>i {
        width: 42px;
        height: 42px;
        flex-shrink: 0;
        border-radius: 12px;
        background: #ffd43b20;
        color: var(--notech-yellow);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 20px;
    }

    .value-item h4 {
        font-size: 16px;
        font-weight: 800;
        margin-bottom: 5px;
    }

    .value-item p {
        color: #c6d6ed;
        font-size: 13px;
        line-height: 1.7;
        margin: 0;
    }

    .values-image {
        min-height: 400px;
        border-radius: 22px;
        background:
            linear-gradient(135deg, #0878ef55, #061b43aa),
            linear-gradient(145deg, #1255a0, #03132d);
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #ffffff25;
        position: relative;
    }

    .values-image i {
        font-size: 150px;
        color: var(--notech-yellow);
    }

    .values-image span {
        position: absolute;
        bottom: 25px;
        font-size: 14px;
        font-weight: 700;
        color: white;
    }

    /* HISTOIRE */
    .history-section {
        background: var(--notech-light);
    }

    .history-line {
        position: relative;
        max-width: 850px;
        margin: 40px auto 0;
    }

    .history-line::before {
        content: "";
        position: absolute;
        left: 20px;
        top: 10px;
        bottom: 10px;
        width: 3px;
        background: linear-gradient(var(--notech-yellow), var(--notech-primary));
    }

    .history-item {
        position: relative;
        padding-left: 65px;
        margin-bottom: 35px;
    }

    .history-dot {
        position: absolute;
        left: 8px;
        top: 3px;
        width: 27px;
        height: 27px;
        border-radius: 50%;
        background: var(--notech-yellow);
        border: 6px solid white;
        box-shadow: 0 0 0 2px #e6b900;
    }

    .history-year {
        display: inline-block;
        color: #bb9200;
        font-size: 14px;
        font-weight: 800;
        margin-bottom: 8px;
    }

    .history-item h3 {
        font-family: 'Manrope', sans-serif;
        font-weight: 800;
        font-size: 19px;
        color: var(--notech-blue);
    }

    .history-item p {
        color: #64748b;
        font-size: 14px;
        line-height: 1.8;
    }

    /* EXPERTISE */
    .expertise-section {
        background: white;
    }

    .expertise-card {
        border: 1px solid #e6edf6;
        border-radius: 16px;
        padding: 25px;
        height: 100%;
        transition: .3s;
    }

    .expertise-card:hover {
        transform: translateY(-5px);
        border-color: var(--notech-yellow);
        box-shadow: 0 12px 30px #061b4310;
    }

    .expertise-card i {
        font-size: 32px;
        color: var(--notech-primary);
        display: block;
        margin-bottom: 17px;
    }

    .expertise-card h3 {
        font-family: 'Manrope', sans-serif;
        font-size: 17px;
        font-weight: 800;
        color: var(--notech-blue);
    }

    .expertise-card p {
        font-size: 13px;
        color: #64748b;
        line-height: 1.8;
        margin: 0;
    }

    /* ENGAGEMENT */
    .commitment-section {
        background: var(--notech-light);
    }

    .commitment-list {
        list-style: none;
        padding: 0;
        margin: 25px 0 0;
    }

    .commitment-list li {
        display: flex;
        align-items: flex-start;
        gap: 12px;
        padding: 11px 0;
        color: #40516a;
        font-size: 14px;
    }

    .commitment-list i {
        color: #d4a500;
        font-size: 19px;
    }

    .commitment-box {
        padding: 35px;
        background: white;
        border-radius: 20px;
        border-left: 5px solid var(--notech-yellow);
        box-shadow: 0 12px 35px #061b430b;
    }

    .commitment-box i {
        font-size: 42px;
        color: var(--notech-primary);
    }

    .commitment-box h3 {
        font-family: 'Manrope', sans-serif;
        font-weight: 800;
        color: var(--notech-blue);
        font-size: 22px;
        margin-top: 18px;
    }

    .commitment-box p {
        color: #64748b;
        font-size: 14px;
        line-height: 1.8;
    }

    /* CTA */
    .about-cta {
        background:
            radial-gradient(circle at 80% 20%, #168bff66, transparent 30%),
            linear-gradient(110deg, #061b43, #0759b9);
        padding: 65px 0;
        color: white;
        border-top: 3px solid var(--notech-yellow);
    }

    .about-cta h2 {
        font-family: 'Manrope', sans-serif;
        font-weight: 800;
        font-size: 30px;
    }

    .about-cta h2 span {
        color: var(--notech-yellow);
    }

    .about-cta p {
        color: #d5e5fa;
        margin: 0;
    }

    .btn-yellow {
        background: var(--notech-yellow);
        border: 1px solid var(--notech-yellow);
        color: var(--notech-blue);
        font-weight: 800;
        padding: 13px 22px;
        border-radius: 9px;
    }

    .btn-yellow:hover {
        background: #f0bd00;
        border-color: #f0bd00;
        color: var(--notech-blue);
    }

    /* RESPONSIVE */
    @media(max-width: 991px) {
        .about-hero {
            padding-top: 125px;
        }

        .about-hero-card {
            margin-top: 35px;
        }

        .about-stat:nth-child(2) {
            border-right: 0;
        }

        .about-stat:nth-child(-n+2) {
            border-bottom: 1px solid #dce5f1;
        }
    }

    @media(max-width: 575px) {
        .about-section {
            padding: 60px 0;
        }

        .about-hero {
            padding: 115px 0 65px;
        }

        .about-hero h1 {
            font-size: 37px;
        }

        .presentation-visual {
            min-height: 290px;
        }

        .about-stat strong {
            font-size: 24px;
        }

        .about-stat {
            padding: 20px 5px;
        }

        .values-image {
            min-height: 270px;
        }

        .values-image i {
            font-size: 100px;
        }
    }
    </style>
</head>

<body>

    <!-- NAVIGATION -->
    <?php require_once('layouts/navbar.php');?>

    <!-- HERO -->
    <header class="about-hero">

        <div class="container">

            <div class="row align-items-center">

                <div class="col-lg-7">

                    <div class="about-badge">
                        <i class="bi bi-stars"></i>
                        NOTECH GROUP
                    </div>

                    <h1>
                        Nous créons aujourd'hui
                        <span>les solutions digitales</span>
                        de demain.
                    </h1>

                    <p>
                        Nous sommes une entreprise technologique congolaise
                        engagée dans la transformation numérique des entreprises,
                        des institutions et des entrepreneurs en RDC et en Afrique.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4">

                        <a href="#presentation" class="btn btn-yellow">
                            Découvrir NOTECH <i class="bi bi-arrow-down"></i>
                        </a>

                        <a href="index.php#contact" class="btn btn-outline-light">
                            Parlons de votre projet
                            <i class="bi bi-arrow-right"></i>
                        </a>

                    </div>

                    <div class="about-breadcrumb">
                        <a href="index.php">Accueil</a>
                        <i class="bi bi-chevron-right mx-2"></i>
                        À propos
                    </div>

                </div>

                <div class="col-lg-5">

                    <div class="about-hero-card">

                        <div class="big-icon">
                            <i class="bi bi-lightbulb"></i>
                        </div>

                        <h3>L'innovation au cœur de notre vision.</h3>

                        <p>
                            Nous transformons les idées en solutions numériques
                            concrètes, utiles et adaptées aux réalités de notre
                            environnement.
                        </p>

                        <div class="mt-4 d-flex gap-3 align-items-center">
                            <i class="bi bi-check-circle-fill" style="color:#FFD43B;font-size:22px"></i>
                            <span class="small">Innovation · Expertise · Engagement</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </header>


    <!-- PRESENTATION -->
    <section id="presentation" class="about-section about-presentation">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <span class="about-kicker">Qui sommes-nous ?</span>

                    <h2 class="about-title">
                        Bienvenue chez <span>NOTECH Group</span>
                    </h2>

                    <p class="about-lead">
                        NOTECH Group est une entreprise technologique congolaise
                        spécialisée dans la conception, le développement et le
                        déploiement de solutions numériques.
                    </p>

                    <p class="about-lead">
                        Nous accompagnons les entreprises, les institutions,
                        les organisations et les entrepreneurs dans leur
                        transformation digitale grâce à des outils technologiques
                        modernes, performants et accessibles.
                    </p>

                    <p class="about-lead">
                        Notre ambition est de mettre la technologie au service
                        du développement, de simplifier les activités
                        professionnelles et de contribuer à la croissance
                        de l'écosystème numérique africain.
                    </p>

                    <a href="index.php#solutions" class="btn btn-primary mt-3">
                        Explorer nos solutions
                        <i class="bi bi-arrow-right ms-2"></i>
                    </a>

                </div>

                <div class="col-lg-6">

                    <div class="presentation-visual">

                        <div class="presentation-logo">
                            <i class="bi bi-cpu"></i>
                            <strong>NOTECH</strong>
                            <small>GROUP</small>
                        </div>

                        <div class="presentation-tag">
                            <i class="bi bi-stars"></i>
                            La technologie qui fait avancer vos idées.
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- CHIFFRES CLES -->
    <section class="about-stats">

        <div class="container">

            <div class="row g-0">

                <div class="col-6 col-lg-3 about-stat">
                    <i class="bi bi-people"></i>
                    <strong>+100</strong>
                    <span>Clients satisfaits</span>
                </div>

                <div class="col-6 col-lg-3 about-stat">
                    <i class="bi bi-layers"></i>
                    <strong>5</strong>
                    <span>Solutions digitales</span>
                </div>

                <div class="col-6 col-lg-3 about-stat">
                    <i class="bi bi-code-slash"></i>
                    <strong>+50</strong>
                    <span>Projets réalisés</span>
                </div>

                <div class="col-6 col-lg-3 about-stat">
                    <i class="bi bi-calendar-check"></i>
                    <strong>2022</strong>
                    <span>Année de lancement</span>
                </div>

            </div>

        </div>

    </section>


    <!-- MISSION VISION VALEURS -->
    <section class="about-section mvv-section">

        <div class="container">

            <div class="text-center mb-5">

                <span class="about-kicker">Notre raison d'être</span>

                <h2 class="about-title">
                    Notre mission, notre vision et <span>nos valeurs</span>
                </h2>

                <p class="about-lead mx-auto" style="max-width:650px">
                    Les principes qui guident notre engagement et orientent
                    chacune de nos actions.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-md-4">

                    <div class="mvv-card">

                        <div class="mvv-icon">
                            <i class="bi bi-bullseye"></i>
                        </div>

                        <h3>Notre mission</h3>

                        <p>
                            Concevoir et fournir des solutions numériques
                            innovantes qui facilitent les activités,
                            améliorent la productivité et accompagnent
                            les organisations dans leur développement.
                        </p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="mvv-card">

                        <div class="mvv-icon">
                            <i class="bi bi-eye"></i>
                        </div>

                        <h3>Notre vision</h3>

                        <p>
                            Devenir un acteur technologique de référence
                            en République Démocratique du Congo et en Afrique,
                            en contribuant activement à un écosystème
                            numérique innovant et accessible.
                        </p>

                    </div>

                </div>

                <div class="col-md-4">

                    <div class="mvv-card">

                        <div class="mvv-icon">
                            <i class="bi bi-gem"></i>
                        </div>

                        <h3>Nos valeurs</h3>

                        <p>
                            L'innovation, l'excellence, l'intégrité,
                            la collaboration et la satisfaction de nos clients
                            constituent les fondements de notre culture
                            d'entreprise.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- NOS VALEURS -->
    <section class="about-section values-section">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <span class="about-kicker">Ce qui nous définit</span>

                    <h2 class="about-title">
                        Les valeurs qui <span>nous animent</span>
                    </h2>

                    <p class="about-lead">
                        Nous croyons qu'une transformation numérique réussie
                        repose autant sur la technologie que sur les femmes
                        et les hommes qui la rendent possible.
                    </p>

                    <div class="value-item">

                        <i class="bi bi-lightbulb"></i>

                        <div>
                            <h4>Innovation</h4>
                            <p>
                                Imaginer et développer des solutions
                                modernes pour répondre aux défis actuels.
                            </p>
                        </div>

                    </div>

                    <div class="value-item">

                        <i class="bi bi-award"></i>

                        <div>
                            <h4>Excellence</h4>
                            <p>
                                Rechercher constamment la qualité
                                dans nos services et nos réalisations.
                            </p>
                        </div>

                    </div>

                    <div class="value-item">

                        <i class="bi bi-shield-check"></i>

                        <div>
                            <h4>Intégrité</h4>
                            <p>
                                Agir avec transparence, responsabilité
                                et professionnalisme.
                            </p>
                        </div>

                    </div>

                    <div class="value-item">

                        <i class="bi bi-people"></i>

                        <div>
                            <h4>Collaboration</h4>
                            <p>
                                Construire des relations durables
                                avec nos clients et partenaires.
                            </p>
                        </div>

                    </div>

                    <div class="value-item">

                        <i class="bi bi-heart"></i>

                        <div>
                            <h4>Satisfaction client</h4>
                            <p>
                                Placer les besoins et la réussite
                                de nos clients au centre de nos priorités.
                            </p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-6">

                    <div class="values-image">
                        <i class="bi bi-diagram-3"></i>
                        <span>Ensemble, construisons le numérique de demain.</span>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- NOTRE HISTOIRE -->
    <section class="about-section history-section">

        <div class="container">

            <div class="text-center">

                <span class="about-kicker">Notre parcours</span>

                <h2 class="about-title">
                    Une histoire tournée vers <span>l'avenir</span>
                </h2>

                <p class="about-lead mx-auto" style="max-width:650px">
                    Depuis nos débuts, nous développons des solutions
                    technologiques pour accompagner l'évolution
                    numérique de notre environnement.
                </p>

            </div>

            <div class="history-line">

                <div class="history-item">

                    <span class="history-dot"></span>

                    <span class="history-year">2022</span>

                    <h3>Les débuts de NOTECH Group</h3>

                    <p>
                        Le lancement de notre aventure technologique
                        avec une ambition : rendre les solutions
                        numériques plus accessibles et utiles.
                    </p>

                </div>

                <div class="history-item">

                    <span class="history-dot"></span>

                    <span class="history-year">Développement</span>

                    <h3>Élargissement de nos compétences</h3>

                    <p>
                        Développement de notre expertise dans les
                        domaines du web, du mobile, du marketing,
                        de l'hébergement et de la formation numérique.
                    </p>

                </div>

                <div class="history-item">

                    <span class="history-dot"></span>

                    <span class="history-year">Innovation</span>

                    <h3>Création de nos solutions digitales</h3>

                    <p>
                        Conception et développement d'outils numériques
                        adaptés aux besoins des entreprises, des
                        professionnels et des organisations.
                    </p>

                </div>

                <div class="history-item">

                    <span class="history-dot"></span>

                    <span class="history-year">Aujourd'hui et demain</span>

                    <h3>Une ambition tournée vers l'Afrique</h3>

                    <p>
                        Continuer à innover, renforcer nos partenariats
                        et contribuer à la transformation numérique
                        en RDC et au-delà.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- DOMAINES D'EXPERTISE -->
    <section class="about-section expertise-section">

        <div class="container">

            <div class="text-center mb-5">

                <span class="about-kicker">Notre savoir-faire</span>

                <h2 class="about-title">
                    Nos domaines <span>d'expertise</span>
                </h2>

                <p class="about-lead mx-auto" style="max-width:650px">
                    Un ensemble de compétences complémentaires
                    pour répondre aux enjeux de votre transformation digitale.
                </p>

            </div>

            <div class="row g-4">

                <div class="col-sm-6 col-lg-3">

                    <div class="expertise-card">
                        <i class="bi bi-code-square"></i>
                        <h3>Développement Web & Mobile</h3>
                        <p>
                            Conception de sites web, applications mobiles,
                            plateformes professionnelles et logiciels sur mesure.
                        </p>
                    </div>

                </div>

                <div class="col-sm-6 col-lg-3">

                    <div class="expertise-card">
                        <i class="bi bi-megaphone"></i>
                        <h3>Marketing & Communication</h3>
                        <p>
                            Stratégies digitales, publicité en ligne,
                            communication visuelle et développement de marque.
                        </p>
                    </div>

                </div>

                <div class="col-sm-6 col-lg-3">

                    <div class="expertise-card">
                        <i class="bi bi-cloud-check"></i>
                        <h3>Hébergement Web</h3>
                        <p>
                            Hébergement de sites web, noms de domaine,
                            emails professionnels et solutions cloud.
                        </p>
                    </div>

                </div>

                <div class="col-sm-6 col-lg-3">

                    <div class="expertise-card">
                        <i class="bi bi-mortarboard"></i>
                        <h3>Formation Numérique</h3>
                        <p>
                            Formations pratiques en informatique,
                            création graphique, outils numériques
                            et marketing digital.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- NOTRE ENGAGEMENT -->
    <section class="about-section commitment-section">

        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-7">

                    <span class="about-kicker">Notre engagement</span>

                    <h2 class="about-title">
                        Votre réussite numérique est <span>notre priorité.</span>
                    </h2>

                    <p class="about-lead">
                        Chaque projet représente pour nous une opportunité
                        de créer de la valeur, d'apporter des réponses
                        concrètes et de bâtir une relation de confiance.
                    </p>

                    <ul class="commitment-list">

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Une écoute attentive de vos besoins.
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Des solutions adaptées à votre activité.
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Une équipe professionnelle et engagée.
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Un accompagnement tout au long de vos projets.
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Un support technique et un suivi de qualité.
                        </li>

                    </ul>

                </div>

                <div class="col-lg-5">

                    <div class="commitment-box">

                        <i class="bi bi-rocket-takeoff"></i>

                        <h3>Faisons avancer vos idées.</h3>

                        <p>
                            Vous avez un projet, une ambition ou un besoin
                            technologique ? NOTECH Group est prêt à vous
                            accompagner dans sa concrétisation.
                        </p>

                        <a href="index.php#contact" class="btn btn-primary">
                            Travaillons ensemble
                            <i class="bi bi-arrow-right ms-2"></i>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- PARTENAIRES -->
    <section class="partners-section py-5">

        <div class="container">

            <div class="section-heading text-center">

                <span class="about-kicker">Ils nous font confiance</span>

                <h2>Nos partenaires et clients</h2>

                <p>
                    Ils nous font confiance et construisent avec nous
                    leur réussite digitale.
                </p>

            </div>

            <div class="partners-slider">

                <button class="partner-arrow partner-prev" type="button" aria-label="Partenaires précédents">
                    <i class="bi bi-chevron-left"></i>
                </button>

                <div class="partner-viewport">

                    <div class="partner-track">

                        <div class="partner-logo">
                            <i class="bi bi-building"></i>
                            <span>CNJ</span>
                        </div>

                        <div class="partner-logo">
                            <i class="bi bi-shield-check"></i>
                            <span>BOMOKO-DRC</span>
                        </div>

                        <div class="partner-logo">
                            <i class="bi bi-bar-chart"></i>
                            <span>KAAPITAL <small>Group</small></span>
                        </div>

                        <div class="partner-logo">
                            <i class="bi bi-globe2"></i>
                            <span>DBC <small>Community</small></span>
                        </div>

                        <div class="partner-logo">
                            <i class="bi bi-boxes"></i>
                            <span>TRANSFORME-DRC</span>
                        </div>

                        <div class="partner-logo">
                            <i class="bi bi-award"></i>
                            <span>MKS <small>Group</small></span>
                        </div>

                    </div>

                </div>

                <button class="partner-arrow partner-next" type="button" aria-label="Partenaires suivants">
                    <i class="bi bi-chevron-right"></i>
                </button>

            </div>

        </div>

    </section>


    <!-- CTA -->
    <section class="about-cta">

        <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between gap-4">

            <div>
                <h2>
                    Construisons ensemble <span>l'avenir numérique.</span>
                </h2>

                <p>
                    Votre prochaine idée mérite une solution innovante.
                    Parlons de votre projet.
                </p>
            </div>

            <div class="d-flex flex-wrap gap-3">

                <a href="index.php#contact" class="btn btn-yellow">
                    Demander un devis
                    <i class="bi bi-arrow-right ms-2"></i>
                </a>

                <a href="https://wa.me/243810000000" target="_blank" rel="noopener" class="btn btn-outline-light">
                    <i class="bi bi-whatsapp me-2"></i>
                    WhatsApp
                </a>

            </div>

        </div>

    </section>


    <!-- FOOTER -->
    <?php require_once('layouts/footer.php');?>

    <!-- RETOUR EN HAUT -->
    <a class="back-top" href="#" aria-label="Retour en haut">
        <i class="bi bi-arrow-up"></i>
    </a>


    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>

    <script>
    // Année automatique
    document.getElementById('year').textContent = new Date().getFullYear();

    // Slider des partenaires
    (() => {

        const viewport = document.querySelector('.partner-viewport');
        const track = document.querySelector('.partner-track');
        const prev = document.querySelector('.partner-prev');
        const next = document.querySelector('.partner-next');

        if (!viewport || !track || !prev || !next) return;

        const originals = Array.from(track.children);
        const total = originals.length;

        originals.forEach(item => {
            track.appendChild(item.cloneNode(true));
        });

        let index = 0;
        let timer = null;

        function getStep() {
            const item = track.querySelector('.partner-logo');
            const gap = parseFloat(getComputedStyle(track).gap) || 0;
            return item.getBoundingClientRect().width + gap;
        }

        function move() {
            track.style.transform = `translateX(${-index * getStep()}px)`;
        }

        function slideNext() {

            index++;

            track.style.transition = 'transform .55s ease';

            move();

            if (index >= total) {

                setTimeout(() => {

                    track.style.transition = 'none';
                    index = 0;
                    move();

                }, 560);
            }
        }

        function slidePrev() {

            if (index <= 0) {

                track.style.transition = 'none';
                index = total;
                move();
                track.offsetHeight;

            }

            index--;

            track.style.transition = 'transform .55s ease';

            move();
        }

        function stopSlider() {
            clearInterval(timer);
            timer = null;
        }

        function startSlider() {
            stopSlider();
            timer = setInterval(slideNext, 3000);
        }

        next.addEventListener('click', () => {
            slideNext();
            startSlider();
        });

        prev.addEventListener('click', () => {
            slidePrev();
            startSlider();
        });

        viewport.addEventListener('mouseenter', stopSlider);
        viewport.addEventListener('mouseleave', startSlider);

        viewport.addEventListener('touchstart', stopSlider, {
            passive: true
        });
        viewport.addEventListener('touchend', startSlider, {
            passive: true
        });

        window.addEventListener('resize', () => {
            index = 0;
            track.style.transition = 'none';
            move();
        });

        startSlider();

    })();
    </script>

</body>

</html>