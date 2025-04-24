<?php

get_header();
$target_category = 'featured';

if (have_posts()) :
    while (have_posts()) : the_post();
    if (has_category($target_category)) :

        <style>
             .custom-single-post {
                max-width: 800px;
                margin: auto;
                padding: 20px;
                background: #fff;
                box-shadow: 0 3px 8px rgba(0, 0, 0, 0.1);
                border_radius: 8px;
             }
        </style>

        <article class="custom_single_post">
        <header>
        <h1><?php the_title(); ?></h1>
        </header>
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
            <?php the_post_thumbnail('large'); ?>
            </div>
            <?php endif; ?>

            <div class="post-content">
            <?php the_content(); ?>
            </div>
        </article>
<?php
        else:
            get_template_part('single');
        endif;
        endwhile;
    endif;
    get_footer();
?>

?>