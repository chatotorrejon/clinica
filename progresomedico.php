<?php include 'log/header.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROGRESO</title>
</head>
<body>
    <div style="width: 1000px;
                    height: 1200px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 20px;
                    border: 0px solid red;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-evenly;">
    
                

    <span style="text-align:center; font-size: 40px; font-family: arial; color: black;">PROGRESO MEDICO</span><br><br>
    <form action="progresomedico2.php" method="post">
        <div style="width: 1000px;
                    height: 1000px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 20px;
                    border: 0px solid blue;
                    display: flex;
                    flex-direction: row;
                    justify-content: space-evenly;">
            <div style="width: 300px;
                    height: 900px;
                    margin-top: 20px;
                    border: 0px solid black;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-evenly;">
                    <label for="nombrepaciente">NOMBRE DEL PACIENTE</label>
                    <input type="text" id="nombredelpaciente" class="nombredelpaciente" name="nombredelpaciente" style="height:50px">
                    <label for="fechanacimiento">FECHA DE NACIMIENTO</label>
                    <input type="date" id="fechadenacimiento" class="fechadenacimiento" name="fechadenacimiento" style="height:50px">
                    <label for="identificaciondelpaciente">IDENTIFICACIÓN DEL PACIENTE</label>
                    <input type="text" id="identificaciondelpaciente" class="identificaciondelpaciente" name="identificaciondelpaciente" style="height:50px">
                    <label for="identificacionderegistromedico">IDENTIFICACIÓN DE REGISTRO MEDICO</label>
                    <input type="text" id="identificacionderegistromedico" class="identificacionderegistromedico" name="identificacionderegistromedico" style="height:50px">
                    <label for="proximafechadecita">PROXIMA FECHA DE CITA</label>
                    <input type="date" id="proximafechadecita" class="proximafechadecita" name="proximafechadecita" style="height:50px">
                    <label for="revision">PROXIMA FECHA DE REVISIÓN DEL PLAN DE TRATAMIENTO</label>
                    <input type="date" id="revision" class="revision" name="revision" style="height:50px">
            </div>
            
            <div style="width: 680px;
                    height: 900px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 20px;
                    border: 0px solid blue;
                    display: flex;
                    flex-direction: row;
                    justify-content: space-evenly;">
                    
                    <div style="width: 150px;
                                height: 900px;
                                border: 0px solid black;
                                display: flex;
                                flex-direction: column;
                                justify-content: space-evenly;">
                                <span style="text-align:center; font-size: 20px; font-family: arial; color: black;">PROGRESO DEL PACIENTE</span><br>
                                <label for="fecha">FECHA</label>
                                <input type="date" id="fecha10" class="fecha10" name="fecha10">
                                <input type="date" id="fecha11" class="fecha11" name="fecha11">
                                <input type="date" id="fecha12" class="fecha12" name="fecha12">
                                <input type="date" id="fecha13" class="fecha13" name="fecha13">
                                <input type="date" id="fecha14" class="fecha14" name="fecha14">
                                <input type="date" id="fecha15" class="fecha15" name="fecha15">
                                <input type="date" id="fecha16" class="fecha16" name="fecha16">
                                <input type="date" id="fecha17" class="fecha17" name="fecha17">
                                <input type="date" id="fecha18" class="fecha18" name="fecha18">
                                <input type="date" id="fecha19" class="fecha19" name="fecha19">
                                <input type="date" id="fecha20" class="fecha20" name="fecha20">
                                <input type="date" id="fecha21" class="fecha21" name="fecha21">
                    </div>
                    <div style="width: 530px;
                                height: 900px;
                                border: 0px solid black;
                                display: flex;
                                flex-direction: column;
                                justify-content: space-evenly;">
                                <span style="text-align:center; font-size: 20px; font-family: arial; color: black;">PROGRESO DEL PACIENTE</span><br>
                                <label for="notasdelprogreso">NOTAS DEL PROGRESO</label>
                                <input type="text" id="notasdelprogreso1" class="notasdelprogreso1" name="notasdelprogreso1">
                                <input type="text" id="notasdelprogreso2" class="notasdelprogreso2" name="notasdelprogreso2">
                                <input type="text" id="notasdelprogreso3" class="notasdelprogreso3" name="notasdelprogreso3">
                                <input type="text" id="notasdelprogreso4" class="notasdelprogreso4" name="notasdelprogreso4">
                                <input type="text" id="notasdelprogreso5" class="notasdelprogreso5" name="notasdelprogreso5">
                                <input type="text" id="notasdelprogreso6" class="notasdelprogreso6" name="notasdelprogreso6">
                                <input type="text" id="notasdelprogreso7" class="notasdelprogreso7" name="notasdelprogreso7">
                                <input type="text" id="notasdelprogreso8" class="notasdelprogreso8" name="notasdelprogreso8">
                                <input type="text" id="notasdelprogreso9" class="notasdelprogreso9" name="notasdelprogreso9">
                                <input type="text" id="notasdelprogreso10" class="notasdelprogreso10" name="notasdelprogreso10">
                                <input type="text" id="notasdelprogreso11" class="notasdelprogreso11" name="notasdelprogreso11">
                                <input type="text" id="notasdelprogreso12" class="notasdelprogreso12" name="notasdelprogreso12">
                    </div>

            </div>
        </div>
        <button type="submit" value="REGISTRAR" style="margin-left: 100px; background-color: blue; color: white">REGISTRAR PROGRESO</button>
    </form>

    </div>                

</body>
</html>