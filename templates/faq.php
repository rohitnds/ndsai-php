<?php
/**
 * nDimensions AI — Shared FAQ Section
 */

if (!isset($faqs) || empty($faqs)) {
    $faqs = [
        [
            "q" => "What kind of AI services do you offer?",
            "a" => "We focus on three core pillars: AI Growth Automation (lead generation, scoring, and pipeline tools), AI Business Automation (operations, document processing, internal workflows), and AI SEO & Content Automation (programmatic SEO, blogging, organic traffic systems). We also design and build custom AI Agents and provide consulting/implementation services."
        ],
        [
            "q" => "Do we need to replace our current software or CRM?",
            "a" => "No. We integrate directly with your existing software stack — HubSpot, Salesforce, Zoho, WhatsApp, Slack, Google Workspace, and more. Our goal is to enhance your team's workflow, not force you to learn new tools."
        ],
        [
            "q" => "How long does a typical AI implementation take?",
            "a" => "Most standalone automations go live in 2 to 3 weeks. A complete end-to-end system (like a fully integrated sales or operations engine) is typically deployed and fully operational within 4 to 6 weeks."
        ],
        [
            "q" => "How do you handle data privacy and security?",
            "a" => "We take data privacy very seriously. We set up systems using enterprise-grade API keys, secure server-to-server connections, and strict access controls. Your client and pipeline data never trains public LLMs, and we run workflows on secure cloud environments."
        ],
        [
            "q" => "Do we own the systems and prompts after handover?",
            "a" => "Yes. Unlike SaaS platforms that lock you in, you fully own all the prompts, custom agents, database structures, and workflow models we build. We provide full handover documentation so your team can maintain them."
        ]
    ];
}
?>

<section class="bg-cream text-dark py-5 border-top border-cream-line">
  <div class="container max-w-1000 px-4 py-5">
    <div class="text-center mb-5">
      <span class="eyebrow">FAQs</span>
      <h2 class="mt-4 display-5 fw-medium text-forest">
        Frequently asked <span class="serif">questions</span>.
      </h2>
    </div>

    <div class="accordion-list">
      <?php foreach ($faqs as $i => $f): ?>
      <div class="faq-item">
        <button class="faq-trigger" data-open="<?php echo ($i === 0 ? 'true' : 'false'); ?>">
          <span><?php echo htmlspecialchars($f['q']); ?></span>
          <span class="plus-icon"><i class="bi bi-plus-lg"></i></span>
        </button>
        <div class="faq-answer <?php echo ($i === 0 ? '' : 'd-none'); ?>">
          <?php echo $f['a']; ?>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
