<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                <header class="entry-header">
                     <!-- <h1> </h1> -->
  <p>this is amilgage afk fjsdlea j</p>
                     <span class="dashicons dashicons-format-<?php echo get_post_format($post->ID) ?>"
                     ></span>

                     <?php the_title( '<h1>', '</h1>'); ?>

                     <div class="byline">
                        <?php esc_html_e('aouther:'); ?> <?php the_author(); ?>
                     </div>

                </header>
                <div class="entry-content">
                   <?php the_content(); ?>
                </div>
            </article>
            
            <?php comments_template(); ?>