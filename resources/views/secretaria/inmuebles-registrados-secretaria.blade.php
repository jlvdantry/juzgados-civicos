<!DOCTYPE html>
@extends('layouts.layout')
@section('content')
  <div class="pleca">
    <div class="container">
      <div class="boton-regresar justify-content-end">
        <a class="btn-ver-terceros" href="../terceros-acreditados-registrados">Terceros acreditados</a>
      </div>
    </div>
  </div>

  <main>
    <section class="container">
      <h1 class="mb-0">{{ count($inmuebles) > 0 ? $inmuebles[0]->getTercerAcreditado()->getFullName() : '' }}</h1>
      <h1 class="mb-0">Inmuebles registrados {{ count($inmuebles) > 0 ? $inmuebles[0]->getEstablecimiento()->getFullName() : '' }}</h1>

      <div class="overflow-auto">
        <table class="tabla seccion">
          <thead>
            <tr>
              <th>Identificación</th>
              <th>Calle o avenida</th>
              <th>Número exterior</th>
              <th>Ver</th>
            </tr>
          </thead>

          <tbody >
            @forelse($inmuebles as $item)
              <tr>
                <td class="font-weight-bold">{{ $item->id }}</td>
                <td class="font-weight-bold">{{ $item->calle }}</td>
                <td>{{ $item->exterior }}</td>
                <td><button class="btn-ver btn-perfil-establecimiento" data-id="{{ $item->id }}" type="button" name="button_ver"></button> </td>
              </tr>
            @empty
              <br>
            @endforelse
          </tbody>

        </table>
      </div>

    </section>
  </main>
@endsection
