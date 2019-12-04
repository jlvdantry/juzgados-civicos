<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Constancia de hechos</title>
    <link rel="stylesheet" type="text/css" href="{{url('')}}/dist/pdf.css">
  </head>
  <body>
          <header class="imagen-encabezado">
           <table class="tabla" >
            <tr>
            <td><a href="{{url('')}}"><img src="{{url('')}}/src/img/logo-juzgados-civicos.svg" alt="Logotipo del Gobierno de la Ciudad de México"></a></td>
            <td><h2>Expediente {{ $infractor[0]->noexpediente }}</h2></td>
            </tr>
          </table>
          </header>
          <footer>
            <table class="tabla" >
              <tr>
               <td class="footdej" >Dirección Ejecutiva de Justicia Cívica Xocongo no. 131, 1er Piso.  Col. Tránsito.  Alcaldía Cuauhtémoc. C.P. 06820 Tel. 5709 6269 ext. 3001 y 3002</td>
               <td><a href="{{url('')}}"><img src="{{url('')}}/src/img/logo-juzgados-civicos.svg" alt="Logotipo del Gobierno de la Ciudad de México"></a></td>
               <td><h4>CIUDAD INNOVADORA Y DE DERECHOS</h4></td>
               </tr>
            </table>
          </footer>

    <main>
      <div id="details" class="clearfix">
        <div id="invoice">
          <h3>RAZÓN</h3>
          <div class="iw" >Con fundamento en los Art. 124 Fracc. I, II de la Ley de Cultura Cívica de la Ciudad de México; Art. 61 Fracc. I
del Reglamento de la Ley de Cultura Cívica de la Ciudad de México, el (la) persona juzgadora <b>{{ $infractor[0]->nombrejuez }}</b> adscrito al juzgado <b>{{ $infractor[0]->desjuzgado }}</b>, de la Dirección Ejecutiva de Justicia Cívica, lo que se asienta para debida constancia legal.
        </div>
        <br>
        <div>Expediente: <b>{{ $infractor[0]->noexpediente }}</b></div>
        <div>Nombre del probable infractor: <b>{{ $infractor[0]->nombres }}</b></div>
        <br>
          <h3>ACUERDO INICIAL</h3>
          <div class="iw" >En la Alcaldía <b>{{ $infractor[0]->desalcaldia }}</b>, Ciudad de México, siendo las <b>{{ $infractor[0]->horahechos }}</b>, del <b>{{ $infractor[0]->diahechos }}</b>, la persona juzgadora Lic. <b>{{ $infractor[0]->nombrejuez }}</b> adscrito al juzgado <b>{{ $infractor[0]->desjuzgado }}</b> , de la Dirección Ejecutiva de Justicia Cívica, quien asistido por la persona secretaria. Hace constar que en este acto se presenta(n) el(los) elemento(s) de <b>{{ $infractor[0]->areadeadscripcion_1 }}</b>, de nombre <b>{{ $infractor[0]->nombre_1 .' '.$infractor[0]->primer_apellido_1.' '.$infractor[0]->segundo_apellido_1 }}</b>,  <b>{{ $infractor[0]->placa1  }}</b>; presenta mediante boleta de remisión con folio <b>{{ $infractor[0]->boleta_remision  }}</b>, a quien dice llamarse:
      </div>
      <br>
      <table class="tablas">
         <tr>
            <td>
              <table class="tabladatos">
                 <tr><td class="tddatos">NOMBRE DEL PROBABLE INFRACTOR:</td><td><b>{{ $infractor[0]->nombres }}</b></td></tr>
                 <tr><td colspan=2 class="tddatos">EDAD :<b>{{ $infractor[0]->edad }}</b> SEXO: <b>{{ $infractor[0]->sexo }}</b> </td></tr>
                 <tr><td colspan=2 class="tddatos">DOMICILIO :<b>{{ $infractor[0]->calle_i .' '. $infractor[0]->exterior_i.' '.$infractor[0]->interior_i }}</b>, COL: <b>{{ $infractor[0]->colonia_i }}</b>, ALCALDÍA: <b>{{ $infractor[0]->desalcaldia_i }}</b></td></tr>
                 <tr><td colspan=2 class="tddatos">CURP :<b>{{ $infractor[0]->curp }}</b>, IDENTIFICACION: <b>{{ $infractor[0]->curp }}</b></td></tr>
              </table>
            </td>
            <td>
              <table >
                <div class="tablafoto">
                            <img src="{{url('')}}/storage/{{$infractor[0]->id_filesystem }}" alt="Fotografia del infractor">
                </div>
              </table>
            </td>
         </tr>
      </table>
      <br>
      <div>Por motivo de:</div><br>
      <div class="motivo"> {{ $infractor[0]->infraccion }} </div>
      <div class="lcc"> LEY CULTURA CIVICA, Artículo {{ $infractor[0]->articulo }}, Fracción {{ $infractor[0]->fraccion }} </div>
      <br>
      <div>Lugar de los hechos: <b>{{ $infractor[0]->calle_h .' '. $infractor[0]->exterior_h.' '.$infractor[0]->interior_h }}</b>, COL: <b>{{ $infractor[0]->colonia_h }}</b>, ALCALDÍA: <b>{{ $infractor[0]->desalcaldia }} </b></div><br>
      <div>Objetos relacionados con la falta administrativa: @if ($infractor[0]->objetos=="") Sin objetos relacionados @else <b>{{ $infractor[0]->objetos }} </b> @endif </div>
      <br>
      @if ($infractor[0]->n!="") <div class="lcc">{{ $infractor[0]->n }}</div> @endif
      @if ($infractor[0]->o!="") <div class="lcc">{{ $infractor[0]->o }}</div> @endif
     <div class="page-break"></div>
      <div>
          <h3>RADICACIÓN</h3>
          <br>
<div >En concordancia con lo anterior y con fundamento en:</div>
<div class="lccr">Constitución Política de los Estados Unidos Mexicanos, Art. 14 Párrafo 2, 3, Art. 16 Párrafo 1, 2, 3, 4, 6. Art. 21 Párrafo 4.</div>
@if ($infractor[0]->p!="") <div class="lcc">Ley de Cultura Cívica de la Ciudad de México, Art. 1, 3, Fracc. XI; 4, 5, 7 Fracc. VII.</div> @endif
@if ($infractor[0]->q!="") <div class="lcc">Reglamento de la Ley de Cultura Cívica de la Ciudad de México, Art. 1, 2, Fracc. XII, Art. 6, 8, 14, 15.</div> @endif
<div class="lccr">Convención Americana de los Derechos Humanos, Art. 1, Numeral 1; Art. 7 Numeral 1, 2, 3.</div>
<br><br>
<div >Se ordena dar intervención al Médico de apoyo al Juzgado, para que determine el estado Psico-físico de la Persona probable infractor</div>
@if ($infractor[0]->v!="")<div class="lcc">Ley de Cultura Cívica de la Ciudad de México, Art. 124, Fracc. II</div> @endif
@if ($infractor[0]->w!="")<div class="lcc">Reglamento de la Ley de Cultura Cívica de la Ciudad de México, Art. 61, Fracc. I</div> @endif
<div class="lccr">Código Nacional de Procedimientos Penales, Art. 368 (supletorio)</div>
<br><br>
<div class="cadf">Conste, autorizo y doy Fe.</div>
<br><br><br>
          <h3>ENVIO Y CERTIFICACIÓN DEL MÉDICO LEGISTA.</h3>
<br><br>
<div >La persona secretario, hace constar que se agrega al expediente el certificado médico emitido por el médico legista del juzgado cívico.</div>
<div class="lccr">Ley de Cultura Cívica de la Ciudad de México, Art. 124, Fracc. II</div>
<div class="lccr">Reglamento de la Ley de Cultura Cívica de la Ciudad de México, Art. 61, Fracc. I</div>
<br><br><br><br>
          <h3>SECRETARIO</h3>
      </div>
     <div class="page-break"></div>
          <h3>INICIO DE AUDIENCIA</h3>
<div >Derechos del probable infractor:</div>
<div class="iw" ><b>I</b>. Que se le informe en todo momento, los hechos que se le atribuyen y los derechos que le asisten; le sean leídos los derechos contemplados por el artículo 20 de la Constitución Política de los Estados Unidos Mexicanos y la Constitución Política de la Ciudad de México;</div>
<div ><b>II</b>. Que se reconozca su derecho a la presunción de inocencia;</div>
<div ><b>III</b>. Recibir trato digno;</div>
<div class="iw" ><b>IV</b>. Recibir alimentación, agua, asistencia médica y cualesquiera otras atenciones de urgencia durante el cumplimiento o ejecución de su arresto;</div>
<div class="iw" ><b>V</b>. Solicitar la conmutación de la pena por trabajo en favor de la comunidad en los casos que proceda;</div>
<div ><b>VI</b>. Contar con un defensor de su confianza;</div>
<div ><b>VII</b>. Ser oído en audiencia pública por la Persona Juzgadora;</div>
<div class="iw"><b>VIII</b<. Hacer del conocimiento de un familiar o persona que desee, los motivos de su detención y el lugar en que se hallará bajo custodia en todo momento (LLAMADA TELEFÓNICA);</div>
<div ><b>IX</b>. Recurrir las sanciones impuestas por la Persona Juzgadora, en los términos de esta Ley;</div>
<div ><b>X</b>. Cumplir su arresto en espacios dignos;</div>
<div class="iw" ><b>XI</b>. No recibir sanciones que excedan lo dispuesto en la Constitución Política de los Estados Unidos Mexicanos;</div>
<div ><b>XII</b>. Solicitar la conmutación del arresto por la multa correspondiente en términos de esta Ley; y</div>
<div ><b>XIII</b>. Las demás que señalen las disposiciones aplicables</div>
<br>
@if ($infractor[0]->aa!="")<div class="lcc">{{ $infractor[0]->aa }}</div></div>@endif
@if ($infractor[0]->ab!="")<div class="lcc">{{ $infractor[0]->ab }}</div>@endif
@if ($infractor[0]->ac!="")<div class="lcc">{{ $infractor[0]->ac }}</div>@endif
<div class="lccr">Convención Americana de los Derechos Humanos, Art. 1, Numeral 2; Art. 6 Numeral 1, 2</div>
<br>
<div >Una vez que el probable infractor fue enterado de los anteriores derechos, en uso de la voz manifestó lo siguiente:</div>
<br>
<div>El (la) C. {{ $infractor[0]->nombres }} </div>
<div>“Realicé mi llamada telefónica y deseo defenderme por mi propio derecho.”</div>
<br>
@if ($infractor[0]->aa!="")<div class="lcc">{{ $infractor[0]->aa }} </div></div>@endif
@if ($infractor[0]->ab!="")<div class="lcc">{{ $infractor[0]->ab }} </div>@endif
@if ($infractor[0]->ac!="")<div class="lcc">{{ $infractor[0]->ac }} </div>@endif
<div class="lccr">Convención Americana de los Derechos Humanos, Art. 1, Numeral 2; Art. 6 Numeral 1, 2</div>
          <h3>Autorizo y doy Fe.</h3>
<div>
<table class="tabla" >
<tr> <td> JUEZ </td>
     <td> SECRETARIO </td>
</tr>
<tr><td><br><td></tr>
<tr> <td>________________________________________</td>
     <td>________________________________________</td>
</tr>
<tr> <td> {{ $infractor[0]->nombrejuez }}</td>
     <td> {{ $infractor[0]->nombresecretario }}</td>
</tr>
</table>
     <div class="page-break"></div>
          <h3>LECTURA DE BOLETA DE REMISIÓN</h3>
<br>
<div>Se procede hacerle saber al probable infractor la naturaleza del hecho que se les atribuye, a fin de que conozca la infracción que se le atribuye y pueda contestar el cargo; para ello se dará lectura a la boleta de remisión {{ $infractor[0]->boleta_remision }}</div>
<br>
<div class="lccr">Constitución Política de los Estados Unidos Mexicanos, Art. 14 Párrafo 2, 3, Art. 16 Párrafo 1, 2, 3, 4, 6. Art. 21 Párrafo 4.</div>
@if ($infractor[0]->ae!="")<div class="lcc">{{ $infractor[0]->ae }}</div>@endif
<div class="lccr">Reglamento de la Ley de Cultura Cívica de la Ciudad de México, Art. 1, 2, Fracc. XII, Art. 6, 8, 14, 15.</div>
<div class="lccr">Convención Americana de los Derechos Humanos, Art. 1, Numeral 1; Art. 7 Numeral 1, 2, 3.</div>
<br>
<br>
          <h3>DECLARACIÓN DEL PROBABLE INFRACTOR</h3>
<br>
<div>En acto continuo, una vez enterado de lo anterior, el (la) presunto infractor, en relación a los hechos imputados manifestó lo siguiente:</div>
<br>

<div><table class="tabla" ><tr><td class='tddeclaracion rounded' >{{ $infractor[0]->declaracion }}</td></tr></table></div>
<br>
<br>
<div>{{ $infractor[0]->nombres }} </div>
<br>
<div class="lccr">Ley de Cultura Cívica de la Ciudad de México, Art. 124, Fracc. II</div>
<div class="lccr">Reglamento de la Ley de Cultura Cívica de la Ciudad de México, Art. 61, Fracc. I</div>
<div class="lccr">Código Nacional de Procedimientos Penales, Art. 368 (supletorio)</div>
<br>
<table class="tabla" >
<tr> <td> JUEZ </td>
     <td> SECRETARIO </td>
</tr>
<tr><td><br><td></tr>
<tr> <td>________________________________________</td>
     <td>________________________________________</td>
</tr>
<tr> <td> {{ $infractor[0]->nombrejuez }}</td>
     <td> {{ $infractor[0]->nombresecretario }}</td>
</tr>
</table>
     <div class="page-break"></div>
          <h3>ADMISIÓN Y DESAHOGO DE PRUEBAS</h3>
<br>
<div>Acto seguido, la persona juzgadora respecto a la admisión y desahogo de las pruebas en el
presente procedimiento acuerda y se admiten:</div>
<br>
@if ($infractor[0]->ag!="")<div class="lcc">{{ $infractor[0]->ag }} </div>@endif
@if ($infractor[0]->ah!="")<div class="lcc">{{ $infractor[0]->ah }} </div>@endif
<div class="lccr">Reglamento de la Ley de Cultura Cívica del Distrito Federal, art. 27</div>
<br>
<div><b>PRIMERA. - LAS DOCUMENTALES PÚBLICAS</b>, consistentes en la boleta de remisión con Nùmero de
folio: {{ $infractor[0]->boleta_remision }}  donde los policías remitentes refieren que la presentación del probable infractor es:
,
{{ $infractor[0]->nombres }}
la cual viene a ser robustecida por: checardedondesetomaestedato
</div>
<br>
<div><b>SEGUNDA. - LAS PERICIALES MÉDICAS</b>, consistentes en el certificado médico mediante el que se
valora al C. {{ $infractor[0]->nombres }} y que a su vez es reforzada con el no. de
certificado médico: {{ $infractor[0]->tirilla }}
</div>
<br>
<div><b>TERCERA. - LOS OBJETOS MATERIALES</b>, consistentes en <span class='divide'>{{ $infractor[0]->objetos }}</span>
 mismos que se encuentran descritos en la boleta de remisión respectiva.
</div>
<br>
<div><b>CUARTA. - LA DECLARACIÓN</b>, a cargo del (la) C. {{ $infractor[0]->nombres }} de forma
libre y espontánea y sin coacción alguna, reconoció haber cometido la falta imputada, con lo que
se ubica en las circunstancias de modo, tiempo y lugar de la presunta infracción.
</div>
<br>
<div>En acto continuo, se hace constar, que una vez admitidas y desahogadas antes
aducidas, no habiendo alguna pendiente por desahogarse, ni ofrecerse por alguna de las partes, se
procede a declarar por cerrada la audiencia oral, por lo que esta autoridad procede a valorar y
resolver sobre la responsabilidad del presunto responsable.
</div>
@if ($infractor[0]->ag!="")<div class="lcc">{{ $infractor[0]->ag }}</div>@endif
<br>
     <div class="page-break"></div>
          <h3>CONSIDERANDO</h3>
<br>
<div>PRIMERO. - Esta autoridad procede a valorar las siguientes pruebas:</div>
<br>
@if ($infractor[0]->ai!="")<div class="lcc">{{ $infractor[0]->ai }}</div>@endif
@if ($infractor[0]->aj!="")<div class="lcc">{{ $infractor[0]->aj }}</div>@endif
<br>
<div>
LA DOCUMENTAL PÚBLICA, consistente en la boleta de remisión no. {{ $infractor[0]->boleta_remision }} debidamente
rectificada por parte de los elementos de la SSC, de la que se desprende la imputación directa de la
comisión de la probable infracción administrativa imputada en su contra, documental público a la
que se le concede valor probatorio pleno a la que se desahoga por su propia y especial naturaleza.
</div>
<br>
<div>
LA CERTIFICACIÓN MÉDICA, a la cual se le concede valor probatorio pleno la que se desahoga por
su propia y especial naturaleza, de la que se desprende el estado psicofísico, así como el tiempo
aproximado de recuperación en que se encontraba al momento de su presentación en este
Juzgado Cívico.
</div>
<br>
<div>
OBJETOS MATERIALES, mismos que se encuentran debidamente descritos en la boleta de
remisión, hacen prueba plena para acreditar la conducta que se le imputa al presentado.
</div>
<br>
<div>
LA DECLARACIÓN REALIZADA POR EL (LA) PROBABLE INFRACTOR, {{ $infractor[0]->nombres }}
 respecto de su declaración expresa y tácita, formulada de manera libre y espontánea
de la que se desprende que acepta la falta imputada, toda vez que reconoce haber cometido la
falta señalada.
</div>
<br>
<div class="lccr">Ley de Cultura Cívica de la Ciudad de México, Art. 54.</div>
<br>
<div>
LA INSTRUMENTAL DE ACTUACIONES Y LA PRESUNCIONAL LEGAL Y HUMANA, se tienen
desahogadas por su propia y especial naturaleza…
En conclusión, es por todo lo anterior expuesto que se observa una perfecta ubicación del (la)
presentado(a) en circunstancias de modo, tiempo y lugar de ejecución de la falta que se le
atribuye, de forma concordante con la que acusación directa y categórica realizada por los policías
remitentes en la boleta de remisión, por lo que este juzgador considera:
</div>
<br>
<div>
PRIMERO. - Que la conducta desplegada por el (la) C. {{ $infractor[0]->nombres }}
encuadró a la perfección en la hipótesis regulada, misma que se encuentra señalada en la boleta
de remisión y que indica: {{ $infractor[0]->infraccion }}, {{ $infractor[0]->articulo }}, {{ $infractor[0]->fraccion }}.
Con lo que queda plenamente acreditada la antijuridicidad de su conducta, al no existir causa
alguna que le dé licitud a la misma, ni tampoco, razón que los exima de su responsabilidad, no
obstante, quiso, señaló y aceptó el resultado de esta y por ende las consecuencias jurídicas,
sociales y administrativas, en consecuencia, es dolosamente culpable de la conducta atribuida.
</div>
<br>
<div>
SEGUNDO. - Por lo que hace a los objetos recogidos consistentes: <span  class='divide'>{{ $infractor[0]->objetos }}</span>
</div>
<br>
<div class="lcc">Reglamento de la Ley de Cultura Cívica de la Ciudad de México, Art. 56</div>
     <div class="page-break"></div>
          <h3>RESOLUTIVOS</h3>
<div>Con base en lo anteriormente considerado y valorado, esta unidad administrativa, resuelve:</div>
@if ($infractor[0]->ak!="")<div class="lcc">$infractor[0]->ak</div>@endif
@if ($infractor[0]->al!="")<div class="lcc">$infractor[0]->al</div>@endif
<br>
<div>PRIMERO. – Este Juzgado Cívico es competente para conocer del presente asunto.</div>
<br>
<div>SEGUNDO. – En consecuencia, de lo anterior él (la) C. {{ $infractor[0]->nombres }}  es
administrativamente responsable de la conducta atribuida, por lo que se le sanciona con:
</div>
<br>
@switch ($infractor[0]->tiposancion) 
     @case(2)
        MULTA DE {{ $infractor[0]->sancionaplicada*10 }} PESOS ( {{  $infractor[0]->sancionaplicada }} UNIDADES DE MEDIDA )
        @break
     @case(3)
        SERVICIO COMUNITARIO DE {{ $infractor[0]->sancionaplicada }} HORAS
        @break
     @case(4)
        ARRESTO DE  {{ $infractor[0]->sancionaplicada }} HORAS
        @break
@endswitch
</div>
<div class="lccr">{{ $infractor[0]->infraccion }}, {{ $infractor[0]->fraccion }}</div>
<div class="lccr">Ley de Cultura Cívica, Art. 30, Art. 31, Art. 32.</div>
<br>
<div>TERCERO. – Notifíquese personalmente al infractor, sobre el contenido de la presente resolución…</div>
<div class="lccr">Ley de Cultura Cívica, Art. 41</div>
<br>
<div>CUARTO. – Para el caso de que el infractor no desee pagar su multa…</div>
<div class="lccr">Ley de Cultura Cívica, Art. 10 fracc. III</div>
<br>
<div>QUINTO. – Procédase a integrar y resguardar el presente expediente.</div>
<div class="lccr">Ley de Cultura Cívica, Art. 124 fracc. V</div>
<br>
<div>SEXTO. – Se ordena a dar cumplimiento a lo dispuesto</div>
<div class="lccr">Ley de Cultura Cívica, Art. 138</div>
<br>
<div>SEPTIMO. – Hágase del conocimiento del servicio público de localización telefónica del Distrito
Federal.</div>
<div class="lccr">Ley de Cultura Cívica, Art. 68, Art. 115 fracc. XI</div>
<br>
<div>OCTAVO. – Apercíbase de no reincidir y cúmplase</div>
<div class="lccr">Ley de Cultura Cívica, Art. 115 fracc. I,II,IV; Art. 124 fracc I, II</div>
<div class="lccr">Reglamento de la Ley de Cultura Cívica, Art. 61 fracc. I</div>
<br>
          <h3>Consté y doy Fe.</h3>
<div>
<table class="tabla" >
<tr> <td> JUEZ </td>
     <td> SECRETARIO </td>
</tr>
<tr><td><br><td></tr>
<tr> <td>________________________________________</td>
     <td>________________________________________</td>
</tr>
<tr> <td> {{ $infractor[0]->nombrejuez }}</td>
     <td> {{ $infractor[0]->nombresecretario }}</td>
</tr>
</table>

  </body>
</html>
