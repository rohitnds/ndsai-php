<?php
/**
 * nDimensions AI — Sales Automation Page Content
 * Ported from SalesAutomation.jsx and translated to Bootstrap 5 + Custom CSS
 */

// Load SVG Helpers
include_once __DIR__ . '/../includes/illustrations.php';

// Steps Data for the Flow Visualizer
$flow_steps = [
    [
        "num" => 1,
        "title" => "Lead Captured",
        "sub" => "Forms, ads, landing pages, WhatsApp",
        "icon" => '
        <svg width="58" height="52" viewBox="0 0 58 52" fill="none" stroke="#b5f23d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <rect x="4" y="16" width="40" height="30" rx="4" />
            <path d="M4 22l20 13 20-13" />
            <g class="flow-step1-card">
                <rect x="24" y="2" width="22" height="20" rx="3" fill="#0e2b1e" />
                <circle cx="35" cy="9" r="4" />
                <line x1="27" y1="17" x2="43" y2="17" />
                <line x1="27" y1="13" x2="43" y2="13" />
            </g>
        </svg>'
    ],
    [
        "num" => 2,
        "title" => "Smart Segmentation",
        "sub" => "Industry, source, intent, behaviour",
        "icon" => '
        <svg width="58" height="56" viewBox="0 0 58 56" fill="none" stroke="#b5f23d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="16" cy="8" r="3.5" class="flow-step2-in-1" />
            <circle cx="29" cy="8" r="3.5" class="flow-step2-in-2" />
            <circle cx="42" cy="8" r="3.5" class="flow-step2-in-3" />
            <path d="M8 18h42L33 40v10l-8-5V40L8 18z" />
            <circle cx="29" cy="50" r="2.8" fill="#0e2b1e" stroke="#b5f23d" class="flow-step2-out" />
        </svg>'
    ],
    [
        "num" => 3,
        "title" => "Automated Nurturing",
        "sub" => "Email, WhatsApp, alerts, reminders",
        "icon" => '
        <svg width="64" height="56" viewBox="0 0 64 56" fill="none" stroke="#b5f23d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M10 4h22a4 4 0 014 4v12a4 4 0 01-4 4H18l-8 5v-5a4 4 0 01-4-4V8a4 4 0 014-4z" stroke-dasharray="5 3" class="flow-step3-bubble" />
            <g class="flow-step3-mail">
                <rect x="30" y="24" width="28" height="20" rx="4" />
                <path d="M30 30l14 7 14-7" />
            </g>
            <g class="flow-step3-arrow">
                <path d="M20 46l-4 4-4-4" stroke-dasharray="3 2" />
                <line x1="16" y1="50" x2="16" y2="42" stroke-dasharray="3 2" />
            </g>
        </svg>'
    ],
    [
        "num" => 4,
        "title" => "Engagement Analytics",
        "sub" => "Opens, clicks, replies, drop-offs",
        "icon" => '
        <svg width="60" height="54" viewBox="0 0 60 54" fill="none" stroke="#b5f23d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <rect x="4" y="36" width="9" height="14" rx="2" class="flow-step4-bar flow-step4-bar-1" />
            <rect x="18" y="26" width="9" height="24" rx="2" opacity="0.7" class="flow-step4-bar flow-step4-bar-2" />
            <rect x="32" y="14" width="9" height="36" rx="2" fill="#b5f23d" stroke="#b5f23d" class="flow-step4-bar flow-step4-bar-3" />
            <path d="M7 28 20 18 35 10 52 4" stroke-width="1.7" class="flow-step4-line" />
            <circle cx="52" cy="4" r="3" fill="#b5f23d" stroke="#b5f23d" class="flow-step4-dot" />
        </svg>'
    ],
    [
        "num" => 5,
        "title" => "Lead Scoring",
        "sub" => "Intent score, fit score, urgency score",
        "icon" => '
        <svg width="60" height="56" viewBox="0 0 60 56" fill="none" stroke="#b5f23d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <g class="flow-step5-profile">
                <circle cx="24" cy="14" r="10" />
                <circle cx="24" cy="14" r="6" />
                <path d="M10 50c0-7.7 6.3-14 14-14" />
            </g>
            <g class="flow-step5-score">
                <circle cx="46" cy="40" r="12" fill="#b5f23d" stroke="#102015" stroke-width="1.8" />
                <text x="46" y="44.5" text-anchor="middle" font-size="10" font-weight="700" fill="#0e2b1e" font-family="sans-serif" stroke="none">92</text>
            </g>
        </svg>'
    ],
    [
        "num" => 6,
        "title" => "CRM + Sales Handoff",
        "sub" => "Sync, assign, notify, follow-up",
        "icon" => '
        <svg width="66" height="56" viewBox="0 0 66 56" fill="none" stroke="#b5f23d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <rect x="4" y="8" width="40" height="40" rx="5" />
            <text x="10" y="24" font-size="8" font-weight="700" fill="#b5f23d" stroke="none" font-family="sans-serif" letter-spacing="0.5">CRM</text>
            <line x1="10" y1="30" x2="34" y2="30" class="flow-step6-txt-1" />
            <line x1="10" y1="36" x2="34" y2="36" class="flow-step6-txt-2" />
            <line x1="10" y1="42" x2="28" y2="42" class="flow-step6-txt-3" />
            <circle cx="52" cy="20" r="9" fill="#0e2b1e" />
            <circle cx="52" cy="17" r="4.5" class="flow-step6-head" />
            <path d="M43 28c0-5 4-9 9-9" />
            <circle cx="52" cy="20" r="8.5" />
            <circle cx="52" cy="42" r="9" fill="#0e2b1e" />
            <path d="M47.5 42l3 3 6.5-6.5" stroke-width="1.7" class="flow-step6-chk" />
            <circle cx="52" cy="42" r="8.5" />
        </svg>'
    ]
];

// Stats metrics array
$metrics = [
    [
        "num" => "3.4&times;",
        "head" => "more sales-qualified leads",
        "sub" => "vs. non-automated funnels — nDimensions client average."
    ],
    [
        "num" => "68%",
        "head" => "faster lead follow-up",
        "sub" => "First response in under 60 seconds, day or night."
    ],
    [
        "num" => "45%",
        "head" => "lower cost per acquisition",
        "sub" => "By re-scoring, re-routing and retargeting the right buyers."
    ],
    [
        "num" => "20+",
        "head" => "native integrations",
        "sub" => "CRMs, ad platforms, WhatsApp, email and web analytics."
    ]
];

// Sub services list
$sub_services = [
    ["label" => "Lead Generation", "tag" => "Acquire", "tile" => "tile-dashboard"],
    ["label" => "Lead Nurturing", "tag" => "Engage", "tile" => "tile-orange"],
    ["label" => "Lead Scoring", "tag" => "Qualify", "tile" => "tile-mint"],
    ["label" => "Retargeting Automation", "tag" => "Recover", "tile" => "tile-cream-warm"]
];

// Capabilities list
$capabilities = [
    [
        "id" => "acquire",
        "icon" => "bi bi-crosshair",
        "tag" => "01 · Acquire",
        "title" => "Lead Generation",
        "copy" => "AI agents that hunt on autopilot — scraping intent signals, enriching prospects and pushing high-fit leads into your pipeline every single day.",
        "bullets" => [
            "Intent-based prospect discovery (LinkedIn, web, ad clicks)",
            "Auto-enriched profiles with firmographic + technographic data",
            "Multi-channel outbound: email, WhatsApp, LinkedIn DMs",
            "Warm handoff to sales with full conversation history"
        ],
        "tile" => "tile-dashboard"
    ],
    [
        "id" => "engage",
        "icon" => "bi bi-fire",
        "tag" => "02 · Engage",
        "title" => "Lead Nurturing",
        "copy" => "Personalised, on-brand nurture journeys generated per lead — across email, WhatsApp and SMS — so no prospect ever goes cold in your CRM.",
        "bullets" => [
            "GPT-written sequences tuned to buyer stage & industry",
            "Behavioural triggers (email opens, page visits, replies)",
            "WhatsApp broadcast + 1:1 conversational nurture",
            "Auto-pause when a lead becomes sales-ready"
        ],
        "tile" => "tile-orange"
    ],
    [
        "id" => "qualify",
        "icon" => "bi bi-speedometer2",
        "tag" => "03 · Qualify",
        "title" => "Lead Scoring",
        "copy" => "A live scoring model that reads intent, fit and engagement — routing hot leads to sales in seconds and quietly nurturing the rest until they're ready.",
        "bullets" => [
            "Fit score (ICP match) + intent score (behaviour)",
            "Real-time re-scoring on every touchpoint",
            "SLA-driven routing to the right rep, instantly",
            "Transparent 'why this score' explanations for sales"
        ],
        "tile" => "tile-mint"
    ],
    [
        "id" => "recover",
        "icon" => "bi bi-arrow-repeat",
        "tag" => "04 · Recover",
        "title" => "Retargeting Automation",
        "copy" => "Bring lost, dormant and drop-off leads back — with AI-generated creative, Meta CAPI-tracked audiences and WhatsApp win-back flows that actually convert.",
        "bullets" => [
            "Server-side retargeting via Meta CAPI + Google Enhanced Conversions",
            "Auto-built lookalike & win-back audience segments",
            "AI-generated ad variants, refreshed weekly",
            "WhatsApp + email win-back journeys for cold CRM records"
        ],
        "tile" => "tile-cream-warm"
    ]
];

// How we build steps
$build_steps = [
    [
        "n" => "01",
        "t" => "Growth Audit",
        "d" => "We map your funnel, tools and drop-off points — and pinpoint the 3 highest-leverage automations first.",
        "icon" => "bi bi-funnel"
    ],
    [
        "n" => "02",
        "t" => "Design",
        "d" => "We wireframe the AI systems, the data flow, and the KPIs each one moves — before a single line of code.",
        "icon" => "bi bi-diagram-3"
    ],
    [
        "n" => "03",
        "t" => "Build & Wire",
        "d" => "AI agents, prompt logic, CRM & ad-platform integrations — deployed and connected to what you already use.",
        "icon" => "bi bi-lightning-charge"
    ],
    [
        "n" => "04",
        "t" => "Optimise",
        "d" => "Weekly performance reviews, model tuning, and new plays added as your pipeline matures.",
        "icon" => "bi bi-graph-up-arrow"
    ]
];

// Why nDimensions Us list
$why_us_items = [
    [
        "t" => "Outcomes, not features",
        "d" => "Every system ties to a hard number — MQLs, response time, CAC, or hours saved.",
        "icon" => "bi bi-crosshair"
    ],
    [
        "t" => "Connected, not siloed",
        "d" => "Leads flow across gen &rarr; nurture &rarr; scoring &rarr; retargeting without manual handoffs.",
        "icon" => "bi bi-diagram-3"
    ],
    [
        "t" => "Plugs into your stack",
        "d" => "HubSpot, Salesforce, Zoho, WhatsApp, Meta, Google Ads, Sheets — no rip-and-replace.",
        "icon" => "bi bi-arrow-repeat"
    ],
    [
        "t" => "Owned by you",
        "d" => "You keep the data, the prompts, the models and the workflows. We hand it all over.",
        "icon" => "bi bi-shield-check"
    ]
];

// Customer Cases
$customer_cases = [
    [
        "tag" => "B2B SaaS",
        "title" => "Global SaaS platform",
        "quote" => "We doubled qualified pipeline in a quarter without adding a single SDR. The scoring model is now our best sales rep.",
        "body" => "Lead scoring + nurture stack reduced their sales cycle by 22% and lifted MQL&rarr;SQL conversion from 14% to 31%."
    ],
    [
        "tag" => "Retail",
        "title" => "Enterprise retail brand",
        "quote" => "For the first time our WhatsApp, ads and CRM speak the same language. Dormant customers are coming back on their own.",
        "body" => "Retargeting automation recovered 18% of dropped-off checkout and enquiry leads within 60 days."
    ]
];

// Integrations list
$integration_tools = [
    "HubSpot", "Salesforce", "Zoho CRM", "Pipedrive", "WhatsApp Business", "Meta Ads", "Google Ads", "LinkedIn Ads", "Segment", "Google Sheets", "Slack", "Zapier"
];

// FAQ list
$faqs = [
    [
        "q" => "Will this replace our sales team?",
        "a" => "No. It replaces the manual, repetitive work that keeps your sales team from actually selling — enrichment, first-touch replies, follow-ups, scoring, list-building. Reps close more because they only see hot, context-rich leads."
    ],
    [
        "q" => "Do we need a specific CRM to start?",
        "a" => "We work with HubSpot, Salesforce, Zoho, Pipedrive, Close and most modern CRMs. If your CRM has an API, we can wire the systems in. No CRM? We'll help you pick a lean one first."
    ],
    [
        "q" => "How long until we see results?",
        "a" => "First automation goes live in 2–3 weeks. The full 4-system sales engine (gen + nurture + scoring + retargeting) is usually live in 4–6 weeks, with measurable pipeline impact from week 6 onwards."
    ],
    [
        "q" => "What about data privacy and prompt IP?",
        "a" => "You own everything — the prompts, the models, the workflows, the data. We deploy inside your accounts (OpenAI/Anthropic/etc.), not ours. Full handover documentation included."
    ],
    [
        "q" => "Can this work with WhatsApp for lead follow-up?",
        "a" => "Yes — WhatsApp is a core channel. We use the official WhatsApp Business API for compliant broadcast, 1:1 conversational nurture, and retargeting win-back flows."
    ]
];
?>

<main>
  <!-- Hero Section -->
  <section id="top" class="bg-forest text-cream position-relative overflow-hidden grain py-5">
    <div class="container max-w-1300 px-4 py-5 position-relative z-3">
      <div class="row align-items-center g-5">
        
        <!-- Left copy -->
        <div class="col-lg-6 fade-up">
          <span class="eyebrow text-cream">AI Sales Automation</span>
          <h1 class="mt-4 display-3 fw-medium text-cream lh-sm">
            Your sales team's <span class="serif text-lime">always-on</span><br>revenue engine.
          </h1>
          <p class="mt-4 text-cream-muted lead max-w-500" style="font-size: 1.1rem; line-height: 1.6;">
            Four connected AI systems that find, qualify, nurture and win back buyers — plugged straight into your CRM, WhatsApp, ads and website. No new tools. No new team. Just more pipeline.
          </p>
          <div class="mt-4 pt-2 d-flex flex-wrap gap-3">
            <button class="btn-lime">
              Book AI Growth Audit
              <i class="bi bi-arrow-up-right ms-1"></i>
            </button>
            <button class="btn-outline-cream">
              See Sales Systems
            </button>
          </div>

          <!-- Mini trust row -->
          <div class="mt-5 d-flex flex-wrap gap-x-4 gap-y-2 text-cream-muted small">
            <span class="d-flex align-items-center gap-2 me-4">
              <i class="bi bi-check-lg text-lime" style="font-size: 1.1rem;"></i>
              Works with HubSpot, Salesforce, Zoho
            </span>
            <span class="d-flex align-items-center gap-2 me-4">
              <i class="bi bi-check-lg text-lime" style="font-size: 1.1rem;"></i>
              WhatsApp + Meta CAPI native
            </span>
            <span class="d-flex align-items-center gap-2">
              <i class="bi bi-check-lg text-lime" style="font-size: 1.1rem;"></i>
              Live in 4–6 weeks
            </span>
          </div>
        </div>

        <!-- Right — 4 sub-service tiles -->
        <div class="col-lg-6">
          <div class="row row-cols-2 g-3 g-lg-4">
            <?php foreach ($sub_services as $i => $s): ?>
            <div class="col">
              <a href="#<?php echo strtolower($s['tag']); ?>" 
                 class="<?php echo $s['tile']; ?> position-relative rounded-4 overflow-hidden d-flex flex-col justify-content-end p-4 group cursor-pointer"
                 style="aspect-ratio: 4/5; height: 100%; display: flex; flex-direction: column; text-decoration: none; animation: fadeUp 0.7s ease forwards; animation-delay: <?php echo ($i * 0.08); ?>s;">
                
                <div class="position-absolute start-0 top-0 w-100 h-100 p-3 opacity-90 transition-transform img-illustration">
                  <?php echo get_sales_illustration($s['label'], 'w-100 h-100'); ?>
                </div>
                <div class="position-absolute start-0 top-0 w-100 h-100 z-1" style="background: linear-gradient(180deg, rgba(0,0,0,0) 45%, rgba(7,26,18,0.85) 100%);"></div>
                
                <div class="position-relative z-3 mt-auto">
                  <span class="text-uppercase text-cream-muted small tracking-widest" style="font-size: 10px; letter-spacing: 0.18em;"><?php echo $s['tag']; ?></span>
                  <div class="serif text-cream h3 mt-1 mb-0 leading-none"><?php echo $s['label']; ?></div>
                </div>
              </a>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Flow & Stats Section -->
  <section class="text-dark py-5" style="background: #efe8dc;">
    <div class="container max-w-1300 px-4 py-5">
      
      <!-- Flow Card -->
      <div class="p-4 p-md-5 text-center rounded-5" style="background: #efe8dc; border: 1px solid rgba(14, 42, 30, 0.08);">
        <h2 class="display-5 text-forest mb-2">
          AI Sales Automation <span class="serif">Flow</span>
        </h2>
        <p class="text-dark-muted small max-w-500 mx-auto mb-5" style="font-size: 0.95rem;">
          Capture, segment, nurture, score and move every qualified lead into your sales pipeline automatically.
        </p>

        <!-- Cards Row -->
        <div class="stats-steps-container">
          <?php foreach ($flow_steps as $i => $step): ?>
            <div class="lead-flow-step">
              <div class="bg-lime text-forest rounded-circle mb-3 d-flex align-items-center justify-content-center fw-bold" style="width: 24px; height: 24px; font-size: 11px;">
                <?php echo $step['num']; ?>
              </div>
              <div class="mb-3 d-flex align-items-center justify-content-center" style="width: 60px; height: 56px;">
                <?php echo $step['icon']; ?>
              </div>
              <p class="serif text-cream mb-1" style="font-size: 14px;"><?php echo $step['title']; ?></p>
              <p class="text-cream opacity-75 mb-0" style="font-size: 10px; line-height: 1.55;"><?php echo $step['sub']; ?></p>
            </div>
            
            <?php if ($i < count($flow_steps) - 1): ?>
              <div class="stats-arrow-separator d-flex align-items-center justify-content-center px-1">
                <svg width="16" height="12" viewBox="0 0 16 12" fill="none" stroke="#3d5e42" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M1 6h14M9 1l6 5-6 5" />
                </svg>
              </div>
            <?php endif; ?>
          <?php endforeach; ?>
        </div>

        <!-- Loop Connector Row -->
        <div class="d-flex align-items-center mt-3" style="height: 32px; overflow: visible;">
          <svg width="100%" height="32" viewBox="0 0 200 32" preserveAspectRatio="none" style="flex: 1; overflow: visible; max-width: calc(50% - 20px);">
            <defs>
              <marker id="aL" viewBox="0 0 10 10" refX="2" refY="5" markerWidth="5" markerHeight="5" orient="auto-start-reverse">
                <path d="M8 1L2 5L8 9" fill="none" stroke="#0e2b1e" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
              </marker>
            </defs>
            <polyline points="200,2 3,2 3,30" fill="none" stroke="#0e2b1e" stroke-width="1.5" marker-end="url(#aL)" />
          </svg>

          <div class="rounded-circle border border-dark border-1 d-flex align-items-center justify-content-center flex-shrink-0" style="width: 30px; height: 30px; border-color: #0e2b1e !important;">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#0e2b1e" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M23 4v6h-6" />
              <path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10" />
            </svg>
          </div>

          <svg width="100%" height="32" viewBox="0 0 200 32" preserveAspectRatio="none" style="flex: 1; overflow: visible; max-width: calc(50% - 20px);">
            <defs>
              <marker id="aR" viewBox="0 0 10 10" refX="8" refY="5" markerWidth="5" markerHeight="5" orient="auto-start-reverse">
                <path d="M2 1L8 5L2 9" fill="none" stroke="#0e2b1e" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" />
              </marker>
            </defs>
            <polyline points="0,2 197,2 197,30" fill="none" stroke="#0e2b1e" stroke-width="1.5" marker-end="url(#aR)" />
          </svg>
        </div>
      </div>

    </div>
  </section>

  <!-- Capabilities Section -->
  <section id="capabilities" class="bg-cream text-dark py-5 border-top border-cream-line">
    <div class="container max-w-1300 px-4 py-5">
      <span class="eyebrow">The Sales Engine</span>
      <h2 class="mt-4 display-4 fw-medium text-forest max-w-4xl lh-sm">
        Four systems. <span class="serif">One sales engine.</span> Built to convert — end to end.
      </h2>
      <p class="mt-4 text-dark-muted lead max-w-600">
        Every stage of your funnel gets an AI layer that removes manual work, speeds up response, and compounds over time.
      </p>

      <div class="mt-5 row row-cols-1 row-cols-md-2 g-4 g-lg-5">
        <?php foreach ($capabilities as $cap): ?>
        <div class="col" id="<?php echo $cap['id']; ?>">
          <div class="card-cream p-4 p-md-5 h-100 d-flex flex-column">
            
            <div class="<?php echo $cap['tile']; ?> rounded-4 overflow-hidden mb-4 position-relative" style="aspect-ratio: 16/9;">
              <div class="position-absolute start-0 top-0 w-100 h-100 p-4">
                <?php echo get_sales_illustration($cap['title'], 'w-100 h-100'); ?>
              </div>
            </div>

            <div class="d-flex align-items-start gap-3">
              <div class="icon-tile">
                <i class="<?php echo $cap['icon']; ?>" style="font-size: 1.2rem;"></i>
              </div>
              <div>
                <div class="text-xs text-uppercase text-dark-muted fw-semibold small tracking-wider"><?php echo $cap['tag']; ?></div>
                <h3 class="mt-1 h2 fw-medium text-forest"><?php echo $cap['title']; ?></h3>
              </div>
            </div>

            <p class="mt-4 text-dark-muted" style="line-height: 1.6; font-size: 1.02rem;">
              <?php echo $cap['copy']; ?>
            </p>

            <ul class="mt-4 list-unstyled mb-0 mt-auto">
              <?php foreach ($cap['bullets'] as $b): ?>
              <li class="d-flex align-items-start gap-3 text-dark small mb-3">
                <i class="bi bi-check-lg text-forest fw-bold" style="font-size: 1.1rem; line-height: 1;"></i>
                <span><?php echo $b; ?></span>
              </li>
              <?php endforeach; ?>
            </ul>

          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- How It Works Section -->
  <section class="bg-forest text-cream py-5">
    <div class="container max-w-1300 px-4 py-5">
      <span class="eyebrow text-cream">How we build it</span>
      <h2 class="mt-4 display-4 fw-medium text-cream max-w-3xl lh-sm">
        From audit to <span class="serif text-lime">production</span> in 4–6 weeks.
      </h2>

      <div class="mt-5 row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <?php foreach ($build_steps as $s): ?>
        <div class="col">
          <div class="card-forest p-4 h-100">
            <div class="icon-tile" style="background: rgba(201,245,66,.12); color: var(--lime);">
              <i class="<?php echo $s['icon']; ?>" style="font-size: 1.25rem;"></i>
            </div>
            <div class="mt-4 serif display-4 text-lime lh-1">
              <?php echo $s['n']; ?>
            </div>
            <h3 class="mt-3 h4 fw-medium text-cream"><?php echo $s['t']; ?></h3>
            <p class="mt-3 text-cream-muted small mb-0" style="line-height: 1.6;">
              <?php echo $s['d']; ?>
            </p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Why Us Section -->
  <section class="bg-cream text-dark py-5 border-top border-cream-line">
    <div class="container max-w-1300 px-4 py-5">
      <span class="eyebrow">Why nDimensions</span>
      <h2 class="mt-4 display-4 fw-medium text-forest max-w-3xl lh-sm">
        A sales AI partner that actually <span class="serif">ships</span>.
      </h2>

      <div class="mt-5 row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
        <?php foreach ($why_us_items as $i => $it): ?>
        <div class="col">
          <div class="p-4 border-top border-cream-line pt-4 h-100">
            <div class="icon-tile mb-4">
              <i class="<?php echo $it['icon']; ?>" style="font-size: 1.2rem;"></i>
            </div>
            <div class="text-xs text-uppercase text-dark-muted small">0<?php echo ($i + 1); ?></div>
            <h3 class="mt-2 h4 fw-medium text-forest"><?php echo $it['t']; ?></h3>
            <p class="mt-3 text-dark-muted small mb-0" style="line-height: 1.6;">
              <?php echo $it['d']; ?>
            </p>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Cases Section -->
  <section class="bg-forest text-cream py-5">
    <div class="container max-w-1300 px-4 py-5">
      <span class="eyebrow text-cream">Customer stories</span>
      <h2 class="mt-4 display-4 fw-medium text-cream max-w-3xl lh-sm">
        Real teams. <span class="serif text-lime">Real pipeline</span>.
      </h2>

      <div class="mt-5 row row-cols-1 row-cols-md-2 g-4 g-lg-5">
        <?php foreach ($customer_cases as $i => $c): ?>
        <div class="col">
          <article class="card-forest p-4 p-md-5 h-100 position-relative overflow-hidden">
            <div class="position-absolute inset-0 opacity-25" style="background: radial-gradient(circle at 20% 20%, rgba(201,245,66,0.18), transparent 55%); pointer-events: none;"></div>
            <div class="position-absolute inset-0 z-1" style="background: linear-gradient(140deg, rgba(14,42,30,.85) 0%, rgba(14,42,30,.6) 100%); pointer-events: none;"></div>
            
            <div class="position-relative z-3">
              <span class="text-xs text-uppercase text-cream-muted small tracking-wider">Customer Story</span>
              <blockquote class="serif display-6 text-cream mt-4 mb-4" style="line-height: 1.2;">
                &ldquo;<?php echo $c['quote']; ?>&rdquo;
              </blockquote>
              <p class="text-cream-muted small max-w-500" style="line-height: 1.6; font-size: 0.95rem;">
                <span class="text-cream fw-semibold"><?php echo $c['title']; ?></span> — <?php echo $c['body']; ?>
              </p>
              
              <div class="mt-5 d-flex align-items-center justify-content-between">
                <span class="text-lime flex items-center gap-1.5 cursor-pointer small">
                  Read the story <i class="bi bi-arrow-up-right ms-1"></i>
                </span>
                <span class="text-uppercase text-cream-muted small border px-3 py-1 rounded-pill" style="font-size: 11px; border-color: rgba(239,232,220,.25) !important;">
                  <?php echo $c['tag']; ?>
                </span>
              </div>
            </div>
          </article>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- Integrations Section -->
  <section class="bg-cream-soft text-dark py-5 border-top border-cream-line">
    <div class="container max-w-1300 px-4 py-5">
      <div class="row g-5 align-items-start">
        <div class="col-lg-5">
          <span class="eyebrow">Native integrations</span>
          <h2 class="mt-4 h1 fw-medium text-forest lh-sm">
            Plugs into the tools your <span class="serif">sales team</span> already lives in.
          </h2>
        </div>
        <div class="col-lg-7">
          <div class="d-flex flex-wrap gap-2 pt-2">
            <?php foreach ($integration_tools as $t): ?>
            <span class="px-4 py-2 rounded-pill text-dark border border-cream-line bg-cream small fw-medium">
              <?php echo $t; ?>
            </span>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ Section -->
  <?php include __DIR__ . '/faq.php'; ?>

  <!-- CTA Banner Section -->
  <?php
  $cta_title = 'Turn your CRM into a <span class="serif text-lime">revenue engine</span>.';
  $cta_desc = 'Start with a free AI Growth Audit. We\'ll map your funnel, spot the top 3 revenue leaks, and show you the exact AI systems that fix them — no pitch deck, just a working plan.';
  include __DIR__ . '/cta.php';
  ?>
</main>
