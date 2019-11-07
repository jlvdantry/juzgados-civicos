@extends('layouts.layout')
@section('content')

  <main id="inmuebles-registrados-todos" >
    <section class="container">
      <h1 class="mb-0">Inmuebles registrados</h1>

      <form class="seccion" action="index.html" method="post">
        <div class="row d-flex align-items-end">
          <div class="col-lg-3 mb-3">
            <label class="form-label-custom" for="nombre_solicitante">Alias del inmueble</label>
            <input id="alias" class="form-control form-control-custom" type="text" name="nombre_solicitante" value="" placeholder="Escribe el alias del inmueble" >
          </div>
          <div class="col-lg-2 mb-3">
            <label class="form-label-custom" for="rfc_establecimiento">RFC del establecimiento</label>
            <input id="rfc" class="form-control form-control-custom" type="text" name="rfc_establecimiento" value="" placeholder="AABBCC00" >
          </div>
          <div class="col-lg-2 mb-3">
            <label class="form-label-custom" for="id_alcaldia">Alcaldia</label>
                    <select class="form-control form-control-custom" id="id_alcaldia" name="wl_id_alcaldia" required>
                      <option disabled value="" selected hidden>Selecciona una</option>

                      @foreach ($alcaldias as $alcaldia)
                      <option value="{{ $alcaldia['id_cat_alcaldia'] }}">{{ $alcaldia->descripcion}}</option>
                      @endforeach
                    </select>

          </div>
          <div class="col-lg-3 mb-3">
            <label class="form-label-custom" for="calle">calle</label>
            <input id="calle" class="form-control form-control-custom" type="text" name="calle" value="" placeholder="Escriba la calle o parte de la calle" >
          </div>
          <div class="col-lg-2 mb-3">
            <button id="buscart" class="btn-01 mb-0 py-2" type="submit" name="button">Buscar</button>
          </div>
          <p class='ml-3' >Se muestran los últimos 100 inmuebles registrados</p>

        </div>
      </form>

      <div class="overflow-auto">
        <table class="tabla">
          <thead>
            <tr>
              <th>Alias del inmueble</th>
              <th>RFC establecimiento</th>
              <th>Alcaldia</th>
              <th>Calle</ht>
              <th>Estatus</th>
              <th>Riesgo</th>
              <th>Ver</th>
            </tr>
          </thead>
          <tbody id="dg_autorizacion">
          </tbody>

        </table>
      </div>

    </section>
  </main>
@endsection
