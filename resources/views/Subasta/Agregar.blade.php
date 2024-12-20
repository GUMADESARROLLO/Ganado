@extends('layouts.app')

@section('MetodosJs')
    <script src="{{ asset('js/Mods/Subasta/customs.js') }}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12 col-12">           
        <div class="row" >
            <div class=" col-sm-6 m-b-20">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <h5>Formulario de creacion de una Subasta</h5>
                            <span>A dot (.) is used to mark the decimal place in Javascript.</span>

                        </div>
                        <div class="float-right">
                            <a href="{{ route('Listas-Agregar') }}" class="btn btn-outline-primary bg-success">
                                <i class="feather icon-plus"></i> Guardar
                            </a>
                        </div>
                    </div>
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group input-group-success">
                                    <span class="input-group-addon">
                                        <i class="icofont icofont-ui-text-chat"></i>
                                    </span>
                                    <input type="text" class="form-control" placeholder="Titulo de la Subasta">
                                </div>
                            </div>
                        </div>    
                        <div class="row">
                            <div class="col-sm-12 col-xl-6 m-b-30">
                                <h4 class="sub-title">Fecha de Inicio:</h4>
                                <div class='input-group input-group-success date' id='dt-init-subasta'>                                
                                    <span class="input-group-addon ">
                                        <span class="icofont icofont-ui-calendar"></span>
                                    </span>
                                    <input type='text' class="form-control" value="{{ date('d/m/y') }}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-6 m-b-30">
                                <h4 class="sub-title">Fecha de culminacion:</h4>
                                <div class='input-group input-group-success date' id='dt-end-subasta'>                                
                                    <span class="input-group-addon ">
                                        <span class="icofont icofont-ui-calendar"></span>
                                    </span>
                                    <input type='text' class="form-control" value="{{ date('d/m/y') }}">
                                </div>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="sub-title">Descripcion Corta:</h4>
                                <div class="input-group input-group-success">                                
                                    <textarea rows="5" cols="5" class="form-control" placeholder="Descripcion Corta"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="sub-title">Descripcion Larga:</h4>
                                <div class="input-group input-group-success">                                
                                    <textarea rows="5" cols="5" class="form-control" placeholder="Descripcion Corta"></textarea>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <div class=" col-sm-6 m-b-20">
                <div class="card">
                    <div class="card-block">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="sub-title">Galeria de Videos</div>
                                <input type="file" name="files[]" id="filer_input2" multiple="multiple">
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="sub-title">Galeria de Imagenes</div>
                                <input type="file" name="files[]" id="filer_input1" multiple="multiple">
                            </div>
                        </div> 

                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

@endsection
