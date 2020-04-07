<section id = "article-categories-list" class = "col-md-3">
    <form class="form-inline" role = "search" method = "get" action = "<?php echo home_url( '/' ); ?>"">
        <div class="input-group mb-4">
            <input type="search" class="form-control" placeholder = "Search" aria-label="Search" value="<?php echo get_search_query() ?>" name="s"
                title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" >
            <div class="input-group-append">
                <span class = "input-group-text btn" role = "button" type = "submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>"><i class="fas fa-search"></i></span>
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


            //echo '<pre>';
           // echo print_r($cat_pages);
            //echo '</pre>';
            //within array object, loop through arr & only grab array items with [taxonomy] => kb-category;
            //then, grab [name] ;
            //display [name]
            
?>
            <?php //  display all links to child pages labelled Cateory ?>
                <a href = "<?php  //the_permalink(); ?>"><?php  echo wpb_list_child_pages('Categories'); ?></a>

            <?php //for custom posts, make sure cat page link matches cat title
                
                if( is_single() ) :
                    foreach( $custom_cats as $custom_cat_value ) : ?>
                        <li class = 'pb-4'><a href = "
                            <?php 
                            if($custom_cat_value->name === "Administrative") :
                                echo get_permalink( get_page_by_title( 'Administrative' ) ) ;
                            endif ;
                            if($custom_cat_value->name === "Browse by Product") :
                                echo get_permalink( get_page_by_title( 'Browse by Product' ) ) ;
                            endif ;
                            if($custom_cat_value->name === "FAQs") :
                                echo get_permalink( get_page_by_title( 'FAQs' ) ) ;
                            endif ;
                            if($custom_cat_value->name === "Hardware Issues") :
                                echo get_permalink( get_page_by_title( 'Hardware Issues' ) ) ;
                            endif ;
                            if($custom_cat_value->name === "Popular Articles") :
                                echo get_permalink( get_page_by_title( 'Popular Articles' ) ) ;
                            endif ;
                            if($custom_cat_value->name === "Software Issues") :
                                echo get_permalink( get_page_by_title( 'Software Issues' ) ) ;
                            endif ;?>

                            "><?php echo $custom_cat_value->name ;?></a></li>

                    <?php endforeach;
                endif; ?>
        
    </ul>

</section>