@extends('layouts.base')
@section('title', 'A propos')

@section('carousel')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Qui sommes-nous ?</h1>
                <a href="" class="h5 text-white">Accueil</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">A propos</a>
            </div>
        </div>
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
                            <img class="img-fluid w-100" src="{{asset('img/team-2.jpg')}}" alt="">
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
                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset('img/team-6.webp')}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class=""style="color: #E05206">CARPANTIER Isabelle </h4>
                            <p class="text-uppercase m-0">Ingénieur en cybersécurité</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset('img/daf.jpeg')}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class=""style="color: #E05206">SAWADOGO Abdoul Salam</h4>
                            <p class="text-uppercase m-0">Directeur Administratif Financier</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset('img/part.jpeg')}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class=""style="color: #E05206">SIMPORE Abdoul Aziz</h4>
                            <p class="text-uppercase m-0">Comptable</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset('img/baki.jpeg')}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class=""style="color: #E05206">M. TCHASSEI Abdoul Baki</h4>
                            <p class="text-uppercase m-0">Développeur d'applications full stack</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset('img/emanuel.jpg')}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class=""style="color: #E05206">SEHOU Emmanuel Gaspard Koami</h4>
                            <p class="text-uppercase m-0">Développeur d'applications mobiles</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                    <div class="team-item bg-light rounded overflow-hidden">
                        <div class="team-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{asset('img/agbere.jpeg')}}" alt="">
                            <div class="team-social">
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                                <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <h4 class=""style="color: #E05206">AGBERE Hafissou</h4>
                            <p class="text-uppercase m-0">Développeur d'application en front-end</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

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
