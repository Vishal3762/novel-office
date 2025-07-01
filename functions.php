<?php
function pharma_theme_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap', false);

    // Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3');

    // Main CSS
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0');

    // icons
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css');
    // Bootstrap JS (with Popper)
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.3', true);

    // Custom JS
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/logic.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'pharma_theme_enqueue_scripts');


require_once get_template_directory() . '/assets/include/class-bootstrap-5-navwalker.php';
register_nav_menus(array(
    'primary-menu' => __('Primary Menu', '')
));

  function labskillpro() {
    register_nav_menus(
        array(
            'footer-menu' => __('Footer Menu'),
        )
    );
}
add_action('init', 'labskillpro');



// logo add
function labskillpro_theme_setup() {
  add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'labskillpro_theme_setup');
?>