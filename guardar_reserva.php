<?php
session_start();
require_once __DIR__ . '/conexion.php';

// Requiere sesión iniciada. Ajustá el nombre de la variable de sesión
// si en tu login usás otra clave (por ejemplo $_SESSION['usuario']['IdUsuario']).
if (empty($_SESSION['IdUsuario'])) {
    $volver = $_POST['volver_a'] ?? 'index.php';
    header('Location: login.php?redirect=' . urlencode($volver));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$idUsuario = (int) $_SESSION['IdUsuario'];
$idDestino = (int) ($_POST['id_destino'] ?? 0);
$accion = $_POST['accion'] ?? '';
$cantidadPasajeros = (int) ($_POST['pasajeros'] ?? 1);
$fechaIda = $_POST['fecha_ida'] ?? '';
$fechaVuelta = $_POST['fecha_vuelta'] ?? '';
$volverA = $_POST['volver_a'] ?? 'index.php';

// Nota: el "origen" elegido en el form no se persiste porque la tabla
// `detallecarrito`/`detallereserva` no tiene columna para eso en el
// esquema actual. Si lo necesitás guardado, hay que sumar una columna
// `Origen varchar(150)` a ambas tablas.

if ($idDestino <= 0 || $cantidadPasajeros <= 0 || !in_array($accion, ['carrito', 'comprar'], true)) {
    header('Location: ' . $volverA . '?error=1');
    exit;
}

try {
    if ($accion === 'carrito') {
        // Reutiliza el carrito más reciente del usuario, o crea uno nuevo.
        $stmt = $pdo->prepare('SELECT IdCarrito FROM carrito WHERE IdUsuario = :idUsuario ORDER BY FechaCreacion DESC LIMIT 1');
        $stmt->execute(['idUsuario' => $idUsuario]);
        $carrito = $stmt->fetch();

        if ($carrito) {
            $idCarrito = (int) $carrito['IdCarrito'];
        } else {
            $stmt = $pdo->prepare('INSERT INTO carrito (IdUsuario) VALUES (:idUsuario)');
            $stmt->execute(['idUsuario' => $idUsuario]);
            $idCarrito = (int) $pdo->lastInsertId();
        }

        $stmt = $pdo->prepare(
            'INSERT INTO detallecarrito (IdCarrito, IdDestino, CantidadPasajeros, FechaIda, FechaVuelta)
             VALUES (:idCarrito, :idDestino, :cantidad, :fechaIda, :fechaVuelta)'
        );
        $stmt->execute([
            'idCarrito' => $idCarrito,
            'idDestino' => $idDestino,
            'cantidad' => $cantidadPasajeros,
            'fechaIda' => $fechaIda !== '' ? $fechaIda : null,
            'fechaVuelta' => $fechaVuelta !== '' ? $fechaVuelta : null,
        ]);

        header('Location: ' . $volverA . '?ok=carrito');
        exit;
    }

    if ($accion === 'comprar') {
        $stmt = $pdo->prepare('SELECT Precio FROM destinos WHERE IdDestino = :idDestino');
        $stmt->execute(['idDestino' => $idDestino]);
        $destinoRow = $stmt->fetch();

        if (!$destinoRow) {
            header('Location: ' . $volverA . '?error=1');
            exit;
        }

        $precioUnitario = (float) $destinoRow['Precio'];
        $total = $precioUnitario * $cantidadPasajeros;

        $pdo->beginTransaction();

        $stmt = $pdo->prepare('INSERT INTO reservas (IdUsuario, Total) VALUES (:idUsuario, :total)');
        $stmt->execute([
            'idUsuario' => $idUsuario,
            'total' => $total,
        ]);
        $idReserva = (int) $pdo->lastInsertId();

        $stmt = $pdo->prepare(
            'INSERT INTO detallereserva (IdReserva, IdDestino, CantidadPasajeros, FechaIda, FechaVuelta, PrecioUnitario)
             VALUES (:idReserva, :idDestino, :cantidad, :fechaIda, :fechaVuelta, :precio)'
        );
        $stmt->execute([
            'idReserva' => $idReserva,
            'idDestino' => $idDestino,
            'cantidad' => $cantidadPasajeros,
            'fechaIda' => $fechaIda !== '' ? $fechaIda : null,
            'fechaVuelta' => $fechaVuelta !== '' ? $fechaVuelta : null,
            'precio' => $precioUnitario,
        ]);

        $pdo->commit();

        header('Location: ' . $volverA . '?ok=comprar');
        exit;
    }
} catch (PDOException $e) {
    if ($pdo->inTransaction()) {
        $pdo->rollBack();
    }
    header('Location: ' . $volverA . '?error=1');
    exit;
}
