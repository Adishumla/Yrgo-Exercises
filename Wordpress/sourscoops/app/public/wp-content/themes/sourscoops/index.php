<?php get_header(); ?>


<?php if (have_posts()) : ?>
    <div class="grid grid-cols-2 gap-4 p-8 max-w-7xl mx-auto">
        <?php while (have_posts()) : the_post();
        ?>
            <div class="flex flex-col gap-6">
                <div class="rounded-xl border border-brown overflow-hidden h-96 relative">
                    <?php the_post_thumbnail('large', array('class' => 'object-cover w-full h-full')); ?>
                    <date class="absolute left-6 bottom-6 bg-white p-2 border border-brown rounded-lg"><?php echo get_the_date(); ?></date>
                </div>
                <div class="rounded-xl bg-blue py-4 border border-brown">
                    <h3 class="text-3xl lg:text-4xl font-oi mb-12 px-5"><?php the_title(); ?></h3>
                    <a class="block border-t border-brown px-5 pt-3" title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">Read more 👉</a>
                </div>
            </div>
        <?php endwhile; ?>
        <div class="col-span-full flex justify-between">
            <!-- Start the pagination functions after the loop. -->
            <div>
                <?php previous_posts_link('Newer posts'); ?>
            </div>
            <div>
                <?php next_posts_link('Older posts 👉'); ?>
            </div>
            <!-- End the pagination functions after the loop. -->
        </div>
    </div>
<?php endif; ?>

<?php get_footer(); ?>