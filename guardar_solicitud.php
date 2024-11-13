<?php
// guardar_solicitud.php
$servername = "localhost"; // Cambia esto según tu configuración
$username = "root"; // Cambia esto por tu usuario de la base de datos
$password = ""; // Cambia esto por tu contraseña
$dbname = "contact_requests"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener el tipo de servicio del POST
$service_type = $_POST['service_type'];

// Insertar en la base de datos
$sql = "INSERT INTO contact_requests (service_type) VALUES ('$service_type')";
if ($conn->query($sql) === TRUE) {
    echo "Solicitud guardada correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
