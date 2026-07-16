<?php
/**
 * nDimensions AI — Inline SVG Illustrations
 * This helper provides themed inline SVG illustrations for the sales-automation page.
 */

function get_radar_illustration($class = '') {
    return '
    <svg viewBox="0 0 400 300" class="' . htmlspecialchars($class) . '" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <!-- Concentric circles shifted up to cy=150 and resized to prevent bottom cutoff -->
        <g fill="none" stroke="rgba(201,245,66,0.4)" stroke-width="1">
            <circle cx="200" cy="150" r="30" />
            <circle cx="200" cy="150" r="60" />
            <circle cx="200" cy="150" r="90" />
            <circle cx="200" cy="150" r="120" />
        </g>
        <!-- Scanner Sweep Line Group (centered at cy=150) -->
        <g class="radar-sweep-group">
            <line x1="200" y1="150" x2="285" y2="65" stroke="#c9f542" stroke-width="1.8" />
            <!-- Soft gradient tail trailing the sweep line -->
            <polygon points="200,150 285,65 250,40" fill="rgba(201, 245, 66, 0.08)" stroke="none" />
        </g>
        <!-- Scanning Target Dots (shifted up to align around cy=150) -->
        <circle cx="140" cy="70" r="4.5" fill="#c9f542" class="radar-dot radar-dot-1" />
        <circle cx="280" cy="55" r="5.5" fill="#c9f542" class="radar-dot radar-dot-2" />
        <circle cx="90" cy="170" r="3.5" fill="#c9f542" class="radar-dot radar-dot-3" />
        <circle cx="320" cy="190" r="4.5" fill="#c9f542" class="radar-dot radar-dot-4" />
        <circle cx="190" cy="40" r="3.5" fill="#c9f542" class="radar-dot radar-dot-5" />
        <circle cx="130" cy="210" r="3.5" fill="#c9f542" class="radar-dot radar-dot-6" />
        
        <!-- Center station (centered at cy=150) -->
        <circle cx="200" cy="150" r="6" fill="#c9f542" />
        <circle cx="200" cy="150" r="14" fill="none" stroke="#c9f542" stroke-width="1.5" />
    </svg>';
}

function get_nurture_illustration($class = '') {
    return '
    <svg viewBox="0 0 400 300" class="' . htmlspecialchars($class) . '" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <!-- Floating Envelopes Group -->
        <g stroke="#c9f542" stroke-width="1.5">
            <!-- Back Envelope -->
            <g class="nurture-env-1">
                <rect x="70" y="60" width="200" height="120" rx="6" fill="#0e2a1e" opacity="0.35" />
            </g>
            <!-- Middle Envelope -->
            <g class="nurture-env-2">
                <rect x="100" y="90" width="200" height="120" rx="6" fill="#0e2a1e" opacity="0.65" />
            </g>
            <!-- Front Envelope + Flap -->
            <g class="nurture-env-3">
                <rect x="130" y="120" width="200" height="120" rx="6" fill="#0e2a1e" />
                <path d="M130 120 L230 195 L330 120" fill="none" />
            </g>
        </g>
        
        <!-- Bouncing Chat Bubble Group -->
        <g class="nurture-bubble-group">
            <g fill="none" stroke="#c9f542" stroke-width="1.5">
                <rect x="50" y="200" width="90" height="50" rx="10" fill="#0e2a1e" />
                <path d="M70 250 L60 265 L82 250" fill="#c9f542" stroke="none" />
                
                <!-- Typing/Writing Lines -->
                <line x1="65" y1="215" x2="120" y2="215" class="nurture-line-1" stroke="#c9f542" stroke-width="1.8" />
                <line x1="65" y1="230" x2="105" y2="230" class="nurture-line-2" stroke="#c9f542" stroke-width="1.8" />
            </g>
        </g>
    </svg>';
}

function get_scoring_illustration($class = '') {
    return '
    <svg viewBox="0 0 400 300" class="' . htmlspecialchars($class) . '" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <!-- Dashboard Frame -->
        <rect x="60" y="50" width="280" height="200" rx="10" fill="#0e2a1e" stroke="#c9f542" stroke-width="1.5" opacity="0.9" />
        
        <!-- Animated Bar Charts (Baseline y=240) -->
        <rect x="90" y="200" width="30" height="40" rx="3" fill="rgba(201,245,66,0.4)" class="scoring-bar scoring-bar-1" />
        <rect x="130" y="180" width="30" height="60" rx="3" fill="rgba(201,245,66,0.4)" class="scoring-bar scoring-bar-2" />
        <rect x="170" y="140" width="30" height="100" rx="3" fill="rgba(201,245,66,0.4)" class="scoring-bar scoring-bar-3" />
        <rect x="210" y="110" width="30" height="130" rx="3" fill="#c9f542" class="scoring-bar scoring-bar-4" />
        <rect x="250" y="90" width="30" height="150" rx="3" fill="#c9f542" class="scoring-bar scoring-bar-5" />
        <rect x="290" y="130" width="30" height="110" rx="3" fill="#c9f542" class="scoring-bar scoring-bar-6" />
        
        <!-- Static Score Badge (kept visible, animation removed) -->
        <g>
            <rect x="80" y="65" width="70" height="22" rx="11" fill="#c9f542" />
            <text x="115" y="80" font-size="12" font-weight="600" fill="#0e2a1e" text-anchor="middle" font-family="sans-serif">
                Score 92
            </text>
        </g>
    </svg>';
}

function get_retarget_illustration($class = '') {
    return '
    <svg viewBox="0 0 400 300" class="' . htmlspecialchars($class) . '" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <!-- Rotating Return Loop (Complete dotted circle line, polygon arrowhead removed) -->
        <g class="retarget-loop-group">
            <circle cx="200" cy="160" r="100" fill="none" stroke="#c9f542" stroke-width="2" stroke-dasharray="6 5" />
        </g>
        
        <!-- Connection links (faded dots mapping) -->
        <g stroke="rgba(201,245,66,0.4)" stroke-width="1" stroke-dasharray="3 4">
            <line x1="200" y1="60" x2="290" y2="120" />
            <line x1="290" y1="120" x2="310" y2="200" />
            <line x1="310" y1="200" x2="230" y2="250" />
            <line x1="230" y1="250" x2="140" y2="240" />
        </g>
        
        <!-- Pulsing Audience Nodes outer rings -->
        <g fill="#0e2a1e" stroke="#c9f542" stroke-width="1.5">
            <circle cx="200" cy="60" r="16" class="retarget-node retarget-node-1" />
            <circle cx="290" cy="120" r="12" class="retarget-node retarget-node-2" />
            <circle cx="310" cy="200" r="14" class="retarget-node retarget-node-3" />
            <circle cx="230" cy="250" r="12" class="retarget-node retarget-node-4" />
            <circle cx="140" cy="240" r="10" class="retarget-node retarget-node-5" />
        </g>
        
        <!-- Nodes solid centers -->
        <g fill="#c9f542">
            <circle cx="200" cy="60" r="4" />
            <circle cx="290" cy="120" r="3" />
            <circle cx="310" cy="200" r="4" />
            <circle cx="230" cy="250" r="3" />
            <circle cx="140" cy="240" r="3" />
        </g>
    </svg>';
}

function get_sales_illustration($title, $class = '') {
    switch ($title) {
        case 'Lead Generation':
            return get_radar_illustration($class);
        case 'Lead Nurturing':
            return get_nurture_illustration($class);
        case 'Lead Scoring':
            return get_scoring_illustration($class);
        case 'Retargeting Automation':
            return get_retarget_illustration($class);
        default:
            return '';
    }
}
