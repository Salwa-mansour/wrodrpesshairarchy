<?php get_header( '' ); ?>
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main content" >
 
            <?php  if ( have_posts() ) : while ( have_posts() ): the_post();  ?>
           
                <?php get_template_part( 'templet-parts/content','page' ); ?>

            <?php endwhile; ?> <?php else: ?>
            
                <?php get_template_part( 'templet-parts/content','none' ); ?>

            <?php endif; ?>

        <?php echo paginate_links(); ?>
        </main>
    </div>

   <?php get_sidebar(); ?> 


<?php get_footer(); ?> 