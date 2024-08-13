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
    $works = get_field('news_fields');
    $content = $works['content'];
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
                <div class="detail_wrapper newspage_wrapper">
                    <div class="detail_left newspage_left pc-only">
                        <h2 class="txt3">News</h2>
                    </div>
                    <div class="detail_right newspage_right">
                        <div class="detail_heading txt7">
                            <p><?= get_the_date('Y.m.d') . ' ' . $day; ?></p>
                            <h3><?= the_title(); ?></h3>
                        </div>
                        <div class="detail_thumbnail">
                            <img src="<?= $thumbnail; ?>" draggable="false" alt="<?= the_title(); ?>" width="695" height="486" loading="lazy">
                        </div>
                        <div class="detail_content">
                            <?= $content; ?>
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

        <!-- contact// -->
        <section class="c-contact js-sections" id="contact">
            <div class="c-contact_container l-container">
                <div class="c-contact_newsletter">
                    <div class="c-contact_newsletter_desc tsu-fonts">
                        <p class="txt7">
                            募集開始、受賞者決定、関連イベントなど、<br />
                            夜明け前の最新情報をお知らせします
                        </p>
                    </div>

                    <div class="c-contact_newsletter_input" id="signupFormContainer_DDJ97">
                        <div id="signupFormContent_DDJ97">
                            <div class="formbox-editor_DDJ97">
                                <div id="formbox_screen_subscribe_DDJ97" name="frmLB_DDJ97">
                                    <input type=hidden name=token_DDJ97 id=token_DDJ97
                                        value="mFcQnoBFKMRaWZn%2Be3tdtsxpSu0%2BSv5KeMgIjgibAnnVYpOiNacg8Q%3D%3D" /><input
                                        type=hidden name=successurl_DDJ97 id=successurl_DDJ97
                                        value="https://lb.benchmarkemail.com//Code/ThankYouOptin?language=japanese" /><input
                                        type=hidden name=errorurl_DDJ97 id=errorurl_DDJ97
                                        value="https://lb.benchmarkemail.com//Code/Error" />
                                    <div class="c-contact_fields">
                                        <fieldset class="formbox-field_DDJ97">
                                            <input type=text placeholder="Email Address"
                                                class="formbox-field_DDJ97 text-placeholder"
                                                onfocus="javascript:focusPlaceHolder(this);"
                                                onblur="javascript:blurPlaceHolder(this);" id="fldemail_DDJ97"
                                                name="fldemail_DDJ97" maxlength=100 />
                                        </fieldset>
                                        <fieldset>
                                            <div id="btnSubmit_DDJ97" onClick="javascript:return submit_DDJ97Click();"
                                                class="formbox-button_DDJ97">→
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //contact -->
    </main>
<?php get_footer(); ?>