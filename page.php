<?php get_header(); ?>
<section id = "content-area" class = "article-content container pt-4 pb-4 ">
        <!--Left column on large screens ; one col on small screens-->
        <div id = "both-columns" class = "row pt-3 pb-3">
            <?php get_sidebar('page'); ?>

            <!--Right column on large screens ; 1 column on small screens-->
            <article id = "article-category-slug" class="col-md-9">  
                <div class="card p-5">
                    <div class="card-body">
                        <h2 class="card-title heading-underline pb-4"><?php the_title();?></h2>
                        <div class = "content pt-5"><?php get_template_part('includes/section', 'content'); ?>
                        </div>
    
    
   
	   <?php //endforeach;?>
   
   <?php  //endforeach; ?>

                    </div>
                </div>
                    
            </article>
               
        </div> 
        
        
    </section>

<?php get_footer(); ?>