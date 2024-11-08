    <?php if (is_home() || is_front_page()) : ?>
    <!-- @script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/jb.tracker.js"></script>
    <!-- // -->
    <script src="<?= get_template_directory_uri() ?>/assets/js/libs.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/home.js"></script>
    <!-- // -->
    <script src="<?= get_template_directory_uri() ?>/assets/js/main.js"></script>
    <?php else : ?>
    <?php include 'components/footer.php';?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/jb.tracker.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/js/main.js"></script>
    <?php endif; ?>

    <?php if (is_page("entry")) :?>
    <script src="<?= get_template_directory_uri() ?>/assets/js/validate.js"></script>
    <script>
        $(window).on("load", function () {
            let hash = window.location.hash.substring(1);
            if (hash == 2) {
                $('#tabContact').click();
            } else {
                $('#tabRecruit').click();
            }
        });
    </script>
    <?php endif;  ?>

    <?php wp_footer(); ?>
</body>

</html>