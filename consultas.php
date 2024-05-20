<?php include 'log/header.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTAS</title>
</head>
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
    
                

    <span style="text-align:center; font-size: 40px; font-family: arial; color: black;">CONSULTAS</span><br><br>
    <form action="consultas2.php" method="post">
        <div style="width: 1000px;
                    height: 1000px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 20px;
                    border: 0px solid blue;
                    display: flex;
                    flex-direction: column;
                    justify-content: space-evenly;">
                <label for="nombredelpaciente">NOMBRE DEL PACIENTE: </label><br>
                <input type="text" id="nombredelpaciente2" class="nombredelpaciente2" name="nombredelpaciente2" >
        </div>
        <button type="submit" value="REGISTRAR" style="margin-left: 100px; background-color: blue; color: white">REGISTRAR PROGRESO</button>
    </form>

    </div>                

</body>

</html>