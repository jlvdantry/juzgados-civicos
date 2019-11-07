@extends('layouts.layout')
@section('content')

  <main id="establecimientos-registrados-todos" >
    <section class="container">
      <h1 class="mb-0">Establecimientos registrados</h1>

      <form class="seccion" action="index.html" method="post">
        <div class="row d-flex align-items-end">
          <div class="col-lg-4 mb-3">
            <label class="form-label-custom" for="nombre_solicitante">Nombre del solicitante</label>
            <input id="nombres" class="form-control form-control-custom" type="text" name="nombre_solicitante" value="" placeholder="Escribe el nombre del solicitante" >
          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label-custom" for="folio_establecimiento">RFC</label>
            <input id="rfc" class="form-control form-control-custom" type="text" name="rfc_establecimiento" value="" placeholder="AABBCC00" >
          </div>
          <div class="col-lg-2 mb-3">
            <button id="buscart" class="btn-01 mb-0 py-2" type="submit" name="button">Buscar</button>
          </div>
        </div>
      </form>

      <div class="overflow-auto">
        <table class="tabla">
          <thead>
            <tr>
              <th>Tercero Acreditado</th>
              <th>Solicitante</th>
              <th>RFC</th>
              <!-- <th>Ver</th>-->
              <th>Ver Inmuebles</th>
            </tr>
          </thead>
          <tbody id="dg_autorizacion">
          </tbody>

        </table>
      </div>

    </section>
  </main>
@endsection
