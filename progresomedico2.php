<?php include 'log/header.php'?>
<?php 
    $conexion = mysqli_connect("localhost","root","","clinica")
        or die("PROBLEMAS CON LA CONEXION"
    );
    mysqli_query($conexion,"INSERT INTO progresomedico(nombredelpaciente,fechadenacimiento,
            identificaciondelpaciente,identificacionderegistromedico,proximafechadecita,
            revision,fecha10,fecha11,fecha12,fecha13,fecha14,fecha15,fecha16,
            fecha17,fecha18,fecha19,fecha20,fecha21,notasdelprogreso1,notasdelprogreso2,
            notasdelprogreso3,notasdelprogreso4,notasdelprogreso5,notasdelprogreso6,notasdelprogreso7,
            notasdelprogreso8,notasdelprogreso9,notasdelprogreso10,notasdelprogreso11,
            notasdelprogreso12)VALUES('$_REQUEST[nombredelpaciente]',
            '$_REQUEST[fechadenacimiento]','$_REQUEST[identificaciondelpaciente]','$_REQUEST[identificacionderegistromedico]',
            '$_REQUEST[proximafechadecita]
            ','$_REQUEST[revision]','$_REQUEST[fecha10]',
            '$_REQUEST[fecha11]','$_REQUEST[fecha12]','$_REQUEST[fecha13]','$_REQUEST[fecha14]',
            '$_REQUEST[fecha15]','$_REQUEST[fecha16]','$_REQUEST[fecha17]',
            '$_REQUEST[fecha18]','$_REQUEST[fecha19]','$_REQUEST[fecha20]','$_REQUEST[fecha21]',
            '$_REQUEST[notasdelprogreso1]','$_REQUEST[notasdelprogreso2]','$_REQUEST[notasdelprogreso3]',
            '$_REQUEST[notasdelprogreso4]','$_REQUEST[notasdelprogreso5]','$_REQUEST[notasdelprogreso6]',
            '$_REQUEST[notasdelprogreso7]','$_REQUEST[notasdelprogreso8]','$_REQUEST[notasdelprogreso9]',
            '$_REQUEST[notasdelprogreso10]','$_REQUEST[notasdelprogreso11]',
            '$_REQUEST[notasdelprogreso12]')")
            or die ("PROBLEMAS EN LA SELECCION" . mysqli_error($conexion));
    mysqli_close($conexion);
    echo "<h1 style='color: lightblue; background-color: purple; width: 350px; margin-right: auto; margin-left: auto; border: 20px solid blue; font-size: 30px; text-align: center; margin-top: 30px; border-radius: 50px';>LOS DATOS DEL PACIENTE FUERON GUARDADOS CORRECTAMENTE</h1>";    
             
?>