<?php include 'log/header.php'?>
<?php 
    $conexion = mysqli_connect("localhost","root","","clinica")
        or die("PROBLEMAS CON LA CONEXION"
    );
    mysqli_query($conexion,"INSERT INTO facturacion(nombreclinica,direccionclinica,
            fechainicio,fechafinal,nombrecliente,direccioncliente,precioconsulta)VALUES('$_REQUEST[nombreclinica]',
            '$_REQUEST[direccionclinica]','$_REQUEST[fechainicio]','$_REQUEST[fechafinal]',
            '$_REQUEST[nombrecliente]','$_REQUEST[direccioncliente]','$_REQUEST[precioconsulta]')")
            or die ("PROBLEMAS EN LA SELECCION" . mysqli_error($conexion));
    mysqli_close($conexion);
    echo "<h1 style='color: lightblue; background-color: purple; width: 350px; margin-right: auto; margin-left: auto; border: 20px solid blue; font-size: 30px; text-align: center; margin-top: 30px; border-radius: 50px';>LOS DATOS DEL PACIENTE FUERON GUARDADOS CORRECTAMENTE</h1>";    
             
?>