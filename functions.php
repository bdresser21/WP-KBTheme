

<?php


/*if(is_page('home')){
	get_template_part('front-page', get_post_format());
}*/

//Dynamic Copyright Date
function comicpress_copyright() {
	global $wpdb;
	$copyright_dates = $wpdb->get_results("
	SELECT
	YEAR(min(post_date_gmt)) AS firstdate,
	YEAR(max(post_date_gmt)) AS lastdate
	FROM
	$wpdb->posts
	WHERE
	post_status = 'publish'
	");
	$output = '';
	if($copyright_dates) {
	$copyright =' ' . $copyright_dates[0]->firstdate;
	if($copyright_dates[0]->firstdate != $copyright_dates[0]->lastdate) {
	$copyright .= '-' . $copyright_dates[0]->lastdate;
	}
	$output = $copyright;
	}
	return $output;
}

//displays list of all custom post titles/links
function display_all_custom_posts(){
	//dec args for custom post types which we'll be sending through custom query
	$args = array(
		'post_type'=> 'kb-article',
		'orderby' => 'menu-order',
		'order'=> 'ASC'
	);
	
	$custom_query = new WP_Query($args);

	//loop through all custom posts and display
	while ($custom_query->have_posts()) : $custom_query->the_post() ;

	?>
	<li class = "article-item pt-4"><a href = "<?php the_permalink();?>"><?php the_title();?></a></li>
	<?php endwhile; 
}


//Loops through Categories and Display Posts as list within

function display_all_posts_by_category(){


   $post_type = 'kb-article';
   
   // Get all the taxonomies for this post type
   $taxonomies = get_object_taxonomies( array( 'post_type' => $post_type ) );
   
   foreach( $taxonomies as $taxonomy ) :
   
	   // Gets every "category" (term) in this taxonomy to get the respective posts
	   $terms = get_terms( $taxonomy );
   
	   foreach( $terms as $term ) : ?>

		   <?php
		   $args = array(
				   'post_type' => $post_type,
				   'posts_per_page' => -1,  //show all posts
				   'tax_query' => array(
					   array(
						   'taxonomy' => $taxonomy,
						   'field' => 'slug',
						   'terms' => $term->slug,
					   )
				   )
   
			   );
		   $posts = new WP_Query($args);
   
		   if( $posts->have_posts() ): ?> 
		   
		   <h6 class = "pt-5"><?php echo $term->name; ?></h6>
		   
		   <?php while( $posts->have_posts() ) : $posts->the_post(); ?>
   
					   <?php /*if(has_post_thumbnail()) { ?>
							   <?php the_post_thumbnail(); ?>
					   <?php }
					   // no post image so show a default img 
					   else { ?>
						   <img src="<?php bloginfo('template_url'); ?>/assets/img/default-img.png" alt="<?php echo get_the_title(); ?>" title="<?php echo get_the_title(); ?>" width="110" height="110" />
					   <?php } */?>
   
					   <li class = "article-item pt-4 pb-4">
						   <a href = "<?php  the_permalink(); ?>"><?php  echo get_the_title(); ?></a>
					   </li>
				   
   
		   <?php endwhile; endif; ?>
   
	   <?php endforeach;?>
   
   <?php endforeach; 
					   
}   


//display list of child pages 
function wpb_list_child_pages() { 

    global $post; 

    if ( is_page() && $post->post_parent )    
        $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' .$post->post_parent . '&echo=0' );
    else
        $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );

    if ( $childpages ) {    
        $string = '<ul>' . $childpages . '</ul>';
    }

    return $string;
}

add_shortcode('wpb_childpages', 'wpb_list_child_pages');

//Theme Options
add_theme_support('title-tag');
add_theme_support('menus');



//Menus
register_nav_menus(

		array(

			'top-menu' => 'Top Nav Location',
			'mobile-menu' => 'Mobile Menu Location',
		)

);



//Custom Posts
if ( ! function_exists( 'kb_article' ) ) {

	// Register Custom Post Type
	function kb_article() {

		$labels  = array(
			'name'                  => _x( 'KnowledgeBase', 'Post Type General Name', 'an-support' ),
			'singular_name'         => _x( 'KB Article', 'Post Type Singular Name', 'an-support' ),
			'menu_name'             => __( 'KnowledgeBase', 'an-support' ),
			'name_admin_bar'        => __( 'KB Article', 'an-support' ),
			'archives'              => __( 'KB Article Archives', 'an-support' ),
			'attributes'            => __( 'KB Article Attributes', 'an-support' ),
			'parent_item_colon'     => __( 'Parent KB Article:', 'an-support' ),
			'all_items'             => __( 'All KB Articles', 'an-support' ),
			'add_new_item'          => __( 'Add New KB Article', 'an-support' ),
			'add_new'               => __( 'Add New', 'an-support' ),
			'new_item'              => __( 'New KB Article', 'an-support' ),
			'edit_item'             => __( 'Edit KB Article', 'an-support' ),
			'update_item'           => __( 'Update KB Article', 'an-support' ),
			'view_item'             => __( 'View KB Article', 'an-support' ),
			'view_items'            => __( 'View KB Articles', 'an-support' ),
			'search_items'          => __( 'Search KB Articles', 'an-support' ),
			'not_found'             => __( 'Not found', 'an-support' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'an-support' ),
			'featured_image'        => __( 'Featured Image', 'an-support' ),
			'set_featured_image'    => __( 'Set featured image', 'an-support' ),
			'remove_featured_image' => __( 'Remove featured image', 'an-support' ),
			'use_featured_image'    => __( 'Use as featured image', 'an-support' ),
			'insert_into_item'      => __( 'Insert into KB Article', 'an-support' ),
			'uploaded_to_this_item' => __( 'Uploaded to this KB Article', 'an-support' ),
			'items_list'            => __( 'KB list', 'an-support' ),
			'items_list_navigation' => __( 'KB list navigation', 'an-support' ),
			'filter_items_list'     => __( 'Filter KB list', 'an-support' ),
		);
		$rewrite = array(
			'slug'       => 'kb',
			'with_front' => false,
			'pages'      => true,
			'feeds'      => true,
		);
		$args    = array(
			'label'               => __( 'KB Article', 'an-support' ),
			'description'         => __( 'KB Article Description', 'an-support' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions' ),
			'hierarchical'        => true,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'rewrite'             => $rewrite,
			'capability_type'     => 'page',
			'show_in_rest'        => true,
		);
		register_post_type( 'kb-article', $args );

	}
	add_action( 'init', 'kb_article', 0 );

}

if ( ! function_exists( 'kb_article_tags' ) ) {

	// Register Custom Taxonomy
	function kb_article_tags() {

		$labels  = array(
			'name'                       => _x( 'Tags', 'Taxonomy General Name', 'an-support' ),
			'singular_name'              => _x( 'Tag', 'Taxonomy Singular Name', 'an-support' ),
			'menu_name'                  => __( 'Tags', 'an-support' ),
			'all_items'                  => __( 'All Tags', 'an-support' ),
			'parent_item'                => __( 'Parent Tag', 'an-support' ),
			'parent_item_colon'          => __( 'Parent Tag:', 'an-support' ),
			'new_item_name'              => __( 'New Tag Name', 'an-support' ),
			'add_new_item'               => __( 'Add New Tag', 'an-support' ),
			'edit_item'                  => __( 'Edit Tag', 'an-support' ),
			'update_item'                => __( 'Update Tag', 'an-support' ),
			'view_item'                  => __( 'View Tag', 'an-support' ),
			'separate_items_with_commas' => __( 'Separate tags with commas', 'an-support' ),
			'add_or_remove_items'        => __( 'Add or remove tags', 'an-support' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'an-support' ),
			'popular_items'              => __( 'Popular Tags', 'an-support' ),
			'search_items'               => __( 'Search Tags', 'an-support' ),
			'not_found'                  => __( 'Not Found', 'an-support' ),
			'no_terms'                   => __( 'No tags', 'an-support' ),
			'items_list'                 => __( 'Tags list', 'an-support' ),
			'items_list_navigation'      => __( 'Tags list navigation', 'an-support' ),
		);
		$rewrite = array(
			'slug'         => 'kb-tags',
			'with_front'   => 'kb',
			'has_archive'  => true,
			'hierarchical' => false,
		);
		$args    = array(
			'labels'            => $labels,
			'has_archive'       => true,
			'hierarchical'      => false,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => false,
			'rewrite'           => $rewrite,
			'show_tagcloud'     => true,
			'show_in_rest'      => true,
		);
		register_taxonomy( 'kb-tag', array( 'kb-article' ), $args );

	}
	add_action( 'init', 'kb_article_tags', 0 );

}


if ( ! function_exists( 'kb_article_categories' ) ) {

	// Register Custom Taxonomy
	function kb_article_categories() {

		$labels  = array(
			'name'                       => _x( 'Categories', 'Taxonomy General Name', 'an-support' ),
			'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'an-support' ),
			'menu_name'                  => __( 'Categories', 'an-support' ),
			'all_items'                  => __( 'All Categories', 'an-support' ),
			'parent_item'                => __( 'Parent Item', 'an-support' ),
			'parent_item_colon'          => __( 'Parent Item:', 'an-support' ),
			'new_item_name'              => __( 'New Category Name', 'an-support' ),
			'add_new_item'               => __( 'Add New Category', 'an-support' ),
			'edit_item'                  => __( 'Edit Category', 'an-support' ),
			'update_item'                => __( 'Update Category', 'an-support' ),
			'view_item'                  => __( 'View Category', 'an-support' ),
			'separate_items_with_commas' => __( 'Separate Categories with commas', 'an-support' ),
			'add_or_remove_items'        => __( 'Add or remove Categories', 'an-support' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'an-support' ),
			'popular_items'              => __( 'Popular Categories', 'an-support' ),
			'search_items'               => __( 'Search Categories', 'an-support' ),
			'not_found'                  => __( 'Not Found', 'an-support' ),
			'no_terms'                   => __( 'No Categories', 'an-support' ),
			'items_list'                 => __( 'Categories list', 'an-support' ),
			'items_list_navigation'      => __( 'Categories list navigation', 'an-support' ),
		);
		$rewrite = array(
			'slug'         => 'kb-categories',
			'with_front'   => false,
			'hierarchical' => true,
		);
		$args    = array(
			'labels'            => $labels,
			'has_archive'       => true,
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => false,
			'rewrite'           => $rewrite,
			'show_in_rest'      => true,
		);
		register_taxonomy( 'kb-category', array( 'kb-article' ), $args );

	}
	add_action( 'init', 'kb_article_categories', 0 );

}


if ( ! function_exists( 'kb_article_brands' ) ) {

	// Register Custom Taxonomy
	function kb_article_brands() {

		$labels  = array(
			'name'                       => _x( 'Brands', 'Taxonomy General Name', 'an-support' ),
			'singular_name'              => _x( 'Brand', 'Taxonomy Singular Name', 'an-support' ),
			'menu_name'                  => __( 'Brands', 'an-support' ),
			'all_items'                  => __( 'All Brands', 'an-support' ),
			'parent_item'                => __( 'Parent Item', 'an-support' ),
			'parent_item_colon'          => __( 'Parent Item:', 'an-support' ),
			'new_item_name'              => __( 'New brand Name', 'an-support' ),
			'add_new_item'               => __( 'Add New Brand', 'an-support' ),
			'edit_item'                  => __( 'Edit Brand', 'an-support' ),
			'update_item'                => __( 'Update Brand', 'an-support' ),
			'view_item'                  => __( 'View Brand', 'an-support' ),
			'separate_items_with_commas' => __( 'Separate Brands with Commas', 'an-support' ),
			'add_or_remove_items'        => __( 'Add or remove Brands', 'an-support' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'an-support' ),
			'popular_items'              => __( 'Popular Brands', 'an-support' ),
			'search_items'               => __( 'Search Brands', 'an-support' ),
			'not_found'                  => __( 'Not Found', 'an-support' ),
			'no_terms'                   => __( 'No Brands', 'an-support' ),
			'items_list'                 => __( 'Brands list', 'an-support' ),
			'items_list_navigation'      => __( 'Brands list navigation', 'an-support' ),
		);
		$rewrite = array(
			'slug'         => 'kb-brands',
			'with_front'   => false,
			'hierarchical' => true,
		);
		$args    = array(
			'labels'            => $labels,
			'has_archive'       => true,
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'show_tagcloud'     => false,
			'rewrite'           => $rewrite,
			'show_in_rest'      => true,
		);
		register_taxonomy( 'kb-brand', array( 'kb-article' ), $args );

	}
	add_action( 'init', 'kb_article_brands', 0 );

}
