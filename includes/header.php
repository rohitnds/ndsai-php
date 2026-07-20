<header class="sticky-top bg-forest border-bottom border-forest-mid text-cream w-100" data-testid="nav" style="z-index: 1040;" id="siteHeader">
  <div class="d-flex align-items-center justify-content-between px-4 px-md-5 py-3 mx-auto" style="max-width: 1300px;">
    <!-- Logo -->
    <a data-testid="nav-logo" href="<?php echo $root_prefix ?: './'; ?>" class="d-flex align-items-center gap-2 fw-medium text-cream text-decoration-none" style="font-size: 15px;">
      <span class="rounded-circle inline-block" style="background: var(--lime); box-shadow: 0 0 0 4px rgba(201, 245, 66, .18); width: 10px; height: 10px;"></span>
      <span>
        nDimensions<span class="text-lime">.ai</span>
      </span>
    </a>
    
    <!-- Navigation Links -->
    <div class="d-none d-lg-flex align-items-center gap-4 text-cream-muted" style="font-size: 0.875rem;">
      <!-- AI Services (Megamenu Trigger) -->
      <span class="nav-item mega-parent dropdown">
        <a
          class="nav-link text-cream-muted hover-text-cream mega-trigger px-2 py-1 fw-normal text-decoration-none"
          href="#"
          data-mega-drop="servicesDrop"
          data-bs-toggle="dropdown"
          aria-expanded="false"
          style="display: flex; align-items: center; gap: 5px;"
        >
          AI Services
          <svg
            class="mega-chevron"
            width="11"
            height="11"
            viewBox="0 0 12 12"
            fill="none"
            aria-hidden="true"
          >
            <path
              d="M2 4l4 4 4-4"
              stroke="currentColor"
              stroke-width="1.6"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </a>
      </span>

      <?php
      $nav_links = ["AI Agents", "Industries", "Use Cases", "Resources", "About"];
      foreach ($nav_links as $link):
        $test_id = 'nav-' . strtolower(str_replace(' ', '-', $link));
      ?>
        <span data-testid="<?php echo $test_id; ?>" class="hover-text-cream cursor-pointer px-2">
          <?php echo $link; ?>
        </span>
      <?php endforeach; ?>
    </div>
    
    <!-- CTA Actions -->
    <div class="d-flex align-items-center gap-3">
      <a href="<?php echo $root_prefix; ?>services" class="d-none d-sm-inline text-sm text-cream-muted hover-text-cream text-decoration-none" style="font-size: 0.875rem;">
        Explore AI Services
      </a>
      <button data-testid="nav-cta-audit" class="btn-lime text-sm py-2 px-3" style="font-size: 0.875rem;">
        Book AI Growth Audit
      </button>
    </div>
  </div>

  <!-- Services Megamenu Dropdown Panel -->
  <div class="mega-drop" id="servicesDrop" aria-hidden="true" style="background: var(--forest-deep);">
    <div class="mega-drop-inner">
      <!-- Col 1 — AI Growth Automation -->
      <div class="mega-col">
        <a
          href="<?php echo $root_prefix; ?>services/ai-sales-automation"
          class="mega-col-label mb-2"
          style="background: var(--lime); color: var(--forest);"
        >
          AI Growth Automation <span>&rarr;</span>
        </a>
        <p class="mega-col-desc mb-3 px-1 text-cream-muted">
          Scale outbound prospecting, email pipelines, and CRM systems to accelerate revenue.
        </p>
        <ul class="mega-list">
          <!-- Newly migrated service highlighted at the top -->
          <li><a href="<?php echo $root_prefix; ?>services/ai-growth-automation" class="mega-item-simple text-cream" style="color: var(--lime) !important; font-weight: 700;">AI Sales Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-growth-automation#ai-lead-generation" class="mega-item-simple text-cream-muted hover:text-cream">AI Lead Generation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-growth-automation#ai-lead-qualification" class="mega-item-simple text-cream-muted hover:text-cream">AI Lead Qualification</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-growth-automation#ai-lead-scoring" class="mega-item-simple text-cream-muted hover:text-cream">AI Lead Scoring</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-growth-automation#ai-crm-automation" class="mega-item-simple text-cream-muted hover:text-cream">AI CRM Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-growth-automation#ai-whatsapp-automation" class="mega-item-simple text-cream-muted hover:text-cream">AI WhatsApp Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-growth-automation#ai-email-automation" class="mega-item-simple text-cream-muted hover:text-cream">AI Email Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-growth-automation#ai-sales-pipeline-automation" class="mega-item-simple text-cream-muted hover:text-cream">AI Sales Pipeline Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-growth-automation#ai-marketing-automation" class="mega-item-simple text-cream-muted hover:text-cream">AI Marketing Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-growth-automation#meta-conversion-api-setup" class="mega-item-simple text-cream-muted hover:text-cream">Meta Conversion API Setup</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-growth-automation#ai-appointment-booking" class="mega-item-simple text-cream-muted hover:text-cream">AI Appointment Booking</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-growth-automation#ai-follow-up-automation" class="mega-item-simple text-cream-muted hover:text-cream">AI Follow-up Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-growth-automation#ai-customer-journey-automation" class="mega-item-simple text-cream-muted hover:text-cream">AI Customer Journey Automation</a></li>
        </ul>
      </div>
      
      <!-- Col 2 — AI Business Automation -->
      <div class="mega-col">
        <a
          href="<?php echo $root_prefix; ?>services/ai-business-automation"
          class="mega-col-label mb-2"
          style="background: rgba(255,255,255,0.06); color: var(--text-cream);"
        >
          AI Business Automation <span>&rarr;</span>
        </a>
        <p class="mega-col-desc mb-3 px-1 text-cream-muted">
          Streamline operations, document auditing, and approval systems with n8n and Make.
        </p>
        <ul class="mega-list">
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#business-process-automation" class="mega-item-simple text-cream-muted hover:text-cream">Business Process Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#workflow-automation" class="mega-item-simple text-cream-muted hover:text-cream">Workflow Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#document-automation" class="mega-item-simple text-cream-muted hover:text-cream">Document Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#ai-approval-systems" class="mega-item-simple text-cream-muted hover:text-cream">AI Approval Systems</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#ai-reporting-dashboards" class="mega-item-simple text-cream-muted hover:text-cream">AI Reporting Dashboards</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#hr-automation" class="mega-item-simple text-cream-muted hover:text-cream">HR Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#finance-automation" class="mega-item-simple text-cream-muted hover:text-cream">Finance Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#procurement-automation" class="mega-item-simple text-cream-muted hover:text-cream">Procurement Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#internal-operations-automation" class="mega-item-simple text-cream-muted hover:text-cream">Internal Operations Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#n8n-automation" class="mega-item-simple text-cream-muted hover:text-cream">n8n Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#make-automation" class="mega-item-simple text-cream-muted hover:text-cream">Make Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#zapier-automation" class="mega-item-simple text-cream-muted hover:text-cream">Zapier Automation</a></li>
        </ul>
      </div>
      
      <!-- Col 3 — AI SEO & Content Automation -->
      <div class="mega-col">
        <a
          href="<?php echo $root_prefix; ?>services/ai-seo-content-automation"
          class="mega-col-label mb-2"
          style="background: var(--forest-deep); color: var(--lime); border: 1px solid rgba(239, 232, 220, 0.15);"
        >
          AI SEO &amp; Content Automation <span>&rarr;</span>
        </a>
        <p class="mega-col-desc mb-3 px-1 text-cream-muted">
          Generate search traffic with keyword clustering, strategic maps, and CMS publishing.
        </p>
        <ul class="mega-list">
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-seo-services" class="mega-item-simple text-cream-muted hover:text-cream">AI SEO Services</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#aeo-services" class="mega-item-simple text-cream-muted hover:text-cream">AEO Services</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#geo-services" class="mega-item-simple text-cream-muted hover:text-cream">GEO Services</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-keyword-research" class="mega-item-simple text-cream-muted hover:text-cream">AI Keyword Research</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-topic-research" class="mega-item-simple text-cream-muted hover:text-cream">AI Topic Research</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-content-strategy" class="mega-item-simple text-cream-muted hover:text-cream">AI Content Strategy</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-blog-writing" class="mega-item-simple text-cream-muted hover:text-cream">AI Blog Writing</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-landing-page-creation" class="mega-item-simple text-cream-muted hover:text-cream">AI Landing Page Creation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-internal-linking" class="mega-item-simple text-cream-muted hover:text-cream">AI Internal Linking</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-content-optimization" class="mega-item-simple text-cream-muted hover:text-cream">AI Content Optimization</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-programmatic-seo" class="mega-item-simple text-cream-muted hover:text-cream">AI Programmatic SEO</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-publishing-automation" class="mega-item-simple text-cream-muted hover:text-cream">AI Publishing Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-content-audits" class="mega-item-simple text-cream-muted hover:text-cream">AI Content Audits</a></li>
        </ul>
      </div>

      <!-- Col 4 — AI Creative Production -->
      <div class="mega-col">
        <a
          href="<?php echo $root_prefix; ?>services/ai-creative-production"
          class="mega-col-label mb-2"
          style="background: rgba(255,255,255,0.06); color: var(--text-cream);"
        >
          AI Creative Production <span>&rarr;</span>
        </a>
        <p class="mega-col-desc mb-3 px-1 text-cream-muted">
          Product visuals, videos, ad creatives and content variations at scale.
        </p>
        <ul class="mega-list">
          <li><a href="https://z91.in/emergents-nds/ai-services/ai-product-photography/" class="mega-item-simple text-cream-muted hover:text-cream">AI Product Photography</a></li>
          <li><a href="https://z91.in/emergents-nds/ai-services/ai-product-photo-editing/" class="mega-item-simple text-cream-muted hover:text-cream">AI Product Photo Editing</a></li>
          <li><a href="https://z91.in/emergents-nds/ai-services/ai-video-generation/" class="mega-item-simple text-cream-muted hover:text-cream">AI Video Generation</a></li>
          <li><a href="https://z91.in/emergents-nds/ai-services/ai-ad-creative-automation/" class="mega-item-simple text-cream-muted hover:text-cream">AI Ad Creative Automation</a></li>
          <li><a href="https://z91.in/emergents-nds/ai-services/ai-visual-content-automation/" class="mega-item-simple text-cream-muted hover:text-cream">AI Visual Content Automation</a></li>
        </ul>
      </div>
    </div>
  </div>
</header>
