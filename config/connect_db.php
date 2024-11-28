<?php
$servername = "localhost";
$username = "root";
$password = "dualipin";
$dbname = "estadistica";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Fallo la Conexión: " . $conn->connect_error);
}
