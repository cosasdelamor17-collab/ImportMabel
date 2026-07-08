<?php
$pageTitle = 'Contacto — Importaciones Mabel E.I.R.L.';
$pageDesc = 'Contáctanos para cotizaciones de laptops, computadoras y accesorios. Barrios Altos, Lima.';
$ogTitle = 'Contacto — Importaciones Mabel';
$ogDesc = 'Envíanos tu consulta o cotización.';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <p class="page-hero-sub" data-aos="fade-down">Estamos para ayudarte</p>
    <h1 class="page-hero-title" data-aos="fade-up"><span class="gradient-text">Contacto</span></h1>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-5">
        <div class="d-flex flex-column gap-4">
          <div class="card-custom p-3 d-flex gap-3 align-items-start" data-aos="fade-right">
            <div class="contact-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
            </div>
            <div>
              <h3 class="font-display fw-semibold fs-6 mb-1">Dirección</h3>
              <p class="small text-secondary mb-0">Jr. Leticia Nro. 948 Int. 5, Urb. Barrios Altos, Lima</p>
            </div>
          </div>
          <div class="card-custom p-3 d-flex gap-3 align-items-start" data-aos="fade-right" data-aos-delay="100">
            <div class="contact-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
            </div>
            <div>
              <h3 class="font-display fw-semibold fs-6 mb-1">Teléfono</h3>
              <p class="small text-secondary mb-0">+51 981 412 732</p>
            </div>
          </div>
          <div class="card-custom p-3 d-flex gap-3 align-items-start" data-aos="fade-right" data-aos-delay="200">
            <div class="contact-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
            </div>
            <div>
              <h3 class="font-display fw-semibold fs-6 mb-1">Correo</h3>
              <p class="small text-secondary mb-0">ventas@importacionesmabel.pe</p>
            </div>
          </div>
          <div class="card-custom p-3 d-flex gap-3 align-items-start" data-aos="fade-right" data-aos-delay="300">
            <div class="contact-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
            </div>
            <div>
              <h3 class="font-display fw-semibold fs-6 mb-1">Horario</h3>
              <p class="small text-secondary mb-0">Lunes a Sábado · 9:00 a.m. — 8:00 p.m.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7" data-aos="fade-left">
        <div class="card-custom p-4 p-md-5">
          <h2 class="font-display fw-bold fs-3 mb-4">Envíanos un mensaje</h2>
          <form id="contact-form">
            <div class="row g-3">
              <div class="col-sm-6">
                <label class="form-label small fw-medium">Nombre</label>
                <input required class="form-control" placeholder="Tu nombre" />
              </div>
              <div class="col-sm-6">
                <label class="form-label small fw-medium">Teléfono</label>
                <input class="form-control" placeholder="Tu teléfono" />
              </div>
            </div>
            <div class="mt-3">
              <label class="form-label small fw-medium">Correo</label>
              <input type="email" required class="form-control" placeholder="tu@correo.com" />
            </div>
            <div class="mt-3">
              <label class="form-label small fw-medium">Mensaje</label>
              <textarea rows="4" required class="form-control" placeholder="¿En qué podemos ayudarte?"></textarea>
            </div>
            <button type="submit" class="btn btn-brand mt-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="22" y1="2" x2="11" y2="13"/><polygon points="22 2 15 22 11 13 2 9 22 2"/></svg>
              Enviar mensaje
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="form-success" class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="d-flex">
      <div class="toast-body">
        ¡Gracias! Nos pondremos en contacto contigo pronto.
      </div>
      <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"></button>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
