@extends('layouts.base')
@section('title', 'Accueil')

@section('carousel')
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('img/carousel-1.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">WAKIYOU</h1>
                        <h3 class="display-1 text-white mb-md-4 animated zoomIn">Soins de santé et technologie</h3>
                        <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Nous soutenir</a>
                        <a href="" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Nous contacter</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{asset('img/carousel-1.jpg')}}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-3 animated slideInDown">Créatif et Innovant Chez WAKIYOU</h5>
                        <h1 class="display-1 text-white mb-md-4 animated zoomIn">Solution numérique créative et innovante</h1>
                        <a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Inscrivez-vous</a>
                        <a href="{{route('contact')}}" class="btn btn-outline-light py-md-3 px-md-5 animated slideInRight">Contactez-nous</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
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
                        <h5 class="fw-bold text-primary text-uppercase">Qui sommes-nous ?</h5>
                        <h1 class="mb-0">WAKIYOU</h1>
                        <h3>Healthcare & technology</h3>
                    </div>
                    <p class="mb-4">Wakiyou est une entreprise spécialisée dans le domaine de l'informatique médicale, apportant des solutions innovantes pour améliorer la gestion des données de santé et les flux de travail dans les établissements de soins. L'entreprise se concentre sur la création d'applications logicielles et de systèmes intégrés destinés aux hôpitaux, cliniques, laboratoires et pharmacies, avec pour objectif de simplifier les processus de gestion des patients, des prescriptions, des analyses médicales et des interactions avec les compagnies d'assurance.</p>
                    <p class="mb-4">En utilisant des technologies modernes, Wakiyou développe des outils qui optimisent la gestion des prescriptions médicales, la gestion des stocks pharmaceutiques, ainsi que l'automatisation des analyses médicales. L'entreprise met également un fort accent sur la protection des données de santé grâce à des systèmes de sécurité renforcés, assurant la confidentialité des informations des patients.</p>
                    <p class="mb-4">Wakiyou est ainsi positionnée comme un partenaire de choix pour les professionnels de santé cherchant à adopter des solutions technologiques de pointe, permettant une meilleure coordination des soins et une amélioration globale de l'efficacité des opérations dans le secteur médical.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Votre sécurité, notre prioritée</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Professionnalisme</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Burkina Faso, Ouagadougou </h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Koulouba</h5>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4 wow fadeIn" data-wow-delay="0.6s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">Contactez-nous</h5>
                            <h4 class="text-primary mb-0">+226 79 02 02 02</h4>
                        </div>
                    </div>
                    <a href="quote.html" class="btn btn-primary py-3 px-5 mt-3 wow zoomIn" data-wow-delay="0.9s">Plus sur nous</a>
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
                            <p class="text-uppercase m-0">Docteur en médécine et ingénieur en informatique médicale</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset('img/team-2.jpg')}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class=""style="color: #E05206">Col. X</h4>
                            <p class="text-uppercase m-0">Docteur en médécine et ingénieur en informatique médicale</p>
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
                            <h4 class=""style="color: #E05206">GADO Djakpo</h4>
                            <p class="text-uppercase m-0">Ingénieur génielogiciel</p>
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
                <h5 class="fw-bold text-uppercase">Nos solutions </h5>
                <h1 class="mb-0">Nous sommes sur le marché mondial</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="blog-item bg-light rounded overflow-hidden">
                        <div class="blog-img position-relative overflow-hidden">
                            <img class="img-fluid" src="{{asset('img/logo_wakiyou_mrs.jpg')}}" alt="">
                        </div>
                        <div class="p-4">
                            <div class="d-flex mb-3">
                            </div>
                            <h4 class="mb-3">WakiyouMRS</h4>
                            <p>WakiyouMRS est un système de dossiers médicaux électroniques (DME)</p>
                            <a class="text-uppercase" href="{{route('produits')}}">Voir détail <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Start -->


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
