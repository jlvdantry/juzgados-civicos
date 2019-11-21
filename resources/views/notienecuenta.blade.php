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
{{--
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
--}}
    <section id="alcaldia-container" class="container">
      {{-- <h1 class="mb-0">Identificación de Alcaldía</h1>  --}}
      <p>Los campos marcados con asterisco son obligatorios</p>
      <form class="needs-validation-alcaldia seccion" novalidate>
        <div class="row">
          <div class="col-md-4 mb-3" id="nom">
            <label class="form-label-custom" for="alc-nombres" >Nombre(s)*</label>
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
          <div class="col-md-12 mb-3">
            <label class="form-label-custom" for="idjuzgado">Juzgado*</label>
            <select class="form-control form-control-custom" id="idjuzgado" name="idjuzgado" required>
              <option disabled value="" selected hidden>Selecciona una</option>
                      @foreach ($juzgados as $juzgado)
                      <option value="{{ $juzgado->id }}">{{ $juzgado->juzgado." ".$juzgado->direccion }}</option>
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
