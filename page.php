
   
   <div class="container-fluid">
    <?php get_header(); ?>
    
     <div class="parallax_section1 parallax_image">
    </div><!--END PARALLAX-->
    
    <div class="parallax_section2 parallax_image">
        <div class="row">
            <div class="card border-dark">
     
                    

                    <?php if(have_posts()) : ?> <!--  If there are pages available  -->

                    <?php while(have_posts()) : the_post(); ?> <!-- if there are pages, iterate the page in the loop-->
                    
                    <h3 class="card-text"><?php the_title(); ?></h3><hr>     <!--retrieves page title-->
                    <p class="card-text"><?php the_content();?></p><!--retrieves content-->

                    <?php endwhile; ?><!--end the while loop-->
                    <?php else :?> <!-- if no page is found then: -->

                    <p class="card-text">No page found</p> 
                    <?php endif; ?> <!-- end if -->
       
            </div><!--END CARD-->
        </div><!--END ROW-->
    </div><!--END PARALLAX-->
   <!--</div>-->
   
    <div class="parallax_section1 parallax_image">
    </div><!--END PARALLAX-->

 
  
  
  <div class="parallax_section1 parallax_image">
    </div><!--END PARALLAX-->
    
<?php get_footer(); ?>