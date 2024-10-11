<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/breadcrumbs.css')); ?>">
<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/aboutUs.css')); ?>">
<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/professorSection.css')); ?>">
<link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri('/css/buttons.css')); ?>">


<?php get_header();?>
    
    <nav class="breadcrumbs">
        <a href="<?php echo esc_url(site_url()); ?>">
            <span class="home-icon">
                <img src="<?php echo esc_url(get_theme_file_uri('/images/home.png')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
            </span>
        </a>
        <span class="breadcrumbsSeparator">></span>
        <span class="current">關於中心</span>
        <span class="breadcrumbsSeparator">></span>
        <span class="current">中心成員</span>
    </nav>

    <section>
        <div class="professorSection">
            <div class="about-us-button-title">中心成員</div>

            <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            // WP_Query for professors with pagination
            $homepageProfessors = new WP_Query(array(
                'post_type' => 'professor',
                'paged' => $paged,
                'posts_per_page' => 9,  // Limit to 3 posts per page
                'meta_key' => 'professor_id',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
            ));

            if ($homepageProfessors->have_posts()) { ?>
                <div class="professorSectionContainer">
                    <?php
                    while ($homepageProfessors->have_posts()) {
                        $homepageProfessors->the_post();

                        // Fetch custom fields
                        $professorImage = get_field('professor_image');
                        $professorTitle = get_field('title');
                        $professorPhoneNumber = get_field('phone_number');
                        $professorEmail = get_field('email');

                        // Default image if no image provided
                        $imageUri = $professorImage ? get_theme_file_uri('/images/' . esc_attr($professorImage)) : get_theme_file_uri('/images/semfjuBuilding.png'); 
                        ?>

                        <div class="professorSectionCard">
                            <div class="professorSectionImage">
                                <img src="<?php echo esc_url($imageUri); ?>" alt="<?php esc_attr(the_title()); ?>">
                            </div>
                            <div class="professorSectionText">
                                <h3><?php the_title(); ?></h3>
                                <h4><?php echo esc_html($professorTitle); ?></h4>
                                <div class="content"><?php the_content(); ?></div>
                                <div class="contact-information">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/phone.png')); ?>" alt="phone"/>
                                    <span class="contact-information-text"><?php echo esc_html($professorPhoneNumber); ?></span>
                                </div>
                                <div class="contact-information">
                                    <img src="<?php echo esc_url(get_theme_file_uri('/images/mail.png')); ?>" alt="mail"/>
                                    <span class="contact-information-text"><?php echo esc_html($professorEmail); ?></span>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                </div>
                <?php
                    $current_page = max(1, get_query_var('paged'));
                    $total_pages = $homepageProfessors->max_num_pages;

                    $prev_disabled = ($current_page <= 1) ? 'disabled' : '';
                    $next_disabled = ($current_page >= $total_pages) ? 'disabled' : '';
                ?>

                <div class="pagination">
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
            <?php
            } else {
                echo '<p>No professors found.</p>';
            }

            wp_reset_postdata();
            ?>
        </div>
    </section>

<?php 
get_footer();
