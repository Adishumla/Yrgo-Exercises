<?php get_header(); ?>

<div class="grid grid-cols-1 lg:grid-cols-4 gap-4 py-20 max-w-7xl mx-auto">
    <?php if (have_posts()) : ?>
        <!-- Display products in grid using the loop and get_template_part -->
        <?php while (have_posts()) : the_post(); ?>
            <?php get_template_part('parts/shared/post-card', 'post-card', array()); ?>
        <?php endwhile; ?>

        <div class="col-span-full flex justify-between">
            <!-- Start the pagination functions after the loop. -->
            <div>
                <?php previous_posts_link('Newer posts 👉'); ?>
            </div>
            <div>
                <?php next_posts_link('👈 Older posts'); ?>
            </div>
            <!-- End the pagination functions after the loop. -->
        </div>

    <?php endif; ?>
</div>

<?php get_footer(); ?>