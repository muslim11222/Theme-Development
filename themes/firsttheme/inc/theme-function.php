<?php 


// Customization function area
// header area
function khan_customization_area($wp_customize) {
     $wp_customize->add_section('khan_header_area', array(
          'title'       => __('Header Area', 'muslimkhan'),
          'description' =>    'This is the header area for the user',
     ));  

     $wp_customize->add_setting('khan_logo', array(
         'default' => get_bloginfo('template_directory') . '/img/khan1.png',
     ));

     $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize,'khan_logo', array(
          'label' => 'logo upload',
          'description' => 'if you want to upload a new image',
          'setting' => 'khan_logo',
          'section' => 'khan_header_area',
     )));



     // menu positon option 

     $wp_customize->add_section('khan_menu_positon', array(
          'title' => __('Menu Positon Option', 'muslimkhan'),
          'description' =>    'This is the Menu area for the user',
     ));
     $wp_customize->add_setting('khan_menu_positon', array(
          'default' => 'right_menu',
      ));

      $wp_customize->add_control('khan_menu_positon', array(
          'label' => ' copyriht text ',
          'description' => 'If you need you can update your copy right text',
          'setting' => 'khan_menu_positon',
          'section' => 'khan_menu_positon',
          'type' => 'radio',
          'choices' => array(
               'left_menu' => 'Left_menu',
               'right_menu' => 'Right_menu',
               'center_menu' => 'Center_menu',
               'default' => 'Default'
          ),
     ));




     // Footer positon option 

     $wp_customize->add_section('khan_footer_positon', array(
          'title' => __('footer Positon Option', 'muslimkhan'),
          'description' =>    'This is the footer area for the user',
     ));
     $wp_customize->add_setting('khan_copyriht_section', array(
          'default' => '&copy copyright 2024 | codeshikhi.com',
      ));

      $wp_customize->add_control('khan_copyriht_section', array(
          'label' => 'Menu Position',
          'description' => 'select your menu position',
          'setting' => 'khan_menu_positon',
          'section' => 'khan_footer_positon',
         
     ));
     add_action('customize_register', 'khan_customization_area');

}