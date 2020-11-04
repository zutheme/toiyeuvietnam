<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Numinous
 */

    /**
     * Doctype Hook
     * 
     * @hooked numinous_doctype_cb
    */
    do_action( 'numinous_doctype' );
?>

<head itemscope itemtype="http://schema.org/WebSite">

<?php 
    /**
     * Before wp_head
     * 
     * @hooked numinous_head
    */

    do_action( 'numinous_before_wp_head' ); ?>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MBSC3H7');</script>
<!-- End Google Tag Manager -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MBSC3H7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
    wp_body_open();
    
    /**
     * Before Header
     * 
     * @hooked numinous_page_start - 20
     * @hooked numinous_top_header - 30 
    */
    do_action( 'numinous_before_header' );
    
    /**
     * Numinous Header
     * 
     * @hooked numinous_header_start  - 20
     * @hooked numinous_header_top    - 30
     * @hooked numinous_header_bottom - 40
     * @hooked numinous_header_end    - 100    
    */
    do_action( 'numinous_header' );
    
    /**
     * After Header
     * 
     * @hooked numinous_featured_section - 20
     * @hooked numinous_top_news_section - 30 
    */
    do_action( 'numinous_after_header' );
    
    /**
     * Before Content
     * 
     * @hooked numinous_page_header - 20
    */
    do_action( 'numinous_before_content' );
    
    /**
     * Numinous Content
     * 
     * @hooked numinous_content_start
    */
    do_action( 'numinous_content' );