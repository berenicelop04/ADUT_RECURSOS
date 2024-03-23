@extends('layouts.appfront')
  @section('sidebar')
  <!-- Heredamos con parent lo que hay en la plantilla base pero añadimos otro elemento al menú -->
    @include('layouts.menu')
    @parent
  @endsection
@section('content')

            <div class="page-title">
             <!--Fin--> 
            <div id="datatable_filter" class="dataTables_filter">
               <label>Buscar
               <input class="form-control input-sm" type="search" placeholder="" aria-controls="datatable">
                </label>
            </div>
              <!--Fin-->
              <div class="title_left">
                <!--<h3>Dashboard</h3>-->
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row top_tiles">
            @if(Auth::user()->rol->rol == 'Administrador')
            <h3>Dashboard Administrador</h3>
            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
               <!--INICIO --> 
               <!-- div class="tile-stats">
                </div>  -->
                <!--FIN-->
                <div class="count">
               <pre> <a href="archivos/1/Dobot-Blockly-Workbook.pdf" type="application/pdf"  id="pdfLink" width="100%" height="600px">
                <img src="images/1/libro_dobot.jpeg" id="pdfImage"  width="60%" height="500px" alt="No" />
                </a> </pre>
                </div> 
               
                <div class="max-w-7xl mx-auto p-6 lg:p-8">
                <div class="mb-4">
                
                <a href="../archivos/2/Educacion_en_gastronomia_su_vinculo_con_la_identidad_cultural_y_el_turismo.pdf" type="application/pdf"  id="pdfLink" width="100%" height="600px">
                <img src="../portadas/2/Educacion_en_gastronomia_su_vinculo_con_la_identidad_cultural_y_el_turismo.jpeg" id="pdfImage" width="60%" height="500px" alt="No" />
                </a>
                </div>
                </div>


              </div>
              @endif
              @if(Auth::user()->rol->rol == 'Alumno')
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-book"></i></div>
                  <div class="count">Libro</div> 
                  <h3> Dashboard Alumno</h3>
                  <br>
                </div>
                <div class="max-w-7xl mx-auto p-6 lg:p-8">
                  <div class="mb-4">
                    <img src="../public/images/administrador.jpg" class="h-auto max-w-full rounded-full" alt="No" />
                   <a href="/libros/create" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px"></a>

                  </div>
                </div>

              </div>
              @endif
              @if(Auth::user()->rol->rol == 'Maestro')
              <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-book"></i></div>
                  <div class="count">Libro</div> 
                  <h3>Dashboard Docente</h3>
                  <br>
                </div>
                <div class="max-w-7xl mx-auto p-6 lg:p-8">
                  <div class="mb-4">
                    <img src="../public/images/administrador.jpg" class="h-auto max-w-full rounded-full" alt="No" />
                   <a href="/libros/create" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px"></a>

                  </div>
                </div>

              </div>
              @endif
            </div>
    

@endsection
