<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= esc($page['meta']['title'] ?? 'IronPDF C++ Beta'); ?></title>
  <meta name="description" content="<?= esc($page['meta']['description'] ?? ''); ?>">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    /* Debug colors (optional override for visibility) */
    .dbg-1 { background: rgba(255,0,0,0.1); }
    .dbg-2 { background: rgba(0,255,0,0.1); }
    .dbg-3 { background: rgba(0,0,255,0.1); }
    .dbg-4 { background: rgba(255,255,0,0.1); }
    .dbg-5 { background: rgba(255,0,255,0.1); }
  </style>
</head>

<body>

<!-- ================= HEADER ================= -->
<header class="dbg-1">
  <nav class="navbar navbar-expand-lg dbg-2">
    <div class="container dbg-3">

      <a class="navbar-brand" href="<?= esc($page['header']['brand']['href'] ?? '#'); ?>">
        <?= esc($page['header']['brand']['label'] ?? 'IRONSOFTWARE'); ?>
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
        ☰
      </button>

      <div class="collapse navbar-collapse justify-content-end dbg-4" id="navMenu">
        <ul class="navbar-nav">
          <?php foreach (($page['header']['nav'] ?? []) as $item): ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= esc($item['href'] ?? '#'); ?>"><?= esc($item['label'] ?? ''); ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>
  </nav>
</header>


<!-- ================= HERO ================= -->
<section class="py-5 dbg-2">
  <div class="container dbg-3">
    <div class="row align-items-center">

      <!-- Left -->
      <div class="col-12 col-lg-6 mb-4 mb-lg-0 dbg-4">
        <p><?= esc($page['hero']['productLabel'] ?? ''); ?></p>
        <p><?= esc($page['hero']['lead'] ?? ''); ?></p>
        <h1><?= esc($page['hero']['title'] ?? ''); ?></h1>
        <p><?= esc($page['hero']['status'] ?? ''); ?></p>
      </div>

      <!-- Right -->
      <div class="col-12 col-lg-6 dbg-5 text-center">
        <?= esc($page['hero']['imagePlaceholder'] ?? 'IMAGE'); ?>
      </div>

    </div>
  </div>
</section>


<!-- ================= SIGNUP STRIP ================= -->
<section class="py-5 text-center dbg-3">
  <div class="container dbg-4">

    <h2><?= esc($page['signupStrip']['title'] ?? ''); ?></h2>
    <p><?= esc($page['signupStrip']['subtitle'] ?? ''); ?></p>

    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-6 dbg-5">
        <form class="d-flex flex-column flex-sm-row gap-2" action="#" method="post">
          <input
            type="email"
            class="form-control"
            placeholder="<?= esc($page['signupStrip']['form']['placeholder'] ?? ''); ?>"
            aria-label="<?= esc($page['signupStrip']['form']['placeholder'] ?? 'Email address'); ?>"
          >
          <button class="btn btn-danger" type="submit"><?= esc($page['signupStrip']['form']['buttonLabel'] ?? ''); ?></button>
        </form>
      </div>
    </div>

    <p class="mt-3 mb-1"><?= esc($page['signupStrip']['comingSoonBadge'] ?? ''); ?></p>
    <p class="mt-0"><?= esc($page['signupStrip']['comingSoonText'] ?? ''); ?></p>

  </div>
</section>


<!-- ================= FEATURES ================= -->
<section class="py-5 text-center dbg-4">
  <div class="container dbg-5">

    <h2>
      <?= esc($page['productFeatures']['title'] ?? ''); ?>
      <small><?= esc($page['productFeatures']['badge'] ?? ''); ?></small>
    </h2>

    <div class="row mt-4">
      <?php foreach (($page['productFeatures']['items'] ?? []) as $index => $feature): ?>
        <div class="col-12 col-md-4 mb-3 <?= $index === 0 ? 'dbg-1' : ($index === 1 ? 'dbg-2' : 'dbg-3'); ?>">
          <?= esc($feature); ?>
        </div>
      <?php endforeach; ?>

    </div>

  </div>
</section>


<!-- ================= DESCRIPTION ================= -->
<section class="py-5 dbg-5">
  <div class="container dbg-1">
    <?php foreach (($page['descriptionSection']['paragraphs'] ?? []) as $paragraph): ?>
      <p><?= esc($paragraph); ?></p>
    <?php endforeach; ?>

  </div>
</section>


<!-- ================= WHY SECTION ================= -->
<section class="py-5 dbg-1">
  <div class="container dbg-2">
    <div class="row align-items-center">

      <!-- Image -->
      <div class="col-12 col-lg-4 mb-4 mb-lg-0 dbg-3 text-center">
        <?= esc($page['whySection']['imagePlaceholder'] ?? 'IMAGE'); ?>
      </div>

      <!-- Content -->
      <div class="col-12 col-lg-8 dbg-4">
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
  <div class="container dbg-3">

    <h2 class="text-center"><?= esc($page['earlyAccess']['title'] ?? ''); ?></h2>
    <p class="text-center"><?= esc($page['earlyAccess']['description'] ?? ''); ?></p>

    <div class="row mt-4">
      <?php foreach (($page['earlyAccess']['cards'] ?? []) as $index => $card): ?>
        <div class="col-12 col-md-4 mb-3 <?= $index === 0 ? 'dbg-4' : ($index === 1 ? 'dbg-5' : 'dbg-1'); ?>">
          <div class="p-3 border">
            <div><?= esc($card['badge'] ?? ''); ?></div>
            <div><?= esc($card['title'] ?? ''); ?></div>
            <div><?= esc($card['subtitle'] ?? ''); ?></div>
          </div>
        </div>
      <?php endforeach; ?>

    </div>

  </div>
</section>


<!-- ================= FINAL SIGNUP ================= -->
<section class="py-5 text-center dbg-3">
  <div class="container dbg-4">

    <h2><?= esc($page['finalSignup']['title'] ?? ''); ?></h2>

    <div class="row justify-content-center mt-3">
      <div class="col-12 col-md-8 col-lg-6 dbg-5">
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
  <div class="container dbg-2">
    <p><?= esc($page['footer']['copyright'] ?? ''); ?></p>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>