<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/breadcrumbs.css')); ?>">
<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/aboutUs.css')); ?>">
<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/professorSection.css')); ?>">

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
        <span class="current">關於中心</span>
    </nav>
    <section>
    <div class="about-us-container">
        <img class="about-us-background-img" src="<?php echo get_theme_file_uri('/images/semfjuBuilding.png') ?>" alt="Building">
        <div class="overlay">
            <div class="overlay-title">中心宗旨</div>
            <div class="overlay-content">本中心以促進社會創新創業、發展社企共好圈、培養具利他精神勇於開創新局之人才為宗旨，透過具對話與反思、整合與創新、視野與領導的教育實踐，為更美好的社會貢獻一份心力。</div>
        </div>
    </div>
    </section>
    <section>
    <div class="about-us-button-container">
        <div class="about-us-button-title">主要服務</div>
        <div class="about-us-service-button">發展社企共好圈</div>
        <div class="about-us-service-content">
            <h2>發展社企共好圈</h2>
            <p>舉辦第一屆『社企永續聚落』年度策展活動，有12家社企參與，2023年11月將持續舉辦並擴大。</p>
            <p>自2023年3月24號開始，每月第2與第4個星期五晚上在輔大國璽樓10樓進行永續社企共好小聚，歡迎各界同好參與交流。</p>
            <p>有興趣加入社企永續聚落者請洽研究中心李主任：<a href="mailto:200089m@gmail.com">200089m@gmail.com</a>。</p>
        </div>
        <div class="about-us-service-button">發展社企共好圈</div>
        <div class="about-us-service-content">
            <h2>社會創業諮詢輔導</h2>
            <p>中心提供社企、NPO、社會創業團隊所需之ESG策略或創業相關之諮詢或協助轉介連結，並透過社企永續聚落互惠共好。</p>
            <p>有興趣加入社企永續聚落者請洽研究中心李主任：<a href="mailto:200089m@gmail.com">200089m@gmail.com</a>。</p>
        </div>
        <div class="about-us-service-button">國際合作</div>
        <div class="about-us-service-content">
            <h2>國際合作</h2>
            <p>社企研究中心正與『阿彌陀佛關懷中心(Amitofo Care Centre)』建立合作關係。ACC是一個國際性的非政府組織，主要幫助非洲因貧困戰</p>
            <p>亂、天災肆虐、愛滋蔓延而痛失父母的非洲兒童。發起人慧禮法師在1992年於南非建立南華寺，希望透過信仰與教育的力量，協助非洲幼苗</p>
            <p>開啟智識、陶冶品性，培養下一代的非洲人。ACC在2004年於馬拉威設立第一間孤兒院，並陸續於賴索托、史瓦帝尼、納米比亞、莫三比</p>
            <p>克，以及馬達加斯加建設兒童教育村，至2021年，七個院區總計收容1,432位兒童(ACC官網:<a href="https://acc.org.tw/">https://acc.org.tw/</a>)</p>
        </div>

        <div class="about-us-service-button">社企實驗室</div>
        <div class="about-us-service-content">
            <h3>台東原民部落社會創業與教育</h3>
            <p>由夏侯欣鵬、楊長林、顏孟賢三位老師指導社企學生釋慧峰(演觀法師)、鮑素真、張靜儀、魏彥騰、曾馨儀，立基於演觀法師與當地部落多</p>
            <p>年支友好合作關係，以及輔大社企的投入，自2023年開始以台東縣達仁鄉土坂部落為起點，與在地夥伴共同展開社會創業與教育。</p>
            <h3>食農善循環實驗計畫</h3>
            <p>由李禮孟與郭孟怡老師指導社企碩班陳安琪、高煥昇、左育潔、潘綾緹(數學系、永續社社長)、莊穎佳(食科系)以及企管系畢業專題學生，以</p>
            <p>彰化縣田中鎮產銷班第8班生產之黑米與其副產品為元素，2022年9月創設社會企業『恩食生技』，進行食農產品開發與善循環行銷之實驗計</p>
            <p>畫。</p>
            <h3>永續影嚮力大使社</h3>
            <p>社團成立於111學年度，社團宗旨為透過各種探究學習、跨界連結及師生共創等方式，促進校園內外對永續的態度、認知與行動。永續社之創</p>
            <p>社緣起於李禮孟老師指導之2021年企管系畢業專題『與更好的未來相聚－創立永續社團』（組長為連育宣），爾後由教學系潘綠綺與企管系林</p>
            <p>彥函擔任創社社長與副社長，李老師為社團行政指導老師，與社會企業研究中心及永續發展與管理研究中心合作開展永續議題與人才發展相</p>
            <p>關之專案與推廣活動。</p>
        </div>
    </div>
    </section>
    <section>
      <div class="professorSection">
        <div class="about-us-button-title">中心成員</div>
        
        <div class="professorSectionMore">
            <a href="#">更多成員 →</a>
        </div>

    </section>

    <script>
        document.querySelectorAll('.about-us-service-button').forEach(button => {
        button.addEventListener('click', () => {
        document.querySelectorAll('.about-us-service-button').forEach(btn => {
            btn.classList.remove('hidden');
        });
        document.querySelectorAll('.about-us-service-content').forEach(content => {
            content.classList.remove('active');
        });

        button.classList.add('hidden');
        const content = button.nextElementSibling;
        if (content && content.classList.contains('about-us-service-content')) {
            content.classList.add('active');
        }
        });
        });
    </script>
  <?php }

  get_footer();

?>

