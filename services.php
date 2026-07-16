<?php
/**
 * Page: services.php
 * Serves the All Services page listing all capabilities
 */
$page_title = "AI Services & Capabilities — nDimensions AI";
$page_desc = "Explore our AI growth automation, n8n operational workflow automation, SEO content automation, custom AI agents, and strategy consulting.";
$root_prefix = "";

// Configure page header
$page_header_title = 'Our AI <span class="serif text-lime">Services</span>';
$page_header_subtitle = 'Explore how we wire custom AI agents, automated CRM pipelines, n8n operations engines, and organic SEO content factories directly into your stack.';
$page_header_category = 'Services';

include 'includes/head.php';
include 'includes/header.php';
?>

<main>
  <!-- Page Header -->
  <?php include 'templates/page-header.php'; ?>

  <!-- Services List Section -->
  <?php include 'templates/services-list.php'; ?>

  <!-- FAQ Section -->
  <?php include 'templates/faq.php'; ?>

  <!-- CTA Section -->
  <?php include 'templates/cta.php'; ?>
</main>

<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>
