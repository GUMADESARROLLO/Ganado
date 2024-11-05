
@extends('layouts.ly_landing')

    @section('content')

    @include('Landing.Topbar')

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        @include('Landing.nav')

        <div class="container-fluid bg-primary py-5 mb-5 hero-header-slide-01">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white mb-3 animated slideInDown">Sobre Nosotros</h1>
                        <p class="fs-4 text-white mb-4 animated slideInDown">Fincagro, lo que somos</p>                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{asset('assets/landing/img/placeholder.jpg')}}" alt="" style="object-fit: cover;width: 100%;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">¿Quienes somos ?</h6>
                    <h1 class="mb-4">Sobre <span class="text-primary">Fincagro</span></h1>
                    <p class="mb-4">Lo que somo, quienes somos, a  donde vamos</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis quas id vitae harum ea ex magnam necessitatibus provident neque laboriosam. Quos tempora odit perspiciatis dolorem et aliquid inventore labore doloremque?.</p>                                   
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">FINCAGRO</h6>
                <h1 class="mb-5">Nuestra Motivacion</h1>
            </div>
            <div class="row g-4 text-center">                              
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid mt-3" src="{{asset('assets/landing/img/placeholder.jpg')}}" width="300px" alt="">
                        </div>                       
                        <div class="text-center p-4">
                            <h5 class="mb-0">Mision</h5>
                            <small>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor quod quos vel aliquam, similique nam id nihil modi accusantium assumenda officiis a inventore consequatur exercitationem nemo quisquam, consequuntur adipisci iste.</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid mt-3" src="{{asset('assets/landing/img/placeholder.jpg')}}" width="300px" alt="">
                        </div>                       
                        <div class="text-center p-4">
                            <h5 class="mb-0">Vision</h5>
                            <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat dicta, maiores recusandae sint eaque nostrum perferendis? Aspernatur ex fugit repudiandae ducimus quo, similique delectus qui distinctio illo molestiae. Similique, magni.</small>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>
    <!-- Team End -->
        

    @include('Landing.Footer')

@endsection