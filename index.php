
<!DOCTYPE html>			<!-- Este es el inicio obligatorio de cualquier página Web. Sirve para que el navegador pueda interpretarla -->

<html>					<!-- La etiqueta HTML es obligatoria. Sirve para delimitar donde se incia y termina el código de la página Web -->

<head>					<!-- La etiqueta HEAD sirve para delimitar la cabecera de la página Web. Aqui se contienen todos los metadatos, codificaciones
								básicas y los enlaces a ficheros externos CSS3 y Javascript -->

	<meta language="esp" />															<!-- El parámetro LANGUAGE define el idioma en el que se escribe el contenido de la página WEB -->
	
	<meta name="author" content="ALFREDO DE LOPE BURGOA"/>									<!-- Podemos definir cualquier metadato usando los parámetros NAME y CONTENT. Aqui por ejemplo 
																							estamos definiendo los datos del autor de la página -->
																							
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8" /> 	<!-- Es conveniente definir la codificación de los símbolos del lenguaje que estamos usando. 
																							Para los idiomas latinos y anglosajones se suele usar las codificaciones UTF-8 o algún
																							estándar predefinido. En español el estándar más usado es el ISO-8859-1-->
																							
	<meta name="keywords" content="Plantilla Javascript" />								<!-- El metadato de las palabras clave se define con el nombre KEYWORDS. Las palabas clave a usar 
																							se definen mediante el parámetro CONTENT. Van entre comillas y separadas por espacios en blanco.
																							Es conveniente usar palabras en plural y no más de 10 palabras clave -->
	<link rel="stylesheet" href="ejercicio79.css" type="text/css" media="all">	
	
	<link rel="icon" href="img/favicon.png"/>										<!-- Podemos definir cualquier icono personalizado en cada página WEB usando la etiqueta LINK y los parámetros 
																						REL y HREF para crear un enlace a la imagen del icono. Aqui por ejemplo estamos definiendo el icono 
																							que va a aparecer en la pestaña de la página WEB-->
																						
	<title> PAGINA PRINCIPAL DE CLINICA </title>														<!-- Del mismo modo podemos definir el nombre que va a aparecer en la pestaña de la página WEB usando la 
																							etiqueta TITLE-->
</head>

<style type="text/css">
	body {
		background: url("imagenes/Wallpaper HTML5-CSS3.jpg") no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
	
	
	header{
		background-color: #D0D6D8;
		width: 1000px;
		height: 200px;
		margin-left:auto; 
		margin-right:auto;			
		margin-top: 20px;
		border-radius: 20px;
		border-color: black;
		border-width:2px;
		border-style: solid;
		text-align: center;
		display: flex; 
		justify-content: space-evenly;
		align-items: center;
		
	}
	
	
	#uno{
		background: url("imagenes/javascript-1.png") no-repeat center center scroll;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
		width: 1000px;
		height: 150px;
		margin-left:auto; 
		margin-right:auto;			
		margin-top: 20px;
		border-radius: 20px;
		border-color: black;
		border-width:2px;
		border-style: solid;
		text-align: center;
		display: flex; 
		justify-content: space-evenly;
		align-items: center;
		
	}
	
	article{background: rgba(250, 250, 250, 0.5);
		width: 500px;
		border-radius: 20px;
		border-color: black;
		border-width:2px;
		border-style: solid;
		}
	
		
	nav{
		background-color: #D0D6D8;
		width: 1000px;
		height: 300px;
		margin-left:auto; 
		margin-right:auto;			
		margin-top: 20px;
		border-radius: 20px;
		border-color: black;
		border-width:2px;
		border-style: solid;
		text-align: center;
		display: flex; 
		justify-content: space-evenly;
		align-items: center;
		}
	
	h1, h2, h3{	font-family: Calibri, sans-serif;
				font-weight: bold;
				color: blue;
			}
	#invisible2{
				background-color: #D0D6D8;
				width: 400px;
				height: 250px;
				margin-left:auto; 
				margin-right:auto;			
				margin-top: 20px;
				border-radius: 20px;
				border-color: black;
				border-width:2px;
				border-style: solid;
				text-align: center;
				display: flex; 
				justify-content: space-evenly;
				align-items: center;
				flex-direction: column;	
			   }
				
	#invisiblebotoncitos1, #invisiblebotoncitos2{
				
				width: 380px;
				height: 50px;
				margin-left:auto; 
				margin-right:auto;			
				margin-top: 20px;
				border-radius: 20px;
				border-color: red;
				border-width: 0px;
				border-style: solid;
				text-align: center;
				display: flex; 
				justify-content: space-evenly;
				align-items: center;
				flex-direction: rows;	
			   }		
	#contenedorbotones	{
								width: 380px;
								height: 100px;
								margin-left: auto;
								margin-right: auto;
								margin-top: 20px;
								border: 0px solid blue; 
								border-radius: 10px;
								display: flex;
								align-items: center;
								flex-direction: rows;
								justify-content: space-between;
								
							}
		#contenedorboton1, #contenedorboton2, #contenedorboton3 {
								width: 200px;
								height: 50px;
								margin-left: auto;
								margin-right: auto;
								border: 0px solid green;
								display: flex;
								justify-content: space-evenly;
								align-items: center;
							}
		#botoncito1, #botoncito2 ,#botoncito3, #botoncito4, #botoncito5, 
		#botoncito6, #botoncito7, #botoncito8, #botoncito9, #botoncito0	{
					width: 20px;
					height: 20px;
					font-family: Helvetica, Arial, sans-serif;
					font-weight: bold;
					color: #444;
					background-color: #fff;
					border: 2px solid blue;
					border-radius: 10px;
					box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5);
				}				
		#boton1, #boton2, #boton3	{
					width: 100px;
					height: 30px;
					font-family: Helvetica, Arial, sans-serif;
					font-weight: bold;
					color: #444;
					background-color: #fff;
					border: 2px solid blue;
					border-radius: 10px;
					box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5);
				}
		#boton1:hover {
					
						background-color: #444;
						border: 2px solid green;
						color: #fff;
					}
		#boton2:hover {
					
						background-color: #444;
						border: 2px solid green;
						color: #fff;
					}
		#boton3:hover {
					
						background-color: #444;
						border: 2px solid green;
						color: #fff;
					}			
		#contenedorcontrasena{
							width: 380px;
							height: 50px;
							margin-left: auto;
							margin-right: auto;
							border: 0px solid blue; 
							border-radius: 10px;
							display: flex;
							align-items: center;
							flex-direction: rows;
							justify-content: space-evenly;
						}
		#etiquetacontrasena{
							font-family: Calibri, sans-serif;
							font-weight: bold;
							color: blue;
						}
		#contrasena{
							border: 1px solid blue; 
						}

		#contenedorarea{
							width: 200px;
							height: 100px;
							margin-left: auto;
							margin-right: auto;
							border: 0px solid blue; 
							border-radius: 10px;
							display: flex;
							align-items: center;
						}	
		
		#area{
				width: 180px;
				height: 80px;
				margin-left: auto;
				margin-right: auto;
				border: 2px solid blue;
				border-radius: 10px;
				box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.5);
				resize: none
			}

		#contenedorimagen{
							width: 100px;
							height: 100px;
							margin-left: auto;
							margin-right: auto;
							border: 0px solid blue; 
							border-radius: 10px;
							display: flex;
							align-items: center;
						}

		#imagen1 {
				
					width: 100px;
					height: 100px;
					margin-left: auto;
					margin-right: auto;
					border: 0px solid blue; 
					border-radius: 10px;
				}

					
</style>

<body>
<header>
	
		<img src="imagenes/HTML5.png" 	style="height:100px;" alt="HTML5">
		
		<section>
			<h1>Creación de Páginas Web</h1>
			<h2>Programación con lenguajes de guión en páginas Web</h2>
			<h3>Pagina web creada con html, css, y javascrip </h3>
		</section>
		
		<img src="imagenes/CSS3.png" 	style="height:100px;" alt="CSS3">
		
</header>

	<div id="uno">
		<article>
			<h1>Pagina principal de clinica</h1>
		</article>
	</div>
	
	
	<nav>
	
		<img src="imagenes/Javascript.png" 	style="height:100px;" alt="Javascript">
			<div id="invisible2">
				<div id="invisiblebotoncitos1">
					<button id = "botoncito1" onclick="escribir('1')">1</button>
					<button id = "botoncito2" onclick="escribir('2')">2</button>
					<button id = "botoncito3" onclick="escribir('3')">3</button>
					<button id = "botoncito4" onclick="escribir('4')">4</button>
					<button id = "botoncito5" onclick="escribir('5')">5</button>
				</div>
				<div id="invisiblebotoncitos2">
					<button id = "botoncito6" onclick="escribir('6')">6</button>
					<button id = "botoncito7" onclick="escribir('7')">7</button>
					<button id = "botoncito8" onclick="escribir('8')">8</button>
					<button id = "botoncito9" onclick="escribir('9')">9</button>
					<button id = "botoncito0" onclick="escribir('0')">0</button>
				</div>
				<div id="contenedorboton2">
					<button id="boton2" onclick="borrar()">Borrar</button>
				</div>
				<div id = "contenedorcontrasena">
					
					
						<label id = "etiquetacontrasena">Introduce la contraseña</label>
					
					
						<input id = "contrasena" type="password" readonly></input>
					
					
				</div>
				
				<div id="contenedorbotones">
					<div id="contenedorboton1">
						<button id="boton1" onclick="verocultar()">Ver  Ocultar</button>
					</div>
					<div id="contenedorboton3">
						<button id="boton3" onclick="verificar()">Verificar</button>
					</div>
				</div>
			</div>	
				<div id = "contenedorarea">
					<textarea id="area" readonly="readonly" style = ""></textarea><br><br>
				</div>
				
				<div id = "contenedorimagen">
					<img id = "imagen1" src ="imagenes/passwd.png"></img>
				</div>
		
		<img src="imagenes/Javascript.png" 	style="height:100px;" alt="Javascript">
		
	
	</nav>
</body>

    <script>
    do {
        var contra = prompt("Escribe una contraseña");
        if (contra.length != 6) {
            alert("Introduce una contraseña de 6 dígitos");
        }
    } while (contra.length != 6);

    function escribir(numero) {
        var contenido = document.getElementById("contrasena").value;
        document.getElementById("contrasena").value = contenido + numero;
    }

    var contador = 5;
    var acierto = false;

    function verificar() {
    var contrasena = document.getElementById("contrasena").value;
    var mensaje;

    if (contador > 0) {
        if (contra === contrasena) {
            mensaje = "La contraseña es correcta";
            document.getElementById("imagen1").src = "imagenes/acierto.png";
            acierto = true;
            setTimeout(function() {
                window.location.href = "registrar.php";
            }, 3000); // Redirigir después de 3 segundos
        } else {
            contador--;
            switch (contador) {
                case 4:
                    document.getElementById("imagen1").src = "imagenes/emoticono1.png";
                    mensaje = "La contraseña no es correcta. Tienes " + contador + " intentos";
                    break;
                case 3:
                    document.getElementById("imagen1").src = "imagenes/emoticono2.png";
                    mensaje = "La contraseña no es correcta. Tienes " + contador + " intentos";
                    break;
                case 2:
                    document.getElementById("imagen1").src = "imagenes/emoticono3.png";
                    mensaje = "La contraseña no es correcta. Tienes " + contador + " intentos";
                    break;
                case 1:
                    document.getElementById("imagen1").src = "imagenes/solouna.png";
                    mensaje = "La contraseña no es correcta. Tienes " + contador + " intento";
                    break;
                case 0:
                    document.getElementById("imagen1").src = "imagenes/error.png";
                    mensaje = "Has agotado todas las oportunidades";
                    break;
                default:
                    document.getElementById("imagen1").src = "imagenes/fallo.png";
                    mensaje = "La contraseña no es correcta. Tienes " + contador + " intentos";
            }
        }
    } else {
        mensaje = "Has agotado todas las oportunidades";
        document.getElementById("imagen1").src = "imagenes/error.png";
    }

    document.getElementById("area").value = mensaje;
}

    function borrar() {
        document.getElementById("contrasena").value = "";
        document.getElementById("imagen1").src = "imagenes/passwd.png";
    }

    function verocultar() {
        var input = document.getElementById("contrasena");
        if (input.type === "password") {
            input.type = "text";
        } else {
            input.type = "password";
        }
    }
</script>

</html>