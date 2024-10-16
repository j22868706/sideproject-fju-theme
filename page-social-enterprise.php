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
    <img src="<?php echo get_theme_file_uri('/images/social-enterprise.png') ?>" alt="social enterprise" class="social-enterprise-image" />
</section>
<section>
<div class="testimonials-section-container">
  <div class="testimonial-section">
    <span class="subtitle">Testimonials</span>
    <h2>2022 社企永續聚落成員</h2>
  </div>
</div>


</section>


<?php get_footer(); ?>