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
                        <ul class="entry_nav js-entry-nav">
                            <li data-content="1">
                                <p class="txt7-fw">募集概要</p>
                                <svg role="img" aria-label="Entry Tabs" xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="16.135" viewBox="0 0 20 16.135">
                                    <path id="Path_9800" data-name="Path 9800"
                                        d="M12,0l5.883,7.282v.071H0V8.781H17.886v.071L12,16.135h1.6L20,8.068,13.6,0Z"
                                        transform="translate(0 0)" />
                                </svg>
                            </li>
                            <li class="active" data-content="2">
                                <p class="txt7-fw">応募フォーム</p>
                                <svg role="img" aria-label="Entry Tabs" xmlns="http://www.w3.org/2000/svg" width="20"
                                    height="16.135" viewBox="0 0 20 16.135">
                                    <path id="Path_9801" data-name="Path 9801"
                                        d="M12,0l5.883,7.282v.071H0V8.781H17.886v.071L12,16.135h1.6L20,8.068,13.6,0Z"
                                        transform="translate(0 0)" />
                                </svg>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="entry_right">
                    <div class="entry_tabs">
                        <div class="entry_content js-entry-content" data-content="1">
                            <?php include 'components/recruitment.php'; ?>
                        </div>
                        <div class="entry_content js-entry-content show-content" data-content="2">
                            <div class="entry_complete txt7-fw">
                                <h2>
                                    ご応募ありがとうございます <br />
                                    送信が完了しました
                                </h2>
                                <p>
                                    順次審査をおこない、11月中にウェブサイトにてファイナリストを発表いたします。<br class="pc-only" />
                                    受賞者の方には発表後、メールにて最終審査のご案内をお送りいたします。
                                </p>
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