<?php
$pageTitle = 'Contacto — Importaciones Mabel E.I.R.L.';
$pageDesc = 'Contáctanos para cotizaciones de laptops, computadoras y accesorios. Barrios Altos, Lima.';
$ogTitle = 'Contacto — Importaciones Mabel';
$ogDesc = 'Envíanos tu consulta o cotización.';
include 'includes/header.php';
?>

<section class="gradient-hero page-hero" style="background: var(--gradient-hero);">
  <div class="container">
    <p class="page-hero-sub" style="color: var(--brand);">Estamos para ayudarte</p>
    <h1 class="page-hero-title">Contacto</h1>
  </div>
</section>

<section class="py-16">
  <div class="container" style="max-width: 72rem;">
    <div class="contact-grid">
      <div class="space-y-6">
        <div class="contact-card">
          <div class="contact-card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <div>
            <h3 class="font-display font-semibold mb-1">Dirección</h3>
            <p class="text-sm text-muted-fg">Jr. Leticia Nro. 948 Int. 5, Urb. Barrios Altos, Lima — Lima — Lima</p>
          </div>
        </div>
        <div class="contact-card">
          <div class="contact-card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </div>
          <div>
            <h3 class="font-display font-semibold mb-1">Teléfono</h3>
            <p class="text-sm text-muted-fg">+51 981 412 732</p>
          </div>
        </div>
        <div class="contact-card">
          <div class="contact-card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
          </div>
          <div>
            <h3 class="font-display font-semibold mb-1">Correo</h3>
            <p class="text-sm text-muted-fg">ventas@importacionesmabel.pe</p>
          </div>
        </div>
        <div class="contact-card">
          <div class="contact-card-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <div>
            <h3 class="font-display font-semibold mb-1">Horario</h3>
            <p class="text-sm text-muted-fg">Lunes a Sábado · 9:00 a.m. — 8:00 p.m.</p>
          </div>
        </div>
      </div>

      <form class="contact-form" id="contact-form">
        <h2 class="text-2xl font-display font-bold mb-2">Envíanos un mensaje</h2>
        <div class="form-row">
          <label class="form-group">
            <span class="form-label">Nombre</span>
            <input required class="form-input" />
          </label>
          <label class="form-group">
            <span class="form-label">Teléfono</span>
            <input class="form-input" />
          </label>
        </div>
        <label class="form-group">
          <span class="form-label">Correo</span>
          <input type="email" required class="form-input" />
        </label>
        <label class="form-group">
          <span class="form-label">Mensaje</span>
          <textarea rows="4" required class="form-input"></textarea>
        </label>
        <button type="submit" class="btn btn-brand">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
          Enviar mensaje
        </button>
        <p class="form-success" id="form-success" style="display:none;">¡Gracias! Nos pondremos en contacto contigo pronto.</p>
      </form>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
