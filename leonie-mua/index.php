<?php
/**
 *
 */
?>
<?php get_header(); ?>
    index.php
    <div class="w3-row">
        <div class="w3-col l3 m3 w3-right">
            <?php dynamic_sidebar('BKw3s-Sidebar-Right'); ?>
        </div>
        <div class="w3-col l9 m9">

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>
                    <div class="blog-post">
                        <span class="blog-post-date"><?php the_time("d.m.Y"); ?></span>
                        <h4 class="blog-post-title"><a href="<?php the_permalink(); ?>"
                                                       title="Lesen Sie &quot;<?php the_title(); ?>&quot; vollständig"><?php the_title(); ?></a>
                        </h4>
                        <?php the_content('Weiterlesen...'); ?>
                        <span class="blog-post-meta">Kategorie(n): <?php the_category(', '); ?>
                            | Autor: <?php echo get_the_author(); ?>
                            | <?php comments_popup_link('Keine Kommentare', '1 Kommentar', '% Kommentare', '', 'none'); ?></span>
                    </div>
                <?php endwhile; ?>

            <?php else : ?>

                <article id="post-not-found" class="block">
                    <p><?php _e('Es wurden leider keine Beiträge gefunden.'); ?></p>
                </article>

            <?php endif; ?>
        </div>

    </div>

<?php get_footer();
