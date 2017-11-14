<?php
/**
 *
 */
get_header(); ?>
    category.php
    <div class="w3-row">
        <div class="w3-col l3 m3 w3-right">
            <?php dynamic_sidebar('BKw3s-Sidebar-Right'); ?>
        </div>
        <div class="w3-col l9 m9">
            <h4><?php single_cat_title() ?></h4>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <ul id="blogarchive">
                    <li><?php the_time('d.m.Y'); ?> - <a href="<?php the_permalink(); ?>"
                                                         title="Lesen Sie &quot;<?php the_title(); ?>&quot;"><strong><?php the_title(); ?></strong></a>
                    </li>
                </ul>
            <?php endwhile; else: ?>
                <p><?php _e('Es wurden leider keine Beiträge gefunden.'); ?></p>
            <?php endif; ?>
        </div>

    </div>

<?php get_footer();
