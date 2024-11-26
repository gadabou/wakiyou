@extends('layouts.base')
@section('title', 'Vision')

@section('carousel')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Notre Vision</h1>
                <a href="" class="h5 text-white">Accueil</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Vision</a>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <!-- Service Start -->
    <!--div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px; color: #0DB02B">
                <h5 class="fw-bold text-uppercase">Nos Services</h5>
                <h1 class="mb-0">Développement de logiciels médicaux sur mesure</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-hospital text-white"></i>
                        </div>
                        <h4 class="mb-3">Systèmes d’information hospitaliers (SIH)</h4>
                        <p class="m-0">Déploiement et gestion de systèmes centralisés pour la gestion des dossiers médicaux électroniques (DME), l'administration des soins, la gestion des lits, des rendez-vous, etc.
                        </p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">Sécurité et conformité des données de santé</h4>
                        <p class="m-0">Mise en place de solutions pour protéger les données sensibles de santé des patients, conformes aux réglementations locales et internationales (GDPR, HIPAA).</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-microscope text-white"></i>
                        </div>
                        <h4 class="mb-3">Automatisation des laboratoires et analyses médicales</h4>
                        <p class="m-0">Outils de gestion des analyses médicales, des réactifs, et de la traçabilité des échantillons</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-code text-white"></i>
                        </div>
                        <h4 class="mb-3">Création intégration des API</h4>
                        <p class="m-0">Développement d'API et leur Intégration afin d'interconnecter les équipements médicaux</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fab fa-android text-white"></i>
                        </div>
                        <h4 class="mb-3">Solutions mobiles</h4>
                        <p class="m-0">Nous développons des applications mobiles pour permettre un accès facil aux solutions</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div!-->
    <!-- Service End -->
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


@endsection
