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

    $sql = "SELECT $procedimiento(?, ?, ?, ?, ?)"; // Ajusta la consulta de acuerdo a la cantidad de parámetros

    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param('sssss', $Matricula, $Email, $Nombre, $Apellido, $Password); // Ajusta el tipo de datos según tus necesidades
        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $data = array();
            $row = $result->fetch_assoc();
            $resultado = (bool)$row;
            if($resultado){
                echo 1;
            } else {
                echo 0;
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
}

$conn->close();
?>