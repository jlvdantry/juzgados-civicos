
@extends('layouts.layout')
@section('content')


  <div class="pleca">
    <div class="container">
      <div class="boton-regresar justify-content-end">
        <!-- <a class="mr-3" href="../terceros-acreditados-registrados">Terceros acreditados</a> -->
        <a href="">Establecimientos</a>
      </div>
    </div>
  </div>

  <main id="" data-id="{{ $user->id }}">
    <section class="container">
      <div class="row d-flex justify-content-between align-items-center mt-3">
        <div class="col-lg-6">
          <h1 class="my-0 text-center text-lg-left">{{ $user->nombres.' '.$user->ape_pat.' '. $user->ape_mat }} </h1>
        </div>
        <!--
        <div class="col-lg-6">
          <form class="formulario" action="index.html" method="post">
            <div class="formulario-radio justify-content-end">
              <input type="radio" id="aceptado" name="estatus" value="1" {{ $user->activo==1 ? 'checked' : '' }} >
              <label for="aceptado">Aceptado</label>

              <input type="radio" id="rechazado" name="estatus" value="2" {{ $user->activo==2 ? 'checked' : '' }}>
              <label for="rechazado">Rechazado</label>

              <input type="radio" id="pendiente" name="estatus" value="0" {{ $user->activo==0 ? 'checked' : '' }}>
              <label for="pendiente">Pendiente</label>
            </div>
          </form>
        </div>
        -->
      </div>

      <div class="row">
        <div class="col-lg-4">
          <h3 class="label-formulario">Tipo de persona</h3>
          <p>Física</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <h3 class="label-formulario">No. Registro autorizado SGIRPC</h3>
          <p>{{$user->sgirpc}}</p>
        </div>

        <div class="col-lg-4">
          <h3 class="label-formulario">Vigencia</h3>
          <p>{{$user->vigencia}}</p>
        </div>
      </div>

        <div class="row">
          <div class="col-md-12" >
            <p class="form-label-custom" >Actividades registradas y autorizadas*</p>
            <ul id="id_nivel" name="id_nivel" required>
              <div class="row">
                <div class="col-md-4 mb-2">
                  <input class="form-check-input" name="ara" type="checkbox" value="1" id=cb @if ($user->cb) checked @endif  disabled ><label class="form-check-label label-custom-check  @if ($user->cb) font-weight-bold  @endif ">Capacitación de brigadas de PC</label>
                </div>
                <div class="col-md-8 mb-2">
                 <input class="form-check-input" name="ara" type="checkbox" value="1" id=epmr @if ($user->epmr) checked @endif disabled ><label class="form-radio-label label-custom-check @if ($user->epmr) font-weight-bold  @endif">Elaboración de programas internos para establecimientos o inmuebles de mediano riesgo</label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 mb-2">
                  <input class="form-check-input" name="ara" type="checkbox" value="1" id=erv @if ($user->erv) checked @endif disabled ><label class="form-radio-label label-custom-check @if ($user->erv) font-weight-bold  @endif">Estudios de riesgo de vulnerabilidad</label>
                </div>
                <div class="col-md-8 mb-2">
                  <input class="form-check-input" name="ara" type="checkbox" value="1" id=rpar @if ($user->rpar) checked @endif disabled ><label class="form-radio-label label-custom-check @if ($user->rpar) font-weight-bold  @endif">Elaboración de programas internos de PC para establecimientos o inmuebles de alto riesgo</label>
                </div>
              </div>
            </ul>
          </div>
        </div>


      <h2 class="mb-0">Domicilio</h2>
      <div class="row">
        <div class="col-lg-4">
          <h3 class="label-formulario">Calle</h3>
          <p>{{$user->calle}}</p>
        </div>

        <div class="col-lg-4">
          <h3 class="label-formulario">Número exterior</h3>
          <p>{{$user->exterior}}</p>
        </div>

        <div class="col-lg-4">
          <h3 class="label-formulario">Número interior</h3>
          <p>{{$user->interior}}</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <h3 class="label-formulario">Colonia</h3>
          <p>{{$user->colonia}}</p>
        </div>

        <div class="col-lg-4">
          <h3 class="label-formulario">Alcaldía</h3>
          <p>{{$user->id_alcaldia}}</p>
        </div>

        <div class="col-lg-4">
          <h3 class="label-formulario">Código postal</h3>
          <p>{{$user->cp}}</p>
        </div>
      </div>

      <h2 class="mb-0">Datos de contacto</h2>
      <div class="row">
        <div class="col-lg-4">
          <h3 class="label-formulario">Teléfono</h3>
          <p>{{$user->num_telefono}}</p>
        </div>

        <div class="col-lg-4">
          <h3 class="label-formulario">Correo electrónico</h3>
          <p>{{$user->email}}</p>
        </div>
      </div>

      <h2>Establecimientos registrados</h2>
      <div class="overflow-auto">
        <table class="tabla">
          <thead>
            <tr>
              <th>Folio</th>
              <th>Solicitante</th>
              <th>Alcaldía</th>
              <th>Seleccionado</th>
              <th>Ver perfil</th>
            </tr>
          </thead>
<!--
          <tbody>
            <tr>
              <td class="font-weight-bold">AABBCC04</td>
              <td class="font-weight-bold">Restaurante las delicias S.A de C.V.</td>
              <td>Tlalpan</td>
              <td class="red">No</td>
              <td><button class="btn-ver" type="button" name="button_ver"> </button> </td>
            </tr>

            <tr>
              <td class="font-weight-bold">AABBCC73</td>
              <td class="font-weight-bold">Empresa S.A de C.V.</td>
              <td>Miguel Hidalgo</td>
              <td class="red">No</td>
              <td><button class="btn-ver" type="button" name="button_ver"> </button> </td>
            </tr>

            <tr>
              <td class="font-weight-bold">AABBCC12</td>
              <td class="font-weight-bold">Otra Empresa S.A de C.V.</td>
              <td>Cuauhtémoc</td>
              <td class="red">No</td>
              <td><button class="btn-ver" type="button" name="button_ver"> </button> </td>
            </tr>
          </tbody>
-->
        </table>
      </div>

    </section>
  </main>
  @endsection
