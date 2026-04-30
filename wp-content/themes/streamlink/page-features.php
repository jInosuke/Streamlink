<?php
/**
 * Template Name: Features
 * 
 * @package StreamLink
 * @since 1.0.0
 */

get_header();
?>

<main id="main-content" class="features-page">
    
    <!-- Hero Section -->
    <section class="section section-lg hero-section">
        <div class="container">
            <div class="hero-content text-center">
                <h1 class="hero-title">Create without limits</h1>
                <p class="hero-subtitle">Powerful tools, boundless creativity, and everything in-between for your creative brand building destiny.</p>
            </div>
        </div>
    </section>

    <!-- Gamified Creator Journey -->
    <section class="section section-gray">
        <div class="container">
            <div class="text-center mb-6">
                <p class="section-label">Gamified</p>
                <h2 class="section-title">Gamified creator journey</h2>
                <p class="section-subtitle">Reward creativity and let the engaging experience unfold</p>
            </div>

            <div class="grid grid-cols-1 grid-cols-2 gap-12" style="align-items: center;">
                <div>
                    <h3 class="mb-4">Level up your creative potential</h3>
                    <p class="mb-6">Earn rewards for every creator milestone you achieve. Unlock new abilities as you grow your community.</p>
                    <div class="flex gap-4">
                        <a href="<?php echo esc_url(home_url('/pricing')); ?>" class="btn btn-primary">Start</a>
                        <a href="<?php echo esc_url(home_url('/how-it-works')); ?>" class="btn btn-secondary">More ▶</a>
                    </div>
                </div>
                <div>
                    <div class="gamification-showcase">
                        <div class="img-placeholder" style="min-height: 400px;">Gamification Dashboard UI</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Creator Control and Insights -->
    <section class="section">
        <div class="container">
            <div class="text-center mb-8">
                <h2 class="section-title">Creator control and insights</h2>
                <p class="section-subtitle">Powerful tools to help you manage your creator empire</p>
            </div>

            <div class="grid grid-cols-1 grid-cols-3">
                <!-- Custom Profile Card -->
                <div class="card card-dark">
                    <div class="mb-4" style="font-size: 2.5rem;">🎨</div>
                    <h3 class="mb-4">Custom profile and branding</h3>
                    <p class="mb-6">Create a unique digital identity that reflects your creative vision and audience personality.</p>
                    <div class="flex gap-4">
                        <a href="#" class="btn btn-primary">Customize</a>
                        <a href="#" class="btn btn-ghost">Learn ▶</a>
                    </div>
                </div>

                <!-- Content Management Card -->
                <div class="card card-dark">
                    <div class="mb-4" style="font-size: 2.5rem;">📊</div>
                    <h3 class="mb-4">Content management system</h3>
                    <p class="mb-6">Organize and distribute your content seamlessly across multiple formats and channels.</p>
                    <div class="flex gap-4">
                        <a href="#" class="btn btn-primary">Manage</a>
                        <a href="#" class="btn btn-ghost">Explore ▶</a>
                    </div>
                </div>

                <!-- Analytics Card -->
                <div class="card card-dark">
                    <div class="mb-4" style="font-size: 2.5rem;">📈</div>
                    <h3 class="mb-4">Audience analytics dashboard</h3>
                    <p class="mb-6">Track your growth and understand your audience with powerful data insights.</p>
                    <div class="flex gap-4">
                        <a href="#" class="btn btn-primary">Analyze</a>
                        <a href="#" class="btn btn-ghost">View ▶</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Multiple Revenue Streams -->
    <section class="section section-gray">
        <div class="container">
            <div class="text-center mb-8">
                <h2 class="section-title">Multiple revenue streams</h2>
                <p class="section-subtitle">Turn your passion into a sustainable, thriving creator economy</p>
            </div>

            <div class="grid grid-cols-1 grid-cols-3">
                <!-- Subscriptions Card -->
                <div class="card">
                    <div class="img-placeholder mb-4" style="min-height: 200px;">Subscription Tiers Image</div>
                    <h3 class="mb-4">Flexible subscription tiers</h3>
                    <p class="mb-6">Design subscription packages that reflect your creative community while fans choose their level of support.</p>
                    <div class="flex gap-4">
                        <a href="<?php echo esc_url(home_url('/pricing')); ?>" class="btn btn-primary">Explore</a>
                        <a href="#" class="btn btn-outline">Learn ▶</a>
                    </div>
                </div>

                <!-- Ad Revenue Card -->
                <div class="card">
                    <div class="img-placeholder mb-4" style="min-height: 200px;">Ad Revenue Image</div>
                    <h3 class="mb-4">Ad revenue sharing</h3>
                    <p class="mb-6">Benefit from platform advertising revenue through our transparent creator revenue sharing model.</p>
                    <div class="flex gap-4">
                        <a href="#" class="btn btn-primary">Discover ▶</a>
                    </div>
                </div>

                <!-- Tips Card -->
                <div class="card">
                    <div class="img-placeholder mb-4" style="min-height: 200px;">Tips & Support Image</div>
                    <h3 class="mb-4">One-time tips & support</h3>
                    <p class="mb-6">Let your biggest fans show extra support through one-time contributions and special engagement opportunities.</p>
                    <div class="flex gap-4">
                        <a href="#" class="btn btn-primary">Discover ▶</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Your Content, Your Rules -->
    <section class="section">
        <div class="container">
            <div class="grid grid-cols-1 grid-cols-2 gap-12" style="align-items: center;">
                <div>
                    <div class="img-placeholder" style="min-height: 400px;">Content Control Image</div>
                </div>
                <div>
                    <div style="font-size: 3rem; margin-bottom: var(--space-4);">🎵</div>
                    <h3 class="mb-4">Your content, your rules</h3>
                    <p class="mb-6">Live an empowered creative experience with unprecedented control over how you engage, monetize, and distribute digital content.</p>
                    <div class="flex gap-4">
                        <a href="<?php echo esc_url(home_url('/pricing')); ?>" class="btn btn-primary">Join now</a>
                        <a href="<?php echo esc_url(home_url('/for-creators')); ?>" class="btn btn-secondary">Learn more ▶</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Getting Started Steps -->
    <section class="section section-dark">
        <div class="container">
            <div class="grid grid-cols-1 grid-cols-2 gap-12" style="align-items: center;">
                <div>
                    <h2 class="section-title mb-8">Getting started is simple</h2>
                    
                    <div class="feature-steps">
                        <div class="feature-step">
                            <div class="step-icon">→</div>
                            <div>
                                <h4>Connect with your creator community</h4>
                                <p class="text-muted">Join thousands of creators already building their presence</p>
                            </div>
                        </div>

                        <div class="feature-step">
                            <div class="step-icon">↑</div>
                            <div>
                                <h4>Share your creative masterpiece</h4>
                                <p class="text-muted">Upload videos, podcasts, music, or web series</p>
                            </div>
                        </div>

                        <div class="feature-step">
                            <div class="step-icon">⊙</div>
                            <div>
                                <h4>Build meaningful relationships</h4>
                                <p class="text-muted">Engage directly with your audience and grow together</p>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-4 mt-8">
                        <a href="<?php echo esc_url(home_url('/pricing')); ?>" class="btn btn-primary">Start</a>
                        <a href="<?php echo esc_url(home_url('/how-it-works')); ?>" class="btn btn-secondary">Join ▶</a>
                    </div>
                </div>
                <div>
                    <div class="img-placeholder" style="min-height: 400px;">Getting Started Flow Image</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Formats -->
    <section class="section">
        <div class="container">
            <div class="text-center mb-8">
                <h2 class="section-title">Multi-format content support</h2>
                <p class="section-subtitle">Create in the format that suits your vision</p>
            </div>

            <div class="grid grid-cols-1 grid-cols-4">
                <!-- Video -->
                <div class="card text-center">
                    <div style="font-size: 3rem; margin-bottom: var(--space-4);">🎥</div>
                    <h3 class="mb-4">Video</h3>
                    <p>Tell your story through visual narratives with up to 4K quality support</p>
                </div>

                <!-- Podcast -->
                <div class="card text-center">
                    <div style="font-size: 3rem; margin-bottom: var(--space-4);">🎙️</div>
                    <h3 class="mb-4">Podcast</h3>
                    <p>Amplify your voice across digital platforms with RSS feed support</p>
                </div>

                <!-- Music -->
                <div class="card text-center">
                    <div style="font-size: 3rem; margin-bottom: var(--space-4);">🎵</div>
                    <h3 class="mb-4">Music</h3>
                    <p>Share your sonic creations with high-quality audio streaming</p>
                </div>

                <!-- Web Series -->
                <div class="card text-center">
                    <div style="font-size: 3rem; margin-bottom: var(--space-4);">📺</div>
                    <h3 class="mb-4">Web Series</h3>
                    <p>Launch episodic content with season and episode management</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Grid: Comprehensive Tools -->
    <section class="section section-gray">
        <div class="container">
            <div class="text-center mb-8">
                <h2 class="section-title">Comprehensive creator tools</h2>
                <p class="section-subtitle">Everything you need to succeed as an independent creator</p>
            </div>

            <div class="grid grid-cols-1 grid-cols-3">
                <div class="feature-item">
                    <div class="feature-icon">📱</div>
                    <h4>Mobile-first design</h4>
                    <p>Manage your creator empire from anywhere on any device</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">🔒</div>
                    <h4>Bank-level security</h4>
                    <p>Your content and earnings are protected with enterprise-grade security</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">⚡</div>
                    <h4>5-minute setup</h4>
                    <p>Get started quickly with our streamlined onboarding process</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">📊</div>
                    <h4>Real-time analytics</h4>
                    <p>Track performance, revenue, and audience growth as it happens</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">💬</div>
                    <h4>Direct messaging</h4>
                    <p>Build relationships through one-on-one audience communication</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">🎯</div>
                    <h4>Smart discovery</h4>
                    <p>Get found by the right audience through community-first discovery</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">📧</div>
                    <h4>Email marketing</h4>
                    <p>Connect with subscribers through built-in email campaigns</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">🏆</div>
                    <h4>Achievement system</h4>
                    <p>Earn badges and level up as you hit creator milestones</p>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">🤝</div>
                    <h4>Sponsorship tools</h4>
                    <p>Connect with brands and manage partnerships seamlessly</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Creator Stories / Testimonials -->