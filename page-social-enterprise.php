<?php get_header(); ?>

<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/breadcrumbs.css')); ?>">
<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/social-enterprise.css')); ?>">

<nav class="breadcrumbs">
  <a href="<?php echo esc_url(site_url()); ?>">
    <span class="home-icon">
      <img src="<?php echo esc_url(get_theme_file_uri('/images/home.png')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
    </span>
  </a>
  <span class="breadcrumbsSeparator">></span>
  <span class="current">社企永續聚落</span>
</nav>

<section class="hero-section-container">
    <img src="<?php echo esc_url(get_theme_file_uri('/images/social-enterprise.png')); ?>" alt="social enterprise" class="social-enterprise-image" />
</section>

<section>
  <div class="testimonials-section-container">
    <div class="testimonial-section">
      <span class="subtitle">Testimonials</span>
      <h2>2022 社企永續聚落成員</h2>
        <?php 
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $homepageMembers = new WP_Query(array(
            'post_type' => 'member',
            'paged' => $paged,
            'posts_per_page' => 2,
            'meta_key' => 'company_phone',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
        ));

        if ($homepageMembers->have_posts()) : ?>
            <div class="carousel-wrapper">
            <?php 
            while ($homepageMembers->have_posts()) : $homepageMembers->the_post(); 
                $compnayLogo = get_field('company_logo');
                $compnayPhone = get_field('company_phone');
                $compnayAddress = get_field('company_address');
                $contactPerson = get_field('contact_person');
                $contactPhone = get_field('contact_phone');
                $contactEmail = get_field('contact_email');

                $imageUri = $compnayLogo ? get_theme_file_uri('/images/' . esc_attr($compnayLogo)) : get_theme_file_uri('/images/semfjuBuilding.png');
            ?>
              <div class="carousel-card">
                <div class="carousel-logo">
                  <img src="<?php echo esc_url($imageUri); ?>" alt="<?php esc_attr(the_title()); ?>">
                </div>
                <div class="carousel-content-wrapper">
                  <div class="carousel-card-header">
                    <h3 class="carousel-company-name"><?php the_title() ?></h3>
                  </div>
                  <div class="carousel-contact-info">
                    <div class="carousel-info-item">
                      <span>📞</span>
                      <span><?php echo $compnayPhone ?></span>
                    </div>
                    <div class="carousel-info-item">
                      <span>📍</span>
                      <span><?php echo $compnayAddress ?></span>
                    </div>
                    <div class="carousel-info-item">
                      <span>👤</span>
                      <span><?php echo $contactPerson ?> | <?php echo $contactPhone ?></span>
                    </div>
                    <div class="carousel-info-item">
                      <span>📧</span>
                      <span><?php echo $contactEmail ?></span>
                    </div>
                  </div>
                  <a href="#" class="carousel-button">查看聯絡手冊</a>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        <?php endif; 
        wp_reset_postdata(); 
        ?>

        <div class="carousel-dots">
          <?php for ($i = 0; $i < $homepageMembers->found_posts / 2; $i++) : ?>
            <span class="carousel-dot <?php echo ($i === 0) ? 'active' : ''; ?>"></span>
          <?php endfor; ?>
        </div>



      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
