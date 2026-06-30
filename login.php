<?php
session_start();
require_once __DIR__ . '/conexion.php';

$redirect = $_GET['redirect'] ?? 'index.php';
// Evitamos que "redirect" se use para mandar a otro dominio.
if (!preg_match('/^[a-zA-Z0-9_\-\.]+\.php(\?.*)?$/', $redirect)) {
    $redirect = 'index.php';
}

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = trim($_POST['correo'] ?? '');
    $password = $_POST['password'] ?? '';
    $redirect = $_POST['redirect'] ?? $redirect;

    if ($correo === '' || $password === '') {
        $error = 'Completá correo y contraseña.';
    } else {
        $stmt = $pdo->prepare('SELECT IdUsuario, Nombre, Apellido, PasswordHash FROM usuarios WHERE Correo = :correo');
        $stmt->execute(['correo' => $correo]);
        $usuario = $stmt->fetch();

        if ($usuario && password_verify($password, $usuario['PasswordHash'])) {
            session_regenerate_id(true);
            $_SESSION['IdUsuario'] = (int) $usuario['IdUsuario'];
            $_SESSION['NombreUsuario'] = $usuario['Nombre'] . ' ' . $usuario['Apellido'];

            header('Location: ' . $redirect);
            exit;
        }

        $error = 'Correo o contraseña incorrectos.';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Iniciar sesión | Nómada</title>
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
  <div class="container" style="max-width: 480px;">
    <div class="dest-info-card p-4 p-md-5">
      <h2 class="section-title mb-1">Iniciar sesión</h2>
      <p class="section-sub mb-4">Ingresá para reservar o agregar viajes al carrito.</p>

      <?php if ($error) : ?>
        <div class="alert alert-danger"><?php echo htmlspecialchars($error); ?></div>
      <?php endif; ?>

      <form method="post" action="login.php">
        <input type="hidden" name="redirect" value="<?php echo htmlspecialchars($redirect); ?>"/>
        <div class="mb-3">
          <label class="form-label">Correo electrónico</label>
          <input type="email" class="form-control" name="correo" required value="<?php echo htmlspecialchars($_POST['correo'] ?? ''); ?>"/>
        </div>
        <div class="mb-3">
          <label class="form-label">Contraseña</label>
          <input type="password" class="form-control" name="password" required/>
        </div>
        <div class="d-grid mt-4">
          <button type="submit" class="btn btn-search">Ingresar</button>
        </div>
      </form>

      <p class="text-muted mt-4 mb-0 text-center">
        ¿No tenés cuenta? <a href="registro.php?redirect=<?php echo urlencode($redirect); ?>">Registrate acá</a>
      </p>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
