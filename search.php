<?php get_header(); ?>

<section id = "content-area" class = "article-content container pt-4 pb-4 ">
        <!--Left column on large screens ; one col on small screens-->
        <div id = "both-columns" class = "row pt-3 pb-3">
            <?php get_sidebar(); ?>

            <!--Right column on large screens ; 1 column on small screens-->
            <article id = "search-results" class="col-md-9">  
                <div id = "search-content" class="card p-5">
                    <div class="card-body">
                        <h2 class="card-title pb-3">Here's what we found for [term]</h2>
                        
                        <div class = "result mt-4 pb-3">
                            <h5><a href = "#">Hello there</a></h5>
                            <p class = "description">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, hic.</p>
                            
                        </div>
                        <div class = "result mt-4 pb-3">
                            <h5><a href = "#">Hello there</a></h5>
                            <p class = "description">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, hic.</p>
                            
                        </div>
                        <div class = "result mt-4 pb-5">
                            <h5><a href = "#">Hello there</a></h5>
                            <p class = "description">Lorem ipsum dolor sit amet consectetur adipisicing elit. A, hic.</p>
                            
                        </div>
                    </div>
                    <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center">
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