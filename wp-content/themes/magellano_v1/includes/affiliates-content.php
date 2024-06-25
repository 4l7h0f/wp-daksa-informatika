<div class="container margin_90_90">
    <div class="main_title version_2">
        <span><em></em></span>
        <h2><?php wp_title(); ?></h2>
    </div>
    <?php
    $custom_terms = get_terms('affiliates_type');
    foreach($custom_terms as $custom_term):
        wp_reset_query();
        $args = array('post_type' => 'affiliates',
            'tax_query' => array(
                array(
                    'taxonomy' => 'affiliates_type',
                    'field' => 'slug',
                    'terms' => $custom_term->slug,
                ),
            ),
            'post_status' => 'publish',
            'posts_per_page' => -1, 
            'orderby' => 'title',
            'order' => 'ASC'
        );

       
        $loop = new WP_Query($args);
        if($loop->have_posts()):
    ?>
            <br>
            <div class="main_title center">
                <span><em></em></span>
                <h4><?php echo substr($custom_term->name, 2); ?></h4>
            </div>
            <br>
        <?php endif; ?>
        <div class="owl-carousel owl-theme featured_carousel" data-cue="slideInUp">
            <?php while($loop->have_posts()) : $loop->the_post(); ?>
                
                    <div class="item">
                        <a class="box_topic" style="cursor: default;">
                            <img alt="<?php the_title(); ?>" src="<?php the_post_thumbnail_url(); ?>" width="300" height="300">
                            <h3></h3>
                            <p></p>
                        </a>
                    </div>
                    <!-- /item -->
                
            <?php endwhile; ?>
        </div>
    <?php endforeach; ?>
</div>