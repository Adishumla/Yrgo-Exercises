<?php get_header(); ?>


<div class="w-screen grid grid-cols-12 gap-6 grid-rows-1 max-w-7xl mx-auto p-8">
    <div class="col-span-6 border border-brown rounded-xl overflow-hidden bg-blue aspect-square">
        <canvas id="canvas" class="object-cover w-full h-full"></canvas>
    </div>
    <div class="col-span-6 flex flex-col gap-6 justify-center text-center px-6">
        <h1 class="font-oi text-4xl lg:text-7xl"><?php the_title(); ?></h1>
        <div class="font-sans"><?php the_content(); ?></div>
        <ul class="text-left p-8 rounded-lg border border-brown">
            <li class="border-b py-2 mb-2 border-brown uppercase">
                Product details
            </li>
            <li>
                1 PACK 350 ML
            </li>
            <li>
                *CONSUME AT YOUR OWN PERIL
            </li>
        </ul>
    </div>
</div>
<?php get_footer(); ?>