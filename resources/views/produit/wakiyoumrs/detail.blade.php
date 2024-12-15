@extends('layouts.base')
@section('title', "Détail de l'évènements")


@section('carousel')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Nos solutions</h1>
                <a href="" class="h5 text-white">Accueil</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Nos Produits</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-5" src="{{asset('img/logo_silina_mrs.jpg')}}" alt="">
                        <h1 class="mb-4">Une solution pour la gestion des données médicales électroniques</h1>
                        <p>Silina TECHMRS, une solution basé sur OpenMRS (Open Medical Record System) est un système de dossiers médicaux électroniques (DME) open source conçu pour être utilisé dans les pays en développement. Voici un aperçu plus détaillé :</p>
                        <ol>
                            <li> <strong>Objectif principal :</strong></li>
                            OpenMRS vise à améliorer la prestation des soins de santé dans les environnements à ressources limitées en fournissant une plateforme flexible pour la gestion des données des patients.
                            <li> <strong>Caractéristiques principales :</strong></li>

                            Gestion des dossiers patients
                            Suivi des traitements et des médicaments
                            Gestion des rendez-vous
                            Rapports et analyses
                            Interopérabilité avec d'autres systèmes de santé


                            <li> <strong>Flexibilité :</strong></li>
                            Le système est hautement personnalisable pour s'adapter aux besoins spécifiques de différents établissements de santé et pays.
                            <li> <strong>Multiplateforme :</strong></li>
                            Accès facile à partir du mobile, ordinateur et tablette.
                        </ol>
                            WakiyouMRS joue un rôle crucial dans l'amélioration des systèmes de santé dans les régions où les ressources sont limitées, en fournissant une solution robuste et adaptable pour la gestion des informations de santé..</p>
                    </div>
                    <!-- Blog Detail End -->

                </div>

                <!-- Sidebar Start -->

                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Keyword">
                            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                    <!-- Search Form End -->

                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Catégories</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Forum</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Conférances</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Formations</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Assemblée général</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i>Autre</a>
                        </div>
                    </div>
                    <!-- Category End -->

                    <!-- Recent Post Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Récents activités</h3>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="{{asset('img/logo_silina_erp.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">2. Silina ERP – Logiciel de gestion d’entreprise ...
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="{{asset('img/logo_silina_pharma.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">3. Silina Pharma – Logiciel de gestion de pharmacie ...
                            </a>
                        </div>
                        <div class="d-flex rounded overflow-hidden mb-3">
                            <img class="img-fluid" src="{{asset('img/Logo_Silina_Labo.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                            <a href="" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">4. Silina Labo – Logiciel de gestion de laboratoire ...
                            </a>
                        </div>

                    </div>
                    <!-- Recent Post End -->

                    <!-- Image Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <img src="{{asset('img/photo.jpg')}}" alt="" class="img-fluid rounded">
                    </div>
                    <!-- Image End -->

                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->
@endsection
