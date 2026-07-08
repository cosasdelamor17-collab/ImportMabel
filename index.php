<?php
$pageTitle = 'Importaciones Mabel E.I.R.L. — Computadoras y Laptops en Lima';
$pageDesc = 'Venta de computadoras, laptops, PC gamer y accesorios en Lima. Marcas originales con garantía. Barrios Altos, Lima.';
$ogTitle = 'Importaciones Mabel E.I.R.L.';
$ogDesc = 'Computadoras y laptops de las mejores marcas en Lima.';
include 'includes/header.php';

$slides = [
  [
    'img' => 'images/portada.jpg',
    'eyebrow' => 'Nuevos modelos 2026',
    'title' => 'Laptops de última generación',
    'desc' => 'Ultrabooks, gamer y empresariales con garantía oficial.'
  ],
  [
    'img' => 'images/juego.jpg',
    'eyebrow' => 'PC Gamer',
    'title' => 'Arma tu equipo ideal',
    'desc' => 'Componentes de alto rendimiento para gaming y diseño.'
  ],
  [
    'img' => 'images/sala.jpg',
    'eyebrow' => 'Soluciones para empresas',
    'title' => 'Equipamiento corporativo',
    'desc' => 'Estaciones de trabajo, monitores y accesorios al por mayor.'
  ]
];
?>

<div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel" data-bs-interval="5500">
  <div class="carousel-indicators">
    <?php foreach ($slides as $idx => $s): ?>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="<?php echo $idx; ?>" <?php echo $idx === 0 ? 'class="active"' : ''; ?> aria-label="Slide <?php echo $idx + 1; ?>"></button>
    <?php endforeach; ?>
  </div>
  <div class="carousel-inner">
    <?php foreach ($slides as $idx => $s): ?>
      <div class="carousel-item <?php echo $idx === 0 ? 'active' : ''; ?>">
        <img src="<?php echo $s['img']; ?>" alt="<?php echo $s['title']; ?>" />
        <div class="carousel-overlay"></div>
        <div class="carousel-caption">
          <div class="carousel-caption-inner">
            <span class="carousel-badge" data-aos="fade-down" data-aos-delay="200"><?php echo $s['eyebrow']; ?></span>
            <h1 class="carousel-title" data-aos="fade-up" data-aos-delay="400"><?php echo $s['title']; ?></h1>
            <p class="fs-5 mb-4" style="opacity: 0.8; max-width: 32rem;" data-aos="fade-up" data-aos-delay="600"><?php echo $s['desc']; ?></p>
            <div class="d-flex flex-wrap gap-3" data-aos="fade-up" data-aos-delay="800">
              <a href="productos.html" class="btn btn-brand">Ver catálogo</a>
              <a href="contacto.html" class="btn btn-outline-light-custom">Contáctanos</a>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
    <span aria-hidden="true" style="font-size: 1.5rem;">&#8249;</span>
    <span class="visually-hidden">Anterior</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
    <span aria-hidden="true" style="font-size: 1.5rem;">&#8250;</span>
    <span class="visually-hidden">Siguiente</span>
  </button>
</div>

<section class="py-5" data-aos="fade-up">
  <div class="container">
    <div class="text-center mb-5">
      <div class="section-divider"></div>
      <h2 class="font-display fw-bold display-6">¿Por qué elegirnos?</h2>
      <p class="text-secondary" style="max-width: 32rem; margin: 0 auto;">Más de 10 años brindando soluciones tecnológicas en el Perú.</p>
    </div>
    <div class="row g-4">
      <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
        <div class="card-custom p-4 h-100">
          <div class="feature-icon mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
          </div>
          <h3 class="font-display fw-semibold fs-5 mb-1">Garantía oficial</h3>
          <p class="small text-secondary mb-0">Todos nuestros equipos cuentan con garantía de fábrica.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
        <div class="card-custom p-4 h-100">
          <div class="feature-icon mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"/><polygon points="6 9 12 13 18 9 12 17 6 9"/></svg>
          </div>
          <h3 class="font-display fw-semibold fs-5 mb-1">Envíos a todo Perú</h3>
          <p class="small text-secondary mb-0">Coordinamos entregas seguras a nivel nacional.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
        <div class="card-custom p-4 h-100">
          <div class="feature-icon mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </div>
          <h3 class="font-display fw-semibold fs-5 mb-1">Soporte técnico</h3>
          <p class="small text-secondary mb-0">Asesoría antes y después de tu compra.</p>
        </div>
      </div>
      <div class="col-sm-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
        <div class="card-custom p-4 h-100">
          <div class="feature-icon mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
          </div>
          <h3 class="font-display fw-semibold fs-5 mb-1">Marcas originales</h3>
          <p class="small text-secondary mb-0">HP, Lenovo, Dell, ASUS, Acer, Apple y más.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
$highlights = [
  ['img' => 'images/prod-laptop1.jpg', 'name' => 'Ultrabook Pro 14"', 'price' => 'S/ 3,299'],
  ['img' => 'images/prod-laptop2.jpg', 'name' => 'Laptop Gamer RTX', 'price' => 'S/ 5,899'],
  ['img' => 'images/prod-desktop1.jpg', 'name' => 'PC Escritorio Core i5', 'price' => 'S/ 2,499'],
];
$heroOffice = 'images/hero-office.jpg';
?>

<section class="highlight-section" style="background: linear-gradient(135deg, rgba(10, 16, 29, 0.95), rgba(10, 16, 29, 0.8)), url(<?php echo $heroOffice; ?>) center/cover fixed;">
  <div class="container position-relative" style="z-index: 1;">
    <div class="d-flex flex-wrap align-items-end justify-content-between gap-3 mb-5" data-aos="fade-up">
      <div>
        <p class="text-brand text-uppercase small fw-semibold tracking-widest mb-2">Destacados</p>
        <h2 class="display-5 fw-bold font-display text-white">Equipos más vendidos</h2>
      </div>
      <a href="productos.html" class="text-white text-decoration-none fw-semibold d-inline-flex align-items-center gap-2 hover-opacity">
        Ver todos
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
      </a>
    </div>
    <div class="row g-4">
      <?php foreach ($highlights as $i => $p): ?>
        <div class="col-md-4" data-aos="fade-up" data-aos-delay="<?php echo $i * 150; ?>">
          <div class="card bg-white bg-opacity-95 border-0 rounded-4 overflow-hidden shadow-sm h-100">
            <div class="overflow-hidden" style="aspect-ratio: 1;">
              <img src="<?php echo $p['img']; ?>" alt="<?php echo $p['name']; ?>" loading="lazy" class="w-100 h-100 object-fit-cover transition-scale" />
            </div>
            <div class="card-body d-flex align-items-center justify-content-between">
              <div>
                <h3 class="font-display fw-semibold fs-6 mb-0"><?php echo $p['name']; ?></h3>
                <span class="text-brand fw-bold fs-5"><?php echo $p['price']; ?></span>
              </div>
              <a href="productos.html" class="btn btn-sm btn-outline-secondary rounded-pill">Detalle</a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="py-5" data-aos="fade-up">
  <div class="container" style="max-width: 64rem;">
    <div class="cta-card">
      <h2 class="display-6 fw-bold font-display text-white mb-3" data-aos="fade-up">¿Necesitas asesoría para elegir tu equipo?</h2>
      <p class="text-white mb-4" style="opacity: 0.8; max-width: 42rem; margin: 0 auto;" data-aos="fade-up" data-aos-delay="100">Nuestro equipo te ayuda a encontrar la computadora ideal según tu presupuesto y necesidades.</p>
      <a href="contacto.html" class="btn btn-brand btn-lg" data-aos="fade-up" data-aos-delay="200">Escríbenos ahora</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
