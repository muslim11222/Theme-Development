<?php 

// the main template file
     get_header();
?>




     <!-- body area -->
     <section id="body_area">
          <div class="container">
               <div class="row">
                    <div class="col-md-12">
                         <?php the_content();?>
                    </div>
               </div>
          </div>
     </section>

     

<?php
//the main footer template file
   get_footer();

?>