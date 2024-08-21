
<?php 
    $locale = get_locale();
?>
<!-- contact// -->
<section class="c-contact js-sections" id="contact">
    <div class="c-contact_container l-container">
        <div class="c-contact_newsletter <?php if(is_home() || is_front_page()) { echo 'js-is-blur'; } ?>">
            <div class="c-contact_newsletter_desc tsu-fonts">
                <?php if ($locale == "en_US") : ?>
                <p class="txt7-fw">
                    We will inform you of the latest information on before dawn, <br />
                    such as the start of the recruitment, the selection of the winners, and related events.
                </p>
                <?php else : ?>
                <p class="txt7-fw">
                    募集開始、受賞者決定、関連イベントなど、<br />
                    夜明け前の最新情報をお知らせします
                </p>
                <?php endif; ?>  
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
                                    <div id="btnSubmit_DDJ97"
                                        onClick="javascript:return submit_DDJ97Click();"
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