<?php get_header(); ?>
<main>
    <?php get_template_part('includes/header', 'content'); ?>
    <div class="container margin_90_60">
        <div class="main_title center">
            <span><em></em></span>
            <h4>Search Results for '<?php echo get_search_query(); ?>'</h4>
        </div>
        
        <?php get_template_part('includes/news/news', 'search'); ?>
    </div>
    
</main>
<!-- /main -->
<?php get_footer(); ?>