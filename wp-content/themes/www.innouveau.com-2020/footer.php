<?php
    $language_code = pll_current_language();
    include('modules/' . $language_code . '/footer.php');
?>

<?php include('modules/menu.php'); ?>

<script type="text/javascript"  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAaU80wDMYEf2w7TL7Wcvoi1tPAZHUzrhA"></script>

<script>
    $(function() {
        initYoutubeAPI();
        //onYouTubeIframeAPIReady();
    });
</script>

<?php wp_footer();?>

</body>
</html>