
<?php get_header(); ?>
   
<div class="container-fluid">
    
    <div class="parallax_section2 parallax_image">
                <div class="row">
                    <div class="card border-dark">
                       <h1>Hello from a single post</h1>
                    </div><!--END CARD BODY-->
            </div><!--END ROW-->
    </div><!--END PARALLAX 2-->
   
    <div class="parallax_section1 parallax_image">
    </div><!--END PARALLAX-->


  

       
       

       <div class="parallax_section2 parallax_image">
                <div class="row">
                    <div class="card border-dark">
                            <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                                <div class="card-body">
  

                            <?php if(have_posts()) : ?> <!--  If there are posts available  -->

                            <?php while(have_posts()) : the_post(); ?> <!-- if there are posts, iterate the posts in the loop-->
       
                            <h3 class="card-text"><?php the_title(); ?></h3>    <!--retrieves blog title-->
                            
                            <hr>
                            
                            <img><?php if(has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(array(300,300)); ?> <!--Größe des thumbnails-->
                                    <?php endif; ?></img>
                                    
                                    <hr>

                            <p class="card-text"><?php the_time('F j, Y g:i a'); ?></p><!--retrieves date blog entry was created-->
                            
                            

                            <p class="card-text">Author: <?php the_author(); ?></p><!--retrieves author of blog entry-->
                            
                            <hr>
       
                            <p class="card-text"><?php the_content(); ?></p><!--retrieves content-->
                            


                            <?php endwhile; ?><!--end the while loop-->

                            <?php else :?> <!-- if no posts are found then: -->

                            <p>No posts found</p> 
                            <?php endif; ?> <!-- end if -->
                        </div><!--END CARD BODY-->
                    </div><!--END CARD-->
                </div><!--END ROW-->
    </div><!--END PARALLAX 2-->

    <div class="parallax_section1 parallax_image">
    </div><!--END PARALLAX 1-->

 <?php get_footer(); ?>