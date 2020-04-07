<?php get_header(); ?>

<!-- https://codex.wordpress.org/Creating_a_Search_Page -->

<section id = "content-area" class = "article-content container pt-4 pb-4 ">
        <!--Left column on large screens ; one col on small screens-->
        <div id = "both-columns" class = "row pt-3 pb-3">
            <?php get_sidebar('page'); ?>

            <!--Right column on large screens ; 1 column on small screens-->
            <article id = "search-results" class="col-md-9">  
                <div id = "search-content" class="card p-5">
                    <div class="card-body">
                        <h2 class="card-title pb-3">Here's what we found for: <?php echo get_search_query( $escaped = true ); ?></h2>

                        <?php 
                            $query_args = array( 's' => get_search_query(), 
                                        'post_type' => 'kb-article');
                            $query = new WP_Query( $query_args );

                            //echo '<pre>';
                            //echo print_r($query);
                            //echo '</pre>';
                            
                            if( $query->have_posts() ): ?>
                            
                            
                            <?php while( $query->have_posts() ) : $query->the_post(); ?>


                                <div class = "result mt-4 pb-3">
                                    <h5>
                                        <a href = "<?php  the_permalink(); ?>"><?php  echo get_the_title(); ?></a>
                                    </h5>
                                    <p class = "description"><?php echo get_the_excerpt(); ?></p>
                                </div>
				   
   
		                    <?php endwhile; endif; ?>

                    </div>
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-start pl-2">
                          <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                          <li class="page-item"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </article>
               
        </div>    
    </section>

<?php get_footer(); ?>