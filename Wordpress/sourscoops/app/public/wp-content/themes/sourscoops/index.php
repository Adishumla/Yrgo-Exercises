<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <div class="grid grid-cols-2 gap-4 p-8 max-w-7xl mx-auto">
        <!-- This is the grid-->
        <?php while (have_posts()) : the_post();
            get_template_part('parts/shared/post-card', 'post-card', array());
        endwhile; ?>
    </div>

    <!-- EOF: grid -->
    <div>
        <div class="nav-previous alignleft"><?php next_posts_link('Older posts &raquo;'); ?></div>
        <div class="nav-next alignright"><?php previous_posts_link('&laquo; Newer posts'); ?></div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>