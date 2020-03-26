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
        <?php wp_get_archives( 'type=monthly'); ?>
    <!--<li class = "pb-4"><a href = "#">Browse By Product</a></li>
        <li class = "pb-4"><a href = "#">FAQs</a></li>
        <li class = "pb-4"><a href = "#">Admin Concerns</a></li>
        <li class = "pb-4"><a href = "#">Software Issues</a></li>
        <li class = "pb-4"><a href = "#">Hardware Issues</a></li>
        <li><a href = "#">Popular Articles</a></li>-->
    </ul>

</section>