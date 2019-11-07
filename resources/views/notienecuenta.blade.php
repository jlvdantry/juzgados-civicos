@extends('layouts.layout')
@section('content')
  <div class="pleca">
    <div class="container">
        <div class="boton-regresar">
           <a href="./"><img src="src/img/flecha-before.svg" alt=""> Regresar</a>
        </div>
    </div>
  </div>

  <main id="notienecuenta" >
    <section class="container">
      <div class="row">
        <div class="col-md-6 mb-3">
          <legend class="form-label-custom">Tipo de cuenta*</legend>
          <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="tipo_cuenta" id="acreditado" value="T" checked required>
            <label class="form-check-label label-custom-check" for="acreditado">
              Tercero acreditado
            </label>
          </div>
          <div class="form-check-inline">
            <input class="form-check-input" type="radio" name="tipo_cuenta" id="alcaldia" value="A" required>
            <label class="form-check-label label-custom-check" for="alcaldia">
              Alcaldía
            </label>
          </div>
        </div>
      </div>
    </section>
    <section id="tercer-acreditado-container" class="container">
      <h1 class="mb-0">Identificación del tercero acreditado</h1>
      <p>Los campos marcados con asterisco son obligatorios</p>

      <form class="needs-validation seccion" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <legend class="form-label-custom">Tipo de persona*</legend>
            <div class="form-check-inline">
              <input class="form-check-input" type="radio" name="tipo_persona" id="fisica" value="F" checked required>
              <label class="form-check-label label-custom-check" for="fisica">
                Física
              </label>
            </div>
            <div class="form-check-inline">
              <input class="form-check-input" type="radio" name="tipo_persona" id="moral" value="M" required>
              <label class="form-check-label label-custom-check" for="moral">
                Moral
              </label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3" id="nom">
            <label class="form-label-custom" for="nombres" id="lnombres">Nombre(s)*</label>
            <input autofocus type="text" class="form-control form-control-custom names" id="nombres" maxlength="50" placeholder="Escribe tu nombre" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4 mb-3" id="apa">
            <label class="form-label-custom" for="ape_pat">Apellido paterno*</label>
            <input type="text" class="form-control form-control-custom names" id="ape_pat" maxlength="30" placeholder="Escribe tu apellido paterno" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4 mb-3" id="ama">
            <label class="form-label-custom" for="ape_mat">Apellido materno</label>
            <input type="text" class="form-control form-control-custom names" id="ape_mat" maxlength="30" placeholder="Escribe tu apellido materno">
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
        </div>
        <script>
        function mayus(e) {
            e.value = e.value.toUpperCase();
        }
        </script>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="rfc">RFC*</label>
            <input type="text" onkeyup="mayus(this);" class="form-control form-control-custom" id="rfc" pattern="^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$" placeholder="Escribe tu RFC" maxlength="14" required>
            <div class="invalid-feedback">
              Asegúrate de que el RFC introducido es correcto
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="sgirpc">No. Registro autorizado SGIRPC*</label>
            <input type="text" onkeyup="mayus(this);" class="form-control form-control-custom rfc-curp" id="sgirpc" placeholder="Escribe el No. Registro autorizado"
                       maxlength="25"  required>
            <div class="invalid-feedback">
              Asegúrate de que el No. Registro autorizado SGIRPC introducido es correcto, comienza con las siglas SGIRPC
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="stps">No. Registro STPS*</label>
            <input type="text" onkeyup="mayus(this);" class="form-control form-control-custom rfc-curp" id="stps" placeholder="Escribe el No. Registro STPS"
                       maxlength="30" required>
            <div class="invalid-feedback">
              Asegúrate de que el No. Registro STPS introducido es correcto, comienza con las siglas STPS
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="vigencia">Vigencia*</label>
            <input type="date" class="form-control form-control-custom" id="vigencia" min="2017-01-01" required>
            <div class="invalid-feedback">
              Ingresa una fecha válida
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12" >
            <p class="form-label-custom" >Actividades registradas y autorizadas*</p>
            <ul id="id_nivel" name="id_nivel" required>
              <div class="row">
                <div class="col-md-4">
                  <input class="form-check-input mt-2" name="ara" type="checkbox" value="0" id=cb >
                  <label class="form-check-label label-custom-check" for="cb">Capacitación de brigadas de PC</label>
                </div>
                <div class="col-md-8">
                 <input class="form-check-input mt-2" name="ara" type="checkbox" value="0" id=epmr >
                 <label class="form-radio-label label-custom-check" for="epmr">Elaboración de programas internos para establecimientos o inmuebles de mediano riesgo</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <input class="form-check-input mt-2" name="ara" type="checkbox" value="0" id=erv >
                  <label class="form-radio-label label-custom-check" for="erv">Estudios de riesgo de vulnerabilidad</label>
                </div>
                <div class="col-md-8">
                  <input class="form-check-input mt-2" name="ara" type="checkbox" value="0" id=rpar >
                  <label class="form-radio-label label-custom-check" for="rpar">Elaboración de programas internos de PC para establecimientos o inmuebles de alto riesgo</label>
                </div>
              </div>
            </ul>
          </div>
        </div>

        <h2 class="mb-0">Domicilio</h2>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="calle">Calle*</label>
            <input type="text" class="form-control form-control-custom street-names" id="calle" maxlength="30" placeholder="Escribe el nombre de la calle" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="exterior">Número exterior*</label>
            <input type="text" class="form-control form-control-custom street-names" id="exterior" maxlength="30" placeholder="00" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="interior">Número interior</label>
            <input type="text" class="form-control form-control-custom street-names" id="interior" maxlength="30" placeholder="00">
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="colonia">Colonia*</label>
            <input type="text" class="form-control form-control-custom street-names" id="colonia" placeholder="Escribe la colonia" required>
            <div class="invalid-feedback">
              Asegúrate que la información es correcta
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="id_alcaldia">Alcaldía*</label>
            <select class="form-control form-control-custom" id="id_alcaldia" name="id_alcaldia" required>
              <option disabled value="" selected hidden>Selecciona una</option>
                      @foreach ($alcaldias as $alcaldia)
                      <option value="{{ $alcaldia['id_cat_alcaldia'] }}">{{ $alcaldia->descripcion}}</option>
                      @endforeach
            </select>
            <div class="invalid-feedback">
              Selecciona una opción
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="cp">Código postal*</label>
            <input type="text" class="form-control form-control-custom numbers" id="cp" placeholder="00000" maxlength="5" pattern="^[0-9]{4,5}$" required>
            <div class="invalid-feedback">
              Ingresa los cuatro o cinco dígitos de tu código postal
            </div>
          </div>
        </div>

        <h2 class="mb-0">Datos de contacto</h2>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="num_telefono">Teléfono*</label>
            <input type="text" class="form-control form-control-custom numbers" id="num_telefono" placeholder="55 5555 5555" maxlength="10" required>
            <div class="invalid-feedback">
              Debe estar conformado por diez dígitos
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="email">Correo electrónico*</label>
            <input type="email" class="form-control form-control-custom" id="email" placeholder="correo@dominio.com" required>
            <div class="invalid-feedback">
              Asegúrate de introducir correctamente tu correo electrónico
            </div>
          </div>
        </div>

        <h2 class="mb-0">Contrase&#241;a</h2>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="password">Contraseña*</label>
            <input type="password" class="form-control form-control-custom" id="password" placeholder="&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;" minlength="8" max-maxlength="30" required>
            <div class="invalid-feedback">
              La contraseña debe tener por lo menos ocho dígitos
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="password_confirma">Confirmación contraseña*</label>
            <input type="password" class="form-control form-control-custom" id="password_confirma" placeholder="Escribe tu contraseña de nuevo" required>
            <div class="invalid-feedback">
              Asegúrate introducir correctamente la contraseña establecida
            </div>
          </div>
        </div>

        <div class="contenedor-boton justify-content-center seccion">
          <button class="btn-01" type="submit" name="button" id="creacuenta" >Crear cuenta</button>
        </div>
      </form>
    </section>
    <section id="alcaldia-container" class="container">
      <h1 class="mb-0">Identificación de Alcaldía</h1>
      <p>Los campos marcados con asterisco son obligatorios</p>
      <form class="needs-validation-alcaldia seccion" novalidate>
        <div class="row">
          <div class="col-md-4 mb-3" id="nom">
            <label class="form-label-custom" for="alc-nombres" id="alc-lnombres">Nombre(s)*</label>
            <input autofocus type="text" class="form-control form-control-custom names" id="alc-nombres" maxlength="50" placeholder="Escribe tu nombre" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4 mb-3" id="apa">
            <label class="form-label-custom" for="alc-ape_pat">Apellido paterno*</label>
            <input type="text" class="form-control form-control-custom names" id="alc-ape_pat" maxlength="30" placeholder="Escribe tu apellido paterno" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4 mb-3" id="ama">
            <label class="form-label-custom" for="alc-ape_mat">Apellido materno</label>
            <input type="text" class="form-control form-control-custom names" id="alc-ape_mat" maxlength="30" placeholder="Escribe tu apellido materno">
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="alc-id_alcaldia">Alcaldía*</label>
            <select class="form-control form-control-custom" id="alc-id_alcaldia" name="id_alcaldia" required>
              <option disabled value="" selected hidden>Selecciona una</option>
                      @foreach ($alcaldias as $alcaldia)
                      <option value="{{ $alcaldia['id_cat_alcaldia'] }}">{{ $alcaldia->descripcion}}</option>
                      @endforeach
            </select>
            <div class="invalid-feedback">
              Selecciona una opción
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="alc-email">Correo electrónico*</label>
            <input type="email" class="form-control form-control-custom" id="alc-email" placeholder="correo@dominio.com" required>
            <div class="invalid-feedback">
              Asegúrate de introducir correctamente tu correo electrónico
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="alc-password">Contraseña*</label>
            <input type="password" class="form-control form-control-custom" id="alc-password" placeholder="&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;" minlength="8" max-maxlength="30" required>
            <div class="invalid-feedback">
              La contraseña debe tener por lo menos ocho dígitos
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="alc-password_confirma">Confirmación contraseña*</label>
            <input type="password" class="form-control form-control-custom" id="alc-password_confirma" placeholder="Escribe tu contraseña de nuevo" required>
            <div class="invalid-feedback">
              Asegúrate introducir correctamente la contraseña establecida
            </div>
          </div>
        </div>

        <div class="contenedor-boton justify-content-center seccion">
          <button class="btn-01" type="submit" name="button" id="creacuenta-alcaldia" >Crear cuenta</button>
        </div>
      </form>
    </section>
  </main>
  @endsection
