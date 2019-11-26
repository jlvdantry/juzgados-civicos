<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Example 2</title>
    <link rel="stylesheet" type="text/css" href="{{url('')}}/dist/pdf.css">
  </head>
  <body>
          <div class="imagen-encabezado">
           <table class="tabla" >
            <tr>
            <td><a href="{{url('')}}"><img src="{{url('')}}/src/img/logo-juzgados-civicos.svg" alt="Logotipo del Gobierno de la Ciudad de México"></a></td>
            <td><h1>Expediente {{ $invoice }}</h1></td>
            </tr>
          </table>
            
          </div>

    <main>
      <div id="details" class="clearfix">
        <div id="invoice">
          <h1>INVOICE {{ $invoice }}</h1>
          <div class="red">Date of Invoice: {{ $date }}</div>
        </div>
      </div>
      <table class="tabla" border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">DESCRIPTION</th>
            <th class="unit">UNIT PRICE</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="no">{{ $data['quantity'] }}</td>
            <td class="desc">{{ $data['description'] }}</td>
            <td class="unit">{{ $data['price'] }}</td>
            <td class="total">{{ $data['total'] }} </td>
          </tr>

        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td >TOTAL</td>
            <td>$6,500.00</td>
          </tr>
        </tfoot>
      </table>
  </body>
</html>
