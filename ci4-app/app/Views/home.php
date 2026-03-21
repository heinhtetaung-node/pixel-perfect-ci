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
    .dbg-3 { max-width: 1170px; margin: 0 auto; }
    .dbg-5 { max-width: 1170px; margin: 0 auto; }
    .container-1600 { max-width: 1600px; margin: 0 auto; }        
    .container-1170 { max-width: 1170px; margin: 0 auto; }
  </style>
</head>

<body>

<!-- ================= HEADER ================= -->
<header class="dbg-1">
  <nav class="navbar navbar-expand-lg dbg-2 pp-typo-gotham-11-upper">
    <div class="container position-relative dbg-3 container-1600 col-12 pp-header-container">

      <a class="navbar-brand" href="<?= esc($page['header']['brand']['href'] ?? '#'); ?>">
        <?php if (! empty($page['header']['brand']['logo']['src'])): ?>
          <img
            src="<?= esc(base_url($page['header']['brand']['logo']['src'])); ?>"
            alt="<?= esc($page['header']['brand']['logo']['alt'] ?? ''); ?>"
            class="pp-header-logo"
          >
        <?php endif; ?>        
      </a>


      <div class="navbar-collapse dbg-4 pp-header-menu">
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
    <div class="container dbg-3 pp-hero-container">
        <div class="row align-items-center pp-hero-row">

        <!-- Left -->
        <div class="col-12 col-lg-6 mb-4 mb-lg-0 dbg-4 pp-hero-content">
            <div class="pp-product-label">
                <div class="pp-hero-product-row">
                    <?php if (! empty($page['hero']['productIcon']['src'])): ?>
                        <img
                        src="<?= esc(base_url($page['hero']['productIcon']['src'])); ?>"
                        alt="<?= esc($page['hero']['productIcon']['alt'] ?? ''); ?>"
                        class="pp-hero-product-icon"
                        >
                    <?php endif; ?>
                    <span class="pp-hero-product-label-text mt-2">
                    <?= esc($page['hero']['productLabel'] ?? ''); ?>
                    </span>
                </div>
            </div>
            <p class="pp-hero-lead mt-5 mb-4"><?= esc($page['hero']['lead'] ?? ''); ?></p>
            <h1 class="pp-hero-title text-nowrap"><?= esc($page['hero']['title'] ?? ''); ?></h1>
            <h2 class="pp-hero-title pp-hero-sub-title"><?= esc($page['hero']['subTitle'] ?? ''); ?></h2>
            <p class="mt-3 pp-hero-status"><?= esc($page['hero']['status'] ?? ''); ?></p>
        </div>                
    </div>
  </div>
</section>


<!-- ================= SIGNUP STRIP ================= -->
<section class="py-5 pp-signup-container">
  <div class="container dbg-4 container-1170">

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
        <svg width="109" height="15" viewBox="0 0 109 15" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M4.75183 11.84C7.16783 11.84 8.86383 10.592 8.86383 8.36799V8.33599C8.86383 6.38399 7.58383 5.58399 5.31183 4.97599C3.37583 4.46399 2.89583 4.25599 2.89583 3.50399V3.47199C2.89583 2.91199 3.37583 2.49599 4.33583 2.49599C5.29583 2.49599 6.23983 2.91199 7.24783 3.59999L8.52783 1.74399C7.37583 0.831992 6.01583 0.319992 4.36783 0.319992C2.06383 0.319992 0.447828 1.66399 0.447828 3.69599V3.72799C0.447828 5.93599 1.88783 6.59199 4.15983 7.15199C6.03183 7.61599 6.41583 7.95199 6.41583 8.57599V8.60799C6.41583 9.26399 5.82383 9.66399 4.79983 9.66399C3.51983 9.66399 2.47983 9.13599 1.45583 8.30399L-0.00017184 10.048C1.34383 11.264 3.03983 11.84 4.75183 11.84ZM10.7942 2.15999H13.3542V-7.62939e-06H10.7942V2.15999ZM10.8582 11.68H13.2902V3.10399H10.8582V11.68ZM19.4143 14.272C21.0783 14.272 22.2943 13.936 23.1103 13.12C23.8303 12.4 24.1983 11.264 24.1983 9.74399V3.10399H21.7663V4.22399C21.1103 3.50399 20.3263 2.94399 18.9983 2.94399C17.0303 2.94399 15.1903 4.38399 15.1903 6.94399V6.97599C15.1903 9.53599 16.9983 10.976 18.9983 10.976C20.2943 10.976 21.0783 10.464 21.7983 9.58399V9.99999C21.7983 11.536 21.0143 12.336 19.3503 12.336C18.1983 12.336 17.3503 12.048 16.4543 11.552L15.6223 13.376C16.7103 13.952 18.0063 14.272 19.4143 14.272ZM19.7023 8.95999C18.5023 8.95999 17.6223 8.17599 17.6223 6.97599V6.94399C17.6223 5.77599 18.5183 4.95999 19.7023 4.95999C20.9023 4.95999 21.7983 5.77599 21.7983 6.94399V6.97599C21.7983 8.14399 20.9023 8.95999 19.7023 8.95999ZM26.3712 11.68H28.8032V6.89599C28.8032 5.74399 29.3792 5.15199 30.3232 5.15199C31.2672 5.15199 31.7952 5.74399 31.7952 6.89599V11.68H34.2272V6.12799C34.2272 4.14399 33.1712 2.94399 31.3152 2.94399C30.0992 2.94399 29.3632 3.59999 28.8032 4.31999V3.10399H26.3712V11.68ZM43.9848 11.84C45.2008 11.84 45.9368 11.184 46.4968 10.464V11.68H48.9288V3.10399H46.4968V7.88799C46.4968 9.03999 45.9208 9.63199 44.9768 9.63199C44.0328 9.63199 43.5048 9.03999 43.5048 7.88799V3.10399H41.0728V8.65599C41.0728 10.64 42.1288 11.84 43.9848 11.84ZM51.1056 14.24H53.5376V10.56C54.1136 11.248 54.9136 11.84 56.2096 11.84C58.2416 11.84 60.1136 10.272 60.1136 7.40799V7.37599C60.1136 4.51199 58.2096 2.94399 56.2096 2.94399C54.9296 2.94399 54.1296 3.51999 53.5376 4.33599V3.10399H51.1056V14.24ZM55.5856 9.77599C54.4496 9.77599 53.5056 8.83199 53.5056 7.40799V7.37599C53.5056 5.95199 54.4496 5.00799 55.5856 5.00799C56.7216 5.00799 57.6816 5.95199 57.6816 7.37599V7.40799C57.6816 8.84799 56.7216 9.77599 55.5856 9.77599ZM66.6993 11.68H69.1313V6.89599C69.1313 5.74399 69.7073 5.15199 70.6513 5.15199C71.5953 5.15199 72.1233 5.74399 72.1233 6.89599V11.68H74.5553V6.12799C74.5553 4.14399 73.4993 2.94399 71.6433 2.94399C70.4273 2.94399 69.6913 3.59999 69.1313 4.31999V3.10399H66.6993V11.68ZM80.8761 11.872C83.5481 11.872 85.5321 9.87199 85.5321 7.40799V7.37599C85.5321 4.89599 83.5481 2.94399 80.9081 2.94399C78.2361 2.94399 76.2521 4.94399 76.2521 7.40799V7.43999C76.2521 9.91999 78.2361 11.872 80.8761 11.872ZM80.9081 9.77599C79.5641 9.77599 78.6521 8.67199 78.6521 7.40799V7.37599C78.6521 6.09599 79.4841 5.03999 80.8761 5.03999C82.2201 5.03999 83.1321 6.14399 83.1321 7.40799V7.43999C83.1321 8.71999 82.3001 9.77599 80.9081 9.77599ZM88.8228 11.744H90.9988L92.6788 6.47999L94.3268 11.744H96.5188L99.1908 3.10399H96.7748L95.3668 8.31999L93.7348 3.07199H91.6388L90.0228 8.30399L88.6468 3.10399H86.1828L88.8228 11.744ZM108.553 5.56392C108.666 5.67702 108.723 5.81094 108.723 5.96571C108.723 6.12047 108.666 6.2544 108.553 6.36749L104.553 10.3675C104.44 10.4806 104.306 10.5371 104.152 10.5371C103.997 10.5371 103.863 10.4806 103.75 10.3675C103.637 10.2544 103.58 10.1205 103.58 9.96571V1.96571C103.58 1.81094 103.637 1.67702 103.75 1.56392C103.863 1.45083 103.997 1.39428 104.152 1.39428C104.306 1.39428 104.44 1.45083 104.553 1.56392L108.553 5.56392Z" fill="white"/>
        </svg></button>
    </button>
    </form>

    <div class="pp-coming-soon-row">
    <p class="mt-4 mb-1 pp-coming-soon-badge"><?= esc($page['signupStrip']['comingSoonBadge'] ?? ''); ?></p>
    <p class="pp-coming-soon-text text-nowrap md-text-wrap"><?= $page['signupStrip']['comingSoonText'] ?? ''; ?></p>
    </div>
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
    <div class="row align-items-center container-1170 col-12 pp-why-row">

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