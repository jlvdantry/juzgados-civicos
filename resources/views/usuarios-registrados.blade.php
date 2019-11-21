<!DOCTYPE html>
@extends('layouts.layout')
@section('content')

  <main id="usuarios">
    <section class="container">
      <h1 class="mb-0">Usuarios registrados</h1>

      <form class="seccion" action="index.html" method="post">
        <div class="row d-flex align-items-center">
          <div class="col-md-3 mb-3">
            <label class="form-label-custom" for="nombre_solicitante">Nombre</label>
            <input autofocus type="text" class="form-control form-control-custom" name="nombre_solicitante" value="" placeholder="Nombre" id="nombres" >
          </div>
          <div class="col-md-3 mb-3">
            <label class="form-label-custom" for="email">Correo electrónico</label>
            <input class="form-control form-control-custom" type="email" name="email" value="" placeholder="Correo del tercero acreditado" id="email" >
          </div>
<!--
          <div class="col-md-2 mb-3">
            <label class="form-label-custom" for="rfc">RFC</label>
            <input class="form-control form-control-custom" type="text" id="rfc" name="rfc" value="" pattern="^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$" placeholder="Escribe el RFC del tercero acreditado" id="rfc" >
          </div>
-->
          <div class="col-md-2 mb-3 d-none">
            <label class="form-label-custom" for="perfiles">Perfiles</label>
              <select class="form-control form-control-custom" name="perfiles" id="perfiles">
                <option value="" selected value="" >Seleccione uno </option>
                      @foreach ($perfiles as $perfil)
                      <option value="{{ $perfil['id'] }}">{{ $perfil->descripcion}}</option>
                      @endforeach

              </select>
          </div>

          <div class="col-md-2 mb-3">
            <label class="form-label-custom" for="estatus">Estatus</label>
              <select class="form-control form-control-custom" name="estatus" id="estatus">
                <option value="" >Selecciona </option>
                <option value="0" selected="selected" >Pendiente</option>
                <option value="1">Aceptado</option>
                <option value="2">Rechazado</option>
                <option value="3">Eliminado</option>
              </select>
          </div>

          <div class="col-md-2 mt-lg-3">
            <button class="btn-01 py-2 px-0 mb-lg-3 mb-0 w-100" type="submit" name="buscar" id="buscar">Buscar</button>
          </div>
        </div>
      </form>

      <div class="overflow-auto">
        <table id="dg_usuarios" class="tabla seccion mt-0">
        </table>
      </div>

    </section>
  </main>
  @endsection
