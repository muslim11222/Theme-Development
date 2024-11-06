<?php 

// the main template file
     get_header();
?>



     <!-- body area -->
     <section id="body_area">
          <div class="container">
               <div class="row">
                    <div class="col-md-9">
          
                         <?php  get_template_part('template/blog_setup.php')?>
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