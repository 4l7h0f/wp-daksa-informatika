<div class="container margin_90_90">
    <div class="main_title center">
        <span><em></em></span>
        <h2>Our Prestigious clients</h2>
    </div>
    <!-- /main_title -->

    <div class="owl-carousel owl-theme featured_carousel" data-cue="slideInUp">
        <?php
            $args = array('post_type' => 'portfolios',
            
                'post_status' => 'publish',
                'posts_per_page' => -1, 
                'orderby' => 'tahun',
                'order' => 'DESC'
            );

            $loop = new WP_Query($args);
            if($loop->have_posts()): while($loop->have_posts()): $loop->the_post();
        ?>
        <div class="item">
            <a class="box_topic" style="cursor: default;">
                <?php if(has_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url(); ?>" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="lazy" width="350" height="350">
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/item-blog-placeholder.png" data-src="<?php echo get_template_directory_uri(); ?>/img/blog-1.jpg" alt="<?php the_title(); ?>" class="lazy" width="800" height="533">
                <?php endif; ?>
                <br>
                <h3><?php the_title(); ?></h3>
                <?php
                $categories = get_the_terms( get_the_ID(), 'portfolios_type');
                if($categories && ! is_wp_error( $categories )):
                    foreach($categories as $cat):
                ?>
                        <small>
                            <?php echo $cat->name . " - " ?> <em><?php the_field('tahun'); ?></em>
                        </small>
                    <?php endforeach; ?>
                <?php endif; ?>                
            </a>
        </div>
        <?php endwhile; else: endif; ?>
        <!-- /item -->
    </div>
    <!-- /carousel -->
    <p class="text-center mt-4" data-cue="slideInUp">
        <a href="<?php echo site_url(); ?>/services/" class="btn_1 medium pulse_bt">See All Services</a>
    </p>
</div>
