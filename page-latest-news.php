<?php
get_header(); ?>

<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/breadcrumbs.css')); ?>">
<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/latestNews.css')); ?>">
<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/buttons.css')); ?>">


<script>
  document.addEventListener('DOMContentLoaded', function() {
    const currentPage = <?php echo isset($current_page) ? esc_js($current_page) : 1; ?>; // Ensure $current_page is set
    const maxPages = <?php echo isset($homepageEvents->max_num_pages) ? esc_js($homepageEvents->max_num_pages) : 1; ?>; // Ensure max pages is set

    document.querySelector('.prevPage').addEventListener('click', function() {
      if (currentPage > 1) {
        window.location.href = '<?php echo esc_url(home_url('/latest-news/page/')); ?>' + (currentPage - 1);
      }
    });

    document.querySelector('.nextPage').addEventListener('click', function() {
      if (currentPage < maxPages) {
        window.location.href = '<?php echo esc_url(home_url('/latest-news/page/')); ?>' + (currentPage + 1);
      }
    });
  });
</script>


<nav class="breadcrumbs">
  <a href="<?php echo esc_url(site_url()); ?>">
    <span class="home-icon">
      <img src="<?php echo esc_url(get_theme_file_uri('/images/home.png')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
    </span>
  </a>
  <span class="breadcrumbsSeparator">></span>
  <span class="current">最新消息</span>
</nav>

<section>
  <div class="newsSection">
    <div class="newsSubSectionTitle">最新消息</div>
    <?php
      $today = date('Ymd');
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // Get the current page or set to 1 if not available
      
      // WP_Query to fetch events
      $homepageEvents = new WP_Query(array(
        'posts_per_page' => 8,
        'post_type' => 'event',
        'meta_key' => 'event_date',
        'orderby' => 'meta_value_num',
        'order' => 'ASC',
        'paged' => $paged, // Add pagination
        'meta_query' => array(
          array(
            'key' => 'event_date',
            'compare' => '>=',
            'value' => $today,
            'type' => 'numeric'
          )
        )
      ));

      if ($homepageEvents->have_posts()) { ?>
        <div class="newsCardContainer"> 
        <?php 
        while($homepageEvents->have_posts()) {
          $homepageEvents->the_post(); 
          $eventDate = new DateTime(get_field('event_date'));
          $eventImage = get_field('event_image');

          // Determine the image URI
          $imageUri = $eventImage ? get_theme_file_uri('/images/' . esc_attr($eventImage)) : get_theme_file_uri('/images/semfjuBuilding.png'); 
          ?>
          <div class="newsCard"> <!-- Each news card starts here -->
            <img src="<?php echo esc_url($imageUri); ?>" alt="<?php esc_attr(the_title()); ?>">
            <div class="newsCardContent">
              <div class="newsCardTitle"><?php the_title(); ?></div>
              <div class="newsCardContentContainer">
                <p class="newsCardDate"><?php echo esc_html($eventDate->format('Y.m.d')); ?></p>
                <a href="<?php the_permalink(); ?>" class="newsCardLink">Learn more →</a>
              </div>
            </div>
          </div> 
        <?php } ?>
        </div>

        <div class="pagination">        
        <?php
          $current_page = max(1, get_query_var('paged')); 

          if ($homepageEvents->max_num_pages > 1) { // Check if there are multiple pages
            $prev_disabled = $current_page <= 1 ? 'disabled' : '';
            $next_disabled = $current_page >= $homepageEvents->max_num_pages ? 'disabled' : '';
        ?>
        <div class="pagination">
          <button class="prevPage <?php echo esc_attr($prev_disabled); ?>" <?php echo $prev_disabled ? 'disabled' : ''; ?>>&lt;</button>
          <span class="currentPage"><?php echo esc_html($current_page); ?></span>
          <button class="nextPage <?php echo esc_attr($next_disabled); ?>" <?php echo $next_disabled ? 'disabled' : ''; ?>>&gt;</button>
        </div>
        <?php
          } else {
            echo '<p>No events found.</p>';
          }
        ?>
        </div>
      <?php
      } else {
        echo '<p>No events found.</p>'; // Display a message if no events are found
      }
    ?>
  <?php
  wp_reset_postdata(); ?>
    </div>
  </section>
  
<?php 
get_footer();
?>
