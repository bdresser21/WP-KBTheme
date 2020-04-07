<?php get_header(); ?>
<section id = "content-area" class = "article-content container pt-4 pb-4 ">
        <!--Left column on large screens ; one col on small screens-->
        <div id = "both-columns" class = "row pt-3 pb-3">
            <?php get_sidebar(); ?>

            <!--Right column on large screens ; 1 column on small screens-->
            <article id = "article-category-slug" class="col-md-9">  
                <div class="card p-5">
                    <div class="card-body">
                    <?php// if(is_category( 'FAQs' )) : ?>
                        <h3 class="archive-title card title">FAQs</h1>
                    <?php // else: ?>
                        <h1 class="archive-title">Category Archive: <?php // single_cat_title(); ?> </h1>
                    <?php// endif; ?>
 
                        <h3 class="card-title">Category - Popular Articles</h3>
                        <ul class = "article-category-slug-list mt-3">
                            <li class = "article-item pt-4 pb-4"><a href = "#">Article 1</a></li>
                            <li class = "article-item pb-4"><a href = "#">Article 2</a></li>
                            <li class = "article-item pb-4"><a href = "#">Article 3</a></li>
                            <li class = "article-item pb-4"><a href = "#">Article 4</a></li>
                        </ul>
                        
                        <?php 
                        // Check if there are any posts to display
                        /*if ( have_posts() ) : ?>
                        
                        <header class="archive-header">
                        <h1 class="archive-title">Category: <?php single_cat_title( '', false ); ?></h1>
                        
                        
                        <?php
                        // Display optional category description
                        if ( category_description() ) : ?>
                        <div class="archive-meta"><?php echo category_description(); ?></div>
                        <?php endif; ?>
                        </header>
                        
                        $post_type = 'kb-article';*/
   
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
				   
   
		   <?php endwhile; endif; ?>
   
	   <?php endforeach;?>
   
   <?php endforeach; ?>
                        
                        
                        
                    </div>
                </div>
                    
            </article>
               
        </div> 
        
        
    </section>

<?php get_footer(); ?>