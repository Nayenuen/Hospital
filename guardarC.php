<?php 
    include("abre.php");
    $CodigoPaciente = $_POST['CodigoPaciente'];
    $Padecimiento = $_POST['Padecimiento'];
    $FechaHora = $_POST['FechaHora'];
   

    //aca checa bien el nombre de la bae de datos 
    $consulta = "INSERT INTO citas(CodigoPaciente , Padecimiento, FechaHora) 
    VALUES ('$CodigoPaciente', '$Padecimiento', '$FechaHora')";
    
//usa la sentencia conexion
    if ($conexion->query($consulta) === TRUE) {
        echo "Registro insertado correctamente";
        header("Location: citas.html");
    } else {
        echo "Error: " . $conexion->error;
    }

?>