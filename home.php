<?php get_header(); ?>
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
					
												<h2>News</h2>	
												

												
						
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        <!--================Blog Area =================-->
        <section class="blog_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- start WP 'Loop' -->
												<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

												<!-- grab WP post title. -->
												<h1><?php the_title(); ?></h1>	
												<!-- grab WP post content. -->
												<?php the_content(); ?>

												<?php endwhile; else: ?>
												<p><?php _e('Sorry, this page does not exist.'); ?></p>
												<?php endif; ?>
                    </div>
                    <div class="col-lg-4">
											<?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
        
        
        <?php get_footer(); ?>

        