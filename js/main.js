// ===== CAROUSEL =====
(function () {
  const carousel = document.querySelector('.carousel');
  if (!carousel) return;

  const slides = carousel.querySelectorAll('.carousel-slide');
  const dots = carousel.querySelectorAll('.carousel-dot');
  const prevBtn = carousel.querySelector('.carousel-btn-prev');
  const nextBtn = carousel.querySelector('.carousel-btn-next');
  let current = 0;
  let timer = null;

  function goTo(index) {
    slides.forEach((s, i) => {
      s.classList.toggle('active', i === index);
    });
    dots.forEach((d, i) => {
      d.classList.toggle('active', i === index);
    });
    current = index;
  }

  function next() {
    goTo((current + 1) % slides.length);
  }

  function prev() {
    goTo((current - 1 + slides.length) % slides.length);
  }

  function startAuto() {
    stopAuto();
    timer = setInterval(next, 5500);
  }

  function stopAuto() {
    if (timer) {
      clearInterval(timer);
      timer = null;
    }
  }

  if (prevBtn) prevBtn.addEventListener('click', function () { prev(); startAuto(); });
  if (nextBtn) nextBtn.addEventListener('click', function () { next(); startAuto(); });
  dots.forEach(function (dot) {
    dot.addEventListener('click', function () {
      goTo(parseInt(this.getAttribute('data-index')));
      startAuto();
    });
  });

  startAuto();
})();

// ===== MOBILE MENU =====
(function () {
  const menuBtn = document.getElementById('menu-btn');
  const mobileNav = document.getElementById('mobile-nav');
  const menuIcon = document.getElementById('menu-icon');
  const closeIcon = document.getElementById('close-icon');

  if (menuBtn && mobileNav) {
    menuBtn.addEventListener('click', function () {
      const isOpen = mobileNav.classList.toggle('open');
      if (menuIcon) menuIcon.style.display = isOpen ? 'none' : 'block';
      if (closeIcon) closeIcon.style.display = isOpen ? 'block' : 'none';
    });

    mobileNav.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        mobileNav.classList.remove('open');
        if (menuIcon) menuIcon.style.display = 'block';
        if (closeIcon) closeIcon.style.display = 'none';
      });
    });
  }
})();

// ===== CONTACT FORM =====
(function () {
  const form = document.getElementById('contact-form');
  if (!form) return;

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    const successMsg = document.getElementById('form-success');
    if (successMsg) {
      successMsg.style.display = 'block';
    }
    form.reset();
  });
})();

// ===== ACTIVE NAV LINK =====
(function () {
  const currentPath = window.location.pathname.split('/').pop() || 'index.php';
  const navLinks = document.querySelectorAll('.nav-desktop a, .mobile-nav-inner a');
  navLinks.forEach(function (link) {
    const href = link.getAttribute('href');
    if (href === currentPath) {
      link.classList.add('active');
    }
  });
})();

// ===== CATEGORY FILTERS =====
(function () {
  const filterBtns = document.querySelectorAll('.cat-btn');
  if (!filterBtns.length) return;

  const products = document.querySelectorAll('.product-card');

  filterBtns.forEach(function (btn) {
    btn.addEventListener('click', function () {
      filterBtns.forEach(function (b) { b.classList.remove('active'); });
      this.classList.add('active');
      const cat = this.getAttribute('data-category');

      products.forEach(function (p) {
        const tags = p.getAttribute('data-tags') || '';
        if (cat === 'Todos' || tags.includes(cat)) {
          p.style.display = '';
        } else {
          p.style.display = 'none';
        }
      });
    });
  });
})();
