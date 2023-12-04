<?php
$servername = "localhost";
$username = "root";
$password = "1401aaronYahir2#";
$dbname = "prestatecweb";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el procedimiento y los parámetros de la solicitud POST
$procedimiento = $_POST['procedimiento'];

if($procedimiento == 'InicioSesion') {
    $Usuario = isset($_POST['Usuario']) ? $_POST['Usuario'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
    // Obtén más parámetros según sea necesario

    $sql = "CALL $procedimiento(?, ?)"; // Ajusta la consulta de acuerdo a la cantidad de parámetros

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param('ss', $Usuario, $Password); // Ajusta el tipo de datos según tus necesidades
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $data = array();
            if(empty($result->fetch_assoc())){
                echo 0;
            } else {
                echo 1;
            }
            //while ($row = $result->fetch_assoc()) {
            //    $data[] = $row;
            //}
            //echo json_encode($data)
            
        } else {
            echo "Error al ejecutar el procedimiento: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error al preparar la sentencia: " . $conn->error;
    }
} else if($procedimiento == 'Registrarse'){
    $Matricula = isset($_POST['Matricula']) ? $_POST['Matricula'] : '';
    $Nombre = isset($_POST['Nombre']) ? $_POST['Nombre'] : '';
    $Email = isset($_POST['Email']) ? $_POST['Email'] : '';
    $Apellido = isset($_POST['Apellido']) ? $_POST['Apellido'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
    // Obtén más parámetros según sea necesario


    // Llamar a la función de MySQL con los parámetros
    $sql = "SELECT ${procedimiento} ($Matricula, '$Email', '$Nombre', '$Apellido', '$Password') AS result";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
    // Obtener el resultado de la función
    $row = $result->fetch_assoc();
    $functionResult = $row["result"];
    
    echo $functionResult;
    } else {
    echo "Error al ejecutar la función: " . $conn->error;
    }
} else if($procedimiento == 'BuscadorHerramienta') {
    $Codigo = ($_POST['Codigo'] !="") ? $_POST['Codigo'] : NULL;
    $Herramienta = ($_POST['Herramienta'] !="") ? $_POST['Herramienta'] : NULL;
    $Estado = ($_POST['Estado'] != "") ? $_POST['Estado'] : NULL;
    // Obtén más parámetros según sea necesario
    $sql = "CALL $procedimiento(?, ?, ?)"; // Ajusta la consulta de acuerdo a la cantidad de parámetros
    
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param('sss', $Codigo, $Herramienta, $Estado); // Ajusta el tipo de datos según tus necesidades
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            echo json_encode($data);
            
        } else {
            echo "Error al ejecutar el procedimiento: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error al preparar la sentencia: " . $conn->error;
    }
} else if ($procedimiento == 'InfoHerramienta') {
    $id = (!empty($_POST['id'])) ? $_POST['id'] : NULL;
    // Obtén más parámetros según sea necesario
    $sql = "SELECT * FROM Herramienta_info WHERE ID_Herramienta = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);

    if ($stmt) {
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            echo json_encode($data);
        } else {
            echo "Error al ejecutar el procedimiento: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error al preparar la sentencia: " . $conn->error;
    }
} else if($procedimiento == 'Mod_Herramienta'){
    $id = (!empty($_POST['id'])) ? $_POST['id'] : '';
    $Nombre = ($_POST['Nombre'] != "") ? $_POST['Nombre'] : '';
    $Descripcion = (!empty($_POST['Descripcion'])) ? $_POST['Descripcion'] : '';
    $Cantidad_t = (!empty($_POST['Cantidad_t'])) ? $_POST['Cantidad_t'] : '';
    $Estatus = (!empty($_POST['Estatus'])) ? $_POST['Estatus'] : '';
    // Obtén más parámetros según sea necesario


    // Llamar a la función de MySQL con los parámetros
    $sql = "SELECT ${procedimiento} ($id, '$Nombre', '$Descripcion', '$Estatus', $Cantidad_t) AS result";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
    // Obtener el resultado de la función
    $row = $result->fetch_assoc();
    $functionResult = $row["result"];
    
    echo $functionResult;
    } else {
    echo "Error al ejecutar la función: " . $conn->error;
    }
} else if($procedimiento == 'AgregarHerramienta'){
    $Codigo = (!empty($_POST['Codigo'])) ? $_POST['Codigo'] : '';
    $Nombre = ($_POST['Nombre'] != "") ? $_POST['Nombre'] : '';
    $Descripcion = (!empty($_POST['Descripcion'])) ? $_POST['Descripcion'] : '';
    $Cantidad_t = (!empty($_POST['Cantidad_t'])) ? $_POST['Cantidad_t'] : '';
    $Estatus = (!empty($_POST['Estatus'])) ? $_POST['Estatus'] : '';
    // Obtén más parámetros según sea necesario


    // Llamar a la función de MySQL con los parámetros
    $sql = "SELECT ${procedimiento} ('$Nombre', '$Codigo', '$Descripcion', '$Estatus', $Cantidad_t) AS result";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
    // Obtener el resultado de la función
    $row = $result->fetch_assoc();
    $functionResult = $row["result"];
    
    echo $functionResult;
    } else {
    echo "Error al ejecutar la función: " . $conn->error;
    }
} else if($procedimiento == 'BuscadorPrestamo') {
    $Folio = ($_POST['Folio'] !="") ? $_POST['Folio'] : NULL;
    $Matricula = ($_POST['Matricula'] !="") ? $_POST['Matricula'] : NULL;
    $Nombre = ($_POST['Nombre'] !="") ? $_POST['Nombre'] : NULL;
    $FechaP = ($_POST['FechaP'] !="") ? $_POST['FechaP'] : NULL;
    $FechaD = ($_POST['FechaD'] !="") ? $_POST['FechaD'] : NULL;
    $Estado = ($_POST['Estado'] != "") ? $_POST['Estado'] : NULL;
    // Obtén más parámetros según sea necesario
    $sql = "CALL $procedimiento(?, ?, ?, ?, ?, ?)"; // Ajusta la consulta de acuerdo a la cantidad de parámetros
    
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param('ssssss', $Folio, $Matricula, $Nombre, $Estado, $FechaP, $FechaD); // Ajusta el tipo de datos según tus necesidades
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            echo json_encode($data);
            
        } else {
            echo "Error al ejecutar el procedimiento: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error al preparar la sentencia: " . $conn->error;
    }
} else if($procedimiento == 'verificacion_prestamo'){
    $Matricula = (!empty($_POST['Matricula'])) ? $_POST['Matricula'] : '';


    // Llamar a la función de MySQL con los parámetros
    $sql = "SELECT ${procedimiento} ($Matricula) AS result";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
    // Obtener el resultado de la función
    $row = $result->fetch_assoc();
    $functionResult = $row["result"];
    
    echo $functionResult;
    } else {
    echo "Error al ejecutar la función: " . $conn->error;
    }
} else if($procedimiento == 'SolicitarPrestamo'){
    $Matricula = (!empty($_POST['Matricula'])) ? $_POST['Matricula'] : '';
    $Tipo = (!empty($_POST['Tipo'])) ? $_POST['Tipo'] : '';
    $Plazo = (!empty($_POST['Plazo'])) ? $_POST['Plazo'] : '';
    $ID_H = (!empty($_POST['ID_H'])) ? $_POST['ID_H'] : '';
    $Cantidad = (!empty($_POST['Cantidad'])) ? $_POST['Cantidad'] : '';


    // Llamar a la función de MySQL con los parámetros
    $sql = "SELECT ${procedimiento} ($Matricula, '$Tipo', $Plazo, '$ID_H', $Cantidad) AS result";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
    // Obtener el resultado de la función
    $row = $result->fetch_assoc();
    $functionResult = $row["result"];
    
    echo $functionResult;
    } else {
    echo "Error al ejecutar la función: " . $conn->error;
    }

} else if ($procedimiento == 'InfoPrestamo') {
    $id = (!empty($_POST['id'])) ? $_POST['id'] : NULL;
    // Obtén más parámetros según sea necesario
    $sql = "SELECT * FROM registrogeneral WHERE ID_Prestamo = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);

    if ($stmt) {
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            echo json_encode($data);
        } else {
            echo "Error al ejecutar el procedimiento: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error al preparar la sentencia: " . $conn->error;
    }
} else if($procedimiento == 'PrestamoLocker'){
    $Matricula = (!empty($_POST['Matricula'])) ? $_POST['Matricula'] : '';
    $Locker = (!empty($_POST['Locker'])) ? $_POST['Locker'] : '';


    // Llamar a la función de MySQL con los parámetros
    $sql = "SELECT ${procedimiento} ($Matricula, '$Locker') AS result";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
    // Obtener el resultado de la función
    $row = $result->fetch_assoc();
    $functionResult = $row["result"];
    
    echo $functionResult;
    } else {
    echo "Error al ejecutar la función: " . $conn->error;
    }

} else if ($procedimiento == 'InfoHerramientaPrestamo') {
    $id = (!empty($_POST['id'])) ? $_POST['id'] : NULL;
    // Obtén más parámetros según sea necesario
    $sql = "SELECT * FROM HerramientaPrestamo WHERE ID = ? ";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);

    if ($stmt) {
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            echo json_encode($data);
        } else {
            echo "Error al ejecutar el procedimiento: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error al preparar la sentencia: " . $conn->error;
    }
} else if($procedimiento == 'DevolverPrestamo'){
    $ID_Prestamo = (!empty($_POST['ID'])) ? $_POST['ID'] : '';
    $Matricula = (!empty($_POST['Matricula'])) ? $_POST['Matricula'] : '';
    $Tipo = 'Herramientas';
    $Codigo = (!empty($_POST['Codigo'])) ? $_POST['Codigo'] : '';
    $Cantidad = (!empty($_POST['Cantidad'])) ? $_POST['Cantidad'] : '';
    $flag = (!empty($_POST['Flag'])) ? $_POST['Flag'] : '';


    // Llamar a la función de MySQL con los parámetros
    $sql = "SELECT ${procedimiento} ('$Tipo', $ID_Prestamo, '$Codigo', $Cantidad, $flag) AS result";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
    // Obtener el resultado de la función
    $row = $result->fetch_assoc();
    $functionResult = $row["result"];
    
    echo $functionResult;
    } else {
    echo "Error al ejecutar la función: " . $conn->error;
    }

} else if ($procedimiento == 'InfoHerramienta_Prestamo') {
    $id = (!empty($_POST['id'])) ? $_POST['id'] : NULL;
    // Obtén más parámetros según sea necesario
    $sql = "SELECT * FROM herramientaprestamo WHERE ID_H = ? AND estatus_p = true";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);

    if ($stmt) {
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            echo json_encode($data);
        } else {
            echo "Error al ejecutar el procedimiento: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error al preparar la sentencia: " . $conn->error;
    }
} else if ($procedimiento == 'InfoPrestamoLocker') {
    $id = (!empty($_POST['id'])) ? $_POST['id'] : NULL;
    // Obtén más parámetros según sea necesario
    $sql = "SELECT * FROM locker_info WHERE ID_Prestamo = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);

    if ($stmt) {
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            echo json_encode($data);
        } else {
            echo "Error al ejecutar el procedimiento: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error al preparar la sentencia: " . $conn->error;
    }
} else if($procedimiento == 'DevolverPrestamoLocker'){
    $ID_Prestamo = (!empty($_POST['ID'])) ? $_POST['ID'] : '';
    // Llamar a la función de MySQL con los parámetros
    $sql = "SELECT ${procedimiento} ($ID_Prestamo) AS result";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
    // Obtener el resultado de la función
    $row = $result->fetch_assoc();
    $functionResult = $row["result"];
    
    echo $functionResult;
    } else {
    echo "Error al ejecutar la función: " . $conn->error;
    }

} else if ($procedimiento == 'locker_ocupados') {
    // Obtén más parámetros según sea necesario
    $sql = "SELECT * FROM locker WHERE Estatus = false";
    
    $stmt = $conn->prepare($sql);
    if ($stmt) {
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            echo json_encode($data);
        } else {
            echo "Error al ejecutar el procedimiento: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error al preparar la sentencia: " . $conn->error;
    }
} else if ($procedimiento == 'Usuarios') {
    $parametro = (!empty($_POST['Palabra'])) ? '%'.$_POST['Palabra'].'%' : '%%';
    // Obtén más parámetros según sea necesario
    $sql = "SELECT * FROM usuario WHERE Nombre like ? OR Apellido like ? AND Estado = true";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $parametro, $parametro);

    if ($stmt) {
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            echo json_encode($data);
        } else {
            echo "Error al ejecutar el procedimiento: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error al preparar la sentencia: " . $conn->error;
    }
}

$conn->close();
?>