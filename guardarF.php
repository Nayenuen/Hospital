<?php 
    include("abre.php");
    $CodigoMedicamento = $_POST['CodigoMedicamento'];
    $Nombre = $_POST['Nombre'];
    $Precio = $_POST['Precio'];

    //aca checa bien el nombre de la bae de datos 
    $consulta = "INSERT INTO farmacia(CodigoMedicamento, Nombre , Precio) 
    VALUES ('$CodigoMedicamento', '$Nombre', '$Precio')";
    
//usa la sentencia conexion
    if ($conexion->query($consulta) === TRUE) {
        echo "Registro insertado correctamente";
        header("Location: farmacia.html");
    } else {
        echo "Error: " . $conexion->error;
    }

?>