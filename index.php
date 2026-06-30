<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Nómada — Viajes que transforman</title>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet"/>

  <link rel="stylesheet" href="style.css"/>
</head>
<body>

<!-- ── NAVBAR ── -->
<nav class="navbar-nomada navbar navbar-expand-lg px-3 px-lg-5">
  <div class="container-fluid">
    <a class="nav-logo" href="#">Nómada<span class="dot">.</span></a>
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navMenu">
      <ul class="navbar-nav gap-0 mx-auto">
        <li class="nav-item"><a class="nav-link-item nav-link" href="#">Inicio</a></li>
        <li class="nav-item"><a class="nav-link-item nav-link" href="#destinos">Destinos</a></li>
        <li class="nav-item"><a class="nav-link-item nav-link" href="#paquetes">Paquetes</a></li>
        <li class="nav-item"><a class="nav-link-item nav-link" href="#contacto">Contacto</a></li>
      </ul>
      <a href="#" class="btn btn-login-nav mt-2 mt-lg-0">Iniciar sesión</a>
    </div>
  </div>
</nav>

<!-- ── HERO ── -->
<section class="hero">
  <div class="hero-photo"></div>
  <div class="hero-overlay"></div>
  <div class="hero-vignette"></div>

  <div class="container hero-content py-5">
    <div class="row align-items-center g-5 g-xl-4">

      <!-- Left: copy + stats -->
      <div class="col-lg-5">
        <div class="hero-eyebrow">
          <i class="bi bi-star-fill" style="font-size:.65rem"></i>
          Agencia certificada IATA
        </div>
        <h1 class="hero-title">
          Viajá a donde<br>siempre <em>soñaste</em>
        </h1>
        <p class="hero-sub">
          Armamos tu viaje a medida con atención personalizada, precios reales y 12 años de experiencia.
        </p>
        <div class="hero-stats">
          <div>
            <div class="stat-num">+2.400</div>
            <div class="stat-lbl">Destinos</div>
          </div>
          <div class="stat-sep"></div>
          <div>
            <div class="stat-num">98%</div>
            <div class="stat-lbl">Satisfacción</div>
          </div>
          <div class="stat-sep"></div>
          <div>
            <div class="stat-num">12 años</div>
            <div class="stat-lbl">En el mercado</div>
          </div>
        </div>
      </div>

      <!-- Right: search -->
      <div class="col-lg-7 search-wrap">
        <div class="search-box">
          <p style="font-size:.75rem; font-weight:700; letter-spacing:.09em; text-transform:uppercase; color:var(--text-light); margin-bottom:1.25rem;">Buscá tu próximo viaje</p>
          <form class="row g-3 align-items-end" method="GET" action="buscar.php">
            <div class="col-6 col-md-4">
              <label class="form-label">Origen</label>
              <select class="form-select search-input" name="origen">
                <option value="">Ciudad de origen</option>
                <option value="Buenos Aires (EZE)">Buenos Aires (EZE)</option>
                <option value="Córdoba (COR)">Córdoba (COR)</option>
                <option value="Rosario (ROS)">Rosario (ROS)</option>
                <option value="Mendoza (MDZ)">Mendoza (MDZ)</option>
                <option value="Bariloche (BRC)">Bariloche (BRC)</option>
              </select>
            </div>
            <div class="col-6 col-md-4">
              <label class="form-label">Destino</label>
              <select class="form-select search-input" name="destino" required>
                <option value="">¿A dónde vas?</option>
                <option value="cancun">Cancún, México</option>
                <option value="roma">Roma, Italia</option>
                <option value="miami">Miami, EEUU</option>
                <option value="paris">París, Francia</option>
                <option value="tokio">Tokio, Japón</option>
                <option value="dubai">Dubái, EAU</option>
                <option value="maceio">Maceio, Brasil</option>
                <option value="munich">Munich, Alemania</option>
              </select>
            </div>
            <div class="col-6 col-md-4">
              <label class="form-label">Fecha de ida</label>
              <input type="date" class="form-control search-input" name="fecha_ida"/>
            </div>
            <div class="col-6 col-md-4">
              <label class="form-label">Fecha de vuelta</label>
              <input type="date" class="form-control search-input" name="fecha_vuelta"/>
            </div>
            <div class="col-6 col-md-4">
              <label class="form-label">Pasajeros</label>
              <select class="form-select search-input" name="pasajeros">
                <option value="1">1 pasajero</option>
                <option value="2">2 pasajeros</option>
                <option value="3">3 pasajeros</option>
                <option value="4">4 pasajeros</option>
                <option value="5">5+ pasajeros</option>
              </select>
            </div>
            <div class="col-6 col-md-4">
              <button type="submit" class="btn btn-search">
                <i class="bi bi-search"></i> Buscar viaje
              </button>
            </div>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ── TRUST BAR ── -->
<div class="trust-bar">
  <div class="container">
    <div class="row g-3 justify-content-center">
      <div class="col-6 col-md-3 d-flex justify-content-center">
        <div class="trust-item">
          <div class="trust-icon-wrap"><i class="bi bi-shield-check"></i></div>
          <div>
            <div class="trust-title">Pago seguro</div>
            <div class="trust-desc">Encriptación SSL</div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 d-flex justify-content-center">
        <div class="trust-item">
          <div class="trust-icon-wrap"><i class="bi bi-headset"></i></div>
          <div>
            <div class="trust-title">Soporte 24/7</div>
            <div class="trust-desc">En tu idioma</div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 d-flex justify-content-center">
        <div class="trust-item">
          <div class="trust-icon-wrap"><i class="bi bi-arrow-repeat"></i></div>
          <div>
            <div class="trust-title">Cancelación flex</div>
            <div class="trust-desc">Hasta 48 hs antes</div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-3 d-flex justify-content-center">
        <div class="trust-item">
          <div class="trust-icon-wrap"><i class="bi bi-award"></i></div>
          <div>
            <div class="trust-title">Mejor precio</div>
            <div class="trust-desc">Garantizado</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ── DESTINOS ── -->
<section class="dest-section" id="destinos">
  <div class="container">
    <div class="row align-items-end mb-4">
      <div class="col-lg-6 fade-up">
        <span class="section-label">Destinos destacados</span>
        <h2 class="section-title">Los más elegidos<br>este invierno</h2>
        <p class="section-sub">Seleccionados por nuestros asesores para que solo te preocupes por disfrutar.</p>
      </div>
      <div class="col-lg-6 text-lg-end mt-3 mt-lg-0 fade-up d2">
        <a href="#" class="btn-ver-mas" style="font-size:.85rem; padding:.5rem 1.25rem;">Ver todos los destinos <i class="bi bi-arrow-right ms-1"></i></a>
      </div>
    </div>
    <div class="row g-4 mt-1">
      <div class="col-md-6 col-lg-4 fade-up d1">
        <div class="dest-card">
          <div class="dest-img-wrap">
            <img src="img/cancunimg.jpg" class="dest-card-img" alt="Cancún" loading="lazy"/>
            <span class="dest-region-badge">Caribe</span>
          </div>
          <div class="dest-card-body">
            <div class="dest-card-name">Cancún, México</div>
            <div class="dest-card-desc">Aguas turquesas, ruinas mayas y la mejor vida nocturna del Caribe mexicano.</div>
            <div class="dest-card-footer">
              <div><div class="dest-from">Desde</div><div class="dest-amount">$850 <small>USD</small></div></div>
              <a class="btn-ver-mas" href="destino_cancun.php">Ver más</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 fade-up d2">
        <div class="dest-card">
          <div class="dest-img-wrap">
            <img src="img/parisimg.jpg" class="dest-card-img" alt="París" loading="lazy"/>
            <span class="dest-region-badge">Europa</span>
          </div>
          <div class="dest-card-body">
            <div class="dest-card-name">París, Francia</div>
            <div class="dest-card-desc">Arte, gastronomía y arquitectura en la ciudad más romántica del mundo.</div>
            <div class="dest-card-footer">
              <div><div class="dest-from">Desde</div><div class="dest-amount">$1.420 <small>USD</small></div></div>
              <a class="btn-ver-mas" href="destino_paris.php">Ver más</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 fade-up d3">
        <div class="dest-card">
          <div class="dest-img-wrap">
            <img src="img/dubaiimg.jpg" class="dest-card-img" alt="Dubái" loading="lazy"/>
            <span class="dest-region-badge">Middle East</span>
          </div>
          <div class="dest-card-body">
            <div class="dest-card-name">Dubái, EAU</div>
            <div class="dest-card-desc">Rascacielos, lujo y desierto dorado en la ciudad del futuro.</div>
            <div class="dest-card-footer">
              <div><div class="dest-from">Desde</div><div class="dest-amount">$1.680 <small>USD</small></div></div>
              <a class="btn-ver-mas" href="destino.php">Ver más</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 fade-up d1">
        <div class="dest-card">
          <div class="dest-img-wrap">
            <img src="img/tokioimg.jpg" class="dest-card-img" alt="Tokio" loading="lazy"/>
            <span class="dest-region-badge">Asia</span>
          </div>
          <div class="dest-card-body">
            <div class="dest-card-name">Tokio, Japón</div>
            <div class="dest-card-desc">Tradición y vanguardia en la megalópolis más fascinante del planeta.</div>
            <div class="dest-card-footer">
              <div><div class="dest-from">Desde</div><div class="dest-amount">$2.100 <small>USD</small></div></div>
              <a class="btn-ver-mas" href="destino.php">Ver más</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 fade-up d2">
        <div class="dest-card">
          <div class="dest-img-wrap">
            <img src="img/brasilimg.jpg" class="dest-card-img" alt="Maceio" loading="lazy"/>
            <span class="dest-region-badge">Sudamérica</span>
          </div>
          <div class="dest-card-body">
            <div class="dest-card-name">Maceio, Brasil</div>
            <div class="dest-card-desc">Playas de arena blanca, selva tropical y cultura vibrante en la costa brasileña.</div>
            <div class="dest-card-footer">
              <div><div class="dest-from">Desde</div><div class="dest-amount">$890 <small>USD</small></div></div>
              <a class="btn-ver-mas" href="destino.php">Ver más</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 fade-up d3">
        <div class="dest-card">
          <div class="dest-img-wrap">
            <img src="img/munichimg.jpg" class="dest-card-img" alt="Munich" loading="lazy"/>
            <span class="dest-region-badge">Europa</span>
          </div>
          <div class="dest-card-body">
            <div class="dest-card-name">Munich, Alemania</div>
            <div class="dest-card-desc">Historia, cultura y naturaleza en la ciudad de Baviera.</div>
            <div class="dest-card-footer">
              <div><div class="dest-from">Desde</div><div class="dest-amount">$2.180 <small>USD</small></div></div>
              <a class="btn-ver-mas" href="#">Ver más</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── EXPERIENCES ── -->
<section class="exp-section" id="paquetes">
  <div class="container">
    <div class="row mb-3">
      <div class="col-lg-7 fade-up">
        <span class="section-label">Experiencias</span>
        <h2 class="section-title">Elegí tu tipo<br>de aventura</h2>
        <p class="section-sub mb-3">Desde playas paradisíacas hasta cumbres andinas. Hay un viaje para cada forma de explorar.</p>
      </div>
    </div>
    <div class="exp-tabs fade-up" id="experienceTabs">
      <div class="exp-tab active" data-category="Playa"><i class="bi bi-water"></i> Playa</div>
      <div class="exp-tab" data-category="Montaña"><i class="bi bi-snow2"></i> Montaña</div>
      <div class="exp-tab" data-category="Aventura"><i class="bi bi-lightning-charge"></i> Aventura</div>
      <div class="exp-tab" data-category="Gastronomía"><i class="bi bi-egg-fried"></i> Gastronomía</div>
      <div class="exp-tab" data-category="Familiar"><i class="bi bi-people"></i> Familiar</div>
    </div>
    <div class="exp-grid fade-up" id="expGrid"></div>
  </div>
</section>

<!-- ── OFFERS ── -->
<section class="offers-section">
  <div class="container">
    <div class="row align-items-end mb-4">
      <div class="col-lg-6 fade-up">
        <span class="section-label">Ofertas especiales</span>
        <h2 class="section-title">Precio de hoy,<br>viaje de siempre</h2>
        <p class="section-sub">Descuentos exclusivos por tiempo limitado. Reservá ahora y pagá después.</p>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4 fade-up d1">
        <div class="offer-card">
          <div class="offer-card-top">
            <div class="offer-pill">−35% OFF</div>
            <div class="offer-name">Miami + Crucero Caribe</div>
          </div>
          <div class="offer-card-body">
            <p class="offer-desc">7 noches en Miami Beach más 7 noches de crucero por el Caribe con todo incluido.</p>
            <div class="offer-meta">
              <div class="offer-meta-item"><i class="bi bi-calendar3"></i> 14 noches</div>
              <div class="offer-meta-item"><i class="bi bi-airplane"></i> Vuelos incl.</div>
              <div class="offer-meta-item"><i class="bi bi-cup-hot"></i> Todo incluido</div>
            </div>
            <div class="offer-price-row">
              <div>
                <div class="offer-old">USD 3.800</div>
                <div class="offer-new">2.470 <small>USD</small></div>
              </div>
              <a class="btn btn-reservar" href="#">Reservar</a>
            </div>
            <div class="countdown">
              <div class="cdblock"><div class="cdnum" id="d1">02</div><div class="cdlbl">días</div></div>
              <div class="cdblock"><div class="cdnum" id="h1">14</div><div class="cdlbl">hs</div></div>
              <div class="cdblock"><div class="cdnum" id="m1">38</div><div class="cdlbl">min</div></div>
              <div class="cdblock"><div class="cdnum" id="s1">00</div><div class="cdlbl">seg</div></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 fade-up d2">
        <div class="offer-card">
          <div class="offer-card-top">
            <div class="offer-pill">−28% OFF</div>
            <div class="offer-name">Europa Clásica</div>
          </div>
          <div class="offer-card-body">
            <p class="offer-desc">Madrid, Barcelona, París y Roma en 16 días con guía en español y hotel 4 estrellas.</p>
            <div class="offer-meta">
              <div class="offer-meta-item"><i class="bi bi-calendar3"></i> 16 noches</div>
              <div class="offer-meta-item"><i class="bi bi-translate"></i> Guía español</div>
              <div class="offer-meta-item"><i class="bi bi-star"></i> Hotel 4★</div>
            </div>
            <div class="offer-price-row">
              <div>
                <div class="offer-old">USD 4.200</div>
                <div class="offer-new">3.020 <small>USD</small></div>
              </div>
              <a class="btn btn-reservar" href="#">Reservar</a>
            </div>
            <div class="countdown">
              <div class="cdblock"><div class="cdnum">05</div><div class="cdlbl">días</div></div>
              <div class="cdblock"><div class="cdnum">08</div><div class="cdlbl">hs</div></div>
              <div class="cdblock"><div class="cdnum">22</div><div class="cdlbl">min</div></div>
              <div class="cdblock"><div class="cdnum" id="s2">00</div><div class="cdlbl">seg</div></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 fade-up d3">
        <div class="offer-card">
          <div class="offer-card-top">
            <div class="offer-pill">−20% OFF</div>
            <div class="offer-name">Aventura Patagónica</div>
          </div>
          <div class="offer-card-body">
            <p class="offer-desc">Torres del Paine, Perito Moreno y los lagos del sur en 10 días de naturaleza pura.</p>
            <div class="offer-meta">
              <div class="offer-meta-item"><i class="bi bi-calendar3"></i> 10 noches</div>
              <div class="offer-meta-item"><i class="bi bi-compass"></i> Trek guiado</div>
              <div class="offer-meta-item"><i class="bi bi-camera"></i> Fotos incl.</div>
            </div>
            <div class="offer-price-row">
              <div>
                <div class="offer-old">USD 1.870</div>
                <div class="offer-new">1.495 <small>USD</small></div>
              </div>
              <a class="btn btn-reservar" href="#">Reservar</a>
            </div>
            <div class="countdown">
              <div class="cdblock"><div class="cdnum">01</div><div class="cdlbl">días</div></div>
              <div class="cdblock"><div class="cdnum">03</div><div class="cdlbl">hs</div></div>
              <div class="cdblock"><div class="cdnum">50</div><div class="cdlbl">min</div></div>
              <div class="cdblock"><div class="cdnum" id="s3">00</div><div class="cdlbl">seg</div></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── CTA BAND ── -->
<div class="cta-band fade-up">
  <div class="container">
    <h2>¿No encontrás lo que buscás?</h2>
    <p>Hablá con uno de nuestros asesores y armamos tu viaje a medida, sin costo adicional.</p>
    <div class="d-flex flex-wrap justify-content-center gap-2">
      <a href="#" class="btn btn-cta-white"><i class="bi bi-whatsapp me-2"></i>Consultar por WhatsApp</a>
      <a href="#" class="btn btn-cta-outline"><i class="bi bi-telephone me-2"></i>Llamanos al (011) 4800-1234</a>
    </div>
  </div>
</div>

<!-- ── FOOTER ── -->
<footer id="contacto">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-3 col-md-6">
        <a class="footer-logo" href="#">Nómada<span class="dot">.</span></a>
        <p class="footer-tagline">Transformamos rutas en recuerdos. Viajes que te cambian desde adentro.</p>
        <div class="footer-socials">
          <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
          <a href="#" class="social-icon"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 col-6">
        <div class="footer-col-title">Destinos</div>
        <ul class="footer-list">
          <li><a href="#">Caribe</a></li>
          <li><a href="#">Europa</a></li>
          <li><a href="#">Asia</a></li>
          <li><a href="#">EEUU y Canadá</a></li>
          <li><a href="#">Sudamérica</a></li>
          <li><a href="#">Oceanía</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6 col-6">
        <div class="footer-col-title">Servicios</div>
        <ul class="footer-list">
          <li><a href="#">Paquetes</a></li>
          <li><a href="#">Vuelos</a></li>
          <li><a href="#">Hoteles</a></li>
          <li><a href="#">Traslados</a></li>
          <li><a href="#">Seguros de viaje</a></li>
          <li><a href="#">Cruceros</a></li>
        </ul>
      </div>
      <div class="col-lg-2 col-md-6 col-6">
        <div class="footer-col-title">Empresa</div>
        <ul class="footer-list">
          <li><a href="#">Sobre Nómada</a></li>
          <li><a href="#">Trabajá con nosotros</a></li>
          <li><a href="#">Blog de viajes</a></li>
          <li><a href="#">Prensa</a></li>
        </ul>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="footer-col-title">Contacto</div>
        <div class="footer-contact-row">
          <i class="bi bi-geo-alt-fill"></i>
          <span>Av. Corrientes 1234, Piso 8<br>CABA, Argentina</span>
        </div>
        <div class="footer-contact-row">
          <i class="bi bi-telephone-fill"></i>
          <span>+54 11 4800-1234</span>
        </div>
        <div class="footer-contact-row">
          <i class="bi bi-envelope-fill"></i>
          <span>hola@nomada.com.ar</span>
        </div>
        <div class="footer-contact-row">
          <i class="bi bi-whatsapp"></i>
          <span>+54 9 11 3456-7890</span>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <span>© 2025 Nómada Viajes S.A. Legajo IATA 12-3 45678/0</span>
      <div class="d-flex gap-3 flex-wrap justify-content-center">
        <a href="#">Términos y condiciones</a>
        <a href="#">Privacidad</a>
        <a href="#">Cookies</a>
      </div>
    </div>
  </div>
</footer>
// java de los diseños y animaciones:
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Navbar scroll
  const nav = document.querySelector('.navbar-nomada');
  window.addEventListener('scroll', () => {
    nav.classList.toggle('scrolled', window.scrollY > 48);
  });

  // Fade-up on scroll
  const io = new IntersectionObserver(entries => {
    entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); io.unobserve(e.target); } });
  }, { threshold: 0.1 });
  document.querySelectorAll('.fade-up').forEach(el => io.observe(el));

  const experiences = [
    {
      category: 'Playa',
      title: 'Paraísos caribeños todo incluido',
      subtitle: 'Resorts frente al mar con playa privada y experiencias premium.',
      image: "img/playa1img.jpg",
      link: 'detalle-playa.html',
      size: 'main'
    },
    {
      category: 'Playa',
      title: 'Costa Atlántica Argentina',
      subtitle: 'Surf, familia y descanso en costas imperdibles.',
      image: "img/playa2img.jpg",
      link: 'detalle-playa.html',
      size: 'sm'
    },
    {
      category: 'Playa',
      title: 'Islas del Caribe',
      subtitle: 'Buceo, arena blanca y puestas de sol inolvidables.',
      image: "img/playa3img.jpg",
      link: 'detalle-playa.html',
      size: 'sm'
    },
    {
      category: 'Montaña',
      title: 'Visita los Andes',
      subtitle: 'Senderos, lagunas y cumbres para los amantes de la altura.',
      image: "img/montanas1img.jpg",
      link: 'detalle-montana.html',
      size: 'main'
    },
    {
      category: 'Montaña',
      title: 'Refugios de montaña',
      subtitle: 'Alojamientos con vistas épicas y caminatas al amanecer.',
      image: "img/montanas2img.jpg",
      link: 'detalle-montana.html',
      size: 'sm'
    },
    {
      category: 'Montaña',
      title: 'Cumbres patagónicas',
      subtitle: 'Rutas de altura y paisajes glaciales para explorar.',
      image: "img/montanas3img.jpg",
      link: 'detalle-montana.html',
      size: 'sm'
    },
    {
      category: 'Aventura',
      title: 'Safari extremo',
      subtitle: 'Rutas off-road, rafting y adrenalina en cada paso.',
      image: "img/aventura1img.jpg",
      link: 'detalle-aventura.html',
      size: 'main'
    },
    {
      category: 'Aventura',
      title: 'Rafting y ríos salvajes',
      subtitle: 'Descensos intensos y campamentos junto al agua.',
      image: "img/aventuras2img.jpg",
      link: 'detalle-aventura.html',
      size: 'sm'
    },
    {
      category: 'Aventura',
      title: 'Expedición 4x4',
      subtitle: 'Terrenos extremos y rutas fuera de lo común.',
      image: "img/aventuras3img.jpg",
      link: 'detalle-aventura.html',
      size: 'sm'
    },
    {
      category: 'Gastronomía',
      title: 'Tours culinarios en Europa',
      subtitle: 'Sabores locales, mercados y cenas gourmet.',
      image: 'https://images.unsplash.com/photo-1498654896293-37aacf113fd9?w=900&q=80',
      link: 'detalle-gastronomia.html',
      size: 'main'
    },
    {
      category: 'Gastronomía',
      title: 'Bares y bodegas',
      subtitle: 'Degustaciones y experiencias de vinos exclusivos.',
      image: 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=500&q=80',
      link: 'detalle-gastronomia.html',
      size: 'sm'
    },
    {
      category: 'Gastronomía',
      title: 'Cocina local auténtica',
      subtitle: 'Clases y rutas de sabores tradicionales.',
      image: 'https://images.unsplash.com/photo-1511690743698-d9d85f2fbf38?w=500&q=80',
      link: 'detalle-gastronomia.html',
      size: 'sm'
    },
    {
      category: 'Familiar',
      title: 'Vacaciones en familia',
      subtitle: 'Planes para todos los gustos: parques, playa y diversión.',
      image: "img/familiar1.jpg",
      link: 'detalle-familiar.html',
      size: 'main'
    },
    {
      category: 'Familiar',
      title: 'Parques temáticos',
      subtitle: 'Diversión, shows y experiencias para grandes y chicos.',
      image: "img/familiar2.jpg",
      link: 'detalle-familiar.html',
      size: 'sm'
    },
    {
      category: 'Familiar',
      title: 'Estadías a medida',
      subtitle: 'Alojamientos familiares con actividades seguras.',
      image: "img/familiar3.jpg",
      link: 'detalle-familiar.html',
      size: 'sm'
    }
  ];
//diseños de la interfaz: 
  const expGrid = document.getElementById('expGrid');
  const expTabs = document.querySelectorAll('.exp-tab');

  function preloadExperienceImages() {
    experiences.forEach(item => {
      const img = new Image();
      img.src = item.image;
    });
  }

  function renderExperienceCards(category) {
    const items = experiences.filter(item => item.category === category);
    if (!items.length) {
      expGrid.innerHTML = '<div class="exp-card exp-main" style="display:block;"><div class="exp-info"><div class="exp-cat">Sin resultados</div><div class="exp-name">No hay experiencias disponibles para esta categoría.</div></div></div>';
      return;
    }

    expGrid.classList.add('fade-switch');
    setTimeout(() => {
      expGrid.innerHTML = items.map((item, index) => {
        const cardClass = item.size === 'main' ? 'exp-card exp-main' : 'exp-card exp-sm';
        const loadingType = index < 2 ? 'eager' : 'lazy';
        return `
          <a href="${item.link}" class="${cardClass}" style="display:block; text-decoration:none; color:inherit;">
            <img src="${item.image}" alt="${item.category}" loading="${loadingType}" />
            <div class="exp-grad"></div>
            <div class="exp-info">
              <div class="exp-cat">${item.category}</div>
              <div class="exp-name">${item.title}</div>
            </div>
          </a>
        `;
      }).join('');

      const cards = expGrid.querySelectorAll('.exp-card');
      cards.forEach((card, index) => {
        const img = card.querySelector('img');
        if (img.complete) {
          img.classList.add('loaded');
        } else {
          img.addEventListener('load', () => img.classList.add('loaded'), { once: true });
        }
        card.style.transitionDelay = `${index * 60}ms`;
      });

      requestAnimationFrame(() => {
        cards.forEach(card => card.classList.add('visible-card'));
        expGrid.classList.remove('fade-switch');
      });
    }, 140);
  }

  expTabs.forEach(tab => {
    tab.addEventListener('click', () => {
      expTabs.forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
      renderExperienceCards(tab.dataset.category);
    });
  });

  preloadExperienceImages();
  renderExperienceCards('Playa');

  // Countdown (first offer)
  const endTime = new Date(Date.now() + (2*86400 + 14*3600 + 38*60) * 1000);
  function tick() {
    const diff = Math.max(0, endTime - Date.now());
    const pad = n => String(n).padStart(2,'0');
    document.getElementById('d1').textContent = pad(Math.floor(diff/86400000));
    document.getElementById('h1').textContent = pad(Math.floor((diff%86400000)/3600000));
    document.getElementById('m1').textContent = pad(Math.floor((diff%3600000)/60000));
    const s = Math.floor((diff%60000)/1000);
    document.getElementById('s1').textContent = pad(s);
    document.getElementById('s2').textContent = pad((s+7)%60);
    document.getElementById('s3').textContent = pad((s+13)%60);
  }
  tick(); setInterval(tick, 1000);
</script>
</body>
</html>
