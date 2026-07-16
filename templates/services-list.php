<?php
/**
 * nDimensions AI — Shared All Services Section
 */
?>
<section id="services" class="bg-cream text-dark py-5 border-top border-cream-line">
  <div class="container max-w-1300 px-4 py-5">
    <div class="text-center mb-5">
      <span class="eyebrow">Our AI Capabilities</span>
      <h2 class="mt-4 display-4 fw-medium text-forest lh-sm">
        AI-powered systems <span class="serif">built to scale</span> your business.
      </h2>
      <p class="mt-4 text-dark-muted lead max-w-600 mx-auto">
        We build, deploy, and wire custom AI systems and automations directly into your stack to drive pipeline growth, clear operations overhead, and automate content production.
      </p>
    </div>

    <!-- Services Columns -->
    <div class="row g-4 mt-2">
      <!-- Pillar 1: AI Growth Automation -->
      <div class="col-lg-4 col-md-6">
        <div class="card-cream p-4 p-md-5 h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="tile-dashboard rounded-4 overflow-hidden mb-4 position-relative" style="height: 180px;">
              <div class="position-absolute start-0 top-0 w-100 h-100 p-4 opacity-90 d-flex align-items-center justify-content-center">
                <!-- SVG Icon or illustration -->
                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#c9f542" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
                </svg>
              </div>
            </div>
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="icon-tile">
                <i class="bi bi-graph-up-arrow" style="font-size: 1.2rem;"></i>
              </div>
              <h3 class="h3 fw-medium text-forest mb-0">Growth Automation</h3>
            </div>
            <p class="text-dark-muted small mb-4" style="line-height: 1.6;">
              Scale outbound prospecting, smart lead scoring, responsive WhatsApp/email nurture loops, and CRM integrations to keep your pipeline warm.
            </p>
          </div>
          <a href="<?php echo $root_prefix; ?>services/ai-sales-automation" class="text-forest fw-semibold small d-inline-flex align-items-center gap-1 mt-auto">
            Explore Sales Systems <i class="bi bi-arrow-up-right"></i>
          </a>
        </div>
      </div>

      <!-- Pillar 2: AI Business Automation -->
      <div class="col-lg-4 col-md-6">
        <div class="card-cream p-4 p-md-5 h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="tile-mint rounded-4 overflow-hidden mb-4 position-relative" style="height: 180px;">
              <div class="position-absolute start-0 top-0 w-100 h-100 p-4 opacity-90 d-flex align-items-center justify-content-center">
                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#0e2a1e" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" />
                  <path d="M12 16V12" />
                  <path d="M8 12h8" />
                </svg>
              </div>
            </div>
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="icon-tile">
                <i class="bi bi-diagram-3" style="font-size: 1.2rem;"></i>
              </div>
              <h3 class="h3 fw-medium text-forest mb-0">Business Automation</h3>
            </div>
            <p class="text-dark-muted small mb-4" style="line-height: 1.6;">
              Streamline internal operations, auto-audit files, reconcile bills, build approvals, and connect internal databases with robust n8n and Make workflows.
            </p>
          </div>
          <span class="text-dark-muted small d-inline-flex align-items-center gap-1 mt-auto opacity-75">
            Operational Engines <i class="bi bi-lock-fill ms-1" style="font-size: 0.8rem;"></i>
          </span>
        </div>
      </div>

      <!-- Pillar 3: AI SEO & Content Automation -->
      <div class="col-lg-4 col-md-6">
        <div class="card-cream p-4 p-md-5 h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="tile-orange rounded-4 overflow-hidden mb-4 position-relative" style="height: 180px;">
              <div class="position-absolute start-0 top-0 w-100 h-100 p-4 opacity-90 d-flex align-items-center justify-content-center">
                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#efe8dc" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                  <polyline points="14 2 14 8 20 8" />
                  <line x1="16" y1="13" x2="8" y2="13" />
                  <line x1="16" y1="17" x2="8" y2="17" />
                  <polyline points="10 9 9 9 8 9" />
                </svg>
              </div>
            </div>
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="icon-tile">
                <i class="bi bi-file-earmark-text" style="font-size: 1.2rem;"></i>
              </div>
              <h3 class="h3 fw-medium text-forest mb-0">SEO &amp; Content</h3>
            </div>
            <p class="text-dark-muted small mb-4" style="line-height: 1.6;">
              Drive organic traffic via programmatic SEO setups, smart keyword mapping, automated blog drafting, CMS publication, and internal link optimization.
            </p>
          </div>
          <span class="text-dark-muted small d-inline-flex align-items-center gap-1 mt-auto opacity-75">
            Content Engines <i class="bi bi-lock-fill ms-1" style="font-size: 0.8rem;"></i>
          </span>
        </div>
      </div>

      <!-- Pillar 4: Custom AI Agents -->
      <div class="col-lg-4 col-md-6">
        <div class="card-cream p-4 p-md-5 h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="tile-cream-warm rounded-4 overflow-hidden mb-4 position-relative" style="height: 180px;">
              <div class="position-absolute start-0 top-0 w-100 h-100 p-4 opacity-90 d-flex align-items-center justify-content-center">
                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#0e2a1e" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
                  <polyline points="3.27 6.96 12 12.01 20.73 6.96" />
                  <line x1="12" y1="22.08" x2="12" y2="12" />
                </svg>
              </div>
            </div>
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="icon-tile">
                <i class="bi bi-cpu" style="font-size: 1.2rem;"></i>
              </div>
              <h3 class="h3 fw-medium text-forest mb-0">Custom AI Agents</h3>
            </div>
            <p class="text-dark-muted small mb-4" style="line-height: 1.6;">
              Design autonomous AI agents to work 24/7. From smart receptionists booking calendars to custom SDRs handling CRM responses, we build tailored bots.
            </p>
          </div>
          <span class="text-dark-muted small d-inline-flex align-items-center gap-1 mt-auto opacity-75">
            Agent Engineering <i class="bi bi-lock-fill ms-1" style="font-size: 0.8rem;"></i>
          </span>
        </div>
      </div>

      <!-- Pillar 5: AI Consulting & Implementation -->
      <div class="col-lg-4 col-md-6">
        <div class="card-cream p-4 p-md-5 h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="tile-forest-glow rounded-4 overflow-hidden mb-4 position-relative" style="height: 180px;">
              <div class="position-absolute start-0 top-0 w-100 h-100 p-4 opacity-90 d-flex align-items-center justify-content-center">
                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#c9f542" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                </svg>
              </div>
            </div>
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="icon-tile">
                <i class="bi bi-shield-check" style="font-size: 1.2rem;"></i>
              </div>
              <h3 class="h3 fw-medium text-forest mb-0">Consulting &amp; Audits</h3>
            </div>
            <p class="text-dark-muted small mb-4" style="line-height: 1.6;">
              Not sure where to start? We map your business workflows, build proof-of-concept validation prototypes, and set up your private enterprise infrastructure.
            </p>
          </div>
          <span class="text-dark-muted small d-inline-flex align-items-center gap-1 mt-auto opacity-75">
            Strategy &amp; Audits <i class="bi bi-lock-fill ms-1" style="font-size: 0.8rem;"></i>
          </span>
        </div>
      </div>

      <!-- Pillar 6: AI Creative Production -->
      <div class="col-lg-4 col-md-6">
        <div class="card-cream p-4 p-md-5 h-100 d-flex flex-column justify-content-between">
          <div>
            <div class="tile-cream-warm rounded-4 overflow-hidden mb-4 position-relative" style="height: 180px;">
              <div class="position-absolute start-0 top-0 w-100 h-100 p-4 opacity-90 d-flex align-items-center justify-content-center">
                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#0e2a1e" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round">
                  <circle cx="12" cy="12" r="10" />
                  <polygon points="10 8 16 12 10 16 10 8" />
                </svg>
              </div>
            </div>
            <div class="d-flex align-items-center gap-3 mb-3">
              <div class="icon-tile">
                <i class="bi bi-palette" style="font-size: 1.2rem;"></i>
              </div>
              <h3 class="h3 fw-medium text-forest mb-0">Creative Production</h3>
            </div>
            <p class="text-dark-muted small mb-4" style="line-height: 1.6;">
              Produce visual content and ad variants dynamically. Automate high-volume image rendering, product catalogs, and programmatic video rendering.
            </p>
          </div>
          <span class="text-dark-muted small d-inline-flex align-items-center gap-1 mt-auto opacity-75">
            Ad Production <i class="bi bi-lock-fill ms-1" style="font-size: 0.8rem;"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>
