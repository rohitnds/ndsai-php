<?php
/**
 * Page: index.php
 * Serves the Home Page of nDimensions AI
 */
$page_title = "nDimensions AI — AI Sales, Operations & SEO Automation";
$page_desc = "We design, build and deploy always-on revenue engines, operations workflows, and programmatic SEO content pipelines.";
$root_prefix = "";

include 'includes/head.php';
include 'includes/header.php';
?>

<main>
  <!-- Home Hero Section -->
  <section id="top" class="bg-forest text-cream position-relative overflow-hidden grain py-5">
    <div class="container max-w-1300 px-4 py-5 position-relative z-3">
      <div class="row align-items-center g-5 pt-4">
        
        <!-- Left copy -->
        <div class="col-lg-7 fade-up">
          <span class="eyebrow text-cream">nDimensions AI Growth Studio</span>
          <h1 class="mt-4 display-3 fw-medium text-cream lh-sm">
            Deploy AI systems that <span class="serif text-lime">run your growth</span> &amp; operations.
          </h1>
          <p class="mt-4 text-cream-muted lead max-w-600" style="font-size: 1.15rem; line-height: 1.6;">
            We design, build and ship custom AI SDRs, automated CRM pipelines, n8n operations engines, and organic SEO content factories. Scale your output, not your overhead.
          </p>
          <div class="mt-4 pt-2 d-flex flex-wrap gap-3">
            <button class="btn-lime">
              Book AI Growth Audit
              <i class="bi bi-arrow-up-right ms-1"></i>
            </button>
            <a href="#services" class="btn-outline-cream text-decoration-none d-inline-flex align-items-center justify-content-center px-4 py-2 rounded-pill">
              See AI Capabilities
            </a>
          </div>
          <!-- Trust Badges -->
          <div class="mt-5 d-flex flex-wrap gap-x-4 gap-y-2 text-cream-muted small">
            <span class="d-flex align-items-center gap-2 me-4">
              <i class="bi bi-check-lg text-lime" style="font-size: 1.1rem;"></i>
              Custom AI SDRs &amp; Agents
            </span>
            <span class="d-flex align-items-center gap-2 me-4">
              <i class="bi bi-check-lg text-lime" style="font-size: 1.1rem;"></i>
              Connected CRM &amp; n8n ops
            </span>
            <span class="d-flex align-items-center gap-2">
              <i class="bi bi-check-lg text-lime" style="font-size: 1.1rem;"></i>
              Owned by you, built in your stack
            </span>
          </div>
        </div>
        
        <!-- Right side visual -->
        <div class="col-lg-5">
          <div class="p-4 p-md-5 rounded-5 tile-forest-glow position-relative overflow-hidden border border-forest-mid" style="min-height: 380px;">
            <div class="position-absolute top-50 start-50 translate-middle w-100 h-100 opacity-25">
              <svg width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <pattern id="grid" width="40" height="40" patternUnits="userSpaceOnUse">
                    <path d="M 40 0 L 0 0 0 40" fill="none" stroke="rgba(239, 232, 220, 0.12)" stroke-width="1"/>
                  </pattern>
                </defs>
                <rect width="100%" height="100%" fill="url(#grid)" />
              </svg>
            </div>
            
            <div class="position-relative z-3">
              <div class="d-flex align-items-center justify-content-between mb-4 border-bottom border-forest-mid pb-3">
                <span class="text-xs text-uppercase tracking-wider text-lime fw-semibold small">Active Systems</span>
                <span class="badge bg-success bg-opacity-25 text-lime border border-success border-opacity-50 px-2.5 py-1" style="font-size: 10px;">Online</span>
              </div>
              <div class="d-flex flex-column gap-3 text-cream-muted small">
                <div class="p-3 rounded-3 bg-forest bg-opacity-50 border border-forest-mid">
                  <div class="d-flex justify-content-between mb-1">
                    <span class="text-cream fw-medium">AI SDR Agent</span>
                    <span class="text-lime">Active</span>
                  </div>
                  <div style="font-size: 0.8rem; line-height: 1.4;">Enriching inbound leads, writing WhatsApp follow-ups, syncing HubSpot.</div>
                </div>
                <div class="p-3 rounded-3 bg-forest bg-opacity-50 border border-forest-mid">
                  <div class="d-flex justify-content-between mb-1">
                    <span class="text-cream fw-medium">n8n Operations Engine</span>
                    <span class="text-lime">14 runs/hr</span>
                  </div>
                  <div style="font-size: 0.8rem; line-height: 1.4;">Parsing invoices, reconciling bills, pushing approvals to Slack channels.</div>
                </div>
                <div class="p-3 rounded-3 bg-forest bg-opacity-50 border border-forest-mid">
                  <div class="d-flex justify-content-between mb-1">
                    <span class="text-cream fw-medium">SEO Publisher Agent</span>
                    <span class="text-lime">2 posts queued</span>
                  </div>
                  <div style="font-size: 0.8rem; line-height: 1.4;">Mapping keywords, drafting articles, scheduling CMS publication.</div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Clients Slider -->
  <section class="bg-cream-soft py-4 px-0">
    <div class="marquee--logos">
      <div class="logo-track" aria-hidden="false">
        <div class="logo-group">
          <div class="logo-item"><img src="<?php echo $root_prefix; ?>ai-logos/antigravity-color.svg" alt="Antigravity" /></div>
          <div class="logo-item"><img src="<?php echo $root_prefix; ?>ai-logos/chatgpt-icon.svg" alt="ChatGPT" /></div>
          <div class="logo-item"><img src="<?php echo $root_prefix; ?>ai-logos/claude-color.svg" alt="Claude" /></div>
          <div class="logo-item"><img src="<?php echo $root_prefix; ?>ai-logos/codex-color.svg" alt="Codex" /></div>
          <div class="logo-item"><img src="<?php echo $root_prefix; ?>ai-logos/google-color.svg" alt="Google" /></div>
          <div class="logo-item"><img src="<?php echo $root_prefix; ?>ai-logos/google-gemini-icon.svg" alt="Gemini" /></div>
          <div class="logo-item"><img src="<?php echo $root_prefix; ?>ai-logos/grok-color.svg" alt="Grok" /></div>
          <div class="logo-item"><img src="<?php echo $root_prefix; ?>ai-logos/perplexity-color.svg" alt="Perplexity" /></div>
        </div>
        <div class="logo-group">
          <div class="logo-item"><img src="<?php echo $root_prefix; ?>ai-logos/antigravity-color.svg" alt="Antigravity" /></div>
          <div class="logo-item"><img src="<?php echo $root_prefix; ?>ai-logos/chatgpt-icon.svg" alt="ChatGPT" /></div>
          <div class="logo-item"><img src="<?php echo $root_prefix; ?>ai-logos/claude-color.svg" alt="Claude" /></div>
          <div class="logo-item"><img src="<?php echo $root_prefix; ?>ai-logos/codex-color.svg" alt="Codex" /></div>
          <div class="logo-item"><img src="<?php echo $root_prefix; ?>ai-logos/google-color.svg" alt="Google" /></div>
          <div class="logo-item"><img src="<?php echo $root_prefix; ?>ai-logos/google-gemini-icon.svg" alt="Gemini" /></div>
          <div class="logo-item"><img src="<?php echo $root_prefix; ?>ai-logos/grok-color.svg" alt="Grok" /></div>
          <div class="logo-item"><img src="<?php echo $root_prefix; ?>ai-logos/perplexity-color.svg" alt="Perplexity" /></div>
        </div>
      </div>
    </div>
  </section>

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
