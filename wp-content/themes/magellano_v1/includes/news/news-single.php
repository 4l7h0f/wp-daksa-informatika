<?php if(have_posts()): while(have_posts()): the_post(); ?>

    <div class="container margin_90_60">
        <div class="row">
            <div class="col-lg-9">
                <div class="singlepost">
                    <?php if(has_post_thumbnail()): ?>
                        <figure>
                            <img alt="<?php the_title(); ?>" class="img-fluid" src="<?php the_post_thumbnail_url(); ?>">
                        </figure>
                    <?php endif; ?>
                    <h1><?php the_title(); ?></h1>
                    <div class="postmeta">
                        <?php
                            $fname = get_the_author_meta('first_name');
                            $lname = get_the_author_meta('last_name');
                        ?>
                        <ul>
                            <li>
                                <?php
                                    $categories = get_the_category();
                                    if(has_category()):
                                        foreach($categories as $cat):
                                ?>
                                            <a href="<?php echo get_category_link($cat->term_id) ?>">
                                                <i class="bi bi-archive"></i>
                                                <?php echo $cat->name ?>
                                            </a>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                            </li>
                            <li>
                                <i class="bi bi-calendar"></i>
                                <?php echo get_the_date(); ?>
                            </li>
                            <li>
                                <i class="bi bi-person"></i>
                                <?php  echo $fname . ' ' . $lname ?>
                            </li>
                            <!-- <li><a href="#"><i class="bi bi-chat"></i> (14) Comments</a></li> -->
                        </ul>
                        <ul>
                            <li class="tags">
                                <?php
                                    $tags = get_the_tags();
                                    if(has_tag()):
                                        foreach($tags as $tag):
                                ?>
                                        <a href="<?php echo get_tag_link($tag->term_id) ?>">
                                            <?php echo $tag->name ?>
                                        </a>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                    <!-- /post meta -->
                    <div class="post-content">
                        <div class="dropcaps">
                            <p><?php the_content(); ?></p>
                        </div>
                        <p></p>
                    </div>
                    <!-- /post -->
                    <?php wp_link_pages(); ?>
                </div>
                <!-- /single-post -->

                <!-- <div id="comments">
                    <h5>Comments</h5>
                    <ul>
                        <li>
                            <div class="avatar">
                                <a href="#"><img src="img/avatar1.jpg" alt="">
                                </a>
                            </div>
                            <div class="comment_right clearfix">
                                <div class="comment_info">
                                    By <a href="#">Anna Smith</a><span>|</span>23 Oct. 2021<span>|</span><a href="#">Reply</a>
                                </div>
                                <p>
                                    Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                </p>
                            </div>
                            <ul class="replied-to">
                                <li>
                                    <div class="avatar">
                                        <a href="#"><img src="img/avatar4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="comment_right clearfix">
                                        <div class="comment_info">
                                            By <a href="#">Anna Smith</a><span>|</span>23 Oct. 2021<span>|</span><a href="#">Reply</a>
                                        </div>
                                        <p>
                                            Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                        </p>
                                        <p>
                                            Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
                                        </p>
                                    </div>
                                    <ul class="replied-to">
                                        <li>
                                            <div class="avatar">
                                                <a href="#"><img src="img/avatar6.jpg" alt="">
                                                </a>
                                            </div>
                                            <div class="comment_right clearfix">
                                                <div class="comment_info">
                                                    By <a href="#">Anna Smith</a><span>|</span>23 Oct. 2021<span>|</span><a href="#">Reply</a>
                                                </div>
                                                <p>
                                                    Nam cursus tellus quis magna porta adipiscing. Donec et eros leo, non pellentesque arcu. Curabitur vitae mi enim, at vestibulum magna. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Sed sit amet sem a urna rutrumeger fringilla. Nam vel enim ipsum, et congue ante.
                                                </p>
                                                <p>
                                                    Aenean iaculis sodales dui, non hendrerit lorem rhoncus ut. Pellentesque ullamcorper venenatis elit idaipiscingi Duis tellus neque, tincidunt eget pulvinar sit amet, rutrum nec urna. Suspendisse pretium laoreet elit vel ultricies. Maecenas ullamcorper ultricies rhoncus. Aliquam erat volutpat.
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="avatar">
                                <a href="#"><img src="img/avatar1.jpg" alt="">
                                </a>
                            </div>
                            <div class="comment_right clearfix">
                                <div class="comment_info">
                                    By <a href="#">Anna Smith</a><span>|</span>23 Oct. 2021<span>|</span><a href="#">Reply</a>
                                </div>
                                <p>
                                    Cursus tellus quis magna porta adipiscin
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>

                <hr> -->

                <!-- <h5>Leave a comment</h5>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name2" class="form-control" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="email" id="email2" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <div class="form-group">
                            <input type="text" name="email" id="website3" class="form-control" placeholder="Website">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control" name="comments" id="comments2" rows="6" placeholder="Comment"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" id="submit2" class="btn_1">Submit</button>
                </div> -->
            </div>
            <!-- /col -->
            <?php get_template_part('includes/news/news', 'widget'); ?>
            <!-- /aside -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->

<?php endwhile; else: endif; ?>