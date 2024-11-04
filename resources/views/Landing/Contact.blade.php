
@extends('layouts.ly_landing')

    @section('content')

    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>Lorem, ipsum</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>(505) 000-000</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@ganado.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid position-relative p-0">
        @include('Landing.nav')
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
                        <div class="container py-5">
                            <div class="row justify-content-center py-5">
                                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                                    <h1 class="display-3 text-white mb-3 animated slideInDown">Lorem ipsum, dolor sit amet, consectetur adipisicing elit 01</h1>
                                    <p class="fs-4 text-white mb-4 animated slideInDown">Lorem ipsum dolor sit amet consectetur </p>                       
                                    <p class="fs-4 text-white mb-4 animated slideInDown">TEL 0000-0000</p>                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
                        <div class="container py-5">
                            <div class="row justify-content-center py-5">
                                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                                    <h1 class="display-3 text-white mb-3 animated slideInDown">Lorem ipsum, dolor sit amet, consectetur adipisicing elit 02</h1>
                                    <p class="fs-4 text-white mb-4 animated slideInDown">Lorem ipsum dolor sit amet consectetur </p>                       
                                    <p class="fs-4 text-white mb-4 animated slideInDown">TEL 0000-0000</p>                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
                        <div class="container py-5">
                            <div class="row justify-content-center py-5">
                                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                                    <h1 class="display-3 text-white mb-3 animated slideInDown">Lorem ipsum, dolor sit amet, consectetur adipisicing elit 03</h1>
                                    <p class="fs-4 text-white mb-4 animated slideInDown">Lorem ipsum dolor sit amet consectetur </p>                       
                                    <p class="fs-4 text-white mb-4 animated slideInDown">TEL 0000-0000</p>                       
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">          

            @if (session('success'))
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Muchas Gracias</h6>
                <h1>{{ session('success') }}</h1>
                <a href="{{ url('/') }}" class="mb-5">Inicio</a>

            </div>
            @elseif (!isset($success))
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Contactanos</h6>
                <h1 class="mb-5">Contactanos por si tienes dudas o preguntas</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h5>Ponte en Contacto con nosotros</h5>
                    <p class="mb-4">Es importante para nosotros estar en contacto con tigo</p>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Ubicación </h5>
                            <p class="mb-0">Lorem, Ipsum</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Telefono</h5>
                            <p class="mb-0"><a href="tel:+012 345 67890">+(505) 0000-0000</a></p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0">info@fincagro.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4665.915926449154!2d-86.0961539242516!3d12.230409230693368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f73effe1255555b%3A0x93b9a0e8362c268a!2sFinca%20Pandora!5e1!3m2!1sen!2sni!4v1730756641750!5m2!1sen!2sni"
                        width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <form action="{{route('savecontact')}}" method="POST">
                        @csrf                        
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{ old('name') }}">

                                    <label for="name">Tu nombre</label>                                   
                                </div>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                                    <label for="email">Tu Correo</label>
                                </div>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" name="subject" placeholder="Asunto" value="{{ old('subject') }}">
                                    <label for="subject">Asunto</label>
                                </div>
                                @error('subject')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 100px">
                                    </textarea>
                                    <label for="message">Mensaje</label>
                                </div>
                                @error('message')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Enviar Mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            @endif
            
        </div>
    </div>

    @include('Landing.Footer')

@endsection