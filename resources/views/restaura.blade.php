@extends('layouts.layout')
@section('content')
  <div class="pleca">
  </div>

  <main id="restaura">
    <div class="container mt-lg-5">
      <div class="row d-flex justify-content-around align-items-center">
        <div class="col-lg-5">
          <h1 class="text-center text-lg-left">Registro de programas internos en línea para establecimientos</h1>
          <!-- <h3>Si eres tercer acreditado y aún no has creado tu cuenta da <a href="./notienecuenta">clic aquí</a></h3> -->
        </div>

        <div class="col-lg-4">
          <form class="needs-validation seccion" novalidate>

            <label class="form-label-custom" for="password">Contraseña nueva</label>
            <input autofocus type="password" class="form-control form-control-custom" id="password" placeholder="Escriba su nueva contraseña" required>
            <div class="invalid-feedback">
              La nueva contraseña no es válida
            </div>


            <label class="form-label-custom" for="password">Confirma tu contraseña nueva</label>
            <input type="password" class="form-control form-control-custom" id="password_confirmation" placeholder="Escribe de nuevo su contraseña " required>
            <div class="invalid-feedback">
              Asegúrate de introducir correctamente tu contraseña
            </div>

            <div class="contenedor-boton justify-content-end seccion">
              <button class="btn-01" type="submit" name="button" id="btn_restaura">Aceptar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
  @endsection
