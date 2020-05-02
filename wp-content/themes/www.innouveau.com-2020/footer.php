<?php
    $language_code = pll_current_language();
    include('modules/' . $language_code . '/footer.php');
?>

<?php include('modules/menu.php'); ?>

<?php wp_footer();?>

</body>
</html>