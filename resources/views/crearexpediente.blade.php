@extends('layouts.layout')
@section('content')

  <main>
    <section class="container ">
      <div class="row d-flex flex-nowrap seccion" >
           <div class="col-lg-10 Nuevo-expediente"><span id="des_expediente"></span> <span id="des_inmueble">Nuevo expediente</span></div>
           <div class="col-lg-2 Campos-obligatorios d-flex justify-content-end">*Campos obligatorios</div>
      </div>

      <div class="row d-flex justify-content-center seccion">
        <div class="col-lg-4">

          <a class="btn-registro active" id="policias" data-toggle="tab" href="#c_policias" role="button">POLICIAS
          </a>
          <a class="btn-registro" id="infractores" data-toggle="tab" href="#c_infractores" role="button">INFRACTOR(ES)
          </a>
          <a class="btn-registro" id="motivo" data-toggle="tab" href="#c_motivo" role="button">MOTIVO DE PRESENTACIÓN
          </a>


        </div> <!-- Cerrar columna lateral -->

        <script>
        function mayus(e) {
            e.value = e.value.toUpperCase();
        }
        </script>

        <!-- Inica columna derecha -->
        <div class="col-lg-8">
          <div class="tab-content" id="v-pills-tabContent">

            <!-- Inicia tab-pane Información -->

        <div class="tab-pane fade show active" id="c_policias" ">
      <form id="f_boleta" data-id="" data-usuario="{{{ Auth::user()->email }}}">
        <div class="row">
                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="rfc">*Boleta de remisión:</label>
                    <input autofocus type="text" onkeyup="mayus(this);" class="form-control form-control-custom" id="boleta_remision" placeholder="Escribe el folio de la boleta" maxlength="20" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                  <div class="row col-md-4 mb-3  d-flex justify-content-end align-items-end">
                    <div id='crearexpediente'>
                        <label class="Crear-expediente mb-0 py-2" name="button" id="AgregarOtraBoleta">Agregar otra boleta</label>
                        <img class="Crear-expediente-svg" type="img" src="{{url('')}}/src/img/agregarexpediente.svg" />
                    </div>
                  </div>
        </div>
        <div class="Policias-remitentes mb-3">Policias remitentes</div>
        <div class="Policia-remitente">Policia remitente 01</div>

                <div class="row">
                  <div class="col-md-6 mb-1">
                    <label class="form-label-custom" for="placa1">*Número de empleado (placa de policia)</label>
                    <input type="number" name="placa1" id="placa1" class="form-control form-control-custom" value="" placeholder="Escribe el número de placa" maxlength="15" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                  <div class="col-md-6 mb-1">
                    <label class="form-label-custom" for="areadeadscripcion_1">*Área de adscripción</label>
                    <input type="text" name="areadeadscripcion_1" id="areadeadscripcion_1" class="form-control form-control-custom" value="" placeholder="Escribe el área de adscripción" maxlength="30" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                </div>

        <div class="row  mb-1">
          <div class="col-md-4" id="nom">
            <label class="form-label-custom" for="nombres" id=""nombre_1"">Nombre(s)*</label>
            <input type="text" class="form-control form-control-custom street-names" id="nombre_1" maxlength="30" placeholder="Escribe el nombre(s)" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4" id="apa">
            <label class="form-label-custom" for="primer_apellido_1">*Primer apellido</label>
            <input type="text" class="form-control form-control-custom names" id="primer_apellido_1" maxlength="30" placeholder="Escribe el primer apellido" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4" id="ama">
            <label class="form-label-custom" for="segundo_apellido_1">Segundo Apellido</label>
            <input type="text" class="form-control form-control-custom names" id="segundo_apellido_1" maxlength="30" placeholder="Escribe el segundo apellido">
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
        </div>

                <div class="row mb-4">
                  <div class="col-md-4">
                    <label class="form-label-custom" for="id_mediotransporte_1">*Medio de transporte</label>
                    <select class="form-control form-control-custom" id="id_mediotransporte_1" name="id_mediotransporte_1" required>
                      <option disabled value="" selected hidden>Selecciona una</option>
                      <option value="1">Patrulla</option>
                      <option value="2">A pie</option>
                    </select>
                    <div class="invalid-feedback">
                      Selecciona una opción
                    </div>
                  </div>

                  <div class="col-md-4">
                    <label class="form-label-custom" for="numerodepatrulla_1">*Número de patrulla</label>
                    <input type="text" name="numerodepatrulla_1" id="numerodepatrulla_1" class="form-control form-control-custom numbers" value="" placeholder="Escribe el número de patrulla" maxlength="10" required>
                    <div class="invalid-feedback">
                      Maximo tres digitos
                    </div>
                  </div>

                </div>
        <div class="Policia-remitente mb-1">Policia remitente 02</div>

                <div class="row  mb-1">
                  <div class="col-md-6">
                    <label class="form-label-custom" for="placa2">*Numero de empleado (placa de policia)</label>
                    <input type="number" name="placa2" id="placa2" class="form-control form-control-custom" value="" placeholder="Escribe el número de placa" maxlength="15" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label-custom" for="areadeadscripcion_2">*Área de adscripción</label>
                    <input type="text" name="areadeadscripcion_2" id="areadeadscripcion_2" class="form-control form-control-custom" value="" placeholder="Escribe el área de adscripción" maxlength="30" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                </div>

        <div class="row  mb-1">
          <div class="col-md-4" id="nom">
            <label class="form-label-custom" for="nombre_2" >Nombre(s)*</label>
            <input type="text" class="form-control form-control-custom street-names" id="nombre_2" maxlength="30" placeholder="Escribe el nombre(s)" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4" id="apa">
            <label class="form-label-custom" for="primer_apellido_2">*Primer apellido</label>
            <input type="text" class="form-control form-control-custom names" id="primer_apellido_2" maxlength="30" placeholder="Escribe el primer apellido" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4" id="ama">
            <label class="form-label-custom" for="segundo_apellido_2">Segundo Apellido</label>
            <input type="text" class="form-control form-control-custom names" id="segundo_apellido_2" maxlength="30" placeholder="Escribe el segundo apellido">
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
        </div>

                <div class="row  mb-1">
                  <div class="col-md-4">
                    <label class="form-label-custom" for="id_mediotransporte_2">*Medio de transporte</label>
                    <select class="form-control form-control-custom" id="id_mediotransporte_2" name="id_mediotransporte_2" required>
                      <option disabled value="" selected hidden>Selecciona una</option>
                      <option value="1">Patrulla</option>
                      <option value="2">A pie</option>
                    </select>
                    <div class="invalid-feedback">
                      Selecciona una opción
                    </div>
                  </div>

                  <div class="col-md-4">
                    <label class="form-label-custom" for="numerodepatrulla_2">*Número de patrulla</label>
                    <input type="text" name="numerodepatrulla_2" id="numerodepatrulla_2" class="form-control form-control-custom numbers" value="" placeholder="Escribe el número de patrulla" maxlength="10" required>
                    <div class="invalid-feedback">
                      Maximo tres digitos
                    </div>
                  </div>

                </div>

                <div class="contenedor-boton justify-content-end seccion">
                  <button class="btn-01" type="submit" name="button" id="guardarexpediente">Crear expediente</button>
                </div>
              </form>
            </div> <!-- Finaliza tabPane información general -->


            <!-- Pan-Pane Domicilio -->
            <div class="tab-pane fade" id="c_motivo" >
              <form id="f_motivo" >

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="diahechos">*Fecha en que ocurrieron los hechos</label>
                    <input type="date" name="diahechos" id="diahechos" class="form-control form-control-custom street-names" maxlength="12" value="" placeholder="dd/mm/aaaa" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="horahechos">*Hora en que ocurrieron los hechos</label>
                    <input type="text" name="horahechos" id="horahechos" class="form-control form-control-custom street-names" maxlength="5" value="" placeholder="00:00" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                </div>


                <h2 class="mb-0">Lugar de la detención</h2>
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="calle_h">Calle:</label>
                    <input autofocus type="text" name="calle_h" id="calle_h" class="form-control form-control-custom street-names" maxlength="30" value="" placeholder="Escribe la calle" autofocus required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="exterior_h">No. exterior</label>
                    <input type="text" name="exterior_h" id="exterior_h" class="form-control form-control-custom street-names" maxlength="10" value="" placeholder="00" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="interior_h">No. interior</label>
                    <input type="text" name="interior_h" id="interior_h" class="form-control form-control-custom street-names" maxlength="10" value="" placeholder="00">
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                </div>

                <div class="row">

                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="cp_h">Código postal*</label>
                    <input type="text" name="cp_h" id="cp_h" class="form-control form-control-custom numbers" maxlength="5" value="" placeholder="00000" pattern="^[0-9]{4,5}$" required>
                    <div class="invalid-feedback">
                      Ingresa los cuatro o cinco dígitos de tu código postal
                    </div>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="colonia_h">Colonia</label>
                    <input type="text" name="colonia_h" id="colonia_h" class="form-control form-control-custom street-names" maxlength="30" value="" placeholder="Escribe la colonia" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="id_alcaldia_h">Alcaldía:</label>
                    <select class="form-control form-control-custom" id="id_alcaldia_h" name="id_alcaldia_h" required>
                      <option disabled value="" selected hidden>Selecciona una</option>
                      @foreach ($data['alcaldias'] as $alcaldia)
                      <option value="{{ $alcaldia['id_cat_alcaldia'] }}">{{ $alcaldia->descripcion}}</option>
                      @endforeach
                    </select>
                    <div class="invalid-feedback">
                      Selecciona una opción
                    </div>
                  </div>

                </div>

                <h2 class="mb-0">Motivo</h2>
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <label class="form-label-custom" for="motivo">*Datos de la probable infracción:</label>
                    <textarea name="motivo" id="motivo" class="form-control form-control-custom street-names" maxlength="2000" value="" placeholder="Detallar el motivo por el que se realiza la presentación" required></textarea>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <label class="form-label-custom" for="objetos">Objeto(s) recogido(s) con la(s) probable(s) infracción(es)</label>
                    <textarea name="objetos" id="objetos" class="form-control form-control-custom street-names" maxlength="2000" value="" placeholder="Describir los objetos" required></textarea>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                </div>

                <div class="contenedor-boton justify-content-end seccion">
                  <button class="btn-01" type="submit" name="button" id="grabamotivo" >Guardar y seguir editando</button>
                </div>
              </form>
            </div> <!-- Finaliza tab-Panel Domicilio -->


            <div class="tab-pane fade" id="c_infractores_" >
                  <table id="dg_infractores">
                  </table>
            </div>
  
            <div class="tab-pane fade" id="c_infractores" >
              <h4>*Esta información debe ser de acuerdo a Escritura Pública o a la información de Catastro de la Alcaldía</h4>
              <form id="f_infractores">

        <div class="row  mb-2">
          <div class="col-md-6" id="nom">
            <legend class="form-label-custom mb-1" for="nombres" id="nombre_I">Fotografía:</legend>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="nombre_I" maxlength="30" placeholder="Selecciona un archivo JPG o PNG" >
                <label class="custom-file-label" for="s_id_file_0041">
                              <p class="texto" id="l_s_id_file_0041">Selecciona un archivo PDF</p>
                </label>
            </div>
          </div>
        </div>

        <div class="Policias-remitentes mt-3">Datos personales</div>


        <div class="row  mb-1">
          <div class="col-md-4" id="nom">
            <label class="form-label-custom" for="nombres" id="nombre_I">Nombre(s)*</label>
            <input type="text" class="form-control form-control-custom street-names" id="nombre_I" maxlength="30" placeholder="Escribe el nombre(s)" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>

          <div class="col-md-4" id="apa">
            <label class="form-label-custom" for="primer_apellido_I">*Primer apellido</label>
            <input type="text" class="form-control form-control-custom names" id="primer_apellido_I" maxlength="30" placeholder="Escribe el primer apellido" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>

          <div class="col-md-4" id="ama">
            <label class="form-label-custom" for="segundo_apellido_I">Segundo Apellido</label>
            <input type="text" class="form-control form-control-custom names" id="segundo_apellido_I" maxlength="30" placeholder="Escribe el segundo apellido">
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
        </div>

        <div class="row  mb-1">


                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="sexo">*Sexo:</label>
                    <select class="form-control form-control-custom" id="sexo" name="sexo" required>
                      <option disabled value="" selected hidden>Selecciona una</option>
                      <option value="F">FEMENINO</option>
                      <option value="M">MASCULINO</option>
                    </select>
                    <div class="invalid-feedback">
                      Selecciona una opción
                    </div>
                  </div>

          <div class="col-md-4" id="apa">
            <label class="form-label-custom" for="curp">Curp:</label>
            <input type="text" class="form-control form-control-custom names" id="curp" maxlength="18" placeholder="AAAA111111BBBBBB22" >
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>

                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="identidad">Lugar de nacimiento:</label>
                    <select class="form-control form-control-custom" id="identidad" name="identidad" required>
                      <option disabled value="" selected hidden>Selecciona una</option>
                      @foreach ($data['entidades'] as $entidad)
                      <option value="{{ $entidad['id_entidad'] }}">{{ $entidad['descripcion'] }}</option>
                      @endforeach
                    </select>
                    <div class="invalid-feedback">
                      Selecciona una opción
                    </div>
                  </div>

        </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="nacimiento">Fecha de nacimiento</label>
                    <input type="date" name="nacimiento" id="nacimiento" class="form-control form-control-custom street-names" maxlength="12" value="" placeholder="dd/mm/aaaa" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                </div>

        <div class="Policias-remitentes mt-3">Domicilio</div>

                <div class="row">
                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="calle_i">Calle:</label>
                    <input autofocus type="text" name="calle_i" id="calle_i" class="form-control form-control-custom street-names" maxlength="30" value="" placeholder="Escribe la calle" autofocus required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="exterior_i">No. exterior</label>
                    <input type="text" name="exterior_i" id="exterior_i" class="form-control form-control-custom street-names" maxlength="10" value="" placeholder="00" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="interior_i">No. interior</label>
                    <input type="text" name="interior_i" id="interior_i" class="form-control form-control-custom street-names" maxlength="10" value="" placeholder="00">
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                </div>

                <div class="row">

                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="cp_i">Código postal*</label>
                    <input type="text" name="cp_i" id="cp_i" class="form-control form-control-custom numbers" maxlength="5" value="" placeholder="00000" pattern="^[0-9]{4,5}$" required>
                    <div class="invalid-feedback">
                      Ingresa los cuatro o cinco dígitos de tu código postal
                    </div>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="colonia_i">Colonia</label>
                    <input type="text" name="colonia_i" id="colonia_i" class="form-control form-control-custom street-names" maxlength="30" value="" placeholder="Escribe la colonia" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="id_alcaldia_i">Alcaldía:</label>
                    <select class="form-control form-control-custom" id="id_alcaldia_i" name="id_alcaldia_i" required>
                      <option disabled value="" selected hidden>Selecciona una</option>
                      @foreach ($data['alcaldias'] as $alcaldia)
                      <option value="{{ $alcaldia['id_cat_alcaldia'] }}">{{ $alcaldia->descripcion}}</option>
                      @endforeach
                    </select>
                    <div class="invalid-feedback">
                      Selecciona una opción
                    </div>
                  </div>

                </div>






                <div class="contenedor-boton justify-content-end seccion">
                  <button class="btn-01" type="submit" name="guardar_seguir" id="guardarinformacion" >Guardar y seguir editando</button>
                </div>

              </form>
            </div> <!-- Finaliza tab-Panel Información inmueble-->



            <div class="tab-pane fade" id="v-pills-analisis" role="tabpanel" aria-labelledby="v-pills-analisis-tab">
              <form id="f_analisis" enctype="multipart/form-data" >
                <div class="row mx-1">
                <legend class="form-label-custom mb-0">Análisis de riesgos (PDF)*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0001" id="id_file_0001" lang="es" accept=".pdf" autofocus required>
                  <label class="custom-file-label" for="id_file_0001">
                    <p class="texto" id="l_id_file_0001" >Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Seleccione un archivo
                  </div>
                </div>
                </div>

                <div class="contenedor-boton justify-content-end seccion">
                  <button class="btn-01" type="submit" name="terminari" id="terminari" >Termina registro de inmueble</button>
                  <button class="btn-01" type="submit" name="guardar_seguir" id="guardar_seguir" data-siguiente="simulacros" data-posicion="analisis" >Ir a la siguiente sección</button>
                </div>
              </form>
            </div>

            <!-- Simulacros -->

            <div class="tab-pane fade" id="v-pills-simulacros" role="tabpanel" aria-labelledby="v-pills-simulacros-tab">
            <h4>*Debe registrar por lo menos un simulacro</h4>
            <form id='f_simulacros'>
              <h2 class="my-0">Simulacros</h2>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="si_fecha">Fecha*</label>
                    <input class="form-control form-control-custom" type="date" name="si_fecha" min="2019-01-01" id="si_fecha" value="" autofocus required>
                    <div class="invalid-feedback">
                     Ingresa una fecha válida
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="id_tipodesimulacro">Tipo*</label>
                    <select class="form-control form-control-custom" id="id_tipodesimulacro" name="id_tipodesimulacro" required>
                      <option disabled value="" selected hidden>Selecciona una</option>
{{--
                      @foreach ($tiposimulacros as $ts)
                      <option value="{{ $ts['id'] }}">{{ $ts->descripcion}}</option>
                      @endforeach
--}}

                    </select>
                    <div class="invalid-feedback">
                      Selecciona una opción
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-12">
                    <label class="form-label-custom" for="hipotesis">Hipótesis*</label>
                    <textarea class="form-control form-control-custom" name="hipotesis" id="hipotesis" placeholder="Escribe la hipótesis" maxlength="1000" required></textarea>
                    <div class="invalid-feedback">
                      Escribe la hipótesis
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <legend class="form-label-custom mt-3 mb-0">Constancia de simulacros* (PDF)</legend>
                    <div class="custom-file">
                         <input type="file" class="custom-file-input" name="s_id_file_0040" id="s_id_file_0040" accept=".pdf" autofocus >
                         <label class="custom-file-label" for="s_id_file_0040">
                              <p class="texto" id="l_s_id_file_0040" >Selecciona un archivo PDF</p>
                         </label>
                      <div class="invalid-feedback mt-3">
                        Seleccione un archivo
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="contenedor-boton justify-content-end seccion">
                      <button class="btn-01" type="submit" name="guardarsimulacro" id="guardarsimulacro">
                          Añadir simulacro
                          <!-- <img src="src/img/agregar.svg" alt=""> -->
                      </button>
                    </div>
                  </div>

                </div>
<!--
                <div class="row d-flex justify-content-end">
                  <div class="col-md-6 mb-3">
                    <div class="contenedor-boton justify-content-end seccion">
                      <button class="btn-punto" type="submit" name="guardarsimulacro" id="guardarsimulacro">
                          <h1><p>Añadir simulacro</p></h1>
                          <img src="src/img/agregar.svg" alt="">
                      </button>
                    </div>
                  </div>
                </div>
-->

                    <div class="contenedor-boton justify-content-end seccion">
                      <button class="btn-01" type="submit" name="terminari">Termina registro de inmueble</button>
                      <button class="btn-01" type="submit" name="guardar_seguir" id="guardar_seguir" data-siguiente="reduccion" data-posicion="simulacros" >Guardar y seguir editando</button>
                    </div>

               </form>
               <div id="dg_simulacro">
               </div>
            </div>

            <!-- Plan de reducción de riesgos -->

            <div class="tab-pane fade" id="v-pills-reduccion" role="tabpanel" aria-labelledby="v-pills-reduccion-tab">
              <form id=f_reduccion>
                <div class="row mx-1">
                <legend class="form-label-custom mb-0">Estudio de riesgo* (PDF)</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0002" id="id_file_0002" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0002">
                    <p class="texto" id="l_id_file_0002">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Seleccione un archivo
                  </div>
                </div>
                </div>


                <div class="contenedor-boton justify-content-end seccion">
                  <button class="btn-01" type="submit" name="terminari">Termina registro de inmueble</button>
                  <button class="btn-01" type="submit" name="guardar_seguir" id="guardar_seguir" data-siguiente="contingencias" data-posicion="reduccion">Guardar y seguir editando</button>
                </div>
              </form>
            </div>

            <!-- Plan de contingencias-->

            <div class="tab-pane fade" id="v-pills-contingencias" role="tabpanel" aria-labelledby="v-pills-contingencias-tab">
              <form id="f_contingencias" >
                <div  class="row mx-1" >
                <legend class="form-label-custom mb-0">Plan de contingencias* (PDF)</legend>
                  <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0003" id="id_file_0003" lang="es" accept=".pdf" autofocus >
                  <label class="custom-file-label" for="seleccionar_archivo05">
                    <p class="texto" id="l_id_file_0003">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Seleccione un archivo
                  </div>
                </div>
                </div>


                <legend class="form-label-custom mt-4 mx-1">Procedimientos contemplados en el documento*</legend>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="formulario-checkbox">
                      <input type="checkbox" name="pcd" id="pcd_sismo" value="1" required>
                      <label for="pcd_sismo">Sismo</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <div class="formulario-checkbox">
                      <input type="checkbox" name="pcd" id="pcd_incendio" value="1" required>
                      <label for="pcd_incendio">Incendio</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="formulario-checkbox">
                      <input type="checkbox" name="pcd" id="pcd_inundacion" value="1" required>
                      <label for="pcd_inundacion">Inundación</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <div class="formulario-checkbox">
                      <input type="checkbox" name="pcd" id="pcd_erupcion" value="1" required>
                      <label for="pcd_erupcion">Caída de cenizas (erupción volcánica)</label>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <div class="formulario-checkbox">
                      <input type="checkbox" name="pcd" id="pcd_amenazabomba" value="1" required>
                      <label for="pcd_amenazabomba">Amenaza de bomba</label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <div class="formulario-checkbox">
                      <input type="checkbox" name="pcd" id="pcd_restablecimiento" value="1" required>
                      <label for="pcd_restablecimiento">Restablecimiento</label>
                      <div class="invalid-feedback">
                        Selecciona una opción
                      </div>
                    </div>
                  </div>
                </div>

                <div class="contenedor-boton justify-content-end seccion">
                  <button class="btn-01" type="submit" name="terminari">Termina registro de inmueble</button>
                  <button class="btn-01" type="submit" name="guardaContigencia" id="guardarcontingencia" data-siguiente="continuidad" data-posicion="contingencias" >Guardar y seguir editando</button>
                </div>
              </form>
            </div>

            <!-- Plan de continuidad de operaciones -->

            <div class="tab-pane fade" id="v-pills-continuidad" role="tabpanel" aria-labelledby="v-pills-continuidad-tab">
              <form id='f_continuidad'>
                <div class="row mx-1">
                <legend class="form-label-custom mb-0">Plan de continuidad de operaciones* (PDF)</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0004" id="id_file_0004" lang="es" accept=".pdf" accept=".pdf"autofocus >
                  <label class="custom-file-label" for="id_file_0004">
                    <p class="texto" id="l_id_file_0004">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="contenedor-boton justify-content-end seccion">
                  <button class="btn-01" type="submit" name="terminari">Termina registro de inmueble</button>
                  <button class="btn-01" type="submit" name="guardar_seguir" data-siguiente="documentos" id="guardar_seguir" data-posicion="continuidad" >Guardar y seguir editando</button>
                </div>
              </form>
            </div>

            <!-- Documentos anexos -->

            <div class="tab-pane fade" id="v-pills-documentos" role="tabpanel" aria-labelledby="v-pills-documentos-tab">
              <form class="subtitulos-formulario" id='f_documentos' >
                <div class="row mx-1">
                <legend class="form-label-custom mb-0">Carta de Corresponsabilidad del Tercero Acreditado (Vigencia mínima 2 años)*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0005" id="id_file_0005" lang="es" accept=".pdf" autofocus >
                  <label class="custom-file-label" for="id_file_0005">
                    <p class="texto" id="l_id_file_0005">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Carta de Responsabilidad expedida por el obligado*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0006" id="id_file_0006" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0006">
                    <p class="texto" id="l_id_file_0006">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Copia de Póliza de Seguro*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0007" id="id_file_0007" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0007">
                    <p class="texto" id="l_id_file_0007">Selecciona un archivo PDF</p>

                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>


                <div class="row mx-1">
                <h2>Dictámenes sobre las condiciones en las que se encuentra el inmueble</h2>
                <legend class="form-label-custom mb-0">Dictamen de Seguridad Estructural firmado por un D.R.O. debidamente acreditado y con registro ante la Secretaria de Desarrollo Urbano y Vivienda y visto bueno de seguridad y operación*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0009" id="id_file_0009" accept=".pdf" lang="es" autofocus>
                  <label class="custom-file-label" for="id_file_0009">
                    <p class="texto" id="l_id_file_0009">Selecciona un archivo PDF</p>

                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Oficio de no modificación o cambios estructurales, firmado por el administrador o poseedor del inmueble*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0010" id="id_file_0010" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0010">
                    <p class="texto" id="l_id_file_0010">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Dictamen de instalación de gas LP o natural firmado por una unidad verificadora avalada y con registro en la SENER*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0011" id="id_file_0011" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0011">
                    <p class="texto" id="l_id_file_0011">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <!-- <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Prueba de presión en equipo hidrantes, firmada por la empresa que realice los trabajos.*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0012" id="id_file_0012" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0012">
                    <p class="texto" id="l_id_file_0012">Selecciona un archivo PDF</p>

                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div> -->



                <div class="row mx-1">
                <h2>Cartas sobre las condiciones en las que se encuentra la infraestructura del inmueble para la atención de emergencias.</h2>
                <legend class="form-label-custom mb-0">Carta bajo protesta de decir verdad indicando las características del Equipo de Alerta, Prevención y Combate de Incendios, firmada por el administrador o poseedor del inmueble*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0013" id="id_file_0013" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0013">
                    <p class="texto" id="l_id_file_0013">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Carta bajo protesta de decir verdad indicando las características del Equipo de Primeros Auxilios firmada por el administrador o poseedor del inmueble*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0014" id="id_file_0014" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0014">
                    <p class="texto" id="l_id_file_0014">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Carta responsiva del sistema de alertamiento sísmico que reciba la señal oficial del Gobierno de la Ciudad de México, aprobado por la Secretaría conforme a la Norma Técnica correspondiente.*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0015" id="id_file_0015" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0015">
                    <p class="texto" id="l_id_file_0015">Selecciona un archivo PDF</p>

                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <h2>Documentos generados por el Comité Interno de Protección Civil</h2>
                <legend class="form-label-custom mb-0">Acta Constitutiva de la Integración del Comité Interno actualizado*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0037" id="id_file_0037" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0037">
                    <p class="texto" id="l_id_file_0037">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Organigrama del Comité Interno de Protección Civil*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0016" id="id_file_0016" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0016">
                    <p class="texto" id="l_id_file_0016">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Calendario de Capacitación*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0017" id="id_file_0017" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0017">
                    <p class="texto" id="l_id_file_0017">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Bitácoras del Programa de Capacitación*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0018" id="id_file_0018" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0018">
                    <p class="texto" id="l_id_file_0018">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Cronograma y bitácora de simulacros*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0019" id="id_file_0019" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0019">
                    <p class="texto" id="l_id_file_0019">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>


                <div class="row mx-1">
                <h2>Documentos que avalan el mantenimiento del Inmueble y de la Infraestructura para la atención de las emergencias</h2>
                <legend class="form-label-custom mb-0">Programa Anual de Mantenimiento a las Instalaciones (Eléctricas, gas L.P, sistemas fjos, etc.)*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0038" id="id_file_0038" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0038">
                    <p class="texto" id="l_id_file_0038">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                  <legend class="form-label-custom mt-3 mb-0">Organigrama del Comité Interno de Protección Civil*</legend>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="id_file_0020" id="id_file_0020" accept=".pdf" lang="es" autofocus >
                    <label class="custom-file-label" for="id_file_0020">
                      <p class="texto" id="l_id_file_0020">Selecciona un archivo PDF</p>
                    </label>
                    <div class="invalid-feedback mt-3">
                      Selecciona un archivo PDF
                    </div>
                  </div>
                  </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Calendario de Capacitación*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0021" id="id_file_0021" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0021">
                    <p class="texto" id="l_id_file_0021">Selecciona un archivo PDF</p>

                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Bitácoras del Programa de Capacitación*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0022" id="id_file_0022" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0022">
                    <p class="texto" id="l_id_file_0022">Selecciona un archivo PDF</p>

                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Cronograma y bitácora de simulacros*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0023" id="id_file_0023" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0023">
                    <p class="texto" id="l_id_file_0023">Selecciona un archivo PDF</p>

                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <h2>Croquis del inmueble completos</h2>
                <legend class="form-label-custom mb-0">Carta responsiva de extintores*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0039" id="id_file_0039" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0039">
                    <p class="texto" id="l_id_file_0039">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                  <legend class="form-label-custom mt-3 mb-0">Croquis de la ubicación del inmueble y sus alrededores*</legend>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="id_file_0024" id="id_file_0024" accept=".pdf" lang="es" autofocus >
                    <label class="custom-file-label" for="id_file_0024">
                      <p class="texto" id="l_id_file_0024">Selecciona un archivo PDF</p>
                    </label>
                    <div class="invalid-feedback mt-3">
                      Selecciona un archivo PDF
                    </div>
                  </div>
                  </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Croquis general del centro de trabajo*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0025" id="id_file_0025" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0025">
                    <p class="texto" id="l_id_file_0025">Selecciona un archivo PDF</p>

                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Croquis de distribución de áreas*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0026" id="id_file_0026" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0026">
                    <p class="texto" id="l_id_file_0026">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Croquis de ubicación de equipamiento a Grupos de Atención Especial*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0027" id="id_file_0027" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0027">
                    <p class="texto" id="l_id_file_0027">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Croquis de ubicación de botiquines de Primeros Auxilios*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0028" id="id_file_0028" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0028">
                    <p class="texto" id="l_id_file_0028">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Croquis de distribución de brigadistas*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0029" id="id_file_0029" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0029">
                    <p class="texto" id="l_id_file_0029">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Croquis de ubicación de equipos de alerta, prevención y combate de incendios*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0030" id="id_file_0030" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0030">
                    <p class="texto" id="l_id_file_0030">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Croquis de localización de riesgo eléctrico*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0031" id="id_file_0031" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0031">
                    <p class="texto" id="l_id_file_0031">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Croquis indicando la trayectoria de la Ruta de Evacuación*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0032" id="id_file_0032" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0032">
                    <p class="texto" id="l_id_file_0032">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Croquis de salidas y escaleras de emergencia*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0033" id="id_file_0033" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0033">
                    <p class="texto" id="l_id_file_0033">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Croquis de ubicación del sistema de alerta sísmica*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0034" id="id_file_0034" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0034">
                    <p class="texto" id="l_id_file_0034">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Croquis de ubicación de las Zonas de Menor Riesgo*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0035" id="id_file_0035" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0035">
                    <p class="texto" id="l_id_file_0035">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>


                <div class="row mx-1">
                <legend class="form-label-custom mt-3 mb-0">Croquis de la ubicación de las Zonas de Riesgo*</legend>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="id_file_0036" id="id_file_0036" accept=".pdf" lang="es" autofocus >
                  <label class="custom-file-label" for="id_file_0036">
                    <p class="texto" id="l_id_file_0036">Selecciona un archivo PDF</p>
                  </label>
                  <div class="invalid-feedback mt-3">
                    Selecciona un archivo PDF
                  </div>
                </div>
                </div>

                <div class="contenedor-boton justify-content-end seccion">
                  <button class="btn-01" type="submit" name="terminari">Termina registro de inmueble</button>
                  <button class="btn-01" type="submit" name="guardar_seguir"
                                id="guardar_seguir" data-posicion="documentos"  data-siguienteseccion="comite_interno"  data-siguiente="coordinacion" >Ir a siguiente sección</button>
                </div>

              </form>
            </div> <!-- Cierra tab-pane Documentos anexos -->

            <!-- Inicia menú Comité Interno -->

            <!-- Coordinación general -->
            <div class="tab-pane fade" id="v-pills-coordinacion" role="tabpanel" aria-labelledby="v-pills-coordinacion-tab">
              <form id='f_comitei' >
               <h2 class="my-lg-0">Comité Interno</h2>

                <div class="row">
                  <div class="col-md-12 mb-3">
                    <label class="form-label-custom" for="id_figuras">Puesto en el Comité</label>
                    <select class="form-control form-control-custom" id="id_figuras" name="id_figuras" required>
                      <option disabled value="" selected hidden>Selecciona una</option>
{{--
                      @foreach ($figuras as $ts)
                       <option data-unapersona={{ $ts->unapersona ? "1" : "0" }}   value="{{ $ts->id }}">{{ $ts->descripcion}}</option>
                      @endforeach
--}}

                    </select>
                    <div class="invalid-feedback">
                      Selecciona una opción
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="nombre_coordinador">Nombre(s)*</label>
                    <input class="form-control form-control-custom" type="text" name="ci_nombres" id="ci_nombres" value="" placeholder="Escribe su(s) nombre(s)" autofocus required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido1_coordinador">Primer apellido*</label>
                    <input class="form-control form-control-custom" type="text" name="ci_ape_pat" id="ci_ape_pat" value="" placeholder="Escribe su primer apellido" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido2_coordinador">Segundo Apellido</label>
                    <input class="form-control form-control-custom" type="text" name="ci_ape_mat" id="ci_ape_mat" value="" placeholder="Escribe su segundo apellido">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="cargo_coordinador">Cargo*</label>
                    <input class="form-control form-control-custom" type="text" name="ci_cargo" id="ci_cargo" value="" placeholder="Escribe su cargo" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="curp_coordinador">CURP*</label>
                    <input class="form-control form-control-custom" type="text" name="ci_curp" id="ci_curp" value="" placeholder="AAAA112233BCD22" pattern="^([A-ZÑ\x26]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])(M|H)([A-ZÑx26]{2})([A-ZÑx26]{3})(\d{2}))?$" maxlength="18" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir correctamente tu CURP
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <legend class="form-label-custom mb-1" class="form-label-custom">Constancias de capacitación* (PDF) </legend>
                    <div class="custom-file">
                         <input type="file" class="custom-file-input" name="s_id_file_0041" id="s_id_file_0041" accept=".pdf" lang="es" >
                         <label class="custom-file-label" for="s_id_file_0041">
                              <p class="texto" id="l_s_id_file_0041" >Selecciona un archivo PDF</p>
                         </label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                  </div>
                  <div class="col-md-6 mb-3">
                    <div class="contenedor-boton justify-content-end seccion">
                      <button class="btn-01" type="submit" name="guardarpuesto" id="guardarpuesto">
                          Añadir puesto
                      </button>
                    </div>
                  </div>
                </div>


                <div class="contenedor-boton justify-content-end seccion">
                  <button class="btn-01" type="submit" name="terminari">Termina registro de inmueble</button>
                  <!-- <button class="btn-01" type="submit" name="guardar_seguir">Guardar y seguir editando</button> -->
                </div>

              </form>
            </div>

            <!-- Inicia tab jefaturas -->

            <div class="tab-pane fade" id="v-pills-jefaturas" role="tabpanel" aria-labelledby="v-pills-jefaturas-tab">
              <form>
                <h2 class="my-0">Jefe de edificio</h2>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="nombre_jedificio">Nombre(s)*</label>
                    <input class="form-control form-control-custom" type="text" name="nombre_jedificio" id="nombre_jedificio" value="" placeholder="Escribe su(s) nombre(s)" autofocus required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido1_jedificio">Primer apellido*</label>
                    <input class="form-control form-control-custom" type="text" name="apellido1_jedificio" id="apellido1_jedificio" value="" placeholder="Escribe su primer apellido" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido2_jedificio">Segundo Apellido</label>
                    <input class="form-control form-control-custom" type="text" name="apellido2_jedificio" value="" id="apellido2_jedificio" placeholder="Escribe su segundo apellido">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="cargo_jedificio">Cargo*</label>
                    <input class="form-control form-control-custom" type="text" name="cargo_jedificio" id="cargo_jedificio" value="" placeholder="Escribe su cargo" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="curp_jedificio">CURP*</label>
                    <input class="form-control form-control-custom" type="text" name="curp_jedificio" value="" id="curp_jedificio" placeholder="AAAA112233BCD22" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <legend class="form-label-custom mb-1">Constancias de capacitación* (PDF) </legend>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="seleccionar_archivo40" accept=".pdf" lang="es">
                      <label class="custom-file-label" for="seleccionar_archivo40">
                        <p>Selecciona un archivo PDF</p>
                      </label>
                    </div>
                  </div>
                </div>

                <h2 class="mb-0">Jefe de seguridad</h2>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="nombre_jseguridad">Nombre(s)*</label>
                    <input class="form-control form-control-custom" type="text" name="nombre_jseguridad" id="nombre_jseguridad" value="" placeholder="Escribe su(s) nombre(s)" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido1_jseguridad">Primer apellido*</label>
                    <input class="form-control form-control-custom" type="text" name="apellido1_jseguridad" id="apellido1_jseguridad" value="" placeholder="Escribe su primer apellido" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido2_jseguridad">Segundo Apellido</label>
                    <input class="form-control form-control-custom" type="text" name="apellido2_jseguridad" value="" id="apellido2_jseguridad" placeholder="Escribe su segundo apellido">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label  class="form-label-custom" for="cargo_jseguridad">Cargo*</label>
                    <input class="form-control form-control-custom" type="text" name="cargo_jseguridad" id="cargo_jseguridad" value="" placeholder="Escribe su cargo" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="curp_jseguridad">CURP*</label>
                    <input class="form-control form-control-custom" type="text" name="curp_jseguridad" value="" id="curp_jseguridad" placeholder="AAAA112233BCD22" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <legend class="form-label-custom mb-1">Constancias de capacitación* (PDF) </legend>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="seleccionar_archivo41" accept=".pdf" lang="es">
                      <label class="custom-file-label" for="seleccionar_archivo41">
                        <p>Selecciona un archivo PDF</p>
                      </label>
                    </div>
                  </div>
                </div>

                <h2 class="mb-0">Jefe de mantenimiento</h2>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="nombre_jmantenimiento">Nombre(s)*</label>
                    <input class="form-control form-control-custom" type="text" name="nombre_jmantenimiento" id="nombre_jmantenimiento" value="" placeholder="Escribe su(s) nombre(s)" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido1_jmantenimiento">Primer apellido*</label>
                    <input class="form-control form-control-custom" type="text" name="apellido1_jmantenimiento" id="apellido1_jmantenimiento" value="" placeholder="Escribe su primer apellido" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido2_jmantenimiento">Segundo Apellido</label>
                    <input class="form-control form-control-custom" type="text" name="apellido2_jmantenimiento" value="" id="apellido2_jmantenimiento" placeholder="Escribe su segundo apellido">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="cargo_jmantenimiento">Cargo*</label>
                    <input class="form-control form-control-custom" type="text" name="cargo_jmantenimiento" id="cargo_jmantenimiento" value="" placeholder="Escribe su cargo" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="curp_jmantenimiento">CURP*</label>
                    <input class="form-control form-control-custom" type="text" name="curp_jmantenimiento" value="" id="curp_jmantenimiento" placeholder="AAAA112233BCD22" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <legend class="form-label-custom mb-1">Constancias de capacitación* (PDF) </legend>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="seleccionar_archivo42" accept=".pdf" lang="es">
                      <label class="custom-file-label" for="seleccionar_archivo42">
                        <p>Selecciona un archivo PDF</p>
                      </label>
                    </div>
                  </div>
                </div>

                <h2 class="mb-0">Jefe de piso (obligatorio) - Uno por cada piso del inmueble -</h2>
                <h5>Piso 01</h5>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="nombre_jpiso">Nombre(s)*</label>
                    <input class="form-control form-control-custom" type="text" name="nombre_jpiso" id="nombre_jpiso" value="" placeholder="Escribe su(s) nombre(s)" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido1_jpiso">Primer apellido*</label>
                    <input class="form-control form-control-custom" type="text" name="apellido1_jpiso" id="apellido1_jpiso" value="" placeholder="Escribe su primer apellido" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido2_jpiso">Segundo Apellido</label>
                    <input class="form-control form-control-custom" type="text" name="apellido2_jpiso" value="" id="apellido2_jpiso" placeholder="Escribe su segundo apellido">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="cargo_jpiso">Cargo*</label>
                    <input class="form-control form-control-custom" type="text" name="cargo_jpiso" id="cargo_jpiso" value="" placeholder="Escribe su cargo" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="curp_jpiso">CURP*</label>
                    <input class="form-control form-control-custom" type="text" name="curp_jpiso" value="" id="curp_jpiso" placeholder="AAAA112233BCD22" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <legend class="form-label-custom mb-1">Constancias de capacitación* (PDF) </legend>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="seleccionar_archivo43" accept=".pdf" lang="es">
                      <label class="custom-file-label" for="seleccionar_archivo43">
                        <p>Selecciona un archivo PDF</p>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="contenedor-boton justify-content-end">
                  <button class="btn-punto" type="submit" name="punto_reunion">
                    <p>Agregar piso</p>
                    <img src="src/img/agregar.svg" alt="">
                  </button>
                </div>


                <h2 class="mb-0">Jefe de brigada de primeros auxilios</h2>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="nombre_jauxilios">Nombre(s)*</label>
                    <input class="form-control form-control-custom" type="text" name="nombre_jauxilios" id="nombre_jauxilios" value="" placeholder="Escribe su(s) nombre(s)" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido1_jauxilios">Primer apellido*</label>
                    <input class="form-control form-control-custom" type="text" name="apellido1_jauxilios" id="apellido1_jauxilios" value="" placeholder="Escribe su primer apellido" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido2_jauxilios">Segundo Apellido</label>
                    <input class="form-control form-control-custom" type="text" name="apellido2_jauxilios" value="" id="apellido2_jauxilios" placeholder="Escribe su segundo apellido">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="cargo_jauxilios">Cargo*</label>
                    <input class="form-control form-control-custom" type="text" name="cargo_jauxilios" id="cargo_jauxilios" value="" placeholder="Escribe su cargo" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="curp_jauxilios">CURP*</label>
                    <input class="form-control form-control-custom" type="text" name="curp_jauxilios" value="" id="curp_jauxilios" placeholder="AAAA112233BCD22" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <legend class="form-label-custom mb-1">Constancias de capacitación* (PDF) </legend>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="seleccionar_archivo44" accept=".pdf" lang="es">
                      <label class="custom-file-label" for="seleccionar_archivo44">
                        <p>Selecciona un archivo PDF</p>
                      </label>
                    </div>
                  </div>
                </div>

                <h2 class="mb-0">Jefe de brigada de evacuación</h2>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="nombre_jevacuacion">Nombre(s)*</label>
                    <input class="form-control form-control-custom" type="text" name="nombre_jevacuacion" id="nombre_jevacuacion" value="" placeholder="Escribe su(s) nombre(s)" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido1_jevacuacion">Primer apellido*</label>
                    <input class="form-control form-control-custom" type="text" name="apellido1_jevacuacion" id="apellido1_jevacuacion" value="" placeholder="Escribe su primer apellido" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido2_jevacuacion">Segundo Apellido</label>
                    <input class="form-control form-control-custom" type="text" name="apellido2_jevacuacion" value="" id="apellido2_jevacuacion" placeholder="Escribe su segundo apellido">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="cargo_jevacuacion">Cargo*</label>
                    <input class="form-control form-control-custom" type="text" name="cargo_jevacuacion" id="cargo_jevacuacion" value="" placeholder="Escribe su cargo" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="curp_jevacuacion">CURP*</label>
                    <input class="form-control form-control-custom" type="text" name="curp_jevacuacion" value="" id="curp_jevacuacion" placeholder="AAAA112233BCD22" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <legend class="form-label-custom mb-1">Constancias de capacitación* (PDF) </legend>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="seleccionar_archivo45" accept=".pdf" lang="es">
                      <label class="custom-file-label" for="seleccionar_archivo45">
                        <p>Selecciona un archivo PDF</p>
                      </label>
                    </div>
                  </div>
                </div>

                <h2 class="mb-0">Jefe de brigada de prevención, combate y extinción de incendios</h2>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="nombre_jprevencion">Nombre(s)*</label>
                    <input class="form-control form-control-custom" type="text" name="nombre_jprevencion" id="nombre_jprevencion" value="" placeholder="Escribe su(s) nombre(s)" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido1_jprevencion">Primer apellido*</label>
                    <input class="form-control form-control-custom" type="text" name="apellido1_jprevencion" id="apellido1_jprevencion" value="" placeholder="Escribe su primer apellido" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido2_jprevencion">Segundo Apellido</label>
                    <input class="form-control form-control-custom" type="text" name="apellido2_jprevencion" value="" id="apellido2_jprevencion" placeholder="Escribe su segundo apellido">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="cargo_jprevencion">Cargo*</label>
                    <input class="form-control form-control-custom" type="text" name="cargo_jprevencion" id="cargo_jprevencion" value="" placeholder="Escribe su cargo" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="curp_jprevencion">CURP*</label>
                    <input class="form-control form-control-custom" type="text" name="curp_jprevencion" value="" id="curp_jprevencion" placeholder="AAAA112233BCD22" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <legend class="form-label-custom mb-1">Constancias de capacitación* (PDF) </legend>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="seleccionar_archivo46" accept=".pdf" lang="es">
                      <label class="custom-file-label" for="seleccionar_archivo46">
                        <p>Selecciona un archivo PDF</p>
                      </label>
                    </div>
                  </div>
                </div>

                <h2 class="mb-0">Jefe de brigada de comunicación</h2>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="nombre_jcomunicacion">Nombre(s)*</label>
                    <input class="form-control form-control-custom" type="text" name="nombre_jcomunicacion" id="nombre_jcomunicacion" value="" placeholder="Escribe su(s) nombre(s)" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido1_jcomunicacion">Primer apellido*</label>
                    <input class="form-control form-control-custom" type="text" name="apellido1_jcomunicacion" id="apellido1_jcomunicacion" value="" placeholder="Escribe su primer apellido" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido2_jcomunicacion">Segundo Apellido</label>
                    <input class="form-control form-control-custom" type="text" name="apellido2_jcomunicacion" value="" id="apellido2_jcomunicacion" placeholder="Escribe su segundo apellido">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="cargo_jcomunicacion">Cargo*</label>
                    <input class="form-control form-control-custom" type="text" name="cargo_jcomunicacion" id="cargo_jcomunicacion" value="" placeholder="Escribe su cargo" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="curp_jcomunicacion">CURP*</label>
                    <input class="form-control form-control-custom" type="text" name="curp_jcomunicacion" value="" id="curp_jcomunicacion" placeholder="AAAA112233BCD22" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <legend class="form-label-custom mb-1">Constancias de capacitación* (PDF) </legend>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="seleccionar_archivo47" accept=".pdf" lang="es">
                      <label class="custom-file-label" for="seleccionar_archivo47">
                        <p>Selecciona un archivo PDF</p>
                      </label>
                    </div>
                  </div>
                </div>

                <h2 class="mb-0">Jefe de brigada del grupo de apoyo especial</h2>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="nombre_japoyo">Nombre(s)*</label>
                    <input class="form-control form-control-custom" type="text" name="nombre_japoyo" id="nombre_japoyo" value="" placeholder="Escribe su(s) nombre(s)" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido1_japoyo">Primer apellido*</label>
                    <input class="form-control form-control-custom" type="text" name="apellido1_japoyo" id="apellido1_japoyo" value="" placeholder="Escribe su primer apellido" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido2_japoyo">Segundo Apellido</label>
                    <input class="form-control form-control-custom" type="text" name="apellido2_japoyo" value="" id="apellido2_japoyo" placeholder="Escribe su segundo apellido">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="cargo_japoyo">Cargo*</label>
                    <input class="form-control form-control-custom" type="text" name="cargo_japoyo" id="cargo_japoyo" value="" placeholder="Escribe su cargo" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="curp_japoyo">CURP*</label>
                    <input class="form-control form-control-custom" type="text" name="curp_japoyo" value="" id="curp_japoyo" placeholder="AAAA112233BCD22" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <legend class="form-label-custom mb-1">Constancias de capacitación* (PDF) </legend>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="seleccionar_archivo48" accept=".pdf" lang="es">
                      <label class="custom-file-label" for="seleccionar_archivo48">
                        <p>Selecciona un archivo PDF</p>
                      </label>
                    </div>
                  </div>
                </div>

                <h2 class="mb-0">Jefe de brigada multifuncional</h2>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="nombre_jmultifuncional">Nombre(s)*</label>
                    <input class="form-control form-control-custom" type="text" name="nombre_jmultifuncional" id="nombre_jmultifuncional" value="" placeholder="Escribe su(s) nombre(s)" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido1_jmultifuncional">Primer apellido*</label>
                    <input class="form-control form-control-custom" type="text" name="apellido1_jmultifuncional" id="apellido1_jmultifuncional" value="" placeholder="Escribe su primer apellido" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido2_jmultifuncional">Segundo Apellido</label>
                    <input class="form-control form-control-custom" type="text" name="apellido2_jmultifuncional" value="" id="apellido2_jmultifuncional" placeholder="Escribe su segundo apellido">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="cargo_jmultifuncional">Cargo*</label>
                    <input class="form-control form-control-custom" type="text" name="cargo_jmultifuncional" id="cargo_jmultifuncional" value="" placeholder="Escribe su cargo" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="curp_jmultifuncional">CURP*</label>
                    <input class="form-control form-control-custom" type="text" name="curp_jmultifuncional" value="" id="curp_jmultifuncional" placeholder="AAAA112233BCD22" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <legend class="form-label-custom mb-1">Constancias de capacitación* (PDF) </legend>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="seleccionar_archivo49" accept=".pdf" lang="es">
                      <label class="custom-file-label" for="seleccionar_archivo49">
                        <p>Selecciona un archivo PDF</p>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="contenedor-boton justify-content-end seccion">
                  <button class="btn-01" type="submit" name="terminari">Termina registro de inmueble</button>
                  <button class="btn-01" type="submit" name="guardar_seguir">Guardar y seguir editando</button>
                </div>
              </form>
            </div> <!-- Termina tab Jefaturas -->

            <!-- Inicia Brigadistas de primeros auxilios -->

            <div class="tab-pane fade" id="v-pills-brigadistas-primeros" role="tabpanel" aria-labelledby="v-pills-brigadistas-primeros-tab">
              <form>
                <h2 class="my-0">Brigadista 01</h2>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="nombre_brigadistapa">Nombre(s)*</label>
                    <input class="form-control form-control-custom" type="text" name="nombre_brigadistapa" id="nombre_brigadistapa" value="" placeholder="Escribe su(s) nombre(s)" autofocus required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido1_brigadistapa">Primer apellido*</label>
                    <input class="form-control form-control-custom" type="number" name="apellido1_brigadistapa" id="apellido1_brigadistapa" value="" placeholder="Escribe su primer apellido" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido2_brigadistapa">Segundo Apellido</label>
                    <input class="form-control form-control-custom" type="text" name="apellido2_brigadistapa" value="" id="apellido2_brigadistapa" placeholder="Escribe su segundo apellido">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="cargo_brigadistapa">Cargo*</label>
                    <input class="form-control form-control-custom" type="number" name="cargo_brigadistapa" id="cargo_brigadistapa" value="" placeholder="Escribe su cargo" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="curp_brigadistapa">CURP*</label>
                    <input class="form-control form-control-custom" type="text" name="curp_brigadistapa" value="" id="curp_brigadistapa" placeholder="AAAA112233BCD22" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <legend class="form-label-custom mb-1">Constancias de capacitación* (PDF) </legend>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="seleccionar_archivo50" accept=".pdf" lang="es">
                      <label class="custom-file-label" for="seleccionar_archivo50">
                        <p>Selecciona un archivo PDF</p>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="contenedor-boton justify-content-end">
                  <button class="btn-punto" type="submit" name="punto_reunion">
                    <p>Añadir brigadista</p>
                    <img src="src/img/agregar.svg" alt="">
                  </button>
                </div>

                <div class="contenedor-boton justify-content-end seccion">
                  <button class="btn-01" type="submit" name="terminari">Termina registro de inmueble</button>
                  <button class="btn-01" type="submit" name="guardar_seguir">Guardar y seguir editando</button>
                </div>
              </form>
            </div>

            <div class="tab-pane fade" id="v-pills-brigadistas-evacuacion" role="tabpanel" aria-labelledby="v-pills-brigadistas-evacuacion-tab">
              <form>
                <h2 class="my-0">Brigadista 01</h2>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="nombre_brigadistaev">Nombre(s)*</label>
                    <input class="form-control form-control-custom" type="text" name="nombre_brigadistaev" id="nombre_brigadistaev" value="" placeholder="Escribe su(s) nombre(s)" autofocus required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido1_brigadistaev">Primer apellido*</label>
                    <input class="form-control form-control-custom" type="number" name="apellido1_brigadistaev" id="apellido1_brigadistaev" value="" placeholder="Escribe su primer apellido" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido2_brigadistaev">Segundo Apellido</label>
                    <input class="form-control form-control-custom" type="text" name="apellido2_brigadistaev" value="" id="apellido2_brigadistaev" placeholder="Escribe su segundo apellido">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="cargo_brigadistaev">Cargo*</label>
                    <input class="form-control form-control-custom" type="number" name="cargo_brigadistaev" id="cargo_brigadistaev" value="" placeholder="Escribe su cargo" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="curp_brigadistaev">CURP*</label>
                    <input class="form-control form-control-custom" type="text" name="curp_brigadistaev" value="" id="curp_brigadistaev" placeholder="AAAA112233BCD22" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <legend class="form-label-custom mb-1">Constancias de capacitación* (PDF) </legend>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="seleccionar_archivo51" accept=".pdf" lang="es">
                      <label class="custom-file-label" for="seleccionar_archivo51">
                        <p>Selecciona un archivo PDF</p>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="contenedor-boton justify-content-end">
                  <button class="btn-punto" type="submit" name="punto_reunion">
                    <p>Añadir brigadista</p>
                    <img src="src/img/agregar.svg" alt="">
                  </button>
                </div>

                <div class="contenedor-boton justify-content-end seccion">
                  <button class="btn-01" type="submit" name="terminari">Termina registro de inmueble</button>
                  <button class="btn-01" type="submit" name="guardar_seguir">Guardar y seguir editando</button>
                </div>
              </form>
            </div>

            <div class="tab-pane fade" id="v-pills-brigadistas-prevencion" role="tabpanel" aria-labelledby="v-pills-brigadistas-prevencion-tab">
              <form class="formulario" action="index.html" method="post">
                <h2 class="my-0">Brigadista 01</h2>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="nombre_brigadistapr">Nombre(s)*</label>
                    <input class="form-control form-control-custom" type="text" name="nombre_brigadistapr" id="nombre_brigadistapr" value="" placeholder="Escribe su(s) nombre(s)" autofocus required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido1_brigadistapr">Primer apellido*</label>
                    <input class="form-control form-control-custom" type="number" name="apellido1_brigadistapr" id="apellido1_brigadistapr" value="" placeholder="Escribe su primer apellido" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido2_brigadistapr">Segundo Apellido</label>
                    <input class="form-control form-control-custom" type="text" name="apellido2_brigadistapr" value="" id="apellido2_brigadistapr" placeholder="Escribe su segundo apellido">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="cargo_brigadistapr">Cargo*</label>
                    <input class="form-control form-control-custom" type="number" name="cargo_brigadistapr" id="cargo_brigadistapr" value="" placeholder="Escribe su cargo" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="curp_brigadistapr">CURP*</label>
                    <input class="form-control form-control-custom" type="text" name="curp_brigadistapr" value="" id="curp_brigadistapr" placeholder="AAAA112233BCD22" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <legend class="form-label-custom mb-1">Constancias de capacitación* (PDF) </legend>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="seleccionar_archivo52" accept=".pdf" lang="es">
                      <label class="custom-file-label" for="seleccionar_archivo52">
                        <p>Selecciona un archivo PDF</p>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="contenedor-boton justify-content-end">
                  <button class="btn-punto" type="submit" name="punto_reunion">
                    <p>Añadir brigadista</p>
                    <img src="src/img/agregar.svg" alt="">
                  </button>
                </div>

                <div class="contenedor-boton justify-content-end seccion">
                  <button class="btn-01" type="submit" name="terminari">Termina registro de inmueble</button>
                  <button class="btn-01" type="submit" name="guardar_seguir">Guardar y seguir editando</button>
                </div>
              </form>
            </div>

            <div class="tab-pane fade" id="v-pills-brigadistas-comunicacion" role="tabpanel" aria-labelledby="v-pills-brigadistas-comunicacion-tab">
              <form class="formulario" action="index.html" method="post">
                <h2 class="my-0">Brigadista 01</h2>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="nombre_brigadistacn">Nombre(s)*</label>
                    <input class="form-control form-control-custom" type="text" name="nombre_brigadistacn" id="nombre_brigadistacn" value="" placeholder="Escribe su(s) nombre(s)" autofocus required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido1_brigadistacn">Primer apellido*</label>
                    <input class="form-control form-control-custom" type="number" name="apellido1_brigadistacn" id="apellido1_brigadistacn" value="" placeholder="Escribe su primer apellido" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido2_brigadistacn">Segundo Apellido</label>
                    <input class="form-control form-control-custom" type="text" name="apellido2_brigadistacn" value="" id="apellido2_brigadistacn" placeholder="Escribe su segundo apellido">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="cargo_brigadistacn">Cargo*</label>
                    <input class="form-control form-control-custom" type="number" name="cargo_brigadistacn" id="cargo_brigadistacn" value="" placeholder="Escribe su cargo" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="curp_brigadistacn">CURP*</label>
                    <input class="form-control form-control-custom" type="text" name="curp_brigadistacn" value="" id="curp_brigadistacn" placeholder="AAAA112233BCD22" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <legend class="form-label-custom mb-1">Constancias de capacitación* (PDF) </legend>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="seleccionar_archivo53" accept=".pdf" lang="es">
                      <label class="custom-file-label" for="seleccionar_archivo53">
                        <p>Selecciona un archivo PDF</p>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="contenedor-boton justify-content-end">
                  <button class="btn-punto" type="submit" name="punto_reunion">
                    <p>Añadir brigadista</p>
                    <img src="src/img/agregar.svg" alt="">
                  </button>
                </div>

                <div class="contenedor-boton justify-content-end seccion">
                  <button class="btn-01" type="submit" name="terminari">Termina registro de inmueble</button>
                  <button class="btn-01" type="submit" name="guardar_seguir">Guardar y seguir editando</button>
                </div>
              </form>
            </div>

            <div class="tab-pane fade" id="v-pills-brigadistas-apoyo" role="tabpanel" aria-labelledby="v-pills-brigadistas-apoyo-tab">
              <form class="formulario" action="index.html" method="post">
                <h2 class="my-0">Brigadista 01</h2>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="nombre_brigadistapy">Nombre(s)*</label>
                    <input class="form-control form-control-custom" type="text" name="nombre_brigadistapy" id="nombre_brigadistapy" value="" placeholder="Escribe su(s) nombre(s)" autofocus required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido1_brigadistapy">Primer apellido*</label>
                    <input class="form-control form-control-custom" type="number" name="apellido1_brigadistapy" id="apellido1_brigadistapy" value="" placeholder="Escribe su primer apellido" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido2_brigadistapy">Segundo Apellido</label>
                    <input class="form-control form-control-custom" type="text" name="apellido2_brigadistapy" value="" id="apellido2_brigadistapy" placeholder="Escribe su segundo apellido">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="cargo_brigadistapy">Cargo*</label>
                    <input class="form-control form-control-custom" type="number" name="cargo_brigadistapy" id="cargo_brigadistapy" value="" placeholder="Escribe su cargo" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="curp_brigadistapy">CURP*</label>
                    <input class="form-control form-control-custom" type="text" name="curp_brigadistapy" value="" id="curp_brigadistapy" placeholder="AAAA112233BCD22" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <legend class="form-label-custom mb-1">Constancias de capacitación* (PDF) </legend>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="seleccionar_archivo54" accept=".pdf" lang="es">
                      <label class="custom-file-label" for="seleccionar_archivo54">
                        <p>Selecciona un archivo PDF</p>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="contenedor-boton justify-content-end">
                  <button class="btn-punto" type="submit" name="punto_reunion">
                    <p>Añadir brigadista</p>
                    <img src="src/img/agregar.svg" alt="">
                  </button>
                </div>

                <div class="contenedor-boton justify-content-end seccion">
                  <button class="btn-01" type="submit" name="terminari">Termina registro de inmueble</button>
                  <button class="btn-01" type="submit" name="guardar_seguir">Guardar y seguir editando</button>
                </div>
              </form>
            </div>

            <div class="tab-pane fade" id="v-pills-brigadistas-psicosocial" role="tabpanel" aria-labelledby="v-pills-brigadistas-psicosocial-tab">
              <form class="formulario" action="index.html" method="post">
                <h2 class="my-0">Brigadista 01</h2>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="nombre_brigadistamf">Nombre(s)*</label>
                    <input class="form-control form-control-custom" type="text" name="nombre_brigadistamf" id="nombre_brigadistamf" value="" placeholder="Escribe su(s) nombre(s)" autofocus required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido1_brigadistamf">Primer apellido*</label>
                    <input class="form-control form-control-custom" type="number" name="apellido1_brigadistamf" id="apellido1_brigadistamf" value="" placeholder="Escribe su primer apellido" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido2_brigadistamf">Segundo Apellido</label>
                    <input class="form-control form-control-custom" type="text" name="apellido2_brigadistamf" value="" id="apellido2_brigadistamf" placeholder="Escribe su segundo apellido">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="cargo_brigadistamf">Cargo*</label>
                    <input class="form-control form-control-custom" type="number" name="cargo_brigadistamf" id="cargo_brigadistamf" value="" placeholder="Escribe su cargo" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="curp_brigadistamf">CURP*</label>
                    <input class="form-control form-control-custom" type="text" name="curp_brigadistamf" value="" id="curp_brigadistamf" placeholder="AAAA112233BCD22" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <legend class="form-label-custom mb-1">Constancias de capacitación* (PDF) </legend>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="seleccionar_archivo" accept=".pdf" lang="es">
                      <label class="custom-file-label" for="seleccionar_archivo">
                        <p>Selecciona un archivo PDF</p>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="contenedor-boton justify-content-end">
                  <button class="btn-punto" type="submit" name="punto_reunion">
                    <p>Añadir brigadista</p>
                    <img src="src/img/agregar.svg" alt="">
                  </button>
                </div>

                <div class="contenedor-boton justify-content-end seccion">
                  <button class="btn-01" type="submit" name="terminari">Termina registro de inmueble</button>
                  <button class="btn-01" type="submit" name="guardar_seguir">Guardar y seguir editando</button>
                </div>
              </form>
            </div>

            <div class="tab-pane fade" id="v-pills-brigadistas-multifuncional" role="tabpanel" aria-labelledby="v-pills-brigadistas-multifuncional-tab">
              <form class="formulario" action="index.html" method="post">
                <h2 class="my-0">Brigadista 01</h2>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="nombre_brigadistamf">Nombre(s)*</label>
                    <input class="form-control form-control-custom" type="text" name="nombre_brigadistamf" id="nombre_brigadistamf" value="" placeholder="Escribe su(s) nombre(s)" autofocus required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido1_brigadistamf">Primer apellido*</label>
                    <input class="form-control form-control-custom" type="number" name="apellido1_brigadistamf" id="apellido1_brigadistamf" value="" placeholder="Escribe su primer apellido" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="apellido2_brigadistamf">Segundo Apellido</label>
                    <input class="form-control form-control-custom" type="text" name="apellido2_brigadistamf" value="" id="apellido2_brigadistamf" placeholder="Escribe su segundo apellido">
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="cargo_brigadistamf">Cargo*</label>
                    <input class="form-control form-control-custom" type="number" name="cargo_brigadistamf" id="cargo_brigadistamf" value="" placeholder="Escribe su cargo" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="curp_brigadistamf">CURP*</label>
                    <input class="form-control form-control-custom" type="text" name="curp_brigadistamf" value="" id="curp_brigadistamf" placeholder="AAAA112233BCD22" required>
                  </div>

                  <div class="col-md-6 mb-3">
                    <legend class="form-label-custom mb-1">Constancias de capacitación* (PDF) </legend>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="seleccionar_archivo" accept=".pdf" lang="es">
                      <label class="custom-file-label" for="seleccionar_archivo">
                        <p>Selecciona un archivo PDF</p>
                      </label>
                    </div>
                  </div>
                </div>

                <div class="contenedor-boton justify-content-end">
                  <button class="btn-punto" type="submit" name="punto_reunion">
                    <p>Añadir brigadista</p>
                    <img src="src/img/agregar.svg" alt="">
                  </button>
                </div>

                <div class="contenedor-boton justify-content-end seccion">
                  <button class="btn-01" type="submit" name="terminari">Termina registro de inmueble</button>
                  <button class="btn-01" type="submit" name="guardar_seguir">Guardar y seguir editando</button>
                </div>
              </form>
            </div>

          </div> <!-- Cierra tabContent -->
        </div> <!-- Cerrar columna derecha -->
      </div> <!-- Cerrar contenido -->
    </section>
  </main>
  @endsection
