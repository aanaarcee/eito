<?php
session_start();

$experiencias = [
    [
        'nombre' => 'Cancún Paradise',
        'pais' => 'México',
        'duracion' => '7 días / 6 noches',
        'temporada' => 'Temporada alta',
        'hotel' => 'Hotel Grand Ocean',
        'pasajeros' => '2 pasajeros',
        'excursiones' => 'Snorkel, cenote y tour en catamarán',
        'precio' => '$1.240 USD',
        'imagen' => 'img/cancunimg.jpg',
    ],
    [
        'nombre' => 'Playa del Carmen',
        'pais' => 'México',
        'duracion' => '6 días / 5 noches',
        'temporada' => 'Temporada alta',
        'hotel' => 'Resort Coral Beach',
        'pasajeros' => '4 pasajeros',
        'excursiones' => '-',
        'precio' => '$980 USD',
        'imagen' => 'img/playa1img.jpg',
    ],
    [
        'nombre' => 'Punta Cana',
        'pais' => 'República Dominicana',
        'duracion' => '8 días / 7 noches',
        'temporada' => 'Temporada alta',
        'hotel' => 'Boutique Mar Azul',
        'pasajeros' => '2 pasajeros',
        'excursiones' => 'Catamaran y spa',
        'precio' => '$1.560 USD',
        'imagen' => 'img/playa2img.jpg',
    ],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Experiencias | Nómada</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin=""/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="../style.css?v=final"/>
</head>
<body>

<nav class="navbar-nomada navbar navbar-expand-lg px-3 px-lg-5">
  <div class="container-fluid">
    <a class="nav-logo" href="../index.php">Nómada<span class="dot">.</span></a>
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navMenu">
      <ul class="navbar-nav gap-0 mx-auto">
        <li class="nav-item"><a class="nav-link-item nav-link" href="../index.php">Inicio</a></li>
        <li class="nav-item"><a class="nav-link-item nav-link" href="../index.php#destinos">Destinos</a></li>
        <li class="nav-item"><a class="nav-link-item nav-link" href="../index.php#paquetes">Paquetes</a></li>
        <li class="nav-item"><a class="nav-link-item nav-link" href="../index.php#contacto">Contacto</a></li>
      </ul>
      <div class="d-flex align-items-center gap-3 mt-2 mt-lg-0">
        <?php if (!empty($_SESSION['IdUsuario'])) : ?>
          <span class="nav-link-item" style="cursor:default;">
            <i class="bi bi-person-circle me-1"></i><?php echo htmlspecialchars($_SESSION['NombreUsuario'] ?? 'Mi cuenta'); ?>
          </span>
          <a href="../login/logout.php" class="btn btn-login-nav">Cerrar sesión</a>
        <?php else : ?>
          <a href="../login/login.php?redirect=paquetes/paquetes_playa.php" class="btn btn-login-nav">Iniciar sesión</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>

<section class="dest-section" style="padding-top: 8rem;">
  <div class="container">
    <div class="text-center mb-5">
      <span class="section-label">Experiencias</span>
      <h1 class="section-title">Nuestros mejores paquetes</h1>
      <p class="section-sub mx-auto">Descubrí los viajes con playa más buscados para disfrutar de sol, relax y aventuras en familia o en pareja.</p>
    </div>

    <div class="mb-4">
      <h2 class="section-title">Destinos con Playa</h2>
    </div>

    <div class="row g-4">
      <?php foreach ($experiencias as $experiencia) : ?>
        <div class="col-12">
          <a href="../destinos/destino_cancun.php" class="dest-card text-decoration-none d-block h-100">
            <div class="row g-0 align-items-stretch">
              <div class="col-md-4">
                <img src="<?php echo htmlspecialchars($experiencia['imagen']); ?>" class="dest-card-img" alt="<?php echo htmlspecialchars($experiencia['nombre']); ?>" loading="lazy"/>
              </div>
              <div class="col-md-5">
                <div class="dest-card-body h-100 d-flex flex-column justify-content-between">
                  <div>
                    <div class="dest-card-name mb-2"><?php echo htmlspecialchars($experiencia['nombre']); ?></div>
                    <div class="dest-card-desc mb-2"><strong>País:</strong> <?php echo htmlspecialchars($experiencia['pais']); ?></div>
                    <div class="dest-card-desc mb-2"><strong>Duración:</strong> <?php echo htmlspecialchars($experiencia['duracion']); ?></div>
                    <div class="dest-card-desc mb-2"><strong>Temporada:</strong> <?php echo htmlspecialchars($experiencia['temporada']); ?></div>
                    <div class="dest-card-desc mb-2"><strong>Hotel:</strong> <?php echo htmlspecialchars($experiencia['hotel']); ?></div>
                    <div class="dest-card-desc mb-2"><strong>Pasajeros incluidos:</strong> <?php echo htmlspecialchars($experiencia['pasajeros']); ?></div>
                    <div class="dest-card-desc mb-0"><strong>Excursiones:</strong> <?php echo htmlspecialchars($experiencia['excursiones']); ?></div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 border-start border-light">
                <div class="dest-card-body h-100 d-flex flex-column justify-content-center align-items-start">
                  <div class="dest-from">Precio desde</div>
                  <div class="dest-amount mb-3"><?php echo htmlspecialchars($experiencia['precio']); ?></div>
                  <span class="btn-ver-mas">Ver paquete</span>
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<footer>
  <div class="container">
    <div class="row g-4">
      <div class="col-lg-4">
        <a href="../index.php" class="footer-logo">Nómada<span class="dot">.</span></a>
        <p class="footer-tagline">Viajes diseñados para convertir cada destino en una experiencia inolvidable.</p>
        <div class="footer-socials">
          <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-whatsapp"></i></a>
        </div>
      </div>
      <div class="col-lg-2 col-6">
        <div class="footer-col-title">Explorar</div>
        <ul class="footer-list">
          <li><a href="../index.php">Inicio</a></li>
          <li><a href="../index.php#destinos">Destinos</a></li>
          <li><a href="paquetes_playa.php">Paquetes de playa</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-6">
        <div class="footer-col-title">Soporte</div>
        <ul class="footer-list">
          <li><a href="../login/login.php">Iniciar sesión</a></li>
          <li><a href="../login/registro.php">Crear cuenta</a></li>
          <li><a href="#">Ayuda</a></li>
        </ul>
      </div>
      <div class="col-lg-3">
        <div class="footer-col-title">Contacto</div>
        <div class="footer-contact-row"><i class="bi bi-geo-alt"></i><span>Av. Siempre Viva 742, Buenos Aires</span></div>
        <div class="footer-contact-row"><i class="bi bi-telephone"></i><span>+54 11 5555 1234</span></div>
        <div class="footer-contact-row"><i class="bi bi-envelope"></i><span>hola@nómada.com</span></div>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© 2026 Nómada. Todos los derechos reservados.</span>
      <span><a href="#">Política de privacidad</a> · <a href="#">Términos y condiciones</a></span>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
