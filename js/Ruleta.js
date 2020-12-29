function obtenerDatos() {   
    var nombre = $("#nombre").text();
	var apellido = $("#apellido").text();
	var correo = $("#correo").text();	 
    var telefono = $("#telef").text();
	var factura = $("#factura").text();
   
    setCookie("nombre", nombre, 1);
	setCookie("apellido", apellido, 1);
	setCookie("correo", correo, 1);
	setCookie("telefono", telefono, 1);
	setCookie("factura", factura, 1);
}
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function serverResult(arg) {
    //console.log(arg);
    //$("#mensaje").text(arg);
}
function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i <ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}