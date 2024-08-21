<?php 
    $locale = get_locale();
?>

<ul class="entry_nav js-entry-nav">
    <li class="<?php if (is_page("entry")) { echo 'active'; }  ?>" data-content="1" id="tabRecruit">
        <?php if ($locale == 'en_US') : ?>
        <p class="txt7-fw">Recruitment</p>
        <?php else : ?>
        <p class="txt7-fw">募集概要</p>
        <?php endif; ?>
        <svg role="img" aria-label="Entry Tabs" xmlns="http://www.w3.org/2000/svg" width="20"
            height="16.135" viewBox="0 0 20 16.135">
            <path id="Path_9800" data-name="Path 9800"
                d="M12,0l5.883,7.282v.071H0V8.781H17.886v.071L12,16.135h1.6L20,8.068,13.6,0Z"
                transform="translate(0 0)" />
        </svg>
    </li>
    <li class="<?php if (!is_page("entry")) { echo 'active'; }  ?>" data-content="2" id="tabContact">
        <?php if ($locale == 'en_US') : ?>
        <p class="txt7-fw">Application Form</p>
        <?php else : ?>
        <p class="txt7-fw">応募フォーム</p>
        <?php endif; ?>
        <svg role="img" aria-label="Entry Tabs" xmlns="http://www.w3.org/2000/svg" width="20"
            height="16.135" viewBox="0 0 20 16.135">
            <path id="Path_9801" data-name="Path 9801"
                d="M12,0l5.883,7.282v.071H0V8.781H17.886v.071L12,16.135h1.6L20,8.068,13.6,0Z"
                transform="translate(0 0)" />
        </svg>
    </li>
</ul>