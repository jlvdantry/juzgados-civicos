<!DOCTYPE html>
@extends('layouts.layout')
@section('content')

  <main id="expedientes-registrados">
    <section class="container">
      {{-- <h1 class="mb-0">Tus establecimientos registrados</h1> --}}
      <script>
      function mayus(e) {
          e.value = e.value.toUpperCase();
      }
      </script>

      <form class="seccion">
        <div class="row d-flex align-items-end">
          <div class="row col-md-6 mb-3">
             <div  class="col-md-1">
                <label class="Busca" >Busca</label>
             </div>
             <div class="col-md-10">
                <input class="form-control form-control-custom  Por-nombre-de-infrac" autofocus type="text"  name="nombre_solicitante" id="nombres" value="" placeholder="Por nombre de infractor o expediente">
             </div>
          </div>
{{--
          <div class="col-md-3 mb-3">
            <label class="form-label-custom" for="rfc">RFC</label>
            <input type="text" onkeyup="mayus(this);" class="form-control form-control-custom" id="rfc" pattern="^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$" placeholder="Escribe tu RFC" maxlength="14">
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
--}}
          <div class="col-md-2 mb-3">
            <button class="btn-01 mb-0 py-2" type="submit" name="button" id="buscar">Buscar</button>
          </div>
          <div class="row col-md-4 mb-3  d-flex justify-content-end">
            <div id='crearexpediente'>
                 <label class="Crear-expediente mb-0 py-2" name="button" id="buscar">Crear expediente</label>
                 <img class="Crear-expediente-svg" type="img" src="{{url('')}}/src/img/agregarexpediente.svg" />
            </div>
          </div>
          <p class='ml-3' >Se muestran los últimos 100 boletas de remisión registrados</p>
        </div>
      </form>

      <div class="overflow-auto">
            <table id="dg_boletas" class="tabla seccion">
            </table>
      </div>

    </section>
  </main>
@endsection
