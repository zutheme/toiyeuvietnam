<?php
// Our custom post type function
function create_banner_post_type() {

	register_post_type( 'banners',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'banners' ),
				'singular_name' => __( 'banner' )
			),
			'public' => true,
			'menu_icon' => 'dashicons-megaphone',
			'has_archive' => true,
			'rewrite' => array('slug' => 'banners'),
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_banner_post_type' );

/*
* Creating a function to create our CPT
*/

function custom_banner_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'banners', 'Post Type General Name', 'hatazu' ),
		'singular_name'       => _x( 'banner', 'Post Type Singular Name', 'hatazu' ),
		'menu_name'           => __( 'banners', 'hatazu' ),
		'parent_item_colon'   => __( 'Parent banner', 'hatazu' ),
		'all_items'           => __( 'All banners', 'hatazu' ),
		'view_item'           => __( 'View banner', 'hatazu' ),
		'add_new_item'        => __( 'Add New banner', 'hatazu' ),
		'add_new'             => __( 'Add New', 'hatazu' ),
		'edit_item'           => __( 'Edit banner', 'hatazu' ),
		'update_item'         => __( 'Update banner', 'hatazu' ),
		'search_items'        => __( 'Search banner', 'hatazu' ),
		'not_found'           => __( 'Not Found', 'hatazu' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'hatazu' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'banners', 'hatazu' ),
		'description'         => __( 'banner news and reviews', 'hatazu' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 

		'taxonomies' => array( 'post_tag'), 
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_idbanner'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	
	// Registering your Custom Post Type
	register_post_type( 'banners', $args );

}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'custom_banner_post_type', 0 );


/* Create blog Type Taxonomy */
if (!function_exists('create_banner_group_taxonomy')) {
    function create_banner_group_taxonomy()
    {
        $group_labels = array(
            'name' => __( 'group_banner', 'hatazu' ),
            'singular_name' => __( 'group_banner', 'hatazu' ),
            'search_items' =>  __( 'Search groups', 'hatazu' ),
            'popular_items' => __( 'Popular groups', 'hatazu' ),
            'all_items' => __( 'All groups', 'hatazu' ),
            'parent_item' => __( 'Parent group', 'hatazu' ),
            'parent_item_colon' => __( 'Parent group:', 'hatazu' ),
            'edit_item' => __( 'Edit group', 'hatazu' ),
            'update_item' => __( 'Update group', 'hatazu' ),
            'add_new_item' => __( 'Add New group', 'hatazu' ),
            'new_item_name' => __( 'New group Name', 'hatazu' ),
            'separate_items_with_commas' => __( 'Separate groups with commas', 'hatazu' ),
            'add_or_remove_items' => __( 'Add or remove groups', 'hatazu' ),
            'choose_from_most_used' => __( 'Choose from the most used groups', 'hatazu' ),
            'menu_name' => __( 'groups_banner', 'hatazu' )
        );

        register_taxonomy(
            'group_banner',
            array( 'banners' ),
            array(
                'hierarchical' => true,
                'labels' => $group_labels,
                'show_ui' => true,
                'query_var' => true,
                'rewrite' => array('slug' => __('group_banner', 'hatazu'))
            )
        );
    }
}

add_action('init', 'create_banner_group_taxonomy', 0);

/*

 * Adds a meta box to the post editing screen

 */

function prfx_field_custom_banner_meta() {

    add_meta_box( 'prfx_meta', __( 'Field Box Title', 'prfx-textdomain' ), 'prfx_field_meta_banner_callback', 'banners','normal', 'high');

}

add_action( 'add_meta_boxes', 'prfx_field_custom_banner_meta');

/*

 * Outputs the content of the meta box

 */

function prfx_field_meta_banner_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'prfx_nonce' );
    $prfx_stored_meta = get_post_meta( $post->ID ); ?>
    <p>
       <label for="link" class="prfx-row-title"><?php _e( 'link', 'htz-thienkhue' )?></label>
       <input type="text" name="opt-banner-link" value="<?php if ( isset ( $prfx_stored_meta['opt-banner-link'] ) ) echo $prfx_stored_meta['opt-banner-link'][0]; ?>" />
    </p>

    <?php
}

/*

 * Saves the custom meta input

 */

function prfx_field_banner_save( $post_id ) {

    // Checks save status

    $is_autosave = wp_is_post_autosave( $post_id );

    $is_revision = wp_is_post_revision( $post_id );

    $is_valid_nonce = ( isset( $_POST[ 'prfx_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';

    // Exits script depending on save status

    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {

        return;

    }

    // Checks for input and sanitizes/saves if needed 

    $post_type = get_post_type($post_id);

    if ( "banners" != $post_type ) return; 
   	$chk_cate = $_POST['post_category'];
   	$vl = ''; 
	if( isset( $chk_cate) ) {

        foreach ($chk_cate as $item) {
            	$vl .= $item.',';
            } 
          $vl = substr($vl, 0, -1);
         update_post_meta( $post_id, 'opt-banner-id', $vl ); 
    }  
    if( isset( $_POST['opt-banner-id'] ) ) {

        //update_post_meta( $post_id, 'opt-banner-id', $_POST['opt-banner-id'] );    

    }  
    if( isset( $_POST['opt-banner-link'] ) ) {

        update_post_meta( $post_id, 'opt-banner-link', $_POST['opt-banner-link'] );    

    }
    //update_post_meta( $post_id, 'meta-test',"sql=".$sql.",");

    //update_post_meta( $post_id, 'meta-test',"sql=".$sql);

}

add_action( 'save_post', 'prfx_field_banner_save' );

