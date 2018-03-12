<?php
/**
 * User: Torsten Brieskorn
 * Date: 13.11.17
 */
get_header(); ?>
    single.php

    <div class="w3-row">
        <div class="w3-col l3 m3 w3-right">
            <?php dynamic_sidebar('BKw3s-Sidebar-Right'); ?>
        </div>
        <div class="w3-col l9 m9">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="blog-post">
                    <h2 class="blog-post-title"><?php the_title(); ?></h2>
                    <?php the_content('Weiterlesen...'); ?>
                    <span class="blog-post-meta">Datum: <?php the_time("d.m.Y"); ?>
                        | Kategorie(n): <?php the_category(', '); ?> | Autor: <?php echo get_the_author(); ?>
                        | <?php comments_popup_link('Keine Kommentare', '1 Kommentar', '% Kommentare', '', 'none'); ?></span>
                </div>
            <?php endwhile; else: ?>
                <p><?php _e('Es wurden leider keine Beiträge gefunden.'); ?></p>
            <?php endif; ?>
        </div>

    </div>
<?php get_footer();
