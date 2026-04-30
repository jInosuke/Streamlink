<?php
/**
 * The main template file - Home Page
 *
 * @package Streamlink
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <div class="hero-badge">
                <svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7-6.3-4.6-6.3 4.6 2.3-7-6-4.6h7.6z"/>
                </svg>
                <span><?php esc_html_e('Built with WordPress', 'streamlink'); ?></span>
            </div>
            
            <h1 class="hero-title">
                <?php esc_html_e('Build Beautiful Apps', 'streamlink'); ?>
                <span class="gradient-text"><?php esc_html_e('Lightning Fast', 'streamlink'); ?></span>
            </h1>
            
            <p class="hero-description">
                <?php esc_html_e('A modern WordPress theme with authentication, custom post types, and stunning design. Start shipping features, not boilerplate.', 'streamlink'); ?>
            </p>
            
            <div class="hero-actions">
                <?php if (is_user_logged_in()) : ?>
                    <a href="<?php echo esc_url(home_url('/dashboard')); ?>" class="btn btn-primary btn-lg">
                        <?php esc_html_e('Go to Dashboard', 'streamlink'); ?>
                        <svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/register')); ?>" class="btn btn-primary btn-lg">
                        <?php esc_html_e('Get Started', 'streamlink'); ?>
                        <svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                            <path d="M5 12h14M12 5l7 7-7 7"/>
                        </svg>
                    </a>
                <?php endif; ?>
                <a href="https://github.com" class="btn btn-outline btn-lg" target="_blank" rel="noopener">
                    <?php esc_html_e('View on GitHub', 'streamlink'); ?>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <div class="section-header">
            <h2><?php esc_html_e('Everything You Need', 'streamlink'); ?></h2>
            <p><?php esc_html_e('Powerful features to accelerate your development workflow', 'streamlink'); ?></p>
        </div>

        <div class="features-grid">
            <?php
            $features = array(
                array(
                    'icon' => 'zap',
                    'title' => __('Lightning Fast', 'streamlink'),
                    'description' => __('Optimized for performance with lazy loading and efficient queries.', 'streamlink'),
                ),
                array(
                    'icon' => 'shield',
                    'title' => __('Secure by Default', 'streamlink'),
                    'description' => __('Complete authentication system with WordPress user management.', 'streamlink'),
                ),
                array(
                    'icon' => 'sparkles',
                    'title' => __('Beautiful UI', 'streamlink'),
                    'description' => __('Modern design with customizable themes and responsive layouts.', 'streamlink'),
                ),
                array(
                    'icon' => 'database',
                    'title' => __('Custom Post Types', 'streamlink'),
                    'description' => __('Flexible content management with custom fields and taxonomies.', 'streamlink'),
                ),
                array(
                    'icon' => 'users',
                    'title' => __('User Management', 'streamlink'),
                    'description' => __('Complete user profiles, roles, and capabilities system.', 'streamlink'),
                ),
                array(
                    'icon' => 'trending-up',
                    'title' => __('Production Ready', 'streamlink'),
                    'description' => __('Best practices, SEO optimized, and WordPress coding standards.', 'streamlink'),
                ),
            );

            foreach ($features as $feature) :
            ?>
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg class="icon" width="24" height="24" fill="currentColor">
                            <!-- Icon SVG path here -->
                        </svg>
                    </div>
                    <h3><?php echo esc_html($feature['title']); ?></h3>
                    <p><?php echo esc_html($feature['description']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Tech Stack Section -->
<section class="tech-stack-section">
    <div class="container">
        <div class="section-header">
            <h2><?php esc_html_e('Built with WordPress', 'streamlink'); ?></h2>
            <p><?php esc_html_e('Leveraging the power of the world\'s most popular CMS', 'streamlink'); ?></p>
        </div>

        <div class="tech-grid">
            <?php
            $technologies = array(
                array('name' => 'WordPress 6+', 'desc' => 'Latest WordPress features'),
                array('name' => 'PHP 8.0+', 'desc' => 'Modern PHP'),
                array('name' => 'MySQL', 'desc' => 'Reliable database'),
                array('name' => 'REST API', 'desc' => 'API integration'),
                array('name' => 'Custom Fields', 'desc' => 'Flexible content'),
                array('name' => 'Gutenberg', 'desc' => 'Block editor'),
                array('name' => 'WP CLI', 'desc' => 'Command line tools'),
                array('name' => 'Responsive', 'desc' => 'Mobile-first design'),
            );

            foreach ($technologies as $tech) :
            ?>
                <div class="tech-item">
                    <div class="tech-name"><?php echo esc_html($tech['name']); ?></div>
                    <div class="tech-desc"><?php echo esc_html($tech['desc']); ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="cta-card">
            <h2><?php esc_html_e('Ready to Build Something Amazing?', 'streamlink'); ?></h2>
            <p><?php esc_html_e('Start with a solid WordPress foundation and ship your product faster.', 'streamlink'); ?></p>
            <?php if (!is_user_logged_in()) : ?>
                <a href="<?php echo esc_url(home_url('/register')); ?>" class="btn btn-primary btn-lg">
                    <?php esc_html_e('Start Building Now', 'streamlink'); ?>
                    <svg class="icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                        <path d="M5 12h14M12 5l7 7-7 7"/>
                    </svg>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php
get_footer();