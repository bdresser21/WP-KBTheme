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
    
    <ul>
        
        
          
        
    </ul>

</section>