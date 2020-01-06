<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Conbusi WP
 */
?>

<!doctype html>
<html class="no-js" lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div class="header-top_area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-md-5 ">
                            <div class="header_left">
                                <p><?php echo esc_html( get_theme_mod( 'set_header_welcome', __( 'welcome message goes here', 'conbusi-wp' ) ) ); ?></p>
                            </div>
                        </div>
                        <div class="col-xl-7 col-md-7">
                            <div class="header_right d-flex">
                                <div class="short_contact_list">
                                    <ul>
                                        <li><a href="mailto:"> <i class="fa fa-envelope"></i> <?php echo esc_html( get_theme_mod( 'set_header_email', __( 'info@example.com', 'conbusi-wp' ) ) ); ?></a></li>
                                        <li><a href="tel:<?php echo esc_html( get_theme_mod( 'set_header_phone', __( '071-222-2928', 'conbusi-wp' ) ) ); ?>"> <i class="fa fa-phone"></i> <?php echo esc_html( get_theme_mod( 'set_header_phone', __( '071-222-2928', 'conbusi-wp' ) ) ); ?></a></li>
                                    </ul>
                                </div>
                                <div class="social_media_links">
                                    <a href="<?php echo esc_html( get_theme_mod( 'set_header_linkedin', __( 'linkedin.com/yourpage/', 'conbusi-wp' ) ) ); ?>">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                    <a href="<?php echo esc_html( get_theme_mod( 'set_header_facebook', __( 'facebook.com/yourpage/', 'conbusi-wp' ) ) ); ?>">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a href="<?php echo esc_html( get_theme_mod( 'set_header_twitter', __( 'twitter.com/yourpage/', 'conbusi-wp' ) ) ); ?>">
                                        <i class="fa fa-twitter-square"></i>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div id="sticky-header" class="main-header-area">
                <div class="container">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
								<?php if( has_custom_logo() ): ?>
									<?php the_custom_logo(); ?>
								<?php else: ?>
									<p class="site-title"><?php bloginfo( 'title' ); ?></p>
									<span><?php bloginfo( 'description' ); ?></span>
								<?php endif; ?>
							</a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu d-none d-lg-block">
                                    <?php
                                            $args = array(
                                                'theme_location' => 'conbusi_wp_main_menu',
                                                'container_class'      => 'nav',
                                                'menu_id'     => 'navigation',
                                            );

                                            wp_nav_menu($args)
                                        ?>
                                </div>
                            </div>
                            
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    
                                    <div class="book_btn d-none d-lg-block">
                                        <a href="<?php echo esc_html( get_theme_mod( 'set_header_btn_url', __( '', 'conbusi-wp' ) ) ); ?>"><?php echo esc_html( get_theme_mod( 'set_header_btn_text', __( '', 'conbusi-wp' ) ) ); ?></a>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    