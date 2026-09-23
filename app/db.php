<?php
// Datos de conexión a la BBDD
// En arquitectura de 2 servidores, $servername debe ser la IP del servidor de BBDD
$servername = "localhost"; // <-- BUG: estaba "locahost". Si la BBDD está en otro servidor, poner su IP, p.ej "192.168.1.20"
$username   = "root";      // <-- BUG: había un "0" suelto detrás que rompía la sintaxis
$password   = "root";
$dbname     = "crud_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
} // <-- BUG: faltaba esta llave de cierre

$conn->set_charset("utf8mb4");
?>
