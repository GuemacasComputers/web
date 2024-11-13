<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact_requests";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $service = $_POST['service'];
    $dateTime = date("Y-m-d H:i:s");

    $sql = "INSERT INTO contact_requests (service_type, request_date) VALUES ('$service', '$dateTime')";
    if ($conn->query($sql) === TRUE) {
        echo "Registro exitoso en la base de datos.";
    } else {
        echo "Error en la inserción: " . $conn->error;
    }
}

$conn->close();
?>
