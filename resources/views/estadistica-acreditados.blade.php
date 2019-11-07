@extends('layouts.layout')
@section('content')

  <main id="estadistica-acreditados" >
    <section class="container">
      <h1 class="mb-0">Estadística acreditados</h1>
      <form class="seccion hide" action="index.html" method="post">
        <div class="row d-flex align-items-end">
          <div class="col-lg-4 mb-3">
            <label class="form-label-custom" for="nombre_acreditado">Nombre del acreditado</label>
            <input id="alias" class="form-control form-control-custom" type="text" name="nombre_acreditado" value="" placeholder="Escribe el nombre del acreditado" >
          </div>
          <div class="col-lg-4 mb-3">
            <label class="form-label-custom" for="email_acreditado">Correo electronico  del acreditado</label>
            <input id="email" class="form-control form-control-custom" type="text" name="email_acreditado" value="" placeholder="AABBCC00" >
          </div>
          <div class="col-lg-4 mb-3">
            <button id="buscart" class="btn-01 mb-0 py-2" type="submit" name="button">Buscar</button>
          </div>

        </div>
      </form>

      <div class="overflow-auto">
        <table class="tabla">
          <thead>
            <tr>
              <th>Nombre</th>
              <th>Correo electronico</th>
              <th>Establecimientos</th>
              <th>Inmuebles</ht>
              <th>Capturando</th>
              <th>Capturados</th>
            </tr>
          </thead>
          <tbody id="dg_autorizacion">
          </tbody>

        </table>
      </div>

    </section>
  </main>
@endsection
