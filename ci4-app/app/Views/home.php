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
</head>

<body>

<!-- ================= HEADER ================= -->
<header>
  <nav class="navbar navbar-expand-lg">
    <div class="container position-relative container-1600 col-12 pp-header-container">

      <a class="navbar-brand" href="<?= esc($page['header']['brand']['href'] ?? '#'); ?>">
        <?php if (! empty($page['header']['brand']['logo']['src'])): ?>
          <img
            src="<?= esc(base_url($page['header']['brand']['logo']['src'])); ?>"
            alt="<?= esc($page['header']['brand']['logo']['alt'] ?? ''); ?>"
          >
        <?php endif; ?>        
      </a>


      <div class="navbar-collapse pp-header-menu">
        <ul class="navbar-nav flex-row">
          <?php foreach (($page['header']['nav'] ?? []) as $item): ?>
            <?php if (! empty($item['dropdown']) && is_array($item['dropdown'])): ?>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle d-flex align-items-center gap-1"
                  href="<?= esc($item['href'] ?? '#'); ?>"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  <?= esc($item['label'] ?? ''); ?>
                  <?php if (! empty($item['icon']['src'])): ?>
                    <img
                      src="<?= esc(base_url($item['icon']['src'])); ?>"
                      alt="<?= esc($item['icon']['alt'] ?? ''); ?>"
                      class="pp-nav-dropdown-icon"
                    >
                  <?php endif; ?>
                </a>
                <ul class="dropdown-menu">
                  <?php foreach ($item['dropdown'] as $dropdownItem): ?>
                    <li>
                      <a class="dropdown-item" href="<?= esc($dropdownItem['href'] ?? '#'); ?>">
                        <?= esc($dropdownItem['label'] ?? ''); ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </li>
            <?php else: ?>
              <li class="nav-item">
                <a class="nav-link" href="<?= esc($item['href'] ?? '#'); ?>"><?= esc($item['label'] ?? ''); ?></a>
              </li>
            <?php endif; ?>
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
<section class="pp-hero-shell">
  <div class="position-relative container-1600 col-12">
    <div class="container container-1170">
      <div class="row align-items-center">

        <!-- Left -->
        <div class="col-12 col-lg-6 pp-hero-content">
          <div class="pp-product-label">
            <div class="pp-hero-product-row">
              <?php if (! empty($page['hero']['productIcon']['src'])): ?>
                <img
                  src="<?= esc(base_url($page['hero']['productIcon']['src'])); ?>"
                  alt="<?= esc($page['hero']['productIcon']['alt'] ?? ''); ?>"
                >
              <?php endif; ?>
              <span class="pp-hero-product-label-text">
                <?= esc($page['hero']['productLabel'] ?? ''); ?>
              </span>
            </div>
          </div>
          <p class="pp-hero-lead mb-3"><?= esc($page['hero']['lead'] ?? ''); ?></p>
          <h1 class="pp-hero-title text-nowrap"><?= esc($page['hero']['title'] ?? ''); ?></h1>
          <h2 class="pp-hero-title pp-hero-sub-title"><?= esc($page['hero']['subTitle'] ?? ''); ?></h2>
          <p class="mt-2 pp-hero-status"><?= esc($page['hero']['status'] ?? ''); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ================= SIGNUP STRIP ================= -->
<section class="py-5 pp-signup-container">
  <div class="container container-1170">

    <h2 class="pp-signup-title"><?= esc($page['signupStrip']['title'] ?? ''); ?></h2>
    <p class="pp-signup-subtitle mb-4"><?= esc($page['signupStrip']['subtitle'] ?? ''); ?></p>
      
    <form class="d-flex flex-column mt-1 mb-2 flex-sm-row gap-2 col-12 col-md-8 col-lg-5 pp-signup-form" action="#" method="post">
      <input
        type="email"
        class="form-control pp-signup-input"
        placeholder="<?= esc($page['signupStrip']['form']['placeholder'] ?? ''); ?>"
        aria-label="<?= esc($page['signupStrip']['form']['placeholder'] ?? 'Email address'); ?>"
      >
      <button class="btn btn-danger" type="submit">
        <img src="<?= esc(base_url('assets/images/signup-now-label.svg')); ?>" alt="Sign up now" width="109" height="15">
      </button>
    </form>
    <div class="pp-signup-alert mt-3" aria-live="polite"></div>

    <div class="pp-coming-soon-row">
      <p class="mt-4 mb-1 pp-coming-soon-badge"><?= esc($page['signupStrip']['comingSoonBadge'] ?? ''); ?></p>
      <p class="pp-coming-soon-text text-nowrap md-text-wrap"><?= $page['signupStrip']['comingSoonText'] ?? ''; ?></p>
    </div>
  </div>
</section>


<!-- ================= FEATURES ================= -->
<section class="pp-features-section">
  <div class="container pp-features-container container-1170">
    <div class="pp-features-row d-flex justify-content-center">
      <h2 class="pp-features-title"><?= esc($page['productFeatures']['title'] ?? ''); ?></h2>
      <?php if (! empty($page['productFeatures']['icon']['src'])): ?>
        <img
          src="<?= esc(base_url($page['productFeatures']['icon']['src'])); ?>"
          alt="<?= esc($page['productFeatures']['icon']['alt'] ?? ''); ?>"
          class="pp-features-heading-icon"
        />
      <?php endif; ?>
    </div>

    <div class="pp-features-row mt-2">
      <?php foreach (($page['productFeatures']['items'] ?? []) as $index => $feature): ?>
        <?php $featureText = trim(preg_replace('/^#\s*/', '', (string) $feature)); ?>
        <div class="pp-feature-button">
          <span class="pp-feature-button-prefix">#</span>
          <span class="pp-feature-button-text"><?= esc($featureText); ?></span>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ================= DESCRIPTION ================= --> 
<section class="pp-description-container">
  <div class="container container-1170">
    <?php foreach (($page['descriptionSection']['paragraphs'] ?? []) as $paragraph): ?>
      <p><?= $paragraph ?></p>
    <?php endforeach; ?>
  </div>
</section>


<!-- ================= WHY SECTION ================= -->
<section class="pp-why-section">
  <div class="container container-1170">
    <div class="pp-why-layout">
      <?php if (! empty($page['whySection']['image']['src'])): ?>
        <img
          src="<?= esc(base_url($page['whySection']['image']['src'])); ?>"
          alt="<?= esc($page['whySection']['image']['alt'] ?? ''); ?>"
          class="pp-why-image"
        >
      <?php endif; ?>

      <div class="pp-why-text">
        <?php $whyTitle = (string) ($page['whySection']['title'] ?? ''); ?>
        <h2 class="pp-features-title mb-3 mt-3">
          <?= str_replace('C++ PDF Library', '<span class="pp-why-title-highlight">C++ PDF Library</span>', esc($whyTitle)); ?>
        </h2>
        <?php foreach (($page['whySection']['paragraphs'] ?? []) as $paragraph): ?>
          <p class="pp-why-paragraph"><?= esc($paragraph); ?></p>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>


<!-- ================= EARLY ACCESS ================= -->
<section class="pp-early-access-section">
  <div class="container container-1170 pp-early-access-container">
    <?php $earlyAccessTitle = (string) ($page['earlyAccess']['title'] ?? ''); ?>
    <h2 class="text-center pp-early-access-title mt-4">
      <?= str_replace('C++ PDF Library', '<span class="pp-early-access-title-highlight">C++ PDF Library</span>', esc($earlyAccessTitle)); ?>
    </h2>
    <p class="text-center pp-early-access-description"><?= esc($page['earlyAccess']['description'] ?? ''); ?></p>

    <div class="pp-early-access-cards">
      <img src="<?= esc(base_url('assets/images/early-access-card-java.svg')); ?>" alt="Released IronPDF for Java" class="pp-early-access-svg">
      <img src="<?= esc(base_url('assets/images/early-access-card-coming-soon.svg')); ?>" alt="Coming Soon IronPDF for Python" class="pp-early-access-svg">
      <img src="<?= esc(base_url('assets/images/early-access-card-coming-soon.svg')); ?>" alt="Coming Soon IronPDF for NodeJS" class="pp-early-access-svg">
    </div>

  </div>
</section>


<!-- ================= FOOTER ================= -->
<footer class="pp-final-signup-container pt-3">
  <div class="container py-5 text-center">
    <?php $finalSignupTitle = (string) ($page['finalSignup']['title'] ?? ''); ?>
    <h2 class="pp-final-signup-title">
      <?= str_replace('Beta Program', '<span class="pp-final-signup-title-highlight">Beta Program</span>', esc($finalSignupTitle)); ?>
    </h2>

    <div class="row justify-content-center mt-3 mb-2">
      <div class="col-12 pp-final-signup-form-wrap mt-2">
        <form class="pp-signup-form pp-final-signup-form" action="#" method="post">
          <input
            type="email"
            class="form-control pp-signup-input pp-final-signup-input"
            placeholder="<?= esc($page['finalSignup']['form']['placeholder'] ?? ''); ?>"
            aria-label="<?= esc($page['finalSignup']['form']['placeholder'] ?? 'Email address'); ?>"
          >
          <button class="btn btn-danger" type="submit">
            <img src="<?= esc(base_url('assets/images/signup-now-label.svg')); ?>" alt="Sign up now" width="109" height="15">
          </button>
        </form>
        <div class="pp-signup-alert mt-3" aria-live="polite"></div>
      </div>
    </div>
  </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.querySelectorAll('.pp-signup-form').forEach((form) => {
    form.addEventListener('submit', (event) => {
      event.preventDefault();

      const alertHost = form.parentElement.querySelector('.pp-signup-alert');
      if (!alertHost) return;

      alertHost.innerHTML = `
        <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
          Thanks! Your signup request has been received.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      `;
    });
  });
</script>

</body>
</html>