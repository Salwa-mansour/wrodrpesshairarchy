


         <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
               
               <header class="entry-header">
                     <!-- <h1> </h1> -->
                     <?php the_title( '<h1><a href=" ' . esc_url(get_permalink()). ' " >', '</a></h1>'); ?>
                </header>

                <div class="entry-content">
                <?php the_post_thumbnail(); ?>
                   <?php the_excerpt(); ?>
                </div>

         </article>
