<?php
/**
 *
 */
get_header(); ?>
    index.php
    <div class="w3-row">
        <div class="w3-col l3 m3 w3-right">
            <?php dynamic_sidebar('BKw3s-Sidebar-Right'); ?>
        </div>
        <div class="w3-col l9 m9">
            <?php the_content() ?>


            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                <?php endwhile; ?>

            <?php else : ?>

                <article id="post-not-found" class="block">
                    <p>No posts found.</p>
                </article>

            <?php endif; ?>
        </div>

    </div>

<?php get_footer();
