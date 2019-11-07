@extends('layouts.layout')
@section('content')
  <div class="pleca">
    <div class="container">
      <div class="boton-regresar justify-content-end">
        <a href="">Establecimientos</a>
      </div>
    </div>
  </div>

  <main>
    <section class="container">
      <h1 class="mb-0 ml-3"><span>Restaurante las delicias S.A. de C.V.</span></h1>

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
                Identificación y análisis de riesgos</a>
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

            <div class="tab-pane fade show active" id="v-pills-informacion" role="tabpanel" aria-labelledby="v-pills-informacion-tab">
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Tipo de persona</h3>
                  <p>Moral</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Razón Social</h3>
                  <p>Restaurante las delicias S.A. de C.V.</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">RFC</h3>
                  <p>AAAA111111222</p>
                </div>

                <div class="col-md-6">
                  <h3 class="label-formulario">Folio de acta constitutiva</h3>
                  <p>7239808901AA987231BB</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Número de escritura</h3>
                  <p>99324992348230</p>
                </div>

                <div class="col-md-6">
                  <h3 class="label-formulario">Número de notario</h3>
                  <p>68</p>
                </div>
              </div>

              <h2 class="mb-0">Representante legal</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Luisa</p>
                </div>

                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>Gómez</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>López</p>
                </div>

                <div class="col-md-6">
                  <h3 class="label-formulario">Correo electrónico</h3>
                  <p>correo@dominio.com</p>
                </div>
              </div>

              <h2 class="mb-0">Responsable del establecimiento</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Pedro</p>
                </div>

                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>Sánchez</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>Rojas</p>
                </div>

                <div class="col-md-6">
                  <h3 class="label-formulario">Correo electrónico</h3>
                  <p>correo@dominio.com</p>
                </div>
              </div>

              <h2 class="mb-0">Características del establecimiento</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Sector</h3>
                  <p>Privado</p>
                </div>

                <div class="col-md-6">
                  <h3 class="label-formulario">El inmueble es:</h3>
                  <p>Único</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Tipo de establecimiento</h3>
                  <p></p>
                </div>
              </div>

              <h2 class="mb-0">Carta de corresponsabilidad</h2>
              <div class="contenedor-boton justify-content-start seccion">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

            </div> <!-- Finaliza tabPane información general -->


            <!-- Pan-Pane Domicilio -->
            <div class="tab-pane fade" id="v-pills-domicilio" role="tabpanel" aria-labelledby="v-pills-domicilio-tab">
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Calle o avenida</h3>
                  <p>MIguel Hidalgo</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Número exterior</h3>
                  <p>15</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Número interior</h3>
                  <p>3</p>
                </div>

                <div class="col-md-6">
                  <h3 class="label-formulario">Colonia</h3>
                  <p>Benito Juárez</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Alcaldía</h3>
                  <p>Tlalpan</p>
                </div>

                <div class="col-md-6">
                  <h3 class="label-formulario">Código postal</h3>
                  <p>14255</p>
                </div>
              </div>

              <h2>Se ubica</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Entre la calle</h3>
                  <p>Juan Escutia</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Y la calle</h3>
                  <p>Emiliano Zapata</p>
                </div>
              </div>

              <h2>Referencias visuales</h2>

              <h3 class="label-formulario">A la derecha</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus massa et nisl pellentesque tempus. Suspendisse potenti. </p>

              <h3 class="label-formulario">A la izquierda</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus massa et nisl pellentesque tempus. Suspendisse potenti. </p>

            </div> <!-- Finaliza tab-Panel Domicilio -->

            <!-- Tab-Pane información inmueble -->

            <div class="tab-pane fade" id="v-pills-informacion-inmueble" role="tabpanel" aria-labelledby="v-pills-informacion-inmueble-tab">
              <h4>Esta información debe ser de acuerdo a Escritura Pública o a la información de Catastro de la Alcaldía</h4>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Metros cuadrados de terreno</h3>
                  <p>200</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Metros cuadrados construidos</h3>
                  <p>98</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Cantidad de niveles que ocupa el solicitante</h3>
                  <p>1</p>
                </div>
                {{--
                <div class="col-md-6">
                  <h3 class="label-formulario">Niveles del inmueble</h3>
                  <p>3</p>
                </div>--}}
              </div>

              <div class="row d-flex align-items-end">
                <div class="col-md-6">
                  <h3 class="label-formulario">Latitud</h3>
                  <p>192'135.2341</p>
                </div>

                <div class="col-md-6">
                  <h3 class="label-formulario">Longitud</h3>
                  <p>192'135.2341</p>
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
                  <p>10</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Población fija del inmueble</h3>
                  <p>30</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Población flotante (visitas e invitados)</h3>
                  <p>200</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Población con discapacidad física</h3>
                  <p>2</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Población con discapacidad visual</h3>
                  <p>2</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Población con discapacidad auditiva</h3>
                  <p>2</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Población con discapacidad intelectual</h3>
                  <p>2</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Población con discapacidad mental</h3>
                  <p>2</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Lactantes e infantes</h3>
                  <p>5</p>
                </div>
              </div>
            </div> <!-- Finaliza tab-pane población -->

            <!-- Inicia tab-pane construcción -->

            <div class="tab-pane fade" id="v-pills-construccion" role="tabpanel" aria-labelledby="v-pills-construccion-tab">
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Zona geotécnica</h3>
                  <p>Lorem ipsum</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Tipo de construcción según RCCDMX</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Tipo de cimentación</h3>
                  <p>Lorem ipsum</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Tipo de estructura</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              {{--
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Tipo de losa</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>--}}

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">¿Ha sufrido algún cambio en la estructura?</h3>
                  <p>Sí</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Fecha de cambio</h3>
                  <p>12/10/2018</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <h3 class="label-formulario">Material de construcción</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Año de construcción</h3>
                  <p>Lorem ipsum</p>
                </div>

                <div class="col-md-6">
                  <h3 class="label-formulario">Niveles totales sobre y bajo nivel de banqueta</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <h3 class="label-formulario">Descripción de las instalaciones hidrosanitarias</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <h3 class="label-formulario">Descripción de las instalaciones eléctricas</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <h3 class="label-formulario">Descripción de las instalaciones especiales</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Cantidad de elevadores de personas y de carga</h3>
                  <p>Lorem ipsum</p>
                </div>

                <div class="col-md-6">
                  <h3 class="label-formulario">¿Cuenta con recipientes sujetos, a presión, recipientes criogenicos y generadores de vapor o calderas?</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">¿Maneja, almacena, transforma y/o transporta materiales y sustancias quimicas peligrsas?</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>
            </div> <!-- Finaliza tabPane construcción -->

            <!-- Inicia punto de reunión -->
            <div class="tab-pane fade" id="v-pills-punto" role="tabpanel" aria-labelledby="v-pills-punto-tab">
              <h2>Punto de reunión 01</h2>
              <h3 class="label-formulario">Ubicación</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus massa.</p>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Tipo de estructura</h3>
                  <p>Camellón</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Metros cuadrados de superficie</h3>
                  <p>200</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Capacidad contemplada de personas</h3>
                  <p>800</p>
                </div>
              </div>

              <div class="row d-flex align-items-end">
                <div class="col-md-6">
                  <h3 class="label-formulario">Latitud</h3>
                  <p>192'135.2341</p>
                </div>

                <div class="col-md-6">
                  <h3 class="label-formulario">Longitud</h3>
                  <p>192'135.2341</p>
                </div>
              </div>

              <!--
              <div class="ubicacion">
                <h3 class="label-formulario">Ubicación del punto de reunión</h3>
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6523177287463!2d-99.14205988517988!3d19.42742268688728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fed3fefcd391%3A0xa811aa43f8d3dbcc!2sFUTURA+CDMX+Centro+Interactivo!5e0!3m2!1ses!2smx!4v1564153551599!5m2!1ses!2smx"
                  width="100%" height="229" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>-->

              <h2>Punto de reunión 02</h2>
              <h3 class="label-formulario">Ubicación</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus massa.</p>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Tipo de estructura</h3>
                  <p>Camellón</p>
                </div>
              </div>

              <div class="row d-flex align-items-end">
                <div class="col-md-6">
                  <h3 class="label-formulario">Latitud</h3>
                  <p>192'135.2341</p>
                </div>

                <div class="col-md-6">
                  <h3 class="label-formulario">Longitud</h3>
                  <p>192'135.2341</p>
                </div>
              </div>

              <!--
              <div class="ubicacion">
                <h3 class="label-formulario">Ubicación del punto de reunión</h3>
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6523177287463!2d-99.14205988517988!3d19.42742268688728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fed3fefcd391%3A0xa811aa43f8d3dbcc!2sFUTURA+CDMX+Centro+Interactivo!5e0!3m2!1ses!2smx!4v1564153551599!5m2!1ses!2smx"
                  width="100%" height="229" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>-->
            </div> <!-- Finaliza tabPane Punto de reunión -->

            <!-- Análisis de riesgos -->

            <div class="tab-pane fade" id="v-pills-analisis" role="tabpanel" aria-labelledby="v-pills-analisis-tab">
              <h3 class="label-formulario">Estudio de Riesgo de acuerdo a los “Lineamientos para la Elaboración de Estudios de Riesgo en materia de Gestión Integral de Riesgos y Protección Civil" (pág 28 de la Gaceta Oficial de la Ciudad de México del 26 de agosto del 2019)(PDF)</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>
            </div>

            <!-- Simulacros -->

            <div class="tab-pane fade" id="v-pills-simulacros" role="tabpanel" aria-labelledby="v-pills-simulacros-tab">
              <h2 class="my-0">Simulacro 01</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Fecha</h3>
                  <p>11/08/2019</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Tipo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <h3 class="label-formulario">Hipótesis</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus massa et nisl pellentesque tempus. Suspendisse potenti. </p>

              <h3 class="label-formulario">Constancia de simulacros(PDF)</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h2 class="my-0">Simulacro 02</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Fecha</h3>
                  <p>11/08/2019</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Tipo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <h3 class="label-formulario">Hipótesis</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus massa et nisl pellentesque tempus. Suspendisse potenti. </p>

              <h3 class="label-formulario">Constancia de simulacros (PDF)</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h2 class="my-0">Simulacro 03</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Fecha</h3>
                  <p>11/08/2019</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Tipo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <h3 class="label-formulario">Hipótesis</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse faucibus massa et nisl pellentesque tempus. Suspendisse potenti. </p>

              <h3 class="label-formulario">Constancia de simulacros (PDF)</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

            </div>

            <!-- Plan de reducción de riesgos -->

            <div class="tab-pane fade" id="v-pills-reduccion" role="tabpanel" aria-labelledby="v-pills-reduccion-tab">
              <h3 class="label-formulario">Plan de reducción de riesgos </h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>
            </div>

            <!-- Plan de contingencias-->

            <div class="tab-pane fade" id="v-pills-contingencias" role="tabpanel" aria-labelledby="v-pills-contingencias-tab">
              <h3 class="label-formulario">Plan de contingencias</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>
              <h3 class="label-formulario">Procedimientos contemplados en el documento </h3>
              <div class="lista">
                <ul>
                  <li>Sismo</li>
                  <li>Incendio</li>
                  <li>Inundación</li>
                </ul>
              </div>
            </div>

            <!-- Plan de continuidad de operaciones -->

            <div class="tab-pane fade" id="v-pills-continuidad" role="tabpanel" aria-labelledby="v-pills-continuidad-tab">
              <h3 class="label-formulario">Plan de continuidad de operaciones</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>
            </div>

            <!-- Documentos anexos -->

            <div class="tab-pane fade" id="v-pills-documentos" role="tabpanel" aria-labelledby="v-pills-documentos-tab">
              <h3 class="label-formulario">Carta de Corresponsabilidad del Tercero Acreditado (Vigencia mínima 2 años) </h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Carta de Responsabilidad expedida por el obligado </h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Copia de Póliza de Seguro </h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              {{--
              <h3 class="label-formulario">Evaluación de Riesgo-Vulnerabilidad del Establecimiento </h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>
              --}}

              <h2>Dictámenes sobre las condiciones en las que se encuentra el inmueble</h2>
              <h3 class="label-formulario">Dictamen de Seguridad Estructural firmado por un D.R.O. debidamente acreditado y con registro ante la Secretaria de Desarrollo Urbano y Vivienda y visto bueno de seguridad y operación</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Oficio de no modificación o cambios estructurales, firmado por el administrador o poseedor del inmueble </h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Dictamen de instalación de gas LP o natural firmado por una unidad verificadora avalada y con registro en la SENER</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Prueba de presión en equipo hidrantes, firmada por la empresa que realice los trabajos.</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h2>Cartas sobre las condiciones en las que se encuentra la infraestructura del inmueble para la atención de emergencias.</h2>
              <h3 class="label-formulario">Carta bajo protesta de decir verdad indicando las características del Equipo de Alerta, Prevención y Combate de Incendios, firmada por el administrador o poseedor del inmueble</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Carta bajo protesta de decir verdad indicando las características del Equipo de Primeros Auxilios firmada por el administrador o poseedor del inmueble </h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Carta responsiva del sistema de alertamiento sísmico que reciba la señal oficial del Gobierno de la Ciudad de México, aprobado por la Secretaría conforme a la Norma Técnica correspondiente</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h2>Documentos generados por el Comité Interno de Protección Civil</h2>
              <h3 class="label-formulario">Acta Constitutiva de la Integración del Comité Interno actualizado</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Organigrama del Comité Interno de Protección Civil </h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Calendario de Capacitación </h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Bitácoras del Programa de Capacitación </h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Cronograma y bitácora de simulacros </h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h2>Documentos que avalan el mantenimiento del Inmueble y de la Infraestructura para la atención de las emergencias</h2>
              <h3 class="label-formulario">Programa Anual de Mantenimiento a las Instalaciones (Eléctricas, gas L.P, sistemas fjos, etc.)</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Organigrama del Comité Interno de Protección Civil</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Calendario de Capacitación</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Bitácoras del Programa de Capacitación</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Cronograma y bitácora de simulacros</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h2>Croquis del inmueble completos</h2>
              <h3 class="label-formulario">Carta responsiva de extintores</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Croquis de la ubicación del inmueble y sus alrededores</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Croquis general del centro de trabajo</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Croquis de distribución de áreas</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Croquis de ubicación de equipamiento a Grupos de Atención Especial</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Croquis de ubicación de botiquines de Primeros Auxilios</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Croquis de distribución de brigadistas</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Croquis de ubicación de equipos de alerta, prevención y combate de incendios</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Croquis de localización de riesgo eléctrico</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Croquis indicando la trayectoria de la Ruta de Evacuación</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Croquis de salidas y escaleras de emergencia</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Croquis de ubicación del sistema de alerta sísmica</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Croquis de ubicación de las Zonas de Menor Riesgo</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>

              <h3 class="label-formulario">Croquis de la ubicación de las Zonas de Riesgo</h3>
              <div class="contenedor-boton justify-content-start">
                <a href="#" class="btn-descargar" download>Descargar archivo
                  <img src="src/img/download.svg" alt=""> </a>
              </div>
            </div> <!-- Cierra tab-pane Documentos anexos -->

            <!-- Inicia menú Comité Interno -->

            <!-- Coordinación general -->
            <div class="tab-pane fade" id="v-pills-coordinacion" role="tabpanel" aria-labelledby="v-pills-coordinacion-tab">
              <h2 class="my-0">Responsable de piso o de edificio</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="my-0">Suplente del responsable de piso o de edificio</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>
            </div> <!-- Finaliza tab coordinacion general -->

            <!-- Inicia tab jefaturas -->

            <div class="tab-pane fade" id="v-pills-jefaturas" role="tabpanel" aria-labelledby="v-pills-jefaturas-tab">
              <h2 class="my-0">Jefe de edificio</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Jefe de seguridad</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Jefe de mantenimiento</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Jefe de piso (Uno por cada piso del inmueble)</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Jefe de brigada de primeros auxilios</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Jefe de brigada de evacuación</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Jefe de brigada de prevención, combate y extinción de incendios</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Jefe de brigada de comunicación</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Jefe de brigada del grupo de apoyo especial</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Jefe de brigada multifuncional</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>
            </div> <!-- Termina tab Jefaturas -->

            <!-- Inicia Brigadistas de primeros auxilios -->

            <div class="tab-pane fade" id="v-pills-brigadistas-primeros" role="tabpanel" aria-labelledby="v-pills-brigadistas-primeros-tab">
              <h2 class="my-0">Brigadista 01</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 02</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 03</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 04</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 05</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>
            </div> <!-- Termina brigadistas primeros auxilios -->

            <div class="tab-pane fade" id="v-pills-brigadistas-evacuacion" role="tabpanel" aria-labelledby="v-pills-brigadistas-evacuacion-tab">
              <h2 class="my-0">Brigadista 01</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 02</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 03</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 04</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 05</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="v-pills-brigadistas-prevencion" role="tabpanel" aria-labelledby="v-pills-brigadistas-prevencion-tab">
              <h2 class="my-0">Brigadista 01</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 02</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 03</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 04</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 05</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="v-pills-brigadistas-comunicacion" role="tabpanel" aria-labelledby="v-pills-brigadistas-comunicacion-tab">
              <h2 class="my-0">Brigadista 01</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 02</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 03</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 04</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 05</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="v-pills-brigadistas-apoyo" role="tabpanel" aria-labelledby="v-pills-brigadistas-apoyo-tab">
              <h2 class="my-0">Brigadista 01</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 02</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 03</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 04</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 05</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="v-pills-brigadistas-psicosocial" role="tabpanel" aria-labelledby="v-pills-brigadistas-psicosocial-tab">
              <h2 class="my-0">Brigadista 01</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 02</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 03</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 04</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 05</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="tab-pane fade" id="v-pills-brigadistas-multifuncional" role="tabpanel" aria-labelledby="v-pills-brigadistas-multifuncional-tab">
              <h2 class="my-0">Brigadista 01</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 02</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 03</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 04</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>

              <h2 class="mb-0">Brigadista 05</h2>
              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Nombre</h3>
                  <p>Jesús</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Primer apellido</h3>
                  <p>López</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">Segundo apellido</h3>
                  <p>González</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Cargo</h3>
                  <p>Lorem ipsum</p>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <h3 class="label-formulario">CURP</h3>
                  <p>AAAA112233BCD22</p>
                </div>
                <div class="col-md-6">
                  <h3 class="label-formulario">Constancia de capacitación</h3>
                  <div class="contenedor-boton justify-content-start">
                    <a href="#" class="btn-descargar" download>Descargar archivo
                      <img src="src/img/download.svg" alt=""> </a>
                  </div>
                </div>
              </div>
            </div> <!-- Termina brigadistas multifuncional -->

          </div> <!-- Cierra tabContent -->
        </div> <!-- Cerrar columna derecha -->
      </div> <!-- Cerrar contenido -->
    </section>
  </main>
@endsection
