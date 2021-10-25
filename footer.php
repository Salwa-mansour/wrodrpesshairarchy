
             </div><!-- #content  -->
                 

            <footer id="colophon" class="site-footer" role="contentinfo" >
               
            <?php 
                if( is_active_sidebar( 'footer-sidebar-1' ) ):
                dynamic_sidebar( 'footer-sidebar-1' ); 
                endif;
       
            ?>
                <a href="<?php echo esc_url(__('https://wordpress.org', 'wphierarchy'),'wordpress'); ?>">jj</a>
                <?php printf(  esc_html__( 'proudly powed by %s', 'wphierarchy'),
                'WordPress');  ?>
            </footer>
        </div><!--#page -->

     <?php wp_footer(); ?>

</body>
</html>