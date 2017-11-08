<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="wrap">
                <div style = "text-align:center">
                    <p id = "socialTitle">Follow Us</p>
                    <a href = "https://www.facebook.com" target = "_blank"><i class="fa faf fa-facebook-official" aria-hidden="true"></i></a>
                    <a href = "https://www.twitter.com" target = "_blank"><i class="fa faf fa-twitter-square" aria-hidden="true"></i></a>
                    <a href = "https://www.instagram.com" target = "_blank"><i class="fa faf fa-instagram" aria-hidden="true"></i></a>
                    <a href = "https://www.pinterest.com" target = "_blank"> <i class="fa faf fa-pinterest-square" aria-hidden="true"></i></a>
                </div>
				<?php
				get_template_part( 'template-parts/footer/footer', 'widgets' );

				if ( has_nav_menu( 'social' ) ) : ?>
					<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentyseventeen' ); ?>">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'social',
								'menu_class'     => 'social-links-menu',
								'depth'          => 1,
								'link_before'    => '<span class="screen-reader-text">',
								'link_after'     => '</span>' . twentyseventeen_get_svg( array( 'icon' => 'chain' ) ),
							) );
						?>
					</nav><!-- .social-navigation -->
				<?php endif;

				get_template_part( 'template-parts/footer/site', 'info' );
				?>
			</div><!-- .wrap -->
		</footer><!-- #colophon -->
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
