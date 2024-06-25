<?php

    function magellano_theme_support(){
        // add dynamic title tag support
        add_theme_support('title-tag');
        add_theme_support('menus');
        add_theme_support('post-thumbnails');
        add_theme_support('widgets');

    }

    add_action('after_setup_theme', 'magellano_theme_support');

    // menus
    function magellano_theme_menus()
    {
        $locations = array(
            'primary' => "Primary Menu",
            'mobile' => "Mobile Menu",
            'other' => "Other Menu"
        );

        register_nav_menus($locations);
    }

    add_action('init', 'magellano_theme_menus');



    // register css styles
    function magellano_register_styles()
    {
        $version = wp_get_theme()->get('Version');
        // <!-- BASE CSS -->
        wp_enqueue_style('bootstrap-syle', get_template_directory_uri() . "/css/bootstrap.min.css", array(), $version, 'all');
        wp_enqueue_style('style-syle', get_template_directory_uri() . "/css/style.css", array(), $version, 'all');

        // <!-- SPECIFIC CSS -->
        wp_enqueue_style('home-syle', get_template_directory_uri() . "/css/home.css", array(), $version, 'all');
        wp_enqueue_style('custom-syle', get_template_directory_uri() . "/css/custom.css", array(), $version, 'all');
        wp_enqueue_style('submit-syle', get_template_directory_uri() . "/css/submit.css", array(), $version, 'all');
        wp_enqueue_style('help-syle', get_template_directory_uri() . "/css/help.css", array(), $version, 'all');
        wp_enqueue_style('bxslider-syle', get_template_directory_uri() . "/css/jquery.bxslider.css", array(), $version, 'all');

        wp_enqueue_style('contacts-syle', get_template_directory_uri() . "/css/contacts.css", array(), $version, 'all');
        wp_enqueue_style('author-syle', get_template_directory_uri() . "/css/author.css", array(), $version, 'all');
        wp_enqueue_style('blog-syle', get_template_directory_uri() . "/css/blog.css", array(), $version, 'all');
        wp_enqueue_style('particles-syle', get_template_directory_uri() . "/css/particles_2.css", array(), $version, 'all');

        // <!-- FONTS -->
        wp_enqueue_style('font-syle1', "https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap", array(), $version, 'all');
        wp_enqueue_style('font-syle2', "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap", array(), $version, 'all');

    }

    // adding to html 
    add_action('wp_enqueue_scripts', 'magellano_register_styles');

    // register javascripts
    function magellano_register_scripts()
    {
        // <!-- COMMON SCRIPTS -->
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array(), '3.2.1', true);
        wp_enqueue_script('common_scripts-script', get_template_directory_uri() . '/js/common_scripts.min.js', array(), '3.2.1', true);
        wp_enqueue_script('common_func-script', get_template_directory_uri() . '/js/common_func.js', array(), '3.2.1', true);

        // <!-- SPECIFIC SCRIPTS -->
        wp_enqueue_script('modernizr_pricing-script', get_template_directory_uri() . '/js/modernizr_pricing.js', array(), '3.2.1', true);
        wp_enqueue_script('pricing_tables-script', get_template_directory_uri() . '/js/pricing_tables.js', array(), '3.2.1', true);
    }

    // adding to html 
    add_action('wp_enqueue_scripts', 'magellano_register_scripts');

    // register widget
    function magellano_widget()
    {
        register_sidebar(
            array(
                'name' => 'News Widget',
                'id' => 'news-widget',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
            )
        );

        register_sidebar(
            array(
                'name' => 'Homepage Widget',
                'id' => 'homepage-widget',
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>'
            )
        );
    }

    add_action('widgets_init', 'magellano_widget');

    // post type to make spesific post / articles / news
    function magellano_post_type()
    {
        $args = array(
            'labels' => array(
                'name' => 'Affiliates',
                'singular_name' => 'Affiliate'
            ),
            'hierarchical' => false,
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-cover-image',
            'supports' => array('title', 'editor', 'thumbnail'),
            // 'rewrite' => array('slug' => 'affiliates')
        );
        register_post_type('affiliates', $args);

        $args = array(
            'labels' => array(
                'name' => 'Services',
                'singular_name' => 'Service'
            ),
            'hierarchical' => false,
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-align-full-width',
            'supports' => array('title', 'editor', 'thumbnail'),
            // 'rewrite' => array('slug' => 'affiliates')
        );
        register_post_type('services', $args);

        $args = array(
            'labels' => array(
                'name' => 'Portfolios',
                'singular_name' => 'portfolio'
            ),
            'hierarchical' => false,
            'public' => true,
            'has_archive' => true,
            'menu_icon' => 'dashicons-portfolio',
            'supports' => array('title', 'editor', 'thumbnail'),
            // 'rewrite' => array('slug' => 'affiliates')
        );
        register_post_type('portfolios', $args);
    }

    add_action('init', 'magellano_post_type');

    function magellano_taxonomy()
    {
        $args = array(
            'labels' => array(
                'name' => 'Affiliates type',
                'singular_name' => 'Affiliate type'
            ),
            'hierarchical' => true,
            'public' => true,
        );
        register_taxonomy('affiliates_type', array('affiliates'), $args);

        $args = array(
            'labels' => array(
                'name' => 'Portfolios type',
                'singular_name' => 'Portfolio type'
            ),
            'hierarchical' => true,
            'public' => true,
        );
        register_taxonomy('portfolios_type', array('portfolios'), $args);
    }

    add_action('init', 'magellano_taxonomy');

    add_action('wp_ajax_enquiry', 'enquiry_form');
    // without privillege
    add_action('wp_ajax_nopriv_enquiry', 'enquiry_form');

    function enquiry_form()
    {
        if(!wp_verify_nonce($_POST['nonce'], 'ajax-nonce'))
        {
            wp_send_json_error('Nonce is incorrect', 401);
            die();
        }
        
        $formdata = [];
        wp_parse_str($_POST['enquiry'],  $formdata);

        // admin email
        $admin_email = get_option('admin_email');

        // Email headers
        $headers[] = 'Content-Type: text/html; charset=UTF-8';
        $headers[] = 'From:' . $admin_email;
        $headers[] = 'Reply-to:' . $formdata['email_contact'];

        // send to
        $send_to = $admin_email;
        
        // subject
        $subject = "Wordpress Email from " . $formdata['name_contact'];

        // message
        $message = '';

        foreach($formdata as $index => $fields)
        {
            $message .= '<strong>' . $index . '</strong>:' . $fields . '<br/>';
        }

        try{
            if(wp_mail($send_to, $subject, $message, $headers))
            {
                wp_send_json_success('Email sent');

            }
            else
            {
                wp_send_json_error('Email Error');
            }
        }catch(Exception $e){
            wp_send_json_error($e->getMessage());
        }
 
        
    }


    function wpb_tag_cloud() {
        $tags = get_tags();
        $args = array(
            'smallest'                  => 10,
            'largest'                   => 22,
            'unit'                      => 'px',
            'number'                    => 10,
            'format'                    => 'flat',
            'separator'                 => " ",
            'orderby'                   => 'count',
            'order'                     => 'DESC',
            'show_count'                => 1,
            'echo'                      => false
        ); 
          
        $tag_string = wp_generate_tag_cloud( $tags, $args );
          
        return $tag_string; 
          
    }
    // Add a shortcode so that we can use it in widgets, posts, and pages
    add_shortcode('wpb_popular_tags', 'wpb_tag_cloud'); 
        
    // Enable shortcode execution in text widget
    add_filter ('widget_text', 'do_shortcode');
?>