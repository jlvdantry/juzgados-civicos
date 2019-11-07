<!DOCTYPE html>
@extends('layouts.layout')
@section('content')


  <main id="autorizacion_pone" data-id="{{ $user->id }}">
    <section class="container">
      <div class="row d-flex justify-content-between align-items-center mt-3">
        <div class="col-lg-6">
          <h1 class="my-0 text-center text-lg-left">{{ $user->nombres.' '.$user->ape_pat.' '. $user->ape_mat }} </h1>
        </div>
        <div class="col-lg-6">
          <form class="d-flex justify-content-end" action="index.html" method="post">
            <input class="form-check-input d-none" type="radio" id="estatusa" name="estatusa" value=""  >
            <div class="form-check-inline">
              <button type="button"  data-toggle="modal" data-target="#confirmacionModal"> 
              <input class="form-check-input" type="radio" id="eliminado" name="estatus" value="3" {{ $user->activo==3 ? 'checked' : '' }} >
              <label class="form-check-label label-custom-check" for="eliminado"> Eliminado </label>
            </button>
            </div>
            <div class="form-check-inline">
              <button type="button"  data-toggle="modal" data-target="#confirmacionModal">
              <input class="form-check-input" type="radio" id="aceptado" name="estatus" value="1" {{ $user->activo==1 ? 'checked' : '' }} >
              <label class="form-check-label label-custom-check" for="aceptado"> Aceptado </label>
            </button>
            </div>


            <div class="form-check-inline">
            <button type="button"  data-toggle="modal" data-target="#confirmacionModalr">
              <input class="form-check-input" type="radio" id="rechazado" name="estatus" value="2" {{ $user->activo==2 ? 'checked' : '' }}>
              <label class="form-check-label label-custom-check" for="rechazado">Rechazado</label>
              </button>
            </div>

            <div class="form-check-inline">
            <button type="button"  data-toggle="modal" data-target="#confirmacionModal">
              <input class="form-check-input" type="radio" id="pendiente" name="estatus" value="0" {{ $user->activo==0 ? 'checked' : '' }}>
              <label class="form-check-label label-custom-check" for="pendiente">Pendiente</label>
              </button>
            </div>

<div class="modal fade" id="confirmacionModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body pb-0">
        <h1 class="modal-title" id="modalLabel">Información importante</h1>
        <p>¿Estás seguro que deseas modificar el estatus del tercero acreditado?</p>
      </div>
      <div class="contenedor-boton p-3 justify-content-end pt-0">
        <button type="button" class="btn-03" data-quemodal="confirmacionModal" id="cancelarcambio">Cerrar</button>
        <button type="button" class="btn-02" data-quemodal="confirmacionModal" id="aceptarcambio">Sí, estoy seguro</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="confirmacionModalr" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body pb-0">
        <h1 class="modal-title" id="modalLabelr">Información importante</h1>
        <p>¿Estás seguro que deseas rechazar al usuario?</p>
      </div>
           <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-10">
                    <label class="form-label-custom" for="rechazo">Motivo del rechazo*</label>
                    <textarea class="form-control form-control-custom" name="rechazado" id="rechazo" placeholder="Escriba el motivo del porque esta rechazando el registro del usuario"  maxlength="500" required></textarea>
                  </div>
                </div>
            </div>

      <div class="contenedor-boton p-3 justify-content-end pt-0">
        <button type="button" class="btn-03" data-dismiss="x" data-quemodal="confirmacionModalr" id="cancelarcambio_r">Cerrar</button>
        <button type="button" class="btn-02" data-dismiss="x" data-quemodal="confirmacionModalr" id="aceptarcambio_r">Sí, estoy seguro</button>
      </div>
    </div>
  </div>
</div>


          </form>
        </div>
      </div>
      </section>
@if($user->desperfil=='Tercero Acreditado')
    <section id="tercer-acreditado-container" class="container">
      <h2 class="mb-0">Perfil {{ $user->desperfil }} </h2>
      <div class="row">
        <div class="col-lg-4">
          <h3 class="label-formulario">Tipo de persona</h3>
          <p>{{ $user->destipopersona }}</p>
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
          <p>{{$user->getAlcaldia()}}</p>
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
      </div>
    </section>
@else
    <section id="tercer-acreditado-container" class="container">
      <h1 class="mb-0">Perfil {{ $user->desperfil }}</h1>
      <h2 class="mb-0">Datos de contacto</h2>
      <div class="row">
        <div class="col-lg-4">
          <h3 class="label-formulario">Correo electrónico</h3>
          <p>{{$user->email}}</p>
        </div>
        <div class="col-lg-4">
          <h3 class="label-formulario">Alcaldía</h3>
          <p>{{$user->getAlcaldia()}}</p>
        </div>
      </div>
    </section>
@endif

  </main>
@endsection
