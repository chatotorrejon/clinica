<?php include 'log/header.php' ?>
<?php 
    $conexion = mysqli_connect("localhost","root","","clinica")
        or die("PROBLEMAS CON LA CONEXION"
    );
    $registro = mysqli_query($conexion, "SELECT codigo FROM pacientes WHERE
                    codigo='$_REQUEST[codigo]'") or die("PROBLEMAS CON EL SELECT" . mysqli_error($registro)
                );
    if($reg=mysqli_fetch_array($registro)){
        mysqli_query($conexion, "DELETE FROM pacientes WHERE codigo='$_REQUEST[codigo]'")
        or die("PROBLEMAS EN EL SELECT: " . mysqli_error($conexion));
        echo "<h1 style='color: lightblue; background-color: purple; width: 400px; margin-right: auto; margin-left: auto; border: 20px solid blue; font-size: 30px; text-align: center; margin-top: 30px; border-radius: 50px';>SE ELIMINO EL REGISTRO</h1>";
    } else {
        echo "<h1 style='color: lightblue; background-color: purple; width: 400px; margin-right: auto; margin-left: auto; border: 20px solid blue; font-size: 30px; text-align: center; margin-top: 30px; border-radius: 50px';>NO EXISTE EL REGISTRO A ELIMINAR</h1>";
    }
    mysqli_close($conexion);
?>