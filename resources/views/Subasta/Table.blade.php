@extends('layouts.app')
@section('content')
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
                    <a href="{{ route('Listas-Agregar') }}" class="btn btn-outline-primary bg-success">
                        <i class="feather icon-plus"></i> Agregar
                    </a>
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
