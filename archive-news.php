<?php 
    get_header();
    $locale = get_locale();
?>
    <main class="newspage" id="newspage">
        <!-- news// -->
        <section class="news">
            <div class="news_container newspage_container l-container">
                <div class="c-news_wrapper newspage_wrappper">
                    <div class="c-news_left newspage_left">
                        <h2 class="txt3">News</h2>
                    </div>
                    <div class="c-news_right newspage_right">
                        <div class="c-news_list txt7" id="ajaxPost">
                            <?php
                                $postsPerPage = 20;
                                $news_posts1 = array(
                                    'post_type' => 'news',
                                    'posts_per_page' => $postsPerPage,
                                    'post_status' => 'publish',
                                    'orderby'           => 'date',
                                    'order'             => 'DESC',
                                    'paged' => 1,
                                );
                                $news_posts = new WP_Query( $news_posts1 );
                                $count_posts = wp_count_posts( 'news' )->publish;
                                if( $news_posts->have_posts() ) :
                                    $i =0;
                                        while( $news_posts->have_posts() ) :
                                            $news_posts->the_post();
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
                            ?>
                            <a href="<?php the_permalink(); ?>" class="c-news_items">
                                <p><?= get_the_date('Y.m.d') . ' ' . $day; ?></p>
                                <h3><?php the_title(); ?></h3>  
                            </a>
                            <?php
                                        $i++;
                                        endwhile;
                                    else: echo 'No projects found';
                                endif; wp_reset_postdata();
                            ?>
                        </div>
                        <?php if ($count_posts > 20) : ?>
                        <div id="loading-bar-spinner" class="news_spinner">
                            <div class="spinner-icon"></div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- //news -->

        <?php include 'components/jbtracker.php'; ?>
    </main>
<?php get_footer(); ?>