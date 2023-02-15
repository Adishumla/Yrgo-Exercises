    <!-- This is a card in the grid -->
    <div class="flex flex-col gap-6">
        <div class="rounded-xl border border-brown overflow-hidden h-96 relative">
            <img src="<?php the_post_thumbnail_url('large'); ?>" class="object-cover w-full h-full" />
            <date class="absolute left-6 bottom-6 bg-white p-2 border border-brown rounded-lg"><?php echo get_the_date(); ?></date>
        </div>
        <div class="rounded-xl bg-blue py-4 border border-brown">
            <h3 class="text-3xl lg:text-4xl font-oi mb-12 px-5"><? the_title(); ?></h3>
            <a class="block border-t border-brown px-5 pt-3" title="Post title" href="<?php the_permalink(); ?>">Read more 👉</a>
        </div>
    </div>
    <!-- EOF: card in the grid -->