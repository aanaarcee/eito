<?php
$servidor = 'localhost';
$usuario = 'root';
$contraseña = '';
$baseDatos = 'nomada';

$mysqli = new mysqli($servidor, $usuario, $contraseña, $baseDatos);

if ($mysqli->connect_error) {
    die('Error en la conexion' . $mysqli->connect_error);
}

$mysqli->set_charset('utf8');

try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$baseDatos;charset=utf8", $usuario, $contraseña, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die('Error en la conexion: ' . $e->getMessage());
}
?>
