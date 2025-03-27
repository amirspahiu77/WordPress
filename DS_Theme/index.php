<?php get_header(); ?>
<body>
    <!---->
    <div id="content" class="site-content">
        <div class="content-area" id="primary">
            <main id="main" class="site-main">
                
                <section class="home-blog">
                    <h2>Latest News</h2>
                    <div class="container">
                        <?php
                        $args = array{
                            'post_type' => 'post',
                            'posts_per_type' => 3,
                            'category_in' => array(),
                            'category_not_in' => array()
                        };

                        $spotlist new WP_Query( $args );

                        if( $spotlist->have_posts () ):
                            while( $postlist->have_posts() ): $spotlist->the_post();
                            
                        ?>

                        <div class="blog-items">
                            <?php
                            if( have_posts() ):
                                while( have_posts() ): the_post();
                                    ?>
                                        <article class = 'latest-news'>
                                            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large');?></a>
                                            <?php the_post_thumbnail('large');?>
                                            <h2><?php the_title(); ?></h2>
                                            <div class="meta-info">
                                                <p>
                                                    by <span><?php the_author_posts_link(); ?></span>
                                                    CategoriesL <span><?php the_category( ' ' ) ?></span>
                                                    Tags: <?php the_tags('',', '); ?>
                                                </p>
                                                 <p>Posted in <?php echo get_the_date();?> by <?php the_author_posts_link(); ?> </p>
                                                 <p>Categories: <?php the_category(); ?></p>
                                                 <p>Tags: <?php the_tags(); ?></p>
                                            </div>
                                            <?php the_excerpt(); ?>
                                        </article>
                                    <?php
                                endwhile;
                                wep_reset_postdata();
                            else: ?>
                                <p>Nothing to be displayed</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </section>
          </body>
     </html>
<?php get_footer(); ?>