<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR 2</title>
</head>
<body>
    <?php 
        /*$conexion = mysqli_connect("localhost","root","","clinica")
                        or die("PROBLEMAS CON LA CONEXION"
                    );
        $registro = mysqli_query($conexion,"SELECT * FROM pacientes WHERE
                        codigo=($_REQUEST[codigo]")
                        or die("PROBLEMAS EN LA SELECCION" . mysqli_error($conexion)
                    );
        if($reg=mysqli_fetch_array($registro)){
    ?>        
            <form action="">
                INGRESE EL NUEVO NOMBRE DEL PACIENTE:
                <input type="text" name="nombre" value="<?php echo $reg['nombre']?>">
                <input type="hidden" name="habitacion" value="<?php echo $reg['habitacion']?>">
                <br>
                <input type="submit" value="modificar">
            </form>
    <?php 
        }else{
                echo "NO SE PUEDE MODIFICAR ESTE REGISTRO";
            }*/
    ?> 
</body>
</html>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR 2</title>
</head>
<body>
    <?php 
        $conexion = mysqli_connect("localhost","root","","clinica")
                        or die("PROBLEMAS CON LA CONEXION"
                    );
        $registro = mysqli_query($conexion,"SELECT * FROM pacientes WHERE codigo={$_REQUEST['codigo']}")
                        or die("PROBLEMAS EN LA SELECCION" . mysqli_error($conexion)
                    );
        if($reg=mysqli_fetch_array($registro)){
    ?>        
            <form action="modificar3.php" method="post">
                INGRESE EL NUEVO NOMBRE DEL PACIENTE:
                <input type="text" name="nombre" value="<?php echo $reg['nombre']?>">
                <br>
                
                <input type="hidden" name="codigo" value="<?php echo $reg['codigo']?>">
                <br>
                INGRESE EL NUEVO NUMERO DE HABITACION:
                <input type="text" name="habitacion" value="<?php echo $reg['habitacion']?>">
                <br>
                
                <input type="hidden" name="codigo" value="<?php echo $reg['codigo']?>">
                <br>
                <input type="submit" value="modificar">
            </form>
    <?php 
        } else {
            echo "NO SE PUEDE MODIFICAR ESTE REGISTRO";
        }
    ?> 
</body>
</html>
