<link rel="stylesheet" href="<?php echo get_theme_file_uri('/css/footer.css'); ?>">

<footer class="footer">
    <div class="footerContent">
        <p class="copyright">
          Copyright ©2012-2023. College of Management, Fu Jen Catholic University
        </p>
        <nav class="footerNav">
            <a href="/">首頁</a>
            <a href="/about">關於中心</a>
            <a href="/related">相關連結</a>
            <a href="/contact">聯絡我們</a>
            <a href="/admin">管理員入口</a>
            <div class="socialIcons">
                <a href="#" class="socialIcon" aria-label="Facebook">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/facebook.png')); ?>" alt="Facebook Logo">
                </a>
                <a href="#" class="socialIcon" aria-label="Line">
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/Line.png')); ?>" alt="Line Logo">
                </a>            </div>
        </nav>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
