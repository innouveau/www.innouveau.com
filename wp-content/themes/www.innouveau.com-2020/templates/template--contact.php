<?php
/*
 * 	Template Name: Contact
 */?>


<?php
    include 'php/builders.php';
    get_header();
?>

<div class="pagewrap">
    <div class="page__intro">
        <?php if(have_posts()): while(have_posts()) : the_post(); ?>

             <?php the_content(); ?>

         <?php endwhile; endif; ?>
    </div>
    <div class="contact__employees">
        <?php echo get_employee(513); ?>
        <?php echo get_employee(528); ?>
    </div>

        <iframe id="canvas-map"  frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.openstreetmap.org/export/embed.html?bbox=4.4733667373657235%2C51.966718879143656%2C4.5299720764160165%2C51.99029801292051&amp;layer=mapnik&amp;marker=51.97850999733819%2C4.501669406890869" style="border: 1px solid black"></iframe>

</div>

<?php get_footer(); ?>