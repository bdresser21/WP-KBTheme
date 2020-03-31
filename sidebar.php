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
        
        <?php 
            $custom_cats = get_terms([
                'taxonomy' => 'kb-category',
                'hide_empty' => false,
            ]);

            $taxonomy_exist = taxonomy_exists('kb-category');
            //apply_filters( 'list_terms_exclusions', 'top-nav, Uncategorized');
            //within array object, loop through arr & only grab array items with [taxonomy] => kb-category;
            //then, grab [name] ;
            //display [name]
            
            foreach ($custom_cats as $custom_cat_value) {
                if($taxonomy_exist){
                    echo "<li class = 'pb-4'><a href = ".get_permalink().">".$custom_cat_value->name."</a></li>";
                }else {
                    array_pop($custom_cats[6]);
                }
            }
            ?>
    <!--<li class = "pb-4"><a href = "#">Browse By Product</a></li>
        <li class = "pb-4"><a href = "#">FAQs</a></li>
        <li class = "pb-4"><a href = "#">Admin Concerns</a></li>
        <li class = "pb-4"><a href = "#">Software Issues</a></li>
        <li class = "pb-4"><a href = "#">Hardware Issues</a></li>
        <li><a href = "#">Popular Articles</a></li>-->
        <?php
        /*$categories =  get_categories('child_of=31');  
        foreach  ($categories as $category) {
            //Display the sub category information using $category values like $category->cat_name
            echo '<h2>'.$category->name.'</h2>';
            echo '<ul>';

            foreach (get_posts('cat='.$category->term_id) as $post) {
                setup_postdata( $post );
                echo '<li><a href="'.get_permalink($post->ID).'">'.get_the_title().'</a></li>';   
            }  
            echo '</ul>';
        }*/
        ?>
    </ul>

</section>