<?php get_header(); ?>



    <!-- 
    Breadcump start
     -->
     <?php while( have_posts() ):the_post(); ?>
     <div class="bred-cump__area ">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="bread-cum__anex">
                        <li><a href="#">HOME</a></li>
                        <li class="active"><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
     
    <!-- 
    Breadcump area end
      --> 

    <!-- 
    product single page start
      -->
    <div class="page-area">
        <div class="container">
            <div class="row">
               <div class="col-sm-12">
                   <?php the_content(); ?>
               </div> 
                
            </div>
        </div>
    </div>
<?php endwhile; ?>











<?php get_footer(); ?>