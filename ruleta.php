<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <!--Favicon-->
    <link rel="icon" type="image/png" href="src/img/ruletafavicon.png" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Totto ruleta</title>
    <!--Ruleta-->
    <script src="js/Winwheel.min.js"></script>
    <script src="js/TweenMax.min.js"></script>
	<script src="js/Ruleta.js"></script>
    <!--jQuery-->
    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <!--Sweet Alert-->
    <link href="css/sweetalert2.css" rel="stylesheet" />
    <script src="js/sweetalert2.min.js"></script>
    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <!--Font Awesome-->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <!--Imagen de Fondo-->
    <style type="text/css">
        body {
            background-color: #000000;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: 853px 480px;
            background-size: 100% 100%;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <!--Canvas Rueda-->
            <style>
                #canvasContainer{
                    background-image: url(src/img/rueda_logo.png);
                    background-repeat: no-repeat;
                    background-position: center;
                    width: 700px;
                    height: 690px;
                    cursor:pointer;
					margin-left: 20vw;
                }
				#btn_girar{
					margin-left: 32vw;
					margin-bottom:3vh;
				}
            </style>
            <div class="container-fluid">
                <div class="row">
                    <!--Logotipo ruleta
                    <div class="col-sm-4">
                        <img src="src/img/La-ruleta-de-la-vida.png" class="img-fluid" alt="Responsive image" />
                    </div>-->
                    <div class="col-sm-4" class="align-baseline" style="width: 200px;">
                        <div class="mx-auto" style="width: 300px;">
                            <br />
                            <!--Boton Girar-->    
                    <input type="button" onclick="miRuleta.startAnimation();" class="btn btn-primary btn-lg btn-block" id="btn_girar" value="Girar Ruleta"/>
                            <div id="canvasContainer">
                                <canvas id="canvas" width="700" height="690">
                                    Canvas not supported, please user another browser.
                                </canvas>
                            </div>
      <canvas>
          <!--Alertas-->
             <script>
                 function alerta_premio(premio){
                     swal({
                         title: '<i><font color="#84C430"><h2><strong>¡Premio!</strong></h2></font></i> ',
                         imageUrl: 'src/img/alert.png',
                         imageWidth: 221,
                         imageHeight: 137,
                         imageAlt: 'Custom image',
                          width: '100%',
                          padding: 60,
                         html:
							' <h3><small><p align="justify"><br />Felicidades, obtuviste un premio de '+ premio + '<p></small></h3>',
                         showCloseButton: true,
                         focusConfirm: false,
                         confirmButtonText:
                         '<i class="fa fa-thumbs-up"></i> ¡Genial!',
                         confirmButtonAriaLabel: 'Thumbs up, great!',
                         })}

                 function alerta_intento(){
                     swal({
                    title: '<i><font color="#EE3A45"><h2><strong>¡Muchas gracias por participar!</font></strong></h2></i> ',
                            imageUrl: 'src/img/alert.png',
                            imageWidth: 221,
                            imageHeight: 137,
                            imageAlt: 'Custom image',
                            width: '100%',
                            padding: 60,
                            html:' <h3>Vuelva a intentar</h3>',
                            showCloseButton: true,
                            focusConfirm: false,
                            confirmButtonText:
                            '<i class="fa fa-thumbs-up"></i> ¡Genial!',
                            confirmButtonAriaLabel: 'Thumbs up, great!',
                            })}
                //  <!-- Ruletasegmentos-->
    var miRuleta = new Winwheel({
        'numSegments': 72, // Número de segmentos
        'outerRadius': 270, // Radio externo
        'innerRadius': 80,  
        'segments':[ // Datos de los segmentos
   { 'fillStyle': '#0066FF', 'toxt': 'Premio', 'number': '1' },
   { 'fillStyle': '#630062', 'toxt': 'Muchas gracias por participar', 'number': '2'}, 
   { 'fillStyle': '#FF6659', 'toxt': 'Premio', 'number': '3'},   
   { 'fillStyle': '#0066FF', 'toxt': 'Muchas gracias por participar', 'number': '4'},
   { 'fillStyle': '#630062', 'toxt': 'Premio', 'number': '5'},
   { 'fillStyle': '#FF6659', 'toxt': 'Muchas gracias por participar', 'number': '6'},  
   { 'fillStyle': '#0066FF', 'toxt': 'Premio', 'number': '7'},
   { 'fillStyle': '#630062', 'toxt': 'Muchas gracias por participar', 'number': '8'},
   { 'fillStyle': '#FF6659', 'toxt': 'Premio', 'number': '9'},  
   { 'fillStyle': '#0066FF', 'toxt': 'Muchas gracias por participar', 'number': '10'},
   { 'fillStyle': '#630062', 'toxt': 'Premio', 'number': '11'},
	{ 'fillStyle': '#FF6659', 'toxt': 'Muchas gracias por participar', 'number': '12'},	
	{ 'fillStyle': '#0066FF', 'toxt': 'Premio', 'number': '13'},
	{ 'fillStyle': '#630062', 'toxt': 'Muchas gracias por participar', 'number': '14'},
	{ 'fillStyle': '#FF6659', 'toxt': 'Premio', 'number': '15'},	
	{ 'fillStyle': '#0066FF', 'toxt': 'Muchas gracias por participar', 'number': '16'},
	{ 'fillStyle': '#630062', 'toxt': 'Premio', 'number': '17'},
	{ 'fillStyle': '#FF6659', 'toxt': 'Muchas gracias por participar', 'number': '18'},	
	{ 'fillStyle': '#0066FF', 'toxt': 'Premio', 'number': '19'},
	{ 'fillStyle': '#630062', 'toxt': 'Muchas gracias por participar', 'number': '20'},
	{ 'fillStyle': '#FF6659', 'toxt': 'Premio', 'number': '21'},	
	{ 'fillStyle': '#0066FF', 'toxt': 'Muchas gracias por participar', 'number': '22'},
	{ 'fillStyle': '#630062', 'toxt': 'Premio', 'number': '23'},
	{ 'fillStyle': '#FF6659', 'toxt': 'Muchas gracias por participar', 'number': '24'},
	
	{ 'fillStyle': '#0066FF', 'toxt': 'Premio', 'number': '25' },
   { 'fillStyle': '#630062', 'toxt': 'Muchas gracias por participar', 'number': '26'}, 
   { 'fillStyle': '#FF6659', 'toxt': 'Premio', 'number': '27'},   
   { 'fillStyle': '#0066FF', 'toxt': 'Muchas gracias por participar', 'number': '28'},
   { 'fillStyle': '#630062', 'toxt': 'Premio', 'number': '29'},
   { 'fillStyle': '#FF6659', 'toxt': 'Muchas gracias por participar', 'number': '30'},  
   { 'fillStyle': '#0066FF', 'toxt': 'Premio', 'number': '31'},
   { 'fillStyle': '#630062', 'toxt': 'Muchas gracias por participar', 'number': '32'},
   { 'fillStyle': '#FF6659', 'toxt': 'Premio', 'number': '33'},  
   { 'fillStyle': '#0066FF', 'toxt': 'Muchas gracias por participar', 'number': '34'},
   { 'fillStyle': '#630062', 'toxt': 'Premio', 'number': '35'},
	{ 'fillStyle': '#FF6659', 'toxt': 'Muchas gracias por participar', 'number': '36'},	
	{ 'fillStyle': '#0066FF', 'toxt': 'Premio', 'number': '37'},
	{ 'fillStyle': '#630062', 'toxt': 'Muchas gracias por participar', 'number': '38'},
	{ 'fillStyle': '#FF6659', 'toxt': 'Premio', 'number': '39'},	
	{ 'fillStyle': '#0066FF', 'toxt': 'Muchas gracias por participar', 'number': '40'},
	{ 'fillStyle': '#630062', 'toxt': 'Premio', 'number': '41'},
	{ 'fillStyle': '#FF6659', 'toxt': 'Muchas gracias por participar', 'number': '42'},	
	{ 'fillStyle': '#0066FF', 'toxt': 'Premio', 'number': '43'},
	{ 'fillStyle': '#630062', 'toxt': 'Muchas gracias por participar', 'number': '44'},
	{ 'fillStyle': '#FF6659', 'toxt': 'Premio', 'number': '45'},	
	{ 'fillStyle': '#0066FF', 'toxt': 'Muchas gracias por participar', 'number': '46'},
	{ 'fillStyle': '#630062', 'toxt': 'Premio', 'number': '47'},
	{ 'fillStyle': '#FF6659', 'toxt': 'Muchas gracias por participar', 'number': '48'},
		   
		   
		   { 'fillStyle': '#0066FF', 'toxt': 'Premio', 'number': '49' },
   { 'fillStyle': '#630062', 'toxt': 'Muchas gracias por participar', 'number': '50'}, 
   { 'fillStyle': '#FF6659', 'toxt': 'Premio', 'number': '51'},   
   { 'fillStyle': '#0066FF', 'toxt': 'Muchas gracias por participar', 'number': '52'},
   { 'fillStyle': '#630062', 'toxt': 'Premio', 'number': '53'},
   { 'fillStyle': '#FF6659', 'toxt': 'Muchas gracias por participar', 'number': '54'},  
   { 'fillStyle': '#0066FF', 'toxt': 'Premio', 'number': '55'},
   { 'fillStyle': '#630062', 'toxt': 'Muchas gracias por participar', 'number': '56'},
   { 'fillStyle': '#FF6659', 'toxt': 'Premio', 'number': '57'},  
   { 'fillStyle': '#0066FF', 'toxt': 'Muchas gracias por participar', 'number': '58'},
   { 'fillStyle': '#630062', 'toxt': 'Premio', 'number': '59'},
	{ 'fillStyle': '#FF6659', 'toxt': 'Muchas gracias por participar', 'number': '60'},	
	{ 'fillStyle': '#0066FF', 'toxt': 'Premio', 'number': '61'},
	{ 'fillStyle': '#630062', 'toxt': 'Muchas gracias por participar', 'number': '62'},
	{ 'fillStyle': '#FF6659', 'toxt': 'Premio', 'number': '63'},	
	{ 'fillStyle': '#0066FF', 'toxt': 'Muchas gracias por participar', 'number': '64'},
	{ 'fillStyle': '#630062', 'toxt': 'Premio', 'number': '65'},
	{ 'fillStyle': '#FF6659', 'toxt': 'Muchas gracias por participar', 'number': '66'},	
	{ 'fillStyle': '#0066FF', 'toxt': 'Premio', 'number': '67'},
	{ 'fillStyle': '#630062', 'toxt': 'Muchas gracias por participar', 'number': '68'},
	{ 'fillStyle': '#FF6659', 'toxt': 'Premio', 'number': '69'},	
	{ 'fillStyle': '#0066FF', 'toxt': 'Muchas gracias por participar', 'number': '70'},
	{ 'fillStyle': '#630062', 'toxt': 'Premio', 'number': '71'},
	{ 'fillStyle': '#FF6659', 'toxt': 'Muchas gracias por participar', 'number': '72'},
            ],
            'animation': { 
                'type': 'spinToStop', // Giro y alto
                'duration': Math.floor((Math.random() * 10) + 5), // Duración de giro
                'callbackFinished': 'Mensaje()', // Función para mostrar mensaje
                'callbackAfter': 'dibujarIndicador()' // Funciona de pintar indicador
            }
         });
      function Mensaje() {
          var SegmentoSeleccionado =
          winningSegment = miRuleta.getIndicatedSegment();
          var MensajeSeleccionado= winningSegment.number;
		  var numeroPremio =["1","3","5","7","9","11","13","15","17","19","21","23"];
		  var listaPremios =["200 TottoPuntos","500 TottoPuntos","1000 TottoPuntos","1 Cartuchera sobre","1 Bulto Acuarela","1 Bulto Gommas","1 Llavero Tandizo","1 Laptop","50% de descuento en 1 compra en Totto","30% de descuento en 1 compra en Totto","10% de descuento en 1 compra en Totto","Te devolvemos el monto de tu compra"];
		  var premioDisponible = ["true","true","true","true","true","true","true","true","true","true","true","true"];
		  //Consulta a base de datos para obtener la disponibilidad de premios
		  var obtuvoPremio = "false";
		  var numeroOpciones = numeroPremio.length;		  
		  for(var pos = 0;pos < numeroOpciones;pos++){
			  if(numeroPremio[pos] == winningSegment.number){
				obtuvoPremio = "true";	
				if(premioDisponible[pos]=="true"){
					var premio = listaPremios[pos];
					pos = numeroPremio.lenght;
					alerta_premio(premio);
				}				
			  }
		  }
		  var waitTime = 15000;
		  if(obtuvoPremio == "false"){
			alerta_intento();
			waitTime = 5000;			
		  }
		  
		  setInterval(function(){ window.open("formulario.html", "_self"); }, waitTime);
           //Reinicio de Ruleta
           miRuleta.stopAnimation(false);
         //  miRuleta.rotationAngle = 0;
           //miRuleta.draw();
           //dibujarIndicador();
       }
    //   <!--IndicadorRuleta-->
    dibujarIndicador();
    function dibujarIndicador() {
            var ctx = miRuleta.ctx;
              distnaciaX = 150;
             distnaciaY = 50;
             ctx = miRuleta.ctx;
             ctx.strokeStyle = '#FF6528';
             ctx.fillStyle = '#FF6528';
             ctx.lineWidth = 2;
             ctx.beginPath();
             ctx.moveTo(distnaciaX + 170, distnaciaY + 5);
             ctx.lineTo(distnaciaX + 230, distnaciaY + 5);
             ctx.lineTo(distnaciaX + 200, distnaciaY + 40);
             ctx.lineTo(distnaciaX + 171, distnaciaY + 5);
             ctx.stroke();
             ctx.fill(); 
       }
		</script>
	</canvas>
                        </div>
                        <div class="col-sm-4">
                            <audio src="src/audio/ambiente.mp3" controls autoplay loop>
                                <p>Tu navegador no implementa el elemento audio</p>
                            </audio>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>