
     <?php
          if( have_posts()) :
               while( have_posts() ) : the_post();
     ?>

     <div class="blog_area">
          <div class="post_thum">
           <a href="<?php the_permalink(); ?>"> <?php echo the_post_thumbnail('post-thumbnails'); ?></a>       
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

          <div id="page_nav">
               <?php if ('khan_page_navigation') {khan_page_navigation();} else{ ?>
                    <?php  next_post_link(); ?>
                    <?php  previous_post_link(); ?>
               <?php } ?>
          </div>
          
     
