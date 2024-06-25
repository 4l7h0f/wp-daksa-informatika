<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Magellano - NFT Marketplace Website Template by Ansonika">
    <meta name="author" content="Ansonika">
    <title><?php wp_title(); ?></title>

    <!-- FAVICONS-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body>

    <div id="preloader"><div data-loader="circle-side"></div></div>
    <!-- /Page Preload -->				
	<header class="header clearfix element_to_stick">
	    <div class="layer"></div><!-- Opacity Mask Menu Mobile -->
	    <div class="container">
	       <div class="logo">
	            <a href="<?php echo site_url(); ?>">
	                <img src="<?php echo get_template_directory_uri(); ?>/img/dbi/logo_DBI_new.png" alt="" width="68" height="35" class="dark">
	                <img src="<?php echo get_template_directory_uri(); ?>/img/dbi/logo_DBI_new.png" alt="" width="68" height="35" class="light">
	            </a>
	        </div>
			<ul class="top_menu">
				<li>
					<span class="color_mode_bt">
						<input id="theme_toggle" type="checkbox" name="theme_toggle"/>
						<label for="theme_toggle"></label>
					</span>
				</li>
			</ul>
	        
	        <!-- /top_menu -->
	        <a href="#0" class="open_close">
	            <i class="bi bi-list"></i><span>Menu</span>
	        </a>
	        <nav class="main-menu">
	            <div id="header_menu">
	                <a href="#0" class="open_close">
	                    <i class="bi bi-x"></i>
	                </a>
	                <a href="<?php echo site_url(); ?>" class="logo_menu">
	                	<img src="<?php echo get_template_directory_uri(); ?>/img/dbi/logo_DBI_new.png" data-src="<?php echo get_template_directory_uri(); ?>/img/dbi/logo_DBI_new.png" alt="" width="120" height="30" class="dark lazy">
	                	<img src="<?php echo get_template_directory_uri(); ?>/img/logo-placeholder.png" data-src="<?php echo get_template_directory_uri(); ?>/img/dbi/logo_DBI_new.png" alt="" width="120" height="30" class="light lazy">
	                </a>
	            </div>
                <?php 
                    wp_nav_menu( 
                        array(
                            'theme_location' => 'primary',
                            'menu_class' => 'show-submenu'
                        )
                    );
                ?>
	        </nav>
			
	    </div>
	</header>
	<!-- /header -->