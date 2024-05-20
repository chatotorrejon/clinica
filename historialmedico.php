<?php include 'log/header.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HISTORIAL MEDICO</title>
    <!--<link rel="stylesheet" href="css/estilos.css">-->
</head>
<body>
    <div style="width: 1000px;
                height: 1400px;
                margin-left: auto;
                margin-right: auto;
                margin-top: 20px;
                border: 0px solid red;
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;">
        <span style="margin-left: auto; margin-right: auto; font-size: 40px; font-family: arial; color: black;">HISTORIAL MEDICO</span><br><br>
        <form action="historialmedico2.php" method="post">
            <div style="width: 980px;
                        height: 50px;
                        border: 0px solid blue;
                        margin-left: auto;
                        margin-right: auto;
                        color: black;
                        display: flex;
                        flex-direction: row;
                        justify-content: space-evenly;">
                <label for="nombredelpaciente">NOMBRE DEL PACIENTE: </label>
                <input type="text" id="nombrepaciente" class="nombrepaciente" name="nombrepaciente">
            
                <label for="fechadelaultimaactualizacion">FECHA DE LA ULTIMA ACTUALIZACIÓN: </label>
                <input type="date" id="fechadelaultimaactualizacion" class="fechadelaultimaactualizacion" name="fechadelaultimaactualizacion">
            </div><br>
            <div style="width: 980px;
                        height: 50px;
                        border: 0px solid blue;
                        margin-left: auto;
                        margin-right: auto;
                        color: black;
                        display: flex;
                        flex-direction: row;
                        justify-content: space-evenly;">
                <label for="nombreactualdelmedico">NOMBRE ACTUAL DEL MEDICO: </label>
                <input type="text" id="nombreactualdelmedico" class="nombreactualdelmedico" name="nombreactualdelmedico">
                <label for="telefono">TELEFONO: </label>
                <input type="tel" name="telefono1" id="telefono1" name="telefono1">
            </div><br>
            <div style="width: 980px;
                        height: 50px;
                        border: 0px solid blue;
                        margin-left: auto;
                        margin-right: auto;
                        color: black;
                        display: flex;
                        flex-direction: row;
                        justify-content: space-evenly;">
                <label for="nombreactualdelafarmacia">NOMBRE ACTUAL DE LA FARMACIA: </label>
                <input type="text" id="nombreactualdelafarmacia" class="nombreactualdelafarmacia" name="nombreactualdelafarmacia">
                <label for="telefono">TELEFONO: </label>
                <input type="tel" name="telefono2" id="telefono2" name="telefono2">
            </div><br>
            
               <span style="margin-left: auto; margin-right: auto; font-size: 20px; font-family: arial; color: black;">MEDICAMENTOS ACTUALES Y PASADOS:</span><br>
            <div style="width: 980px;
                        height: 100px;
                        border: 0px solid red;
                        margin-left: auto;
                        margin-right: auto;
                        margin-top: 30px;
                        display: flex;
                        flex-direction: column;
                        justify-content: space-evenly;">
                <div style="width: 980px;
                        height: 50px;
                        border: 0px solid blue;
                        margin-left: auto;
                        margin-right: auto;
                        color: black;
                        display: flex;
                        flex-direction: row;
                        justify-content: space-evenly;">
                    <label for="nombredelmedicamento">Nombre del medicamento</label>
                    <label for="dosificacion">Dosificación</label>
                    <label for="frequencia">Freq</label>
                    <label for="medico1">Medico</label>
                    <label for="fechainicio1">Fecha de inicio</label>
                    <label for="fechafinal1">Fecha final</label>
                    <label for="proposito">Proposito</label>
                </div>
                <div style="width: 980px;
                        height: 50px;
                        border: 0px solid blue;
                        margin-left: auto;
                        margin-right: auto;
                        color: black;
                        display: flex;
                        flex-direction: row;
                        justify-content: space-evenly;">
                    <input type="text" style="width: 600px" id="nombredelmedicamento" class="nombredelmedicamento" name="nombredelmedicamento">
                    <input type="text" style="width: 110px" id="dosificacion" class="dosificacion" name="dosificacion">
                    <input type="text" style="width: 40px" id="frequencia" class="frequencia" name="frequencia">
                    <input type="text" style="width: 140px" id="medico1" class="medico1" name="medico1">
                    <input type="date" style="width: 210px" id="fechainicio1" class="fechainicio1" name="fechainicio1">
                    <input type="date" style="width: 210px" id="fechafinal1" class="fechafinal1" name="fechafinal1">
                    <input type="text" style="width: 160px" id="proposito" class="proposito" name="proposito">
                </div>
            </div><br>   
                <span style="margin-left: auto; margin-right: auto; font-size: 20px; font-family: arial; color: black;">PROCEDIMIENTOS QUIRURGICOS:</span><br><br>
            <div style="width: 980px;
                        height: 100px;
                        border: 0px solid blue;
                        margin-left: auto;
                        margin-right: auto;
                        display: flex;
                        flex-direction: column;
                        justify-content: space-evenly;">
                <div style="width: 980px;
                        height: 50px;
                        border: 0px solid blue;
                        margin-left: auto;
                        margin-right: auto;
                        color: black;
                        display: flex;
                        flex-direction: row;
                        justify-content: space-evenly;">
                    <label for="procedimiento">PROCEDIMIENTO</label>
                    <label for="medico2">Medico</label>
                    <label for="hospital">Hospital</label>
                    <label for="fecha1">Fecha</label>
                    <label for="notas1">Notas</label>
                </div>
                <div style="width: 980px;
                        height: 50px;
                        border: 0px solid blue;
                        margin-left: auto;
                        margin-right: auto;
                        color: black;
                        display: flex;
                        flex-direction: row;
                        justify-content: space-evenly;">
                    <input type="text" style="width: 350px" id="procedimiento" class="procedimiento" name="procedimiento">
                    <input type="text" style="width: 300px" id="medico2" class="medico2" name="medico2">
                    <input type="text" style="width: 250px" id="hospital" class="hospital" name="hospital">
                    
                    <input type="date" style="width: 210px" id="fecha1" class="fecha1" name="fecha1">
                    <input type="text" style="width: 140px" id="notas1" class="notas1" name="notas1">
                </div>
            </div><br>
               <span style="margin-left: auto; margin-right: auto; font-size: 20px; font-family: arial; color: black;">ENFERMEDADES GRAVES:</span><br><br>
            <div style="width: 980px;
                        height: 100px;
                        border: 0px solid blue;
                        margin-left: auto;
                        margin-right: auto;
                        display: flex;
                        flex-direction: column;
                        justify-content: space-evenly;">
                <div style="width: 980px;
                        height: 50px;
                        border: 0px solid blue;
                        margin-left: auto;
                        margin-right: auto;
                        color: black;
                        display: flex;
                        flex-direction: row;
                        justify-content: space-evenly;">
                    <label for="enfermedad">Enfermedad</label>
                    <label for="fechainicio2">Fecha inicio</label>
                    <label for="fechafinal2">Fecha final</label>
                    <label for="medico3">Medico</label>
                    <label for="notasdeltratamiento">Notas del tratamientos</label>
                </div>
                <div style="width: 980px;
                        height: 50px;
                        border: 0px solid blue;
                        margin-left: auto;
                        margin-right: auto;
                        color: black;
                        display: flex;
                        flex-direction: row;
                        justify-content: space-evenly;">
                    <input type="text" style="width: 300px" id="enfermedad" class="enfermedad" name="enfermedad">
                    <input type="date" style="width: 200px" id="fechainicio2" class="fechainicio2" name="fechainicio2">
                    <input type="date" style="width: 200px" id="fechafinal2" class="fechafinal2" name="fechafinal2">
                    <input type="text" style="width: 200px" id="medico3" class="medico3" name="medico3">
                    <input type="text" style="width: 300px" id="notasdeltratamiento" class="notasdeltratamiento" name="notasdeltratamiento">
                </div>
            </div><br>
            <div style="width: 980px;
                        height: 500px;
                        border: 0px solid red;
                        margin-left: auto;
                        margin-right: auto;
                        color: black;
                        display: flex;
                        flex-direction: column;
                        justify-content: space-evenly;">
                <span style="margin-left: auto; margin-right: auto; font-size: 20px; font-family: arial; color: black;">VACUNAS</span>
                <div style="width: 980px;
                        height: 500px;
                        border: 0px solid blue;
                        margin-left: auto;
                        margin-right: auto;
                        color: black;
                        display: flex;
                        flex-direction: row;
                        justify-content: space-evenly;">
                    <div style="width: 250px;
                            height: 200px;
                            border: 0px solid red;
                            margin-left: auto;
                            margin-right: auto;
                            color: black;
                            display: flex;
                            flex-direction: column;
                            justify-content: space-evenly;">
                            <label for="nombrevacuna1">NOMBRE</label>
                            <label for="tetanos">TETANOS</label>
                            <label for="influenza">VACUNA CONTRA LA INFLUENZA</label>
                            <label for="zoxtavax">ZOXTAVAX</label>
                            <label for="otro1">OTRO</label>
                    </div> 
                    <div
                            style="width: 250px;
                            height: 200px;
                            border: 0px solid red;
                            margin-left: auto;
                            margin-right: auto;
                            color: black;
                            display: flex;
                            flex-direction: column;
                            justify-content: space-evenly;">
                            <label for="fecha2">FECHA</label>
                            <input type="date" id="fechatetanos" class="fechatetanos" name="fechatetanos">
                            <input type="date" id="fechainfluenza" class="fechainfluenza" name="fechainfluenza">
                            <input type="date" id="fechazoxtavax" class="fechazoxtavax" name="fechazoxtavax">
                            <input type="date" id="fechaotro1" class="fechaotro1" name="fechaotro1">
                    </div> 
                    <div style="width: 400px;
                        height: 300px;
                        border: 0px solid blue;
                        margin-left: auto;
                        margin-right: auto;
                        color: black;
                        display: flex;
                        flex-direction: row;
                        justify-content: space-evenly;">
                    <div style="width: 250px;
                            height: 200px;
                            border: 0px solid red;
                            margin-left: auto;
                            margin-right: auto;
                            color: black;
                            display: flex;
                            flex-direction: column;
                            justify-content: space-evenly;">
                            <label for="nombrevacuna2">NOMBRE</label>
                            <label for="meningitis">MENINGITIS</label>
                            <label for="fiebreamarilla">FIEBRE AMARILLA</label>
                            <label for="poliomielitis">POLIOMIELITIS</label>
                            <label for="fechaotro2">OTRO</label>
                    </div> 
                    <div
                            style="width: 250px;
                            height: 200px;
                            border: 0px solid red;
                            margin-left: auto;
                            margin-right: auto;
                            color: black;
                            display: flex;
                            flex-direction: column;
                            justify-content: space-evenly;">
                            <label for="fecha3">FECHA</label>
                            <input type="date" id="fechameningitis" class="fechameningitis" name="fechameningitis">
                            <input type="date" id="fechafiebreamarilla" class="fechafiebreamarilla" name="fechafiebreamarilla">
                            <input type="date" id="fechapoliomielitis" class="fechapoliomielitis" name="fechapoliomielitis">
                            <input type="date" id="fechaotro2" class="fechaotro2" name="fechaotro2">
                    </div>    
                </div>  
                </div>
                
                
            </div>
            <button type="submit" value="REGISTRAR" style="margin-left: 100px; background-color: blue; color: white">REGISTRAR</button>
        </form>
    </div>
</body>
</html>