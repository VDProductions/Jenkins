<?php
// El host es el nombre del servicio de la base de datos en docker-compose ('db')
$host = 'db'; 
$user = 'root';
$password = getenv('ROOT_PASSWORD'); // Requisito: Leer contraseña mediante getenv
$database = 'mysql';

// Desactivamos temporalmente el reporte de excepciones estricto para manejar el error limpiamente
mysqli_report(MYSQLI_REPORT_OFF);

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    // Requisito: Mensaje de error si no se produce la conexión
    echo "<h1>Error de conexión: " . $conn->connect_error . "</h1>";
} else {
    // Requisito: Mensaje de éxito si se produce la conexión
    echo "<h1>Conexión exitosa a la base de datos</h1>";
}
$conn->close();
?>