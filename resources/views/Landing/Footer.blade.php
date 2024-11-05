    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">FINCAGRO</h4>
                    <a class="btn btn-link" href="{{route('inicio')}}">Inicio</a>
                    <a class="btn btn-link" href="{{route('contact')}}">Contactanos</a>                                        
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Info.</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Lorem, ipsum, Dolor</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>(00) 0000-0000</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@fincagro.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Galeria</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('assets/landing/img/placeholder.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('assets/landing/img/placeholder.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('assets/landing/img/placeholder.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('assets/landing/img/placeholder.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('assets/landing/img/placeholder.jpg')}}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{asset('assets/landing/img/placeholder.jpg')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">LOGO</h4>
                    <img src="{{asset('assets/landing/img/placeholder.jpg')}}" width="50%"/>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Fincagro</a>, All Right Reserved.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://endscom.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://gumacorp.com">GUMACORP</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="{{ route('inicio')}}">Inicio</a>
                            <a href="{{route('contact')}}">Contactanos</a>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->