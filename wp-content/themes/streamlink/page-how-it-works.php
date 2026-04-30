<?php
/**
 * Template Name: How It Works
 * 
 * @package StreamLink
 * @since 1.0.0
 */

get_header();
?>

<main id="main-content" class="how-it-works-page">
    
    <!-- Hero Section -->
    <section class="section section-lg hero-section">
        <div class="container">
            <div class="hero-content text-center">
                <h1 class="hero-title">Creators power content</h1>
                <p class="hero-subtitle">StreamLink revolutionizes how creators connect, share, and monetize their content through innovative platform features.</p>
            </div>
        </div>
    </section>

    <!-- How StreamLink Works -->
    <section class="section">
        <div class="container">
            <div class="text-center mb-8">
                <h2 class="section-title">How StreamLink works</h2>
                <p class="section-subtitle">A seamless journey from creation to connection</p>
            </div>
            
            <div class="grid grid-cols-1 grid-cols-3">
                <!-- Card 1 -->
                <div class="card">
                    <div class="img-placeholder">Creator Tools Image</div>
                    <h3>Creator tools for direct audience connections</h3>
                    <p>Build meaningful relationships with your audience through powerful creator tools designed for engagement and growth.</p>
                </div>

                <!-- Card 2 -->
                <div class="card">
                    <div class="img-placeholder">Engagement Image</div>
                    <h3>Engagement through content transactions</h3>
                    <p>Transform audience interaction into sustainable revenue streams while maintaining authentic connections.</p>
                </div>

                <!-- Card 3 -->
                <div class="card">
                    <div class="img-placeholder">Opportunities Image</div>
                    <h3>Unlock new content and new opportunities</h3>
                    <p>Discover new formats, audiences, and monetization strategies as you grow your creator presence.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Step 1: Account Creation -->
    <section class="section section-gray">
        <div class="container">
            <div class="grid grid-cols-1 grid-cols-2 gap-12" style="align
```-items: center;">
                <div>
                    <p class="section-label">Step 1</p>
                    <h2 class="section-title">Set up your creator dashboard</h2>
                    <p>Create your account and customize your creator profile. Set up your content categories and start building your community.</p>
                    <div class="flex gap-4 mt-6">
                        <a href="<?php echo esc_url(home_url('/pricing')); ?>" class="btn btn-primary">Get started</a>
                        <a href="<?php echo esc_url(home_url('/features')); ?>" class="btn btn-secondary">Learn more ▶</a>
                    </div>
                </div>
                <div>
                    <div class="img-placeholder" style="min-height: 400px;">Dashboard Setup Image</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Step 2: Upload Content -->
    <section class="section">
        <div class="container">
            <div class="grid grid-cols-1 grid-cols-2 gap-12" style="align-items: center;">
                <div style="order: 2;">
                    <p class="section-label">Step 2</p>
                    <h2 class="section-title">Publish your digital masterpiece</h2>
                    <p>Upload your content with our easy-to-use tools. Set your pricing, add descriptions, and prepare to engage your audience.</p>
                    <div class="flex gap-4 mt-6">
                        <a href="<?php echo esc_url(home_url('/for-creators')); ?>" class="btn btn-primary">Learn more</a>
                        <a href="#" class="btn btn-secondary">Explore ▶</a>
                    </div>
                </div>
                <div style="order: 1;">
                    <div class="img-placeholder" style="min-height: 400px;">Content Upload Image</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Step 3: Community -->
    <section class="section section-gray">
        <div class="container">
            <div class="grid grid-cols-1 grid-cols-2 gap-12" style="align-items: center;">
                <div>
                    <p class="section-label">Step 3</p>
                    <h2 class="section-title">Build your digital community</h2>
                    <p>Interact with your audience and other creators. Build meaningful connections and grow your subscriber base.</p>
                    
                    <div class="grid grid-cols-1 grid-cols-3 gap-4 mt-6 mb-6">
                        <div class="text-center">
                            <div style="font-size: 2rem; margin-bottom: var(--space-2);">🤝</div>
                            <p class="text-sm"><strong>Join the community</strong></p>
                        </div>
                        <div class="text-center">
                            <div style="font-size: 2rem; margin-bottom: var(--space-2);">🏆</div>
                            <p class="text-sm"><strong>Earn rewards</strong></p>
                        </div>
                        <div class="text-center">
                            <div style="font-size: 2rem; margin-bottom: var(--space-2);">🔗</div>
                            <p class="text-sm"><strong>Build connections</strong></p>
                        </div>
                    </div>

                    <div class="flex gap-4 mt-6">
                        <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-primary">Explore</a>
                        <a href="#" class="btn btn-secondary">Join ▶</a>
                    </div>
                </div>
                <div>
                    <div class="img-placeholder" style="min-height: 400px;">Community Image</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Creator Journey Timeline -->
    <section class="section">
        <div class="container">
            <div class="text-center mb-8">
                <h2 class="section-title">Your path to digital content creation</h2>
                <p class="section-subtitle">A step-by-step guide to building your presence</p>
            </div>

            <div class="creator-journey-timeline">
                <!-- Day 1 -->
                <div class="timeline-item">
                    <div class="timeline-marker">
                        <span class="timeline-day">Day 1</span>
                    </div>
                    <div class="card">
                        <h3>Account creation</h3>
                        <p>Sign up and create your customized creator profile and establish your initial content categories.</p>
                    </div>
                </div>

                <!-- Day 7 -->
                <div class="timeline-item">
                    <div class="timeline-marker">
                        <span class="timeline-day">Day 7</span>
                    </div>
                    <div class="card">
                        <h3>First engagement</h3>
                        <p>Start interacting with your audience. Build connections and engage with creator content and communities.</p>
                    </div>
                </div>

                <!-- Day 30 -->
                <div class="timeline-item">
                    <div class="timeline-marker">
                        <span class="timeline-day">Day 30</span>
                    </div>
                    <div class="card">
                        <h3>Community growth</h3>
                        <p>Watch your subscriber base grow as you consistently create and engage with your digital audience.</p>
                    </div>
                </div>

                <!-- Day 90 -->
                <div class="timeline-item">
                    <div class="timeline-marker">
                        <span class="timeline-day">Day 90</span>
                    </div>
                    <div class="card">
                        <h3>Advanced interactions</h3>
                        <p>Explore advanced monetization options and establish yourself as a leader in your content niche.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="section section-gray">
        <div class="container">
            <h2 class="section-title text-center mb-8">FAQs</h2>
            
            <div class="faq-container" style="max-width: 800px; margin: 0 auto;">
                <!-- FAQ Item 1 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>How does StreamLink support content creators?</span>
                        <span class="faq-icon" aria-hidden="true">+</span>
                    </button>
                    <div class="faq-answer" hidden>
                        <p>StreamLink provides comprehensive tools for creators including customizable profiles, multiple revenue streams (subscriptions, tips, ad revenue), advanced analytics, and direct audience connections. You keep 85% of all revenue generated.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>How does the subscription model work?</span>
                        <span class="faq-icon" aria-hidden="true">+</span>
                    </button>
                    <div class="faq-answer" hidden>
                        <p>Choose from four tiers: Creator Starter (Free), Creator ($19/mo), Creator Pro ($49/mo), or Creator Elite ($149/mo). Each tier unlocks additional features, subscriber limits, and monetization tools. Annual plans save 17%.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>What content can I upload?</span>
                        <span class="faq-icon" aria-hidden="true">+</span>
                    </button>
                    <div class="faq-answer" hidden>
                        <p>StreamLink supports videos, podcasts, music, and web series. Upload limits vary by tier—from 5 uploads/month on the free tier to unlimited on paid plans. Video quality ranges from 720p to 4K depending on your plan.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>How quickly can I start earning?</span>
                        <span class="faq-icon" aria-hidden="true">+</span>
                    </button>
                    <div class="faq-answer" hidden>
                        <p>You can start earning immediately after setting up your account and publishing content. Set subscription tiers, accept one-time tips, and begin building your audience. Payments are processed weekly via Stripe.</p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>What makes StreamLink different from YouTube or Patreon?</span>
                        <span class="faq-icon" aria-hidden="true">+</span>
                    </button>
                    <div class="faq-answer" hidden>
                        <p>Unlike YouTube, you're not dependent on algorithms—you own the direct relationship with your audience. Unlike Patreon, we offer better discovery tools and a gamified creator experience. You keep 85% of revenue on StreamLink vs ~55% on YouTube.</p>
                    </div>
                </div>
            </div>

            <div class="text-center mt-8">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline">See all FAQs</a>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="section cta-section">
        <div class="container">
            <div class="text-center">
                <h2 class="section-title">Start your creator journey today</h2>
                <p class="section-subtitle">Join thousands of creators building their digital presence and monetizing their content.</p>
                <div class="flex gap-4 justify-center mt-6">
                    <a href="<?php echo esc_url(home_url('/pricing')); ?>" class="btn btn-primary btn-lg">Get started</a>
                    <a href="<?php echo esc_url(home_url('/features')); ?>" class="btn btn-secondary btn-lg">Learn more</a>
                </div>
            </div>
        </div>
    </section>

</main>

<style>
/* Timeline Styles */
.creator-journey-timeline {
    position: relative;
    max-width: 800px;
    margin: 0 auto;
}

.timeline-item {
    position: relative;
    padding-left: 80px;
    margin-bottom: var(--space-8);
}

.timeline-item:last-child {
    margin-bottom: 0;
}

.timeline-marker {
    position: absolute;
    left: 0;
    top: 0;
    width: 60px;
    height: 60px;
    background: var(--color-accent-gradient);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: var(--shadow-lg);
}

.timeline-day {
    color: white;
    font-weight: var(--font-weight-bold);
    font-size: var(--font-size-sm);
    text-align: center;
}

.timeline-item::before {
    content: '';
    position: absolute;
    left: 30px;
    top: 60px;
    width: 2px;
    height: calc(100% + var(--space-8));
    background: var(--color-border-light);
}

.timeline-item:last-child::before {
    display: none;
}

/* FAQ Styles */
.faq-item {
    border-bottom: 1px solid var(--color-border-light);
}

.faq-question {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--space-5) 0;
    text-align: left;
    font-size: var(--font-size-lg);
    font-weight: var(--font-weight-semibold);
    color: var(--color-text-primary);
    background: none;
    border: none;
    cursor: pointer;
    transition: color var(--transition-base);
}

.faq-question:hover {
    color: var(--color-accent-primary);
}

.faq-icon {
    font-size: var(--font-size-2xl);
    font-weight: var(--font-weight-normal);
    color: var(--color-accent-primary);
    transition: transform var(--transition-base);
}

.faq-question[aria-expanded="true"] .faq-icon {
    transform: rotate(45deg);
}

.faq-answer {
    padding: 0 0 var(--space-5) 0;
    color: var(--color-text-secondary);
    line-height: var(--line-height-relaxed);
}

.faq-answer[hidden] {
    display: none;
}

@media (max-width: 767px) {
    .timeline-item {
        padding-left: 60px;
    }
    
    .timeline-marker {
        width: 50px;
        height: 50px;
    }
    
    .timeline-item::before {
        left: 25px;
        top: 50px;
    }
}
</style>

<script>
// FAQ Accordion functionality
document.addEventListener('DOMContentLoaded', function() {
    const faqQuestions = document.querySelectorAll('.faq-question');
    
    faqQuestions.forEach(question => {
        question.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            const answer = this.nextElementSibling;
            
            // Close all other FAQs
            faqQuestions.forEach(q => {
                if (q !== this) {
                    q.setAttribute('aria-expanded', 'false');
                    q.nextElementSibling.hidden = true;
                }
            });
            
            // Toggle current FAQ
            this.setAttribute('aria-expanded', !isExpanded);
            answer.hidden = isExpanded;
        });
    });
});
</script>

<?php get_footer(); ?>