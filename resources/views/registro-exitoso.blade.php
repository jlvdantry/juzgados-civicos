@extends('layouts.layout')
@section('content')
  <div class="pleca">
    <div class="container">
        <div class="boton-regresar">
           <a href="./"><img src="src/img/flecha-before.svg" alt=""> Regresar</a>
        </div>
    </div>
  </div>

  <main>
    <section class="container">
        <div class="aviso-registro-exitoso">
          <h1>¡Muchas gracias!</h1>
          <p>Te envíamos un correo electrónico con las instrucciones para validar tu cuenta ¡No olvides hacerlo!.</p>
        </div>
    </section>
  </main>
@endsection
