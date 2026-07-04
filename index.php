<?php
$pageTitle = 'Importaciones Mabel E.I.R.L. — Computadoras y Laptops en Lima';
$pageDesc = 'Venta de computadoras, laptops, PC gamer y accesorios en Lima. Marcas originales con garantía. Barrios Altos, Lima.';
$ogTitle = 'Importaciones Mabel E.I.R.L.';
$ogDesc = 'Computadoras y laptops de las mejores marcas en Lima.';
include 'includes/header.php';
?>

<!-- ===== HERO CAROUSEL ===== -->
<section class="carousel">
  <?php
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
  foreach ($slides as $idx => $s):
  ?>
    <div class="carousel-slide <?php echo $idx === 0 ? 'active' : ''; ?>">
      <img src="<?php echo $s['img']; ?>" alt="<?php echo $s['title']; ?>" width="1600" height="900" />
      <div class="carousel-overlay"></div>
      <div class="carousel-content">
        <div class="carousel-text">
          <span class="carousel-badge"><?php echo $s['eyebrow']; ?></span>
          <h1 class="carousel-title"><?php echo $s['title']; ?></h1>
          <p class="carousel-desc"><?php echo $s['desc']; ?></p>
          <div class="carousel-actions">
            <a href="productos.php" class="btn btn-brand">Ver catálogo</a>
            <a href="contacto.php" class="btn btn-outline">Contáctanos</a>
          </div>
        </div>
      </div>
    </div>
  <?php endforeach; ?>

  <button class="carousel-btn carousel-btn-prev" aria-label="Anterior">&#8249;</button>
  <button class="carousel-btn carousel-btn-next" aria-label="Siguiente">&#8250;</button>
  <div class="carousel-dots">
    <?php foreach ($slides as $idx => $s): ?>
      <button class="carousel-dot <?php echo $idx === 0 ? 'active' : ''; ?>" data-index="<?php echo $idx; ?>" aria-label="Ir a slide <?php echo $idx + 1; ?>"></button>
    <?php endforeach; ?>
  </div>
</section>

<!-- ===== FEATURES ===== -->
<section class="py-16 bg-background">
  <div class="container">
    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
        </div>
        <h3 class="font-display font-semibold text-lg mb-1">Garantía oficial</h3>
        <p class="text-sm text-muted-fg">Todos nuestros equipos cuentan con garantía de fábrica.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"/><polygon points="6 9 12 13 18 9 12 17 6 9"/></svg>
        </div>
        <h3 class="font-display font-semibold text-lg mb-1">Envíos a todo Perú</h3>
        <p class="text-sm text-muted-fg">Coordinamos entregas seguras a nivel nacional.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        </div>
        <h3 class="font-display font-semibold text-lg mb-1">Soporte técnico</h3>
        <p class="text-sm text-muted-fg">Asesoría antes y después de tu compra.</p>
      </div>
      <div class="feature-card">
        <div class="feature-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>
        </div>
        <h3 class="font-display font-semibold text-lg mb-1">Marcas originales</h3>
        <p class="text-sm text-muted-fg">HP, Lenovo, Dell, ASUS, Acer, Apple y más.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== HIGHLIGHTS ===== -->
<?php
$highlights = [
  ['img' => 'images/prod-laptop1.jpg', 'name' => 'Ultrabook Pro 14"', 'price' => 'S/ 3,299'],
  ['img' => 'images/prod-laptop2.jpg', 'name' => 'Laptop Gamer RTX', 'price' => 'S/ 5,899'],
  ['img' => 'images/prod-desktop1.jpg', 'name' => 'PC Escritorio Core i5', 'price' => 'S/ 2,499'],
];
$heroOffice = 'images/hero-office.jpg';
?>
<section class="highlight-section" style="background-image: linear-gradient(135deg, rgba(10, 16, 29, 0.92), rgba(10, 16, 29, 0.75)), url(<?php echo $heroOffice; ?>); background-size: cover; background-position: center;">
  <div class="highlight-overlay"></div>
  <div class="container highlight-content">
    <div class="highlight-header">
      <div>
        <p class="text-brand text-sm font-semibold tracking-widest uppercase mb-2">Destacados</p>
        <h2 class="text-4xl md:text-5xl font-display font-bold text-primary-fg">Equipos más vendidos</h2>
      </div>
      <a href="productos.php" class="inline-flex items-center gap-2 font-semibold text-primary-fg hover:text-brand transition-colors">
        Ver todos
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="m12 5 7 7-7 7"/></svg>
      </a>
    </div>
    <div class="highlight-grid">
      <?php foreach ($highlights as $p): ?>
      <div class="bg-card/95 backdrop-blur rounded-2xl overflow-hidden border border-white/20 shadow-card group">
        <div class="aspect-square overflow-hidden bg-muted">
          <img src="<?php echo $p['img']; ?>" alt="<?php echo $p['name']; ?>" loading="lazy" width="800" height="800" class="w-full h-full object-cover group-hover:scale-105 duration-500" />
        </div>
        <div class="p-5 flex items-center justify-between">
          <div>
            <h3 class="font-display font-semibold"><?php echo $p['name']; ?></h3>
            <p class="text-brand font-bold text-lg"><?php echo $p['price']; ?></p>
          </div>
          <a href="productos.php" class="text-sm font-semibold hover:text-brand transition-colors">Detalle</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ===== CTA ===== -->
<section class="cta-section">
  <div class="container" style="max-width: 64rem;">
    <div class="cta-card">
      <h2 class="cta-title">¿Necesitas asesoría para elegir tu equipo?</h2>
      <p class="cta-text">Nuestro equipo te ayuda a encontrar la computadora ideal según tu presupuesto y necesidades.</p>
      <a href="contacto.php" class="btn btn-brand">Escríbenos ahora</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
