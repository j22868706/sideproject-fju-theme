<link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/event.css'); ?>">
<link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/breadcrumbs.css'); ?>">



<?php 
    get_header();
    while (have_posts()) {
        the_post();
        $eventCategory = get_field('event_category');
        ?>
        <nav class="breadcrumbs">
            <a href="<?php echo site_url() ?>">
                <span class="home-icon">
                <img src="<?php echo get_theme_file_uri('/images/home.png'); ?>" alt="<?php echo get_bloginfo('name'); ?>" />
                </span>
            </a>
            <span class="breadcrumbsSeparator">></span>
            <span class="current">最新消息</span>
        </nav>
        <div class="eventContainer">
            <div class="event-card-title">
                <span class="event-card-category"><?php echo $eventCategory; ?></span>
                <span class="event-card-name"><?php the_title(); ?></span>
            </div>
            <div class="author-info">
                <img src="<?php echo get_theme_file_uri('/images/man.png')?>" alt="Speaker" class="author-image">
                <span class="author-name"><?php the_author();?> </span>
            </div>
            <div><?php the_content(); ?></div>
        </div>

<?php }

    get_footer();
?>