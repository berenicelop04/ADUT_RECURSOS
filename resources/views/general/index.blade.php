
@extends('layouts.appfront')
  @section('sidebar')
  <!-- Heredamos con parent lo que hay en la plantilla base pero añadimos otro elemento al menú -->
    @include('layouts.menu')
    @parent
  @endsection
@section('content')
<div class="">
            <div class="page-title">
              <div class="title_left">
                <h2>Datos generales</h2>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <!--<div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>-->
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista general</h2>
                    <ul class="nav navbar-right panel_toolbox">
                    <!--<button class="btn btn-primary" type="button">Nuevo</button>-->
                    <a href="{{ route('general.create') }}" class="btn btn-primary">Nuevo</a>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>No. id_rol</th>
                          <th>No. id_carrera</th>
                          <th>Fecha creación</th>
                          <th>Fecha actualización</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>

                      <tbody>
                        @php
                          $cont = 1;
                        @endphp
                        @foreach($data as $info)
                        <tr>
                          <td>{{ $cont }}</td>
                          <td>{{ $info->id_rol }}</td>
                          <td>{{ $info->id_carrera }}</td>
                          <td>{{ $info->created_at}}</td>
                          <td>{{ $info->updated_at}}</td>
                          <td><a href="{{ route('general.edit',['id'=>$info->id_usuario]) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            
                          </td>                    
                        </tr>
                         @php
                           $cont++;
                         @endphp
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection
