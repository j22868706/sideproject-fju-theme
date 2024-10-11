<?php
get_header(); ?>

<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/breadcrumbs.css')); ?>">
<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/latestNews.css')); ?>">
<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/buttons.css')); ?>">
<style>

.research-creativity-title {
  color: #1f6662;
  text-align: left;
  padding-left: 100px;
  font-size: 36px;
  font-weight: 700
}
.research-creativity-news-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  margin: 50px auto;
  width: 1250px;

}
.research-creativity-news-card {
  position: relative;
  width: 600px;
  margin: 30px 0;
}
.research-creativity-news-image {
  width: 100%;
  display: block;
}
.research-creativity-news-content {
  position: absolute;
  bottom: -50px;
  left: 50%;
  transform: translateX(-50%);
  width: 70%;
  height: 150px;
  background-color: white;
  padding: 15px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}
.research-creativity-news-title {
  font-size: 16px;
  color: #1f6662;
  margin: 0 0 10px 0;
  text-align: center;
}

.research-creativity-news-description {
  font-size: 12px;
  color: #999;
  margin: 0;
}
    </style>

<nav class="breadcrumbs">
  <a href="<?php echo esc_url(site_url()); ?>">
    <span class="home-icon">
      <img src="<?php echo esc_url(get_theme_file_uri('/images/home.png')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
    </span>
  </a>
  <span class="breadcrumbsSeparator">></span>
  <span class="current">成果紀錄</span>
</nav>
<h1 class="research-creativity-title">精彩新聞</h1>
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$homepageNews = new WP_Query(array(
    'post_type' => 'news',
    'paged' => $paged,
    'posts_per_page' => 4,
    'meta_key' => 'publish_date',
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
));

if ($homepageNews->have_posts()) { ?>
    <div class="research-creativity-news-container">
    <?php 
    while ($homepageNews->have_posts()) {
        $homepageNews->the_post(); // 修正變數名稱為 $homepageNews
        $newsImage = get_field('news_img');
        $imageUri = $newsImage ? get_theme_file_uri('/images/' . esc_attr($newsImage)) : get_theme_file_uri('/images/semfjuBuilding.png'); 
        ?>                    
        <div class="research-creativity-news-card">
            <img class="research-creativity-news-image" src="<?php echo esc_url($imageUri); ?>" alt="<?php esc_attr(the_title()); ?>">
            <a href="<?php the_permalink(); ?>">
            <div class="research-creativity-news-content">
                <h2 class="research-creativity-news-title"><?php the_title(); ?></h2>
                <p class="research-creativity-news-description"><?php echo mb_substr(strip_tags(get_the_content()), 0, 50, 'UTF-8') . '...'; ?></p>
            </div>
            </a>
        </div>
    <?php } ?>
    </div>
<?php } 

wp_reset_postdata(); 
?>



  
<?php 
get_footer();
?>