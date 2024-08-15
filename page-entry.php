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
                            <li class="active" data-content="1" id="tabRecruit">
                                <a href="#1">
                                    <p class="txt7-fw">募集概要</p>
                                    <svg role="img" aria-label="Entry Tabs" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="16.135" viewBox="0 0 20 16.135">
                                        <path id="Path_9800" data-name="Path 9800"
                                            d="M12,0l5.883,7.282v.071H0V8.781H17.886v.071L12,16.135h1.6L20,8.068,13.6,0Z"
                                            transform="translate(0 0)" />
                                    </svg>
                                </a>
                            </li>
                            <li data-content="2" id="tabContact">
                                <a href="#2">
                                    <p class="txt7-fw">応募フォーム</p>
                                    <svg role="img" aria-label="Entry Tabs" xmlns="http://www.w3.org/2000/svg" width="20"
                                        height="16.135" viewBox="0 0 20 16.135">
                                        <path id="Path_9801" data-name="Path 9801"
                                            d="M12,0l5.883,7.282v.071H0V8.781H17.886v.071L12,16.135h1.6L20,8.068,13.6,0Z"
                                            transform="translate(0 0)" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="entry_right">
                    <div class="entry_tabs">
                        <div class="entry_content js-entry-content show-content" data-content="1">
                            <?php include 'components/recruitment.php'; ?>
                        </div>
                        <div class="entry_content js-entry-content" data-content="2">
                            <div class="entry_contact js-form txt7-fw">
                                <?php echo do_shortcode('[contact-form-7 id="3e4cb52" title="Entry Contact" html_id="myForm"]') ?>

                                <div class="entry_contact_description txt7-fw">
                                    <p>
                                        クラウドストレージサービス・データファイル転送サービス等（Dropbox、Google Drive、Fire
                                        Storage、etc）を利用してアップロード後、リンク先URLを記してください。期限切れなどにより作品データのダウンロードができない場合は、応募を無効とさせていただきます。ファイルサイズは1点につき3MBまでを目処としてください。ただし動画など比較的容量の大きなファイル形式の場合はこの限りではありません。
                                    </p>
                                </div>

                                <div class="entry_contact_privacy">
                                    <div class="entry_contact_privacy_content txt7-fw">
                                        <p>
                                            プライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシーが入りますプライバシーポリシ
                                        </p>
                                    </div>
                                    <div class="entry_contact_privacy_check">
                                        <input id="js-checkbox" name="checkbox" type="checkbox" value="">
                                        <p class="txt7">プライバシーポリシーに同意する</p>
                                    </div>
                                </div>

                                <div class="entry_btn">
                                    <button class="entry_btn_confirm js-contact-confirm" form="myForm" type="submit" id="btnConfirm">
                                        <p class="txt7-fw">確認</p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16.135" viewBox="0 0 20 16.135">
                                            <path id="Path_1211" data-name="Path 1211" d="M12,0l5.883,7.282v.071H0V8.781H17.886v.071L12,16.135h1.6L20,8.068,13.6,0Z" transform="translate(0)"/>
                                        </svg>
                                    </button>
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