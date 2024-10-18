<link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/admission.css'); ?>">
<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/breadcrumbs.css')); ?>">

<?php

  get_header();
  while(have_posts()) {
    the_post(); ?>
    <nav class="breadcrumbs">
        <a href="<?php echo esc_url(site_url()); ?>">
        <span class="home-icon">
            <img src="<?php echo esc_url(get_theme_file_uri('/images/home.png')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
        </span>
        </a>
        <span class="breadcrumbsSeparator">></span>
        <span class="current">社企招生</span>
    </nav>
    <div class="admissionContainer">
            <div class="admissionHeader">輔仁大學社會企業碩士在職學位學程招生資訊</div>
            <p class="admissionHashtag">#年齡不拘免筆試</p>
            <p class="admissionText">
                社會企業兼顧社會關懷與商業價值，課程跨三界（管理、社會、政策）、創五生（生產、生活、生意、生命、生態）。
                歡迎想要結合社會關懷與生涯提升的你，來到社企的園地開展人生新的經驗視野，培養多元管理與價值創造能力，
                為更美好的社會盡一份心力。
            </p>
            <img src="<?php echo get_theme_file_uri('/images/admissionImage.png') ?>" alt="AdmissionImage" class="admissionimage" />
            <ol class="admissionList">
                <li class="admissionListItem">社企/社創新手</li>
                <li class="admissionListItem">>地方創生團隊打造高端</li>
                <li class="admissionListItem">>社區/社工/非營利組織夥伴轉換跑道</li>
                <li class="admissionListItem">>打造/推展/加入社企永續聚落共好圈</li>
                <li class="admissionListItem">>產銷合作社/里民服務/農食創生/政策倡議/永續ESG/多元文化</li>
                <li class="admissionListItem">>商業/專業人士10年內將退休或退而不休，貢獻社會，溫暖的輔大校園</li>
                <li class="admissionListItem">>有興趣了解結合社會關懷與商業營運的社企模式</li>
            </ol>
            
            <div class="admissionContact">
                <p>◎ 每年12月下旬開始報名，歡迎提早與社企學程聯繫了解相關資訊。</ p>
                <p>◎ 無大專同等學歷欲報名者，請儘速與社企學程聯繫協助評估是否合適申請「入學大學同等學力認定標準」（吳寶春條款）。</p>
            </div>
            <p class="admissionContactInfo">有興趣進一步了解請洽：</p>
            <div class="admissionContact">
                <p>
                Email: <a href="mailto:g0u@m365.fju.edu.tw">g0u@m365.fju.edu.tw</a>
                </p>
                <p>電話：（02）2905-6458（蘇秘書）</p>
                <p>
                社企網頁: <a href="http://sem.fju.edu.tw/" target="_blank" rel="noopener noreferrer">http://sem.fju.edu.tw/</a>
                </p>
            </div>   
        </div>
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
  <?php }

  get_footer();

?>