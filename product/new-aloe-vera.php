<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Aloe Vera Live Plant</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css"/>
  <link rel="stylesheet" href="../assets/css/product-details.css">
  <?php include '../common/header-script.php'; ?>
</head>
<body>
  <?php include '../common/header.php'; ?>

  <!-- ── Breadcrumb ── -->
  <div class="pv-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Plants</a></li>
          <li class="breadcrumb-item active" aria-current="page">Aloe Vera Live Plant</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- ── Product Hero ── -->
  <section class="pv-product-hero">
    <div class="container">
      <div class="row g-4 align-items-start">

        <!-- Left: Gallery -->
        <div class="col-lg-5">
          <div class="pv-gallery-wrap">
            <div class="pv-badge-bestseller">Best Seller</div>
            <div class="pv-main-img-wrap">
              <img id="mainProductImg"
                   src="https://placehold.co/540x480/e8f5e9/388e3c?text=Aloe+Vera+Plant"
                   alt="Aloe Vera Live Plant"
                   class="pv-main-img"/>
            </div>
            <div class="pv-thumbs-row">
              <button class="pv-thumb-btn active" onclick="switchImg(this,'https://placehold.co/540x480/e8f5e9/388e3c?text=Aloe+Vera+Plant')">
                <img src="https://placehold.co/90x80/e8f5e9/388e3c?text=1" alt="View 1"/>
              </button>
              <button class="pv-thumb-btn" onclick="switchImg(this,'https://placehold.co/540x480/f1f8e9/558b2f?text=View+2')">
                <img src="https://placehold.co/90x80/f1f8e9/558b2f?text=2" alt="View 2"/>
              </button>
              <button class="pv-thumb-btn" onclick="switchImg(this,'https://placehold.co/540x480/e0f2f1/00695c?text=View+3')">
                <img src="https://placehold.co/90x80/e0f2f1/00695c?text=3" alt="View 3"/>
              </button>
              <button class="pv-thumb-btn" onclick="switchImg(this,'https://placehold.co/540x480/fafafa/aaa?text=View+4')">
                <img src="https://placehold.co/90x80/fafafa/aaa?text=4" alt="View 4"/>
              </button>
            </div>
          </div>
        </div>

        <!-- Right: Info -->
        <div class="col-lg-7">
          <span class="pv-category-badge">MEDICINAL PLANT</span>
          <h1 class="pv-product-title">Aloe Vera Live Plant – Medicinal Succulent Plant for Home, Balcony &amp; Indoor Garden</h1>

          <div class="pv-rating-row">
            <span class="pv-stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
            </span>
            <span class="pv-rating-val">4.5</span>
            <span class="pv-rating-count">(128 Reviews)</span>
          </div>

          <p class="pv-short-desc">Bring home the natural goodness of our Aloe Vera Live Plant, a highly popular medicinal and ornamental plant known for its healing properties and easy maintenance. This hardy succulent is widely valued for its soothing gel, air-purifying qualities, and long-lasting growth, making it a perfect addition to homes, balconies, offices, and gardens.</p>

          <div class="pv-price-row">
            <span class="pv-price">₹199</span>
            <span class="pv-price-note">(Inclusive of all taxes)</span>
          </div>

          <div class="pv-feature-pills">
            <span class="pv-pill"><i class="bi bi-wind"></i> Air Purifying</span>
            <span class="pv-pill"><i class="bi bi-shield-check"></i> Low Maintenance</span>
            <span class="pv-pill"><i class="bi bi-house-heart"></i> Indoor Friendly</span>
          </div>

          <div class="pv-stock-row">
            <span class="pv-in-stock"><i class="bi bi-check-circle-fill"></i> In Stock</span>
            <span class="pv-divider-pipe"></span>
            <span class="pv-delivery-tag"><i class="bi bi-truck"></i> Delivery in 3–5 Days</span>
          </div>

          <div class="pv-qty-row">
            <span class="pv-qty-label">Quantity:</span>
            <div class="pv-qty-ctrl">
              <button class="pv-qty-btn" onclick="changeQty(-1)"><i class="bi bi-dash"></i></button>
              <span class="pv-qty-val" id="qtyVal">1</span>
              <button class="pv-qty-btn" onclick="changeQty(1)"><i class="bi bi-plus"></i></button>
            </div>
          </div>

          <div class="pv-action-btns">
            <button class="btn pv-btn-cart"><i class="bi bi-cart3"></i> Add to Cart</button>
            <button class="btn pv-btn-whatsapp"><i class="bi bi-whatsapp"></i> WhatsApp Enquiry</button>
          </div>
          <div class="mt-2">
            <button class="btn pv-btn-call w-100"><i class="bi bi-telephone-fill"></i> Call Now</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── Feature Strip ── -->
  <section class="pv-feature-strip">
    <div class="container">
      <div class="row g-3 justify-content-center text-center">
        <div class="col-6 col-sm-4 col-md-2">
          <div class="pv-feat-item">
            <i class="bi bi-tools"></i>
            <div class="pv-feat-title">Easy to Maintain</div>
            <div class="pv-feat-sub">Perfect for beginners</div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
          <div class="pv-feat-item">
            <i class="bi bi-wind"></i>
            <div class="pv-feat-title">Air Purifying Plant</div>
            <div class="pv-feat-sub">Cleaner &amp; fresher air</div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
          <div class="pv-feat-item">
            <i class="bi bi-house-heart"></i>
            <div class="pv-feat-title">Indoor Friendly</div>
            <div class="pv-feat-sub">Thrives in low light</div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
          <div class="pv-feat-item">
            <i class="bi bi-gift"></i>
            <div class="pv-feat-title">Comes with Pot</div>
            <div class="pv-feat-sub">Ready to place</div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
          <div class="pv-feat-item">
            <i class="bi bi-truck"></i>
            <div class="pv-feat-title">Fast Delivery</div>
            <div class="pv-feat-sub">Across India</div>
          </div>
        </div>
        <div class="col-6 col-sm-4 col-md-2">
          <div class="pv-feat-item">
            <i class="bi bi-heart-pulse"></i>
            <div class="pv-feat-title">Healthy Plants</div>
            <div class="pv-feat-sub">Carefully nurtured</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ── About + Specs ── -->
  <section class="pv-about-section">
    <div class="container">
      <div class="row g-4">

        <!-- About -->
        <div class="col-lg-6">
          <div class="pv-card h-100">
            <h2 class="pv-section-heading">About This Plant</h2>
            <p>Aloe Vera is one of the most popular medicinal and ornamental plants, widely known for its healing properties and easy care. This hardy succulent thrives in Indian climates and is valued for its soothing gel, air-purifying qualities, and long-lasting growth.</p>
            <p>Aloe vera is one of the most beginner-friendly plants, requiring minimal care while offering multiple health and decorative benefits. Its compact size and adaptability make it ideal for indoor and outdoor gardening, especially in Indian climates.</p>

            <h3 class="pv-sub-heading mt-4">Why This Plant is Special</h3>
            <ul class="pv-check-list">
              <li><i class="bi bi-check-circle-fill"></i> Medicinal &amp; Herbal Plant – Known for natural healing and skincare benefits</li>
              <li><i class="bi bi-check-circle-fill"></i> Low Maintenance – Requires minimal watering and care</li>
              <li><i class="bi bi-check-circle-fill"></i> Air-Purifying Plant – Helps improve indoor air quality</li>
              <li><i class="bi bi-check-circle-fill"></i> Perfect for Indoor &amp; Outdoor Use – Ideal for balcony, kitchen, or office</li>
              <li><i class="bi bi-check-circle-fill"></i> Climate Friendly – Thrives well in Indian weather conditions</li>
              <li><i class="bi bi-check-circle-fill"></i> Long-Lasting Growth – Durable succulent with strong survival ability</li>
              <li><i class="bi bi-check-circle-fill"></i> Multi-Purpose Plant – Useful for home remedies, beauty, and décor</li>
            </ul>
          </div>
        </div>

        <!-- Specs -->
        <div class="col-lg-6">
          <div class="pv-card h-100">
            <h2 class="pv-section-heading">Product Specifications</h2>
            <table class="pv-spec-table w-100">
              <tbody>
                <tr><td class="pv-spec-label">Botanical Name</td><td>Aloe barbadensis Miller</td></tr>
                <tr><td class="pv-spec-label">Common Name</td><td>Aloe Vera / Ghritkumari</td></tr>
                <tr><td class="pv-spec-label">Plant Type</td><td>Succulent Medicinal Plant</td></tr>
                <tr><td class="pv-spec-label">Plant Height</td><td>Approx. 6–12 inches (may vary naturally)</td></tr>
                <tr><td class="pv-spec-label">Pot Size</td><td>4–6 inch nursery pot (if included)</td></tr>
                <tr><td class="pv-spec-label">Leaf Color</td><td>Green, thick fleshy leaves</td></tr>
                <tr><td class="pv-spec-label">Fragrance</td><td>None</td></tr>
                <tr><td class="pv-spec-label">Growth Speed</td><td>Moderate</td></tr>
                <tr><td class="pv-spec-label">Lifespan</td><td>Long-lasting perennial plant</td></tr>
              </tbody>
            </table>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ── Detailed Care Guide ── -->
  <section class="pv-care-section">
    <div class="container">
      <h2 class="pv-section-heading">Detailed Care Guide</h2>
      <div class="row g-3 mt-1">

        <div class="col-sm-6 col-lg-4">
          <div class="pv-care-card">
            <div class="pv-care-icon"><i class="bi bi-brightness-high-fill"></i></div>
            <div class="pv-care-title">Sunlight</div>
            <ul>
              <li>Requires bright indirect sunlight or partial direct sunlight</li>
              <li>Can grow well indoors near windows or balconies</li>
            </ul>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4">
          <div class="pv-care-card">
            <div class="pv-care-icon"><i class="bi bi-droplet-fill"></i></div>
            <div class="pv-care-title">Watering</div>
            <ul>
              <li>Water once every 7–10 days depending on climate</li>
              <li>Allow soil to dry between watering</li>
              <li>Avoid overwatering to prevent root rot</li>
            </ul>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4">
          <div class="pv-care-card">
            <div class="pv-care-icon"><i class="bi bi-layers-fill"></i></div>
            <div class="pv-care-title">Soil Type</div>
            <ul>
              <li>Use well-drained sandy or succulent soil mix</li>
              <li>Ideal mix: Garden soil + sand + compost or cactus mix</li>
            </ul>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4">
          <div class="pv-care-card">
            <div class="pv-care-icon"><i class="bi bi-flower1"></i></div>
            <div class="pv-care-title">Fertilization</div>
            <ul>
              <li>Feed once every 4–6 weeks with mild organic fertilizer</li>
              <li>Over-fertilizing is not necessary</li>
            </ul>
          </div>
        </div>

        <div class="col-sm-6 col-lg-4">
          <div class="pv-care-card">
            <div class="pv-care-icon"><i class="bi bi-scissors"></i></div>
            <div class="pv-care-title">Pruning</div>
            <ul>
              <li>Remove dry or damaged leaves regularly</li>
              <li>Helps maintain healthy plant growth</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ── Benefits + Usage + Delivery ── -->
  <section class="pv-three-col-section">
    <div class="container">
      <div class="row g-4">

        <!-- Plant Benefits -->
        <div class="col-lg-4">
          <div class="pv-card h-100">
            <h2 class="pv-section-heading">Plant Benefits</h2>
            <ul class="pv-check-list">
              <li><i class="bi bi-check-circle-fill"></i> Natural medicinal plant with multiple health benefits</li>
              <li><i class="bi bi-check-circle-fill"></i> Helps soothe skin burns, cuts, and irritation</li>
              <li><i class="bi bi-check-circle-fill"></i> Improves indoor air quality and environment</li>
              <li><i class="bi bi-check-circle-fill"></i> Easy to maintain and suitable for beginners</li>
              <li><i class="bi bi-check-circle-fill"></i> Enhances home décor with a fresh green look</li>
            </ul>
          </div>
        </div>

        <!-- Ideal Usage -->
        <div class="col-lg-4">
          <div class="pv-card h-100">
            <h2 class="pv-section-heading">Ideal Usage</h2>
            <ul class="pv-usage-list">
              <li><i class="bi bi-house-fill"></i> Indoor Plant Decoration</li>
              <li><i class="bi bi-building"></i> Office Desk Plant</li>
              <li><i class="bi bi-sun-fill"></i> Balcony &amp; Terrace Gardening</li>
              <li><i class="bi bi-egg-fried"></i> Kitchen Herbal Garden</li>
              <li><i class="bi bi-heart-fill"></i> Home Remedies &amp; Skincare Use</li>
              <li><i class="bi bi-gift-fill"></i> Gifting Purpose</li>
            </ul>
          </div>
        </div>

        <!-- Packaging & Delivery -->
        <div class="col-lg-4">
          <div class="pv-card h-100">
            <h2 class="pv-section-heading">Packaging &amp; Delivery</h2>
            <div class="pv-delivery-visual">
              <i class="bi bi-box-seam-fill pv-box-icon"></i>
            </div>
            <ul class="pv-check-list">
              <li><i class="bi bi-check-circle-fill"></i> Packed securely using plant-safe protective materials</li>
              <li><i class="bi bi-check-circle-fill"></i> Delivered as a healthy live aloe vera plant</li>
              <li><i class="bi bi-check-circle-fill"></i> Designed for safe and damage-free transit</li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ── Important Notes ── -->
  <section class="pv-notes-section">
    <div class="container">
      <div class="pv-note-box">
        <h2 class="pv-section-heading mb-3"><i class="bi bi-exclamation-circle-fill me-2 text-warning"></i>Important Notes</h2>
        <div class="row">
          <div class="col-sm-6">
            <ul class="pv-note-list">
              <li>Plant size and shape may vary naturally</li>
              <li>Minor soil disturbance during shipping is normal</li>
            </ul>
          </div>
          <div class="col-sm-6">
            <ul class="pv-note-list">
              <li>Keep away from extreme cold temperatures</li>
              <li>Decorative pot (if shown) may not be included</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    function switchImg(btn, src) {
      document.getElementById('mainProductImg').src = src;
      document.querySelectorAll('.pv-thumb-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
    }
    function changeQty(delta) {
      const el = document.getElementById('qtyVal');
      let val = parseInt(el.textContent) + delta;
      if (val < 1) val = 1;
      el.textContent = val;
    }
  </script>
  <?php include '../common/footer.php'; ?>
  <?php include '../common/footer-script.php'; ?>
</body>
</html>