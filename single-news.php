<?php 
    get_header();
    $locale = get_locale();
    //
    $default_id = get_the_ID();
    $projects_posts1 = array(
        'post_type' => 'news',
        'posts_per_page' => -1,
        'order'             => 'DESC',
    );
    $projects_posts = new WP_Query( $projects_posts1 );
    $arr_posts = $projects_posts->posts;
    $index = "";
    foreach ( $arr_posts as $key => $element ) {
        if ( $element->ID  == $default_id ) {
            $index = $key;
        }
    }
    //
    // $works = get_field('news_fields');
    // $content = $works['content'];
    //
    $DayOfWeekNumber = date("w");
    $day = "mon";
    switch($DayOfWeekNumber)
    {
        case 0 : $day="sun"; break;
        case 1 : $day="mon"; break;
        case 2 : $day="tue"; break;
        case 3 : $day="wed"; break;
        case 4 : $day="thu"; break;
        case 5 : $day="fri"; break;
        case 6 : $day="sat"; break;
    }
    //
    $thumbnail = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail');
?>
    <main class="newspage" id="newspage">
        <!-- detail// -->
        <section class="detail">
            <div class="detail_container newspage_container l-container">
                <div class="detail_wrapper c-news_wrapper newspage_wrapper">
                    <div class="detail_left c-news_left newspage_left pc-only">
                        <h2 class="txt3">News</h2>
                    </div>
                    <div class="detail_right c-news_right newspage_right">
                        <div class="detail_heading txt7">
                            <p><?= get_the_date('Y.m.d') . ' ' . $day; ?></p>
                            <h3><?= the_title(); ?></h3>
                        </div>
                        <div class="detail_thumbnail">
                            <img src="<?= $thumbnail; ?>" draggable="false" alt="<?= the_title(); ?>" width="695" height="486" loading="lazy">
                        </div>
                        <div class="detail_content">
                            <?= the_content(); ?>
                        </div>
                        <div class="detail_control txt7">
                            <div class="detail_control_pager">
                                <?php
                                    if(isset($arr_posts[$index - 1])) :
                                        $next_post = $arr_posts[$index - 1];
                                ?>
                                <a href="<?= get_permalink($next_post->ID); ?>">
                                    Newer
                                </a>
                                <?php endif; ?>
                            </div>
                            <div class="detail_control_pager">
                                <a href="<?= home_url(); ?>/news/">List</a>
                            </div>
                            <div class="detail_control_pager">
                                <?php
                                    if(isset($arr_posts[$index + 1])) :
                                        $prev_post = $arr_posts[$index + 1];
                                ?>
                                <a href="<?= get_permalink($prev_post->ID); ?>">
                                    Older
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //detail -->

        <?php include 'components/jbtracker.php'; ?>
    </main>
<?php get_footer(); ?>