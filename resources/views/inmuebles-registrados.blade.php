<!DOCTYPE html>
@extends('layouts.layout')
@section('content')
  <div class="pleca">
    <div class="container">
         <div class="boton-regresar justify-content-end">
             <a href="./registrar-establecimiento">Registrar establecimiento</a>
         </div>
    </div>
  </div>

  <main id="inmuebles-registrados">
    <section class="container">
      <h1 class="mb-0">Tus inmuebles registrados</h1>

      <form class="seccion">
        <div class="row d-flex align-items-end">
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="nombres">Nombre del solicitante</label>
<!--            <input autofocus type="text" class="form-control form-control-custom names" name="nombre_solicitante" id="nombres" value="" placeholder="Escribe el nombre del solicitante"> -->
          </div>
          <div class="col-md-3 mb-3">
            <label class="form-label-custom" for="rfc">RFC</label>
<!--            <input type="text" onkeyup="mayus(this);" class="form-control form-control-custom" id="rfc" pattern="^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$" placeholder="Escribe tu RFC" maxlength="14"> -->
          </div>
 <!--
          <div class="col-md-2 mb-3">
            <button class="btn-01 mb-0 py-2" type="submit" name="button" id="buscar">Buscar</button>
          </div>
-->
        </div>
      </form>

      <div class="overflow-auto">
        <table class="tabla seccion">
          <thead>
            <tr>
              <th>Identificación</th>
              <th>Calle o avenida</th>
              <th>Número exterior</th>
              <th>Editar</th>
              <th>Eliminar</th>
            </tr>
          </thead>

          <tbody id="dg_autorizacion">

          </tbody>

        </table>
      </div>

    </section>
  </main>
@endsection
