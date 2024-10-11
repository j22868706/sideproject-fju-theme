<link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/breadcrumbs.css'); ?>">
<link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/news.css'); ?>">


<?php 
    get_header();
    while (have_posts()) {
        the_post();
        $authorTitle = get_field('author_title');
        $authorName = get_field('author_name');
        $publishDate = get_field('publish_date');
        $publisher = get_field('publisher');
        $newsImage = get_field('news_img');

        $imageUri = $newsImage ? get_theme_file_uri('/images/' . esc_attr($newsImage)) : get_theme_file_uri('/images/semfjuBuilding.png'); 
        ?>
        <nav class="breadcrumbs">
            <a href="<?php echo site_url() ?>">
                <span class="home-icon">
                <img src="<?php echo get_theme_file_uri('/images/home.png'); ?>" alt="<?php echo get_bloginfo('name'); ?>" />
                </span>
            </a>
            <span class="breadcrumbsSeparator">></span>
            <span class="current">成果紀錄</span>
            <span class="breadcrumbsSeparator">></span>
            <span class="current">精彩新聞</span>
        </nav>
        <div class="news-container">
            <div class="news-title"><?php the_title(); ?></div>
            <div class="news-subtitle">
            <span><?php echo $publishDate; ?></span>
            <span><?php echo $authorTitle; ?></span>
            <span><?php echo $authorName; ?></span>
            </div>
            <div class="news-subtitle">
            <span><?php echo $publisher; ?></span>
            </div>
            <div class="news-content"><?php the_content(); ?></div>
            <img class="news-img" src="<?php echo esc_url($imageUri); ?>" alt="<?php esc_attr(the_title()); ?>">
        </div>


<?php }

    get_footer();
?>