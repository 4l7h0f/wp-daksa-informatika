<div class="container margin_60_90">
    <div class="main_title center">
        <span><em></em></span>
        <h2>
            We are committed towards our goal of delivering the best services
        </h2>
    </div>
    <div class="row">
        
        <?php
            $args = array('post_type' => 'services',
                'post_status' => 'publish',
                'posts_per_page' => 3, 
                'orderby' => 'title',
                'order' => 'ASC'
            );

            $loop = new WP_Query($args);
            if($loop->have_posts()): while($loop->have_posts()): $loop->the_post();
        ?>
            <div class="col-lg-4 col-md-6" data-cue="slideInUp">
                <a class="box_topic" style="cursor: default;">
                    <span><i class="<?php the_field('icon'); ?>"></i></span>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_excerpt(); ?></p>
                </a>
            </div>
        <?php endwhile; else: endif; ?>
        <p class="text-center mt-4" data-cue="slideInUp">
            <a href="<?php echo site_url(); ?>/services/" class="btn_1 medium pulse_bt">See All Services</a>
        </p>
        
    </div>
</div>
<div class="bg_gray">
    <div class="container margin_120_90">
        <div class="main_title version_2">
            <span><em></em></span>
            <h2>Latest News</h2>
            <a href="<?php echo site_url(); ?>/news/">View All <i class="bi bi-arrow-right"></i></a>
        </div>
        <!-- /main_title -->

        <div class="row author_list">
            <?php
            // Define our WP Query Parameters
            $the_query = new WP_Query( 'posts_per_page=9' ); 
            $c = 1;
            // Start our WP Query
            while ($the_query -> have_posts()) : $the_query -> the_post();
            // Display the Post Title with Hyperlink
            ?>
            <div class="col-lg-4 col-md-6" data-cue="slideInUp">
                <a href="<?php the_permalink() ?>" class="author">
                    <strong><?php echo $c++ ?></strong>
                    <div class="author_thumb veryfied">
                        <?php if(has_post_thumbnail()): ?>
                            <figure>
                                <img src="<?php the_post_thumbnail_url(); ?>" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="lazy" width="100" height="100">
                            </figure>
                        <?php else: ?>
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/avatar-placeholder.png" data-src="<?php echo get_template_directory_uri(); ?>/img/avatar4.jpg" alt="" class="lazy" width="100" height="100">
                            </figure>
                        <?php endif; ?> 
                    </div>
                    <div>
                        <h6><?php the_title(); ?></h6>
                        <?php
                        $categories = get_the_category();
                        if(has_category()):
                            foreach($categories as $cat):
                        ?>
                                <span><?php echo $cat->name . " - " . get_the_date(); ?></span>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <!-- <span>3.2 ETH</span> -->
                    </div>
                </a>
            </div>
            <?php
            // Repeat the process and reset once it hits the limit
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<div class="container margin_60_90">

<!-- /widget -->
<?php if(is_active_sidebar('homepage-widget')): ?>
    <?php dynamic_sidebar('homepage-widget'); ?>
<?php endif; ?>
<!-- /widget -->
</div>