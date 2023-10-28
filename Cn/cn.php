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
}

$conn->close();
?>