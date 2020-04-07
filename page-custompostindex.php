
<?php 

/*Template Name: Custom Post Index*/ 

get_header(); ?>

<section id = "content-area" class = "article-content container pt-4 pb-4 ">
        <!--Left column on large screens ; one col on small screens-->
        <div id = "both-columns" class = "row pt-3 pb-3">
            <?php get_sidebar(); ?>

            <!--Right column on large screens ; 1 column on small screens-->
            <article id = "article-category-slug" class="col-md-9">  
                <div class="card p-5">
                    <div class="card-body">
                        <h2 class="card-title heading-underline pb-4"><?php the_title();?></h2>
                        
                        <ul class = "article-category-slug-list mt-3">
                            <?php display_all_custom_posts();?>
                            <?php //display_all_posts_by_category();?>
                        </ul>
                    <?php
                        
                        //echo '<pre>';
                        //print_r($all_post_types);
                        //echo '</pre>';
                        ?>
                        
                        
                    </div>
                </div>
                    
            </article>
               
        </div>     
        
    </section>

<?php get_footer(); ?>