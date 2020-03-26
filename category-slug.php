<?php get_header(); ?>
<section id = "content-area" class = "article-content container pt-4 pb-4 ">
        <!--Left column on large screens ; one col on small screens-->
        <div id = "both-columns" class = "row pt-3 pb-3">
            <section id = "article-categories-list" class = "col-md-3">
                <form class="form-inline">
                    <div class="input-group mb-4">
                        <input type="search" class="form-control" placeholder = "Search" aria-label="Search">
                        <div class="input-group-append">
                          <span class = "input-group-text btn" role = "button type = "submit"><i class="fas fa-search"></i></span>
                        </div>
                      </div>
                </form> 
                <h5 class = "mb-5 mt-3">Categories</h5>
                <ul>
                    <li class = "pb-4"><a href = "#">Browse By Product</a></li>
                    <li class = "pb-4"><a href = "#">FAQs</a></li>
                    <li class = "pb-4"><a href = "#">Admin Concerns</a></li>
                    <li class = "pb-4"><a href = "#">Software Issues</a></li>
                    <li class = "pb-4"><a href = "#">Hardware Issues</a></li>
                    <li><a href = "#">Popular Articles</a></li>
                </ul>

            </section>

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