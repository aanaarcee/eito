<?php
$destination = [
    'name' => 'Cancún',
    'country' => 'México',
    'category' => 'Playa',
    'price' => 850,
    'currency' => 'USD',
    'hero_image' => 'img/cancunimg.jpg',
    'description' => 'Disfrutá de aguas turquesas, playas de arena blanca y un servicio turístico de primer nivel. Cancún ofrece desde resorts todo incluido hasta experiencias activas en la Riviera Maya.',
    'services' => [
        'Alojamiento 5 estrellas',
        'Traslados aeropuerto-hotel-aeropuerto',
        'Desayuno incluido',
        'Asistencia en español 24/7',
        'Seguro básico de viaje',
    ],
    'activities' => [
        'Snorkel en arrecifes de coral',
        'Visita a Tulum y Chichén Itzá',
        'Paseo en catamarán',
        'Tour en kayak por manglares',
        'Cena frente al mar',
    ],
    'itinerary' => [
        [
            'day' => 'Día 1',
            'title' => 'Llegada y bienvenida',
            'detail' => 'Recepción en el aeropuerto y traslado al hotel. Tarde libre para instalarse y disfrutar de la playa.',
        ],
        [
            'day' => 'Día 2',
            'title' => 'Recorrido por la Riviera Maya',
            'detail' => 'Excursión de día completo a Tulum y al cenote Azul, con almuerzo incluido.',
        ],
        [
            'day' => 'Día 3',
            'title' => 'Día de playa y relax',
            'detail' => 'Jornada libre para disfrutar del resort, actividades opcionales y piscina.',
        ],
        [
            'day' => 'Día 4',
            'title' => 'Aventura acuática',
            'detail' => 'Snorkel en el Parque Nacional de Cancún y paseo en catamarán al atardecer.',
        ],
        [
            'day' => 'Día 5',
            'title' => 'Regreso a casa',
            'detail' => 'Mañana libre y traslado al aeropuerto según tu vuelo.',
        ],
    ],
    'gallery' => [
        'img/cancunimg.jpg',
        'img/playa1img.jpg',
        'img/playa2img.jpg',
        'img/playa3img.jpg',
    ],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Destino — <?php echo htmlspecialchars($destination['name']); ?> | Nómada</title>
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
      <a href="#reserva" class="btn btn-login-nav mt-2 mt-lg-0">Reservar</a>
    </div>
  </div>
</nav>

<section class="hero-dest">
  <div class="hero-bg" style="background-image: url('<?php echo htmlspecialchars($destination['hero_image']); ?>');"></div>
  <div class="container hero-inner py-5">
    <div class="row align-items-end">
      <div class="col-lg-7">
        <span class="dest-badge"><?php echo htmlspecialchars($destination['category']); ?></span>
        <h1 class="hero-title"><?php echo htmlspecialchars($destination['name']); ?>, <?php echo htmlspecialchars($destination['country']); ?></h1>
        <p class="hero-sub"><?php echo htmlspecialchars($destination['description']); ?></p>
      </div>
      <div class="col-lg-5 text-lg-end">
        <div class="dest-info-card mt-4 mt-lg-0">
          <div class="dest-meta mb-3">
            <div class="dest-label">Precio desde</div>
            <div class="dest-value">$<?php echo number_format($destination['price'], 0, ',', '.'); ?> <small><?php echo htmlspecialchars($destination['currency']); ?></small></div>
          </div>
          <div class="dest-meta mb-3">
            <div class="dest-label">Categoría</div>
            <div class="dest-value"><?php echo htmlspecialchars($destination['category']); ?></div>
          </div>
          <div class="dest-meta">
            <div class="dest-label">País</div>
            <div class="dest-value"><?php echo htmlspecialchars($destination['country']); ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<main>
  <section class="dest-section">
    <div class="container">
      <div class="row g-4">
        <div class="col-lg-8">
          <div class="section-label">Detalle del destino</div>
          <h2 class="section-title">Qué incluye esta experiencia</h2>
          <p class="section-sub">Conoce las mejores actividades y servicios que te esperan en este paquete pensado para disfrutar sin preocupaciones.</p>

          <div class="row gy-4 mt-4">
            <div class="col-md-6">
              <div class="dest-info-card p-4 h-100">
                <h3 class="mb-3">Servicios incluidos</h3>
                <ul class="list-unstyled m-0">
                  <?php foreach ($destination['services'] as $service) : ?>
                    <li class="mb-2"><i class="bi bi-check2-circle text-success me-2"></i><?php echo htmlspecialchars($service); ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="dest-info-card p-4 h-100">
                <h3 class="mb-3">Actividades destacadas</h3>
                <ul class="list-unstyled m-0">
                  <?php foreach ($destination['activities'] as $activity) : ?>
                    <li class="mb-2"><i class="bi bi-star-fill text-warning me-2"></i><?php echo htmlspecialchars($activity); ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>

          <div class="mt-5">
            <h3 class="mb-3">Itinerario</h3>
            <div class="timeline">
              <?php foreach ($destination['itinerary'] as $index => $item) : ?>
                <div class="timeline-item" style="--i:<?php echo $index; ?>;">
                  <div class="timeline-marker">
                    <span class="timeline-badge"><?php echo $index + 1; ?></span>
                  </div>
                  <div class="timeline-card">
                    <div class="timeline-card-header">
                      <span class="timeline-day"><?php echo htmlspecialchars($item['day']); ?></span>
                      <h4 class="timeline-title"><?php echo htmlspecialchars($item['title']); ?></h4>
                    </div>
                    <p class="timeline-desc"><?php echo htmlspecialchars($item['detail']); ?></p>
                  </div>
                </div>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="mt-5">
            <h3 class="mb-3">Galería</h3>
            <div class="gallery-grid">
              <?php foreach ($destination['gallery'] as $image) : ?>
                <img src="<?php echo htmlspecialchars($image); ?>" alt="Galería de <?php echo htmlspecialchars($destination['name']); ?>" loading="lazy"/>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <div class="col-lg-4">
          <div id="reserva" class="dest-info-card p-4 sticky-top" style="top: 92px;">
            <h3 class="mb-3">Reserva tu viaje</h3>
            <p class="text-muted">Completa los datos y elegí si querés agregar al carrito o comprar ahora.</p>
            <form>
              <div class="mb-3">
                <label class="form-label">Origen</label>
                <select class="form-select">
                  <option value="">Seleccioná tu ciudad</option>
                  <option>Buenos Aires (EZE)</option>
                  <option>Córdoba (COR)</option>
                  <option>Rosario (ROS)</option>
                  <option>Mendoza (MDZ)</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Fecha de ida</label>
                <input type="date" class="form-control" />
              </div>
              <div class="mb-3">
                <label class="form-label">Fecha de vuelta</label>
                <input type="date" class="form-control" />
              </div>
              <div class="mb-3">
                <label class="form-label">Pasajeros</label>
                <select class="form-select">
                  <option>1 pasajero</option>
                  <option>2 pasajeros</option>
                  <option>3 pasajeros</option>
                  <option>4 pasajeros</option>
                </select>
              </div>
              <div class="d-grid gap-2">
                <button type="button" class="btn btn-outline-primary">Agregar al carrito</button>
                <button type="button" class="btn btn-search">Comprar ahora</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<footer class="mt-5">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-8">
        <p class="mb-1"><strong>¿Necesitás ayuda?</strong></p>
        <p class="text-muted">Contactanos para recibir asesoramiento personalizado o reservar tu viaje con un agente.</p>
      </div>
      <div class="col-lg-4 text-lg-end">
        <a href="#" class="btn btn-cta-outline">Ver otros destinos</a>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
