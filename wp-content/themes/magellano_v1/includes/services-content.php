
<div class="container margin_40_90">
    <div class="main_title version_2 mt-5">
        <span><em></em></span>
        <h2><?php wp_title(); ?></h2>
    </div>
    <div class="row">
        <?php
        $args = array('post_type' => 'services',
            'post_status' => 'publish',
            'posts_per_page' => -1, 
            'orderby' => 'title',
            'order' => 'ASC'
        );

        $loop = new WP_Query($args);
        if($loop->have_posts()): while($loop->have_posts()): $loop->the_post();
        ?>
            <div class="col-lg-4" data-cue="slideInUp">
                <div class="box_why">
                    <?php if(has_post_thumbnail()): ?>
                        <figure>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" width="512" height="512" class="img-fluid">
                        </figure>
                    <?php else: ?>
                        <p> No thumbnail available</p> 
                    <?php endif; ?> 
                    
                    <h3><?php the_title(); ?></h3>
                    <p class="lead"><?php the_content(); ?></p>
                </div>
            </div>
        <?php endwhile; else: endif; ?>
    </div>
</div>
<div class="container margin_90_60">
    <div class="main_title center">
        <span><em></em></span>
        <h2>Portfolio</h2>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
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
                    <div class="col-lg-4 col-md-6" data-cue="slideInUp">
                        <article class="blog">
                        <?php if(has_post_thumbnail()): ?>
                            <figure>
                                <a style="cursor: default;">
                                    <img src="<?php the_post_thumbnail_url(); ?>" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="lazy" width="800" height="533" style="height: 280px;">
                                </a>
                            </figure>
                        <?php else: ?>
                            <figure>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/item-blog-placeholder.png" data-src="<?php echo get_template_directory_uri(); ?>/img/blog-1.jpg" alt="<?php the_title(); ?>" class="lazy" width="800" height="533">
                            </figure>
                        <?php endif; ?> 
                            <div class="post_info">
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
                                <h2><?php the_title(); ?></h2>
                                <hr>
                                <small><?php the_content(); ?></small>
                            </div>
                        </article>
                        <!-- /article -->
                    </div>
                    <!-- /col -->
                <?php endwhile; else: endif; ?>
            </div>
            <!-- /row -->
        </div>
        <!-- /col -->

    </div>
    <!-- /row -->
</div>

