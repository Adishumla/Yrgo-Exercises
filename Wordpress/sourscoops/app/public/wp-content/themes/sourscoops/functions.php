<?php
// Load Tailwind from CDN
// https://tailwindcss.com/docs/installation/play-cdn
function load_tailwind()
{
    wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', array(), null, false);
    // Load tailwind.config.js after tailwind has been loaded
    wp_enqueue_script('tailwind-config', get_template_directory_uri() . '/tailwind.config.js', array('tailwind'), null, false);
}
add_action('wp_enqueue_scripts', 'load_tailwind');

function editor_enqueue()
{
    wp_enqueue_script('tailwind', 'https://cdn.tailwindcss.com', array(), null, false);
    // Load tailwind.config.js after tailwind has been loaded
    wp_enqueue_script('tailwind-config', get_template_directory_uri() . '/tailwind.config.js', array('tailwind'), null, false);
}
add_action('enqueue_block_editor_assets', 'editor_enqueue');

// Register theme support
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('menus');
});

// Register theme menu(s)
// https://developer.wordpress.org/themes/functionality/navigation-menus/
function register_theme_menus()
{
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu'),
        'secondary-menu' => __('Secondary Menu'),
        'footer-menu' => __('Footer Menu'),
    ));
}
add_action('init', 'register_theme_menus');

// Register Custom Post Type "Ice Cream"
// https://developer.wordpress.org/themes/functionality/custom-post-types/
function create_post_type()
{
    register_post_type('ice-cream', array(
        'labels' => array(
            'name' => __('Ice Cream'),
            'singular_name' => __('Ice Cream'),
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'ice-cream'),
        'menu_icon' => 'dashicons-smiley'
    ));
}
add_action('init', 'create_post_type');

function print_a($data)
{
?>
    <pre class="block p-6 m-6 border border-brown rounded-xl text-xs overflow-hidden"><code><?php print_r($data); ?></code></pre>
<?php
}

add_action('init', function () {
    register_block_type(__DIR__ . '/blocks/hero');
    register_block_type(__DIR__ . '/blocks/vendors');
});
