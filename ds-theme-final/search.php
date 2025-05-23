<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">

        <h3><?php esc_html_e( 'Search results for: ', 'wp_devs' )?>: <?php echo get_search_query(); ?></h3>

            <?php 

            get_search_form();

            while( have_posts() ):
                the_post();
                ?>
                <article id="post-<?php the_ID();?>" <?php post_class(); ?>>
                    
                    <header>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php if( 'post' == get_post_type() ): ?>
                        <div class="meta-info">
                            <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                            <p>Categories: <?php the_category( ' ' ); ?></p>
                            <p>Tags: <?php the_tags( '', ', ' ); ?></p>     
                        </div>
                        <?php endif; ?>
                    </header>
                    <div class="content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
                <?php
            endwhile;
            the_posts_pagination();
            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>