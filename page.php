<?php get_header(); ?>
<section id = "content-area" class = "article-content container pt-4 pb-4 ">
        <!--Left column on large screens ; one col on small screens-->
        <div id = "both-columns" class = "row pt-3 pb-3">
            <?php get_sidebar(); ?>

            <!--Right column on large screens ; 1 column on small screens-->
            <article id = "article-category-slug" class="col-md-9">  
                <div class="card p-5">
                    <div class="card-body">
                        <h3 class="card-title">Category - Popular Articles</h3>
                        <ul class = "article-category-slug-list mt-3">
                            <li class = "article-item pt-4 pb-4"><a href = "#">Article 1</a></li>
                            <li class = "article-item pb-4"><a href = "#">Article 2</a></li>
                            <li class = "article-item pb-4"><a href = "#">Article 3</a></li>
                            <li class = "article-item pb-4"><a href = "#">Article 4</a></li>
                        </ul>
                        

                    </div>
                </div>
                    
            </article>
               
        </div> 
        
        
    </section>

<?php get_footer(); ?>