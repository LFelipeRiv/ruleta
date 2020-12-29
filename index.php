<!DOCTYPE html>
<!-- <html xmlns="http://www.w3.org/1999/xhtml" oncontextmenu="return false"> -->

<head runat="server">
  <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/> -->

  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap-reboot.min.css">

  <!-- <link rel="stylesheet" href="css/Formulario_style.css"/> -->
  <link rel="stylesheet" href="css/index.css" />

  <script src="js/Acciones_Formulario.js"></script>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
  <title>Formulario Ruleta</title>

</head>

<body class="bg-dark">

  <div class="my-container grid-container">

    <form id="formRuleta" class="" runat="server">

      <fieldset>

        <label>Nombre:</label>

        <input class="form-control " type="text" id="nombre" name="txtNombreContacto" />

        <label>Apellido:</label>

        <input class="form-control " type="text" id="apellido" name="txtApellidoContacto" />

        <label>Telefono:</label>

        <input class="form-control " type="text" id="telef" name="txtNumeroContacto" />

        <label>Correo:</label>

        <input class="form-control " type="email" id="correo" name="txtCorreoContacto" />

        <label>Factura:</label>

        <input class="form-control " type="text" id="factura" name="txtFacturaContacto" />

        <p>Digite número de factura si tiene</p>

        <!-- <label id="mensaje"></label> -->

        <div class="d-none alert msj-exito
        alert-success">Enviado con éxito</div>
        <div class="d-none alert msj-error  alert-danger"></div>

        <!-- <submit id="btn_jugar" class="btn btn-danger w-100" >Jugar</submit> -->

      </fieldset>
      <input id="btn_jugar" type="submit" class="w-100 btn btn-danger" value="Jugar">

    </form>

  </div>



  <!-- Lib -->
  <script src="./lib/jquery-3.5.1.min.js"></script>
  <script src="./lib/popper.min.js"></script>
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>

  <script src="js/service/service.js"></script>
  <script src="js/index/controller.js"></script>
  <!-- <script src="/js/index/index.js"></script> -->
</body>

</html>