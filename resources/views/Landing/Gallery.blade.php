
@extends('layouts.ly_landing')

    @section('content')

    @include('Landing.Topbar')

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        @include('Landing.nav')

        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Galeria</h6>
                <h1 class="mb-5">Lorem ipsum dolor sit amet</h1>
            </div>
                <div class="row">
                    @for ($i = 0; $i < 17; $i++)
                    <div class="col-md-4 mb-4 img-thumbnail ">
                        <img src="{{asset('assets/landing/img/placeholder.jpg')}}" class="img-fluid " alt="Imagen 1" data-bs-toggle="modal" data-bs-target="#imageModal" onclick="showImage(this)">
                    </div>
                    @endfor
                    
                </div>
            </div>
        </div>
    </div>
</div>



    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" class="img-fluid" alt="Imagen ampliada" width="100%">
                </div>
            </div>
        </div>
    </div>



   
        

    @include('Landing.Footer')

@endsection