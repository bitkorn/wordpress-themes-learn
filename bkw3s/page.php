<?php
/**
 *
 */
get_header(); ?>
page.php
    <div class="w3-row">
        <div class="w3-col l3 m3 w3-right">
            <?php dynamic_sidebar('BKw3s-Sidebar-Right'); ?>
        </div>
        <div class="w3-col l9 m9">
            <?php the_content() ?>
        </div>

    </div>

<?php get_footer();
