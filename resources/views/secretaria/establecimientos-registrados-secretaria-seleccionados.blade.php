<!DOCTYPE html>
<html lang="es" class="html-custom">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="dist/app.css">
  <title>Plataforma Digital para el Ingreso de Programas Internos de Protección Civil</title>
</head>

<body class="body-custom">

  <header class="container my-3">
    <div class="row d-flex justify-content-lg-between">
      <div class="col-lg-4">
        <img src="src/img/logo-encabezado.svg" alt="">
      </div>

      <div class="col-lg-4 datos-usuario">
        <a class="usuario dropdown-toggle" href="#" id="menu_usuario" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <img src="src/img/usuario.svg" alt="">
          <p class="nombre-usuario">Laura Díaz</p>
        </a>
        <p>Secretaría de Protección Civil</p>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="menu_usuario">
          <a class="dropdown-item-custom" href="#">Cerrar sesión</a>
        </div>
      </div>
  </header>
  <div class="pleca">
    <div class="container">
      <div class="boton-regresar justify-content-end">
        <a href="">Terceros acreditados</a>
      </div>
    </div>
  </div>

  <main>
    <section class="container">
      <h1 class="mb-0">Establecimientos seleccionados para evaluación - <span>Trimestre 03/2019</span></h1>

      <form class="formulario seccion" action="index.html" method="post">
        <div class="row d-flex align-items-center">
          <div class="col-lg-4">
            <label for="nombre_solicitante">Nombre del solicitante</label>
            <input type="text" name="nombre_solicitante" value="" placeholder="Escribe el nombre del solicitante" required>
          </div>
          <div class="col-lg-3">
            <label for="folio_establecimiento">Folio del establecimiento</label>
            <input type="text" name="folio_establecimiento" value="" placeholder="AABBCC00" required>
          </div>
          <div class="col-lg-2 mt-lg-3">
            <button class="btn-01 w-100" type="submit" name="button">Ingresar</button>
          </div>
          <div class="col-lg-3">
            <div class="d-flex justify-content-lg-end justify-content-center align-items-center">
              <label for="action">
                <p class="mr-2">Todos</p>
              </label>
              <div class="custom-control custom-switch custom-switch-double d-flex align-items-center">
                <input type="checkbox" class="custom-control-input" id="action" data-status="preparacion">
                <label class="custom-control-label" for="action">
                  <p>Seleccionados</p>
                </label>
              </div>
            </div>
          </div>
        </div>
      </form>

      <div class="overflow-auto">
        <table class="tabla">
          <thead>
            <tr>
              <th>Folio</th>
              <th>Solicitante</th>
              <th>Alcaldía</th>
              <th>Evaluado</th>
              <th>Ver perfil</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="font-weight-bold">AABBCC04</td>
              <td class="font-weight-bold">Empresa S.A de C.V.</td>
              <td>Tlalpan</td>
              <td class="green">Sí</td>
              <td><button class="btn-ver" type="button" name="button_ver"> </button> </td>
            </tr>

            <tr>
              <td class="font-weight-bold">AABBCC73</td>
              <td class="font-weight-bold">Tomás Alva Roma</td>
              <td>Miguel Hidalgo</td>
              <td class="green">Sí</td>
              <td><button class="btn-ver" type="button" name="button_ver"> </button> </td>
            </tr>

            <tr>
              <td class="font-weight-bold">AABBCC12</td>
              <td class="font-weight-bold">Empresa S.A de C.V.</td>
              <td>Cuauhtémoc</td>
              <td class="orange">Pendiente</td>
              <td><button class="btn-ver" type="button" name="button_ver"> </button> </td>
            </tr>

            <tr>
              <td class="font-weight-bold">AABBCC56</td>
              <td class="font-weight-bold">Luis Pérez Tello</td>
              <td>Venustiano Carranza</td>
              <td class="orange">Pendiente</td>
              <td><button class="btn-ver" type="button" name="button_ver"> </button> </td>
            </tr>

            <tr>
              <td class="font-weight-bold">AABBCC92</td>
              <td class="font-weight-bold">Empresa S.A de C.V.</td>
              <td>Benito Juárez</td>
              <td class="green">Sí</td>
              <td><button class="btn-ver" type="button" name="button_ver"> </button> </td>
            </tr>

            <tr>
              <td class="font-weight-bold">AABBCC19</td>
              <td class="font-weight-bold">Juana López Morelos</td>
              <td>Tlalpan</td>
              <td class="green">Sí</td>
              <td><button class="btn-ver" type="button" name="button_ver"> </button> </td>
            </tr>

            <tr>
              <td class="font-weight-bold">AABBCC25</td>
              <td class="font-weight-bold">Ana Lora Duarte</td>
              <td>Cuajimalpa</td>
              <td class="green">Sí</td>
              <td><button class="btn-ver" type="button" name="button_ver"> </button> </td>
            </tr>
          </tbody>

        </table>
      </div>

    </section>
  </main>

  <footer class="footer">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center">
        <div class="col-lg-3 col-md-7 col-9">
          <img src="src/img/gobierno-y-adip.svg">
        </div>

        <div class="col-lg-9 col-10 text-center text-lg-left mt-3 mt-lg-0">
          <p>Plataforma Digital para Ingreso del Programa Interno de Protección Civil</p>
          <p class="font-weight-bold">Dise&#241;ado y operado por la Agencia Digital de Innovación Pública</p>
        </div>
      </div>
    </div>
  </footer>
  <script src="dist/app.js"></script>
</body>

</html>
