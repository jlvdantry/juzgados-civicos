@extends('layouts.layout')
@section('content')
  <div class="pleca">
    <div class="container">
        <div class="boton-regresar">
           <a href="{{ url('') }}/establecimientos-registrados"><img src="src/img/flecha-before.svg" alt=""> Regresar</a>
        </div>
    </div>
  </div>

  <main>
    <section class="container">
        <div class="aviso-registro-exitoso">
          <h1>Aviso</h1>
          <p>Tu información ha sido actualizada.</p>
        </div>
    </section>
  </main>
@endsection
