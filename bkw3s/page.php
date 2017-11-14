<?php
/**
 * Wenn Frontpage eine statische Seite ist (WP Backend -> Settings -> reading) wird page.php verwendet.
 * Siehe hierzu auch: https://codex.wordpress.org/Creating_a_Static_Front_Page
 */
get_header(); ?>
    page.php
    <div class="w3-row">
        <div class="w3-col l3 m3 w3-right">
            <?php dynamic_sidebar('BKw3s-Sidebar-Right'); ?>
        </div>
        <div class="w3-col l9 m9">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h4><?php the_title(); ?></h4>
                <?php the_content() ?>
            <?php endwhile; endif; ?>
        </div>

    </div>

<?php get_footer();
