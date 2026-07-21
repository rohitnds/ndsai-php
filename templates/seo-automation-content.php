<?php
/**
 * nDimensions AI — AI SEO & Content Page Content
 * Same structure/animations as Sales Automation page, content updated for AI SEO & Content
 */

// Load SVG Helpers
include_once __DIR__ . '/../includes/illustrations.php';

// Steps Data for the Flow Visualizer (icons & animation classes unchanged)
$flow_steps = [
    [
        "num" => 1,
        "title" => "Topic Captured",
        "sub" => "Discover topics from search data, competitors & prompts",
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
        "title" => "Smart Clustering",
        "sub" => "Cluster keywords & prompts using AI-based grouping",
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
        "title" => "Automated Publishing",
        "sub" => "Generate & publish content across web & social
",
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
        "title" => "Visibility Analytics",
        "sub" => "Track rankings, AI citations & content performance",
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
        "title" => "AI Visibility Scoring",
        "sub" => "Score content for search & AI-answer visibility",
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
        "title" => "Distribution + Handoff",
        "sub" => "Sync content to CMS, social & analytics platforms",
        "icon" => '
        <svg width="66" height="56" viewBox="0 0 66 56" fill="none" stroke="#b5f23d" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <rect x="4" y="8" width="40" height="40" rx="5" />
            <text x="10" y="24" font-size="8" font-weight="700" fill="#b5f23d" stroke="none" font-family="sans-serif" letter-spacing="0.5">CMS</text>
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
        "num" => "4.1&times;",
        "head" => "more organic traffic",
        "sub" => "vs. manual content programs — nDimensions client average."
    ],
    [
        "num" => "60%",
        "head" => "faster content production",
        "sub" => "From topic research to published, optimized content."
    ],
    [
        "num" => "35%",
        "head" => "lower cost per published piece",
        "sub" => "By automating research, drafting and publishing."
    ],
    [
        "num" => "12+",
        "head" => "native integrations",
        "sub" => "CMS platforms, analytics tools, social channels and search consoles."
    ]
];

// Sub services list
$sub_services = [
    ["label" => "AI SEO Automation", "tag" => "Rank", "tile" => "tile-dashboard"],
    ["label" => "AEO Services", "tag" => "Answer", "tile" => "tile-orange"],
    ["label" => "GEO Services", "tag" => "Cite", "tile" => "tile-mint"],
    ["label" => "AI Content Automation", "tag" => "Publish", "tile" => "tile-cream-warm"]
];

// Capabilities list
$capabilities = [
    [
        "id" => "rank",
        "icon" => "bi bi-search",
        "tag" => "01 · Rank",
        "title" => "AI SEO Automation",
        "copy" => "Rank higher on search with AI-driven keyword research and on-page optimization.",
        "bullets" => [
            "Automated keyword clustering",
            "AI-optimized on-page content",
            "Technical SEO monitoring"
        ],
        "tile" => "tile-dashboard"
    ],
    [
        "id" => "answer",
        "icon" => "bi bi-chat-square-quote",
        "tag" => "02 · Answer",
        "title" => "AEO Services",
        "copy" => "Get featured in AI answer engines and voice search results.",
        "bullets" => [
            "Answer-optimized content structure",
            "Featured snippet targeting",
            "Voice search readiness"
        ],
        "tile" => "tile-orange"
    ],
    [
        "id" => "cite",
        "icon" => "bi bi-globe2",
        "tag" => "03 · Cite",
        "title" => "GEO Services",
        "copy" => "Get cited and referenced by ChatGPT, Gemini and other AI models.",
        "bullets" => [
            "Generative engine optimization",
            "AI citation tracking",
            "Entity & authority building"
        ],
        "tile" => "tile-mint"
    ],
    [
        "id" => "publish",
        "icon" => "bi bi-file-earmark-richtext",
        "tag" => "04 · Publish",
        "title" => "AI Content Automation",
        "copy" => "Generate and publish high-quality content at scale, automatically.",
        "bullets" => [
            "AI-generated blog & landing pages",
            "Automated publishing workflows",
            "Content refresh & repurposing"
        ],
        "tile" => "tile-cream-warm"
    ]
];

// How we build steps
$build_steps = [
    [
        "n" => "01",
        "t" => "Visibility Audit",
        "d" => "Analyze search, AI answer & GEO performance gaps",
        "icon" => "bi bi-funnel"
    ],
    [
        "n" => "02",
        "t" => "Content & Topic Design",
        "d" => "Map keyword clusters and content pipelines",
        "icon" => "bi bi-diagram-3"
    ],
    [
        "n" => "03",
        "t" => "Setup & Automation",
        "d" => "Implement content generation and publishing workflows",
        "icon" => "bi bi-lightning-charge"
    ],
    [
        "n" => "04",
        "t" => "Optimize & Scale",
        "d" => "Continuously improve rankings, citations and reach",
        "icon" => "bi bi-graph-up-arrow"
    ]
];

// Why nDimensions Us list
$why_us_items = [
    [
        "t" => "Visibility-focused",
        "d" => "We optimize for search, AI answers and social reach — not vanity metrics",
        "icon" => "bi bi-crosshair"
    ],
    [
        "t" => "Fully integrated system",
        "d" => "SEO, GEO, content & social — all connected",
        "icon" => "bi bi-diagram-3"
    ],
    [
        "t" => "Built for scale",
        "d" => "Designed to grow your content output without growing your team",
        "icon" => "bi bi-arrow-repeat"
    ],
    [
        "t" => "Complete ownership",
        "d" => "You control your content, data and publishing systems",
        "icon" => "bi bi-shield-check"
    ]
];

// Customer Cases
$customer_cases = [
    [
        "tag" => "Case Study",
        "title" => "",
        "quote" => "We 4X'd our organic traffic in 90 days with AI content automation.",
        "body" => ""
    ],
    [
        "tag" => "Case Study",
        "title" => "",
        "quote" => "GEO optimization got our brand cited across ChatGPT and Gemini answers.",
        "body" => ""
    ]
];

// Integrations list
$integration_tools = [
    "WordPress", "Webflow", "Shopify", "Google Search Console", "Google Analytics", "Ahrefs", "Semrush", "Instagram", "LinkedIn", "Facebook", "Buffer", "Notion"
];

// FAQ list
$faqs = [
    [
        "q" => "Will this replace our content team?",
        "a" => "No. It supports your team by automating research, drafting and publishing so they can focus on strategy."
    ],
    [
        "q" => "What is GEO and why does it matter?",
        "a" => "GEO (Generative Engine Optimization) helps your brand get cited by AI tools like ChatGPT and Gemini, which is quickly becoming a major discovery channel."
    ],
    [
        "q" => "How fast can we see results?",
        "a" => "SEO and content improvements typically show within 4–8 weeks; social automation shows results faster."
    ],
    [
        "q" => "Do you write the content or just automate it?",
        "a" => "Both. We build the AI systems and workflows, and can also manage content strategy and quality review."
    ],
    [
        "q" => "Does it work with our existing CMS?",
        "a" => "Yes. We integrate with WordPress, Webflow, Shopify and most major CMS and social platforms."
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
          <span class="eyebrow text-cream">AI SEO & Content</span>
          <h1 class="mt-4 display-3 fw-medium text-cream lh-sm">
            AI SEO & Content That Turns <span class="serif text-lime">Visibility<br> Into Traffic</span> — Automatically
          </h1>
          <p class="mt-4 text-cream-muted lead max-w-500" style="font-size: 1.1rem; line-height: 1.6;">
            Stop guessing what to publish. Start ranking with AI-powered SEO, AEO, GEO and content systems built to get found — on search and on AI.<br><br>We help you research, write, optimize, publish and distribute content automatically using AI, search data, and publishing workflows.
          </p>
          <div class="mt-4 pt-2 d-flex flex-wrap gap-3">
            <button class="btn-lime">
              Get Free AI Growth Audit
              <i class="bi bi-arrow-up-right ms-1"></i>
            </button>
            <button class="btn-outline-cream">
              Book Strategy Call
            </button>
          </div>

          <!-- Mini trust row -->
          <div class="mt-5 d-flex flex-wrap gap-x-4 gap-y-2 text-cream-muted small">
            <span class="d-flex align-items-center gap-2 me-4">
              <i class="bi bi-check-lg text-lime" style="font-size: 1.1rem;"></i>
              Rank higher on search
            </span>
            <span class="d-flex align-items-center gap-2 me-4">
              <i class="bi bi-check-lg text-lime" style="font-size: 1.1rem;"></i>
              Get cited by AI models
            </span>
            <span class="d-flex align-items-center gap-2">
              <i class="bi bi-check-lg text-lime" style="font-size: 1.1rem;"></i>
              Publish content at scale
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
                  <?php echo get_seo_illustration($s['label'], 'w-100 h-100'); ?>
                </div>
                <div class="position-absolute start-0 top-0 w-100 h-100 z-1" style="background: linear-gradient(180deg, rgba(0,0,0,0) 45%, rgba(7,26,18,0.85) 100%);"></div>
                
                <div class="stat-tab position-relative z-3">
                  <span class="text-uppercase text-cream-muted tracking-widest stat-tag" style="font-size: 10px; letter-spacing: 0.18em;"><?php echo $s['tag']; ?></span>
<div class="serif text-cream h3 stat-label mt-1 mb-0 leading-none"><?php echo $s['label']; ?></div>
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
  <!-- <section class="text-dark py-5" style="background: #efe8dc;">
    <div class="container max-w-1300 px-4 py-5">
      
    
      <div class="p-4 p-md-5 text-center rounded-5" style="background: #efe8dc; border: 1px solid rgba(14, 42, 30, 0.08);">
        <h2 class="display-5 text-forest mb-2">
          AI SEO & Content <span class="serif">Flow</span>
        </h2>
        <h3 class="text-dark-muted small max-w-500 mx-auto mb-3" style="font-size: 1rem;">From Topic to Traffic — Fully Automated</h3>
        <p class="text-dark-muted small max-w-500 mx-auto" style="font-size: 0.95rem;">
          <b>Research → Cluster → Publish → Track → Scale</b>
        </p>
        <p class="text-dark-muted small max-w-500 mx-auto mb-5" style="font-size: 0.95rem;">Automate your entire content journey using AI-powered workflows and real-time visibility tracking.</p>

    
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

      </div>

    </div>
  </section> -->

  <!-- Capabilities Section -->
  <section id="capabilities" class="bg-cream text-dark py-5 border-top border-cream-line">
    <div class="container max-w-1300 px-4 py-5">
      <span class="eyebrow">The Visibility Engine</span>
      <h2 class="mt-4 display-4 fw-medium text-forest max-w-4xl lh-sm">
        4 <span class="serif">Pillars of </span>AI SEO & Content
      </h2>

      <div class="mt-5 row row-cols-1 row-cols-md-2 g-4 g-lg-5">
        <?php foreach ($capabilities as $cap): ?>
        <div class="col" id="<?php echo $cap['id']; ?>">
          <div class="card-cream p-4 p-md-5 h-100 d-flex flex-column">
            
            <div class="<?php echo $cap['tile']; ?> rounded-4 overflow-hidden mb-4 position-relative" style="aspect-ratio: 16/9;">
              <div class="position-absolute start-0 top-0 w-100 h-100 p-4">
                <?php echo get_seo_illustration($cap['title'], 'w-100 h-100'); ?>
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
        Proven 4-Step <span class="serif text-lime">Implementation Framework</span>
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
        Not an Agency. <span class="serif">Your Visibility Partner.</span>
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
        Real teams. <span class="serif text-lime">Real results</span>.
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
                <span class="text-cream fw-semibold"><?php echo $c['title']; ?></span><?php if ($c['title'] || $c['body']): ?> — <?php endif; ?><?php echo $c['body']; ?>
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
            Works with the <span class="serif">tools you already use</span>.
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
  $cta_title = 'Turn Your Content Into an <span class="serif text-lime">AI Visibility Machine</span>';
  $cta_desc = 'Stop guessing what ranks. Start getting found, on search and on AI.';
  include __DIR__ . '/cta.php';
  ?>
</main>