<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pavitra Mitti Plant Nursery in Basirhat | Best Nursery Near Barasat & Kolkata</title>
    <meta name="description" content="Pavitra Mitti is a leading plant nursery in Basirhat near Barasat and Kolkata, offering a wide variety of healthy indoor and outdoor plants, fruit plants, flowering plants, and garden essentials at affordable prices.">
   
    <?php include 'common/header-script.php'; ?>
    <style>
 
/* ── HERO ─────────────────────────────────────────────────── */
.cxp-hero {
  position: relative;
  padding: 72px 0 60px;
  overflow: hidden;
  background: var(--g1);
}
 
.cxp-hero-bg {
  position: absolute;
  inset: 0;
  background:
    radial-gradient(ellipse at 0% 100%, rgba(156,204,101,0.18) 0%, transparent 55%),
    radial-gradient(ellipse at 100% 0%, rgba(74,124,89,0.22) 0%, transparent 50%);
  pointer-events: none;
}
 
/* subtle dot grid */
.cxp-hero-bg::after {
  content: '';
  position: absolute;
  inset: 0;
  background-image: radial-gradient(rgba(255,255,255,0.06) 1px, transparent 1px);
  background-size: 28px 28px;
}
 
.cxp-hero-inner {
  position: relative;
  text-align: center;
}
 
.cxp-eyebrow {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  font-family: 'DM Sans', sans-serif;
  font-size: 0.72rem;
  font-weight: 500;
  letter-spacing: 0.2em;
  text-transform: uppercase;
  color: var(--accent);
  background: rgba(156,204,101,0.12);
  border: 1px solid rgba(156,204,101,0.25);
  padding: 5px 16px;
  border-radius: 4px;
  margin-bottom: 16px;
}
 
.cxp-hero-title {
  font-family: 'Playfair Display', Georgia, serif;
  font-size: clamp(2.4rem, 6vw, 4rem);
  font-weight: 600;
  color: #fff;
  margin-bottom: 10px;
  line-height: 1.1;
}
 
.cxp-hero-sub {
  font-family: 'DM Sans', sans-serif;
  color: rgba(255,255,255,0.62);
  font-size: 1rem;
  font-weight: 300;
  margin-bottom: 32px;
}
 
/* Search */
.cxp-search-wrap {
  position: relative;
  max-width: 480px;
  margin: 0 auto;
}
 
.cxp-search-icon {
  position: absolute;
  left: 16px;
  top: 50%;
  transform: translateY(-50%);
  color: rgba(255,255,255,0.45);
  font-size: 1rem;
  pointer-events: none;
}
 
.cxp-search-input {
  width: 100%;
  background: rgba(255,255,255,0.1);
  border: 1.5px solid rgba(255,255,255,0.18);
  border-radius: 10px;
  padding: 13px 44px 13px 44px;
  font-family: 'DM Sans', sans-serif;
  font-size: 0.95rem;
  color: #fff;
  outline: none;
  transition: background 0.2s, border-color 0.2s;
  backdrop-filter: blur(6px);
}
 
.cxp-search-input::placeholder { color: rgba(255,255,255,0.4); }
 
.cxp-search-input:focus {
  background: rgba(255,255,255,0.15);
  border-color: var(--accent);
}
 
.cxp-search-clear {
  position: absolute;
  right: 12px;
  top: 50%;
  transform: translateY(-50%);
  background: none;
  border: none;
  color: rgba(255,255,255,0.5);
  font-size: 0.85rem;
  cursor: pointer;
  padding: 4px;
  line-height: 1;
  transition: color 0.2s;
}
.cxp-search-clear:hover { color: #fff; }
 
/* ── FILTER BAR ───────────────────────────────────────────── */
.cxp-filter-bar {
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  gap: 10px;
}
 
.cxp-filter-label {
  font-family: 'DM Sans', sans-serif;
  font-size: 0.78rem;
  font-weight: 500;
  color: var(--text2);
  display: flex;
  align-items: center;
  gap: 5px;
  white-space: nowrap;
}
 
.cxp-pills {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
}
 
.cxp-pill {
  font-family: 'DM Sans', sans-serif;
  font-size: 0.78rem;
  font-weight: 500;
  color: var(--text2);
  background: var(--white);
  border: 1.5px solid var(--sand);
  border-radius: 6px;
  padding: 6px 14px;
  cursor: pointer;
  transition: all 0.2s;
  display: inline-flex;
  align-items: center;
  gap: 6px;
  line-height: 1;
}
 
.cxp-pill:hover {
  border-color: var(--g2);
  color: var(--g2);
}
 
.cxp-pill.active {
  background: var(--g1);
  border-color: var(--g1);
  color: #fff;
}
 
.cxp-pill-count {
  background: rgba(255,255,255,0.2);
  border-radius: 3px;
  padding: 1px 5px;
  font-size: 0.68rem;
}
 
.cxp-pill:not(.active) .cxp-pill-count {
  background: var(--sand);
  color: var(--text2);
}
 
.cxp-result-count {
  font-family: 'DM Sans', sans-serif;
  font-size: 0.78rem;
  color: var(--text2);
  white-space: nowrap;
}
 
/* ── PRODUCT CARD ─────────────────────────────────────────── */
@property --cxp-angle {
  syntax: '<angle>';
  inherits: false;
  initial-value: 0deg;
}
 
@keyframes cxp-spin {
  to { --cxp-angle: 360deg; }
}
 
.cxp-card {
  background: var(--white);
  border-radius: 12px;
  border: 1.5px solid var(--sand);
  overflow: hidden;
  height: 100%;
  display: flex;
  flex-direction: column;
  transition: transform 0.26s cubic-bezier(.25,.8,.25,1),
              box-shadow 0.26s cubic-bezier(.25,.8,.25,1);
  position: relative;
}
 
/* animated border on hover */
.cxp-card::before {
  content: '';
  position: absolute;
  inset: -2px;
  border-radius: 13px;
  background: conic-gradient(
    from var(--cxp-angle),
    transparent 0%, transparent 65%,
    var(--g2) 82%,
    var(--accent) 91%,
    var(--g2) 100%
  );
  -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
  -webkit-mask-composite: xor;
  mask-composite: exclude;
  padding: 2px;
  opacity: 0;
  transition: opacity 0.28s;
  pointer-events: none;
  z-index: 0;
}
 
.cxp-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 10px 32px rgba(45,80,22,0.13);
  border-color: transparent;
}
 
.cxp-card:hover::before {
  opacity: 1;
  animation: cxp-spin 2.8s linear infinite;
}
 
/* Image area */
.cxp-img-wrap {
  position: relative;
  aspect-ratio: 4/3;
  overflow: hidden;
  flex-shrink: 0;
}
 
.cxp-img-placeholder {
  width: 100%;
  height: 100%;
  background: var(--ph, #f4f1ea);
  display: flex;
  align-items: center;
  justify-content: center;
}
 
.cxp-img-placeholder i {
  font-size: 2.8rem;
  opacity: 0.35;
  transition: transform 0.3s, opacity 0.3s;
}
 
.cxp-card:hover .cxp-img-placeholder i {
  transform: scale(1.1);
  opacity: 0.5;
}
 
/* when you add real <img> tags, apply this class */
.cxp-img-wrap img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.4s ease;
  display: block;
}
 
.cxp-card:hover .cxp-img-wrap img {
  transform: scale(1.04);
}
 
/* Badge */
.cxp-badge {
  position: absolute;
  top: 10px;
  left: 10px;
  font-family: 'DM Sans', sans-serif;
  font-size: 0.65rem;
  font-weight: 600;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  padding: 3px 9px;
  border-radius: 4px;
  z-index: 1;
}
 
.cxp-badge.indoor    { background: #e8f5e9; color: #2e7d32; }
.cxp-badge.outdoor   { background: #f3e5f5; color: #6a1b9a; }
.cxp-badge.flowering { background: #ffebee; color: #c0392b; }
.cxp-badge.medicinal { background: #e0f2f1; color: #00695c; }
.cxp-badge.exotic    { background: #fff8e1; color: #e65100; }
 
/* Card body */
.cxp-body {
  padding: 16px 16px 18px;
  display: flex;
  flex-direction: column;
  gap: 6px;
  flex: 1;
  position: relative;
  z-index: 1;
}
 
.cxp-name {
  font-family: 'DM Sans', sans-serif;
  font-size: 0.95rem;
  font-weight: 600;
  color: var(--text);
  margin: 0;
  line-height: 1.3;
}
 
.cxp-cat-tag {
  font-size: 0.72rem;
  color: var(--text2);
  margin: 0;
  display: flex;
  align-items: center;
  gap: 5px;
  font-weight: 400;
}
 
.cxp-btn {
  display: inline-flex;
  align-items: center;
  gap: 6px;
  margin-top: auto;
  padding-top: 12px;
  font-family: 'DM Sans', sans-serif;
  font-size: 0.8rem;
  font-weight: 600;
  color: var(--g1);
  text-decoration: none;
  border-top: 1px solid var(--sand);
  transition: color 0.2s, gap 0.2s;
}
 
.cxp-btn i {
  font-size: 0.9rem;
  transition: transform 0.2s;
}
 
.cxp-btn:hover {
  color: var(--g2);
  text-decoration: none;
}
 
.cxp-btn:hover i {
  transform: translateX(3px);
}
 
/* ── EMPTY STATE ──────────────────────────────────────────── */
.cxp-empty {
  text-align: center;
  padding: 60px 20px;
  color: var(--text2);
}
 
.cxp-empty i {
  font-size: 2.5rem;
  display: block;
  margin-bottom: 12px;
  opacity: 0.35;
}
 
.cxp-empty p {
  font-family: 'DM Sans', sans-serif;
  font-size: 1rem;
  margin-bottom: 16px;
}
 
.cxp-reset-btn {
  font-family: 'DM Sans', sans-serif;
  font-size: 0.82rem;
  font-weight: 500;
  color: var(--g1);
  background: none;
  border: 1.5px solid var(--g1);
  border-radius: 6px;
  padding: 7px 20px;
  cursor: pointer;
  transition: background 0.2s, color 0.2s;
}
 
.cxp-reset-btn:hover {
  background: var(--g1);
  color: #fff;
}
 
/* ── FILTER HIDE/SHOW ─────────────────────────────────────── */
.cxp-item {
  transition: opacity 0.22s ease, transform 0.22s ease;
}
 
.cxp-item.cxp-hidden {
  display: none;
}
 
/* ── MOBILE ───────────────────────────────────────────────── */
@media (max-width: 575px) {
  .cxp-hero { padding: 52px 0 44px; }
  .cxp-filter-bar { gap: 8px; }
  .cxp-result-count { width: 100%; }
  .cxp-name { font-size: 0.85rem; }
}
 
</style>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5B3ZBD6B"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- include header from common folder -->
 <?php include 'common/header.php'; ?>

 <!-- ── PAGE HERO ─────────────────────────────────────────────── -->
<section class="cxp-hero">
  <div class="cxp-hero-bg"></div>
  <div class="container position-relative">
    <div class="cxp-hero-inner">
      <span class="cxp-eyebrow"><i class="bi bi-grid"></i> Our Collection</span>
      <h1 class="cxp-hero-title">All Plants</h1>
      <p class="cxp-hero-sub">Browse our complete catalogue of handpicked, healthy plants</p>
 
      <!-- Search bar -->
      <div class="cxp-search-wrap">
        <i class="bi bi-search cxp-search-icon"></i>
        <input type="text" id="cxpSearch" class="cxp-search-input" placeholder="Search plants…">
        <button class="cxp-search-clear" id="cxpSearchClear" style="display:none;">
          <i class="bi bi-x-lg"></i>
        </button>
      </div>
    </div>
  </div>
</section>
 
<!-- ── FILTER + RESULTS ───────────────────────────────────────── -->
<section class="cxp-main py-5">
  <div class="container">
 
    <!-- Filter Pills -->
    <div class="cxp-filter-bar mb-4">
      <span class="cxp-filter-label"><i class="bi bi-funnel"></i> Filter:</span>
      <div class="cxp-pills" id="cxpFilters">
        <button class="cxp-pill active" data-cat="all">All <span class="cxp-pill-count">22</span></button>
        <button class="cxp-pill" data-cat="indoor">Indoor <span class="cxp-pill-count">7</span></button>
        <button class="cxp-pill" data-cat="outdoor">Outdoor <span class="cxp-pill-count">3</span></button>
        <button class="cxp-pill" data-cat="flowering">Flowering <span class="cxp-pill-count">9</span></button>
        <button class="cxp-pill" data-cat="medicinal">Medicinal <span class="cxp-pill-count">3</span></button>
        <button class="cxp-pill" data-cat="exotic">Exotic &amp; Fruits <span class="cxp-pill-count">3</span></button>
      </div>
      <span class="cxp-result-count ms-auto" id="cxpResultCount">Showing 22 plants</span>
    </div>
 
    <!-- Product Grid -->
    <div class="row g-4" id="cxpGrid">
 
      <!-- ── INDOOR ─────────────────────────── -->
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="indoor" data-name="aglaonema snow white">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#e8f5e9;">
              <i class="bi bi-flower2" style="color:#2e7d32;"></i>
            </div>
            <span class="cxp-badge indoor">Indoor</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Aglaonema Snow White</h3>
            <p class="cxp-cat-tag"><i class="bi bi-house-heart"></i> Indoor Plant</p>
            <a href="product/aglaonema-snow-white.php" class="cxp-btn">
              View Plant <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="indoor" data-name="aglaonema">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#e8f5e9;">
              <i class="bi bi-flower2" style="color:#2e7d32;"></i>
            </div>
            <span class="cxp-badge indoor">Indoor</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Aglaonema</h3>
            <p class="cxp-cat-tag"><i class="bi bi-house-heart"></i> Indoor Plant</p>
            <a href="product/aglaonema.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="indoor" data-name="money plant">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#e8f5e9;">
              <i class="bi bi-currency-rupee" style="color:#2e7d32;"></i>
            </div>
            <span class="cxp-badge indoor">Indoor</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Money Plant</h3>
            <p class="cxp-cat-tag"><i class="bi bi-house-heart"></i> Indoor Plant</p>
            <a href="product/money-plant.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="indoor" data-name="snake plant">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#e8f5e9;">
              <i class="bi bi-align-center" style="color:#2e7d32;"></i>
            </div>
            <span class="cxp-badge indoor">Indoor</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Snake Plant</h3>
            <p class="cxp-cat-tag"><i class="bi bi-house-heart"></i> Indoor Plant</p>
            <a href="product/snake-plant.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="indoor" data-name="jade plant">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#e8f5e9;">
              <i class="bi bi-gem" style="color:#2e7d32;"></i>
            </div>
            <span class="cxp-badge indoor">Indoor</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Jade Plant</h3>
            <p class="cxp-cat-tag"><i class="bi bi-house-heart"></i> Indoor Plant</p>
            <a href="product/jade-plant.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="indoor" data-name="light peach hibiscus indoor">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#e8f5e9;">
              <i class="bi bi-flower3" style="color:#2e7d32;"></i>
            </div>
            <span class="cxp-badge indoor">Indoor</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Light Peach Hibiscus</h3>
            <p class="cxp-cat-tag"><i class="bi bi-house-heart"></i> Indoor Plant</p>
            <a href="light-peach-hibiscus.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="indoor" data-name="hot pink hibiscus">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#e8f5e9;">
              <i class="bi bi-flower1" style="color:#2e7d32;"></i>
            </div>
            <span class="cxp-badge indoor">Indoor</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Hot Pink Hibiscus</h3>
            <p class="cxp-cat-tag"><i class="bi bi-house-heart"></i> Indoor Plant</p>
            <a href="hot-pink-hibiscus.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <!-- ── OUTDOOR ─────────────────────────── -->
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="outdoor" data-name="bougainvillea">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#f3e5f5;">
              <i class="bi bi-tree" style="color:#6a1b9a;"></i>
            </div>
            <span class="cxp-badge outdoor">Outdoor</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Bougainvillea</h3>
            <p class="cxp-cat-tag"><i class="bi bi-tree"></i> Outdoor Plant</p>
            <a href="bougainvillea.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="outdoor" data-name="allamanda">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#f3e5f5;">
              <i class="bi bi-brightness-high" style="color:#6a1b9a;"></i>
            </div>
            <span class="cxp-badge outdoor">Outdoor</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Allamanda</h3>
            <p class="cxp-cat-tag"><i class="bi bi-tree"></i> Outdoor Plant</p>
            <a href="allamanda.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="outdoor" data-name="philodendron birkin">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#f3e5f5;">
              <i class="bi bi-peace" style="color:#6a1b9a;"></i>
            </div>
            <span class="cxp-badge outdoor">Outdoor</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Philodendron Birkin</h3>
            <p class="cxp-cat-tag"><i class="bi bi-tree"></i> Outdoor Plant</p>
            <a href="philodendron-birkin.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <!-- ── FLOWERING ────────────────────────── -->
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="flowering" data-name="frangipani">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#fff3e0;">
              <i class="bi bi-flower3" style="color:#c0392b;"></i>
            </div>
            <span class="cxp-badge flowering">Flowering</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Frangipani</h3>
            <p class="cxp-cat-tag"><i class="bi bi-flower1"></i> Flowering Plant</p>
            <a href="frangipani.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="flowering" data-name="grafted hibiscus">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#fff3e0;">
              <i class="bi bi-flower1" style="color:#c0392b;"></i>
            </div>
            <span class="cxp-badge flowering">Flowering</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Grafted Hibiscus</h3>
            <p class="cxp-cat-tag"><i class="bi bi-flower1"></i> Flowering Plant</p>
            <a href="grafted-hibiscus.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="flowering" data-name="orange hibiscus">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#fff3e0;">
              <i class="bi bi-flower1" style="color:#c0392b;"></i>
            </div>
            <span class="cxp-badge flowering">Flowering</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Orange Hibiscus</h3>
            <p class="cxp-cat-tag"><i class="bi bi-flower1"></i> Flowering Plant</p>
            <a href="orange-hibiscus.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="flowering" data-name="peach yellow hibiscus">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#fff3e0;">
              <i class="bi bi-flower1" style="color:#c0392b;"></i>
            </div>
            <span class="cxp-badge flowering">Flowering</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Peach Yellow Hibiscus</h3>
            <p class="cxp-cat-tag"><i class="bi bi-flower1"></i> Flowering Plant</p>
            <a href="peach-yellow-hibiscus.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="flowering" data-name="pink double petal hibiscus">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#fff3e0;">
              <i class="bi bi-flower1" style="color:#c0392b;"></i>
            </div>
            <span class="cxp-badge flowering">Flowering</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Pink Double Petal Hibiscus</h3>
            <p class="cxp-cat-tag"><i class="bi bi-flower1"></i> Flowering Plant</p>
            <a href="pink-double-petal-hibiscus.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="flowering" data-name="hot pink hibiscus flowering">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#fff3e0;">
              <i class="bi bi-flower2" style="color:#c0392b;"></i>
            </div>
            <span class="cxp-badge flowering">Flowering</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Hot Pink Hibiscus</h3>
            <p class="cxp-cat-tag"><i class="bi bi-flower1"></i> Flowering Plant</p>
            <a href="hot-pink-hibiscus.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="flowering" data-name="light peach hibiscus flowering">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#fff3e0;">
              <i class="bi bi-flower2" style="color:#c0392b;"></i>
            </div>
            <span class="cxp-badge flowering">Flowering</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Light Peach Hibiscus</h3>
            <p class="cxp-cat-tag"><i class="bi bi-flower1"></i> Flowering Plant</p>
            <a href="light-peach-hibiscus.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="flowering" data-name="exotic peach yellow hibiscus flowering">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#fff3e0;">
              <i class="bi bi-stars" style="color:#c0392b;"></i>
            </div>
            <span class="cxp-badge flowering">Flowering</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Exotic Peach Yellow Hibiscus</h3>
            <p class="cxp-cat-tag"><i class="bi bi-flower1"></i> Flowering Plant</p>
            <a href="exotic-peach-yellow-hibiscus.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <!-- ── MEDICINAL ────────────────────────── -->
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="medicinal" data-name="aloe vera">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#e0f2f1;">
              <i class="bi bi-capsule" style="color:#00695c;"></i>
            </div>
            <span class="cxp-badge medicinal">Medicinal</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Aloe Vera</h3>
            <p class="cxp-cat-tag"><i class="bi bi-capsule"></i> Medicinal Plant</p>
            <a href="aloe-vera.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="medicinal" data-name="aloe vera copy">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#e0f2f1;">
              <i class="bi bi-capsule" style="color:#00695c;"></i>
            </div>
            <span class="cxp-badge medicinal">Medicinal</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Aloe Vera (Variant)</h3>
            <p class="cxp-cat-tag"><i class="bi bi-capsule"></i> Medicinal Plant</p>
            <a href="aloe-vera copy.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="medicinal" data-name="new aloe vera">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#e0f2f1;">
              <i class="bi bi-capsule-pill" style="color:#00695c;"></i>
            </div>
            <span class="cxp-badge medicinal">Medicinal</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">New Aloe Vera</h3>
            <p class="cxp-cat-tag"><i class="bi bi-capsule"></i> Medicinal Plant</p>
            <a href="new-aloe-vera.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <!-- ── EXOTIC & FRUITS ─────────────────── -->
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="exotic" data-name="dragon fruit">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#fff8e1;">
              <i class="bi bi-stars" style="color:#e65100;"></i>
            </div>
            <span class="cxp-badge exotic">Exotic</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Dragon Fruit</h3>
            <p class="cxp-cat-tag"><i class="bi bi-stars"></i> Exotic &amp; Fruit</p>
            <a href="dragon-fruit.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="exotic" data-name="dragon mulberry">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#fff8e1;">
              <i class="bi bi-stars" style="color:#e65100;"></i>
            </div>
            <span class="cxp-badge exotic">Exotic</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Dragon Mulberry</h3>
            <p class="cxp-cat-tag"><i class="bi bi-stars"></i> Exotic &amp; Fruit</p>
            <a href="dragon-mulberry.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
      <div class="col-6 col-md-4 col-lg-3 cxp-item" data-cat="exotic" data-name="exotic peach yellow hibiscus">
        <div class="cxp-card">
          <div class="cxp-img-wrap">
            <div class="cxp-img-placeholder" style="--ph:#fff8e1;">
              <i class="bi bi-flower1" style="color:#e65100;"></i>
            </div>
            <span class="cxp-badge exotic">Exotic</span>
          </div>
          <div class="cxp-body">
            <h3 class="cxp-name">Exotic Peach Yellow Hibiscus</h3>
            <p class="cxp-cat-tag"><i class="bi bi-stars"></i> Exotic &amp; Fruit</p>
            <a href="exotic-peach-yellow-hibiscus.php" class="cxp-btn">View Plant <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
 
    </div><!-- /row -->
 
    <!-- Empty state -->
    <div class="cxp-empty" id="cxpEmpty" style="display:none;">
      <i class="bi bi-search"></i>
      <p>No plants found for "<span id="cxpEmptyTerm"></span>"</p>
      <button class="cxp-reset-btn" id="cxpReset">Clear Search</button>
    </div>
 
  </div>
</section>
 

 <?php include 'common/footer.php'; ?>

    <!-- Back to Top -->
    <button class="btt" id="btt" onclick="window.scrollTo({top:0,behavior:'smooth'})" aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </button>
 <?php include 'common/footer-script.php'; ?>
    <script>
(function () {
  'use strict';
 
  const items       = document.querySelectorAll('.cxp-item');
  const pills       = document.querySelectorAll('.cxp-pill');
  const searchInput = document.getElementById('cxpSearch');
  const clearBtn    = document.getElementById('cxpSearchClear');
  const resultCount = document.getElementById('cxpResultCount');
  const emptyState  = document.getElementById('cxpEmpty');
  const emptyTerm   = document.getElementById('cxpEmptyTerm');
  const resetBtn    = document.getElementById('cxpReset');
 
  let activeCat = 'all';
  let searchTerm = '';
 
  function applyFilters() {
    let visible = 0;
 
    items.forEach(function (item) {
      const cat  = item.dataset.cat;
      const name = item.dataset.name.toLowerCase();
      const catMatch  = activeCat === 'all' || cat === activeCat;
      const termMatch = searchTerm === '' || name.includes(searchTerm);
 
      if (catMatch && termMatch) {
        item.classList.remove('cxp-hidden');
        visible++;
      } else {
        item.classList.add('cxp-hidden');
      }
    });
 
    resultCount.textContent = 'Showing ' + visible + ' plant' + (visible !== 1 ? 's' : '');
    emptyState.style.display = visible === 0 ? 'block' : 'none';
    emptyTerm.textContent = searchTerm;
  }
 
  pills.forEach(function (pill) {
    pill.addEventListener('click', function () {
      pills.forEach(function (p) { p.classList.remove('active'); });
      pill.classList.add('active');
      activeCat = pill.dataset.cat;
      applyFilters();
    });
  });
 
  searchInput.addEventListener('input', function () {
    searchTerm = searchInput.value.trim().toLowerCase();
    clearBtn.style.display = searchTerm ? 'block' : 'none';
    applyFilters();
  });
 
  function clearSearch() {
    searchInput.value = '';
    searchTerm = '';
    clearBtn.style.display = 'none';
    applyFilters();
  }
 
  clearBtn.addEventListener('click', clearSearch);
  resetBtn.addEventListener('click', function () {
    clearSearch();
    pills.forEach(function (p) { p.classList.remove('active'); });
    pills[0].classList.add('active');
    activeCat = 'all';
    applyFilters();
  });
 
})();
</script>
</body>

</html>