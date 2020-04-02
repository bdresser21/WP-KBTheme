
<?php 

/*Template Name: Posts by Category*/

get_header(); ?>

<section id = "content-area" class = "article-content container pt-4 pb-4 ">
        <!--Left column on large screens ; one col on small screens-->
        <div id = "both-columns" class = "row pt-3 pb-3">
            <?php get_sidebar(); ?>

            <!--Right column on large screens ; 1 column on small screens-->
            <article id = "article-category-slug" class="col-md-9">  
                <div class="card p-5">
                    <div class="card-body">
                        <h3 class="card-title"><?php the_title();?></h3>
                        <ul class = "article-category-slug-list mt-3">
                            <?php
                                //if(is_page('FAQs')){
                                    //display custom posts assigned to this category only

                                //}
                                //dec args for custom post types which we'll be sending through custom query
                                $args = array(
                                    'post_type'=> 'kb-article',
                                    'orderby' => 'menu-order',
                                    'order'=> 'ASC',
                                    'taxonomy' => 'kb-category',
                                    
                                    
                                );
                                
                                $custom_query = new WP_Query($args);

                                //loop through all custom posts and display
                                while ($custom_query->have_posts()) : $custom_query->the_post() ;

                            ?>
                            <li class = "article-item pt-4 pb-4"><a href = "<?php the_permalink();?>"><?php the_title();?></a></li>
                            <?php endwhile; ?>
                        </ul>
                        
                        
                        <?php 
                        
                        echo '<pre>';
                        print_r($all_post_types);
                        echo '</pre>';
                        ?>
                        
                        
                    </div>
                </div>
                    
            </article>
               
        </div>     
        
    </section>

<?php get_footer(); ?>