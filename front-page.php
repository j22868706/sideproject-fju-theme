<?php get_header(); ?>

  <img class="slogan" src="<?php echo get_theme_file_uri('/images/semfjuSlogan.png'); ?>" alt="Slogan">
  <section class="container">
      <div class="imageContainer">
        <img src="<?php echo get_theme_file_uri('/images/semfjuBuilding.png') ?>" alt="Building" class="image" />
      </div>
      <div class="textContainer">
        <h2 class="introTitle">關於輔大社企研究中心</h2>
        <p class="description">本中心以促進社會創新創業、發展社企共好圈、培養具利他精神勇於開創新局之人才為宗旨，透過句對話與反思、整合與創新、視野與領導的教育實踐，為更美好的社會貢獻一份心力。</p>
        <div class="buttonContainer">
          <a href="<?php echo site_url('/admission') ?>" class="button">了解招生資訊</a>
          <a href="<?php echo site_url('/about-us') ?>" class="button">本中心介紹</a>
        </div>
      </div>
  </section>
  <section class=recommendationContainer>
      <h2 class=recommendationTitle>畢業生推薦</h2>
      <div class=videoContainer>
        <div class="videoWrapper">
          <div class="playButton"></div>
          <iframe
            src=""
            title=""
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowFullScreen
            class="video"
          ></iframe>
        </div>
        <div class="videoWrapper">
          <div class="playButton"></div>
          <iframe
            src=""
            title=""
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowFullScreen
            class="video"
          ></iframe>
        </div>  
      </div>
    </section>
    <section>
      <div class="newsSection">
        <div class="newsSectionTitle">最新消息</div>
        <?php
          $today = date('Ymd');
          $homepageEvents = new WP_Query(array(
            'posts_per_page' => 8,
            'post_type' => 'event',
            'meta_key' => 'event_date',
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
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

          if ($eventImage) {
            $imageUri = get_theme_file_uri('/images/' . $eventImage);
          } else {
            $imageUri = get_theme_file_uri('/images/semfjuBuilding.png'); 
          }
          ?>
          <div class="newsCard"> <!-- Each news card starts here -->
            <img src="<?php echo esc_url($imageUri); ?>" alt="<?php the_title(); ?>">
            <div class="newsCardContent">
            <div class="newsCardTitle"><?php the_title(); ?></div>
            <div class="newsCardContentContainer">
              <p class="newsCardDate"><?php echo $eventDate->format('Y.m.d'); ?></p>
              <a href="<?php the_permalink(); ?>" class="newsCardLink">Learn more →</a>
            </div>
          </div>
          </div> 
        <?php } ?>

      </div> 
    <?php } 
    wp_reset_postdata(); ?>
    <div class="newsSectionMore">
      <a href="<?php echo site_url('/latest-news') ?>">更多消息 →</a>
    </div>
    </section>
    <section class="communityContainer">
      <div class="communityTextContainer">
        <div class="communityTitle">認識社企永續聚落</div>
        <p class="communityDescription">
          「社企永續聚落」的宗旨是促進社企精神與食物的分享交流與串連，現在有各式各樣的聚落成員，邀情您一同加入。
        </p>
        <div class="communityButtonContainer">
          <a href="<?php echo site_url('/social-enterprise') ?>" class="communityButton">查看更多</a>
        </div>
      </div>
      <div class="communityImageGrid">
          <div class="communityImageContainer">
            <img src="<?php echo get_theme_file_uri('/images/lockists.png') ?>" alt="lockists" class="communityImage" />
            <img src="<?php echo get_theme_file_uri('/images/sobright.png') ?>" alt="sobright" class="communityImage" />
            <img src="<?php echo get_theme_file_uri('/images/butterfly.png') ?>" alt="butterfly" class="communityImage" />
            <img src="<?php echo get_theme_file_uri('/images/footprint.png') ?>" alt="footprint" class="communityImage" />
            <img src="<?php echo get_theme_file_uri('/images/vuvu.png') ?>" alt="vuvu" class="communityImage" />
            <img src="<?php echo get_theme_file_uri('/images/sustainable.png') ?>" alt="sustainable" class="communityImage" />
            <img src="<?php echo get_theme_file_uri('/images/dahan.png') ?>" alt="dahan" class="communityImage" />
            <img src="<?php echo get_theme_file_uri('/images/weijo.png') ?>" alt="weijo" class="communityImage" />
            <img src="<?php echo get_theme_file_uri('/images/zhufengtea.png') ?>" alt="zhufengtea" class="communityImage" />
            <img src="<?php echo get_theme_file_uri('/images/happyhoney.png') ?>" alt="happyhoney" class="communityImage" />
            <img src="<?php echo get_theme_file_uri('/images/cat.png') ?>" alt="cat" class="communityImage" />
            <img src="<?php echo get_theme_file_uri('/images/gracefood.png') ?>" alt="gracefood" class="communityImage" />
          </div>
      </div>
    </section>



  <?php  get_footer();?>