
<html>
  <head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Bloquea tu celular</title>
    <style>
        .btn-primary a:hover {
            background-color: #00843d !important;
            border-color: #00843d !important;
        }
        @media screen and (max-width: 620px) {
            table.body .wrapper p,
                table.body .wrapper ul,
                table.body .wrapper ol,
                table.body .wrapper td,
                table.body .wrapper span,
                table.body .wrapper a {
                font-size: 16px !important;
            }
            table.body .wrapper,
                table.body .article {
                padding: 10px !important;
            }
            table.body .content {
                padding: 0 !important;
            }
            table.body .container {
                padding: 0 !important;
                width: 100% !important;
            }
            table.body .main {
                border-radius: 0 !important;
            }
            table.body .btn table {
                width: 100% !important;
            }
            table.body .btn a {
                width: 100% !important;
            }
            table.body .img-responsive {
                height: auto !important;
                max-width: 100% !important;
                width: auto !important;
            }
            table.body .header {
                padding: 10px !important;
            }
        }
    </style>
  </head>
  <body style="background-color: #fafafa; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
    <table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;">
        <tr>
            <td class="container" style="display: block; margin: 0 auto; max-width: 720px; padding: 10px; width: 720px;">
                <div class="content" style="box-sizing: border-box; display: block; margin: 0 auto; max-width: 720px; padding: 10px;">
                    <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;"><img src="{{ url('./images/group-74.svg') }}" alt="Gobierno de la Ciudad de México" class="header-logo">Gobierno de la Ciudad de México | Locatel</span>
                    <table class="main" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;">
                        <tr>
                            <td style="border-bottom: 3px solid #ececec; padding: 10px 50px;" class="header">
                                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">
                                    <tr>
                                        <td>
                                            <a href="{{ url('') }}"><img src="{{ url('./images/group-74.svg')}}" alt="Gobierno de la Ciudad de México | Locatel" style="font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; height: 35px; max-width: 100%; object-fit: contain; vertical-align: middle; width: auto;"></a>
                                        </td>
                                        <td align="right">
                                            <h1 style="color: #00843d; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 16px; font-weight: 800; margin: 0;">Bloquea tu celular</h1>
                                        </td>
                                    </tr>
                                </table>
                            </td>


                        </tr>
                        <tr>
                        <td class="wrapper" style="box-sizing: border-box; padding: 30px 100px;">
                            <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                                <tr>

                                    <td>
    <p style="font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
      Estimado <b>{{$user->nombres.' '.$user->ape_pat.' '.$user->ape_mat}}</b>,
    </p>
    <p style="font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
      Tu IMEI ha sido registrado exitosamente!.
    </p>
    <p><b>Fecha de registro:</b> {{$user->created_at}} </p>
    <p><b>IMEI:</b> {{$user->num_imei}} </p>
    <p><b>Número de celular:</b> {{$user->num_telefono_des}} </p>
    <p><b>Pregunta secreta:</b> </p>
    <p><b>Respuesta:</b> {{$user->respuesta_des}} </p>
    <p><b>Compañia telefónica:</b>  </p>
    <p><b>Importante:</b>
    </p>
    <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">
        <tbody>
            <tr>
                <td align="left" style="padding-bottom: 15px;">
                    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                        <tbody>
                            <tr>
                                <p style="font-size: 12px">Si extravías o te roban tu celular, marca a Locatel al 56581111 para que no se pueda conectar a una nueva línea de celular.</p>
                                <td style="background-color: #3498db; border-radius: 5px; text-align: center;">
                                    <a href="{{ url('') }}" target="_blank" style="background-color: #00b056; border: solid 1px #00b056; border-radius: 5px; box-sizing: border-box; color: #ffffff; display: inline-block; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; cursor: pointer; text-decoration: none; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px;">
                                      https://tramites.cdmx.gob.mx/registro-imei/public/
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
    <p style="font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;">
      <b>Gracias por registrar su IMEI</b>
    </p>
</td>

                                </tr>
                            </table>
                        </td>
                        </tr>
                        <tr>
                            <td style="vertical-align: top;" class="footer">
                                <table border="0" cellpadding="0" cellspacing="0" style="background-color: #4a4e4e; border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">
                                    <tr>
                                        <td align="center" style="padding: 20px 0 5px;">
                                            <img src="{{ url('./images/group-74.svg')}}" alt="Gobierno de la Ciudad de México | Agencia Digital de Innovación Pública" style="font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; height: 41px; max-width: 100%; vertical-align: middle; width: auto;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="padding-bottom: 25px;">
                                            <p style="color: #ffffff; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 8px; font-weight: bold; margin: 0;">Bloquea tu celular</p>
                                            <p style="color: #ffffff; font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, 'Lucida Grande', sans-serif; font-size: 8px; margin: 0;">Diseñado y operado por la Agencia Digital de Innovación Pública</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
                <div>
                    <!--<p style="font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 10px; font-weight: normal; margin: 0; margin-left: 15px">La información y/o datos contenidos en este mensaje están dirigidos de manera exclusiva al destinatario indicado</p>-->
                    <p style="font-family: 'HelveticaNeue-Light', 'Helvetica Neue Light', 'Helvetica Neue', Helvetica, Arial, sans-serif; font-size: 10px; font-weight: normal; margin: 0; margin-left: 15px;margin-top: 20px;">El tratamiento de los datos personales se realizará de conformidad al AVISO DE PRIVACIDAD DE PROTECCIÓN DE DATOS PERSONALES DEL “SISTEMA DE DATOS PERSONALES  DE LA ESTRATEGIA BLOQUEA TU EQUIPO MÓVIL A TRAVÉS DEL CÓDIGO DE IDENTIDAD DE FABRICACIÓN DEL EQUIPO (IMEI)”.</p>
                </div>
            </td>
        </tr>
    </table>

  </body>
</html>
