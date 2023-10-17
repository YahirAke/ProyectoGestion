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
if(isset($procedimiento) == 'InicioSesion') {
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
else if(isset($procedimiento) == 'Registrarse'){
    $parametro1 = isset($_POST['parametro1']) ? $_POST['parametro1'] : '';
    $parametro2 = isset($_POST['parametro2']) ? $_POST['parametro2'] : '';
    // Obtén más parámetros según sea necesario

    $sql = "CALL $procedimiento(?, ?)"; // Ajusta la consulta de acuerdo a la cantidad de parámetros

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param('ss', $parametro1, $parametro2); // Ajusta el tipo de datos según tus necesidades
        if ($stmt->execute()) {
            echo 'se ejecuto correctamente';
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