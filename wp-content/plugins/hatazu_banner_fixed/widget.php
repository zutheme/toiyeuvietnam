<?php
include("option_banner_box.php");
// Register and load the widget
function htz_banner_fixed() {
    register_widget( 'htz_banners' );
}
add_action( 'widgets_init', 'htz_banner_fixed' );
// Creating the widget 
class htz_banners extends WP_Widget  {
 
function __construct() {
    parent::__construct(
     
        // Base ID of your widget
        'htz_banners', 
         
        // hatazu contact  will appear in UI
        __('Banner fixed right', 'htz_banner_domain'), 
         
        // Widget description
        array( 'description' => __( 'banner form', 'htz_banner_domain' ), ) 
        );
    }
 
    // Creating widget front-end
     
    public function widget( $args, $instance ) {
            $title = apply_filters( 'widget_title', $instance['title'] );
             
            // before and after widget arguments are defined by themes
            //echo $args['before_widget'];
            //if ( ! empty( $title ) )
            //echo $args['before_title'] . $title . $args['after_title'];
             
            // This is where you run the code and display the output
            //echo __( 'Hello, World!', 'htz_banner_domain' );
            //banner_box();
            $slug_current = get_curent_slug();
            $cate_banner = 'banner-'.$slug_current;
            //echo $cate_banner;
            //echo $category->term_id;
            $team_query = new WP_Query( array(
                'post_type' => 'banners',
                'posts_per_page' => '1',
                'tax_query' => array(
                    array (
                        'taxonomy' => 'group_banner',
                        'field' => 'slug',
                        'terms' => $cate_banner,
                    )
                ),
            ));
          $count = 0;
         if ($team_query->have_posts()) {
          while ($team_query->have_posts()) {
                $team_query->the_post();  
                $id = get_the_ID();
                $linkbanner = get_post_meta( $id, 'opt-banner-link', true );
                $thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id($id), 'full', false ); 
                ?>
                    <a href="<?php echo $linkbanner; ?>"><img class="thumb" src="<?php echo $thumbnail[0]; ?>"></a>  
                    <?php 
                }//end while
              } else { ?>
                    <a href="<?php echo esc_attr( get_option('banner-link') ); ?>"><img class="thumb" src="<?php echo esc_attr( get_option('banner-image') ); ?>"></a>
                  
              <?php }//end if have post
              wp_reset_query(); 

            //echo $args['after_widget'];
        }     
    // Widget Backend 
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = __( 'New title', 'htz_banner_domain' );
        }
        // Widget admin form
        ?>
        <p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
    <?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
} ?>
