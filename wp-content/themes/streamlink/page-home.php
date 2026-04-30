<?php
/**
 * Template Name: Home Page
 * Description: Custom homepage template with all sections for patrons
 */

get_header();
?>

<main id="main-content" class="site-main">
    
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Support Creators.<br>Get Exclusive Content.</h1>
                <p class="hero-subtitle">Join a community where your support directly helps creators thrive while you gain access to exclusive content, behind-the-scenes updates, and special perks.</p>
                <div class="hero-cta">
                    <a href="<?php echo esc_url(home_url('/browse-creators')); ?>" class="btn btn-primary btn-lg">Find Creators to Support</a>
                    <a href="<?php echo esc_url(home_url('/how-it-works')); ?>" class="btn btn-secondary btn-lg">How It Works</a>
                </div>
            </div>
            <div class="hero-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-patrons.jpg" alt="Support your favorite creators" loading="eager">
            </div>
        </div>
    </section>

    <!-- Unlock Rewards Section -->
    <section class="unlock-rewards-section section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Unlock Exclusive Rewards</h2>
                <p class="section-subtitle">Get access to premium content and unique experiences by supporting your favorite creators</p>
            </div>
            
            <div class="rewards-grid">
                <div class="reward-card">
                    <div class="reward-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                            <path d="M2 17l10 5 10-5"/>
                            <path d="M2 12l10 5 10-5"/>
                        </svg>
                    </div>
                    <h3 class="reward-title">Exclusive Content</h3>
                    <p class="reward-description">Access members-only posts, videos, podcasts, and behind-the-scenes content not available anywhere else.</p>
                </div>

                <div class="reward-card">
                    <div class="reward-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M12 6v6l4 2"/>
                        </svg>
                    </div>
                    <h3 class="reward-title">Early Access</h3>
                    <p class="reward-description">Be the first to see new releases, products, or announcements before the general public.</p>
                </div>

                <div class="reward-card">
                    <div class="reward-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                    </div>
                    <h3 class="reward-title">Community Access</h3>
                    <p class="reward-description">Join private Discord servers, forums, or live streams to connect directly with creators and fellow patrons.</p>
                </div>

                <div class="reward-card">
                    <div class="reward-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
                            <line x1="7" y1="7" x2="7.01" y2="7"/>
                        </svg>
                    </div>
                    <h3 class="reward-title">Special Perks</h3>
                    <p class="reward-description">Receive personalized shoutouts, custom content, merchandise discounts, and other tier-specific benefits.</p>
                </div>

                <div class="reward-card">
                    <div class="reward-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                        </svg>
                    </div>
                    <h3 class="reward-title">Direct Interaction</h3>
                    <p class="reward-description">Get personal responses to comments, participate in Q&A sessions, and influence future content.</p>
                </div>

                <div class="reward-card">
                    <div class="reward-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                            <circle cx="8.5" cy="8.5" r="1.5"/>
                            <path d="M21 15l-5-5L5 21"/>
                        </svg>
                    </div>
                    <h3 class="reward-title">Digital Downloads</h3>
                    <p class="reward-description">Download exclusive digital files, templates, artwork, music, or resources created by your favorite creators.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Your Content Your Rules Section -->
    <section class="content-rules-section section-padding bg-light">
        <div class="container">
            <div class="content-split">
                <div class="content-text">
                    <h2 class="section-title">Your Support, Your Choice</h2>
                    <p class="lead-text">On our platform, you're in control of who you support and how much you contribute. There's no algorithm deciding what you see—just genuine connections between patrons and creators.</p>
                    
                    <ul class="feature-list">
                        <li>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Support multiple creators with flexible subscription tiers</span>
                        </li>
                        <li>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Cancel or adjust your patronage anytime without hassle</span>
                        </li>
                        <li>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Track your spending and see exactly where your support goes</span>
                        </li>
                        <li>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <polyline points="20 6 9 17 4 12"/>
                            </svg>
                            <span>Discover new creators through genuine community recommendations</span>
                        </li>
                    </ul>
                </div>
                
                <div class="content-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/patron-dashboard.jpg" alt="Patron dashboard interface" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Flexible Subscriptions Section -->
    <section class="flexible-subscriptions-section section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Flexible Subscription Options</h2>
                <p class="section-subtitle">Choose the level of support that works for you—every contribution makes a difference</p>
            </div>

            <div class="subscription-features">
                <div class="subscription-card">
                    <div class="subscription-header">
                        <h3>Multiple Tiers</h3>
                    </div>
                    <div class="subscription-content">
                        <p>Creators offer various subscription levels, from basic support to premium tiers with exclusive perks. Choose what fits your budget and desired level of access.</p>
                    </div>
                </div>

                <div class="subscription-card">
                    <div class="subscription-header">
                        <h3>Easy Management</h3>
                    </div>
                    <div class="subscription-content">
                        <p>View all your subscriptions in one dashboard. Upgrade, downgrade, or cancel anytime with just a few clicks. No hidden fees or complicated processes.</p>
                    </div>
                </div>

                <div class="subscription-card">
                    <div class="subscription-header">
                        <h3>One-Time Support</h3>
                    </div>
                    <div class="subscription-content">
                        <p>Not ready to commit? Send a one-time tip or purchase individual pieces of content to show your support without a recurring subscription.</p>
                    </div>
                </div>
            </div>

            <div class="pricing-comparison">
                <h3 class="comparison-title">Typical Creator Tiers</h3>
                <div class="tier-cards">
                    <div class="tier-card">
                        <div class="tier-header">
                            <h4 class="tier-name">Basic Supporter</h4>
                            <p class="tier-price">$3-5<span>/month</span></p>
                        </div>
                        <ul class="tier-features">
                            <li>Access to patron-only posts</li>
                            <li>Support the creator's work</li>
                            <li>Community Discord access</li>
                            <li>Monthly thank you messages</li>
                        </ul>
                    </div>

                    <div class="tier-card featured">
                        <div class="tier-badge">Most Popular</div>
                        <div class="tier-header">
                            <h4 class="tier-name">Premium Patron</h4>
                            <p class="tier-price">$10-15<span>/month</span></p>
                        </div>
                        <ul class="tier-features">
                            <li>Everything in Basic tier</li>
                            <li>Early access to new content</li>
                            <li>Behind-the-scenes updates</li>
                            <li>Monthly exclusive content</li>
                            <li>Vote on future projects</li>
                        </ul>
                    </div>

                    <div class="tier-card">
                        <div class="tier-header">
                            <h4 class="tier-name">VIP Supporter</h4>
                            <p class="tier-price">$25+<span>/month</span></p>
                        </div>
                        <ul class="tier-features">
                            <li>Everything in Premium tier</li>
                            <li>One-on-one video calls</li>
                            <li>Personalized content requests</li>
                            <li>Physical merchandise</li>
                            <li>Name in video credits</li>
                            <li>Exclusive Discord role</li>
                        </ul>
                    </div>
                </div>
                <p class="pricing-note">Actual tiers and pricing vary by creator. These are typical examples.</p>
            </div>
        </div>
    </section>

    <!-- Advertising Solutions Section -->
    <section class="advertising-section section-padding bg-dark text-white">
        <div class="container">
            <div class="content-split reverse">
                <div class="content-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ad-free-experience.jpg" alt="Ad-free content experience" loading="lazy">
                </div>
                
                <div class="content-text">
                    <h2 class="section-title">Support Replaces Ads</h2>
                    <p class="lead-text">Unlike traditional platforms, your patronage helps creators reduce or eliminate intrusive advertising, leading to a better content experience for everyone.</p>
                    
                    <div class="benefit-list">
                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <circle cx="12" cy="12" r="10"/>
                                    <line x1="15" y1="9" x2="9" y2="15"/>
                                    <line x1="9" y1="9" x2="15" y2="15"/>
                                </svg>
                            </div>
                            <div class="benefit-content">
                                <h3>Ad-Free or Ad-Light Content</h3>
                                <p>Patrons often enjoy content with fewer or no advertisements, making for an uninterrupted viewing experience.</p>
                            </div>
                        </div>

                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M12 2L2 7l10 5 10-5-10-5z"/>
                                    <path d="M2 17l10 5 10-5"/>
                                    <path d="M2 12l10 5 10-5"/>
                                </svg>
                            </div>
                            <div class="benefit-content">
                                <h3>Higher Quality Content</h3>
                                <p>When creators aren't chasing ad revenue, they can focus on quality over quantity and clickbait tactics.</p>
                            </div>
                        </div>

                        <div class="benefit-item">
                            <div class="benefit-icon">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
                                </svg>
                            </div>
                            <div class="benefit-content">
                                <h3>Direct Support Model</h3>
                                <p>Your money goes directly to creators, not to ad networks or platform algorithms.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Patron Benefits Section -->
    <section class="patron-benefits-section section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Why Become a Patron?</h2>
                <p class="section-subtitle">Join thousands of patrons who are making a real difference in creators' lives</p>
            </div>

            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-number">01</div>
                    <h3>Make a Real Impact</h3>
                    <p>Your support directly helps creators continue doing what they love. Many creators rely on patron support as their primary income source.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-number">02</div>
                    <h3>Get Exclusive Access</h3>
                    <p>Enjoy content and perks not available anywhere else. From early releases to behind-the-scenes content, patrons get the VIP experience.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-number">03</div>
                    <h3>Join a Community</h3>
                    <p>Connect with like-minded fans and the creators themselves. Many creators host private Discord servers, live streams, and events for patrons.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-number">04</div>
                    <h3>Influence Content</h3>
                    <p>Higher-tier patrons often get a say in what content gets created next through polls, requests, and direct feedback channels.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-number">05</div>
                    <h3>Support Independence</h3>
                    <p>Help creators maintain creative freedom without corporate sponsorships or advertising pressure dictating their content.</p>
                </div>

                <div class="benefit-card">
                    <div class="benefit-number">06</div>
                    <h3>Feel Good</h3>
                    <p>There's genuine satisfaction in knowing your contribution helps someone pursue their passion and create amazing content.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Platform Benefits Section -->
    <section class="platform-benefits-section section-padding bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Platform Features for Patrons</h2>
                <p class="section-subtitle">Everything you need for a seamless patron experience</p>
            </div>

            <div class="platform-grid">
                <div class="platform-feature">
                    <div class="feature-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
                            <line x1="8" y1="21" x2="16" y2="21"/>
                            <line x1="12" y1="17" x2="12" y2="21"/>
                        </svg>
                    </div>
                    <h3>Unified Dashboard</h3>
                    <p>Manage all your subscriptions, view exclusive content, and track your support from one central location.</p>
                </div>

                <div class="platform-feature">
                    <div class="feature-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                            <line x1="16" y1="13" x2="8" y2="13"/>
                            <line x1="16" y1="17" x2="8" y2="17"/>
                            <polyline points="10 9 9 9 8 9"/>
                        </svg>
                    </div>
                    <h3>Content Library</h3>
                    <p>Access your entire collection of patron-exclusive content with powerful search and filtering options.</p>
                </div>

                <div class="platform-feature">
                    <div class="feature-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                            <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                        </svg>
                    </div>
                    <h3>Smart Notifications</h3>
                    <p>Get notified when your favorite creators post new content, go live, or offer special promotions.</p>
                </div>

                <div class="platform-feature">
                    <div class="feature-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="1" y="4" width="22" height="16" rx="2" ry="2"/>
                            <line x1="1" y1="10" x2="23" y2="10"/>
                        </svg>
                    </div>
                    <h3>Secure Payments</h3>
                    <p>Multiple payment options with bank-level security. Your financial information is always protected.</p>
                </div>

                <div class="platform-feature">
                    <div class="feature-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                            <circle cx="12" cy="12" r="3"/>
                        </svg>
                    </div>
                    <h3>Privacy Controls</h3>
                    <p>Choose what information is visible to creators and other patrons. Your privacy matters to us.</p>
                </div>

                <div class="platform-feature">
                    <div class="feature-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                            <line x1="12" y1="17" x2="12.01" y2="17"/>
                        </svg>
                    </div>
                    <h3>24/7 Support</h3>
                    <p>Our dedicated support team is here to help with any questions or issues you might encounter.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">What Patrons Are Saying</h2>
            </div>

            <div class="testimonials-slider">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"I love being able to support creators I follow while getting exclusive content. The community aspect makes it feel like I'm part of something special, not just a subscriber."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/patron-avatar-1.jpg" alt="Sarah M.">
                        </div>
                        <div class="author-info">
                            <div class="author-name">Sarah M.</div>
                            <div class="author-title">Supporting 5 creators</div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"The platform makes it incredibly easy to manage my subscriptions. I can see exactly where my money goes and the impact I'm making. Plus the exclusive Discord access is amazing!"</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/patron-avatar-2.jpg" alt="Michael T.">
                        </div>
                        <div class="author-info">
                            <div class="author-name">Michael T.</div>
                            <div class="author-title">Supporting 3 creators</div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>"Best decision I made was becoming a patron. The behind-the-scenes content and early access to new projects is worth every penny. I feel like I'm really part of the creative journey."</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/patron-avatar-3.jpg" alt="Jennifer L.">
                        </div>
                        <div class="author-info">
                            <div class="author-name">Jennifer L.</div>
                            <div class="author-title">Supporting 8 creators</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section section-padding bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Frequently Asked Questions</h2>
            </div>

            <div class="faq-container">
                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>How do subscriptions work?</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="6 9 12 15 18 9"/>
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <p>When you become a patron, you choose a monthly subscription tier that fits your budget. You'll be charged on the same day each month and gain immediate access to that tier's benefits. You can upgrade, downgrade, or cancel anytime.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>Can I support multiple creators?</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="6 9 12 15 18 9"/>
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <p>Absolutely! You can support as many creators as you want. Your dashboard makes it easy to manage all your subscriptions in one place, and you'll get access to exclusive content from all the creators you support.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>What payment methods do you accept?</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="6 9 12 15 18 9"/>
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <p>We accept all major credit cards (Visa, Mastercard, American Express, Discover), PayPal, and various local payment methods depending on your region. All transactions are processed securely through industry-leading payment processors.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>Can I cancel my subscription anytime?</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="6 9 12 15 18 9"/>
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <p>Yes, you can cancel your subscription at any time with no penalties or fees. You'll continue to have access to patron benefits until the end of your current billing period. There's no commitment required.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>What happens if I miss a payment?</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="6 9 12 15 18 9"/>
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <p>If a payment fails, we'll attempt to process it again over the next few days. You'll receive email notifications and maintain access during this grace period. If payment cannot be processed, your subscription will be paused until you update your payment method.</p>
                    </div>
                </div>

                <div class="faq-item">
                    <button class="faq-question" aria-expanded="false">
                        <span>How do I access exclusive content?</span>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polyline points="6 9 12 15 18 9"/>
                        </svg>
                    </button>
                    <div class="faq-answer">
                        <p>Once you become a patron, you'll see patron-exclusive posts on the creator's page and in your patron dashboard. Some creators also provide access to private Discord servers, Dropbox folders, or other platforms—instructions will be provided in your welcome message.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA Section -->
    <section class="final-cta-section section-padding">
        <div class="container">
            <div class="cta-content text-center">
                <h2 class="cta-title">Ready to Support Amazing Creators?</h2>
                <p class="cta-