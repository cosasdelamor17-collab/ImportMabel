<?php
$pageTitle = 'Ubicación — Importaciones Mabel E.I.R.L.';
$pageDesc = 'Visítanos en Jr. Leticia Nro. 948 Int. 5, Urb. Barrios Altos, Lima.';
$ogTitle = 'Ubicación — Importaciones Mabel';
$ogDesc = 'Encuentra nuestra tienda en Barrios Altos, Lima.';
include 'includes/header.php';

$address = 'Jr. Leticia 948, Barrios Altos, Lima, Perú';
$mapsQuery = urlencode($address);
?>

<section class="gradient-hero page-hero" style="background: var(--gradient-hero);">
  <div class="container">
    <p class="page-hero-sub" style="color: var(--brand);">Visítanos</p>
    <h1 class="page-hero-title">Nuestra Ubicación</h1>
    <p class="page-hero-desc">Encuéntranos en el corazón de Barrios Altos, en pleno centro histórico de Lima.</p>
  </div>
</section>

<section class="py-16">
  <div class="container">
    <div class="location-grid">
      <div class="space-y-6">
        <div class="location-card">
          <div class="location-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <h3 class="font-display font-bold text-lg mb-2">Dirección</h3>
          <p class="text-sm text-muted-fg leading-relaxed">
            Jr. Leticia Nro. 948 Int. 5<br />
            Urb. Barrios Altos<br />
            Lima — Lima — Lima<br />
            Perú
          </p>
        </div>
        <div class="location-card">
          <div class="location-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <h3 class="font-display font-bold text-lg mb-2">Horario de atención</h3>
          <p class="text-sm text-muted-fg">
            Lunes a Viernes: 9:00 a.m. — 8:00 p.m.<br />
            Sábados: 9:00 a.m. — 6:00 p.m.<br />
            Domingos: Cerrado
          </p>
        </div>
        <a href="https://www.google.com/maps/dir/?api=1&destination=<?php echo $mapsQuery; ?>" target="_blank" rel="noopener noreferrer" class="location-btn">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="3 11 22 2 13 21 11 13 3 11"/></svg>
          Cómo llegar
        </a>
      </div>
      <div class="location-map">
        <iframe
          title="Ubicación Importaciones Mabel"
          src="https://www.google.com/maps?q=<?php echo $mapsQuery; ?>&output=embed"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          allowfullscreen>
        </iframe>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
