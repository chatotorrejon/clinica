<?php 
    $conexion = mysqli_connect("localhost","root","","clinica")
        or die("PROBLEMAS CON LA CONEXION"
    );
        mysqli_query($conexion, "INSERT INTO alumnos(nombre,mail,codigo)VALUES('$_REQUEST[codigo]','$_REQUEST[nombre]','$_REQUEST[apellido]',
                $_REQUEST[habitacion])") or die("PROBLEMAS EN LA SELECT" . mysqli_error($conexion));
        mysqli_close($conexion);
        echo "EL PACIENTE FUE INGRESADO";
?>