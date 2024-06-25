<aside class="col-lg-3">
    <div class="widget search_blog">
        <div class="form-group">
            <?php get_search_form(); ?>
        </div>
    </div>
    <div class="widget">
        <div class="widget-title first">
            <h4>Latest News</h4>
        </div>
        <ul class="comments-list">      
            <?php
            // Define our WP Query Parameters
            $the_query = new WP_Query( 'posts_per_page=5' ); 
            // Start our WP Query
            while ($the_query -> have_posts()) : $the_query -> the_post();
            // Display the Post Title with Hyperlink
            ?>
                <li>
                    <div class="alignleft">
                        <?php if(has_post_thumbnail()): ?>
                            <a href="<?php the_permalink() ?>">
                                <img src="<?php the_post_thumbnail_url(); ?>" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">               
                            </a>
                        <?php else: ?>
                            <p>no thumbnail available</p>
                        <?php endif; ?> 
                    </div>
                    <?php
                    $categories = get_the_category();
                    if(has_category()):
                        foreach($categories as $cat):
                    ?>
                            <small><?php echo $cat->name . " - " . get_the_date(); ?></small>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    
                    <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                </li>
            <?php
            // Repeat the process and reset once it hits the limit
            endwhile;
            wp_reset_postdata();
            ?>
        </ul>
    </div>
    <!-- /widget -->
    <?php if(is_active_sidebar('news-widget')): ?>
        <?php dynamic_sidebar('news-widget'); ?>
    <?php endif; ?>
    <!-- /widget -->
</aside>
