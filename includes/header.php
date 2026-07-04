<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?php echo $pageTitle ?? 'Importaciones Mabel E.I.R.L.'; ?></title>
  <meta name="description" content="<?php echo $pageDesc ?? 'Venta de computadoras, laptops, PC gamer y accesorios en Lima. Marcas originales con garantía.'; ?>" />
  <meta property="og:title" content="<?php echo $ogTitle ?? 'Importaciones Mabel E.I.R.L.'; ?>" />
  <meta property="og:description" content="<?php echo $ogDesc ?? 'Venta de computadoras y laptops en Lima con garantía.'; ?>" />
  <meta property="og:type" content="website" />
  <meta name="twitter:card" content="summary_large_image" />
  <link rel="icon" href="/favicon.ico" type="image/x-icon" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@500;600;700&family=Inter:wght@400;500;600&display=swap" />
  <link rel="stylesheet" href="css/styles.css" />
</head>
<body>
<div class="min-h-screen flex flex-col">
  <header class="header">
    <div class="header-inner">
      <a href="index.html" class="logo">
        <div class="logo-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
        </div>
        <div class="logo-text">
          <div class="logo-text-top">IMPORTACIONES MABEL</div>
          <div class="logo-text-bottom">E.I.R.L.</div>
        </div>
      </a>
      <nav class="nav-desktop">
        <a href="index.html">Inicio</a>
        <a href="vision-mision.html">Visión y Misión</a>
        <a href="productos.html">Productos</a>
        <a href="contacto.html">Contacto</a>
        <a href="ubicacion.html">Ubicación</a>
      </nav>
      <button class="menu-btn" id="menu-btn" aria-label="Menú">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="menu-icon"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="close-icon" style="display:none"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
    <div class="mobile-nav" id="mobile-nav">
      <div class="mobile-nav-inner">
        <a href="index.html">Inicio</a>
        <a href="vision-mision.html">Visión y Misión</a>
        <a href="productos.html">Productos</a>
        <a href="contacto.html">Contacto</a>
        <a href="ubicacion.html">Ubicación</a>
      </div>
    </div>
  </header>
  <main class="flex-1">
