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


            <div class="tab-pane fade" id="c_infractores" >

              <div class="overflow-auto">
                <table id="dg_infractores" class="tabla seccion mt-0">
                </table>
                  <div class="row col-md-12 mb-3  d-flex justify-content-end align-items-end">
                    <div id='agregarinfractor'>
                        <label class="Crear-expediente mb-0 py-2" name="button" >Agregar infractor</label>
                        <img class="Crear-expediente-svg" type="img" src="{{url('')}}/src/img/agregarexpediente.svg" />
                    </div>
                  </div>
              </div>
            </div>
  
            <div class="tab-pane fade" id="c_infractor" >

                  <div class="row col-md-12 mb-3  d-flex justify-content-start align-items-start">
                    <div id='mostrarinfractores'>
                        <img class="Triangle" type="img" src="{{url('')}}/src/img/triangle.svg" />
                        <img class="Triangle" type="img" src="{{url('')}}/src/img/triangle.svg" />
                        <label class="Infractores-del-expe mb-0 py-2" name="button" >Infractores del expediente</label>
                    </div>
                  </div>

              <form id="f_infractores" data-id=''>
        <div class="Policias-remitentes mt-3">Datos personales</div>
        <div class="row  mb-1">
          <div class="col-md-4" id="nom">
            <label class="form-label-custom" for="nombre_i" >Nombre(s)*</label>
            <input type="text" class="form-control form-control-custom street-names" id="nombre_i" maxlength="30" placeholder="Escribe el nombre(s)" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>

          <div class="col-md-4" id="apa">
            <label class="form-label-custom" for="primer_apellido_i">*Primer apellido</label>
            <input type="text" class="form-control form-control-custom names" id="primer_apellido_i" maxlength="30" placeholder="Escribe el primer apellido" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>

          <div class="col-md-4" id="ama">
            <label class="form-label-custom" for="segundo_apellido_i">Segundo Apellido</label>
            <input type="text" class="form-control form-control-custom names" id="segundo_apellido_i" maxlength="30" placeholder="Escribe el segundo apellido">
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
                      <option value="{{ $entidad['id'] }}">{{ $entidad['descripcion'] }}</option>
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

        <div class="row  mb-2">
          <div class="col-md-6" id="nom">
            <legend class="form-label-custom mb-1" for="id_file_0001" >Fotografía:</legend>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="id_file_0001" maxlength="30" placeholder="Selecciona un archivo JPG o PNG" >
                <label class="custom-file-label" for="l_id_file_0001">
                              <p class="texto" id="l_id_file_0001">Selecciona un archivo PDF</p>
                </label>
            </div>
          </div>
        </div>
                  <div class=" col-md-12 mb-3  mr-0 pr-0 d-flex justify-content-end align-items-end">
                    <div name='agregarinfractor'>
                        <label class="Crear-expediente mb-0 py-2" name="button" >Agregar infractor</label>
                        <img class="Crear-expediente-svg" type="img" src="{{url('')}}/src/img/agregarexpediente.svg" />
                    </div>
                  </div>

              </form>
            </div> <!-- Finaliza tab-Panel Información inmueble-->




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



          </div> <!-- Cierra tabContent -->
        </div> <!-- Cerrar columna derecha -->
      </div> <!-- Cerrar contenido -->
    </section>
  </main>
  @endsection
