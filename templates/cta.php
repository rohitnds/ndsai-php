<?php
/**
 * nDimensions AI — Shared CTA Section
 */

$cta_title = isset($cta_title) ? $cta_title : 'Ready to automate your <span class="serif text-lime">workflows</span>?';
$cta_desc = isset($cta_desc) ? $cta_desc : 'Start with a free AI Growth Audit. We\'ll map your processes, identify the high-leverage bottlenecks, and show you the exact AI systems that solve them.';
$cta_btn1 = isset($cta_btn1) ? $cta_btn1 : 'Book AI Growth Audit';
$cta_btn2 = isset($cta_btn2) ? $cta_btn2 : 'Explore AI Services';
?>

<section class="bg-forest-deep text-cream py-5">
  <div class="container max-w-1300 px-4 py-5">
    <div class="row g-5 align-items-end">
      <div class="col-lg-8">
        <span class="eyebrow text-cream">Ready to build</span>
        <h2 class="mt-4 display-4 fw-medium text-cream max-w-3xl lh-sm">
          <?php echo $cta_title; ?>
        </h2>
        <p class="mt-4 text-cream-muted lead max-w-600 mb-0" style="line-height: 1.6; font-size: 1.1rem;">
          <?php echo $cta_desc; ?>
        </p>
      </div>
      <div class="col-lg-4">
        <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
          <button class="btn-lime">
            <?php echo $cta_btn1; ?>
            <i class="bi bi-arrow-up-right ms-1"></i>
          </button>
          <a href="<?php echo $root_prefix; ?>services" class="btn-outline-cream text-decoration-none">
            <?php echo $cta_btn2; ?>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
