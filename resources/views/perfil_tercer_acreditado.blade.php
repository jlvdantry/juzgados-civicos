<!DOCTYPE html>
@extends('layouts.layout')
@section('content')

  <div class="pleca">
    <div class="container">
      <div class="boton-regresar justify-content-end">
        <a href="">Listado de establecimientos</a>
      </div>
    </div>
  </div>

  <main>
    <section class="container">
      <div class="row d-flex justify-content-between align-items-center mt-3">
        <div class="col-lg-6">
          <h1 class="my-0 text-center text-lg-left">Mi perfil</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <h3 class="label-formulario">Tipo de persona</h3>
          <p>Física</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <h3 class="label-formulario">Nombre</h3>
          <p>Juan</p>
        </div>

        <div class="col-lg-4">
          <h3 class="label-formulario">Primer apellido</h3>
          <p>Pérez</p>
        </div>

        <div class="col-lg-4">
          <h3 class="label-formulario">Segundo apellido</h3>
          <p>Gómez</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <h3 class="label-formulario">No. Registro autorizado SGIRPC</h3>
          <p>1234567</p>
        </div>

        <div class="col-lg-4">
          <h3 class="label-formulario">Nivel</h3>
          <p>3</p>
        </div>

        <div class="col-lg-4">
          <h3 class="label-formulario">Vigencia</h3>
          <p>11/11/2020</p>
        </div>
      </div>

      <h2 class="mb-0">Domicilio</h2>
      <div class="row">
        <div class="col-lg-4">
          <h3 class="label-formulario">Calle</h3>
          <p>Allende</p>
        </div>

        <div class="col-lg-4">
          <h3 class="label-formulario">Número exterior</h3>
          <p>201</p>
        </div>

        <div class="col-lg-4">
          <h3 class="label-formulario">Número interior</h3>
          <p>18</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <h3 class="label-formulario">Colonia</h3>
          <p>Miguel Hidalgo</p>
        </div>

        <div class="col-lg-4">
          <h3 class="label-formulario">Alcaldía</h3>
          <p>Iztacalco</p>
        </div>

        <div class="col-lg-4">
          <h3 class="label-formulario">Código postal</h3>
          <p>19800</p>
        </div>
      </div>

      <h2 class="mb-0">Datos de contacto</h2>
      <div class="row">
        <div class="col-lg-4">
          <h3 class="label-formulario">Teléfono</h3>
          <p>55 5555 5555</p>
        </div>

        <div class="col-lg-4">
          <h3 class="label-formulario">Correo electrónico</h3>
          <p>correo@dominio.com</p>
        </div>
      </div>

      <div class="contenedor-boton justify-content-center seccion">
        <button class="btn-01" type="button" name="button">Editar</button>
      </div>

    </section>
  </main>
@endsection
