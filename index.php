<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" oncontextmenu="return false">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/Formulario_style.css"/>
    <script src="js/Acciones_Formulario.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Formulario Ruleta</title>
</head>
<body>
    <form id="formRuleta" runat="server">
        <div>
            <table>
                <tr>
                <td>  
                    <label>Nombre:</label>
                    <br/>
                    <input type="text" id="nombre" name="fnombre" required/>
                </td>
              </tr>
              <tr>
                <td>  
                    <label>Apellido:</label>
                    <br/>
                    <input type="text" id="apellido" name="fapellido" required/>
                </td>
              </tr>
              <tr>
                <td>                    
                    <label>Telefono:</label>
                    <br/>
                    <input type="text" id="telef" name="ftelef" required/>
                </td>
              </tr>
              <tr>
                <td>
                   <label>Correo:</label>
                    <br/>
                    <input type="email" id="correo" name="fcorreo" required/>
                </td>
              </tr>
              <tr>
                <td>
                   <label>Factura:</label>
                    <br/>
                    <input type="text" id="factura" name="ffactura"/>
					<br/>
					<p>Digite número de factura si tiene</p>
                </td>
              </tr>
                <tr>
                   <td>
						<label id="mensaje"></label>
					</td>
              </tr>
            </table>
        </div>
    </form>
	<button id="btn_jugar" onclick="jugar()">Jugar</button>
</body>
</html>
