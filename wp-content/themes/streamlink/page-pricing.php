<?php
/**
 * Template Name: Pricing Page
 */

get_header();
?>

<div class="pricing-hero">
    <div class="container">
        <h1 class="pricing-title"><?php the_title(); ?></h1>
        <?php if (get_the_content()): ?>
            <div class="pricing-intro">
                <?php the_content(); ?>
            </div>
        <?php endif; ?>
    </div>
</div>

<div class="pricing-section">
    <div class="container">
        <?php
        // Get pricing toggle setting (monthly/annual)
        $show_toggle = get_field('show_billing_toggle');
        ?>
        
        <?php if ($show_toggle): ?>
        <div class="billing-toggle">
            <span class="toggle-label" data-period="monthly">Monthly</span>
            <label class="toggle-switch">
                <input type="checkbox" id="billingToggle">
                <span class="slider"></span>
            </label>
            <span class="toggle-label" data-period="annual">
                Annual 
                <span class="save-badge">Save 20%</span>
            </span>
        </div>
        <?php endif; ?>

        <div class="pricing-grid">
            <?php
            // Query WooCommerce products in the 'pricing-plans' category
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field'    => 'slug',
                        'terms'    => 'pricing-plans',
                    ),
                ),
                'orderby' => 'menu_order',
                'order' => 'ASC'
            );

            $pricing_query = new WP_Query($args);

            if ($pricing_query->have_posts()):
                while ($pricing_query->have_posts()): $pricing_query->the_post();
                    global $product;
                    
                    // Get custom fields
                    $is_featured = get_field('featured_plan');
                    $plan_features = get_field('plan_features');
                    $monthly_price = get_field('monthly_price');
                    $annual_price = get_field('annual_price');
                    $button_text = get_field('button_text') ?: 'Get Started';
                    $plan_description = get_field('plan_description');
                    ?>
                    
                    <div class="pricing-card <?php echo $is_featured ? 'featured' : ''; ?>" 
                         data-monthly="<?php echo esc_attr($monthly_price); ?>"
                         data-annual="<?php echo esc_attr($annual_price); ?>">
                        
                        <?php if ($is_featured): ?>
                            <div class="featured-badge">Most Popular</div>
                        <?php endif; ?>

                        <div class="pricing-card-header">
                            <h3 class="plan-name"><?php the_title(); ?></h3>
                            <?php if ($plan_description): ?>
                                <p class="plan-description"><?php echo esc_html($plan_description); ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="pricing-card-price">
                            <span class="currency">$</span>
                            <span class="amount" data-monthly="<?php echo esc_attr($monthly_price); ?>" 
                                  data-annual="<?php echo esc_attr($annual_price); ?>">
                                <?php echo esc_html($monthly_price); ?>
                            </span>
                            <span class="period">/month</span>
                        </div>

                        <?php if ($annual_price && $show_toggle): ?>
                            <div class="annual-price-info">
                                <small>Billed monthly • $<?php echo esc_html($annual_price * 12); ?>/year when billed annually</small>
                            </div>
                        <?php endif; ?>

                        <div class="pricing-card-features">
                            <?php if ($plan_features): ?>
                                <ul>
                                    <?php foreach ($plan_features as $feature): ?>
                                        <li>
                                            <svg class="check-icon" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M16.6667 5L7.5 14.1667L3.33334 10" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <?php echo esc_html($feature['feature_text']); ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>

                        <div class="pricing-card-footer">
                            <a href="<?php echo esc_url($product->add_to_cart_url()); ?>" 
                               class="btn btn-primary btn-pricing
``` <?php echo $is_featured ? 'btn-featured' : ''; ?>"
                               data-product-id="<?php echo esc_attr($product->get_id()); ?>">
                                <?php echo esc_html($button_text); ?>
                            </a>
                        </div>
                    </div>

                <?php
                endwhile;
                wp_reset_postdata();
            else:
                ?>
                <p>No pricing plans available at the moment.</p>
            <?php endif; ?>
        </div>

        <?php
        // Get FAQ section
        $faqs = get_field('pricing_faqs');
        if ($faqs):
        ?>
        <div class="pricing-faq">
            <h2>Frequently Asked Questions</h2>
            <div class="faq-grid">
                <?php foreach ($faqs as $faq): ?>
                    <div class="faq-item">
                        <h3 class="faq-question"><?php echo esc_html($faq['question']); ?></h3>
                        <div class="faq-answer"><?php echo wp_kses_post($faq['answer']); ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php endif; ?>

        <?php
        // CTA Section
        $cta_title = get_field('cta_title');
        $cta_text = get_field('cta_text');
        $cta_button = get_field('cta_button');
        
        if ($cta_title):
        ?>
        <div class="pricing-cta">
            <h2><?php echo esc_html($cta_title); ?></h2>
            <?php if ($cta_text): ?>
                <p><?php echo esc_html($cta_text); ?></p>
            <?php endif; ?>
            <?php if ($cta_button): ?>
                <a href="<?php echo esc_url($cta_button['url']); ?>" class="btn btn-primary">
                    <?php echo esc_html($cta_button['title']); ?>
                </a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>