<?php include 'log/header.php'?>
<?php 
    $conexion = mysqli_connect("localhost","root","","clinica")
        or die("PROBLEMAS CON LA CONEXION"
    );
    mysqli_query($conexion,"INSERT INTO historial(nombrepaciente,fechadelaultimaactualizacion,
            nombreactualdelmedico,telefono1,nombreactualdelafarmacia,telefono2,nombredelmedicamento,
            dosificacion,frequencia,medico1,fechainicio1,fechafinal1,proposito,
            procedimiento,medico2,hospital,fecha1,notas1,enfermedad,fechainicio2,
            fechafinal2,medico3,notasdeltratamiento,fechatetanos,fechainfluenza,
            fechazoxtavax,fechaotro1,fechameningitis,fechafiebreamarilla,
            fechapoliomielitis,fechaotro2)VALUES('$_REQUEST[nombrepaciente]',
            '$_REQUEST[fechadelaultimaactualizacion]','$_REQUEST[nombreactualdelmedico]','$_REQUEST[telefono1]',
            '$_REQUEST[nombreactualdelafarmacia]','$_REQUEST[telefono2]','$_REQUEST[nombredelmedicamento]',
            '$_REQUEST[dosificacion]','$_REQUEST[frequencia]','$_REQUEST[medico1]','$_REQUEST[fechainicio1]',
            '$_REQUEST[fechafinal1]','$_REQUEST[proposito]','$_REQUEST[procedimiento]',
            '$_REQUEST[medico2]','$_REQUEST[hospital]','$_REQUEST[fecha1]','$_REQUEST[notas1]',
            '$_REQUEST[enfermedad]','$_REQUEST[fechainicio2]','$_REQUEST[fechafinal2]',
            '$_REQUEST[medico3]','$_REQUEST[notasdeltratamiento]','$_REQUEST[fechatetanos]',
            '$_REQUEST[fechainfluenza]','$_REQUEST[fechazoxtavax]','$_REQUEST[fechaotro1]',
            '$_REQUEST[fechameningitis]','$_REQUEST[fechafiebreamarilla]',
            '$_REQUEST[fechapoliomielitis]','$_REQUEST[fechaotro2]')")
            or die ("PROBLEMAS EN LA SELECCION" . mysqli_error($conexion));
    mysqli_close($conexion);
    echo "<h1 style='color: lightblue; background-color: purple; width: 350px; margin-right: auto; margin-left: auto; border: 20px solid blue; font-size: 30px; text-align: center; margin-top: 30px; border-radius: 50px';>LOS DATOS DEL PACIENTE FUERON GUARDADOS CORRECTAMENTE</h1>";    
             
?>