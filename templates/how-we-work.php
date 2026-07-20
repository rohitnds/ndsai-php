<section class="hww bg-forest-deep grain" id="how-we-work">
 
    <style>
        .hww {
            position: relative;
            overflow: hidden;
            padding: 7rem 1.5rem;
        }
        .hww-container {
            margin: 0 auto;
            width: 100%;
            position: relative;
            z-index: 2;
        }
 
        /* Diagram shell */
        .hww-diagram {
            position: relative;
            width: 100%;
            max-width: 980px;
            height: clamp(560px, 60vw, 680px);
            margin: 0 auto;
        }
        .hww-lines {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }
        .hww-line {
            stroke: var(--lime);
            stroke-width: 5;
            stroke-linecap: round;
            fill: none;
            stroke-dasharray: 900;
            stroke-dashoffset: 900;
            opacity: 0;
        }
        /* One 12s loop, split into 4 equal 3s slots — only one line is ever
           drawing/lit at a time, strictly in order: TL, TR, BL, BR. */
        .hww-line-tl { animation: hww-line-tl-anim 12s cubic-bezier(0.45, 0, 0.2, 1) infinite; }
        .hww-line-tr { animation: hww-line-tr-anim 12s cubic-bezier(0.45, 0, 0.2, 1) infinite; }
        .hww-line-bl { animation: hww-line-bl-anim 12s cubic-bezier(0.45, 0, 0.2, 1) infinite; }
        .hww-line-br { animation: hww-line-br-anim 12s cubic-bezier(0.45, 0, 0.2, 1) infinite; }
 
        @keyframes hww-line-tl-anim {
            0%   { stroke-dashoffset: 900; opacity: 0; }
            2%   { opacity: 1; }
            20%  { stroke-dashoffset: 0; opacity: 1; }
            23%  { stroke-dashoffset: 0; opacity: 1; }
            25%  { stroke-dashoffset: 0; opacity: 0; }
            26%  { stroke-dashoffset: 900; opacity: 0; }
            100% { stroke-dashoffset: 900; opacity: 0; }
        }
        @keyframes hww-line-tr-anim {
            0%, 25% { stroke-dashoffset: 900; opacity: 0; }
            27%  { opacity: 1; }
            45%  { stroke-dashoffset: 0; opacity: 1; }
            48%  { stroke-dashoffset: 0; opacity: 1; }
            50%  { stroke-dashoffset: 0; opacity: 0; }
            51%  { stroke-dashoffset: 900; opacity: 0; }
            100% { stroke-dashoffset: 900; opacity: 0; }
        }
        @keyframes hww-line-bl-anim {
            0%, 50% { stroke-dashoffset: 900; opacity: 0; }
            52%  { opacity: 1; }
            70%  { stroke-dashoffset: 0; opacity: 1; }
            73%  { stroke-dashoffset: 0; opacity: 1; }
            75%  { stroke-dashoffset: 0; opacity: 0; }
            76%  { stroke-dashoffset: 900; opacity: 0; }
            100% { stroke-dashoffset: 900; opacity: 0; }
        }
        @keyframes hww-line-br-anim {
            0%, 75% { stroke-dashoffset: 900; opacity: 0; }
            77%  { opacity: 1; }
            95%  { stroke-dashoffset: 0; opacity: 1; }
            98%  { stroke-dashoffset: 0; opacity: 1; }
            100% { stroke-dashoffset: 0; opacity: 0; }
        }
 
        /* Interactive: hovering a card takes over its line */
        .hww-diagram[data-active] .hww-line {
            animation-play-state: paused;
            stroke-dashoffset: 900;
            opacity: 0.12;
            transition: opacity 0.4s ease, stroke-dashoffset 0.5s ease;
        }
        .hww-diagram[data-active="tl"] .hww-line-tl,
        .hww-diagram[data-active="tr"] .hww-line-tr,
        .hww-diagram[data-active="bl"] .hww-line-bl,
        .hww-diagram[data-active="br"] .hww-line-br,
        .hww-diagram[data-active="all"] .hww-line {
            stroke-dashoffset: 0;
            opacity: 1;
        }
 
        /* Center hub card */
        .hww-hub {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: clamp(240px, 27%, 300px);
            padding: 1.75rem 1.5rem;
            text-align: center;
            background: var(--forest-mid);
            border: 1px solid rgba(201, 245, 66, 0.3);
            border-radius: 20px;
            z-index: 3;
        }
        .hww-hub::before {
            content: "";
            position: absolute;
            inset: -30%;
            background: radial-gradient(circle, rgba(201, 245, 66, 0.16), transparent 65%);
            z-index: -1;
            animation: hww-hub-pulse 3.2s ease-in-out infinite;
        }
        @keyframes hww-hub-pulse {
            0%, 100% { opacity: 0.6; transform: scale(0.94); }
            50% { opacity: 1; transform: scale(1.04); }
        }
        .hww-eyebrow {
            justify-content: center;
            color: var(--text-cream);
            margin-bottom: 0.9rem;
        }
        .hww-heading {
            font-family: var(--sans-global);
            font-weight: 500;
            font-size: clamp(1.15rem, 2vw, 1.5rem);
            line-height: 1.25;
            letter-spacing: -0.01em;
            color: var(--text-cream);
        }
        .hww-heading .serif {
            color: var(--lime);
            font-size: 1.08em;
        }
 
        /* Corner step cards */
        .hww-step {
            position: absolute;
            width: clamp(220px, 27%, 264px);
            padding: 1.4rem 1.3rem;
            display: flex;
            flex-direction: column;
            gap: 0.55rem;
            z-index: 2;
            background: rgba(20, 56, 42, 0.92);
            transition: opacity 0.3s ease, transform 0.3s ease, border-color 0.3s ease;
        }
        .hww-step-tl { left: 0; top: 0; }
        .hww-step-tr { right: 0; top: 0; }
        .hww-step-bl { left: 0; bottom: 0; }
        .hww-step-br { right: 0; bottom: 0; }
 
        .hww-diagram[data-active]:not([data-active="all"]) .hww-step {
            opacity: 0.5;
        }
        .hww-diagram[data-active="tl"] .hww-step-tl,
        .hww-diagram[data-active="tr"] .hww-step-tr,
        .hww-diagram[data-active="bl"] .hww-step-bl,
        .hww-diagram[data-active="br"] .hww-step-br {
            opacity: 1;
            transform: translateY(-3px);
            border-color: rgba(201, 245, 66, 0.5);
        }
 
        .hww-step-num {
            font-family: var(--mono-global);
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--lime);
            line-height: 1;
        }
        .hww-step h3 {
            font-family: var(--sans-global);
            font-size: 0.98rem;
            font-weight: 600;
            color: var(--text-cream);
            margin: 0;
            letter-spacing: -0.01em;
        }
        .hww-step p {
            font-size: 0.83rem;
            line-height: 1.55;
            color: var(--text-cream-muted);
            margin: 0;
        }
 
        /* Scroll-in reveal */
        .hww-hub,
        .hww-step {
            opacity: 0;
        }
        .hww-hub { transform: translate(-50%, -50%) scale(0.92); }
        .hww-step-tl { transform: translate(-16px, -16px); }
        .hww-step-tr { transform: translate(16px, -16px); }
        .hww-step-bl { transform: translate(-16px, 16px); }
        .hww-step-br { transform: translate(16px, 16px); }
        .hww-hub, .hww-step {
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .hww-diagram.hww-in-view .hww-hub {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
            transition-delay: 0.1s;
        }
        .hww-diagram.hww-in-view .hww-step-tl { opacity: 1; transform: translate(0, 0); transition-delay: 0.25s; }
        .hww-diagram.hww-in-view .hww-step-tr { opacity: 1; transform: translate(0, 0); transition-delay: 0.35s; }
        .hww-diagram.hww-in-view .hww-step-bl { opacity: 1; transform: translate(0, 0); transition-delay: 0.45s; }
        .hww-diagram.hww-in-view .hww-step-br { opacity: 1; transform: translate(0, 0); transition-delay: 0.55s; }
 
        @media (prefers-reduced-motion: reduce) {
            .hww-line, .hww-hub::before {
                animation: none !important;
            }
            .hww-hub, .hww-step {
                opacity: 1 !important;
                transform: none !important;
                transition: none !important;
            }
        }
 
        /* Mobile: vertical stack */
        @media (max-width: 900px) {
            .hww { padding: 5rem 1.25rem; }
            .hww-diagram {
                height: auto;
                display: flex;
                flex-direction: column;
                gap: 1.25rem;
            }
            .hww-lines { display: none; }
            .hww-hub {
                position: static;
                transform: none !important;
                width: 100%;
            }
            .hww-step-list {
                position: relative;
                padding-left: 1.6rem;
                display: flex;
                flex-direction: column;
                gap: 1.1rem;
            }
            .hww-step-list::before {
                content: "";
                position: absolute;
                left: 6px;
                top: 8px;
                bottom: 8px;
                width: 2px;
                background: repeating-linear-gradient(180deg, var(--lime) 0 6px, transparent 6px 14px);
                opacity: 0.4;
            }
            .hww-step {
                position: static !important;
                width: 100%;
                opacity: 1 !important;
                transform: none !important;
            }
            .hww-step::before {
                content: "";
                position: absolute;
                left: -1.6rem;
                top: 1.5rem;
                width: 8px;
                height: 8px;
                margin-left: 2px;
                border-radius: 50%;
                background: var(--lime);
                box-shadow: 0 0 0 4px rgba(201, 245, 66, 0.15);
            }
        }
    </style>
 
    <div class="hww-container max-w-1300">
 
        <div class="hww-diagram" id="hwwDiagram">
 
            <svg class="hww-lines" id="hwwLines" aria-hidden="true">
                <line class="hww-line hww-line-tl" x1="0" y1="0" x2="0" y2="0" />
                <line class="hww-line hww-line-tr" x1="0" y1="0" x2="0" y2="0" />
                <line class="hww-line hww-line-bl" x1="0" y1="0" x2="0" y2="0" />
                <line class="hww-line hww-line-br" x1="0" y1="0" x2="0" y2="0" />
            </svg>
 
            <div class="hww-hub" id="hwwHub">
                <div class="eyebrow hww-eyebrow">How We Work</div>
                <h2 class="hww-heading">From Bottleneck to <span class="serif">Automated Engine</span> in 4 Steps</h2>
            </div>
 
            <div class="hww-step-list">
 
                <div class="hww-step card-forest hww-step-tl" data-pos="tl">
                    <span class="hww-step-num">01</span>
                    <h3>The AI Growth Audit</h3>
                    <p>We analyze your team's manual operations to pinpoint your highest-leverage automation opportunities.</p>
                </div>
 
                <div class="hww-step card-forest hww-step-tr" data-pos="tr">
                    <span class="hww-step-num">02</span>
                    <h3>Architecture &amp; Blueprinting</h3>
                    <p>We map out your data flows, triggers, and LLM logic visually before writing a single line of code.</p>
                </div>
 
                <div class="hww-step card-forest hww-step-bl" data-pos="bl">
                    <span class="hww-step-num">03</span>
                    <h3>Build &amp; Stack Integration</h3>
                    <p>Our team engineers robust pipelines in n8n or Make, wiring custom agents into your existing tech stack.</p>
                </div>
 
                <div class="hww-step card-forest hww-step-br" data-pos="br">
                    <span class="hww-step-num">04</span>
                    <h3>Production Handoff</h3>
                    <p>We deploy, test for high accuracy, and hand over 100% code ownership with zero ongoing platform fees.</p>
                </div>
 
            </div>
 
        </div>
 
    </div>
 
</section>
 
<script>
(function () {
    var diagram = document.getElementById('hwwDiagram');
    var hub = document.getElementById('hwwHub');
    var svg = document.getElementById('hwwLines');
    if (!diagram || !svg) return;
 
    /* Measure the hub and each card in the diagram's own coordinate space,
       then draw every line from the hub's corner to the facing corner of
       its card — so the line always meets both borders exactly and never
       crosses into a card's padding/content. */
    var corners = {
        tl: { hub: 'topLeft',     card: 'bottomRight' },
        tr: { hub: 'topRight',    card: 'bottomLeft'  },
        bl: { hub: 'bottomLeft',  card: 'topRight'    },
        br: { hub: 'bottomRight', card: 'topLeft'     }
    };
 
    function point(rect, corner) {
        switch (corner) {
            case 'topLeft':     return { x: rect.left,  y: rect.top };
            case 'topRight':    return { x: rect.right, y: rect.top };
            case 'bottomLeft':  return { x: rect.left,  y: rect.bottom };
            case 'bottomRight': return { x: rect.right, y: rect.bottom };
        }
    }
 
    function updateLines() {
        if (window.matchMedia('(max-width: 900px)').matches) return;
 
        var contRect = diagram.getBoundingClientRect();
        var w = contRect.width;
        var h = contRect.height;
        if (!w || !h) return;
 
        svg.setAttribute('viewBox', '0 0 ' + w + ' ' + h);
 
        var hubRect = hub.getBoundingClientRect();
        var hubRel = {
            left: hubRect.left - contRect.left,
            top: hubRect.top - contRect.top,
            right: hubRect.right - contRect.left,
            bottom: hubRect.bottom - contRect.top
        };
 
        Object.keys(corners).forEach(function (pos) {
            var card = diagram.querySelector('.hww-step-' + pos);
            var line = diagram.querySelector('.hww-line-' + pos);
            if (!card || !line) return;
 
            var cardRect = card.getBoundingClientRect();
            var cardRel = {
                left: cardRect.left - contRect.left,
                top: cardRect.top - contRect.top,
                right: cardRect.right - contRect.left,
                bottom: cardRect.bottom - contRect.top
            };
 
            var p1 = point(hubRel, corners[pos].hub);
            var p2 = point(cardRel, corners[pos].card);
 
            line.setAttribute('x1', p1.x);
            line.setAttribute('y1', p1.y);
            line.setAttribute('x2', p2.x);
            line.setAttribute('y2', p2.y);
        });
    }
 
    /* Scroll-in reveal, then measure once the reveal transition settles */
    if ('IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    diagram.classList.add('hww-in-view');
                    setTimeout(updateLines, 850);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.2 });
        observer.observe(diagram);
    } else {
        diagram.classList.add('hww-in-view');
        updateLines();
    }
 
    window.addEventListener('load', updateLines);
 
    var resizeTimer;
    window.addEventListener('resize', function () {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(updateLines, 150);
    });
 
    /* Initial best-effort pass in case the section is already visible */
    updateLines();
 
    /* Hover interaction: a card takes over its connecting line */
    var steps = diagram.querySelectorAll('.hww-step[data-pos]');
    steps.forEach(function (step) {
        step.addEventListener('mouseenter', function () {
            diagram.setAttribute('data-active', step.getAttribute('data-pos'));
        });
        step.addEventListener('mouseleave', function () {
            diagram.removeAttribute('data-active');
        });
    });
    if (hub) {
        hub.addEventListener('mouseenter', function () {
            diagram.setAttribute('data-active', 'all');
        });
        hub.addEventListener('mouseleave', function () {
            diagram.removeAttribute('data-active');
        });
    }
})();
</script>