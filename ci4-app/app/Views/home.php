<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= esc($page['meta']['title'] ?? 'IronPDF C++ Beta'); ?></title>
  <meta name="description" content="<?= esc($page['meta']['description'] ?? ''); ?>">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/styles.css'); ?>">

  <style>
    /* Debug colors (optional override for visibility) */
    .dbg-1 { background: rgba(255,0,0,0.1); }
    .dbg-2 { background: rgba(0,255,0,0.1); }
    .dbg-3 { background: rgba(0,0,255,0.1); max-width: 1170px; margin: 0 auto; }
    .dbg-4 { background: rgba(255,255,0,0.1); }
    .dbg-5 { background: rgba(255,0,255,0.1); max-width: 1170px; margin: 0 auto; }
    .container-1600 { max-width: 1600px; width: 100%; margin: 0 auto; }        
    .container-1170 { max-width: 1170px; width: 100%; margin: 0 auto; }
  </style>
</head>

<body>

<!-- ================= HEADER ================= -->
<header class="dbg-1">
  <nav class="navbar navbar-expand-lg dbg-2">
    <div class="container position-relative dbg-3 container-1600 pp-header-container">

      <a class="navbar-brand" href="<?= esc($page['header']['brand']['href'] ?? '#'); ?>">
        <?php if (! empty($page['header']['brand']['logo']['src'])): ?>
          <img
            src="<?= esc(base_url($page['header']['brand']['logo']['src'])); ?>"
            alt="<?= esc($page['header']['brand']['logo']['alt'] ?? ''); ?>"
            class="pp-header-logo"
          >
        <?php endif; ?>        
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        ☰
      </button>

      <div class="collapse navbar-collapse dbg-4 pp-header-menu" id="navMenu">
        <ul class="navbar-nav">
          <?php foreach (($page['header']['nav'] ?? []) as $item): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= esc($item['href'] ?? '#'); ?>"><?= esc($item['label'] ?? ''); ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

      <?php if (! empty($page['hero']['heroImage']['src'])): ?>
        <img
            src="<?= esc(base_url($page['hero']['heroImage']['src'])); ?>"
            alt="<?= esc($page['hero']['heroImage']['alt'] ?? ''); ?>"
            class="position-absolute top-0 end-0 pp-hero-image"
        >
      <?php endif; ?>

    </div>
  </nav>
</header>


<!-- ================= HERO ================= -->
<section class="py-5 dbg-2">
  <div class="position-relative container-1600 pp-hero-shell">
    <div class="container dbg-3 pp-hero-container">
        <div class="row align-items-center pp-hero-row">

        <!-- Left -->
        <div class="col-12 col-lg-6 mb-4 mb-lg-0 dbg-4 pp-hero-content">
            <p>
            <?php if (! empty($page['hero']['productIcon']['src'])): ?>
                <img
                src="<?= esc(base_url($page['hero']['productIcon']['src'])); ?>"
                alt="<?= esc($page['hero']['productIcon']['alt'] ?? ''); ?>"
                class="pp-hero-product-icon"
                >
            <?php endif; ?>
            <?= esc($page['hero']['productLabel'] ?? ''); ?>
            </p>
            <p><?= esc($page['hero']['lead'] ?? ''); ?></p>
            <h1><?= esc($page['hero']['title'] ?? ''); ?></h1>
            <p><?= esc($page['hero']['status'] ?? ''); ?></p>
        </div>

        <!-- Right -->
        <div class="col-12 col-lg-6 dbg-5 text-center pp-hero-media">
            
        </div>

        </div>
    </div>
  </div>
</section>


<!-- ================= SIGNUP STRIP ================= -->
<section class="py-5 dbg-3">
  <div class="container dbg-4 pp-signup-container">

    <h2><?= esc($page['signupStrip']['title'] ?? ''); ?></h2>
    <p><?= esc($page['signupStrip']['subtitle'] ?? ''); ?></p>
      
    <form class="d-flex flex-column flex-sm-row gap-2 col-12 col-md-8 col-lg-5" action="#" method="post">
        <input
        type="email"
        class="form-control"
        placeholder="<?= esc($page['signupStrip']['form']['placeholder'] ?? ''); ?>"
        aria-label="<?= esc($page['signupStrip']['form']['placeholder'] ?? 'Email address'); ?>"
        >
        <button class="btn btn-danger" type="submit"><?= esc($page['signupStrip']['form']['buttonLabel'] ?? ''); ?></button>
    </form>

    <p class="mt-3 mb-1"><?= esc($page['signupStrip']['comingSoonBadge'] ?? ''); ?></p>
    <p class="mt-0"><?= esc($page['signupStrip']['comingSoonText'] ?? ''); ?></p>

  </div>
</section>


<!-- ================= FEATURES ================= -->
<section class="py-5 text-center dbg-4">
  <div class="container dbg-5 pp-features-container">

    <h2 class="d-flex align-items-center justify-content-center gap-2">
      <span><?= esc($page['productFeatures']['title'] ?? ''); ?></span>
      <?php if (! empty($page['productFeatures']['icon']['src'])): ?>
        <img
          src="<?= esc(base_url($page['productFeatures']['icon']['src'])); ?>"
          alt="<?= esc($page['productFeatures']['icon']['alt'] ?? ''); ?>"
          class="pp-features-heading-icon"
        >
      <?php else: ?>
        <small><?= esc($page['productFeatures']['badge'] ?? ''); ?></small>
      <?php endif; ?>
    </h2>

    <div class="row mt-4 pp-features-row">
      <?php foreach (($page['productFeatures']['items'] ?? []) as $index => $feature): ?>
        <div class="col-12 col-md-4 mb-3 pp-feature-item <?= $index === 0 ? 'dbg-1' : ($index === 1 ? 'dbg-2' : 'dbg-3'); ?>">
          <?= esc($feature); ?>
        </div>
      <?php endforeach; ?>

    </div>

  </div>
</section>


<!-- ================= DESCRIPTION ================= -->
<section class="py-5 dbg-5">
  <div class="container dbg-1 pp-description-container">
    <?php foreach (($page['descriptionSection']['paragraphs'] ?? []) as $paragraph): ?>
      <p><?= esc($paragraph); ?></p>
    <?php endforeach; ?>

  </div>
</section>


<!-- ================= WHY SECTION ================= -->
<section class="py-5 dbg-1">
  <div class="container dbg-2 pp-why-container">
    <div class="row align-items-center container-1170 pp-why-row">

      <!-- Image -->
      <div class="col-12 col-lg-4 mb-4 mb-lg-0 dbg-3 text-center pp-why-media">
        <?php if (! empty($page['whySection']['image']['src'])): ?>
          <img
            src="<?= esc(base_url($page['whySection']['image']['src'])); ?>"
            alt="<?= esc($page['whySection']['image']['alt'] ?? ''); ?>"
            class="pp-why-image"
          >
        <?php else: ?>
          <?= esc($page['whySection']['imagePlaceholder'] ?? 'IMAGE'); ?>
        <?php endif; ?>
      </div>

      <!-- Content -->
      <div class="col-12 col-lg-8 dbg-4 pp-why-content">
        <h2><?= esc($page['whySection']['title'] ?? ''); ?></h2>
        <?php foreach (($page['whySection']['paragraphs'] ?? []) as $paragraph): ?>
          <p><?= esc($paragraph); ?></p>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</section>


<!-- ================= EARLY ACCESS ================= -->
<section class="py-5 dbg-2">
  <div class="container dbg-3 pp-early-access-container">

    <h2 class="text-center"><?= esc($page['earlyAccess']['title'] ?? ''); ?></h2>
    <p class="text-center"><?= esc($page['earlyAccess']['description'] ?? ''); ?></p>

    <div class="row mt-4 pp-early-access-row">
      <?php foreach (($page['earlyAccess']['cards'] ?? []) as $index => $card): ?>
        <div class="col-12 col-md-4 mb-3 pp-early-access-item <?= $index === 0 ? 'dbg-4' : ($index === 1 ? 'dbg-5' : 'dbg-1'); ?>">
          <div class="p-3 border pp-early-access-card">
            <div class="pp-early-access-card-badge"><?= esc($card['badge'] ?? ''); ?></div>
            <div class="pp-early-access-card-title"><?= esc($card['title'] ?? ''); ?></div>
            <div class="pp-early-access-card-subtitle"><?= esc($card['subtitle'] ?? ''); ?></div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>

  </div>
</section>


<!-- ================= FINAL SIGNUP ================= -->
<section class="py-5 text-center dbg-3">
  <div class="container dbg-4 pp-final-signup-container">

    <h2><?= esc($page['finalSignup']['title'] ?? ''); ?></h2>

    <div class="row justify-content-center mt-3 pp-final-signup-row">
      <div class="col-12 col-md-8 col-lg-6 dbg-5 pp-final-signup-form-wrap">
        <form class="d-flex flex-column flex-sm-row gap-2" action="#" method="post">
          <input
            type="email"
            class="form-control"
            placeholder="<?= esc($page['finalSignup']['form']['placeholder'] ?? ''); ?>"
            aria-label="<?= esc($page['finalSignup']['form']['placeholder'] ?? 'Email address'); ?>"
          >
          <button class="btn btn-danger" type="submit"><?= esc($page['finalSignup']['form']['buttonLabel'] ?? ''); ?></button>
        </form>
      </div>
    </div>

  </div>
</section>


<!-- ================= FOOTER ================= -->
<footer class="py-4 text-center dbg-1">
  <div class="container dbg-2 pp-footer-container">
    <p><?= esc($page['footer']['copyright'] ?? ''); ?></p>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>