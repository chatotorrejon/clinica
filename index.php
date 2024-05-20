
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA PRINCIPAL</title>
</head>
<style>
    #contenedornombre{
							width: 200px;
							height: 100px;
							margin-left: auto;
							margin-right: auto;
							border: 1px solid blue; 
							border-radius: 10px;
							display: flex;
							align-items: center;
							flex-direction: column;
							justify-content: space-evenly;
						}
		#etiquetanombre, #etiquetacontrasena{
							font-family: Calibri, sans-serif;
							font-weight: bold;
							color: blue;
						}
		#nombre, #contrasena{
							border: 1px solid blue; 
						}
</style>
<body>
        <div style="width: 1200px;
                    height: 1200px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 20px;
                    border: 0px solid red;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-evenly;">
            <form action="" method="post">
            <div id = "contenedornombre">
					<div id = "contenedoretiqueta">
						<label id = "etiquetanombre">Introduce el nombre</label>
					</div>
					<div id = "contenedorinputnombre">
						<input id = "nombre"></input>
					</div>
					<div id = "contenedoretiqueta2">
						<label id = "etiquetacontrasena">Introduce la contraseña</label>
					</div>
					<div id = "contenedorinputcontrasena">
						<input id = "contrasena"></input>
					</div>
					
				</div>
				<div id="contenedorboton2">
						<button id="boton2" type="submit" onclick="cargar()">Enviar</button>
				</div>
            </form>        
			<div id="contenedorbotones">
					<div id="contenedorboton1">
						<button id="boton1" onclick="verificar()">Verificar</button>
					</div>
					<div id="contenedorboton2">
						<button id="boton2" onclick="borrar()">Borrar</button>
					</div>
					
				</div>	
        </div>
</body>
<script>
	var nom = prompt("Escribe un nombre");
	var contra = prompt("Escribe una contraseña");
	
	
	function cargar()
	{
		var nombre, contrasena, mensaje;
		mensaje="";
		nombre = document.getElementById("nombre").value;
		contrasena = document.getElementById("contrasena").value;
		
		if(nom == ""){
			promt("Tienes que escribir un nombre");
		}
		
		if(contra == ""){
			promt("Tienes que escribir una contraseña");
		}
		if (nombre == ""){
			nombre = alert("Tienes que escribir el nombre");
			window.location = "index.php";
		}
		
		if (contrasena == ""){
			contrasena = alert("Tienes que escribir la contraseña");
			window.location = "index.php";
		}
		
		if ((nombre != nom) && (contrasena != contra)){
			mensaje = "El nombre y la contraseña son incorrectos";
			alert(mensaje);
			window.location = "index.php";
			}
					
		if ((nombre == nom) && (contrasena != contra)){
				mensaje = "El nombre es correcto y la contraseña es incorrecta";
				alert(mensaje);
				window.location = "index.php";
				}
				
		if ((nombre != nom) && (contrasena == contra)){
					mensaje = "El nombre es incorrecto y la contraseña es correcta";
					alert(mensaje);
					window.location = "index.php";
					}
					
		if ((nombre == nom) && (contrasena == contra)){
						mensaje = "El nombre y la contraseña son correctos";
						alert(mensaje);
						
							}
							
							window.location.href = "log/header.php";					
		
		
	}
	

	function borrar(){
		document.getElementById("nombre").value = ""; 
		document.getElementById("contrasena").value = ""; 

	}
</script>
</html>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGINA PRINCIPAL</title>
</head>
<style>
    
</style>
<body>
    <div style="width: 1200px;
                height: 1200px;
                margin-left: auto;
                margin-right: auto;
                margin-top: 20px;
                border: 0px solid red;
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;">
        <div id="contenedornombre">
            <div id="contenedoretiqueta">
                <label id="etiquetanombre">Introduce el nombre</label>
            </div>
            <div id="contenedorinputnombre">
                <input id="nombre" name="nombre"></input>
            </div>
            <div id="contenedoretiqueta2">
                <label id="etiquetacontrasena">Introduce la contraseña</label>
            </div>
            <div id="contenedorinputcontrasena">
                <input id="contrasena" name="contrasena" type="password"></input>
            </div>
        </div>
        <div id="contenedorboton2">
            <button id="boton2" onclick="cargar()">Enviar</button>
        </div>
    </div>
</body>
<script>
    var nom = prompt("usuario"); 
    var contra = prompt("password"); 
    
    function cargar() {
        var nombre = document.getElementById("nombre").value;
        var contrasena = document.getElementById("contrasena").value;

        if (nombre === "" || contrasena === "") {
            alert("Debes llenar ambos campos.");
            return;
        }

        if (nombre !== nom || contrasena !== contra) {
            alert("El nombre de usuario o la contraseña son incorrectos.");
            return;
        }

        alert("¡Inicio de sesión exitoso!");
        window.location.href = "log/header.php";
    }
</script>
</html>