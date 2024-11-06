<?php
/*

*/
?>
<!DOCTYPE html>
<html lang="<?php language_attributes();  ?>">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

     <header id="header_area" class="<?php echo get_theme_mod('khan_menu_positon'); ?> left_menu">

       


          <div class="container">
               <div class="row">
                    <div class="col-md-3">
                         <a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('khan_logo'); ?>" alt="Logo"></a>
                    </div>
                    <div class="col-md-9">
                         <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_class' => 'ul_area')); ?>
                    </div>
               </div>
          </div>
     </header>