<?php 

// Widgets register function

function khan_widsets_register() {
     register_sidebar(array(
     'name' => __('Main_widgets_area', 'muslimkhan'),
     'id' => 'sidebar-1',
     'description' => __('This is the main widgets for the website', 'muslimkhan'),
     'before_widget' => '<div class="chail_bar">',
     'after_widget' => '</div>',

     'before_title' => '<h2 class="title">',
     'after_title' => '</h2>',
     ));


     register_sidebar(array(
          'name' => __('footer-1', 'muslimkhan'),
          'id' => 'footer-1',
          'description' => __('This is the main widgets for the website', 'muslimkhan'),
          'before_widget' => '<div class="chail_bar">',
          'after_widget' => '</div>',
     
          'before_title' => '<h2 class="title">',
          'after_title' => '</h2>',
     ));

     register_sidebar(array(
          'name' => __('footer-2', 'muslimkhan'),
          'id' => 'footer-2',
          'description' => __('This is the main widgets for the website', 'muslimkhan'),
          'before_widget' => '<div class="chail_bar">',
          'after_widget' => '</div>',
     
          'before_title' => '<h2 class="title">',
          'after_title' => '</h2>',
     ));
     

     register_sidebar(array(
          'name' => __('footer-3', 'muslimkhan'),
          'id' => 'footer-3',
          'description' => __('This is the main widgets for the website', 'muslimkhan'),
          'before_widget' => '<div class="chail_bar">',
          'after_widget' => '</div>',
     
          'before_title' => '<h2 class="title">',
          'after_title' => '</h2>',
     ));
     


  
     
     

}
add_action('widgets_init', 'khan_widsets_register');