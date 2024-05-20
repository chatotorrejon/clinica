
<?php include 'log/header.php'?>
<?php 
    $conexion = mysqli_connect("localhost","root","","clinica")
                or die("PROBLEMAS CON LA CONEXION"
    );
    mysqli_query($conexion,"INSERT INTO pacientes(codigo,nombre,habitacion)
            VALUES($_REQUEST[codigo],'$_REQUEST[nombre]','$_REQUEST[habitacion]'
                )") or die("PROBLEMAS EN LA SELECCION" . mysqli_error($conexion)
    );
    mysqli_close($conexion);
    echo "<h1 style='color: lightblue; background-color: purple; width: 400px; margin-right: auto; margin-left: auto; border: 20px solid blue; font-size: 30px; text-align: center; margin-top: 30px; border-radius: 50px';>EL PACIENTE HA SIDO REGISTRADO</h1>"
?>