
<!DOCTYPE html>
<html>
 <head>
   <meta charset="<?php bloginfo('charset'); ?>"><!--displays the encoding-->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <meta name="description" content="<?php bloginfo('description'); ?>"><!--displays the Tagline in Settings->General -->
   <title><?php bloginfo('name'); ?></title>
   <!-- Custom styles for this template -->
   <!--<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet"> <!--displays the primary CSS-->
   <!--<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>-->
    <?php wp_head(); ?>
 </head>
<body>

   
<div class="container-fluid">
    <?php get_header(); ?>
    
    <div class="parallax_section1 parallax_image">
    </div><!--END PARALLAX-->
    
    <div class="parallax_section2 parallax_image">
        <div class="row">
            <div class="card border-dark">
                <h1>See the latest posts</h1>
            </div><!--END CARD-->
        </div><!--END ROW-->
    </div><!--END PARALLAX-->
   
   <div class="parallax_section1 parallax_image">
    </div><!--END PARALLAX-->


  

       
       

       <div class="parallax_section2 parallax_image">
                <div class="row">
                    <div class="card border-dark">
                            <!--<img class="card-img-top" src="..." alt="Card image cap">-->
                                <div class="card-body">
                                    <?php if(have_posts()) : ?> <!--  If there are posts available  -->

                                    <?php while(have_posts()) : the_post(); ?> <!-- if there are posts, iterate the posts in the loop-->
                                    <hr>
                                    <a href="<?php the_permalink(); ?>"><!--retrieves URL for the permalink-->
                                    <h3><?php the_title(); ?></h3>     <!--retrieves blog title-->
                                    </a><br>
                                    

                                    <p class="card-text"><?php the_time('F j, Y g:i a'); ?></p><!--retrieves date blog entry was created-->

                                    <p class="card-text">Author: <?php the_author(); ?></p><!--retrieves author of blog entry-->
                                    
                                    <?php the_excerpt(); ?><!--retrieves excerpt-->
       
                                    <img><?php if(has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail(array(300,300)); ?> <!--Größe des thumbnails-->
                                    <?php endif; ?></img>
                                    
                                   

                                    <?php endwhile; ?><!--end the while loop-->

                                    <?php else :?> <!-- if no posts are found then: -->

                                    <p class="card-text">No posts found</p> 
                                    <?php endif; ?> <!-- end if -->
       
                                </div><!--END CARD BODY-->
                    </div><!--END CARD-->
                </div><!--END ROW-->
    </div><!--END PARALLAX 2-->

    <div class="parallax_section1 parallax_image">
    </div><!--END PARALLAX 1-->
       
      <?php get_footer(); ?> 
   </div><!--END CONTAINER-->





 



</body>
</html>