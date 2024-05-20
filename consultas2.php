<?php include 'log/header.php'; ?>

<?php 
    $conexion = mysqli_connect("localhost", "root", "", "clinica")
        or die("PROBLEMAS CON LA CONEXION");

    $nombredelpaciente2 = $_REQUEST['nombredelpaciente2']; 

    $consulta = mysqli_query($conexion,"SELECT * FROM historial WHERE nombrepaciente='$nombredelpaciente2'"
    ) or die ("PROBLEMAS EN LA SELECCION" . mysqli_error($conexion));

    mysqli_close($conexion);

    
    $resultado = ['historial'];
    while ($fila = mysqli_fetch_assoc($consulta)) {
        $resultado['historial'] = $fila;
    }
    foreach ($resultado as $fila) {
        echo "<h1 style='color: lightblue; background-color: purple; width: 600px; margin-right: auto; margin-left: auto; border: 20px solid blue; font-size: 30px; text-align: center; margin-top: 30px; border-radius: 50px';>LOS DATOS DEL PACIENTE FUERON CARGADOS CORRECTAMENTE<br>" . print_r($fila, true) . "</h1>";    
    }   
          
?>















<?php
/*$conexion =mysqli_connect("localhost","root","","clinica")or die("problema de conexion");

$registros = mysqli_query($conexion, "SELECT codigo,nombre_medico,fecha_revision,telefono_paciente,telefono_medico,medicamento,docificacion,freq1,medico_medicamento, fecha_medicamento_inicio,fecha_medicamento_fin,proposito,medicamento2,procedimiento,freq2,medico_quirurgico,fecha_quirurgico,hospital,observacion,vacuna_tetanos,docificacion_tetanos,vacuna_fiebre_amarilla,docificacion_fiebre_amarilla FROM historial WHERE codigo='$_REQUEST[codigo]'")or die("problema en el select: " . mysqli_error($conexion));

while ($reg = mysqli_fetch_array($registros)){

    echo "su registro es: " . 
    
    "<h3 style='color:white;border:;background-color: black; text-align:center'>".
    
   "codigo del paciente: " . "<br>" . $reg[0] , "<br>",
   "Nombre del paciente: " . "<br>" . $reg[1] , "<br>",
   "Nombre del medico: " . "<br>" . $reg[2] , "<br>",
   "Fecha de revision: " . "<br>" . $reg[3] , "<br>",
   "Telefono paciente: " . "<br>" . $reg[4] , "<br>",
   "Telefono medico: " . "<br>" . $reg[5] , "<br>",
   "Medicamento: " . "<br>" . $reg[6] , "<br>",
   "docificacion: " . "<br>" . $reg[7] , "<br>",
   "frecuencia de docificacion: " . "<br>" . $reg[8] , "<br>",
   "Farmaceutico: " . "<br>" . $reg[9] , "<br>",
   "Fecha inicio del medicamento: " . "<br>" . $reg[10] , "<br>",
   "Fecha fin del medicamento: " . "<br>" . $reg[11] , "<br>",
   "proposito: " . "<br>" . $reg[12] , "<br>",
   "medicamento: : " . "<br>" . $reg[13] , "<br>",
   "procedimiento: " . "<br>" . $reg[14] , "<br>",
   "frecuencia del medicamento: " . "<br>" . $reg[15] , "<br>",
   "Medico quirurgico: " . "<br>" . $reg[16] , "<br>",
   "fecha quirurgico: " . "<br>" . $reg[17] , "<br>",
   "hospital: " . "<br>" . $reg[18] , "<br>",
   "observacion: " . "<br>" . $reg[19] , "<br>",
   "vacuna tetano: " . "<br>" . $reg[20] , "<br>",
   "docificacion tetano: " . "<br>" . $reg[21] , "<br>",
   "vacuna de fiebre amarilla: " . "<br>" . $reg[22] , "<br>"
  ."</h3>";
}
mysqli_close($conexion);
/*$registros =mysqli_query($conexion "SELECT codigo, paciente,nombre_medico, fecha_revision,telefono_paciente,telefono_medico,medicamento,docificacion,freq1,medico_medicamento, fecha_medicamento_inicio,fecha_medicamento_fin,proposito,medicamento2,procedimiento,freq2,medico_quirurgico,fecha_quirurgico,hospital,observacion,vacuna_tetanos,docificacion_tetanos,vacuna_fiebre_amarilla,docificacion_fiebre_amarilla FROM historial WHERE codigo=$_REQUEST[codigo]")or die("problema en el select: " . mysqli_error($conexion));*/
?>