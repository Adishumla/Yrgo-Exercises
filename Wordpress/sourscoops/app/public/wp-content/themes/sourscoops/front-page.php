<?php
get_header();
// Get the three latest posts using WP_Query
// https://developer.wordpress.org/reference/classes/wp_query/
if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php endif; ?>
<?php
$latest_news = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'orderby' => 'date',
        'order' => 'DESC'
    )
);
// Display the three latest posts in a grid using the loop and get_template_part
// https://developer.wordpress.org/themes/basics/the-loop/
// https://developer.wordpress.org/reference/functions/get_template_part/

if ($latest_news->have_posts()) : ?>
    <?php get_field('title'); ?>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 p-8 max-w-7xl mx-auto">
        <div class="col-span-full flex flex-col md:flex-row justify-between items-center mb-6">
            <h2 class="text-5xl lg:text-6xl font-oi">Latest News</h2>
            <a class="bg-white border border-brown rounded-lg py-2 px-5 inline-block mt-4" href="<?= get_permalink(get_option('page_for_posts')); ?>">Read more news 👉</a>
        </div>
        <?php while ($latest_news->have_posts()) : $latest_news->the_post();
            get_template_part('parts/shared/post-card', 'post-card', array());
        endwhile; ?>
    </div>
<?php endif; ?>

<?php get_footer(); ?>