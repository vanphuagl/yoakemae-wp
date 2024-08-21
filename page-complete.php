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
                            <div class="entry_complete txt7-fw">
                                <?php if ($locale == 'en_US') : ?>
                                <h2>
                                    Thank you for your application <br />
                                    Submission completed.
                                </h2>
                                <p>
                                    The judging will be carried out in order, and the finalists will be announced on the website in November. <br class="pc-only" />
                                    After the announcement, the winners will be sent an email with information about the final selection process.
                                </p>
                                <?php else : ?>

                                <?php endif; ?>
                                <div class="entry_complete_link">
                                    <a href="<?= home_url(); ?>" class="u-underline">Back to Top</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //entry -->

        <?php include 'components/jbtracker.php'; ?>
    </main>
<?php get_footer(); ?>