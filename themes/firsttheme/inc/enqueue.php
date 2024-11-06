<?PHP


function khan_js_css_calling() {
     wp_enqueue_style('khan-style', get_stylesheet_uri());
     wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
     wp_enqueue_style('bootstrap');

     wp_register_style('custome', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
     wp_enqueue_style('custome');


     // js files calling

     wp_enqueue_script('jquery', get_template_directory_uri().'/js/bootstrap.js', array(), '5.0.2', true);
     wp_enqueue_style('bootstrap');

     wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array(), '1.0.0', true);
     wp_enqueue_style('bootstrap');
}
add_action('wp_enqueue_scripts', 'khan_js_css_calling');


// google font link
function khan_google_font_link() {
     wp_enqueue_style('khan_google_font', ('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap'));
} 
add_action('wp_enqueue_scripts', 'khan_google_font_link');
