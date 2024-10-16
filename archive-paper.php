<?php
get_header(); ?>

<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/breadcrumbs.css')); ?>">
<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/buttons.css')); ?>">
<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/researchCreativity.css')); ?>">

<nav class="breadcrumbs">
  <a href="<?php echo esc_url(site_url()); ?>">
    <span class="home-icon">
      <img src="<?php echo esc_url(get_theme_file_uri('/images/home.png')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
    </span>
  </a>
  <span class="breadcrumbsSeparator">></span>
  <a href="<?php echo esc_url(site_url('/research-creativity/')); ?>" class="current">成果紀錄</a>
  <span class="breadcrumbsSeparator">></span>
  <span class="current">碩士論文</span>
</nav>

<h1 class="research-creativity-title">最新碩士論文</h1>

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$homepagePapers = new WP_Query(array(
    'post_type' => 'paper',
    'paged' => $paged,
    'posts_per_page' => 10,
    'meta_key' => 'publish_year',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',
));

if ($homepagePapers->have_posts()) : ?>
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
    </table>

    <div class="paperPagination">
        <?php
        $current_page = max(1, get_query_var('paged'));
        $total_pages = $homepagePapers->max_num_pages;

        $prev_disabled = ($current_page <= 1) ? 'disabled' : '';
        $next_disabled = ($current_page >= $total_pages) ? 'disabled' : '';
        ?>
        <button class="prevPage <?php echo esc_attr($prev_disabled); ?>" 
            onclick="location.href='<?php echo esc_url(get_previous_posts_page_link()); ?>'" 
            <?php echo $prev_disabled ? 'disabled' : ''; ?>>
            &lt;
        </button>
        <span class="currentPage"><?php echo esc_html($current_page); ?></span>
        <button class="nextPage <?php echo esc_attr($next_disabled); ?>" 
            onclick="location.href='<?php echo esc_url(get_next_posts_page_link()); ?>'" 
            <?php echo $next_disabled ? 'disabled' : ''; ?>>
            &gt;
        </button>
    </div>

<?php else : ?>
    <p>No papers found.</p>
<?php endif;

wp_reset_postdata();
?>

<?php get_footer(); ?>
