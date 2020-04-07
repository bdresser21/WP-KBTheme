
<?php 

/*Template Name: Archive - Posts by Category*/

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
            <?php
                $post_type = 'kb-article';

                // Get all the taxonomies for this post type
                if( is_page($page = 'Administrative') )  :
                    
                    $args = array(
                        'post_type' => $post_type,
                        'posts_per_page' => -1,  //show all posts
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'kb-category',
                                'field' => 'term_id',
                                'terms' => 9
                            ),
                        ),
        
                    );
                endif;
                
                if( is_page($page = 'Browse by Product') )  :
                    $args = array(
                            'post_type' => $post_type,
                            'posts_per_page' => -1,  //show all posts
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'kb-category',
                                    'field' => 'term_id',
                                    'terms' => 3
                                ),
                            ),
            
                        );
                endif;
                if( is_page($page = 'FAQs') )  :
                        $args = array(
                                'post_type' => $post_type,
                                'posts_per_page' => -1,  //show all posts
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'kb-category',
                                        'field' => 'term_id',
                                        'terms' => 2
                                    ),
                                ),
                
                            );
                endif;
                if( is_page($page = 'Hardware Issues') )  :
                    $args = array(
                            'post_type' => $post_type,
                            'posts_per_page' => -1,  //show all posts
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'kb-category',
                                    'field' => 'term_id',
                                    'terms' => 7
                                ),
                            ),
            
                        );
                endif;
                if( is_page($page = 'Popular Articles') )  :
                    $args = array(
                            'post_type' => $post_type,
                            'posts_per_page' => -1,  //show all posts
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'kb-category',
                                    'field' => 'term_id',
                                    'terms' => 8
                                ),
                            ),
            
                        );
                endif;
                if( is_page($page = 'Software Issues') )  :
                    $args = array(
                            'post_type' => $post_type,
                            'posts_per_page' => -1,  //show all posts
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'kb-category',
                                    'field' => 'term_id',
                                    'terms' => 6
                                ),
                            ),
            
                        );
                endif;

            $posts = new WP_Query($args);

                //echo '<pre>';
                //print_r($posts);
                //echo '</pre>';

            if( $posts->have_posts() ): ?> 
            
            
            <?php while( $posts->have_posts() ) : $posts->the_post(); ?>
    
                        <li class = "article-item pt-4">
                            <a href = "<?php  the_permalink(); ?>"><?php  echo get_the_title(); ?></a>
                        </li>
                    
    
            <?php endwhile; endif; ?>
                                        
                        </ul>
                        
                        
                        <?php 
                        
                        //echo '<pre>';
                        //print_r($posts);
                        //echo '</pre>';
                        ?>
                        
                        
                    </div>
                </div>
                    
            </article>
               
        </div>     
        
    </section>

<?php get_footer(); ?>