<?php 
    include("abre.php");
    $CodigoPaciente = $_POST['CodigoPaciente'];
    $Nombre = $_POST['Nombre'];
    $Apellidos = $_POST['Apellidos'];
    $Edad = $_POST['Edad'];
    $Telefono = $_POST['Telefono'];

    //aca checa bien el nombre de la bae de datos 
    $consulta = "INSERT INTO pacientes(CodigoPaciente, Nombre , Apellidos, Edad , Telefono) 
    VALUES ('$CodigoPaciente', '$Nombre', '$Apellidos', '$Edad', '$Telefono')";
    
//usa la sentencia conexion
    if ($conexion->query($consulta) === TRUE) {
        echo "Registro insertado correctamente";
        header("Location: index.html");
    } else {
        echo "Error: " . $conexion->error;
    }

?>