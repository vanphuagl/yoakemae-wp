<?php 
    get_header();
    $locale = get_locale();
?>
    <main class="entrypage" id="entrypage">
        <!-- entry// -->
        <section class="entry">
            <div class="entry_container l-container">
                <div class="entry_left">
                    <div class="entry_sticky">
                        <?php include 'components/entry-nav.php'; ?>
                    </div>
                </div>
                <div class="entry_right">
                    <div class="entry_tabs">
                        <div class="entry_content js-entry-content" data-content="1">
                            <?php include 'components/recruitment.php'; ?>
                        </div>
                        <div class="entry_content js-entry-content show-content" data-content="2">
                            <div class="entry_contact is-confirm js-form txt7-fw">
                                <?php if ($locale == 'en_US') : ?>
                                <?php echo do_shortcode('[contact-form-7 id="129e3e4" title="Entry Contact EN" html_id="myForm"]') ?>
								<?php else : ?>
								<?php echo do_shortcode('[contact-form-7 id="d8feb29" title="Entry Contact" html_id="myForm"]') ?>
								<?php endif; ?>
                            </div>

                            <div class="entry_btn">
                                <button class="entry_btn_send js-contact-send" type="submit" form="myForm">
                                    <?php if ($locale == 'en_US') : ?>
                                    <p class="txt7-fw">Submit</p>
                                    <?php else : ?>
                                    <p class="txt7-fw">応募する</p>
                                    <?php endif; ?>
                                    <span class="arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16.135" viewBox="0 0 20 16.135">
                                            <path id="Path_1211" data-name="Path 1211" d="M12,0l5.883,7.282v.071H0V8.781H17.886v.071L12,16.135h1.6L20,8.068,13.6,0Z" transform="translate(0)"/>
                                        </svg>
                                    </span>
                                </button>
                            </div>

                            <a href="<?= home_url(); ?>/entry/#2" class="entry_fixed js-contact-fixed txt7">
                                <?php if ($locale == 'en_US') : ?>
                                <p class="u-underline">Back</p>
                                <?php else : ?>
                                <p class="u-underline">修正する</p>
                                <?php endif; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //entry -->

        <?php include 'components/jbtracker.php'; ?>
    </main>
<?php get_footer(); ?>