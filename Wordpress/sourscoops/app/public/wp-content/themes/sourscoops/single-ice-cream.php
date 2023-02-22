<?php get_header(); ?>


<div class="w-screen grid grid-cols-12 gap-6 grid-rows-1 max-w-7xl mx-auto p-8">
    <div class="col-span-6 border border-brown rounded-xl overflow-hidden bg-blue aspect-square">
        <!-- spline data url -->
        <canvas data-spline="<?php the_field('spline_url') ?>" class="w-full h-full border"></canvas>'
    </div>
    <div class="col-span-6 flex flex-col gap-6 justify-center text-center px-6">
        <h1 class="font-oi text-4xl lg:text-7xl"><?php the_title(); ?></h1>
        <div class="font-sans"><?php the_content(); ?></div>
        <div class="text-left p-8 rounded-lg border border-brown">
            <div class="border-b py-2 mb-2 border-brown uppercase"> Product Details </div>
            <?php the_field('product_details'); ?>
        </div>
    </div>
    <?php get_footer(); ?>