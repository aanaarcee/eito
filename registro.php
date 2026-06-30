<?php
session_start();
require_once __DIR__ . '/conexion.php';

$redirect = $_GET['redirect'] ?? 'index.php';
if (!preg_match('/^[a-zA-Z0-9_\-\.]+\.php(\?.*)?$/', $redirect)) {
    $redirect = 'index.php';
}

$error = '';
$nombre = '';
$apellido = '';
$correo = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $apellido = trim($_POST['apellido'] ?? '');
    $correo = trim($_POST['correo'] ?? '');
    $password = $_POST['password'] ?? '';
    $passwordConfirm = $_POST['password_confirm'] ?? '';
    $redirect = $_POST['redirect'] ?? $redirect;

    if ($nombre === '' || $apellido === '' || $correo === '' || $password === '') {
        $error = 'Completá todos los campos.';
    } elseif (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $error = 'El correo no es válido.';
    } elseif (strlen($password) < 6) {
        $error = 'La contraseña debe tener al menos 6 caracteres.';
    } elseif ($password !== $passwordConfirm) {
        $error = 'Las contraseñas no coinciden.';
    } else {
        $stmt = $pdo->prepare('SELECT IdUsuario FROM usuarios WHERE Correo = :correo');
        $stmt->execute(['correo' => $correo]);

        if ($stmt->fetch()) {
            $error = 'Ya existe una cuenta registrada con ese correo.';
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $pdo->prepare(
                'INSERT INTO usuarios (Nombre, Apellido, Correo, PasswordHash) VALUES (:nombre, :apellido, :correo, :hash)'
            );
            $stmt->execute([
                'nombre' => $nombre,
                'apellido' => $apellido,
                'correo' => $correo,
                'hash' => $hash,
            ]);

            session_regenerate_id(true);
            $_SESSION['IdUsuario'] = (int) $pdo->lastInsertId();
            $_SESSION['NombreUsuario'] = $nombre . ' ' . $apellido;

            header('Location: ' . $redirect);
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Crear cuenta | Nómada</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css?v=final"/>
</head>
<body>

<nav class="navbar-nomada navbar navbar-expand-lg px-3 px-lg-5">
  <div class="container-fluid">
    <a class="nav-logo" href="index.php">Nómada<span class="dot">.</span></a>
  </div>
</nav>

<section class="dest-section">
  <div class="container" style="max-width: 520px;">
    <div class="dest-info-card p-4 p-md-5">
      <h2 class="section-title mb-1">Crear cuenta</h2>
      <p class="section-sub mb-4">Registrate para reservar tus próximos viajes.</p>

      <?php if ($error) : ?>
        <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
      <?php endif; ?>

      <form method="post" action="registro.php">
        <input type="hidden" name="redirect" value="<?php echo htmlspecialchars($redirect); ?>"/>
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" required value="<?php echo htmlspecialchars($nombre); ?>"/>
          </div>
          <div class="col-md-6">
            <label class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido" required value="<?php echo htmlspecialchars($apellido); ?>"/>
          </div>
        </div>
        <div class="mb-3 mt-3">
          <label class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" name="correo" required value="<?php echo htmlspecialchars($correo); ?>"/>
        </div>
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="password" required minlength="6"/>
          </div>
          <div class="col-md-6">
            <label class="form-label">Confirmar contraseña</label>
            <input type="password" class="form-control" name="password_confirm" required minlength="6"/>
          </div>
        </div>
        <div class="d-grid mt-4">
          <button type="submit" class="btn btn-search">Crear cuenta</button>
        </div>
      </form>

      <p class="text-muted mt-4 mb-0 text-center">
        ¿Ya tenés cuenta? <a href="login.php?redirect=<?php echo urlencode($redirect); ?>">Iniciá sesión</a>
      </p>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
