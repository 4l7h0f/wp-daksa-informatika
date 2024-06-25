<?php if(have_posts()): while(have_posts()): the_post(); ?>

    <div class="container margin_40_90">
        <div class="main_title version_2 mt-5">
            <span><em></em></span>
            <h2><?php the_title(); ?></h2>
        </div>
        <div class="main_info" data-cue="slideInUp">
            <p><?php the_content(); ?></p>
        </div>
    </div>
                            
<?php endwhile; else: endif; ?>