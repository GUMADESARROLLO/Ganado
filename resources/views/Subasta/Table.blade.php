@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-sm-12">

        <div class="card">
            <div class="card-block">
                <div class=" waves-effect waves-light m-r-10 v-middle issue-btn-group">
                    
                   
                    <a href="{{ route('Listas-Agregar') }}" class="btn btn-success btn-new-tickets waves-effect waves-light ">
                        <i class="icofont icofont-meeting-add"></i><span>NUEVO</span>
                    </a>
        
                    <div class="f-right bug-issue-link ">
                        <div class="row">
                            <div class="col-sm-12 col-xl-6">
                                <div class='input-group input-group-success date' id='dt-init-subasta'>                                
                                    <span class="input-group-addon ">
                                        <span class="icofont icofont-ui-calendar"></span>
                                    </span>
                                    <input type='text' class="form-control" value="{{ date('d/m/y') }}">
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                                <div class='input-group input-group-success date' id='dt-end-subasta'>                                
                                    <span class="input-group-addon ">
                                        <span class="icofont icofont-ui-calendar"></span>
                                    </span>
                                    <input type='text' class="form-control" value="{{ date('d/m/y') }}">
                                    <span class="input-group-addon ">
                                        <span class="icofont icofont-filter"></span>
                                    </span>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="row">
    <div class="col-sm-12">   
        <!-- Language - Comma Decimal Place table start -->
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h5>Titulo - de la tabla de Subastas</h5>
                    <span>A dot (.) is used to mark the decimal place in Javascript.</span>

                </div>
                <div class="float-right">
                    <div class="input-group input-group-button input-group-primary">
                        <input type="text" class="form-control" placeholder="Search here...">
                        
                        <button class="btn btn-primary input-group-addon" id="basic-addon1">BUSCAR</button>
                    </div>
                    
                </div>
            </div>
            <div class="card-block">
                <div class="dt-responsive table-responsive">
                    <table id="lang-dt" class="table table-striped table-bordered nowrap">
                        <thead>
                        <tr>
                            <th>Descripcion</th>
                            <th>Fecha de Inicio</th>
                            <th>Fecha de Culminacion</th>
                            <th> - </th>
                            <th> - </th>
                            <th> - </th>
                            <th> - </th>
                        </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < 10; $i++)
                        <tr>
                            <td> Lorem ipsum, dolor sit amet </td>
                            <td> 20/04/2024 </td>
                            <td> 20/04/2024 </td>
                            <td> - </td>
                            <td> - </td>
                            <td> $0.00</td>
                            <td>
                                <div class="btn-group btn-group-sm" style="float: none;">
                                    <a href="{{ route('Listas-Editar') }}" class="tabledit-edit-button btn btn-primary waves-effect waves-light" style="float: none;">
                                        <span class="icofont icofont-ui-edit text-white"></span>
                                    </a>
                                    <a href="{{ route('Listas-Eliminar') }}" class="tabledit-delete-button btn btn-danger waves-effect waves-light" style="float: none;">
                                        <span class="icofont icofont-ui-delete text-white"></span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endfor
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!-- Language - Comma Decimal Place table end -->
    </div>
</div>
@endsection
