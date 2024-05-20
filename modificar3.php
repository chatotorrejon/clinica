<?php include 'log/header.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR 3</title>
</head>
<body>
    <?php 
        $conexion = mysqli_connect("localhost","root","","clinica")
                        or die("PROBLEMAS CON LA CONEXION"
                    );
        mysqli_query($conexion , "UPDATE pacientes SET nombre='$_REQUEST[nombre]'
                      WHERE codigo='$_REQUEST[codigo]'")
                    or die("PROBLEMAS EN LA SELECCION" . mysqli_error($conexion)
                          );
                                                    
    ?>
    <?php 

        mysqli_query($conexion,"UPDATE pacientes SET habitacion='$_REQUEST[habitacion]'
                      WHERE codigo='$_REQUEST[codigo]'")
                    or die("PROBLEMAS EN LA SELECCION" . mysqli_error($conexion)
                          );
                                         
        echo "SE MODIFICO LA HABITACION DEL PACIENTE";            
    ?>
</body>
</html>