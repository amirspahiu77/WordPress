<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                <?php
                $hero_title = get_theme_mod('set_hero_title', 'Please, type some title)');
                $hero_subtitle = get_theme_mod('set_hero_subtitle', 'Please, type some subtitle)');
                $hero_title = get_theme_mod('set_hero_title', 'Please, type some title)');
                $hero_title = get_theme_mod('set_hero_title', 'Please, type some title)');
                $hero_title = get_theme_mod('set_hero_title', 'Please, type some title)');
                $hero_title = get_theme_mod('set_hero_title', 'Please, type some title)');
                ?>
                    <section class="hero" style = "background-image: url('')">
                        <section class="hero">
                            <div class="overlay" style="min-heightL 800px">
                                <div class="container">
                                    <div class="hero-items">
                                        <h1>Lorem, ipsum dolor.</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                                        <a href="#">Learn More</a>
                                    </div>
                                </div>

                            </div>
                        </section>
                    </section>
                    <section class="services">
                        <h2><?php esc_html_e( 'Services', 'wp-devs' )?></h2>
                        <div class="container">
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-1' )){
                                        dynamic_sidebar( 'services-1' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-2' )){
                                        dynamic_sidebar( 'services-2' );
                                    }
                                ?>
                            </div>
                            <div class="services-item">
                                <?php 
                                    if( is_active_sidebar( 'services-3' )){
                                        dynamic_sidebar( 'services-3' );
                                    }
                                ?>
                            </div>
                        </div>
                    </section>
                    <section class="home-blog">
                        <h2><?php esc_html_e( 'Latest News', 'wp-devs' )?></h2>
                        <div class="container">
                            <?php 

                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 5,
                                'category__in'  => array( 1 ),
                                'category__not_in' => array( 10 )
                            );

                            $postlist = new WP_Query( $args );

                                if( $postlist->have_posts() ):
                                    while( $postlist->have_posts() ) : $postlist->the_post();
                                    ?>
                                    <article class="latest-news">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="meta-info">
                                        <p>
                                            by <span><?php the_author_posts_link(); ?></span> 
                                            Categories: <span><?php the_category( ' ' ); ?></span>
                                            Tags: <?php the_tags( '', ', ' ); ?>
                                        </p>
                                        <p><span><?php echo get_the_date(); ?></p>
                                        </div>
                                        <?php the_excerpt(); ?>
                                    </article>
                                    <?php
                                    endwhile;
                                    wp_reset_postdata();
                                else: ?>
                                    <p><?php esc_html_e( 'Nothing yet to be displayed!', 'wp-devs' )?></p>
                            <?php endif; ?>                                
                        </div>
                    </section>
                </main>
            </div>
        </div>
<?php get_footer(); ?>