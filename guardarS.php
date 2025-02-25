<?php 
    include("abre.php");
    $CodigoPaciente = $_POST['CodigoPaciente'];
    $CodigoMedicamento = $_POST['CodigoMedicamento'];
   
    //aca checa bien el nombre de la bae de datos 
    $consulta = "INSERT INTO seguimiento(CodigoPaciente , CodigoMedicamento) 
    VALUES ('$CodigoPaciente', '$CodigoMedicamento')";
    
//usa la sentencia conexion
    if ($conexion->query($consulta) === TRUE) {
        echo "Registro insertado correctamente";
        header("Location: seguimiento.html");
    } else {
        echo "Error: " . $conexion->error;
    }

?>