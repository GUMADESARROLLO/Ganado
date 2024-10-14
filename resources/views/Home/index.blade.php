@extends('layouts.app')
@section('content')

<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-blue f-w-600">0.00</h4>
                        <h6 class="text-muted m-b-0">Numero de Bovinos activos</h6>
                    </div>
                    <div class="col-4 text-right">
                        <img src="{{ asset('assets/images/cow_farm_28.svg')}}">
                    </div>
                </div>
            </div>
            <div class="card-footer bg-success">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">Bovinos</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="feather icon-trending-up text-white f-16"></i>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-blue f-w-600">0</h4>
                        <h6 class="text-muted m-b-0">Numero de lotes activos </h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="feather icon-file-text f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-success">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">Lotes</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="feather icon-trending-up text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-pink f-w-600">145</h4>
                        <h6 class="text-muted m-b-0">Tareas por Completar</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="feather icon-calendar f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-success">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">% change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="feather icon-trending-up text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card">
            <div class="card-block">
                <div class="row align-items-center">
                    <div class="col-8">
                        <h4 class="text-c-blue f-w-600">0.00</h4>
                        <h6 class="text-muted m-b-0">Indicadores</h6>
                    </div>
                    <div class="col-4 text-right">
                        <i class="feather icon-credit-card f-28"></i>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-success">
                <div class="row align-items-center">
                    <div class="col-9">
                        <p class="text-white m-b-0">% change</p>
                    </div>
                    <div class="col-3 text-right">
                        <i class="feather icon-trending-up text-white f-16"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
