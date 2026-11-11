<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Découvrez les actualités, conseils et innovations numériques de NOTECH Group.">
    <meta name="theme-color" content="#061b43">

    <title>Blog — NOTECH Group | Actualités et innovations numériques</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

    <style>
    /* BLOG PAGE */

    .blog-hero {
        min-height: 430px;
        padding: 145px 0 85px;
        position: relative;
        overflow: hidden;
        background:
            radial-gradient(circle at 85% 30%, rgba(0, 132, 255, .3), transparent 35%),
            linear-gradient(120deg, #04132f, #082c69 65%, #061b43);
        color: white;
    }

    .blog-hero::after {
        content: "";
        position: absolute;
        width: 400px;
        height: 400px;
        border: 1px solid rgba(255, 255, 255, .12);
        border-radius: 50%;
        right: -100px;
        bottom: -230px;
        box-shadow: 0 0 0 35px rgba(255, 255, 255, .025),
            0 0 0 70px rgba(255, 255, 255, .025);
    }

    .blog-hero h1 {
        font-family: Manrope, sans-serif;
        font-weight: 800;
        font-size: clamp(2.5rem, 5vw, 4rem);
        line-height: 1.15;
    }

    .blog-hero h1 span {
        color: #ffc928;
    }

    .blog-hero p {
        color: #d1def3;
        max-width: 600px;
        line-height: 1.8;
    }

    .blog-badge {
        display: inline-block;
        background: rgba(255, 201, 40, .14);
        color: #ffd54f;
        border: 1px solid rgba(255, 201, 40, .3);
        padding: 7px 15px;
        border-radius: 30px;
        font-size: 12px;
        font-weight: 800;
        margin-bottom: 20px;
    }

    .blog-hero-visual {
        min-height: 240px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .blog-hero-visual .visual-box {
        width: 280px;
        height: 230px;
        border-radius: 25px;
        background: linear-gradient(145deg, #087bea, #041b48);
        border: 1px solid rgba(255, 255, 255, .25);
        box-shadow: 0 25px 60px rgba(0, 0, 0, .3);
        display: flex;
        align-items: center;
        justify-content: center;
        transform: rotate(-5deg);
    }

    .blog-hero-visual i {
        font-size: 110px;
        color: white;
        filter: drop-shadow(0 10px 20px rgba(0, 0, 0, .3));
    }

    .blog-hero-visual .yellow-dot {
        position: absolute;
        width: 55px;
        height: 55px;
        border-radius: 15px;
        background: #ffc928;
        color: #061b43;
        display: grid;
        place-items: center;
        font-size: 25px;
        right: 10%;
        top: 0;
        box-shadow: 0 10px 30px rgba(255, 201, 40, .25);
    }

    .blog-content {
        background: #f6f9ff;
        padding: 85px 0;
    }

    .blog-heading {
        margin-bottom: 35px;
    }

    .blog-heading h2 {
        color: #071c43;
        font-family: Manrope, sans-serif;
        font-weight: 800;
    }

    .blog-heading h2 span {
        color: #f0b900;
    }

    .blog-heading p {
        color: #71809b;
    }

    .blog-search {
        position: relative;
        max-width: 430px;
    }

    .blog-search input {
        height: 48px;
        border: 1px solid #e1e8f3;
        border-radius: 12px;
        padding-left: 45px;
        box-shadow: 0 5px 20px rgba(6, 27, 67, .04);
    }

    .blog-search i {
        position: absolute;
        left: 16px;
        top: 15px;
        color: #087bea;
    }

    .blog-filters {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
        margin: 35px 0;
    }

    .blog-filter {
        border: 1px solid #e0e7f2;
        background: white;
        color: #31415d;
        padding: 9px 20px;
        border-radius: 30px;
        font-size: 13px;
        font-weight: 700;
        transition: .3s;
    }

    .blog-filter:hover,
    .blog-filter.active {
        background: #087bea;
        border-color: #087bea;
        color: white;
    }

    .blog-card {
        height: 100%;
        background: white;
        border-radius: 18px;
        overflow: hidden;
        border: 1px solid #e8edf5;
        box-shadow: 0 8px 30px rgba(6, 27, 67, .045);
        transition: .35s;
    }

    .blog-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 18px 40px rgba(6, 27, 67, .12);
    }

    .blog-image {
        height: 220px;
        position: relative;
        overflow: hidden;
        background: #e6efff;
    }

    .blog-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: .5s;
    }

    .blog-card:hover .blog-image img {
        transform: scale(1.07);
    }

    .blog-category {
        position: absolute;
        top: 15px;
        left: 15px;
        padding: 7px 13px;
        background: #ffc928;
        color: #061b43;
        font-size: 11px;
        font-weight: 800;
        border-radius: 30px;
    }

    .blog-body {
        padding: 23px;
    }

    .blog-meta {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        font-size: 12px;
        color: #8491a8;
        margin-bottom: 14px;
    }

    .blog-meta i {
        color: #087bea;
        margin-right: 4px;
    }

    .blog-body h3 {
        font-family: Manrope, sans-serif;
        font-size: 18px;
        line-height: 1.5;
        font-weight: 800;
        color: #071c43;
        margin-bottom: 12px;
    }

    .blog-body p {
        font-size: 13px;
        line-height: 1.8;
        color: #738099;
    }

    .blog-read {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #087bea;
        text-decoration: none;
        font-size: 13px;
        font-weight: 800;
        margin-top: 10px;
    }

    .blog-read:hover {
        color: #f0b900;
    }

    .blog-featured {
        background: white;
        border-radius: 22px;
        overflow: hidden;
        box-shadow: 0 15px 45px rgba(6, 27, 67, .08);
        margin-bottom: 75px;
    }

    .blog-featured img {
        width: 100%;
        height: 100%;
        min-height: 350px;
        object-fit: cover;
    }

    .featured-content {
        padding: 40px;
    }

    .featured-content h2 {
        color: #071c43;
        font-family: Manrope, sans-serif;
        font-weight: 800;
        line-height: 1.4;
        margin: 20px 0;
    }

    .featured-content h2 span {
        color: #e8ae00;
    }

    .featured-content p {
        color: #71809b;
        line-height: 1.9;
    }

    .featured-label {
        display: inline-block;
        background: #fff3c6;
        color: #9a7000;
        border-radius: 30px;
        padding: 8px 14px;
        font-size: 11px;
        font-weight: 800;
    }

    .blog-newsletter {
        background: linear-gradient(110deg, #061b43, #0757ac);
        padding: 65px 0;
        color: white;
        position: relative;
        overflow: hidden;
    }

    .blog-newsletter h2 {
        font-family: Manrope, sans-serif;
        font-weight: 800;
    }

    .blog-newsletter h2 span {
        color: #ffc928;
    }

    .newsletter-form {
        display: flex;
        gap: 10px;
        max-width: 480px;
    }

    .newsletter-form input {
        border-radius: 10px;
        min-width: 0;
        height: 50px;
    }

    .newsletter-form button {
        white-space: nowrap;
        background: #ffc928;
        color: #061b43;
        border: none;
        border-radius: 10px;
        padding: 0 20px;
        font-weight: 800;
    }

    .newsletter-form button:hover {
        background: white;
    }

    .blog-empty {
        display: none;
        text-align: center;
        padding: 50px 15px;
        color: #71809b;
    }

    @media(max-width: 768px) {
        .blog-hero {
            padding: 125px 0 60px;
        }

        .blog-hero-visual {
            margin-top: 35px;
        }

        .featured-content {
            padding: 25px;
        }

        .blog-featured img {
            min-height: 230px;
            max-height: 260px;
        }

        .newsletter-form {
            flex-direction: column;
        }

        .newsletter-form button {
            min-height: 48px;
        }
    }
    </style>
</head>

<body>

    <!-- NAVIGATION -->
    <?php require_once('layouts/navbar.php');?>

    <!-- HERO -->
    <header class="blog-hero">
        <div class="container position-relative" style="z-index:2">
            <div class="row align-items-center">

                <div class="col-lg-7">

                    <span class="blog-badge">
                        <i class="bi bi-stars me-2"></i> LE BLOG NOTECH GROUP
                    </span>

                    <h1>
                        Explorez le monde de
                        <span>l'innovation numérique.</span>
                    </h1>

                    <p class="mt-4">
                        Actualités, conseils, tendances technologiques et astuces digitales.
                        Découvrez nos articles pour mieux comprendre le numérique et
                        accompagner votre transformation digitale.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4">
                        <a href="#blogArticles" class="btn btn-primary btn-lg">
                            Découvrir nos articles <i class="bi bi-arrow-down"></i>
                        </a>

                        <a href="index.php#contact" class="btn btn-outline-light btn-lg">
                            Parlons de votre projet
                        </a>
                    </div>

                </div>

                <div class="col-lg-5">
                    <div class="blog-hero-visual">
                        <div class="visual-box">
                            <i class="bi bi-journal-richtext"></i>
                        </div>
                        <div class="yellow-dot">
                            <i class="bi bi-lightbulb-fill"></i>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <!-- ARTICLES -->
    <section id="blogArticles" class="blog-content">

        <div class="container">

            <div class="blog-heading text-center">
                <span class="section-kicker">Actualités & connaissances</span>
                <h2>Découvrez nos <span>articles</span></h2>
                <p>
                    Des contenus utiles pour apprendre, innover et réussir votre transformation digitale.
                </p>
            </div>

            <!-- ARTICLE A LA UNE -->
            <div class="blog-featured">
                <div class="row g-0 align-items-center">

                    <div class="col-lg-6">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1000&q=85"
                            alt="Technologie et développement informatique">
                    </div>

                    <div class="col-lg-6">
                        <div class="featured-content">

                            <span class="featured-label">
                                <i class="bi bi-star-fill me-1"></i> ARTICLE À LA UNE
                            </span>

                            <div class="blog-meta mt-3">
                                <span><i class="bi bi-calendar3"></i> 07 Novembre 2026</span>
                                <span><i class="bi bi-clock"></i> 5 min de lecture</span>
                            </div>

                            <h2>
                                Pourquoi la transformation digitale est-elle devenue
                                <span>indispensable</span> pour les entreprises ?
                            </h2>

                            <p>
                                Le numérique transforme profondément les habitudes de travail,
                                la communication et la gestion des entreprises.
                                Découvrez pourquoi adopter des solutions digitales est
                                aujourd'hui un véritable avantage concurrentiel.
                            </p>

                            <a href="index.php#contact" class="btn btn-primary mt-3">
                                Lire l'article <i class="bi bi-arrow-right"></i>
                            </a>

                        </div>
                    </div>

                </div>
            </div>

            <!-- RECHERCHE -->
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3">

                <div>
                    <h3 class="fw-bold mb-1" style="color:#071c43">
                        Nos derniers articles
                    </h3>
                    <p class="text-muted small mb-0">
                        Explorez nos publications et trouvez les informations qui vous intéressent.
                    </p>
                </div>

                <div class="blog-search">
                    <i class="bi bi-search"></i>
                    <input type="search" id="blogSearch" class="form-control" placeholder="Rechercher un article...">
                </div>

            </div>

            <!-- FILTRES -->
            <div class="blog-filters">

                <button class="blog-filter active" data-filter="all">Tous les articles</button>
                <button class="blog-filter" data-filter="technologie">Technologie</button>
                <button class="blog-filter" data-filter="developpement">Développement</button>
                <button class="blog-filter" data-filter="marketing">Marketing digital</button>
                <button class="blog-filter" data-filter="entreprise">Entrepreneuriat</button>
                <button class="blog-filter" data-filter="formation">Formation</button>

            </div>

            <!-- GRILLE DES ARTICLES -->
            <div class="row g-4" id="blogGrid">

                <!-- ARTICLE 1 -->
                <div class="col-md-6 col-lg-4 blog-item" data-category="technologie">
                    <article class="blog-card">

                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1519389950473-47ba0277781c?auto=format&fit=crop&w=800&q=85"
                                alt="Équipe travaillant avec des technologies numériques">
                            <span class="blog-category">Technologie</span>
                        </div>

                        <div class="blog-body">
                            <div class="blog-meta">
                                <span><i class="bi bi-calendar3"></i> 05 Nov. 2026</span>
                                <span><i class="bi bi-clock"></i> 4 min</span>
                            </div>

                            <h3>Les nouvelles tendances technologiques à suivre en 2026</h3>

                            <p>
                                Intelligence artificielle, automatisation et cloud :
                                découvrez les innovations qui transforment notre quotidien.
                            </p>

                            <a href="index.php#contact" class="blog-read">
                                Lire la suite <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                    </article>
                </div>

                <!-- ARTICLE 2 -->
                <div class="col-md-6 col-lg-4 blog-item" data-category="developpement">
                    <article class="blog-card">

                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1461749280684-dccba630e2f6?auto=format&fit=crop&w=800&q=85"
                                alt="Code informatique">
                            <span class="blog-category">Développement</span>
                        </div>

                        <div class="blog-body">
                            <div class="blog-meta">
                                <span><i class="bi bi-calendar3"></i> 02 Nov. 2026</span>
                                <span><i class="bi bi-clock"></i> 6 min</span>
                            </div>

                            <h3>Pourquoi créer un site web professionnel pour votre entreprise ?</h3>

                            <p>
                                Votre site web est votre vitrine numérique.
                                Apprenez comment renforcer votre crédibilité et toucher davantage de clients.
                            </p>

                            <a href="index.php#contact" class="blog-read">
                                Lire la suite <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                    </article>
                </div>

                <!-- ARTICLE 3 -->
                <div class="col-md-6 col-lg-4 blog-item" data-category="marketing">
                    <article class="blog-card">

                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1432888622747-4eb9a8efeb07?auto=format&fit=crop&w=800&q=85"
                                alt="Marketing et communication digitale">
                            <span class="blog-category">Marketing digital</span>
                        </div>

                        <div class="blog-body">
                            <div class="blog-meta">
                                <span><i class="bi bi-calendar3"></i> 29 Oct. 2026</span>
                                <span><i class="bi bi-clock"></i> 5 min</span>
                            </div>

                            <h3>Comment développer la visibilité de votre entreprise sur Internet ?</h3>

                            <p>
                                Découvrez les bonnes pratiques pour améliorer votre présence
                                en ligne et attirer de nouveaux clients.
                            </p>

                            <a href="index.php#contact" class="blog-read">
                                Lire la suite <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                    </article>
                </div>

                <!-- ARTICLE 4 -->
                <div class="col-md-6 col-lg-4 blog-item" data-category="entreprise">
                    <article class="blog-card">

                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=800&q=85"
                                alt="Réunion et entrepreneuriat">
                            <span class="blog-category">Entrepreneuriat</span>
                        </div>

                        <div class="blog-body">
                            <div class="blog-meta">
                                <span><i class="bi bi-calendar3"></i> 25 Oct. 2026</span>
                                <span><i class="bi bi-clock"></i> 4 min</span>
                            </div>

                            <h3>Comment le numérique peut-il améliorer la gestion de votre entreprise ?</h3>

                            <p>
                                Simplifiez vos opérations, centralisez vos données
                                et améliorez votre productivité grâce aux outils digitaux.
                            </p>

                            <a href="index.php#contact" class="blog-read">
                                Lire la suite <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                    </article>
                </div>

                <!-- ARTICLE 5 -->
                <div class="col-md-6 col-lg-4 blog-item" data-category="formation">
                    <article class="blog-card">

                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&w=800&q=85"
                                alt="Formation numérique">
                            <span class="blog-category">Formation</span>
                        </div>

                        <div class="blog-body">
                            <div class="blog-meta">
                                <span><i class="bi bi-calendar3"></i> 20 Oct. 2026</span>
                                <span><i class="bi bi-clock"></i> 5 min</span>
                            </div>

                            <h3>Les compétences numériques indispensables pour les jeunes professionnels</h3>

                            <p>
                                Développez vos compétences en informatique, design,
                                communication et marketing digital.
                            </p>

                            <a href="index.php#contact" class="blog-read">
                                Lire la suite <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                    </article>
                </div>

                <!-- ARTICLE 6 -->
                <div class="col-md-6 col-lg-4 blog-item" data-category="technologie">
                    <article class="blog-card">

                        <div class="blog-image">
                            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?auto=format&fit=crop&w=800&q=85"
                                alt="Réseau et technologie cloud">
                            <span class="blog-category">Technologie</span>
                        </div>

                        <div class="blog-body">
                            <div class="blog-meta">
                                <span><i class="bi bi-calendar3"></i> 15 Oct. 2026</span>
                                <span><i class="bi bi-clock"></i> 3 min</span>
                            </div>

                            <h3>Hébergement web : comment choisir la bonne solution pour votre projet ?</h3>

                            <p>
                                Comprenez les différences entre les solutions d'hébergement
                                et choisissez celle qui répond à vos besoins.
                            </p>

                            <a href="index.php#contact" class="blog-read">
                                Lire la suite <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                    </article>
                </div>

            </div>

            <div class="blog-empty" id="blogEmpty">
                <i class="bi bi-search fs-1"></i>
                <h4 class="mt-3 fw-bold">Aucun article trouvé</h4>
                <p>Essayez un autre mot-clé ou une autre catégorie.</p>
            </div>

            <!-- PAGINATION -->
            <div class="d-flex justify-content-center mt-5">
                <nav aria-label="Pagination des articles">
                    <ul class="pagination gap-2">

                        <li class="page-item disabled">
                            <a class="page-link rounded-3" href="#" aria-label="Précédent">
                                <i class="bi bi-chevron-left"></i>
                            </a>
                        </li>

                        <li class="page-item active">
                            <a class="page-link rounded-3" href="#">1</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link rounded-3" href="#">2</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link rounded-3" href="#">3</a>
                        </li>

                        <li class="page-item">
                            <a class="page-link rounded-3" href="#" aria-label="Suivant">
                                <i class="bi bi-chevron-right"></i>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>

        </div>
    </section>

    <!-- NEWSLETTER -->
    <section class="blog-newsletter">
        <div class="container">
            <div class="row align-items-center g-4">

                <div class="col-lg-6">
                    <span class="blog-badge">RESTEZ INFORMÉ</span>

                    <h2>
                        Ne manquez aucune <span>actualité numérique.</span>
                    </h2>

                    <p class="text-white-50 mt-3 mb-0">
                        Recevez nos conseils, actualités et nouveautés directement dans votre boîte e-mail.
                    </p>
                </div>

                <div class="col-lg-6">
                    <form class="newsletter-form" id="newsletterForm">
                        <input type="email" class="form-control" placeholder="Votre adresse e-mail" required>

                        <button type="submit">
                            S'inscrire <i class="bi bi-arrow-right ms-1"></i>
                        </button>
                    </form>

                    <small class="text-white-50 d-block mt-3" id="newsletterNote">
                        <i class="bi bi-shield-check me-1"></i>
                        Vos informations restent confidentielles.
                    </small>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php require_once('layouts/footer.php');?>

    <a class="back-top" href="#top" aria-label="Retour en haut">
        <i class="bi bi-arrow-up"></i>
    </a>

    <!-- SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/main.js"></script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {

        // Année automatique
        document.getElementById("year").textContent = new Date().getFullYear();

        // Filtrage et recherche
        const filterButtons = document.querySelectorAll(".blog-filter");
        const articles = document.querySelectorAll(".blog-item");
        const searchInput = document.getElementById("blogSearch");
        const emptyMessage = document.getElementById("blogEmpty");

        let activeCategory = "all";

        function filterArticles() {

            const keyword = searchInput.value.toLowerCase().trim();
            let visibleCount = 0;

            articles.forEach(article => {

                const category = article.dataset.category;
                const content = article.textContent.toLowerCase();

                const categoryMatch =
                    activeCategory === "all" || category === activeCategory;

                const searchMatch = content.includes(keyword);

                if (categoryMatch && searchMatch) {
                    article.style.display = "";
                    visibleCount++;
                } else {
                    article.style.display = "none";
                }

            });

            emptyMessage.style.display = visibleCount === 0 ? "block" : "none";
        }

        filterButtons.forEach(button => {

            button.addEventListener("click", function() {

                filterButtons.forEach(btn => btn.classList.remove("active"));

                this.classList.add("active");

                activeCategory = this.dataset.filter;

                filterArticles();

            });

        });

        searchInput.addEventListener("input", filterArticles);

        // Newsletter : démonstration uniquement
        document.getElementById("newsletterForm").addEventListener("submit", function(e) {
            e.preventDefault();

            document.getElementById("newsletterNote").textContent =
                "Merci pour votre intérêt ! Le formulaire doit être connecté à votre système d'inscription.";

            this.reset();
        });

    });
    </script>

</body>

</html>