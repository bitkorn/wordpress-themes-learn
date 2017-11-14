<?php
/**
 * home.php
 * The home page template, which is the front page by default.
 * If you use a static front page this is the template for the page with the latest posts.
 */
?>
<?php get_header(); ?>
    home.php
    <div class="w3-row">
        <div class="w3-col l3 m3 w3-right">
            <?php dynamic_sidebar('BKw3s-Sidebar-Right'); ?>
        </div>
        <div class="w3-col l9 m9">
<!--            --><?php //the_content() ?>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="blog-post">
                    <span class="blog-post-date"><?php the_time("d.m.Y"); ?></span>
                    <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"
                                                   title="Lesen Sie &quot;<?php the_title(); ?>&quot; vollständig"><?php the_title(); ?></a>
                    </h2>
                    <?php the_content('Weiterlesen...'); ?>
                    <span class="blog-post-meta">Kategorie(n): <?php the_category(', '); ?>
                        | Autor: <?php echo get_the_author(); ?>
                        | <?php comments_popup_link('Keine Kommentare', '1 Kommentar', '% Kommentare', '', 'none'); ?></span>
                </div>
            <?php endwhile; else: ?>
                <p><?php _e('Es wurden leider keine Beiträge gefunden.'); ?></p>
            <?php endif; ?>
        </div>

    </div>
<?php get_footer();
