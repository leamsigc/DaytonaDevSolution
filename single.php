<?php get_header();
    while(have_posts()){
        the_post();
    ?>
    <div class="wrapper">
        <div class="inner mg-0">
            <h1><?php the_title()?></h1>
            <hr>
            <?php the_content()?>
        </div>
    </div>
    <?php
    }

get_footer();?>