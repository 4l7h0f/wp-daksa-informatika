<div class="row">
    <div class="col-lg-9">
        <div class="row">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <div class="col-md-6">
                    <article class="blog">
                        <figure>
                            <a href="<?php the_permalink(); ?>">
                                <?php if(has_post_thumbnail()): ?>
                                    <img src="<?php the_post_thumbnail_url(); ?>" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="lazy" width="800" height="533">                                    
                                <?php endif; ?> 
                            </a>
                        </figure>
                        <div class="post_info">
                            <small>
                                <?php
                                $categories = get_the_category();
                                if(has_category()):
                                    foreach($categories as $cat):
                                ?>
                                        <a href="<?php echo get_category_link($cat->term_id) ?>">
                                            <i class="bi bi-archive"></i>
                                            <?php echo $cat->name . " - " . get_the_date(); ?>
                                        </a>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </small>
                            <h2>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <p><?php the_excerpt(); ?></p>
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/avatar-placeholder.png" data-src="<?php echo get_template_directory_uri(); ?>/img/avatar2.jpg" class="lazy" alt="" width="68" height="68">
                                    </div> 
                                    <?php
                                        $fname = get_the_author_meta('first_name');
                                        $lname = get_the_author_meta('last_name');
                                        echo $fname . ' ' . $lname;
                                    ?>
                                </li>
                                <li>
                                    <!-- <i class="bi bi-chat"></i>20 -->
                                </li>
                            </ul>
                        </div>
                    </article>
                    <!-- /article -->
                </div>
                <!-- /col -->
            <?php endwhile; else: ?>
                <div class="col-md-12">
                    <article class="blog">
                        <div class="post_info">
                            <?php echo "There are no results for '" . get_search_query() . "'" ?>
                        </div>
                    </article>
                </div>
            <?php endif; ?>
        </div>
        <!-- /row -->

        <div class="pagination_fg">
            <?php
                global $wp_query;
                $big = 9999999999;
                echo paginate_links( array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $wp_query->max_num_pages
                ));
            ?>
        </div>
        <!-- /pagination -->
    </div>
    <!-- /col -->
    <?php get_template_part('includes/news/news', 'widget'); ?>
    <!-- /aside -->
</div>
<!-- /row -->
