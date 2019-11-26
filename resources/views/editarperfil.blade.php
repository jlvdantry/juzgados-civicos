@extends('layouts.layout')
@section('content')
  <div class="pleca">
    <div class="container">
      <div class="boton-regresar">
         <a href="../expedientes"><img src="../src/img/flecha-before.svg" alt=""> Regresar</a>
      </div>
    </div>
  </div>
@foreach ($users as $user)
  <main id="editarperfil" data-id="{{$user->id}}">
    <section class="container">
      <h1 class="mb-0" id="queperfil" >{{ $user->desperfil }}</h1>
      <p>Los campos marcados con asterisco son obligatorios</p>
      <form class="needs-validation seccion" novalidate>
@if($user->desperfil=='Tercero Acreditado')
        <div class="row">
          <div class="col-md-6 mb-3">
            <legend class="form-label-custom">Tipo de persona*</legend>
            <div class="form-check-inline">
              <input class="form-check-input" type="radio" name="tipo_persona" id="fisica" value="F" checked required>
              <label class="form-check-label label-custom-check" for="fisica">
                Física
              </label>
            </div>
            <div class="form-check-inline">
              <input class="form-check-input" type="radio" name="tipo_persona" id="moral" value="M" required>
              <label class="form-check-label label-custom-check" for="moral">
                Moral
              </label>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3" id="nom">
            <label class="form-label-custom" for="nombres" id="lnombres">Nombre(s)*</label>
            <input autofocus type="text" class="form-control form-control-custom names" id="nombres" maxlength="30" value="{{ $user->nombres }}" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4 mb-3" id="apa">
            <label class="form-label-custom" for="ape_pat">Apellido paterno*</label>
            <input type="text" class="form-control form-control-custom names" id="ape_pat" maxlength="30" value="{{ $user->ape_pat }}" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4 mb-3" id="ama">
            <label class="form-label-custom" for="ape_mat">Apellido materno</label>
            <input type="text" class="form-control form-control-custom names" id="ape_mat" maxlength="30" value="{{ $user->ape_mat }}">
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
        </div>
        <script>
        function mayus(e) {
            e.value = e.value.toUpperCase();
        }
        </script>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="rfc">RFC*</label>
            <input type="text" onkeyup="mayus(this);" class="form-control form-control-custom" id="rfc" pattern="^([A-ZÑ\x26]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))((-)?([A-Z\d]{3}))?$" value="{{ $user->rfc }}" maxlength="14" required>
            <div class="invalid-feedback">
              Asegúrate de que el RFC introducido es correcto
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="sgirpc">No. Registro autorizado SGIRPC*</label>
            <input type="text" onkeyup="mayus(this);" class="form-control form-control-custom rfc-curp" id="sgirpc" value="{{ $user->sgirpc }}"
                       maxlength="25"  required>
            <div class="invalid-feedback">
              Asegúrate de que el No. Registro autorizado SGIRPC introducido es correcto, comienza con las siglas SGIRPC
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="stps">No. Registro STPS*</label>
            <input type="text" onkeyup="mayus(this);" class="form-control form-control-custom rfc-curp" id="stps" value="{{ $user->stps }}"
                       maxlength="30" required>
            <div class="invalid-feedback">
              Asegúrate de que el No. Registro STPS introducido es correcto, comienza con las siglas STPS
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="vigencia">Vigencia*</label>
            <input type="date" class="form-control form-control-custom" id="vigencia" value="{{ $user->vigencia }}" min="2017-01-01" required>
            <div class="invalid-feedback">
              Ingresa una fecha válida
            </div>
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
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="calle">Calle*</label>
            <input type="text" class="form-control form-control-custom street-names" id="calle" maxlength="30" value="{{ $user->calle }}" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="exterior">Número exterior*</label>
            <input type="text" class="form-control form-control-custom street-names" id="exterior" maxlength="30" value="{{ $user->exterior }}" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="interior">Número interior</label>
            <input type="text" class="form-control form-control-custom street-names" id="interior" maxlength="30" value="{{ $user->interior }}">
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="colonia">Colonia*</label>
            <input type="text" class="form-control form-control-custom street-names" id="colonia" value="{{ $user->colonia }}" required>
            <div class="invalid-feedback">
              Asegúrate que la información es correcta
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="id_alcaldia">Alcaldía*</label>



            <select class="form-control form-control-custom" id="id_alcaldia" name="id_alcaldia" required>

              @foreach ($alcaldias as $alcaldia)
              <option value="{{ $alcaldia['id_cat_alcaldia'] }}" >{{ $alcaldia->descripcion}} </option>
              @endforeach
          </select>

          <script>
            document.ready = document.getElementById("id_alcaldia").value = '{{ $user->id_alcaldia }}';
          </script>

            <div class="invalid-feedback">
              Selecciona una opción
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="cp">Código postal*</label>
            <input type="text" class="form-control form-control-custom numbers" id="cp" value="{{ $user->cp }}" maxlength="5" pattern="^[0-9]{4,5}$" required>
            <div class="invalid-feedback">
              Ingresa los cuatro o cinco dígitos de tu código postal
            </div>
          </div>
        </div>

        <h2 class="mb-0">Datos de contacto</h2>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="num_telefono">Teléfono*</label>
            <input type="text" class="form-control form-control-custom numbers" id="num_telefono" value="{{ $user->num_telefono }}" maxlength="10" required>
            <div class="invalid-feedback">
              Debe estar conformado por diez dígitos
            </div>
          </div>
        </div>
@else
        <div class="row">
          <div class="col-md-4 mb-3" id="nom">
            <label class="form-label-custom" for="nombres" id="lnombres">Nombre(s)*</label>
            <input autofocus type="text" class="form-control form-control-custom names" id="nombres" maxlength="30" value="{{ $user->nombres }}" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4 mb-3" id="apa">
            <label class="form-label-custom" for="ape_pat">Apellido paterno*</label>
            <input type="text" class="form-control form-control-custom names" id="ape_pat" maxlength="30" value="{{ $user->ape_pat }}" required>
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
          <div class="col-md-4 mb-3" id="ama">
            <label class="form-label-custom" for="ape_mat">Apellido materno</label>
            <input type="text" class="form-control form-control-custom names" id="ape_mat" maxlength="30" value="{{ $user->ape_mat }}">
            <div class="invalid-feedback">
              Asegúrate de introducir la información correctamente
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label class="form-label-custom" for="idjuzgado">Juzgado*</label>
            <select class="form-control form-control-custom" id="idjuzgado" name="idjuzgado" required disabled>
              @foreach ($juzgados as $juzgado)
              <option value="{{ $juzgado['id'] }}" {{ $juzgado->id==$user->idjuzgado ? "selected" : "" }} >{{ $juzgado->juzgado." ".$juzgado->direccion }} </option>
              @endforeach
          </select>

          <script>
            document.ready = document.getElementById("id_alcaldia").value = '{{ $user->id_alcaldia }}';
          </script>

            <div class="invalid-feedback">
              Selecciona una opción
            </div>
          </div>
        </div>


@endif

        <div class="contenedor-boton justify-content-center seccion">
          <button class="btn-01" type="submit" name="button" id="guardarcambios" >Guardar cambios</button>
        </div>
      </form>
      @endforeach

    </section>
  </main>
  @endsection
