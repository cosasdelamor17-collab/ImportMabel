<?php
$pageTitle = 'Productos — Laptops, PC y Accesorios | Importaciones Mabel';
$pageDesc = 'Catálogo de laptops, computadoras de escritorio, all-in-one y accesorios en Lima.';
$ogTitle = 'Productos — Importaciones Mabel';
$ogDesc = 'Catálogo de equipos de cómputo.';
include 'includes/header.php';

$products = [
  ['img' => 'images/prod-laptop1.jpg', 'name' => 'Ultrabook Pro 14"', 'specs' => 'Intel Core i7 · 16GB RAM · 512GB SSD', 'price' => 'S/ 3,299', 'tag' => 'Laptop'],
  ['img' => 'images/prod-laptop2.jpg', 'name' => 'Laptop Gamer RTX 4060', 'specs' => 'Ryzen 7 · 32GB · RTX 4060 · 1TB SSD', 'price' => 'S/ 5,899', 'tag' => 'Gamer'],
  ['img' => 'images/prod-desktop1.jpg', 'name' => 'PC Escritorio Home', 'specs' => 'Core i5 · 16GB · 512GB SSD · Win 11', 'price' => 'S/ 2,499', 'tag' => 'Desktop'],
  ['img' => 'images/prod-aio.jpg', 'name' => 'All-in-One 24" FHD', 'specs' => 'Core i5 · 8GB · 256GB SSD · Pantalla FHD', 'price' => 'S/ 2,899', 'tag' => 'AIO'],
  ['img' => 'images/Laptop Empresarial 15.jpg', 'name' => 'Laptop Empresarial 15"', 'specs' => 'Core i5 · 8GB · 256GB SSD', 'price' => 'S/ 2,199', 'tag' => 'Laptop'],
  ['img' => 'images/Laptop Creator 16.jpg', 'name' => 'Laptop Creator 16"', 'specs' => 'Core i9 · 32GB · RTX 4070', 'price' => 'S/ 7,499', 'tag' => 'Gamer'],
  ['img' => 'images/PC Workstation Pro.png', 'name' => 'PC Workstation Pro', 'specs' => 'Core i7 · 32GB · 1TB SSD · RTX A2000', 'price' => 'S/ 6,299', 'tag' => 'Desktop'],
  ['img' => 'images/All-in-One 27.png', 'name' => 'All-in-One 27" 2K', 'specs' => 'Core i7 · 16GB · 512GB SSD · 2K', 'price' => 'S/ 4,199', 'tag' => 'AIO'],
  ['img' => 'images/Laptop Convertible 14.jpg', 'name' => 'Laptop Convertible 14"', 'specs' => 'Core i5 · 8GB · 256GB SSD · Touch', 'price' => 'S/ 2,599', 'tag' => 'Laptop'],
  ['img' => 'images/Laptop Gaming Ultra.jpg', 'name' => 'Laptop Gaming Ultra', 'specs' => 'Ryzen 9 · 64GB · RTX 4080', 'price' => 'S/ 9,999', 'tag' => 'Gamer'],
  ['img' => 'images/PC Compacta Mini.jpg', 'name' => 'PC Compacta Mini', 'specs' => 'Core i3 · 8GB · 256GB SSD', 'price' => 'S/ 1,899', 'tag' => 'Desktop'],
  ['img' => 'images/All-in-One Touchscreen.jpg', 'name' => 'All-in-One Touchscreen', 'specs' => 'Core i5 · 16GB · 512GB SSD · Touch', 'price' => 'S/ 3,799', 'tag' => 'AIO'],
  ['img' => 'images/Monitor Curvo 27.JPG', 'name' => 'Monitor Curvo 27"', 'specs' => '144Hz · 1ms · FreeSync', 'price' => 'S/ 1,299', 'tag' => 'Accesorio'],
  ['img' => 'images/Teclado Mecánico RGB.JPG', 'name' => 'Teclado Mecánico RGB', 'specs' => 'Switches Blue · Anti-Ghosting', 'price' => 'S/ 299', 'tag' => 'Accesorio'],
  ['img' => 'images/Mouse Gamer Inalámbrico.JPG', 'name' => 'Mouse Gamer Inalámbrico', 'specs' => '16000 DPI · RGB · 6 Botones', 'price' => 'S/ 199', 'tag' => 'Accesorio'],
  ['img' => 'images/Impresora 3D FDM.jpg', 'name' => 'Impresora 3D FDM', 'specs' => 'PLA/ABS · 220x220x250mm · WiFi', 'price' => 'S/ 1,499', 'tag' => 'Accesorio'],
  ['img' => 'images/Pantalla LED 32.JPG', 'name' => 'Pantalla LED 32"', 'specs' => '4K UHD · HDR10 · Smart TV', 'price' => 'S/ 2,199', 'tag' => 'Accesorio'],
  ['img' => 'images/Webcam HD 1080p.JPG', 'name' => 'Webcam HD 1080p', 'specs' => 'Auto-Focus · Micrófono Integrado', 'price' => 'S/ 149', 'tag' => 'Accesorio'],
];

$categories = ['Todos', 'Laptop', 'Gamer', 'Desktop', 'AIO', 'Accesorio'];
$heroOffice = 'images/hero-office.jpg';
?>

<section class="gradient-hero page-hero" style="background: var(--gradient-hero); color: var(--primary-fg); padding: 5rem 0;">
  <div class="container">
    <p class="page-hero-sub" style="color: var(--brand);">Catálogo</p>
    <h1 class="page-hero-title">Nuestros Productos</h1>
    <p class="page-hero-desc">Laptops, computadoras de escritorio, all-in-one y accesorios de las marcas más reconocidas.</p>
  </div>
</section>

<section class="py-16">
  <div class="container">
    <div class="categories">
      <?php foreach ($categories as $c): ?>
        <button class="cat-btn <?php echo $c === 'Todos' ? 'active' : ''; ?>" data-category="<?php echo $c; ?>"><?php echo $c; ?></button>
      <?php endforeach; ?>
    </div>
    <div class="product-grid">
      <?php foreach ($products as $p): ?>
      <article class="product-card" data-tags="<?php echo $p['tag']; ?>">
        <div class="product-img-wrap">
          <span class="product-tag"><?php echo $p['tag']; ?></span>
          <img src="<?php echo $p['img']; ?>" alt="<?php echo $p['name']; ?>" loading="lazy" width="800" height="800" class="product-img" />
        </div>
        <div class="product-info">
          <h3 class="product-name"><?php echo $p['name']; ?></h3>
          <p class="product-specs"><?php echo $p['specs']; ?></p>
          <div class="product-bottom">
            <span class="product-price text-brand"><?php echo $p['price']; ?></span>
            <button class="product-btn">Cotizar</button>
          </div>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
