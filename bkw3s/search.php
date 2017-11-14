<?php
/**
 * User: Torsten Brieskorn
 * Date: 14.11.17
 */
?>
<?php get_header() ?>
    search.php

    <div class="w3-row">
        <div class="w3-col l3 m3 w3-right">
            <?php dynamic_sidebar('BKw3s-Sidebar-Right'); ?>
        </div>
        <div class="w3-col l9 m9">

            <h1>Suchergebnisse: &quot;<?php echo get_search_query(); ?>&quot;</h1>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div id="content-single">
                    <p><a href="<?php the_permalink(); ?>"
                           title="Lesen Sie &quot;<?php the_title(); ?>&quot; vollständig"><?php the_title(); ?></a>
                    </p>
                </div>
            <?php endwhile; else: ?>
                <p><?php _e('Es wurden leider keine Beiträge gefunden.'); ?></p>
            <?php endif; ?>
            <?php if (function_exists('wp_paginate')) {
                wp_paginate();
            } ?>
        </div>
    </div>


<?php get_footer(); ?>