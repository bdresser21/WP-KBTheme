<?php get_header(); ?>

<section id = "content-area" class = "article-content container pt-4 pb-4 ">
        <!--Left column on large screens ; one col on small screens-->
        <div id = "both-columns" class = "row pt-3 pb-3">
            <?php get_sidebar(); ?>

            <!--Right column on large screens ; 1 column on small screens-->
            <article id = "kb-article" class="col-md-9">  
                <div id = "article-post" class="card p-5">
                    <div class="card-body">
                        <h1 class="card-title"><?php the_title(); ?></h1>
                        
                        <div class = "content pt-5"><?php get_template_part('includes/section', 'content'); ?>
                        </div>
                    </div>
                </div>
                    
                <p class = "rating text-center pt-5">Did this article answer your question?</p>
                    <p class = "text-center"><a class = "pl-2" href = "#"><i class="far fa-smile fa-lg"></i></a><a href = "#"><i class="far fa-frown fa-lg pl-3"></i></a></p>
                
                <div class="card mt-5 p-5">
                    <div class="card-body">
                    <h6 class="card-title mb-4">Related Articles</h6>
                    <a href="#" class="card-link">Article Title Goes Here</a>
                    </div>
                </div>
                <div id = "search-again" class="col-sm-12 text-center pb-5 pt-5">
                    <h2 class = "pt-5">Looking for something else?</h2>
                    <form class="form-inline justify-content-center pt-3">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn my-2 my-sm-0" type="submit">Search</button>
                    </form>   
                </div>
            </article>
               
        </div> 
        
        
    </section>



<?php get_footer(); ?>