@extends('layouts.layout')
@section('content')

  <main>
    <section class="container">
      @foreach($data['establecimiento'] as $establecimiento)
        <h1 class="mb-0 ml-3"><span>{{ $establecimiento->nombres }} - {{ $data['inmueble']->alias }}</span></h1>
      @endforeach
      <div class="row d-flex justify-content-center seccion">
        <div class="col-lg-4">

          <a class="btn-registro" id="menu-informacion" data-toggle="collapse" href="#informacion-general" role="button">Información general
            <span id="btn-informacion" class="btn-arrow"></span>
          </a>

          <div class="collapse" id="informacion-general">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="btn-submenu btn-submenu01" id="v-pills-informacion-tab" data-toggle="pill" href="#v-pills-informacion" role="tab" aria-controls="v-pills-informacion" aria-selected="true">
                Información general</a>
            </div>
          </div>

          <a class="btn-registro" id="menu-inmueble" data-toggle="collapse" href="#inmueble" role="button">Inmueble
            <span id="btn-inmueble" class="btn-arrow"></span>
          </a>

          <div class="collapse" id="inmueble">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="btn-submenu btn-submenu02" id="v-pills-domicilio-tab" data-toggle="pill" href="#v-pills-domicilio" role="tab" aria-controls="v-pills-domicilio" aria-selected="false">
                Domicilio completo</a>
              <a class="btn-submenu btn-submenu02" id="v-pills-informacion-inmueble-tab" data-toggle="pill" href="#v-pills-informacion-inmueble" role="tab" aria-controls="v-pills-informacion-inmueble" aria-selected="false">
                Información</a>
              <a class="btn-submenu btn-submenu02" id="v-pills-poblacion-tab" data-toggle="pill" href="#v-pills-poblacion" role="tab" aria-controls="v-pills-poblacion" aria-selected="false">
                Población</a>
              <a class="btn-submenu btn-submenu02" id="v-pills-construccion-tab" data-toggle="pill" href="#v-pills-construccion" role="tab" aria-controls="v-pills-construccion" aria-selected="false">
                Construcción y estructura</a>
              <a class="btn-submenu btn-submenu02" id="v-pills-punto-tab" data-toggle="pill" href="#v-pills-punto" role="tab" aria-controls="v-pills-punto" aria-selected="false">
                Punto de reunión</a>
            </div>
          </div>

          <a class="btn-registro" id="menu-acciones" data-toggle="collapse" href="#acciones" role="button">Acciones planeadas
            <span id="btn-acciones" class="btn-arrow"></span></a>
          <div class="collapse" id="acciones">
            <div class="nav flex-column nav-pills" id="v-pills-tab2" role="tablist" aria-orientation="vertical">
              <a class="btn-submenu btn-submenu03" id="v-pills-analisis-tab" data-toggle="pill" href="#v-pills-analisis" role="tab" aria-controls="v-pills-analisis" aria-selected="false">
                Análisis de riesgos</a>
              <a class="btn-submenu btn-submenu03" id="v-pills-simulacros-tab" data-toggle="pill" href="#v-pills-simulacros" role="tab" aria-controls="v-pills-simulacros" aria-selected="false">
                Simulacros</a>
              <a class="btn-submenu btn-submenu03" id="v-pills-reduccion-tab" data-toggle="pill" href="#v-pills-reduccion" role="tab" aria-controls="v-pills-reduccion" aria-selected="false">
                Plan de reducción de riesgos</a>
              <a class="btn-submenu btn-submenu03" id="v-pills-contingencias-tab" data-toggle="pill" href="#v-pills-contingencias" role="tab" aria-controls="v-pills-contingencias" aria-selected="true">
                Plan de contingencias</a>
              <a class="btn-submenu btn-submenu03" id="v-pills-continuidad-tab" data-toggle="pill" href="#v-pills-continuidad" role="tab" aria-controls="v-pills-continuidad" aria-selected="false">
                Plan de continuidad de operaciones</a>
              <a class="btn-submenu btn-submenu03" id="v-pills-documentos-tab" data-toggle="pill" href="#v-pills-documentos" role="tab" aria-controls="v-pills-documentos" aria-selected="false">
                Documentos anexos</a>
            </div>
          </div>

          <a class="btn-registro" id="menu-comite" data-toggle="collapse" href="#comite_interno" role="button">Comité interno
            <span id="btn-comite" class="btn-arrow"></span></a>
          <div class="collapse" id="comite_interno">
            <div class="nav flex-column nav-pills" id="v-pills-tab3" role="tablist" aria-orientation="vertical">
              <a class="btn-submenu btn-submenu04" id="v-pills-coordinacion-tab" data-toggle="pill" href="#v-pills-coordinacion" role="tab" aria-controls="v-pills-coordinacion" aria-selected="false">
                Responsable de piso o de edificio</a>
              <a class="btn-submenu btn-submenu04" id="v-pills-jefaturas-tab" data-toggle="pill" href="#v-pills-jefaturas" role="tab" aria-controls="v-pills-jefaturas" aria-selected="false">
                Jefe de piso</a>
              <a class="btn-submenu btn-submenu04" id="v-pills-brigadistas-primeros-tab" data-toggle="pill" href="#v-pills-brigadistas-primeros" role="tab" aria-controls="v-pills-brigadistas-primeros" aria-selected="false">
                Brigadistas primeros auxilios</a>
              <a class="btn-submenu btn-submenu04" id="v-pills-brigadistas-evacuacion-tab" data-toggle="pill" href="#v-pills-brigadistas-evacuacion" role="tab" aria-controls="v-pills-brigadistas-evacuacion" aria-selected="true">
                Brigadistas de evacuación</a>
              <a class="btn-submenu btn-submenu04" id="v-pills-brigadistas-prevencion-tab" data-toggle="pill" href="#v-pills-brigadistas-prevencion" role="tab" aria-controls="v-pills-brigadistas-prevencion" aria-selected="true">
                Brigadistas de prevención, combate y extinción de incendios.</a>
              <a class="btn-submenu btn-submenu04" id="v-pills-brigadistas-comunicacion-tab" data-toggle="pill" href="#v-pills-brigadistas-comunicacion" role="tab" aria-controls="v-pills-brigadistas-comunicacion" aria-selected="true">
                Brigadistas de comunicación</a>
              <a class="btn-submenu btn-submenu04" id="v-pills-brigadistas-apoyo-tab" data-toggle="pill" href="#v-pills-brigadistas-apoyo" role="tab" aria-controls="v-pills-brigadistas-apoyo" aria-selected="true">
                Brigadistas de apoyo especial (GAE)</a>
              <a class="btn-submenu btn-submenu04" id="v-pills-brigadistas-psicosocial-tab" data-toggle="pill" href="#v-pills-brigadistas-psicosocial" role="tab" aria-controls="v-pills-brigadistas-psicosocial" aria-selected="true">
                Brigadista de grupo de apoyo psicosocial</a>
              <a class="btn-submenu btn-submenu04" id="v-pills-brigadistas-multifuncional-tab" data-toggle="pill" href="#v-pills-brigadistas-multifuncional" role="tab" aria-controls="v-pills-brigadistas-multifuncional" aria-selected="true">
                Brigadistas de multifuncional</a>
            </div>
          </div>



        </div> <!-- Cerrar columna lateral -->

        <!-- Inica columna derecha -->
        <div class="col-lg-8">
          <div class="tab-content" id="v-pills-tabContent">

            <!-- Inicia tab-pane Información general -->
            @foreach($data['establecimiento'] as $establecimiento)
              <div class="tab-pane fade show active" id="v-pills-informacion" role="tabpanel" aria-labelledby="v-pills-informacion-tab">
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Tipo de persona</h3>
                    <p>{{ $establecimiento->tipopersona == 'F' ? 'Fisica' : 'Moral' }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Alias</h3>
                    <p>{{ $data['inmueble']->alias }}</p>
                  </div>
                </div>
                @if ($establecimiento->tipopersona == 'F')
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Nombre(s)</h3>
                    <p>{{ $establecimiento->nombres }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Primer apellido</h3>
                    <p>{{ $establecimiento->ape_pat }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Segundo apellido</h3>
                    <p>{{ $establecimiento->ape_mat }}</p>
                  </div>
                </div>
                @else
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Razón Social</h3>
                    <p>{{ $establecimiento->nombres }}</p>
                  </div>
                </div>
                @endif

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">RFC</h3>
                    <p>{{ $establecimiento->rfc }}</p>
                  </div>

                  <div class="col-md-6">
                    <h3 class="label-formulario">Folio de acta constitutiva</h3>
                    <p>{{ $establecimiento->folioacta }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Número de escritura</h3>
                    <p>{{ $establecimiento->numeroescritura }}</p>
                  </div>

                  <div class="col-md-6">
                    <h3 class="label-formulario">Número de notario</h3>
                    <p>{{ $establecimiento->numeronotario }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <h3 class="label-formulario">Giro</h3>
                    <p>{{ $data['giro']->clasificacion }}</p>
                  </div>
               </div>

                <h1 class="mb-0">Representante legal o apoderado</h1>
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Tipo de persona</h3>
                    <p>{{ $establecimiento->tipopersona_ == 'F' ? 'Fisica' : 'Moral' }}</p>
                  </div>
                </div>
                @if ($establecimiento->tipopersona_ == 'F')
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Nombre(s)</h3>
                    <p>{{ $establecimiento->nombres_rl }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Primer apellido</h3>
                    <p>{{ $establecimiento->ape_pat_rl }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Segundo apellido</h3>
                    <p>{{ $establecimiento->ape_mat_rl }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Correo electrónico</h3>
                    <p>{{ $establecimiento->email_rl }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Identificación oficial</h3>
                    <p>
                          @php switch ($establecimiento->id_identificacion) { 
                                            case "1": echo "INE"; break; 
                                            case "2": echo "Cartilla militar"; break; 
                                            case "3": echo "Pasaporte"; break;
                                            case "4": echo "Forma migratoria"; break;
                           } @endphp
                      </p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Número o folio</h3>
                    <p>{{ $establecimiento->folioIdentificacion }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Nacionalidad</h3>
                    <p>
                          @php switch ($establecimiento->id_identificacion) {
                                            case "1": echo "Mexicana"; break;
                                            case "2": echo "Otra"; break;
                           } @endphp
                    </p>
                  </div>
                </div>
                @else
                <div class="row">
                  <div class="col-md-12">
                    <h3 class="label-formulario">Razón Social</h3>
                    <p>{{ $establecimiento->nombres_rl }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Número de folio del acta ó poliza</h3>
                    <p>{{ $establecimiento->folioacta_rl }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Fecha de otorgamiento</h3>
                    <p>{{ $establecimiento->fechadeotorgamiento }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <h3 class="label-formulario">Nombre del Notario, Corredor Público o Alcaldía que lo expide</h3>
                    <p>{{ $establecimiento->nombreexpide }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Número de Notaría o Correduría</h3>
                    <p>{{ $establecimiento->numeronotario_el }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Entidad Federativa</h3>
                    <p>{{ $establecimiento->getEntidad()['descripcion'] }}</p>
                  </div>
                </div>

                @endif

                <h1 class="mb-0">Responsable del establecimiento</h1>
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Nombre</h3>
                    <p>{{ $establecimiento->nombres_re }}</p>
                  </div>

                  <div class="col-md-6">
                    <h3 class="label-formulario">Primer apellido</h3>
                    <p>{{ $establecimiento->ape_pat_re }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Segundo apellido</h3>
                    <p>{{ $establecimiento->ape_mat_re }}</p>
                  </div>

                  <div class="col-md-6">
                    <h3 class="label-formulario">Correo electrónico</h3>
                    <p>{{ $establecimiento->email_re }}</p>
                  </div>
                </div>

                <h1 class="mb-0">Características del establecimiento</h1>
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Sector</h3>
                    <p>{{ $establecimiento->sector == 'PU' ? 'Publico' : 'Privado' }}</p>
                  </div>

                  <div class="col-md-6">
                    <h3 class="label-formulario">El inmueble es:</h3>
                    <p>{{ $establecimiento->inmueblees == 'U' ? 'Único' : 'Conjunto' }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Tipo de establecimiento</h3>
                    <p>{{ $data['tipoEstablecimiento'] ? $data['tipoEstablecimiento']->descripcion : '' }}</p>
                  </div>
                </div>
                <h1>Carta de corresponsabilidad</h1>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <h3>Vigencia</h3>
                    <p>{{ $establecimiento->cartac_vigencia }}</p>
                  </div>
                </div>


              </div> <!-- Finaliza tabPane información general -->
            @endforeach

            <!-- Pan-Pane Domicilio -->
            <div class="tab-pane fade" id="v-pills-domicilio" role="tabpanel" aria-labelledby="v-pills-domicilio-tab">
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Calle o avenida</h3>
                  <p>{{ $data['inmueble']->calle }}</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Número exterior</h3>
                  <p>{{ $data['inmueble']->exterior }}</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Número interior</h3>
                  <p>{{ $data['inmueble']->interior }}</p>
                </div>

                <div class="col-md-6">
                  <h3 class="label-formulario">Colonia</h3>
                  <p>{{ $data['inmueble']->colonia }}</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Alcaldía</h3>
                  <p>{{ $data['inmueble']->getAlcaldía()['descripcion'] }}</p>
                </div>

                <div class="col-md-6">
                  <h3 class="label-formulario">Código postal</h3>
                  <p>{{ $data['inmueble']->cp }}</p>
                </div>
              </div>

              <h2>Se ubica</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Entre la calle</h3>
                  <p>{{ $data['inmueble']->entrecalle }}</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Y la calle</h3>
                  <p>{{ $data['inmueble']->ycalle }}</p>
                </div>
              </div>

              <h2>Referencias visuales</h2>

              <h3 class="label-formulario">A la derecha</h3>
              <p>{{ $data['inmueble']->aladerecha }}</p>

              <h3 class="label-formulario">A la izquierda</h3>
              <p>{{ $data['inmueble']->alaizquierda }}</p>
            </div> <!-- Finaliza tab-Panel Domicilio -->

            <!-- Tab-Pane información inmueble -->
            <div class="tab-pane fade" id="v-pills-informacion-inmueble" role="tabpanel" aria-labelledby="v-pills-informacion-inmueble-tab">
              <h4>Esta información debe ser de acuerdo a Escritura Pública o a la información de Catastro de la Alcaldía</h4>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Metros cuadrados de terreno</h3>
                  <p>{{ $data['inmueble']->m2_terreno }}</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Metros cuadrados construidos</h3>
                  <p>{{ $data['inmueble']->m2_construidos }}</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Cantidad de niveles que ocupa el solicitante</h3>
                  <p>{{ $data['inmueble']->niveles_ocupados }}</p>
                </div>
              {{-- <div class="col-md-6">
                  <h3 class="label-formulario">Niveles del inmueble</h3>
                  <p>{{ $data['inmueble']->niveles_inmueble }}</p>
                </div> --}}
              </div>

              <div class="row d-flex align-items-end">
                <div class="col-md-6">
                  <h3 class="label-formulario">Latitud</h3>
                  <p>{{ $data['inmueble']->lat }}</p>
                </div>

                <div class="col-md-6">
                  <h3 class="label-formulario">Longitud</h3>
                  <p>{{ $data['inmueble']->long }}</p>
                </div>
              </div>

              <!--
              <div class="ubicacion">
                <p class="label-formulario">Ubicación del inmueble</p>
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6523177287463!2d-99.14205988517988!3d19.42742268688728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fed3fefcd391%3A0xa811aa43f8d3dbcc!2sFUTURA+CDMX+Centro+Interactivo!5e0!3m2!1ses!2smx!4v1564153551599!5m2!1ses!2smx"
                  width="100%" height="229" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>-->
            </div> <!-- Finaliza tab-Panel Información inmueble-->

            <!-- Tab-Pane población -->

            <div class="tab-pane fade" id="v-pills-poblacion" role="tabpanel" aria-labelledby="v-pills-poblacion-tab">
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Población fija del establecimiento</h3>
                  <p>{{ $data['inmueble']->po_fija_esta }}</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Población flotante (visitas e invitados)</h3>
                  <p>{{ $data['inmueble']->po_flotante }}</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Población con discapacidad física</h3>
                  <p>{{ $data['inmueble']->po_disca_fisica }}</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Población con discapacidad visual</h3>
                  <p>{{ $data['inmueble']->po_disca_visual }}</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Población con discapacidad auditiva</h3>
                  <p>{{ $data['inmueble']->po_disca_audi }}</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Población con discapacidad intelectual</h3>
                  <p>{{ $data['inmueble']->po_disca_intele }}</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Población con discapacidad mental</h3>
                  <p>{{ $data['inmueble']->po_disca_mental }}</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Lactantes e infantes</h3>
                  <p>{{ $data['inmueble']->po_lactantes }}</p>
                </div>
              </div> <!-- Finaliza tab-pane población -->
            </div>

            <!-- Inicia tab-pane construcción -->

            <div class="tab-pane fade" id="v-pills-construccion" role="tabpanel" aria-labelledby="v-pills-construccion-tab">
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Zona geotécnica</h3>
                  <p>{{ $data['zona'] ? $data['zona']->descripcion : '' }}</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Tipo de construcción según RCCDMX</h3>
                  <p>{{ $data['tipoConstruccion'] ? $data['tipoConstruccion']->descripcion : '' }}</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Tipo de cimentación</h3>
                  <p>{{ $data['tipoCimentacion'] ? $data['tipoCimentacion']->descripcion : '' }}</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Tipo de estructura</h3>
                  <p>{{ $data['tipoEstructura'] ? $data['tipoEstructura']->descripcion : '' }}</p>
                </div>
              </div>

              {{--
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Tipo de losa</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div> --}}

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">¿Ha sufrido algún cambio en la estructura?</h3>
                  <p>{{ $data['inmueble']->cambioestructura ? 'Si' : 'No' }}</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Fecha de cambio</h3>
                  <p>{{ $data['inmueble']->fechadelcambio }}</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <h3 class="label-formulario">Material de construcción</h3>
                  <p>{{ $data['inmueble']->ce_maco }}</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Año de construcción</h3>
                  <p>{{ $data['inmueble']->ce_anocons }}</p>
                </div>

                <div class="col-md-6">
                  <h3 class="label-formulario">Niveles totales sobre y bajo nivel de banqueta</h3>
                  <p>{{ $data['inmueble']->ce_niveles_totales }}</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <h3 class="label-formulario">Descripción de las instalaciones hidrosanitarias</h3>
                  <textarea class="form-control form-control-custom street-names " disabled>{{ $data['inmueble']->ce_in_hidrosanitarias }}</textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <h3 class="label-formulario">Descripción de las instalaciones eléctricas</h3>
                  <textarea class="form-control form-control-custom street-names " disabled>{{ $data['inmueble']->ce_in_electricas }}</textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <h3 class="label-formulario">Descripción de las instalaciones especiales</h3>
                  <textarea class="form-control form-control-custom street-names " disabled>{{ $data['inmueble']->ce_in_especiales }}</textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Cantidad de elevadores de personas y de carga</h3>
                  <p>{{ $data['inmueble']->ce_elevadores }}</p>
                </div>

                <div class="col-md-6">
                  <h3 class="label-formulario">¿Cuenta con recipientes sujetos, a presión, recipientes criogenicos y generadores de vapor o calderas?</h3>
                  <p>{{ ($data['inmueble']->ce_crsp==1 ? "Si" : "No") }}</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">¿Maneja, almacena, transforma y/o transporta materiales y sustancias quimicas peligrsas?</h3>
                  <p>{{ ($data['inmueble']->ce_matt==1 ? "Si" : "No") }}</p>
                </div>
              </div>

            </div> <!-- Finaliza tabPane construcción -->

            <!-- Inicia punto de reunión -->
            <div class="tab-pane fade" id="v-pills-punto" role="tabpanel" aria-labelledby="v-pills-punto-tab">
              @forelse($data['puntosr'] as $punto)
              <h2>Punto de reunión {{ $loop->iteration }}</h2>
              <h3 class="label-formulario">Ubicación</h3>
              <p>{{ $punto->pr_ubicacion }}</p>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Tipo de estructura</h3>
                  <p>@php switch ($punto->pr_tipo) { case "C": echo "Calle"; break; case "P": echo "Parque"; break; case "J": echo "Jardin"; break; 
                                          case "CA": echo "Camellon"; break;
                                          case "E": echo "Estacionamiento"; break;
                                          case "O": echo "Otro:".$data['inmueble']->pr_otro; break;
                           } @endphp</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Metros cuadrados de superficie</h3>
                  <p>{{ $punto->pr_m2_superficie }}</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Capacidad contemplada de personas</h3>
                  <p>{{ $punto->pr_capacidad }}</p>
                </div>
              </div>

              <div class="row d-flex align-items-end">
                <div class="col-md-6">
                  <h3 class="label-formulario">Latitud</h3>
                  <p>{{ $punto->lat_pr }}</p>
                </div>

                <div class="col-md-6">
                  <h3 class="label-formulario">Longitud</h3>
                  <p>{{ $punto->long_pr }}</p>
                </div>
              </div>
              @empty
                <h2 class="my-0">No se encontraron puntos de reunión</h2>
              @endforelse

            </div> <!--Finaliza tabPane Punto de reunión -->

            <!-- Análisis de riesgos -->

            <div class="tab-pane fade" id="v-pills-analisis" role="tabpanel" aria-labelledby="v-pills-analisis-tab">
              <h3 class="label-formulario">Análisis de riesgos (PDF)*</h3>
              <div class="contenedor-boton justify-content-start">
              @if ($data['inmueble']->getAnalisisRiesgos())              
                <span class="hide" id="a_riesgos_filesystem">{{ $data['inmueble']->getAnalisisRiesgos() ? $data['inmueble']->getAnalisisRiesgos()->id_filesystem : '' }}</span>
                <a href="" class="btn-descargar" id="analisis-riesgos" download>Descargar archivo
                  <img src="../src/img/download.svg" alt=""> </a>
              @else
                  <p>No se encontro documento</p>
              @endif
              </div>
            </div>

            <!-- Simulacros -->
            <div class="tab-pane fade" id="v-pills-simulacros" role="tabpanel" aria-labelledby="v-pills-simulacros-tab">
              @forelse($data['simulacros'] as $simulacro)
                  <h2 class="my-0">Simulacro {{ $loop->iteration }}</h2>
                  <div class="row">
                    <div class="col-md-6">
                      <h3 class="label-formulario">Fecha</h3>
                      <p>{{ $simulacro->fecha }}</p>
                    </div>
                    <div class="col-md-6">
                      <h3 class="label-formulario">Tipo</h3>
                      <p>{{ $simulacro->getTipoSimulacro()->descripcion }}</p>
                    </div>
                  </div>

                  <h3 class="label-formulario">Hipótesis</h3>
                  <p>{{ $simulacro->hipotesis }}</p>

                  <h3 class="label-formulario">Constancia de simulacros (PDF)</h3>
                  <div class="contenedor-boton justify-content-start">
                   @if ($simulacro->getActa())              
                    <span class="hide" id="acta_filesystem">{{ ($simulacro->getActa()) ? $simulacro->getActa()->id_filesystem : '' }}</span>
                    <a href="{{ url('').'/storage/'.($simulacro->getActa() ? $simulacro->getActa()->id_filesystem : '') }}" id="simulacro-acta" class="btn-descargar" download>Descargar archivo
                      <img src="../src/img/download.svg" alt=""></a>
                   @else
                      <p>No se encontro documento</p>
                   @endif
                  </div>
              @empty
                <h2 class="my-0">No se encontraron simulacros</h2>
              @endforelse
            </div>

            <!-- Plan de reducción de riesgos -->

            <div class="tab-pane fade" id="v-pills-reduccion" role="tabpanel" aria-labelledby="v-pills-reduccion-tab">
              <h3 class="label-formulario">Plan de reducción de riesgos </h3>
              <div class="contenedor-boton justify-content-start">
                   @if ($data['inmueble']->getReduccionRiesgos())
                      <span class="hide" id="a_reduccion_filesystem">{{ $data['inmueble']->getReduccionRiesgos() ? $data['inmueble']->getReduccionRiesgos()->id_filesystem : '' }}</span>
                      <a href="" class="btn-descargar" id="reduccion-riesgos" download>Descargar archivo
                  <img src="../src/img/download.svg" alt=""> </a>
                   @else
                      <p>No se encontro documento</p>
                   @endif

              </div>
            </div>

            <!-- Plan de contingencias-->

            <div class="tab-pane fade" id="v-pills-contingencias" role="tabpanel" aria-labelledby="v-pills-contingencias-tab">
              <h3 class="label-formulario">Plan de contingencias</h3>
              <div class="contenedor-boton justify-content-start">
                   @if ($data['inmueble']->getPlanContingencias())
                       <span class="hide" id="a_contingencias_filesystem">{{ $data['inmueble']->getPlanContingencias() ? $data['inmueble']->getPlanContingencias()->id_filesystem : '' }}</span>
                       <a href="" class="btn-descargar" id="plan-contingencias" download>Descargar archivo
                  <img src="../src/img/download.svg" alt=""> </a>
                   @else
                      <p>No se encontro documento</p>
                   @endif
              </div>
              <h3 class="label-formulario">Procedimientos contemplados en el documento*</h3>
              <div class="lista">
                <ul>
                @if ($data['inmueble']->pcd_sismo==1)
                  <li>Sismo</li>
                @endif
                @if ($data['inmueble']->pcd_incendio==1)
                  <li>Incendio</li>
                @endif
                @if ($data['inmueble']->pcd_inundacion==1)
                  <li>Inundación</li>
                @endif
                @if ($data['inmueble']->pcd_erupcion==1)
                  <li>Caída de cenizas (erupción volcánica)</li>
                @endif
                @if ($data['inmueble']->pcd_amenazabomba==1)
                  <li>Amenaza de bomba</li>
                @endif
                @if ($data['inmueble']->pcd_restablecimiento==1)
                  <li>Restablecimiento</li>
                @endif
                </ul>
              </div>
            </div>

            <!-- Plan de continuidad de operaciones -->

            <div class="tab-pane fade" id="v-pills-continuidad" role="tabpanel" aria-labelledby="v-pills-continuidad-tab">
              <h3 class="label-formulario">Plan de continuidad de operaciones</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getOperaciones())
                    <span class="hide" id="a_continuidad_filesystem">{{ $data['inmueble']->getOperaciones() ? $data['inmueble']->getOperaciones()->id_filesystem : '' }}</span>
                    <a href="" class="btn-descargar" id="continuidad-op" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>
            </div>

            <!-- Documentos anexos -->

            <div class="tab-pane fade" id="v-pills-documentos" role="tabpanel" aria-labelledby="v-pills-documentos-tab">
              <h3 class="label-formulario">Carta de Corresponsabilidad del Tercero Acreditado (Vigencia mínima 2 años)</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0005())
                  <span class="hide" id="a_6_filesystem">{{ trim($data['inmueble']->getFile0005()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="6-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Carta de Responsabilidad expedida por el obligado</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0006())
                  <span class="hide" id="a_7_filesystem">{{ trim($data['inmueble']->getFile0006()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="7-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Copia de Póliza de Seguro</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0007())
                  <span class="hide" id="a_8_filesystem">{{ trim($data['inmueble']->getFile0007()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="8-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt="">
                  </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              {{--
              <h3 class="label-formulario">Evaluación de Riesgo-Vulnerabilidad del Establecimiento</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0008())
                  <span class="hide" id="a_9_filesystem">{{ trim($data['inmueble']->getFile0008()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="9-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>--}}

              <h2>Dictámenes sobre las condiciones en las que se encuentra el inmueble</h2>
              <h3 class="label-formulario">Dictamen de Seguridad Estructural firmado por un D.R.O. debidamente acreditado y con registro ante la Secretaria de Desarrollo Urbano y Vivienda y visto bueno de seguridad y operación</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0009())
                  <span class="hide" id="a_10_filesystem">{{ trim($data['inmueble']->getFile0009()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="10-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Oficio de no modificación o cambios estructurales, firmado por el administrador o poseedor del inmueble</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0010())
                  <span class="hide" id="a_11_filesystem">{{ trim($data['inmueble']->getFile0010()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="11-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Dictamen de instalación de gas LP o natural firmado por una unidad verificadora avalada y con registro en la SENER</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0011())
                  <span class="hide" id="a_12_filesystem">{{ trim($data['inmueble']->getFile0011()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="12-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <!-- <h3 class="label-formulario">Prueba de presión en equipo hidrantes, firmada por la empresa que realice los trabajos.</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0012())
                  <span class="hide" id="a_13_filesystem">{{ trim($data['inmueble']->getFile0012()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="13-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div> -->

              <h2>Cartas sobre las condiciones en las que se encuentra la infraestructura del inmueble para la atención de emergencias.</h2>
              <h3 class="label-formulario">Carta bajo protesta de decir verdad indicando las características del Equipo de Alerta, Prevención y Combate de Incendios, firmada por el administrador o poseedor del inmueble</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0013())
                  <span class="hide" id="a_14_filesystem">{{ trim($data['inmueble']->getFile0013()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="14-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Carta bajo protesta de decir verdad indicando las características del Equipo de Primeros Auxilios firmada por el administrador o poseedor del inmueble.</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0014())
                  <span class="hide" id="a_15_filesystem">{{ trim($data['inmueble']->getFile0014()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="15-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Carta responsiva del sistema de alertamiento sísmico que reciba la señal oficial del Gobierno de la Ciudad de México, aprobado por la Secretaría conforme a la Norma Técnica correspondiente.</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0015())
                  <span class="hide" id="a_16_filesystem">{{ trim($data['inmueble']->getFile0015()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="16-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h2>Documentos generados por el Comité Interno de Protección Civil</h2>
              <h3 class="label-formulario">Acta Constitutiva de la Integración del Comité Interno actualizado</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0037())
                  <span class="hide" id="a_37_filesystem">{{ trim($data['inmueble']->getFile0037()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="37-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Organigrama del Comité Interno de Protección Civil</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0016())
                  <span class="hide" id="a_17_filesystem">{{ trim($data['inmueble']->getFile0016()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="17-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Calendario de Capacitación</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0017())
                  <span class="hide" id="a_18_filesystem">{{ trim($data['inmueble']->getFile0017()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="18-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Bitácoras del Programa de Capacitación</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0018())
                  <span class="hide" id="a_18_filesystem">{{ trim($data['inmueble']->getFile0018()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="18-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Cronograma y bitácora de simulacros</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0019())
                  <span class="hide" id="a_19_filesystem">{{ trim($data['inmueble']->getFile0019()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="19-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h2>Documentos que avalan el mantenimiento del Inmueble y de la Infraestructura para la atención de las emergencias</h2>
              <h3 class="label-formulario">Programa Anual de Mantenimiento a las Instalaciones (Eléctricas, gas L.P, sistemas fjos, etc.)</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0038())
                  <span class="hide" id="a_38_filesystem">{{ trim($data['inmueble']->getFile0038()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="38-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Organigrama del Comité Interno de Protección Civil</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0020())
                <span class="hide" id="a_22_filesystem">{{ $data['inmueble']->getFile0020() ? $data['inmueble']->getFile0020()->id_filesystem : '' }}</span>
                <a href="#" class="btn-descargar" id="20-anexos" download>Descargar archivo
                  <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div> 

              <h3 class="label-formulario">Calendario de Capacitación</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0021())
                  <span class="hide" id="a_21_filesystem">{{ trim($data['inmueble']->getFile0021()->id_filesystem) }}
                  </span>
                  <a href="#" class="btn-descargar" id="21-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Bitácoras del Programa de Capacitación</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0022())
                  <span class="hide" id="a_22_filesystem">{{ trim($data['inmueble']->getFile0022()->id_filesystem) }}
                  </span>
                  <a href="#" class="btn-descargar" id="22-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Cronograma y bitácora de simulacros</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0023())
                  <span class="hide" id="a_23_filesystem">{{ trim($data['inmueble']->getFile0023()->id_filesystem) }}
                  </span>
                  <a href="#" class="btn-descargar" id="23-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h2>Croquis del inmueble completos</h2>
              <h3 class="label-formulario">Carta responsiva de extintores</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0039())
                  <span class="hide" id="a_39_filesystem">{{ trim($data['inmueble']->getFile0039()->id_filesystem) }}
                  </span>
                  <a href="#" class="btn-descargar" id="39-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Croquis de la ubicación del inmueble y sus alrededores</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0024())
                  <span class="hide" id="a_24_filesystem">{{ trim($data['inmueble']->getFile0024()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="24-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Croquis general del centro de trabajo</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0025())
                  <span class="hide" id="a_25_filesystem">{{ trim($data['inmueble']->getFile0025()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="25-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Croquis de distribución de áreas</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0026())
                  <span class="hide" id="a_26_filesystem">{{ trim($data['inmueble']->getFile0026()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="26-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Croquis de ubicación de equipamiento a Grupos de Atención Especial</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0027())
                  <span class="hide" id="a_27_filesystem">{{ trim($data['inmueble']->getFile0027()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="27-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Croquis de ubicación de botiquines de Primeros Auxilios</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0028())
                  <span class="hide" id="a_28_filesystem">{{ trim($data['inmueble']->getFile0028()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="28-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Croquis de distribución de brigadistas</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0029())
                  <span class="hide" id="a_29_filesystem">{{ trim($data['inmueble']->getFile0029()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="29-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Croquis de ubicación de equipos de alerta, prevención y combate de incendios</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0030())
                  <span class="hide" id="a_30_filesystem">{{ trim($data['inmueble']->getFile0030()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="30-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Croquis de localización de riesgo eléctrico</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0031())
                  <span class="hide" id="a_31_filesystem">{{ trim($data['inmueble']->getFile0031()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="31-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Croquis indicando la trayectoria de la Ruta de Evacuación</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0032())
                  <span class="hide" id="a_32_filesystem">{{ trim($data['inmueble']->getFile0032()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="32-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Croquis de salidas y escaleras de emergencia</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0033())
                  <span class="hide" id="a_33_filesystem">{{ trim($data['inmueble']->getFile0033()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="33-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Croquis de ubicación del sistema de alerta sísmica</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0034())
                  <span class="hide" id="a_34_filesystem">{{ trim($data['inmueble']->getFile0034()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="34-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Croquis de ubicación de las Zonas de Menor Riesgo</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0035())
                  <span class="hide" id="a_35_filesystem">{{ trim($data['inmueble']->getFile0035()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="35-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>

              <h3 class="label-formulario">Croquis de la ubicación de las Zonas de Riesgo</h3>
              <div class="contenedor-boton justify-content-start">
                @if ($data['inmueble']->getFile0036())
                  <span class="hide" id="a_36_filesystem">{{ trim($data['inmueble']->getFile0036()->id_filesystem) }}</span>
                  <a href="#" class="btn-descargar" id="36-anexos" download>Descargar archivo
                    <img src="../src/img/download.svg" alt=""> </a>
                @else
                  <p>No se encontro documento</p>
                @endif
              </div>
            </div> <!-- Cierra tab-pane Documentos anexos -->

            <!-- Inicia menú Comité Interno -->

            <!-- Coordinación general -->
            <div class="tab-pane fade" id="v-pills-coordinacion" role="tabpanel" aria-labelledby="v-pills-coordinacion-tab">
              @forelse($data['general'] as $general)
                <h2 class="my-0">{{ $general->getFigura()->descripcion }}</h2>
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Nombre</h3>
                    <p>{{ $general->nombres }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Primer apellido</h3>
                    <p>{{ $general->ape_pat }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Segundo apellido</h3>
                    <p>{{ $general->ape_mat }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Cargo</h3>
                    <p>{{ $general->cargo }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">CURP</h3>
                    <p>{{ $general->curp }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Constancia de capacitación</h3>
                    <div class="contenedor-boton justify-content-start">
                    @if ($general->getConstancia())
                        <a href="{{ url('').'/storage/'.($general->getConstancia() ? $general->getConstancia()->id_filesystem : '') }}" class="btn-descargar" download>Descargar archivo
                        <img src="../src/img/download.svg" alt=""> </a>
                    @else
                        <p>No se encontro documento</p>
                    @endif

                    </div>
                  </div>
                </div>
              @empty
                <h2 class="my-0">No se encontraron registros</h2>
              @endforelse
            </div> <!-- Finaliza tab coordinacion general -->

            <!-- Inicia tab jefaturas -->

            <div class="tab-pane fade" id="v-pills-jefaturas" role="tabpanel" aria-labelledby="v-pills-jefaturas-tab">
              @forelse($data['jefaturas'] as $comite)
                <h2 class="my-0">{{ $comite->getFigura()->descripcion }}</h2>
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Nombre</h3>
                    <p>{{ $comite->nombres }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Primer apellido</h3>
                    <p>{{ $comite->ape_pat }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Segundo apellido</h3>
                    <p>{{ $comite->ape_mat }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Cargo</h3>
                    <p>{{ $comite->cargo }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">CURP</h3>
                    <p>{{ $comite->curp }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Constancia de capacitación</h3>
                    <div class="contenedor-boton justify-content-start">
                    @if ($general->getConstancia())
                        <a href="{{ url('').'/storage/'.($general->getConstancia() ? $general->getConstancia()->id_filesystem : '') }}" class="btn-descargar" download>Descargar archivo
                        <img src="../src/img/download.svg" alt=""> </a>
                    @else
                        <p>No se encontro documento</p>
                    @endif

                    </div>
                  </div>
                </div>
              @empty
                <h2 class="my-0">No se encontraron registros</h2>
              @endforelse
            </div> <!-- Termina tab Jefaturas -->

            <!-- Inicia Brigadistas de primeros auxilios -->

            <div class="tab-pane fade" id="v-pills-brigadistas-primeros" role="tabpanel" aria-labelledby="v-pills-brigadistas-primeros-tab">
              @forelse($data['briAux'] as $comite)
                <h2 class="my-0">{{ $comite->getFigura()->descripcion }}</h2>
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Nombre</h3>
                    <p>{{ $comite->nombres }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Primer apellido</h3>
                    <p>{{ $comite->ape_pat }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Segundo apellido</h3>
                    <p>{{ $comite->ape_mat }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Cargo</h3>
                    <p>{{ $comite->cargo }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">CURP</h3>
                    <p>{{ $comite->curp }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Constancia de capacitación</h3>
                    <div class="contenedor-boton justify-content-start">
                    @if ($general->getConstancia())
                        <a href="{{ url('').'/storage/'.($general->getConstancia() ? $general->getConstancia()->id_filesystem : '') }}" class="btn-descargar" download>Descargar archivo
                        <img src="../src/img/download.svg" alt=""> </a>
                    @else
                        <p>No se encontro documento</p>
                    @endif

                    </div>
                  </div>
                </div>
              @empty
                <h2 class="my-0">No se encontraron registros</h2>
              @endforelse
            </div> <!-- Termina brigadistas primeros auxilios -->

            <div class="tab-pane fade" id="v-pills-brigadistas-evacuacion" role="tabpanel" aria-labelledby="v-pills-brigadistas-evacuacion-tab">
              @forelse($data['briEva'] as $comite)
                <h2 class="my-0">{{ $comite->getFigura()->descripcion }}</h2>
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Nombre</h3>
                    <p>{{ $comite->nombres }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Primer apellido</h3>
                    <p>{{ $comite->ape_pat }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Segundo apellido</h3>
                    <p>{{ $comite->ape_mat }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Cargo</h3>
                    <p>{{ $comite->cargo }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">CURP</h3>
                    <p>{{ $comite->curp }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Constancia de capacitación</h3>
                    <div class="contenedor-boton justify-content-start">
                    @if ($general->getConstancia())
                        <a href="{{ url('').'/storage/'.($general->getConstancia() ? $general->getConstancia()->id_filesystem : '') }}" class="btn-descargar" download>Descargar archivo
                        <img src="../src/img/download.svg" alt=""> </a>
                    @else
                        <p>No se encontro documento</p>
                    @endif
                    </div>
                  </div>
                </div>
              @empty
                <h2 class="my-0">No se encontraron registros</h2>
              @endforelse
            </div>

            <div class="tab-pane fade" id="v-pills-brigadistas-prevencion" role="tabpanel" aria-labelledby="v-pills-brigadistas-prevencion-tab">
              @forelse($data['briPre'] as $comite)
                <h2 class="my-0">{{ $comite->getFigura()->descripcion }}</h2>
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Nombre</h3>
                    <p>{{ $comite->nombres }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Primer apellido</h3>
                    <p>{{ $comite->ape_pat }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Segundo apellido</h3>
                    <p>{{ $comite->ape_mat }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Cargo</h3>
                    <p>{{ $comite->cargo }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">CURP</h3>
                    <p>{{ $comite->curp }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Constancia de capacitación</h3>
                    <div class="contenedor-boton justify-content-start">
                    @if ($general->getConstancia())
                        <a href="{{ url('').'/storage/'.($general->getConstancia() ? $general->getConstancia()->id_filesystem : '') }}" class="btn-descargar" download>Descargar archivo
                        <img src="../src/img/download.svg" alt=""> </a>
                    @else
                        <p>No se encontro documento</p>
                    @endif
                    </div>
                  </div>
                </div>
              @empty
                <h2 class="my-0">No se encontraron registros</h2>
              @endforelse
            </div>

            <div class="tab-pane fade" id="v-pills-brigadistas-comunicacion" role="tabpanel" aria-labelledby="v-pills-brigadistas-comunicacion-tab">
              @forelse($data['briCom'] as $comite)
                <h2 class="my-0">{{ $comite->getFigura()->descripcion }}</h2>
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Nombre</h3>
                    <p>{{ $comite->nombres }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Primer apellido</h3>
                    <p>{{ $comite->ape_pat }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Segundo apellido</h3>
                    <p>{{ $comite->ape_mat }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Cargo</h3>
                    <p>{{ $comite->cargo }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">CURP</h3>
                    <p>{{ $comite->curp }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Constancia de capacitación</h3>
                    <div class="contenedor-boton justify-content-start">
                    @if ($general->getConstancia())
                        <a href="{{ url('').'/storage/'.($general->getConstancia() ? $general->getConstancia()->id_filesystem : '') }}" class="btn-descargar" download>Descargar archivo
                        <img src="../src/img/download.svg" alt=""> </a>
                    @else
                        <p>No se encontro documento</p>
                    @endif
                    </div>
                  </div>
                </div>
              @empty
                <h2 class="my-0">No se encontraron registros</h2>
              @endforelse
            </div>

            <div class="tab-pane fade" id="v-pills-brigadistas-apoyo" role="tabpanel" aria-labelledby="v-pills-brigadistas-apoyo-tab">
              @forelse($data['briGAE'] as $comite)
                <h2 class="my-0">{{ $comite->getFigura()->descripcion }}</h2>
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Nombre</h3>
                    <p>{{ $comite->nombres }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Primer apellido</h3>
                    <p>{{ $comite->ape_pat }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Segundo apellido</h3>
                    <p>{{ $comite->ape_mat }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Cargo</h3>
                    <p>{{ $comite->cargo }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">CURP</h3>
                    <p>{{ $comite->curp }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Constancia de capacitación</h3>
                    <div class="contenedor-boton justify-content-start">
                    @if ($general->getConstancia())
                        <a href="{{ url('').'/storage/'.($general->getConstancia() ? $general->getConstancia()->id_filesystem : '') }}" class="btn-descargar" download>Descargar archivo
                        <img src="../src/img/download.svg" alt=""> </a>
                    @else
                        <p>No se encontro documento</p>
                    @endif
                    </div>
                  </div>
                </div>
              @empty
                <h2 class="my-0">No se encontraron registros</h2>
              @endforelse
            </div>

            <div class="tab-pane fade" id="v-pills-brigadistas-psicosocial" role="tabpanel" aria-labelledby="v-pills-brigadistas-psicosocial-tab">
              @forelse($data['briApo'] as $comite)
                <h2 class="my-0">{{ $comite->getFigura()->descripcion }}</h2>
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Nombre</h3>
                    <p>{{ $comite->nombres }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Primer apellido</h3>
                    <p>{{ $comite->ape_pat }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Segundo apellido</h3>
                    <p>{{ $comite->ape_mat }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Cargo</h3>
                    <p>{{ $comite->cargo }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">CURP</h3>
                    <p>{{ $comite->curp }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Constancia de capacitación</h3>
                    <div class="contenedor-boton justify-content-start">
                    @if ($general->getConstancia())
                        <a href="{{ url('').'/storage/'.($general->getConstancia() ? $general->getConstancia()->id_filesystem : '') }}" class="btn-descargar" download>Descargar archivo
                        <img src="../src/img/download.svg" alt=""> </a>
                    @else
                        <p>No se encontro documento</p>
                    @endif
                    </div>
                  </div>
                </div>
              @empty
                <h2 class="my-0">No se encontraron registros</h2>
              @endforelse
            </div>

            <div class="tab-pane fade" id="v-pills-brigadistas-multifuncional" role="tabpanel" aria-labelledby="v-pills-brigadistas-multifuncional-tab">
              @forelse($data['briMul'] as $comite)
                <h2 class="my-0">{{ $comite->getFigura()->descripcion }}</h2>
                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Nombre</h3>
                    <p>{{ $comite->nombres }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Primer apellido</h3>
                    <p>{{ $comite->ape_pat }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">Segundo apellido</h3>
                    <p>{{ $comite->ape_mat }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Cargo</h3>
                    <p>{{ $comite->cargo }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <h3 class="label-formulario">CURP</h3>
                    <p>{{ $comite->curp }}</p>
                  </div>
                  <div class="col-md-6">
                    <h3 class="label-formulario">Constancia de capacitación</h3>
                    <div class="contenedor-boton justify-content-start">
                    @if ($general->getConstancia())
                        <a href="{{ url('').'/storage/'.($general->getConstancia() ? $general->getConstancia()->id_filesystem : '') }}" class="btn-descargar" download>Descargar archivo
                        <img src="../src/img/download.svg" alt=""> </a>
                    @else
                        <p>No se encontro documento</p>
                    @endif
                    </div>
                  </div>
                </div>
              @empty
                <h2 class="my-0">No se encontraron registros</h2>
              @endforelse
            </div> <!-- Termina brigadistas multifuncional -->

          </div> <!-- Cierra tabContent -->
        </div> <!-- Cerrar columna derecha -->
      </div> <!-- Cerrar contenido -->
    </section>
  </main>
@endsection
