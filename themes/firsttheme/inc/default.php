
<?php 
add_theme_support('title-tag');


// thumnail image area

add_theme_support('post-thumbnails', array('page', 'post'));

// image size
add_image_size('post-thumbnails', 970, 350, true);


// the_excerpt ata read more option create kore 

function khan_the_excerpt_more($more) {
     global $post;
     return  ' <br> <br> <a class="reade_more" href="'.get_permalink( $post->ID ) . '">' . 'Read More' . '</a>';
}
add_filter('excerpt_more', 'khan_the_excerpt_more');


// amra chaile mon mot word dekhbo seta holo
function khan_the_excerpt($length) {
     return 10;
}
add_filter('excerpt_length', 'khan_the_excerpt', 9999);



// Page Navigation mane holo ak page theke onno page gele je 1 2 show kore seta 

function khan_page_navigation() {
     global $wp_query, $wp_rewrite;
     $pages = "";
 
     $max = $wp_query->max_num_pages;
     if( !$current = get_query_var('paged')) $current = 1;
 
     $args['base'] = str_replace(9999999999, '%#%', get_pagenum_link(9999999999));
     $args['total'] = $max;
     $args['current'] = $current;
     $args['prev_text'] = 'Prev';
     $args['next_text'] = 'Next'; 
 
     if ($max > 1) {
         echo '<div class="wp_pagenav">';
 
         if ($max > 1) {
             $pages = '<p class="pages">Page ' . $current . ' <span>of</span> ' . $max . '</p>';
         }
 
         echo $pages . paginate_links($args);
         echo '</div>';
     }
 }
 


