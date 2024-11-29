@extends('layouts.base')
@section('title', 'Produits')

@section('carousel')
    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
        <div class="row py-5">
            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-4 text-white animated zoomIn">Nos Produits</h1>
                <a href="" class="h5 text-white">Accueil</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h5 text-white">Produits</a>
            </div>
        </div>
    </div>
@endsection

@section('content')

<!-- Blog Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
            <h5 class="fw-bold text-uppercase">Nos solutions</h5>
            <h1 class="mb-0">Nous sommes sur le marché mondial</h1>
        </div>
        <!-- Disposition horizontale -->
        <div class="row g-4">
            <!-- Première case -->
            <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/logo_silina_mrs.jpg')}}" alt="">
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3">Silina TECHMRS</h4>
                        <p>Silina TECHMRS est un système de dossiers médicaux électroniques (DME)</p>
                        <div class="row">
                            <a class="text-uppercase" href="{{route('wakiyoumrs')}}">Voir détail <i class="bi bi-arrow-right"></i></a>
                            <a class="text-uppercase" href="{{route('wakiyoumrs_demo')}}">Voir démo <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Deuxième case -->
            <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/logo_silina_erp.jpg')}}" alt="">
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3">Silina ERP</h4>
                        <p>Silina ERP est un système de dossiers médicaux électroniques (DME)</p>
                        <div class="row">
                            <a class="text-uppercase" href="{{route('wakiyoumrs')}}">Voir détail <i class="bi bi-arrow-right"></i></a>
                            <a class="text-uppercase" href="{{route('wakiyoumrs_demo')}}">Voir démo <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Troisième case -->
            <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/logo_silina_pharma.jpg')}}" alt="">
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3">Silina PHARMA</h4>
                        <p>Silina PHARMA est un système de dossiers médicaux électroniques (DME)</p>
                        <div class="row">
                            <a class="text-uppercase" href="{{route('wakiyoumrs')}}">Voir détail <i class="bi bi-arrow-right"></i></a>
                            <a class="text-uppercase" href="{{route('wakiyoumrs_demo')}}">Voir démo <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
               <!--QUATRIEME case -->
               <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/Logo_Silina_Labo.jpg')}}" alt="">
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3">Silina LABO</h4>
                        <p>Silina LABO est un système de dossiers médicaux électroniques (DME)</p>
                        <div class="row">
                            <a class="text-uppercase" href="{{route('wakiyoumrs')}}">Voir détail <i class="bi bi-arrow-right"></i></a>
                            <a class="text-uppercase" href="{{route('wakiyoumrs_demo')}}">Voir démo <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
               <!-- CINQUIEME case -->
               <div class="col-lg-4 col-md-6 wow slideInUp" data-wow-delay="0.3s">
                <div class="blog-item bg-light rounded overflow-hidden">
                    <div class="blog-img position-relative overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/Logo_silina_Image.jpg')}}" alt="">
                    </div>
                    <div class="p-4">
                        <h4 class="mb-3">Silina IMAGE</h4>
                        <p>Silina IMAGE est un système de dossiers médicaux électroniques (DME)</p>
                        <div class="row">
                            <a class="text-uppercase" href="{{route('wakiyoumrs')}}">Voir détail <i class="bi bi-arrow-right"></i></a>
                            <a class="text-uppercase" href="{{route('wakiyoumrs_demo')}}">Voir démo <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->


@endsection
