<?php if(have_posts()): while(have_posts()): the_post(); ?>
    <div class="container margin_120_90">
        <div class="main_title version_2">
            <span><em></em></span>
            <h2><?php the_title(); ?></h2>
            <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
            <a href="#0">View All <i class="bi bi-arrow-right"></i></a>
        </div>
        <!-- /main_title -->

        <div class="row">
            <div class="col-lg-4" data-cue="slideInUp">
                <article class="blog">
                    <figure>
                        <a href="blog-post.html"><img src="img/item-blog-placeholder.png" data-src="img/blog-5.jpg" alt="" class="lazy" width="800" height="533">
                        </a>
                    </figure>
                    <div class="post_info">
                        <small>Category - 20 Nov. 2021</small>
                        <h2><a href="blog-post.html">Ea exerci option hendrerit</a></h2>
                        <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi, in eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                        <ul>
                            <li>
                                <div class="thumb"><img src="img/avatar-placeholder.png" data-src="img/avatar2.jpg" class="lazy" alt="" width="68" height="68"></div> Admin
                            </li>
                            <li><i class="bi bi-chat"></i>20</li>
                        </ul>
                    </div>
                </article>
                <!-- /article -->
            </div>
            <div class="col-lg-4" data-cue="slideInUp">
                <article class="blog">
                    <figure>
                        <a href="blog-post.html"><img src="img/item-blog-placeholder.png" data-src="img/blog-4.jpg" alt="" class="lazy" width="800" height="533">
                        </a>
                    </figure>
                    <div class="post_info">
                        <small>Category - 20 Nov. 2021</small>
                        <h2><a href="blog-post.html">At usu sale dolorum offendit</a></h2>
                        <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi, in eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                        <ul>
                            <li>
                                <div class="thumb"><img src="img/avatar-placeholder.png" data-src="img/avatar2.jpg" class="lazy" alt="" width="68" height="68"></div> Admin
                            </li>
                            <li><i class="bi bi-chat"></i>20</li>
                        </ul>
                    </div>
                </article>
                <!-- /article -->
            </div>
            <div class="col-lg-4" data-cue="slideInUp">
                <article class="blog">
                    <figure>
                        <a href="blog-post.html"><img src="img/item-blog-placeholder.png" data-src="img/blog-6.jpg" alt="" class="lazy" width="800" height="533">
                        </a>
                    </figure>
                    <div class="post_info">
                        <small>Category - 20 Nov. 2021</small>
                        <h2><a href="blog-post.html">Iusto nominavi petentium in</a></h2>
                        <p>Quodsi sanctus pro eu, ne audire scripserit quo. Vel an enim offendit salutandi, in eos quod omnes epicurei, ex veri qualisque scriptorem mei.</p>
                        <ul>
                            <li>
                                <div class="thumb"><img src="img/avatar-placeholder.png" data-src="img/avatar2.jpg" class="lazy" alt="" width="68" height="68"></div> Admin
                            </li>
                            <li><i class="bi bi-chat"></i>20</li>
                        </ul>
                    </div>
                </article>
                <!-- /article -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
    <?php the_content(); ?>
<?php endwhile; else; endif; ?>