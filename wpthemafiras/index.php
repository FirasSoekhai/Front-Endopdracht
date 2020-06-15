<?php get_header()?>


    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <!-- zaken met de posts -->
            <h3><?php the_title() ?></h3>
            <div><?php the_content() ?></div>
        <?php endwhile ?>
    <?php else : ?>
        <p>Geen berichten gevonden</p>
    <?php endif ?>
<?php get_footer()?>