<?php 

// then template for displaying pages
     get_header();
?>



     <!-- body area -->
     <section id="body_area">
          <div class="container">
               <div class="row">
                    <div class="col-md-9">
                    <?php
                         if( have_posts()) :
                              while( have_posts() ) : the_post();
                    ?>

                    <div class="blog_area">

                    <div class="post_thum">
                    <h2> <a href="<?php the_permalink(); ?>"> <?php echo the_post_thumbnail('post-thumbnails'); ?></a></h2>
                         
                    </div>

                    <div class="post_details">
                         <h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></h2>
                    <?php the_excerpt();?>
                    </div>
                    
                    </div>
                         <?php 
                              endwhile;
                              else :
                                   _e('no post found');
                              endif;
                         ?>
                         
                         
                    </div>

                    <div class="col-md-3">
                         <?php get_sidebar(); ?>
                    </div>
               </div>
          </div>
     </section>

     
<?php
//the main footer template file
   get_footer();

?>