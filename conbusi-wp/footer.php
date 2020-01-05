<!-- footer start -->
  <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    
                       <?php if( is_active_sidebar( 'conbusi-wp-sidebar-footer1' ) ): ?>
							<div class="col-xl-3 col-md-6 col-lg-3">
                                <?php dynamic_sidebar( 'conbusi-wp-sidebar-footer1' ); ?>
                            </div>
                        <?php endif; ?>

                        <?php if( is_active_sidebar( 'conbusi-wp-sidebar-footer2' ) ): ?>
							<div class="col-xl-2 col-md-6 col-lg-3">
                                <?php dynamic_sidebar( 'conbusi-wp-sidebar-footer2' ); ?>
                            </div>
                        <?php endif; ?>

                        <?php if( is_active_sidebar( 'conbusi-wp-sidebar-footer3' ) ): ?>
							<div class="col-xl-2 col-md-6 col-lg-2">
                                <?php dynamic_sidebar( 'conbusi-wp-sidebar-footer3' ); ?>
                            </div>
                        <?php endif; ?>

                        <?php if( is_active_sidebar( 'conbusi-wp-sidebar-footer4' ) ): ?>
							<div class="col-xl-4 col-md-6 col-lg-4">
                                <?php dynamic_sidebar( 'conbusi-wp-sidebar-footer4' ); ?>
                            </div>
                        <?php endif; ?>


				</div>
                   
                 
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; <?php echo esc_html( get_theme_mod( 'set_copyright', __( 'All Rights Reserved', 'conbusi-wp' ) ) ); ?> | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> Themeby <a target="_blank" href="https://95media.co.uk" rel="no-follow">95media</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->
<?php wp_footer();?>
</body>
</html>