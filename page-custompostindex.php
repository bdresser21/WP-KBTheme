
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
                        <h3 class="card-title"><?php the_title();?></h3>
                        <ul class = "article-category-slug-list mt-3">
                            <?php
                                /*function display_all_custom_posts(){
                                    //dec args for custom post types which we'll be sending through custom query
                                    $args = array(
                                        'post_type'=> 'kb-article',
                                        'orderby' => 'menu-order',
                                        'order'=> 'ASC'
                                    );
                                    
                                    $custom_query = new WP_Query($args);

                                    //loop through all custom posts and display
                                    while ($custom_query->have_posts()) : $custom_query->the_post() ;

                                    ?>
                                    <li class = "article-item pt-4 pb-4"><a href = "<?php the_permalink();?>"><?php the_title();?></a></li>
                                    <?php endwhile; ?>
                                }*/

                                //dec args for custom post types which we'll be sending through custom query
                                $args = array(
                                    'post_type'=> 'kb-article',
                                    'orderby' => 'menu-order',
                                    'order'=> 'ASC'
                                );
                                
                                $custom_query = new WP_Query($args);

                                //loop through all custom posts and display
                                while ($custom_query->have_posts()) : $custom_query->the_post() ;

                            ?>
                            <li class = "article-item pt-4 pb-4"><a href = "<?php the_permalink();?>"><?php the_title();?></a></li>
                            <?php endwhile; ?>
                        </ul>
                    <?php
/*
 * Convert code below to function that Loops through Categories and Display Posts within
 */
/*function display_all_posts_by_category(){*/

    
 
$post_type = 'kb-article';
 
// Get all the taxonomies for this post type
$taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );
 
foreach( $taxonomies as $taxonomy ) :
 
    // Gets every "category" (term) in this taxonomy to get the respective posts
    $terms = get_terms( $taxonomy );
 
    foreach( $terms as $term ) : ?>

        <?php
        $args = array(
                'post_type' => $post_type,
                'posts_per_page' => -1,  //show all posts
                'tax_query' => array(
                    array(
                        'taxonomy' => $taxonomy,
                        'field' => 'slug',
                        'terms' => $term->slug,
                    )
                )
 
            );
        $posts = new WP_Query($args);
 
        if( $posts->have_posts() ): ?> 
        
         <h6><?php echo $term->name; ?></h6>
         
        <?php while( $posts->have_posts() ) : $posts->the_post(); ?>
 
                    <?php /*if(has_post_thumbnail()) { ?>
                            <?php the_post_thumbnail(); ?>
                    <?php }
                    // no post image so show a default img 
                    else { ?>
                           <img src="<?php bloginfo('template_url'); ?>/assets/img/default-img.png" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" width="110" height="110" />
                    <?php } */?>
 
                    <li class = "article-item pt-4 pb-4">
                        <a href = "<?php  the_permalink(); ?>"><?php  echo get_the_title(); ?></a>
                    </li>
 
                        <?php  //the_permalink(); ?>
                   
 
        <?php endwhile; endif; ?>
 
    <?php endforeach;
 
endforeach; ?>
                        
                        
                        <?php //$all_post_types = get_post_types();
                        
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