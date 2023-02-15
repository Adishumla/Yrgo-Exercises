<?php get_header(); ?>

<?php

//Use WP_Query to get the latest 3 posts
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC'
);

$latest_posts_query = new WP_Query($args);
if ($latest_posts_query->have_posts()) : ?>
    <div class="grid grid-cols-3 gap-4 p-8 max-w-7xl mx-auto">
        <? while ($latest_posts_query->have_posts()) : $latest_posts_query->the_post();
            get_template_part('parts/shared/post-card', 'post-card', array());
        endwhile;
        ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>