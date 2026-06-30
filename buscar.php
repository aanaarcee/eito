<?php
session_start();

/**
 * Mapa de slugs del buscador -> archivo de destino ya armado.
 * Cuando termines un nuevo destino, agregalo acá con su slug
 * (el mismo "value" que pusiste en el <select name="destino"> del index).
 */
$destinosDisponibles = [
    'paris' => 'destino_paris.php',
    // 'cancun' => 'destino_cancun.php',
    // 'roma'   => 'destino_roma.php',
    // ...
];

$destinoSlug = $_GET['destino'] ?? '';
$origen = $_GET['origen'] ?? '';
$fechaIda = $_GET['fecha_ida'] ?? '';
$fechaVuelta = $_GET['fecha_vuelta'] ?? '';
$pasajeros = $_GET['pasajeros'] ?? '';

// Si todavía no armamos ese destino, volvemos al listado con un aviso.
if ($destinoSlug === '' || !isset($destinosDisponibles[$destinoSlug])) {
    header('Location: index.php?no_disponible=1#destinos');
    exit;
}

$queryParams = http_build_query([
    'origen' => $origen,
    'fecha_ida' => $fechaIda,
    'fecha_vuelta' => $fechaVuelta,
    'pasajeros' => $pasajeros,
]);

header('Location: ' . $destinosDisponibles[$destinoSlug] . '?' . $queryParams);
exit;
