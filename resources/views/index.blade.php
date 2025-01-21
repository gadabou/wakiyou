@extends('layouts.base')
@section('title', 'Accueil')

@section('carousel')
<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
            <img class="w-100" src="{{asset('img/caroulel-silina-tech-3.jpg')}}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">SILINA TECH</h1>
                    <h3 class="display-4 text-white mb-md-4 animated zoomIn">Façonnons le Monde Numérique de Demain</h3>
                    <p class="text-white mb-3 animated fadeIn">
                        <strong>Bienvenue chez Silina Tech, où innovation et technologie redéfinissent les standards.
                        Notre expertise repose sur la création de solutions intelligentes qui accompagnent
                        les entreprises et institutions à chaque étape de leur transformation numérique.</strong>
                    </p>
                    <p class="text-white animated fadeIn">
                        <strong>Ensemble, nous imaginons et construisons un futur connecté, où l'efficacité, la sécurité
                        et la simplicité s'unissent pour répondre aux défis d’un monde en constante évolution.</strong>
                    </p>
                    <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Nous soutenir</a>
                    <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Nous contacter</a>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
            <img class="w-100" src="{{asset('img/caroulel-silina-tech-1.jpg')}}" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                <div class="p-3" style="max-width: 900px;">
                    <h1 class="display-1 text-white mb-md-4 animated zoomIn">SILINA TECH</h1>
                    <h3 class="display-4 text-white mb-md-4 animated zoomIn">Shaping Tomorrow’s Digital World</h3>
                    <p class="text-white mb-3 animated fadeIn">
                        <strong>Welcome to Silina Tech, where innovation and technology redefine global standards.
                        Our expertise lies in creating intelligent solutions that support businesses and
                        institutions at every stage of their digital transformation.</strong>
                    </p>
                    <p class="text-white animated fadeIn">
                        <strong>Together, we imagine and build a connected future where efficiency, security, and simplicity
                        converge to meet the challenges of an ever-evolving world.</strong>
                    </p>
                    <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Inscrivez-vous</a>
                    <a href="{{route('contact')}}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contactez-nous</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Boutons de navigation -->
    <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

@endsection


@section('content')
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- About Start -->
    <div class="container-fluid py-5 about wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">À propos</h5>
                        <h1 class="mb-0">Silina Tech</h1>
                        <h3>Repousser les frontières de l'innovation</h3>
                    </div>
                    <p class="mb-4">
                        Chez <strong>Silina Tech</strong>, nous repoussons les frontières de l’innovation pour transformer les idées en réalités numériques.
                        Fondée avec une vision audacieuse, notre entreprise se consacre à offrir des solutions technologiques de pointe qui s’adaptent aux
                        besoins d’un monde en constante évolution.
                    </p>
                    <p class="mb-4">
                        Notre mission est simple mais ambitieuse : accompagner les entreprises et institutions dans leur transformation numérique en leur
                        fournissant des outils innovants, sécurisés et performants. Grâce à une expertise multidisciplinaire, nous unissons créativité,
                        technologie et stratégie pour créer des solutions intelligentes et durables.
                    </p>

                    <!-- Valeurs fondamentales -->
                    <div class="section-title position-relative pb-3 mb-5">
                        <h3>Nos Valeurs fondamentales</h3>
                    </div>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h4 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Innovation</h4>
                            <p class="mb-3">Toujours à la recherche de nouvelles idées pour dépasser les attentes.</p>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h4 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Fiabilité</h4>
                            <p class="mb-3">Offrir des solutions robustes et sécurisées sur lesquelles vous pouvez compter.</p>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h4 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Excellence</h4>
                            <p class="mb-3">Fournir un service et des résultats exceptionnels.</p>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.8s">
                            <h4 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Collaboration</h4>
                            <p class="mb-3">Construire un avenir numérique ensemble, avec nos clients et partenaires.</p>
                        </div>
                    </div>

                    <!-- Pourquoi nous choisir -->
                    <div class="section-title position-relative pb-3 mb-5">
                        <h3>Pourquoi nous choisir ?</h3>
                    </div>
                    <p class="mb-4">
                        Parce que nous croyons que chaque projet mérite une approche unique, nous travaillons main dans la main avec nos clients pour comprendre leurs défis et
                        concevoir des solutions sur mesure. Que vous soyez une petite entreprise ou une institution de grande envergure, Silina Tech est là pour vous guider vers
                        le succès dans un monde numérique.
                    </p>
                    <p class="mb-4">
                        Avec <strong>Silina Tech</strong>, l’avenir commence aujourd’hui.
                    </p>

                    <!-- Contact -->
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="1.0s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Contactez-nous</h5>
                            <h4 class="text-primary mb-0">+226 79 02 02 02</h4>
                        </div>
                    </div>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="1.2s">Plus sur nous</a>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{asset('img/docteur.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->



    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px; color: #0DB02B">
                <h5 class="fw-bold text-uppercase">Nos Services</h5>
                <h1 class="mb-0">Développement de logiciels médicaux sur mesure</h1>
            </div>
            <div class="row g-5">
                <!-- Service 1 -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fas fa-laptop-code text-white"></i>
                        </div>
                        <h4 class="mb-3">1. Développement de logiciels intelligents</h4>
                        <p class="m-0">Des outils personnalisés et évolutifs pour répondre aux besoins spécifiques des entreprises, des institutions et des organisations modernes.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Service 2 -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fas fa-network-wired text-white"></i>
                        </div>
                        <h4 class="mb-3">2. Conseil en transformation numérique</h4>
                        <p class="m-0">Des stratégies technologiques sur mesure pour optimiser vos processus et rester compétitif dans un monde en constante évolution.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Service 3 -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fas fa-cloud text-white"></i>
                        </div>
                        <h4 class="mb-3">3. Solutions cloud et connectivité</h4>
                        <p class="m-0">Une infrastructure cloud fiable et des intégrations fluides pour une productivité accrue et des systèmes toujours connectés.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Service 4 -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fas fa-mobile-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">4. Applications web et mobiles de nouvelle génération</h4>
                        <p class="m-0">Des plateformes performantes et intuitives pour améliorer l’expérience utilisateur et soutenir votre croissance numérique.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Service 5 -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fas fa-lock text-white"></i>
                        </div>
                        <h4 class="mb-3">5. Cybersécurité avancée</h4>
                        <p class="m-0">Protégez vos données et vos infrastructures avec des solutions de sécurité robustes et adaptées aux menaces émergentes.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Service 6 -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fas fa-robot text-white"></i>
                        </div>
                        <h4 class="mb-3">6. Intelligence artificielle et automatisation</h4>
                        <p class="m-0">Exploitez la puissance de l'IA pour prendre des décisions éclairées, automatiser vos processus et optimiser vos performances.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <!-- Service 7 -->
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fas fa-chalkboard-teacher text-white"></i>
                        </div>
                        <h4 class="mb-3">7. Support et formations technologiques</h4>
                        <p class="m-0">Un accompagnement technique personnalisé et des formations pointues pour maîtriser pleinement vos outils numériques.</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Team Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-uppercase">Membres de l'équipe</h5>
                <h1 class="mb-0">Voici les vaillants membres de l'équipe</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset('img/docteur2.jpg')}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class="" style="color: #E05206">Dr. SALIFOU Waliyou</h4>
                            <p class="text-uppercase m-0">Docteur en médécine spécialisé en informatique médicale et Directeur</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset('img/gado2.jpg')}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class=""style="color: #E05206">M. GADO Djakpo</h4>
                            <p class="text-uppercase m-0">Ingénieur génie logiciel</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset('img/Dr. OUEGRAOGO Mahamou.jpg')}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class=""style="color: #E05206">OUEGRAOGO Sarata</h4>
                            <p class="text-uppercase m-0">Responsable des ressources humaines</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Blog Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-uppercase">Nos solutions</h5>
            <h1 class="mb-0">Nous sommes sur le marché mondial</h1>
        </div>
        <!-- Une seule ligne pour disposer les cartes horizontalement -->
        <div class="row g-5">
            <!-- Première carte -->
            <div class="col-lg-3 col-md-6 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/logo_silina_mrs.jpg')}}" alt="">
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3">SILINA TECHMRS</h4>
                        <p>SILINA TECHMRS est un système de dossiers médicaux électroniques (DME)</p>
                        <a class="text-uppercase" href="{{route('produits')}}">Voir détail <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Deuxième carte -->
            <div class="col-lg-3 col-md-6 wow slideInUp" data-wow-delay="0.4s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/logo_silina_erp.jpg')}}" alt="">
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3">SILINA ERP</h4>
                        <p>SILINA ERP est un système de gestion des ressources d'entreprise</p>
                        <a class="text-uppercase" href="{{route('produits')}}">Voir détail <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Troisième carte -->
            <div class="col-lg-3 col-md-6 wow slideInUp" data-wow-delay="0.5s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/logo_silina_pharma.jpg')}}" alt="">
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3">SILINA PHARMA</h4>
                        <p>SILINA PHARMA est un système de gestion pharmaceutique</p>
                        <a class="text-uppercase" href="{{route('produits')}}">Voir détail <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- Quatrième carte -->
            <div class="col-lg-3 col-md-6 wow slideInUp" data-wow-delay="0.6s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/Logo_Silina_Labo.jpg')}}" alt="">
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3">SILINA LABO</h4>
                        <p>SILINA LABO est un système pour les laboratoires</p>
                        <a class="text-uppercase" href="{{route('produits')}}">Voir détail <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->


    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="{{asset('img/vendor-1.jpg')}}" alt="">
                    <img src="{{asset('img/vendor-2.jpg')}}" alt="">
                    <img src="{{asset('img/vendor-3.jpg')}}" alt="">
                    <img src="{{asset('img/vendor-4.jpg')}}" alt="">
                    <img src="{{asset('img/vendor-5.jpg')}}" alt="">
                    <img src="{{asset('img/vendor-6.jpg')}}" alt="">
                    <img src="{{asset('img/vendor-7.jpg')}}" alt="">
                    <img src="{{asset('img/vendor-8.jpg')}}" alt="">
                    <img src="{{asset('img/vendor-9.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->


@endsection
