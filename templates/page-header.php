<?php
/**
 * nDimensions AI — Shared Page Header Section
 * Used for sub-pages like Services, About, Contact, FAQ, etc.
 */

$page_header_title = isset($page_header_title) ? $page_header_title : 'Our Services';
$page_header_subtitle = isset($page_header_subtitle) ? $page_header_subtitle : 'AI systems built to automate your growth and operations.';
$page_header_category = isset($page_header_category) ? $page_header_category : 'Capabilities';
?>

<section class="bg-forest text-cream position-relative overflow-hidden grain py-5 border-bottom border-forest-mid">
  <!-- Grid background decoration -->
  <div class="position-absolute top-50 start-50 translate-middle w-100 h-100 opacity-10" style="pointer-events: none;">
    <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
      <defs>
        <pattern id="header-grid" width="30" height="30" patternUnits="userSpaceOnUse">
          <path d="M 30 0 L 0 0 0 30" fill="none" stroke="rgba(239, 232, 220, 0.15)" stroke-width="1"/>
        </pattern>
      </defs>
      <rect width="100%" height="100%" fill="url(#header-grid)" />
    </svg>
  </div>
  
  <div class="container max-w-1300 px-4 py-5 position-relative z-3">
    <div class="row align-items-center">
      <div class="col-lg-8 fade-up">
        <!-- Breadcrumb / category pill -->
        <span class="eyebrow text-cream"><?php echo htmlspecialchars($page_header_category); ?></span>
        <h1 class="mt-4 display-4 fw-medium text-cream lh-sm">
          <?php echo $page_header_title; ?>
        </h1>
        <p class="mt-3 text-cream-muted lead mb-0 max-w-600" style="font-size: 1.1rem; line-height: 1.6;">
          <?php echo htmlspecialchars($page_header_subtitle); ?>
        </p>
      </div>
    </div>
  </div>
</section>
