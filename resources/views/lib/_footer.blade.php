<!-- Footer Start -->
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row gx-5">
            <div class="col-lg-4 col-md-6 footer-about">
                <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                    <a href="{{route('index')}}" class="navbar-brand">
                        <!--h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>Startup</h1-->
                        <img src="{{asset('img/logo_silina_tech.jpg')}}" alt="Logo" class="me-2" style="height: 90px;">
                    </a>
                    <p class="mt-3 mb-4">Nous créons des solutions modernes et évolutives</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                    <h3 class="text-light mb-0">Raccourcis</h3>
                </div>
                <div class="link-animated d-flex flex-column justify-content-start">
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Accueil</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Qui sommes-nous</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Nos produits</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Vision</a>
                    <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Passez en axtion</a>
                    <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                <div class="section-title section-title-sm position-relative pb-3 mb-4">
                    <h3 class="text-light mb-0">Nos Solutions</h3>
                </div>
                <!-- Recent Post Start -->
                <div class="mb-5 wow slideInUp d-flex flex-column justify-content-start" data-wow-delay="0.1s">
                    <div class="d-flex rounded overflow-hidden mb-3">
                        <img class="img-fluid" src="{{asset('img/logo_silina_mrs-2.jpg')}}" style="width: 100px; height: 100px; object-fit: cover;" alt="">
                        <a href="{{route('wakiyoumrs')}}" class="h5 fw-semi-bold d-flex align-items-center bg-light px-3 mb-0">
                        </a>
                    </div>
                </div>
                <!-- Recent Post End -->
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
    <div class="container text-center">
        <div class="row justify-content-end">
            <div class="col-lg-8 col-md-6">
                <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    <p class="mb-0">&copy; <a class="text-white border-bottom" href="{{route('index')}}">SILINA TECH</a>. Tout droit réservé.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
