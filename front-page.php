<?php get_header(); ?>
<header id = "search-docs" class = "jumbotron jumbotron-fluid">
        <div class="container text-center p-5">
            <h1>How can we help?</h1>
            
            <form role = "search" class="form-inline justify-content-center pt-3">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit">Search</button>
            </form> 
            
        </div>
        <!--Background-->
        <!--Text-->
    </header>
    <section id = "content-area" class = "container pt-4 pb-4 ">
        <!--Header Text-->
        <h4 class = "pb-4">General Topics</h4>
        
        <section class = "category-list">
            <div class="row text-center">
                
                <?php 
                  //store terms assoc w/ kb category in var
                  $custom_cats = get_terms([
                    'taxonomy' => 'kb-category',
                    'hide_empty' => false,
                  ]);


                  //Loop that Creates a new card for each custom post category (title, desc, button w/ article count)
                  foreach( $custom_cats as $custom_cat_value ) : ?>
                      <div class="col-sm-12 col-md-6 col-lg-4 pb-4">
                        <div class="card p-4">
                          <div class="card-body">
                            <h5 class="card-title"><?php echo $custom_cat_value->name ; ?></h5>
                            <p class="card-text"><?php echo $custom_cat_value->description; ?></p>
                            <a href="

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
                              endif ;
                            ; ?>
                            
                            
                            " class="btn btn-primary"><?php echo $custom_cat_value->count;?> Articles</a>
                          </div>
                        </div>
                      </div>
                  <?php endforeach;?>
                 







           
              </div>
        </section>
    </section>
<?php get_footer(); ?>