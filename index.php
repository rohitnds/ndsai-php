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

<main class="hero-wrapper">
  
  <!-- Custom Scoped Style for Hero section -->
  <style>
  .pulse-green {
    display: inline-block;
    width: 8px;
    height: 8px;
    background-color: #c9f542;
    border-radius: 50%;
    box-shadow: 0 0 0 0 rgba(201, 245, 66, 0.7);
    animation: pulse-ring 1.6s infinite;
    vertical-align: middle;
  }
  @keyframes pulse-ring {
    0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(201, 245, 66, 0.7); }
    70% { transform: scale(1); box-shadow: 0 0 0 8px rgba(201, 245, 66, 0); }
    100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(201, 245, 66, 0); }
  }

  .hero-bento-card {
    position: relative;
    display: flex;
    align-items: flex-end;
    border-radius: 18px;
    overflow: hidden;
    background-size: cover;
    background-position: center;
    isolation: isolate;
    transition: transform 0.35s cubic-bezier(0.16,1,0.3,1);
  }
  .hero-bento-card::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(7,26,18,0) 40%, rgba(7,26,18,0.85) 100%);
    z-index: 1;
  }
  .hero-bento-card:hover { transform: translateY(-4px); }
  .hero-bento-card-body { position: relative; z-index: 2; padding: 16px 18px; }
  .hero-bento-label {
    display: block;
    font-family: var(--mono-global);
    font-size: 0.66rem;
    font-weight: 600;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: rgba(239,232,220,0.75);
    margin-bottom: 4px;
  }
  .hero-bento-title {
    font-family: "Instrument Serif", "Fraunces", serif;
    font-style: italic;
    font-weight: 400;
    font-size: 1.35rem;
    line-height: 1.15;
    color: var(--text-cream);
    margin: 0;
  }
  .hero-bento-h-sm { height: 200px; }
  .hero-bento-h-md { height: 260px; }
  .hero-bento-h-lg { height: 340px; }
  

  .service-icon-tile {
  width: 48px;
  height: 48px;
  border-radius: 12px;
  background: var(--forest);
  color: var(--lime);
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 1.15rem;
  flex-shrink: 0;
  transition: background 0.25s ease, color 0.25s ease;
}
.service-card {
  background: var(--cream-soft);
  border: 1px solid var(--cream-line);
  border-radius: 18px;
  padding: 1rem;
  height: 100%;
  transition: transform 0.25s ease, box-shadow 0.25s ease, border-color 0.25s ease, background 0.25s ease;
}
.service-card:hover {
  transform: translateY(-3px);
  background: var(--forest);
  border-color: var(--forest);
  box-shadow: 0 16px 32px -18px rgba(14, 42, 30, 0.35);
}
.service-card:hover .service-icon-tile {
  background: var(--lime);
  color: var(--forest);
}
.service-card-label {
  margin-top: 1.5rem;
  margin-bottom: 0;
  font-size: 1rem;
  font-weight: 600;
  color: var(--text-dark);
  letter-spacing: -0.01em;
  transition: color 0.25s ease;
}
.service-card:hover .service-card-label {
  color: var(--text-cream);
}
.btn-forest-pill {
  display: inline-flex;
  align-items: center;
  gap: 0.55rem;
  padding: 0.85rem 1.5rem;
  border-radius: 999px;
  background: var(--forest);
  color: var(--text-cream);
  font-weight: 600;
  font-size: 0.95rem;
  border: 0;
  text-decoration: none;
  transition: background 0.2s ease, transform 0.2s ease;
}
.btn-forest-pill:hover {
  background: var(--forest-deep);
  transform: translateY(-1px);
  color: var(--text-cream);
}

.finder-pill {
  
}

.finder-pill:hover,
.finder-pill.active {
  background-color: var(--forest);
  border-color: var(--forest) !important;
  color: var(--lime) !important;
}
.finder-item-card {
  background: rgba(239, 232, 220, 0.05);
  border-color: rgba(239, 232, 220, 0.12) !important;
}

.work-img { transition: transform 0.5s cubic-bezier(0.16,1,0.3,1); }
.work-img-wrap:hover .work-img { transform: scale(1.06); }

.stat-number { font-size: clamp(3.5rem, 6vw, 5.5rem); line-height: 1; font-weight: bold;}
.stat-suffix { font-size: 0.5em; }

.story-card {
  background: radial-gradient(circle at 80% 15%, rgba(201,245,66,0.08), transparent 55%), var(--forest-deep);
  border: 1px solid rgba(239, 232, 220, 0.1);
  border-radius: 20px;
  padding: 4rem;
  display: block;
  text-decoration: none;
  transition: transform 0.3s ease, border-color 0.3s ease;
}
.story-card:hover {
  transform: translateY(-4px);
  border-color: rgba(201, 245, 66, 0.3);
}

.why-number { font-size: 4rem; line-height: 1; font-weight:bold;}

@media (max-width: 767.98px) {
    .hero-bento-h-sm, .hero-bento-h-md, .hero-bento-h-lg { height: 260px; }

    .story-card {
      padding: 2rem;
    }
  }
  </style>

  <section id="top" class="bg-forest text-cream position-relative grain py-5 py-lg-6">

  <!-- Glow blobs now clipped by their own wrapper, not the whole section -->
  <div class="position-absolute top-0 start-0 w-100 h-100 overflow-hidden" style="z-index: 1;">
    <div class="hero-glow-blob-1"></div>
    <div class="hero-glow-blob-2"></div>
  </div>

  <div class="container max-w-1300 px-4 py-4 py-lg-5 position-relative z-3">
    <div class="row g-5 align-items-start">

      <!-- ===== LEFT: Copy (col-lg-5) ===== -->
      <div class="col-lg-5 sticky-lg-top" style="top: 100px;">
        <div class="eyebrow text-white mb-3">AI Growth Studio</div>

        <h1 class="display-3 fw-medium text-cream lh-sm mb-4">
          Your <span class="serif text-lime">growth team's</span> AI growth team
        </h1>

        <p class="text-cream-muted lead max-w-600 mb-4" style="font-size:1.1rem; line-height:1.65;">
          Turn scattered AI experiments into connected growth workflows. We build AI-powered systems for lead generation, WhatsApp, customer support, SEO, content, Shopify marketing, creative production and business automation — designed to plug into the tools you already use.
        </p>

        <div class="d-flex flex-wrap gap-3">
          <a href="#contact" class="btn-lime glowing-btn-lime text-decoration-none">
            Book AI Growth Audit
            <i class="bi bi-arrow-up-right ms-1"></i>
          </a>
          <a href="#services" class="btn-outline-cream text-decoration-none">
            Explore AI Services
          </a>
        </div>
      </div>

      <!-- ===== RIGHT: 9-image bento grid (col-lg-7) ===== -->
      <div class="col-lg-7">
        <div class="row g-3 g-md-4">

          <!-- Column 1 -->
          <div class="col-12 col-md-4 d-flex flex-column gap-3 gap-md-4">
            <div class="hero-bento-card hero-bento-h-sm" style="background-image:url('assets/images/hero-laptop-mint.png');">
              <div class="hero-bento-card-body">
                <span class="hero-bento-label">Business</span>
                <p class="hero-bento-title">AI Analytics</p>
              </div>
            </div>
            <div class="hero-bento-card hero-bento-h-lg" style="background-image:url('assets/images/hero-phone-orange.png');">
              <div class="hero-bento-card-body">
                <span class="hero-bento-label">WhatsApp</span>
                <p class="hero-bento-title">Enquiry Flow</p>
              </div>
            </div>
            <div class="hero-bento-card hero-bento-h-md" style="background-image:url('assets/images/hero-box-warm.png');">
              <div class="hero-bento-card-body">
                <span class="hero-bento-label">Ecommerce</span>
                <p class="hero-bento-title">Shopify Marketing</p>
              </div>
            </div>
          </div>

          <!-- Column 2 -->
          <div class="col-12 col-md-4 d-flex flex-column gap-3 gap-md-4">
            <div class="hero-bento-card hero-bento-h-sm" style="background-image:url('assets/images/hero-network-sphere.png');">
              <div class="hero-bento-card-body">
                <span class="hero-bento-label">Support</span>
                <p class="hero-bento-title">AI Agents</p>
              </div>
            </div>
            <div class="hero-bento-card hero-bento-h-md" style="background-image:url('assets/images/hero-envelopes.png');">
              <div class="hero-bento-card-body">
                <span class="hero-bento-label">Automation</span>
                <p class="hero-bento-title">Email Automation</p>
              </div>
            </div>
            <div class="hero-bento-card hero-bento-h-lg" style="background-image:url('assets/images/hero-stack-cream.png');">
              <div class="hero-bento-card-body">
                <span class="hero-bento-label">SEO &amp; Content</span>
                <p class="hero-bento-title">Content Engine</p>
              </div>
            </div>
          </div>

          <!-- Column 3 -->
          <div class="col-12 col-md-4 d-flex flex-column gap-3 gap-md-4">
            <div class="hero-bento-card hero-bento-h-sm" style="background-image:url('assets/images/hero-blob-mint.png');">
              <div class="hero-bento-card-body">
                <span class="hero-bento-label">Design</span>
                <p class="hero-bento-title">Creative AI</p>
              </div>
            </div>
            <div class="hero-bento-card hero-bento-h-md" style="background-image:url('assets/images/hero-laptop-blue.png');">
              <div class="hero-bento-card-body">
                <span class="hero-bento-label">Sales</span>
                <p class="hero-bento-title">CRM Automation</p>
              </div>
            </div>
            <div class="hero-bento-card hero-bento-h-lg" style="background-image:url('assets/images/hero-ai-dashboard.png');">
              <div class="hero-bento-card-body">
                <span class="hero-bento-label">Analytics</span>
                <p class="hero-bento-title">Meta CAPI</p>
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<section id="services" class="bg-cream py-5 py-lg-6">
  <div class="container max-w-1300 px-4 py-4 py-lg-5">

    <!-- Heading -->
    <div class="text-center mx-auto mb-5" style="max-width: 950px;">
      <div class="eyebrow justify-content-center text-dark-muted mb-3">Our Services</div>
      <h2 class="display-3 fw-medium text-dark lh-sm mb-0">
        One connected engine. <span class="serif">20+</span>
        <span class="serif">AI systems.</span> Built for how your
        <span class="serif">business actually runs.</span>
      </h2>
    </div>

    <!-- Services Grid -->
    <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 g-3 g-lg-4">

      <div class="col">
        <div class="service-card">
          <div class="service-icon-tile"><i class="bi bi-lightning-fill"></i></div>
          <p class="service-card-label">Lead Generation</p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="service-icon-tile"><i class="bi bi-stars"></i></div>
          <p class="service-card-label">Lead Nurturing</p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="service-icon-tile"><i class="bi bi-bar-chart-fill"></i></div>
          <p class="service-card-label">Lead Scoring</p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="service-icon-tile"><i class="bi bi-chat-dots-fill"></i></div>
          <p class="service-card-label">WhatsApp Automation</p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="service-icon-tile"><i class="bi bi-database-fill"></i></div>
          <p class="service-card-label">CRM Automation</p>
        </div>
      </div>

      <div class="col">
        <div class="service-card">
          <div class="service-icon-tile"><i class="bi bi-graph-up-arrow"></i></div>
          <p class="service-card-label">Meta CAPI</p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="service-icon-tile"><i class="bi bi-diagram-3-fill"></i></div>
          <p class="service-card-label">Business Automation</p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="service-icon-tile"><i class="bi bi-file-earmark-text-fill"></i></div>
          <p class="service-card-label">Document Automation</p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="service-icon-tile"><i class="bi bi-envelope-fill"></i></div>
          <p class="service-card-label">Email Automation</p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="service-icon-tile"><i class="bi bi-search"></i></div>
          <p class="service-card-label">AI SEO</p>
        </div>
      </div>

      <div class="col">
        <div class="service-card">
          <div class="service-icon-tile"><i class="bi bi-compass-fill"></i></div>
          <p class="service-card-label">AEO / GEO</p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="service-icon-tile"><i class="bi bi-magic"></i></div>
          <p class="service-card-label">Content Automation</p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="service-icon-tile"><i class="bi bi-camera-fill"></i></div>
          <p class="service-card-label">Product Photography</p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="service-icon-tile"><i class="bi bi-camera-reels-fill"></i></div>
          <p class="service-card-label">AI Video Generation</p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="service-icon-tile"><i class="bi bi-robot"></i></div>
          <p class="service-card-label">Custom AI Agents</p>
        </div>
      </div>

      <div class="col">
        <div class="service-card">
          <div class="service-icon-tile"><i class="bi bi-people-fill"></i></div>
          <p class="service-card-label">Support Agents</p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="service-icon-tile"><i class="bi bi-telephone-fill"></i></div>
          <p class="service-card-label">Voice Agents</p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="service-icon-tile"><i class="bi bi-cpu-fill"></i></div>
          <p class="service-card-label">Knowledge Agents</p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="service-icon-tile"><i class="bi bi-puzzle-fill"></i></div>
          <p class="service-card-label">MCP Development</p>
        </div>
      </div>
      <div class="col">
        <div class="service-card">
          <div class="service-icon-tile"><i class="bi bi-shop"></i></div>
          <p class="service-card-label">Shopify AI Marketing</p>
        </div>
      </div>

    </div>

    <!-- CTA -->
    <div class="text-center mt-5">
      <a href="/ai-services" class="btn-forest-pill">
        Explore all AI services
        <i class="bi bi-arrow-up-right"></i>
      </a>
    </div>

  </div>
</section>

<section id="service-finder" class="bg-cream py-5 py-lg-6">
  <div class="container max-w-1300 px-4 py-4 py-lg-5">
    <div class="row g-5 align-items-stretch">

      <!-- ===== LEFT: Copy + Pills (col-lg-5) ===== -->
      <div class="col-lg-6">
        <div class="eyebrow text-dark-muted mb-3">Interactive &middot; Service Finder</div>

        <h2 class="display-4 fw-bold text-dark lh-sm mb-4">
          Not sure where to start?
          <span class="serif">Choose your business problem.</span>
        </h2>

        <p class="text-dark-muted mb-4">
          Pick what you want to fix. We'll instantly recommend the AI systems that map to real outcomes — not features.
        </p>

        <div class="flex flex-wrap g-3" id="finderPills">
            <button type="button" class="finder-pill mt-3 active bg-cream-soft border border-cream-line text-dark fw-normal rounded-pill px-4 py-2">
              I want better leads
</button>
            <button type="button" class="finder-pill mt-3  bg-cream-soft border border-cream-line text-dark fw-normal rounded-pill px-4 py-2">
              I want faster follow-ups
            </button>
          
            <button type="button" class="finder-pill mt-3  bg-cream-soft border border-cream-line text-dark fw-normal rounded-pill px-4 py-2">
              I want to automate WhatsApp
            </button>
          
            <button type="button" class="finder-pill mt-3  bg-cream-soft border border-cream-line text-dark fw-normal rounded-pill px-4 py-2">
              I want AI customer support
            </button>
            <button type="button" class="finder-pill mt-3  bg-cream-soft border border-cream-line text-dark fw-normal rounded-pill px-4 py-2">
              I want better SEO/content output
            </button>
            <button type="button" class="finder-pill mt-3  bg-cream-soft border border-cream-line text-dark fw-normal rounded-pill px-4 py-2">
              I want to automate internal work
            </button>
            <button type="button" class="finder-pill mt-3  bg-cream-soft border border-cream-line text-dark fw-normal rounded-pill px-4 py-2">
              I want AI product visuals
            </button>
            <button type="button" class="text-start finder-pill mt-3  bg-cream-soft border border-cream-line text-dark fw-normal rounded-pill px-4 py-2">
              I have an AI prototype to make production-ready
            </button>
        </div>
      </div><!-- ← this closing tag was missing, now closes col-lg-5 -->

      <!-- ===== RIGHT: Recommendation Panel (col-lg-7) ===== -->
      <div class="col-lg-6">
        <div class="bg-forest rounded-4 p-4 p-lg-5">
          <div class="eyebrow text-lime mb-2">Recommended for you</div>
          <h3 class="text-cream fw-bold display-6 mb-4" id="finderTitle">I want better leads</h3>

          <div class="row g-3 mb-4" id="finderItems"></div>

          <div class="d-flex flex-wrap gap-3">
            <a href="#contact" class="btn-lime glowing-btn-lime text-decoration-none">
              Book AI Growth Audit
            </a>
            <a href="#services" class="btn-outline-cream text-decoration-none">
              Explore AI Services
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const finderData = {
    "I want better leads": ["AI Lead Generation Automation", "AI Lead Nurturing Workflow", "CRM Automation", "Lead Scoring Automation", "Meta CAPI Integration"],
    "I want faster follow-ups": ["AI Lead Nurturing Workflow", "WhatsApp Automation", "Email Automation", "CRM Automation", "Voice Agents"],
    "I want to automate WhatsApp": ["WhatsApp Automation", "AI Lead Nurturing Workflow", "Support Agents", "CRM Automation"],
    "I want AI customer support": ["Support Agents", "Knowledge Agents", "Voice Agents", "WhatsApp Automation"],
    "I want better SEO/content output": ["AI SEO", "AEO / GEO", "Content Automation", "Document Automation"],
    "I want to automate internal work": ["Business Automation", "Document Automation", "Custom AI Agents", "MCP Development"],
    "I want AI product visuals": ["Product Photography", "AI Video Generation", "Shopify AI Marketing"],
    "I have an AI prototype to make production-ready": ["Custom AI Agents", "MCP Development", "Business Automation", "CRM Automation"]
  };

  const titleEl = document.getElementById('finderTitle');
  const itemsEl = document.getElementById('finderItems');
  const pills = document.querySelectorAll('#finderPills .finder-pill');

  function renderFinder(label) {
    titleEl.textContent = label;
    itemsEl.innerHTML = '';
    finderData[label].forEach(item => {
      itemsEl.insertAdjacentHTML('beforeend', `
        <div class="col-12 col-sm-6">
          <div class="finder-item-card d-flex align-items-center justify-content-between border rounded-3 p-3 h-100">
            <span class="text-cream fw-medium">
              <i class="bi bi-check-lg text-lime me-2"></i>${item}
            </span>
            <i class="bi bi-arrow-up-right text-white-50"></i>
          </div>
        </div>
      `);
    });
  }

  pills.forEach(pill => {
    pill.addEventListener('click', () => {
      pills.forEach(p => p.classList.remove('active'));
      pill.classList.add('active');
      renderFinder(pill.textContent.trim());
    });
  });

  renderFinder("I want better leads");
});
</script>

<section id="work" class="bg-cream py-5 py-lg-6">
  <div class="container max-w-1300 px-4 py-4 py-lg-5">

    <!-- Header row -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-9">
        <h2 class="display-4 fw-bold text-dark lh-sm mb-0">
          See how <span class="serif">top brands</span> use <br>nDimensions
        </h2>
      </div>
      <div class="col-lg-3 text-lg-end mt-3 mt-lg-0">
        <a href="/work" class="btn-outline-dark text-decoration-none">
          Explore all our work
          <i class="bi bi-arrow-up-right"></i>
        </a>
      </div>
    </div>

    <!-- Cards grid -->
    <div class="row row-cols-1 row-cols-md-3 g-4 g-lg-5">

      <div class="col">
        <a href="/work/shopify-brand" class="ratio ratio-4x3 rounded-4 overflow-hidden d-block work-img-wrap">
          <img src="assets/images/brand-shopify.png" class="object-fit-cover work-img" alt="Leading Shopify brand">
        </a>
        <h3 class="serif fs-3 text-dark mt-3 mb-1 fw-semibold">Leading Shopify brand</h3>
        <p class="text-dark-muted mb-0">Ecommerce Automation, Meta CAPI, AI Product Visuals</p>
      </div>

      <div class="col">
        <a href="/work/boutique-hotel" class="ratio ratio-4x3 rounded-4 overflow-hidden d-block work-img-wrap">
          <img src="assets/images/brand-hospitality.png" class="object-fit-cover work-img" alt="Boutique hotel group">
        </a>
        <h3 class="serif fs-3 text-dark mt-3 mb-1 fw-semibold">Boutique hotel group</h3>
        <p class="text-dark-muted mb-0">WhatsApp Booking, Guest Support Agent</p>
      </div>

      <div class="col">
        <a href="/work/healthcare-network" class="ratio ratio-4x3 rounded-4 overflow-hidden d-block work-img-wrap">
          <img src="assets/images/brand-healthcare.png" class="object-fit-cover work-img" alt="Healthcare network">
        </a>
        <h3 class="serif fs-3 text-dark mt-3 mb-1 fw-semibold">Healthcare network</h3>
        <p class="text-dark-muted mb-0">Appointment Automation, Patient FAQ Agent</p>
      </div>

      <div class="col">
        <a href="/work/b2b-saas" class="ratio ratio-4x3 rounded-4 overflow-hidden d-block work-img-wrap">
          <img src="assets/images/brand-b2b.png" class="object-fit-cover work-img" alt="B2B SaaS platform">
        </a>
        <h3 class="serif fs-3 text-dark mt-3 mb-1 fw-semibold">B2B SaaS platform</h3>
        <p class="text-dark-muted mb-0">Lead Scoring, CRM Automation, Sales Agent</p>
      </div>

      <div class="col">
        <a href="/work/real-estate" class="ratio ratio-4x3 rounded-4 overflow-hidden d-block work-img-wrap">
          <img src="assets/images/brand-realestate.png" class="object-fit-cover work-img" alt="Real estate developer">
        </a>
        <h3 class="serif fs-3 text-dark mt-3 mb-1 fw-semibold">Real estate developer</h3>
        <p class="text-dark-muted mb-0">Property Enquiry Automation, WhatsApp Follow-ups</p>
      </div>

      <div class="col">
        <a href="/work/online-learning" class="ratio ratio-4x3 rounded-4 overflow-hidden d-block work-img-wrap">
          <img src="assets/images/brand-education.png" class="object-fit-cover work-img" alt="Online learning platform">
        </a>
        <h3 class="serif fs-3 text-dark mt-3 mb-1 fw-semibold">Online learning platform</h3>
        <p class="text-dark-muted mb-0">Content Automation, Lead Nurturing</p>
      </div>

    </div>

  </div>
</section>
  
<section id="stats" class="bg-cream py-5 py-lg-6">
  <div class="container max-w-1300 px-4 py-4 py-lg-5">

    <!-- Header -->
    <div class="text-center mx-auto mb-5" style="max-width: 900px;">
      <div class="eyebrow justify-content-center text-dark-muted mb-3">Success in Numbers</div>
      <h2 class="display-3 fw-bold text-dark lh-sm mb-0">
        The best return on <span class="serif">your investment</span>
      </h2>
    </div>

    <!-- Stats grid -->
    <div class="row row-cols-1 row-cols-md-2 gx-5 gy-5">

      <div class="col">
        <div class="d-flex justify-content-between align-items-center gap-4 pb-4 border-bottom border-black">
          <div style="max-width: 320px;">
            <p class="text-dark mb-2">Startups, growing businesses and enterprises trust nDimensions to deliver AI-powered growth systems.</p>
            <p class="text-dark-muted small mb-0">17+ years of digital, branding and marketing experience.</p>
          </div>
          <div class="serif stat-number text-dark flex-shrink-0">300<span class="stat-suffix">+</span></div>
        </div>
      </div>

      <div class="col">
        <div class="d-flex justify-content-between align-items-center gap-4 pb-4 border-bottom border-black">
          <div style="max-width: 320px;">
            <p class="text-dark mb-2">AI-powered projects and creative assets shipped across marketing, sales, support and operations workflows.</p>
            <p class="text-dark-muted small mb-0">Across ecommerce, hospitality, healthcare, B2B and services.</p>
          </div>
          <div class="serif stat-number text-dark flex-shrink-0">5k<span class="stat-suffix">+</span></div>
        </div>
      </div>

      <div class="col">
        <div class="d-flex justify-content-between align-items-center gap-4 pb-4 border-bottom border-black">
          <div style="max-width: 320px;">
            <p class="text-dark mb-2">Brands see up to 60% more efficient workflows using AI vs. traditional agency processes.</p>
            <p class="text-dark-muted small mb-0">Read more in our AI Growth Report.</p>
          </div>
          <div class="serif stat-number text-dark flex-shrink-0">60<span class="stat-suffix">%</span></div>
        </div>
      </div>

      <div class="col">
        <div class="d-flex justify-content-between align-items-center gap-4 pb-4 border-bottom border-black">
          <div style="max-width: 320px;">
            <p class="text-dark mb-2">Brands ship AI systems roughly twice as fast from brief to production compared with agencies.</p>
            <p class="text-dark-muted small mb-0">Based on nDimensions AI projects delivered in 2025.</p>
          </div>
          <div class="serif stat-number text-dark flex-shrink-0">2<span class="stat-suffix">x</span></div>
        </div>
      </div>

    </div>

  </div>
</section>

<section class="py-5 py-lg-6" style="background: #0b1f18;">
  <div class="container max-w-1300 px-4 py-4 py-lg-5">
    <div class="row row-cols-1 row-cols-md-2 g-4">

      <div class="col">
        <a href="/stories/enterprise-retail" class="story-card h-100 d-flex flex-column">
          <span class="badge rounded-pill border border-cream-line text-cream-muted fw-semibold px-3 py-2 mb-4 align-self-start" style="font-size: 0.68rem; letter-spacing: 0.08em;">
            CUSTOMER STORY
          </span>

          <p class="text-cream mb-4 flex-grow-1 fs-3">
            <span class="serif fw-semibold">Enterprise retail brand</span> — "A partner that made AI actually work for our marketing team." How a leading retail brand rebuilt their lead engine with nDimensions.
          </p>

          <div class="d-flex justify-content-between align-items-center">
            <span class="text-lime fw-semibold">
              Read the story <i class="bi bi-arrow-up-right"></i>
            </span>
            <span class="badge rounded-pill border border-cream-line text-cream-muted fw-semibold px-3 py-2" style="font-size: 0.68rem; letter-spacing: 0.08em;">
              RETAIL
            </span>
          </div>
        </a>
      </div>

      <div class="col">
        <a href="/stories/global-saas" class="story-card h-100 d-flex flex-column">
          <span class="badge rounded-pill border border-cream-line text-cream-muted fw-semibold px-3 py-2 mb-4 align-self-start" style="font-size: 0.68rem; letter-spacing: 0.08em;">
            CUSTOMER STORY
          </span>

          <p class="text-cream mb-4 flex-grow-1 fs-3">
            <span class="serif fw-semibold">Global SaaS platform</span> — "Bringing an AI perspective": Why a global SaaS platform chose nDimensions as their partner for the AI journey.
          </p>

          <div class="d-flex justify-content-between align-items-center">
            <span class="text-lime fw-semibold">
              Read the story <i class="bi bi-arrow-up-right"></i>
            </span>
            <span class="badge rounded-pill border border-cream-line text-cream-muted fw-semibold px-3 py-2" style="font-size: 0.68rem; letter-spacing: 0.08em;">
              SAAS
            </span>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>

<section class="py-5 py-lg-6"  style="background: #0b1f18;">
  <div class="container max-w-1300 px-4 py-4 py-lg-5">

    <div class="eyebrow text-white mb-4 pb-4 border-bottom border-forest-mid">Why nDimensions</div>

    <div class="row mb-5">
      <div class="col-lg-9">
        <h2 class="display-3 fw-bold text-cream lh-sm mb-4">
          Be more <span class="serif">creative, effective,</span> and <span class="serif">productive</span>
        </h2>
        <p class="text-cream-muted mb-0" style="max-width: 640px; font-size: 1.05rem; line-height: 1.6;">
          Conquer the fast-changing AI landscape, unlocking greater efficiency and scale — and uncovering new possibilities across marketing, sales and operations.
        </p>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-5">

      <div class="col d-flex gap-3">
        <div class="text-lime why-number flex-shrink-0">01</div>
        <div>
          <h3 class="text-cream fw-bold fs-4 mb-2">Efficiency and cost savings</h3>
          <p class="text-cream-muted mb-0">Automate the highest-leverage workflows first so teams stop repeating manual work — and the business feels the impact in weeks, not quarters.</p>
        </div>
      </div>

      <div class="col d-flex gap-3">
        <div class="text-lime why-number flex-shrink-0">02</div>
        <div>
          <h3 class="text-cream fw-bold fs-4 mb-2">Connected data and tools</h3>
          <p class="text-cream-muted mb-0">AI is only as good as the plumbing under it. We wire in your CRM, WhatsApp, Shopify, email, sheets and internal tools.</p>
        </div>
      </div>

      <div class="col d-flex gap-3">
        <div class="text-lime why-number flex-shrink-0">03</div>
        <div>
          <h3 class="text-cream fw-bold fs-4 mb-2">Real business outcomes</h3>
          <p class="text-cream-muted mb-0">Every system we build ties back to a measurable outcome — leads, conversions, response times, content velocity, or hours saved.</p>
        </div>
      </div>

      <div class="col d-flex gap-3">
        <div class="text-lime why-number flex-shrink-0">04</div>
        <div>
          <h3 class="text-cream fw-bold fs-4 mb-2">Room to scale</h3>
          <p class="text-cream-muted mb-0">Start with one workflow, expand into a growth engine. We design AI systems that grow with the business, not against it.</p>
        </div>
      </div>

    </div>

  </div>
</section>

<section id="faq" class="bg-cream py-5 py-lg-6">
  <div class="container max-w-1300 px-4 py-4 py-lg-5">

    <div class="eyebrow text-dark-muted mb-4 pb-4 border-bottom border-cream-line">FAQs</div>

    <h2 class="display-3 fw-bold text-dark lh-sm mb-5">
      Frequently asked <span class="serif">questions</span>
    </h2>

    <div class="accordion accordion-flush" id="faqAccordion"
     style="--bs-accordion-bg: transparent; --bs-accordion-border-color: var(--cream-line); --bs-accordion-active-bg: transparent; --bs-accordion-active-color: var(--text-dark); --bs-accordion-btn-focus-box-shadow: none;">

      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed fs-4 fw-normal text-dark py-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
            What is an AI Growth Studio?
          </button>
        </h3>
        <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-black pt-0 pb-4">
            An AI Growth Studio helps businesses use AI to improve marketing, sales, support, content, customer journeys and business operations through connected workflows and automation systems.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed fs-4 fw-normal text-dark py-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
            Do we need existing AI tools before working with you?
          </button>
        </h3>
        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-black pt-0 pb-4">
            No. nDimensions AI can help you choose the right tools, design the workflow and build the system based on your business needs.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed fs-4 fw-normal text-dark py-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
            Can you work with our existing CRM, WhatsApp, Shopify or website?
          </button>
        </h3>
        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-black pt-0 pb-4">
            Yes. We can integrate AI workflows with existing business tools wherever technically feasible.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed fs-4 fw-normal text-dark py-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
            Do you only build marketing automation?
          </button>
        </h3>
        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-black pt-0 pb-4">
            No. We build AI systems for marketing, sales, support, SEO, content, business processes, document workflows and custom agents.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h3 class="accordion-header">
          <button class="accordion-button collapsed fs-4 fw-normal text-dark py-4" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
            Can you turn a ChatGPT or Claude prototype into a real tool?
          </button>
        </h3>
        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-black pt-0 pb-4">
            Yes. We can help convert AI prototypes into structured workflows, dashboards, interfaces and production-ready systems.
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<section class="bg-forest-deep text-cream py-5">
  <div class="container max-w-1300 px-4 py-5">
    <div class="row g-5 align-items-end">
      <div class="col-lg-8">
        <span class="eyebrow text-cream">Ready to build</span>
        <h2 class="mt-4 display-4 fw-medium text-cream max-w-3xl lh-sm">
          Build your first AI growth system
        </h2>
        <p class="mt-4 text-cream-muted lead max-w-600 mb-0" style="line-height: 1.6; font-size: 1.1rem;">
          Start with an AI Growth Audit. We'll identify what can be automated, what shouldn't be automated blindly, and where AI can create the fastest business impact.
        </p>
      </div>
      <div class="col-lg-4">
        <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
          <button class="btn-lime">
            Book AI Growth Audit
          </button>
          <a href="<?php echo $root_prefix; ?>services" class="btn-outline-cream text-decoration-none">
            Explore AI Services
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
</main>

<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>
