<?php
// ─── DB Connection ───────────────────────────────────────────────
$host = "localhost";
$user = "u632088755_admin";
$pass = "Pavitra@123#";
$db   = "u632088755_pavitramitti";
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");

// ─── Slug from URL ────────────────────────────────────────────────
// URL format: product.php?slug=aloe-vera-live-plant
// OR with .htaccess rewrite: /product/aloe-vera-live-plant
$slug = isset($_GET['slug']) ? trim($conn->real_escape_string($_GET['slug'])) : '';

if (empty($slug)) {
    http_response_code(404);
    die("Product not found.");
}

// ─── Fetch Product ────────────────────────────────────────────────
$result = $conn->query("SELECT * FROM products WHERE slug = '$slug' LIMIT 1");

if (!$result || $result->num_rows === 0) {
    http_response_code(404);
    die("Product not found.");
}

$p = $result->fetch_assoc();

// ─── Helper: decode JSON or plain text fields ─────────────────────
// Fields like why_special, benefits etc. may be stored as JSON arrays
// or plain HTML/text. This helper returns an array of items.
function decode_list($field) {
    if (empty($field)) return [];
    $decoded = json_decode($field, true);
    if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
        return $decoded;
    }
    // If not JSON, split by newline
    return array_filter(array_map('trim', explode("\n", $field)));
}

// ─── Helper: render <li> list ─────────────────────────────────────
// $allow_html = true: for fields like why_special that may have <strong> tags
function render_list($field, $allow_html = false) {
    $items = decode_list($field);
    foreach ($items as $item) {
        $content = $allow_html
            ? strip_tags($item, '<strong><em><b><i><br>')
            : htmlspecialchars($item);
        echo '<li>' . $content . '</li>';
    }
}

// ─── Helper: specs ────────────────────────────────────────────────
// DB stores as: [{"key":"Botanical Name","value":"Aloe barbadensis"}]
// Returns associative array [key => value]
function decode_specs($field) {
    if (empty($field)) return [];
    $decoded = json_decode($field, true);
    if (json_last_error() !== JSON_ERROR_NONE || !is_array($decoded)) return [];

    $specs = [];
    foreach ($decoded as $item) {
        // Format 1: [{"key":"...","value":"..."}]
        if (isset($item['key'], $item['value'])) {
            $specs[$item['key']] = $item['value'];
        }
        // Format 2: already associative {"Botanical Name": "..."}
        elseif (is_string($item)) {
            // scalar — skip
        }
    }
    // If decoded is already a plain assoc array (format 2)
    if (empty($specs) && !isset($decoded[0])) {
        $specs = $decoded;
    }
    return $specs;
}

// ─── Helper: ideal_usage tags (JSON array or comma-separated) ─────
function decode_tags($field) {
    if (empty($field)) return [];
    $decoded = json_decode($field, true);
    if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
        return $decoded;
    }
    return array_filter(array_map('trim', explode(',', $field)));
}

$specs   = decode_specs($p['specs']);
$tags    = decode_tags($p['ideal_usage']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($p['name']) ?> – Pavitra Mitti</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'DM Sans', sans-serif; color: #333; background: #fff; }

        .pd-hero { background: #2d5016; padding: 1.5rem 0 0; }
        .pd-hero a { color: rgba(255,255,255,0.6); font-size: 0.82rem; text-decoration: none; }
        .pd-hero span { color: rgba(255,255,255,0.4); font-size: 0.82rem; }
        .pd-hero h1 { font-family: 'DM Serif Display', serif; color: #fff; font-size: 1.8rem; margin: 0.6rem 0 0.3rem; }
        .pd-hero p { color: rgba(255,255,255,0.65); font-size: 0.88rem; margin: 0; }
        .pd-hero img { width: 100%; height: 300px; object-fit: cover; display: block; margin-top: 1.2rem; }

        .pd-cta-bar { background: #fff; border-bottom: 1px solid #ddd; padding: 0.7rem 0; position: sticky; top: 0; z-index: 999; }
        .pd-btn { display: inline-flex; align-items: center; gap: 0.3rem; padding: 0.5rem 1.1rem; border-radius: 4px; font-size: 0.85rem; font-weight: 600; text-decoration: none; }
        .pd-btn-green { background: #2d5016; color: #fff; }
        .pd-btn-wa { background: #25D366; color: #fff; }
        .pd-btn:hover { opacity: 0.85; color: #fff; }

        .pd-body { padding: 2rem 0 3rem; }
        .pd-body h2 { font-family: 'DM Serif Display', serif; font-size: 1.15rem; color: #2d5016; border-bottom: 2px solid #9ccc65; padding-bottom: 0.3rem; margin: 1.8rem 0 0.8rem; }
        .pd-body h2:first-child { margin-top: 0; }
        .pd-body p, .pd-body li { font-size: 0.92rem; color: #555; line-height: 1.8; }
        .pd-body ul { padding-left: 1.2rem; margin-bottom: 0; }
        .pd-body li { margin-bottom: 0.2rem; }

        .pd-table { width: 100%; border-collapse: collapse; }
        .pd-table tr { border-bottom: 1px solid #eee; }
        .pd-table td { padding: 0.55rem 0.4rem; font-size: 0.88rem; color: #555; }
        .pd-table td:first-child { font-weight: 600; color: #333; width: 42%; }

        .pd-tag { display: inline-block; padding: 0.25rem 0.7rem; background: #f5f5f5; border: 1px solid #ddd; border-radius: 3px; font-size: 0.8rem; color: #444; margin: 0.2rem; }

        .pd-note { border-left: 3px solid #e8a020; padding: 0.8rem 1rem; background: #fffbf0; }
        .pd-note li { font-size: 0.88rem; color: #666; }

        .pd-cta-bottom { background: #2d5016; border-radius: 6px; padding: 1.5rem; margin-top: 2rem; }
        .pd-cta-bottom h3 { font-family: 'DM Serif Display', serif; color: #fff; font-size: 1.3rem; margin: 0 0 0.3rem; }
        .pd-cta-bottom p { color: rgba(255,255,255,0.7); font-size: 0.88rem; margin: 0; }

        @media(max-width:767px) {
            .pd-hero img { height: 200px; }
            .pd-cta-name { display: none; }
        }
    </style>
</head>
<body>

<!-- ─── HERO ──────────────────────────────────────────────────────── -->
<div class="pd-hero">
    <div class="container">
        
        <!-- <div class="d-flex gap-2 align-items-center">
            <a href="/">Home</a><span>/</span>
            <a href="/#categories"><?= htmlspecialchars($p['category']) ?></a><span>/</span>
            <span style="color:rgba(255,255,255,0.85);font-size:0.82rem;"><?= htmlspecialchars($p['name']) ?></span>
        </div> -->
        <h1><?= htmlspecialchars($p['name']) ?></h1>
        <?php if (!empty($p['hero_subtitle'])): ?>
            <p><?= htmlspecialchars($p['hero_subtitle']) ?></p>
        <?php endif; ?>
        <?php if (!empty($p['image_url'])): ?>
            <img src="<?= htmlspecialchars($p['image_url']) ?>" alt="<?= htmlspecialchars($p['name']) ?>">
        <?php endif; ?>
    </div>
</div>

<!-- ─── STICKY CTA BAR ────────────────────────────────────────────── -->
<div class="pd-cta-bar">
    <div class="container d-flex align-items-center justify-content-between gap-2">
        <span class="pd-cta-name fw-semibold" style="font-size:0.9rem;color:#2d5016;"><?= htmlspecialchars($p['name']) ?></span>
        <div class="d-flex gap-2">
            <a href="tel:+919876543210" class="pd-btn pd-btn-green">Call Now</a>
            <a href="https://wa.me/919876543210" target="_blank" class="pd-btn pd-btn-wa">WhatsApp</a>
        </div>
    </div>
</div>

<!-- ─── BODY ──────────────────────────────────────────────────────── -->
<div class="pd-body">
    <div class="container">
        <div class="row g-4">

            <!-- Left Column -->
            <div class="col-lg-8">

                <?php if (!empty($p['overview'])): ?>
                <h2>Product Overview</h2>
                <p><?= nl2br(htmlspecialchars($p['overview'])) ?></p>
                <?php endif; ?>

                <?php if (!empty($p['why_special'])): ?>
                <h2>Why This <?= htmlspecialchars($p['name']) ?> is Special</h2>
                <ul><?php render_list($p['why_special'], true); ?></ul>
                <?php endif; ?>

                <?php if (!empty($p['benefits'])): ?>
                <h2>Plant Benefits</h2>
                <ul><?php render_list($p['benefits']); ?></ul>
                <?php endif; ?>

                <!-- Care Guide -->
                <?php
                $care_sections = [
                    'sunlight'      => 'Sunlight Requirement',
                    'watering'      => 'Watering',
                    'soil'          => 'Soil Type',
                    'fertilization' => 'Fertilization',
                    'pruning'       => 'Pruning',
                ];
                $has_care = false;
                foreach ($care_sections as $field => $_) {
                    if (!empty($p[$field])) { $has_care = true; break; }
                }
                if ($has_care): ?>
                <h2>Detailed Care Guide</h2>
                <?php foreach ($care_sections as $field => $label): ?>
                    <?php if (!empty($p[$field])): ?>
                    <p><strong><?= $label ?></strong></p>
                    <ul><?php render_list($p[$field]); ?></ul>
                    <?php endif; ?>
                <?php endforeach; ?>
                <?php endif; ?>

                <?php if (!empty($tags)): ?>
                <h2>Ideal Usage</h2>
                <div>
                    <?php foreach ($tags as $tag): ?>
                        <span class="pd-tag"><?= htmlspecialchars($tag) ?></span>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

            </div>

            <!-- Right Column -->
            <div class="col-lg-4">

                <?php if (!empty($specs)): ?>
                <h2 style="margin-top:0;">Product Specifications</h2>
                <table class="pd-table">
                    <?php foreach ($specs as $key => $val): ?>
                    <tr>
                        <td><?= htmlspecialchars($key) ?></td>
                        <td><?= htmlspecialchars($val) ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <?php endif; ?>

                <?php if (!empty($p['packaging'])): ?>
                <h2>Packaging &amp; Delivery</h2>
                <ul><?php render_list($p['packaging']); ?></ul>
                <?php endif; ?>

                <?php if (!empty($p['important_notes'])): ?>
                <h2>Important Notes</h2>
                <div class="pd-note">
                    <ul><?php render_list($p['important_notes']); ?></ul>
                </div>
                <?php endif; ?>

            </div>
        </div>

        <!-- Bottom CTA -->
        <div class="pd-cta-bottom">
            <div class="row align-items-center g-3">
                <div class="col-md-8">
                    <h3>Interested in This Plant?</h3>
                    <p>Call or WhatsApp us to check availability, pricing and delivery options.</p>
                </div>
                <div class="col-md-4 d-flex gap-2 justify-content-md-end">
                    <a href="tel:+919876543210" class="pd-btn pd-btn-green">Call Now</a>
                    <a href="https://wa.me/919876543210" target="_blank" class="pd-btn pd-btn-wa">WhatsApp</a>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php $conn->close(); ?>