@extends('layouts.layout')
@section('content')
  <div class="pleca">
    <div class="container">
        <div class="boton-regresar">
           <a href="{{ url('') }}/establecimientos-registrados"><img src="../src/img/flecha-before.svg" alt=""> Regresar</a>
        </div>
    </div>
  </div>

  <main>
    <section class="container">
        <div class="aviso-inmueble-exitoso">
          <h1>Notificación de Registro</h1>
          <p>En atención a su solicitud de registro de <b>Programa Interno de Protección Civil</b>, y una vez que fue presentada la información y documentación necesaria para su realización de conformidad con lo establecido en los artículos <b>56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 71, 71, de la Ley de Gestión Integral de Riesgos y Protección Civil, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55 y 56</b> de su Reglamento, Términos de Referencia y demás disposiciones legales aplicables, relativo al establecimiento denominado <b>{{ $inmueble->alias }}</b> ubicado en <b> {{ $inmueble->calle.' '.$inmueble->exterior.' '.$inmueble->interior.' '.$inmueble->colonia }} </b> el mismo <b>ha sido registrado en la Plataforma Digital de Programa Interno de Protección Civil</b>, cumpliendo con lo establecido en los artículos 66 de la Ley de Gestión Integral de Riesgos y Protección Civil, 40 de su Reglamento, y demás aplicables.</p>

          <p class="mt-3">Asimismo, para la revalidación del Programa Interno de Protección Civil, <b>deberá apegarse a lo establecido por el artículo 56</b> de la Ley de Gestión Integral de Riesgos y Protección Civil.</p>

          <p class="mt-3">Finalmente, los Programas Internos deberán actualizarse en un plazo <b>no mayor a 30 días hábiles contados a partir de la realización de la modificación</b>, cuando se modifique el Comité Interno, existan riesgos internos o externos diferentes a los ya analizados, nombre, denominación o razón social, giro o actividad económica, tecnología utilizada o procesos de producción, así como cuando existan modificaciones estructurales en el inmueble, siendo la autoridad competente quien realizará la revisión y, en su caso, dará por atendida la actualización del programa.
          </p>
                    <p style="text-align:center; font-size: .9rem; font-weight: bold; text-decoration: none; color: #5d5d5d; line-height: 1.4rem;">Folio No. SGIRPC-PIPC-<span>{{ $inmueble->id }} </span>-<span> {{ substr($inmueble->updated_at,0,4) }} </span></p>

        </div>
    </section>
  </main>
@endsection
