@extends('layouts.layout')
@section('content')

  <main>
    <section class="container ">
      <div class="row d-flex flex-wrap seccion" >
           <div class="col-lg-10 Nuevo-expediente"></span> <span id="des_expediente">Nuevo expediente</span></div>
           <div class="col-lg-2 Campos-obligatorios d-flex justify-content-end">*Campos obligatorios</div>
      </div>

      <div class="row d-flex justify-content-center seccion">
        <div class="col-lg-4">

          <a class="btn-registro active" id="policias" data-toggle="tab" href="#c_policias" role="button">POLICIAS </a>
          <a class="btn-registro" id="infractores" data-toggle="tab" href="#c_infractores" role="button">INFRACTOR(ES) </a>
          <a class="btn-registro" id="b_motivo" data-toggle="tab" href="#c_motivo" role="button">MOTIVO DE PRESENTACIÓN </a>
          <a class="btn-registro" id="b_quienfirma" data-toggle="tab" href="#c_quienfirma" role="button">QUIEN FIRMA </a>


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
{{--
                  <div class="row col-md-4 mb-3  d-flex justify-content-end align-items-end">
                    <div id='crearexpediente'>
                        <label class="Crear-expediente mb-0 py-2" name="button" id="AgregarOtraBoleta">Agregar otra boleta</label>
                        <img class="Crear-expediente-svg" type="img" src="{{url('')}}/src/img/agregarexpediente.svg" />
                    </div>
                  </div>
--}}
        </div>
        <div class="Policias-remitentes mb-3">Policias remitentes</div>
        <div class="Policia-remitente">Policia remitente 01</div>

                <div class="row">
                  <div class="col-md-6 mb-1">
                    <label class="form-label-custom" for="placa1">*Número de empleado (placa de policia):</label>
                    <input type="number" name="placa1" id="placa1" class="form-control form-control-custom" value="" placeholder="Escribe el número de placa" maxlength="15" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                  <div class="col-md-6 mb-1">
                    <label class="form-label-custom" for="areadeadscripcion_1">*Área de adscripción:</label>
                    <input type="text" name="areadeadscripcion_1" id="areadeadscripcion_1" class="form-control form-control-custom" value="" placeholder="Escribe el área de adscripción" maxlength="30" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                </div>

        <div class="row  mb-1">
          <div class="col-md-4" id="nom">
            <label class="form-label-custom" for="nombres" id=""nombre_1"">*Nombre(s):</label>
            <input type="text" class="form-control form-control-custom street-names" id="nombre_1" maxlength="30" placeholder="Escribe el nombre(s)" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4" id="apa">
            <label class="form-label-custom" for="primer_apellido_1">*Primer apellido:</label>
            <input type="text" class="form-control form-control-custom names" id="primer_apellido_1" maxlength="30" placeholder="Escribe el primer apellido" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4" id="ama">
            <label class="form-label-custom" for="segundo_apellido_1">Segundo Apellido:</label>
            <input type="text" class="form-control form-control-custom names" id="segundo_apellido_1" maxlength="30" placeholder="Escribe el segundo apellido">
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
        </div>

                <div class="row mb-4">
                  <div class="col-md-4">
                    <label class="form-label-custom" for="id_mediotransporte_1">*Medio de transporte:</label>
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
                    <label class="form-label-custom" for="numerodepatrulla_1">*Número de patrulla:</label>
                    <input type="text" name="numerodepatrulla_1" id="numerodepatrulla_1" class="form-control form-control-custom numbers" value="" placeholder="Escribe el número de patrulla" maxlength="10" required>
                    <div class="invalid-feedback">
                      Maximo tres digitos
                    </div>
                  </div>

                </div>
        <div class="Policia-remitente mb-1">Policia remitente 02</div>

                <div class="row  mb-1">
                  <div class="col-md-6">
                    <label class="form-label-custom" for="placa2">*Numero de empleado (placa de policia):</label>
                    <input type="number" name="placa2" id="placa2" class="form-control form-control-custom" value="" placeholder="Escribe el número de placa" maxlength="15" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label class="form-label-custom" for="areadeadscripcion_2">*Área de adscripción:</label>
                    <input type="text" name="areadeadscripcion_2" id="areadeadscripcion_2" class="form-control form-control-custom" value="" placeholder="Escribe el área de adscripción" maxlength="30" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                </div>

        <div class="row  mb-1">
          <div class="col-md-4" id="nom">
            <label class="form-label-custom" for="nombre_2" >*Nombre(s):</label>
            <input type="text" class="form-control form-control-custom street-names" id="nombre_2" maxlength="30" placeholder="Escribe el nombre(s)" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4" id="apa">
            <label class="form-label-custom" for="primer_apellido_2">*Primer apellido:</label>
            <input type="text" class="form-control form-control-custom names" id="primer_apellido_2" maxlength="30" placeholder="Escribe el primer apellido" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4" id="ama">
            <label class="form-label-custom" for="segundo_apellido_2">Segundo Apellido:</label>
            <input type="text" class="form-control form-control-custom names" id="segundo_apellido_2" maxlength="30" placeholder="Escribe el segundo apellido">
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
        </div>

                <div class="row  mb-1">
                  <div class="col-md-4">
                    <label class="form-label-custom" for="id_mediotransporte_2">*Medio de transporte:</label>
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
                    <label class="form-label-custom" for="numerodepatrulla_2">*Número de patrulla:</label>
                    <input type="text" name="numerodepatrulla_2" id="numerodepatrulla_2" class="form-control form-control-custom numbers" value="" placeholder="Escribe el número de patrulla" maxlength="10" required>
                    <div class="invalid-feedback">
                      Maximo tres digitos
                    </div>
                  </div>

                </div>

                <div class="contenedor-boton justify-content-end seccion">
                  <button class="btn-01" type="submit" name="guardarexpediente" >Crear expediente</button>
                </div>
              </form>
            </div> <!-- Finaliza tabPane información general -->

            <div class="tab-pane fade" id="c_quienfirma" >
              <form id="f_quienfirma" >
        <div class="row">
          <div class="col-md-8 mb-3">
            <label class="form-label-custom" for="idjuez">*Juez</label>
            <select class="form-control form-control-custom" id="idjuez" name="idjuez" required>
              <option disabled value="" selected hidden>Selecciona una</option>
                      @foreach ($data['jueces'] as $juez)
                      <option value="{{ $juez->id }}">{{ $juez->nombrecompleto }}</option>
                      @endforeach
            </select>
            <div class="invalid-feedback">
              Selecciona una opción
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-8 mb-3">
            <label class="form-label-custom" for="idsecretario">*Secretario</label>
            <select class="form-control form-control-custom" id="idsecretario" name="idsecretario" required>
              <option disabled value="" selected hidden>Selecciona una</option>
                      @foreach ($data['secretarios'] as $secretario)
                      <option value="{{ $secretario->id }}">{{ $secretario->nombrecompleto }}</option>
                      @endforeach
            </select>
            <div class="invalid-feedback">
              Selecciona una opción
            </div>
          </div>
        </div>

                <div class="contenedor-boton justify-content-end seccion">
                  <button class="btn-01" type="submit" name="guardarexpediente" >Crear expediente</button>
                </div>



              </form>
            </div>


            <div class="tab-pane fade" id="c_motivo" >
              <form id="f_motivo" >
            <!-- Pan-Pane Domicilio -->
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="diahechos">*Fecha en que ocurrieron los hechos:</label>
                    <input type="date" name="diahechos" id="diahechos" class="form-control form-control-custom street-names" maxlength="12" value="{{ date('Y-m-d') }}" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="horahechos">*Hora en que ocurrieron los hechos:</label>
                    <input type="text" name="horahechos" id="horahechos" class="form-control form-control-custom" maxlength="5" value="" placeholder="00:00" pattern="([0-1]{1}[0-9]{1}|20|21|22|23):[0-5]{1}[0-9]{1}" required>
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
                    <label class="form-label-custom" for="exterior_h">No. exterior:</label>
                    <input type="text" name="exterior_h" id="exterior_h" class="form-control form-control-custom street-names" maxlength="10" value="" placeholder="00" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="interior_h">No. interior:</label>
                    <input type="text" name="interior_h" id="interior_h" class="form-control form-control-custom street-names" maxlength="10" value="" placeholder="00">
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                </div>

                <div class="row">

                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="cp_h">Código postal:</label>
                    <input type="text" name="cp_h" id="cp_h" class="form-control form-control-custom numbers" maxlength="5" value="" placeholder="00000" pattern="^[0-9]{4,5}$" required>
                    <div class="invalid-feedback">
                      Ingresa los cuatro o cinco dígitos de tu código postal
                    </div>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="colonia_h">Colonia:</label>
                    <input type="text" name="colonia_h" id="colonia_h" class="form-control form-control-custom street-names" maxlength="30" value="" placeholder="Escribe la colonia" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="id_alcaldia_h">*Alcaldía:</label>
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

                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="entrecalle_h">Entre que calle:</label>
                    <input type="text" name="cp_h" id="entrecalle_h" class="form-control form-control-custom street-names" maxlength="100" value="" placeholder="Escribe entre que calle" pattern="^[0-9]{4,5}$" >
                    <div class="invalid-feedback">
                      Ingresa los cuatro o cinco dígitos de tu código postal
                    </div>
                  </div>

                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="ycalle_h">Y que calle:</label>
                    <input type="text" name="colonia_h" id="ycalle_h" class="form-control form-control-custom street-names" maxlength="100" value="" placeholder="Escribe y que calle" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                </div>


                <h2 class="mb-0">Motivo</h2>
                <div class="row">
                  <div class="col-md-12 mb-3">
                    <label class="form-label-custom" for="motivo">*Datos de la probable infracción:</label>
                    <textarea name="motivo" id="motivo" class="form-control form-control-custom street-names" maxlength="130" value="" placeholder="Detallar el motivo por el que se realiza la presentación" required></textarea>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <label class="form-label-custom" for="objetos">Objeto(s) recogido(s) con la(s) probable(s) infracción(es):</label>
                    <textarea name="objetos" id="objetos" class="form-control form-control-custom street-names" maxlength="2000" value="" placeholder="Describir los objetos" required></textarea>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                </div>

                <div class="contenedor-boton justify-content-end seccion">
                  <button class="btn-01" type="submit" name="guardarexpediente" id="grabamotivo" >Crear expediente</button>
                </div>
              </form>
            </div> <!-- Finaliza tab-Panel Domicilio -->


            <div class="tab-pane fade" id="c_infractores" >

              <div class="overflow-auto">
                <table id="dg_infractores" class="tabla seccion mt-0">
                </table>
                  <button class="row col-md-12 mb-3  d-flex justify-content-end align-items-end">
                    <div name='agregarinfractor'>
                        <label class="Crear-expediente mb-0 py-2" name="button" >Agregar infractor</label>
                        <img class="Crear-expediente-svg" type="img" src="{{url('')}}/src/img/agregarexpediente.svg" />
                    </div>
                  </button>
              </div>
            </div>
  
            <div class="tab-pane fade" id="c_infractor" >

            <div class="flex-nowrap row col-md-12 mb-3  d-flex justify-content-between pr-0 mr-0">
                    <div class="row col-lg-5 d-flex justify-content-start pr-0 -Datos-Generales-">
                         <div id=nombredelinfractor>Nuevo infractor</div>
                    </div>
                    <div class="col-lg-7 d-flex justify-content-end   pr-0 -Datos-Generales-">
                      <div class="pl-1" id="datosgenerales" name="opciones" data-href="c_datosgenerales" >1 Datos generales</div>
                      <div class="pl-1" id="medico" name="opciones" data-href="c_medico" >| 2 Médico</div>
                      <div class="pl-1" id="infraccionysancion" name="opciones" data-href="c_infraccionesysancion" >| 3 Infracción y sanción </div>
                    </div>
            </div>

              <form id="f_infractores" data-id=''>
      <div id="c_medico" name="tabi" class="">
             <div class="row col-md-12  mb-3">
               <div class="form-check-inline col-md-12">
                <input class="form-check-input" type="checkbox" name="aplicacertificado" id="aplicacertificado" value="1" >
                <label class="form-check-label label-custom-check" for="aplicacertificado" id="l_aplicacertificado">
                                        No aplica
                </label>
               </div>
             </div>

        <div class="row  col-md-12 mb-3">
          <div class="col-md-8 pl-0" id="nom">
            <label class="form-label-custom" for="nombremedico" >*Médico:</label>
            <input type="text" class="form-control form-control-custom street-names" id="nombremedico" maxlength="30" placeholder="Escribe el nombre del médico" >
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4" id="nom">
            <label class="form-label-custom" for="tirilla" >*Número de tirilla:</label>
            <input type="text" class="form-control form-control-custom street-names" id="tirilla" maxlength="30" placeholder="Escribe el número de tirilla" >
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
        </div>
                  <div class="row col-md-12 mb-3">
                    <label class="form-label-custom" for="resultado">*Resultado:</label>
                    <textarea autofocus name="sancionaplicada" id="resultado" class="form-control form-control-custom street-names" maxlength="1000" value="" placeholder="Escribe el resultado" autofocus required></textarea>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                  <div class="row col-md-12 mb-3">
                    <label class="form-label-custom" for="prescripcion">*Preescripción médica:</label>
                    <textarea autofocus name="sancionaplicada" id="prescripcion" class="form-control form-control-custom street-names" maxlength="1000" value="" placeholder="Escribe la preescripción médica" autofocus required></textarea>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
             <div class="row col-md-12  mb-3">
               <div class="form-check-inline col-md-12">
                <input class="form-check-input" type="checkbox" name="procesosupendido" id="procesosupendido" value="1" >
                <label class="form-check-label label-custom-check" for="procesosupendido" id="l_estatus">
                                        El procesa queda suspendido
                </label>
               </div>
             </div>



      </div>

      <div id="c_datosgenerales" name="tabi" class="">
        <div class="Policias-remitentes mt-3">Datos personales</div>
        <div class="row  mb-1">
          <div class="col-md-4" id="nom">
            <label class="form-label-custom" for="nombre_i" >*Nombre(s):</label>
            <input type="text" class="form-control form-control-custom street-names" id="nombre_i" maxlength="30" placeholder="Escribe el nombre(s)" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>

          <div class="col-md-4" id="apa">
            <label class="form-label-custom" for="primer_apellido_i">*Primer apellido:</label>
            <input type="text" class="form-control form-control-custom names" id="primer_apellido_i" maxlength="30" placeholder="Escribe el primer apellido" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>

          <div class="col-md-4" id="ama">
            <label class="form-label-custom" for="segundo_apellido_i">Segundo Apellido:</label>
            <input type="text" class="form-control form-control-custom names" id="segundo_apellido_i" maxlength="30" placeholder="Escribe el segundo apellido">
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
        </div>

        <div class="row  mb-1">
                  <div class="col-md-4 ">
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
            <input type="text" class="form-control form-control-custom " id="curp" maxlength="18" placeholder="AAAA111111BBBBBB22" 
                        pattern="^([A-ZÑ\x26]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])(M|H)([A-ZÑx26]{2})([A-ZÑx26]{3})([0-9A-Z]{1}[0-9]{1}))?$"
            >
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>

                  <div class="col-md-4">
                    <label class="form-label-custom" for="identidad">Lugar de nacimiento:</label>
                    <select class="form-control form-control-custom" id="identidad" name="identidad" required>
                      <option disabled value="" selected hidden>Selecciona una</option>
                      @foreach ($data['entidades'] as $entidad)
                      <option value="{{ $entidad['id'] }}">{{ $entidad['descripcion'] }}</option>
                      @endforeach
                    </select>
                    <div class="invalid-feedback">
                      Selecciona una opción
                    </div>
                  </div>

        </div>
                <div class="row">
                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="nacimiento">Fecha de nacimiento:</label>
                    <input type="date" name="nacimiento" id="nacimiento" class="form-control form-control-custom street-names" maxlength="12" value="" placeholder="dd/mm/aaaa" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="ocupacion">Ocupación:</label>
                    <input type="text" name="ocupacion" id="ocupacion" class="form-control form-control-custom street-names" maxlength="40" value="" placeholder="Escribe la ocupación" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="identificacion">Identificación:</label>
                    <input type="text" name="identificacion" id="identificacion" class="form-control form-control-custom street-names" maxlength="40" value="" placeholder="Escribe la identificación" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>

                </div>

        <div class="Policias-remitentes mt-3">Domicilio</div>
                <div class="row">
                  <div class="col-md-4">
                    <label class="form-label-custom" for="calle_i">Calle:</label>
                    <input autofocus type="text" name="calle_i" id="calle_i" class="form-control form-control-custom street-names" maxlength="30" value="" placeholder="Escribe la calle" autofocus required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>

                  <div class="col-md-4">
                    <label class="form-label-custom" for="exterior_i">No. exterior:</label>
                    <input type="text" name="exterior_i" id="exterior_i" class="form-control form-control-custom street-names" maxlength="10" value="" placeholder="00" required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                  <div class="col-md-4">
                    <label class="form-label-custom" for="interior_i">No. interior:</label>
                    <input type="text" name="interior_i" id="interior_i" class="form-control form-control-custom street-names" maxlength="10" value="" placeholder="00">
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                </div>

                <div class="row">

                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="cp_i">Código postal:</label>
                    <input type="text" name="cp_i" id="cp_i" class="form-control form-control-custom numbers" maxlength="5" value="" placeholder="00000" pattern="^[0-9]{4,5}$" required>
                    <div class="invalid-feedback">
                      Ingresa los cuatro o cinco dígitos de tu código postal
                    </div>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label class="form-label-custom" for="colonia_i">Colonia:</label>
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

        <div class="row  mb-5">
          <div class="row col-md-6 ml-0" id="nom">
            <legend class="form-label-custom mb-1" for="id_file_0001" >Fotografía:</legend>
            <div class=" d-flex flex-nowrap">
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="id_file_0001"  id="id_file_0001" accept=".png, .jpg, .jpeg" maxlength="30" placeholder="Selecciona un archivo JPG o PNG" >
                <label class="custom-file-label" for="l_id_file_0001">
                              <p class="texto" id="l_id_file_0001">Selecciona un archivo PDF</p>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="Policias-remitentes mt-3">Declaración</div>
                  <div class="row col-md-12 mb-3">
                    <label class="form-label-custom" for="declaracion">*Declaración:</label>
                    <textarea autofocus name="sancionaplicada" id="declaracion" class="form-control form-control-custom street-names" maxlength="1000" value="" placeholder="Escribe la declaración" autofocus ></textarea>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>

      </div> <!-- fin datos personales -->

      <div id="c_infraccionesysancion" name="tabi" class="d-none">
        <div class="Policias-remitentes mt-3">Infracción y sanción</div>
        <div class="row  mb-2">
                  <div class="col-md-6 mb-3">
                    <label class="form-label-custom" for="idinfraccion">Infracción:</label>
                    <select class="form-control form-control-custom" id="idinfraccion" name="idinfraccion" required>
                      <option disabled value="" selected hidden>Selecciona una</option>
                      @foreach ($data['infracciones'] as $infraccion)
                      <option 
                             data-infraccion="{{ $infraccion->infraccion }}" 
                             data-descripcion="{{ $infraccion->descripcion }}" 
                             data-conciliacion="{{ $infraccion->conciliacion }}" 
                             data-aplicarsi="{{ $infraccion->aplicarsi }}" 
                             data-tipo_sancion="{{ $infraccion->tipo_sancion }}" 
                             data-uc_desde="{{ $infraccion->uc_desde }}" 
                             data-uc_hasta="{{ $infraccion->uc_hasta }}" 
                             data-servicio_desde="{{ $infraccion->servicio_desde }}" 
                             data-servicio_hasta="{{ $infraccion->servicio_hasta }}" 
                             data-arresto_desde="{{ $infraccion->arresto_desde }}" 
                             data-arresto_hasta="{{ $infraccion->arresto_hasta }}" 
                           value="{{ $infraccion->id }}">{{ 'Articulo '.$infraccion->articulo.' Fraccion '.$infraccion->fraccion }}</option>
                      @endforeach
                    </select>
                    <div class="invalid-feedback">
                      Selecciona una opción
                    </div>
                  </div>
        </div>
        <div class="row " id="textos" >
             <div class="col-md-12  mb-0">
                 <label class="Crear-expediente pb-0 mb-0 " name="button" id="l_infraccion" ></label>
             </div>
             <div class="col-md-12  mb-2">
                 <label class="II-Poseer-animales mb-0 py-2" name="button" id="l_descripcion" ></label>
             </div>
             <div class="col-md-12 mb-0">
                 <label class="Crear-expediente pb-0 mb-0 " name="button"  >Conciliación:</label>
             </div>
             <div class="col-md-12  mb-2">
                 <label class="II-Poseer-animales mb-0 py-2" name="button" id='l_conciliacion' >No aplica</label>
             </div>
             <div class="col-md-12  mb-0">
                 <label class="Crear-expediente pb-0 mb-0 " name="button"  >Aplica si:</label>
             </div>
             <div class="col-md-12  mb-2">
                 <label class="II-Poseer-animales mb-0 py-2" name="button" id='l_aplicarsi' >No aplica</label>
             </div>
             <div class="col-md-12  mb-2">
                 <label class="Crear-expediente pb-0 mb-0 " name="button"  id='l_tipo_sancion'></label>
             </div>
             <div class="col-md-12  mb-0">
                 <label class="Crear-expediente pb-0 mb-0 " name="button"  id='l_tipo_sancion'>*Tipo de sanción:</label>
             </div>
             <div class="col-md-12  mb-2">
               <div class="form-check-inline col-md-12">
                <input class="form-check-input" type="radio" name="tiposancion" id="uc" value="2" required="">
                <label class="form-check-label label-custom-check" for="uc" id="l_uc">
                                        Unidad de cuenta 
                </label>
               </div>
               <div class="form-check-inline col-md-12">
                <input class="form-check-input" type="radio" name="tiposancion" id="hs" value="3"  required="">
                <label class="form-check-label label-custom-check" for="hs" id="l_hs">
                                        Horas de servicio comunitario
                </label>
               </div>
               <div class="form-check-inline col-md-12">
                <input class="form-check-input" type="radio" name="tiposancion" id="ha" value="4"  required="">
                <label class="form-check-label label-custom-check" for="ha" id="l_ha">
                                        Horas de arresto
                </label>
               </div>
             </div>
                  <div class="col-md-3 mb-3">
                    <label class="form-label-custom" for="sancionaplicada">*Sanción:</label>
                    <input autofocus type="number" name=""sancionaplicada"" id="sancionaplicada" class="form-control form-control-custom street-names" maxlength="2" value="" placeholder="Escribe la sanción a aplicar de acuerdo al rango del tipo de sanción" autofocus required>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
                  <div class="col-md-12 mb-3">
                    <label class="form-label-custom" for="observaciones">Observaciones:</label>
                    <textarea autofocus name=""sancionaplicada"" id="observaciones" class="form-control form-control-custom street-names" maxlength="1000" value="" placeholder="Escribe una observacion a la sanción aplicada" autofocus required></textarea>
                    <div class="invalid-feedback">
                      Asegúrate de introducir la información correctamente
                    </div>
                  </div>
        </div>
      </div> <!-- fin de infraccionysancion -->

                  <div class="row col-md-12 mb-3  mr-0 pr-0 d-flex justify-content-between align-items-center">
                    <div id='mostrarinfractores' class="col-md-4">
                        <img class="Triangle" type="img" src="{{url('')}}/src/img/triangle.svg" />
                        <img class="Triangle" type="img" src="{{url('')}}/src/img/triangle.svg" />
                        <label class="Infractores-del-expe mb-0 py-2" name="button" >Infractores del expediente</label>
                    </div>

                    <div name='agregarinfractor' class="col-md-4">
                        <label class="Crear-expediente mb-0 py-2" name="button" >Agregar infractor</label>
                        <img class="Crear-expediente-svg" type="img" src="{{url('')}}/src/img/agregarexpediente.svg" />
                    </div>
                  </div>

                  <div class="contenedor-boton justify-content-end seccion">
                        <button class="btn-01" type="submit" name="guardarexpediente" >Crear expediente</button>
                  </div>

              </form>
            </div> <!-- Finaliza tab-Panel c_infractor -->

          </div> <!-- Cierra tabContent -->
        </div> <!-- Cerrar columna derecha -->
      </div> <!-- Cerrar contenido -->
    </section>
  </main>
  @endsection
