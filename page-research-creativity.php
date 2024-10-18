<?php
get_header(); ?>

<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/breadcrumbs.css')); ?>">
<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/latestNews.css')); ?>">
<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/buttons.css')); ?>">
<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/researchCreativity.css')); ?>">


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
        $homepageNews->the_post(); 
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
    <h1 class="research-creativity-title">最新碩士論文</h1>
    <table>
        <thead>
            <tr>
                <th>論文出版年</th>
                <th>研究生姓名</th>
                <th>碩士/碩專</th>
                <th>論文名稱</th>
                <th>指導教授</th>
            </tr>
        </thead>
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $homepagePapers = new WP_Query(array(
            'post_type' => 'paper',
            'paged' => $paged,
            'posts_per_page' => 4,
            'meta_key' => 'publish_year',
            'orderby' => 'meta_value_num',
            'order' => 'DESC',
        ));

        if ($homepagePapers->have_posts()) : ?>
            <tbody>
                <?php while ($homepagePapers->have_posts()) : $homepagePapers->the_post();
                    $publishYear = get_field('publish_year');
                    $authorEnglish = get_field('author_english');
                    $authorMandarin = get_field('author_mandarin');
                    $degree = get_field('degree');
                    $paperName = get_field('paper_name');
                    $professorName1 = get_field('professor_name1');
                    $professorName2 = get_field('professor_name2');
                ?>
                    <tr>
                        <td><?php echo esc_html($publishYear); ?></td>
                        <td><?php echo esc_html($authorMandarin); ?><br><?php echo esc_html($authorEnglish); ?></td>
                        <td><?php echo esc_html($degree); ?></td>
                        <td class="paper-title"><?php the_title(); ?><br><?php echo esc_html($paperName); ?></td>
                        <td>
                            <?php echo esc_html($professorName1);
                            if (!empty($professorName2)) :
                                echo '<br>' . esc_html($professorName2);
                            endif; ?>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        <?php endif; ?>
    </table>
    <div class="paperButtonContainer">
    <a href="<?php echo esc_url(site_url('/paper')) ?>" class="paperButton">查看所有碩士論文</a>
    </div>

    <?php wp_reset_postdata(); ?>

</div>

  
<?php get_footer(); ?>
