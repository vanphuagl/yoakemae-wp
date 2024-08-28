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
                                    Thank you for submitting your entry for "YOAKEMAE｜New Photography Award." <br />
                                    We have successfully received your submission.
                                </h2>
                                <p>
                                    The finalists will be announced on our website in November. <br class="pc-only" />
                                    If you are selected as a finalist, you will receive an invitation to the final judging by email.<br />
                                    We appreciate your patience and look forward to sharing the results soon.
                                </p>
                                <?php else : ?>
                                <h2>
                                    ご応募ありがとうございます <br />
                                    送信が完了しました
                                </h2>
                                <p>
                                    順次審査をおこない、11月中にウェブサイトにてファイナリストを発表いたします。<br class="pc-only" />
                                    受賞者の方には発表後、メールにて最終審査のご案内をお送りいたします。
                                </p>
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