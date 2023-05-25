<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="ZF-Socios/Registro-Usuarios" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="ie=edge,chrome=1" http-equiv="x-ua-compatible" />
    <title>Registro-ZF Socios</title>
    <link rel="icon" href="https://zfsocios.com/wp-content/uploads/2022/08/icon_zf_white-100x100.png" sizes="32x32" />
    <link rel="icon" href="https://zfsocios.com/wp-content/uploads/2022/08/icon_zf_white-300x300.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://zfsocios.com/wp-content/uploads/2022/08/icon_zf_white-300x300.png" />        <meta charset="utf-8">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <link rel="stylesheet" href="/listado-precios/assets/css/bootstrap-login-form.min.css" />

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<style>
    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }
    .h-custom {
      height: calc(100% - 73px);
    }
    @media (max-width: 450px) {
      .h-custom {
        height: 100%;
      }
    }
</style>
<body>
<main class="container">
  <div class="container-fluid h-custom">
    <!-- Body-Form -->
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-6 col-lg-6 col-xl-5 align-items-center">
        <img src="https://zfsocios.com/listado-precios/assets/images/logo/Logo-ZF-Socios-NEGRO-CUADRADO-480x300.png" width="50%" class="img-fluid" alt="Logo ZF-Socios">
      </div>
      <div class="col-md-6 col-lg-6 col-xl-4 offset-xl-1">
        <form>
          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Registro de Socios Nuevos</p>
          </div>
          <!--
          <div class="form-outline mb-3">
              <input type="text" id="form-user-nomb" class="form-control form-control-lg" />
              <label class="form-label" for="form-user-nomb">Nombres</label>
          </div>
          <div class="form-outline mb-3">
              <input type="email" id="form-user-apll" class="form-control form-control-lg" />
              <label class="form-label" for="form-user-apll">Apellidos</label>
          </div>
          -->
          <div class="form-outline mb-3">
              <input type="text" id="form-user-apel" class="form-control form-control-lg" />
              <label class="form-label" for="form-user-apel">Cuenta de Correo</label>
          </div>
          <!--
          <div class="form-outline mb-3">
              <input type="text" id="form-celu-nmro" class="form-control form-control-lg" />
              <label class="form-label" for="form-celu-nmro">Número celular</label>
          </div>
          <div class="form-outline mb-3">
            <div class="input-group">
              <div class="form-outline" style="width: 20%">
                <input disabled type="text" id="form-docu" class="form-control form-control-lg" />
                <label class="form-label" for="form-docu">Tipo</label>
              </div>
              <select id="tipoDocIdent_ID" class="form-select" style="width: 25%">
                <option value="0" label="" selected>Elige</option>
                <option value="1" title="Documento Nacional de Identidad">DNI</option>
                <option value="2" title="Carnet de Extranjería">CEX</option>
                <option value="3" title="Carnet de Identidad">CIP</option>
              </select>
              <div class="form-outline" style="width: 54%">
                <input type="text" id="form-docu-nmro" class="form-control form-control-lg" />
                <label class="form-label" for="form-docu-nmro">Número documento</label>
              </div>
            </div>
          </div>
          -->
          <!-- Zona de PRUEBAS / BGN / -->
          <!--
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa fa-lock"></i></span>
            <input class="form-control form-control-lg" id="password" name="password" placeholder="Password" value="">
            <span class="input-group-text">
              <i class="fa fa-eye" id="togglePassword" style="cursor: pointer"></i>
            </span>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text"><i class="fa fa-lock"></i></span>
            <input class="form-control form-control-lg" id="password" name="password" placeholder="Password" value="">
            <span class="input-group-text">
              <i class="fa fa-eye" id="togglePassword" style="cursor: pointer"></i>
            </span>
          </div>
          -->
          <!-- Zona de PRUEBAS / END / -->
          <div class="form-outline mb-3">
            <input type="password" id="form-password" class="form-control form-control-lg" />
            <label class="form-label" for="form-password">Password</label>
          </div>
          <!--
          <div class="form-outline mb-3">
            <input type="password" id="form-pass-cnf" class="form-control form-control-lg" />
            <label class="form-label" for="form-pass-cnf">Password confirma</label>
          </div>
          -->
          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="button" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;"
              id="btnGuardar" name="btnGuardar" onClick="btnGuardarOnClick()">Guardar</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Tengo una cuenta, quiero <a href="/listado-precios" class="link-secondary">Ingresar</a></p>
          </div>
        </form>
      </div>
    </div>
    <!-- Footer -->
    <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
      <div class="text-white mb-3 mb-md-0">
        Copyright © 2023. Todos los derechos reservados, ZF-Sistemas.
      </div>
      <div>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="#!" class="text-white">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
    </div>
  </div>
</main>
<script type="text/javascript" src="/listado-precios/assets/js/mdb.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
$(document).ready(function () {
  // var hora = new date();
  console.log("Registro...");
});

function btnGuardarOnClick() {
  console.log("btnGuardarOnClick...");

  window.location.href = "/listado-precios";
}
</script>
<!-- script type="text/javascript" src="/registro/assets/js/registro.js"></script -->
</body>
</html>