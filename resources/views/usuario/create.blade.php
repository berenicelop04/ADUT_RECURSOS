@extends('layouts.appfront')

@section('content')
            <div class="page-title">
              <div class="title_left">
                <h2>Tipo de género</h2>              
              </div>
<!--
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
-->                
            </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Información</h2>
                    <div class="clearfix"></div>                
                  <div class="x_content">
                    <br />
                    <form name="frmgenero" id="frmgenero2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{route('gender.store')}}">
                    @csrf  
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion2">Descripción <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="descripcion" id="descripcion2" required="required" class="form-control col-md-7 col-xs-12" placeholder="Másculino">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="abreviatura2">Abreviatura <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="abreviatura" id="abreviatura2" required="required" class="form-control col-md-7 col-xs-12" placeholder="M">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-5">
                          <button type="submit" class="btn btn-success">Registrar</button>
                          <!--<button class="btn btn-primary" type="button">Nuevo</button>-->
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
@endsection
