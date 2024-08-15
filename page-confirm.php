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
                            <div class="entry_contact is-confirm js-form txt7-fw">
                                <?php echo do_shortcode('[contact-form-7 id="efb5db1" title="Entry Confirm" html_id="myForm"]') ?>
                            </div>

                            <div class="entry_btn">
                                <button class="entry_btn_send js-contact-send" type="submit" form="myForm">
                                    <p class="txt7-fw">応募する</p>
                                    <span class="arrow">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16.135" viewBox="0 0 20 16.135">
                                            <path id="Path_1211" data-name="Path 1211" d="M12,0l5.883,7.282v.071H0V8.781H17.886v.071L12,16.135h1.6L20,8.068,13.6,0Z" transform="translate(0)"/>
                                        </svg>
                                    </span>
                                </button>
                            </div>

                            <a href="<?= home_url(); ?>/entry/#2" class="entry_fixed js-contact-fixed txt7">
                                <p class="u-underline">修正する</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- //entry -->

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