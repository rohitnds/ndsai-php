<?php
/**
 * Page: 404.php
 * Serves the "Page Not Found" error page for nDimensions AI
 */
$page_title = "Page Not Found — nDimensions AI";
$page_desc = "The page you're looking for doesn't exist, may have moved, or the link might be broken.";
$root_prefix = "";

include 'includes/head.php';
include 'includes/header.php';
?>

<main>

    <style>
        .error-404-section {
            min-height: 78vh;
            display: flex;
            align-items: center;
            padding: 6rem 1.5rem;
        }
        .error-404-inner {
            margin: 0 auto;
            width: 100%;
            text-align: center;
            position: relative;
            z-index: 2;
        }
        .error-404-eyebrow {
            justify-content: center;
            color: var(--forest);
            margin-bottom: 1.75rem;
        }
        .error-404-code {
            font-family: var(--serif-global);
            font-weight: 600;
            line-height: 0.85;
            color: var(--forest);
            font-size: clamp(6rem, 18vw, 11rem);
            letter-spacing: -0.03em;
            margin-bottom: 0.5rem;
        }
        .error-404-title {
            font-family: var(--sans-global);
            font-weight: 500;
            font-size: clamp(1.6rem, 4vw, 2.4rem);
            color: var(--forest);
            letter-spacing: -0.02em;
            margin-bottom: 1rem;
        }
        .error-404-title .serif {
            color: var(--forest);
        }
        .error-404-desc {
            font-size: 1.05rem;
            line-height: 1.6;
            max-width: 520px;
            margin: 0 auto 2.5rem;
        }
        .error-404-actions {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
        }
    </style>

    <section class="bg-cream grain error-404-section">
        <div class="max-w-1000 error-404-inner">

            <div class="eyebrow error-404-eyebrow">
                Error 404
            </div>

            <div class="error-404-code">
                4<span class="text-lime">0</span>4
            </div>

            <h1 class="error-404-title">
                We couldn't find <span class="serif">that page</span>
            </h1>

            <p class="text-dark-muted error-404-desc">
                The page you're looking for doesn't exist, may have moved, or the link might be broken. Let's get you back on track.
            </p>

            <div class="error-404-actions">
                <a href="<?php echo $root_prefix; ?>/" class="btn-lime">
                    Back to Homepage
                </a>
                <a href="<?php echo $root_prefix; ?>/contact" class="btn-outline-dark">
                    Contact Us
                </a>
            </div>

        </div>
    </section>

</main>

<?php
include 'includes/footer.php';
include 'includes/scripts.php';
?>