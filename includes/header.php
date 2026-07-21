<header class="sticky-top bg-forest border-bottom border-forest-mid text-cream w-100" data-testid="nav" style="z-index: 1040;" id="siteHeader">
  <div class="d-flex align-items-center justify-content-between px-4 px-md-5 py-3 mx-auto" style="max-width: 1300px;">
    <!-- Logo -->
    <a data-testid="nav-logo" href="<?php echo $root_prefix ?: './'; ?>" class="d-flex align-items-center gap-2 fw-medium text-cream text-decoration-none" style="font-size: 15px;">
      <span class="rounded-circle inline-block" style="background: var(--lime); box-shadow: 0 0 0 4px rgba(201, 245, 66, .18); width: 10px; height: 10px;"></span>
      <span>
        nDimensions<span class="text-lime">.ai</span>
      </span>
    </a>
    
    <!-- Navigation Links (Desktop > 1130px) -->
    <div class="header-nav-desktop align-items-center gap-4 text-cream-muted" style="font-size: 0.875rem;">
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
    
    <!-- Right Actions & Hamburger Button -->
    <div class="d-flex align-items-center gap-3">
      <div class="header-cta-actions align-items-center gap-3">
        <a href="<?php echo $root_prefix; ?>services" class="d-none d-sm-inline text-sm text-cream-muted hover-text-cream btn-outline-cream text-decoration-none" style="font-size: 0.875rem;">
          Explore AI Services
        </a>
        <button data-testid="nav-cta-audit" class="btn-lime text-sm py-2 px-3" style="font-size: 0.875rem;">
          Book AI Growth Audit
        </button>
      </div>

      <!-- Hamburger Toggle Button (<= 1130px) -->
      <button class="hamburger-toggle d-flex d-lg-none border-0 bg-transparent text-cream p-2" id="hamburgerBtn" aria-label="Toggle navigation" aria-expanded="false">
        <svg class="icon-hamburger" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="3" y1="6" x2="21" y2="6"></line>
          <line x1="3" y1="12" x2="21" y2="12"></line>
          <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
        <svg class="icon-close d-none" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="18" y1="6" x2="6" y2="18"></line>
          <line x1="6" y1="6" x2="18" y2="18"></line>
        </svg>
      </button>
    </div>
  </div>

  <!-- Mobile Navigation Drawer (<= 1130px) -->
  <div class="mobile-nav-menu" id="mobileNavMenu">
    <div class="px-4 py-3 d-flex flex-column gap-3">
      <!-- Mobile AI Services Dropdown / Accordion -->
      <div class="mobile-nav-item">
        <div class="d-flex align-items-center justify-content-between py-2 text-cream hover-text-lime cursor-pointer" id="mobileServicesToggle">
          <span class="fw-medium">AI Services</span>
          <svg class="mobile-chevron" width="14" height="14" viewBox="0 0 12 12" fill="none">
            <path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="mobile-services-sub d-none ps-3 py-2 border-start border-forest-mid flex-column gap-2" id="mobileServicesSub">
          <a href="<?php echo $root_prefix; ?>services/ai-sales-automation" class="text-cream-muted text-decoration-none py-1 hover-text-cream">AI Growth Automation</a>
          <a href="<?php echo $root_prefix; ?>services/ai-business-automation" class="text-cream-muted text-decoration-none py-1 hover-text-cream">AI Business Automation</a>
          <a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation" class="text-cream-muted text-decoration-none py-1 hover-text-cream">AI SEO &amp; Content Automation</a>
          <a href="<?php echo $root_prefix; ?>services/ai-creative-production" class="text-cream-muted text-decoration-none py-1 hover-text-cream">AI Creative Production</a>
        </div>
      </div>

      <?php
      foreach ($nav_links as $link):
        $test_id = 'mobile-nav-' . strtolower(str_replace(' ', '-', $link));
      ?>
        <div data-testid="<?php echo $test_id; ?>" class="py-2 text-cream hover-text-lime cursor-pointer fw-medium">
          <?php echo $link; ?>
        </div>
      <?php endforeach; ?>

      <!-- Mobile Action Buttons (< 425px) -->
      <div class="mobile-cta-actions pt-2 border-top border-forest-mid">
        <a href="<?php echo $root_prefix; ?>services" class="btn-outline-cream text-center py-2 px-2 text-cream-muted text-decoration-none rounded-5 border" style="font-size: 0.8rem; border-color: rgba(239, 232, 220, 0.3) !important;">
          Explore AI Services
        </a>
        <button data-testid="mobile-nav-cta-audit" class="btn-lime text-center py-2 px-2 rounded-5" style="font-size: 0.8rem;">
          Book AI Growth Audit
        </button>
      </div>
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
        <ul class="mega-list">
          <li><a href="<?php echo $root_prefix; ?>services/ai-growth-automation#ai-lead-generation" class="mega-item-simple text-cream-muted hover:text-cream">AI Lead Generation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-growth-automation#ai-lead-qualification" class="mega-item-simple text-cream-muted hover:text-cream">AI Lead Qualification</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-growth-automation#ai-lead-scoring" class="mega-item-simple text-cream-muted hover:text-cream">AI Lead Scoring</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-growth-automation#ai-crm-automation" class="mega-item-simple text-cream-muted hover:text-cream">CRM Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-growth-automation#ai-whatsapp-automation" class="mega-item-simple text-cream-muted hover:text-cream">WhatsApp Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-growth-automation#ai-follow-up-automation" class="mega-item-simple text-cream-muted hover:text-cream">Follow-up Automation</a></li>
        </ul>
      </div>
      
      <!-- Col 2 — AI Business Automation -->
      <div class="mega-col">
        <a
          href="<?php echo $root_prefix; ?>services/ai-business-automation"
          class="mega-col-label mb-2"
          style="background: var(--lime); color: var(--forest);"
        >
          AI Business Automation <span>&rarr;</span>
        </a>
        <ul class="mega-list">
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#business-process-automation" class="mega-item-simple text-cream-muted hover:text-cream">Business Process Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#workflow-automation" class="mega-item-simple text-cream-muted hover:text-cream">Workflow Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#document-automation" class="mega-item-simple text-cream-muted hover:text-cream">Document Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#ai-approval-systems" class="mega-item-simple text-cream-muted hover:text-cream">AI Approval Systems</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#ai-reporting-dashboards" class="mega-item-simple text-cream-muted hover:text-cream">AI Reporting Dashboards</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#n8n-automation" class="mega-item-simple text-cream-muted hover:text-cream">n8n Automation</a></li>
          <!-- <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#hr-automation" class="mega-item-simple text-cream-muted hover:text-cream">HR Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#finance-automation" class="mega-item-simple text-cream-muted hover:text-cream">Finance Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#procurement-automation" class="mega-item-simple text-cream-muted hover:text-cream">Procurement Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#internal-operations-automation" class="mega-item-simple text-cream-muted hover:text-cream">Internal Operations Automation</a></li> -->
          <!-- <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#make-automation" class="mega-item-simple text-cream-muted hover:text-cream">Make Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-business-automation#zapier-automation" class="mega-item-simple text-cream-muted hover:text-cream">Zapier Automation</a></li> -->
        </ul>
      </div>
      
      <!-- Col 3 — AI SEO & Content Automation -->
      <div class="mega-col">
        <a
          href="<?php echo $root_prefix; ?>services/ai-seo-content-automation"
          class="mega-col-label mb-2"
          style="background: var(--lime); color: var(--forest);"
        >
          AI SEO &amp; Content Automation <span>&rarr;</span>
        </a>
        <ul class="mega-list">
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-seo-services" class="mega-item-simple text-cream-muted hover:text-cream">AI SEO Services</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#aeo-services" class="mega-item-simple text-cream-muted hover:text-cream">AEO Services</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#geo-services" class="mega-item-simple text-cream-muted hover:text-cream">GEO Services</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-keyword-research" class="mega-item-simple text-cream-muted hover:text-cream">AI Keyword Research</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-content-strategy" class="mega-item-simple text-cream-muted hover:text-cream">AI Content Strategy</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-content-optimization" class="mega-item-simple text-cream-muted hover:text-cream">AI Content Optimization</a></li>
          <!-- <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-topic-research" class="mega-item-simple text-cream-muted hover:text-cream">AI Topic Research</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-blog-writing" class="mega-item-simple text-cream-muted hover:text-cream">AI Blog Writing</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-landing-page-creation" class="mega-item-simple text-cream-muted hover:text-cream">AI Landing Page Creation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-internal-linking" class="mega-item-simple text-cream-muted hover:text-cream">AI Internal Linking</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-programmatic-seo" class="mega-item-simple text-cream-muted hover:text-cream">AI Programmatic SEO</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-publishing-automation" class="mega-item-simple text-cream-muted hover:text-cream">AI Publishing Automation</a></li>
          <li><a href="<?php echo $root_prefix; ?>services/ai-seo-content-automation#ai-content-audits" class="mega-item-simple text-cream-muted hover:text-cream">AI Content Audits</a></li> -->
        </ul>
      </div>

      <!-- Col 4 — AI Creative Production -->
      <div class="mega-col">
        <a
          href="<?php echo $root_prefix; ?>services/ai-creative-production"
          class="mega-col-label mb-2"
          style="background: var(--lime); color: var(--forest);"
        >
          AI Creative Production <span>&rarr;</span>
        </a>
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
